<?php

/**
 * depenses actions.
 *
 * @package    sallesport
 * @subpackage depenses
 * @author     Your name here
 */
class depensesActions extends sfActions {

    public function executeIndex(sfWebRequest $request) {
        $this->tblDepensess = tblDepensesQuery::create()->find();
    }

    public function executeNew(sfWebRequest $request) {
        $this->form = new tblDepensesForm();
    }

    public function executeCreate(sfWebRequest $request) {
        $this->forward404Unless($request->isMethod(sfRequest::POST));

        $this->form = new tblDepensesForm();

        $this->processForm($request, $this->form);

        $this->setTemplate('new');
    }

    public function executeEdit(sfWebRequest $request) {
        $tblDepenses = tblDepensesQuery::create()->findPk($request->getParameter('id_depenses'));
        $this->forward404Unless($tblDepenses, sprintf('Object tblDepenses does not exist (%s).', $request->getParameter('id_depenses')));
        $this->form = new tblDepensesForm($tblDepenses);
    }

    public function executeUpdate(sfWebRequest $request) {
        $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
        $tblDepenses = tblDepensesQuery::create()->findPk($request->getParameter('id_depenses'));
        $this->forward404Unless($tblDepenses, sprintf('Object tblDepenses does not exist (%s).', $request->getParameter('id_depenses')));
        $this->form = new tblDepensesForm($tblDepenses);

        $this->processForm($request, $this->form);

        $this->setTemplate('edit');
    }

    public function executeDelete(sfWebRequest $request) {
        $request->checkCSRFProtection();

        $tblDepenses = tblDepensesQuery::create()->findPk($request->getParameter('id_depenses'));
        $this->forward404Unless($tblDepenses, sprintf('Object tblDepenses does not exist (%s).', $request->getParameter('id_depenses')));
        $tblDepenses->delete();
        $this->getUser()->setFlash('notice', 'Dépense enregistrée.');
        $this->redirect('depenses/listeDepenses');
//        $this->redirect('depenses/index');
    }

    protected function processForm(sfWebRequest $request, sfForm $form) {
        $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
        if ($form->isValid()) {
            $tblDepenses = $form->save();
            $this->getUser()->setFlash('notice', 'Dépense enregistrée.');
            $this->redirect('depenses/listeDepenses');
//            $this->redirect('depenses/edit?id_depenses=' . $tblDepenses->getIdDepenses());
        }
    }

    public function executeListeDepenses(sfWebRequest $request) {
        $sf_user = $this->getUser();
        $this->formFilter = new TblDepensesFormFilter(null, array('sf_user' => $sf_user), false);
        $this->formFilter->bind($request->isMethod("post") ? $request->getParameter($this->formFilter->getName()) : $sf_user->getAttribute("dataTableFilterDepense", array()));

        if ($this->formFilter->isValid()) {
            $sf_user->setAttribute("dataTableFilterDepense", $this->formFilter->getValues());
        }
    }

    public function executeListeDesDepensesAjax(sfWebRequest $request) {

        $sf_user = $this->getUser();
        $data = array();

        $formFilter = new TblDepensesFormFilter();

        $tblDepenses = TblDepensesQuery::create()
                ->joinRefDepenses()
                ->mergeWith($formFilter->buildCriteria($sf_user->getAttribute("dataTableFilterDepense", array())))
                ->orderByDatatable($request->getParameter("iSortCol_0"), $request->getParameter("sSortDir_0", Criteria::ASC))
                ->filterByDatatable($request->getParameter("sSearch"))
                ->paginate(($request->getParameter('iDisplayStart') / $request->getParameter('iDisplayLength')) + 1, $request->getParameter("iDisplayLength"));

        foreach ($tblDepenses as $tblDepense) /* @var $tblDepenses TblDepenses */ {
            $data[] = $tblDepense->toArrayString();
        }
        $nb = $tblDepenses->count();

        return $this->renderText(json_encode(array("sEcho" => $request->getParameter("sEcho") + 1,
                    "iTotalDisplayRecords" => $nb,
                    "aaData" => $data)));
    }

    public function executeAlertes(sfWebRequest $request) {
//        $this->tblDepensess = tblDepensesQuery::create()->find();
    }

    public function executeListeDesDepensesNonPayesAjax(sfWebRequest $request) {

        $sf_user = $this->getUser();
        $data = array();

        $formFilter = new TblDepensesFormFilter();

        $tblDepenses = TblDepensesQuery::create()
                ->filterByEtatPaiement(FALSE)
                ->mergeWith($formFilter->buildCriteria($sf_user->getAttribute("dataTableFilterDepense", array())))
                ->orderByDatatable($request->getParameter("iSortCol_0"), $request->getParameter("sSortDir_0", Criteria::ASC))
//                ->filterByDatatable($request->getParameter("sSearch"))
                ->paginate(($request->getParameter('iDisplayStart') / $request->getParameter('iDisplayLength')) + 1, $request->getParameter("iDisplayLength"));

        foreach ($tblDepenses as $tblDepense) /* @var $tblDepenses TblDepenses */ {
            $data[] = $tblDepense->toArrayString();
        }
        $nb = $tblDepenses->count();

        return $this->renderText(json_encode(array("sEcho" => $request->getParameter("sEcho") + 1,
                    "iTotalDisplayRecords" => $nb,
                    "aaData" => $data)));
    }

}
