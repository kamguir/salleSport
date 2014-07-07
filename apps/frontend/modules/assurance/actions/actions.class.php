<?php

/**
 * assurance actions.
 *
 * @package    sallesport
 * @subpackage assurance
 * @author     Your name here
 */
class assuranceActions extends sfActions {

    public function executeIndex(sfWebRequest $request) {
        $this->tblAssurances = tblAssuranceQuery::create()->find();
    }

    public function executeNew(sfWebRequest $request) {
        $this->form = new tblAssuranceForm();
    }

    public function executeCreate(sfWebRequest $request) {
        $this->forward404Unless($request->isMethod(sfRequest::POST));

        $this->form = new tblAssuranceForm();

        $this->processForm($request, $this->form);

        $this->setTemplate('new');
    }

    public function executeEdit(sfWebRequest $request) {
        $tblAssurance = tblAssuranceQuery::create()->findPk($request->getParameter('assurance_id'));
        $this->forward404Unless($tblAssurance, sprintf('Object tblAssurance does not exist (%s).', $request->getParameter('assurance_id')));
        $this->form = new tblAssuranceForm($tblAssurance);
    }

    public function executeUpdate(sfWebRequest $request) {
        $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
        $tblAssurance = tblAssuranceQuery::create()->findPk($request->getParameter('assurance_id'));
        $this->forward404Unless($tblAssurance, sprintf('Object tblAssurance does not exist (%s).', $request->getParameter('assurance_id')));
        $this->form = new tblAssuranceForm($tblAssurance);

        $this->processForm($request, $this->form);

        $this->setTemplate('edit');
    }

    public function executeDelete(sfWebRequest $request) {
        $request->checkCSRFProtection();

        $tblAssurance = tblAssuranceQuery::create()->findPk($request->getParameter('assurance_id'));
        $this->forward404Unless($tblAssurance, sprintf('Object tblAssurance does not exist (%s).', $request->getParameter('assurance_id')));
        $tblAssurance->delete();
        $this->getUser()->setFlash('notice', 'Assurance Supprimée.');
        $this->redirect('assurance/listeAssurances');
    }

    protected function processForm(sfWebRequest $request, sfForm $form) {
        $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
        if ($form->isValid()) {
            $tblAssurance = $form->save();
            $this->getUser()->setFlash('notice', 'Assurance enregistrée.');
            $this->redirect('assurance/listeAssurances');
//      $this->redirect('assurance/edit?assurance_id='.$tblAssurance->getAssuranceId());
        }
    }

    public function executeListeAssurances(sfWebRequest $request) {
        $sf_user = $this->getUser();
        $this->formFilter = new TblAssuranceFormFilter(null, array('sf_user' => $sf_user), false);
        $this->formFilter->bind($request->isMethod("post") ? $request->getParameter($this->formFilter->getName()) : $sf_user->getAttribute("dataTableFilterAssurance", array()));

        if ($this->formFilter->isValid()) {
            $sf_user->setAttribute("dataTableFilterAssurance", $this->formFilter->getValues());
        }
    }

    public function executeListeDesAssurancesAjax(sfWebRequest $request) {

        $sf_user = $this->getUser();
        $data = array();

        $formFilter = new TblAssuranceFormFilter();

        $assurances = TblAssuranceQuery::create()
                ->useTblAdherentQuery()
                ->endUse()
                ->mergeWith($formFilter->buildCriteria($sf_user->getAttribute("dataTableFilterAssurance", array())))
                ->orderByDatatable($request->getParameter("iSortCol_0"), $request->getParameter("sSortDir_0", Criteria::ASC))
                ->filterByDatatable($request->getParameter("sSearch"))
                ->paginate(($request->getParameter('iDisplayStart') / $request->getParameter('iDisplayLength')) + 1, $request->getParameter("iDisplayLength"));

        foreach ($assurances as $assurance) /* @var $assurances TblAssurance */ {
            $data[] = $assurance->toArrayString();
        }
        $nb = $assurances->count();

        return $this->renderText(json_encode(array("sEcho" => $request->getParameter("sEcho") + 1,
//                    "iTotalRecords" => $nbT,
                    "iTotalDisplayRecords" => $nb,
                    "aaData" => $data)));
    }

    public function executePrixByTypeAssuranceAjax(sfWebRequest $request) {
        $this->assurance_id = $request->getParameter('assurance_id');
        $this->typeAssurance = RefAssuranceQuery::create()
                ->filterByAssuranceId($this->assurance_id)
                ->findOne();
        $this->form = new TblAssuranceForm(null, array('objTypeAssurance' => $this->typeAssurance));
        if ($request->isXmlHttpRequest()) {
            return $this->renderPartial('assurance/frmPrixAssurance', array('form' => $this->form));
        }
    }

}
