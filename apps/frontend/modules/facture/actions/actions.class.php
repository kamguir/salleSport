<?php

/**
 * facture actions.
 *
 * @package    sallesport
 * @subpackage facture
 * @author     Your name here
 */
class factureActions extends sfActions {

    public function executeIndex(sfWebRequest $request) {
        $this->tblFactures = tblFactureQuery::create()->find();
    }

    public function executeNew(sfWebRequest $request) {
        $this->form = new tblFactureForm();
    }

    public function executeCreate(sfWebRequest $request) {
        $this->forward404Unless($request->isMethod(sfRequest::POST));

        $this->form = new tblFactureForm();

        $this->processForm($request, $this->form);

        $this->setTemplate('new');
    }

    public function executeEdit(sfWebRequest $request) {
        $tblFacture = tblFactureQuery::create()->findPk($request->getParameter('id_facture'));
        $this->forward404Unless($tblFacture, sprintf('Object tblFacture does not exist (%s).', $request->getParameter('id_facture')));
        $this->form = new tblFactureForm($tblFacture);
    }

    public function executeUpdate(sfWebRequest $request) {
        $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
        $tblFacture = tblFactureQuery::create()->findPk($request->getParameter('id_facture'));
        $this->forward404Unless($tblFacture, sprintf('Object tblFacture does not exist (%s).', $request->getParameter('id_facture')));
        $this->form = new tblFactureForm($tblFacture);

        $this->processForm($request, $this->form);

        $this->setTemplate('edit');
    }

    public function executeDelete(sfWebRequest $request) {
        $request->checkCSRFProtection();

        $tblFacture = tblFactureQuery::create()->findPk($request->getParameter('id_facture'));
        $this->forward404Unless($tblFacture, sprintf('Object tblFacture does not exist (%s).', $request->getParameter('id_facture')));
        $tblFacture->delete();
        $this->getUser()->setFlash('notice', 'Facture enregistrée.');
        $this->redirect('facture/listeFactures');
    }

    protected function processForm(sfWebRequest $request, sfForm $form) {
        $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
        if ($form->isValid()) {
            $tblFacture = $form->save();
            $this->getUser()->setFlash('notice', 'Facture enregistrée.');
            $this->redirect('facture/listeFactures');
        }
    }

    public function executeListeFactures(sfWebRequest $request) {
        $sf_user = $this->getUser();
        $this->formFilter = new TblFactureFormFilter(null, array('sf_user' => $sf_user), false);
        $this->formFilter->bind($request->isMethod("post") ? $request->getParameter($this->formFilter->getName()) : $sf_user->getAttribute("dataTableFilterFacture", array()));

        if ($this->formFilter->isValid()) {
            $sf_user->setAttribute("dataTableFilterFacture", $this->formFilter->getValues());
        }
    }

    public function executeListeDesFacturesAjax(sfWebRequest $request) {

        $sf_user = $this->getUser();
        $data = array();

        $formFilter = new TblFactureFormFilter();

        $tblFactures = TblFactureQuery::create()
                ->useTblAdherentQuery()
                ->useRefTypeSportQuery()
                ->endUse()
                ->endUse()
                ->mergeWith($formFilter->buildCriteria($sf_user->getAttribute("dataTableFilterFacture", array())))
                ->orderByDatatable($request->getParameter("iSortCol_0"), $request->getParameter("sSortDir_0", Criteria::ASC))
                ->filterByDatatable($request->getParameter("sSearch"))
                ->paginate(($request->getParameter('iDisplayStart') / $request->getParameter('iDisplayLength')) + 1, $request->getParameter("iDisplayLength"));

        foreach ($tblFactures as $tblFacture) /* @var $tblFactures TblFacture */ {
            $data[] = $tblFacture->toArrayString();
        }
        $nb = $tblFactures->count();

        return $this->renderText(json_encode(array("sEcho" => $request->getParameter("sEcho") + 1,
//                    "iTotalRecords" => $nbT,
                    "iTotalDisplayRecords" => $nb,
                    "aaData" => $data)));
    }

    public function executeListeDesFacturesNonPayesAjax(sfWebRequest $request) {

        $sf_user = $this->getUser();
        $data = array();

        $formFilter = new TblFactureFormFilter();

        $tblFactures = TblFactureQuery::create()
                ->filterByEtatPaiement(FALSE)
                ->mergeWith($formFilter->buildCriteria($sf_user->getAttribute("dataTableFilterFacture", array())))
                ->orderByDatatable($request->getParameter("iSortCol_0"), $request->getParameter("sSortDir_0", Criteria::ASC))
                ->filterByDatatable($request->getParameter("sSearch"))
                ->paginate(($request->getParameter('iDisplayStart') / $request->getParameter('iDisplayLength')) + 1, $request->getParameter("iDisplayLength"));

        foreach ($tblFactures as $tblFacture) /* @var $tblFactures TblFacture */ {
            $data[] = $tblFacture->toArrayString();
        }
        $nb = $tblFactures->count();

        return $this->renderText(json_encode(array("sEcho" => $request->getParameter("sEcho") + 1,
//                    "iTotalRecords" => $nbT,
                    "iTotalDisplayRecords" => $nb,
                    "aaData" => $data)));
    }

    public function executePrixByIdAdherentAjax(sfWebRequest $request) {
        $this->adherent_id = $request->getParameter('adherent_id');
        $this->typeSport = TblAdherentQuery::create()
                ->findPk($this->adherent_id);
        $this->form = new tblFactureForm(null, array('objTypesport' => $this->typeSport));
        if ($request->isXmlHttpRequest()) {
            return $this->renderPartial('facture/frmTypeSportPrix', array('form' => $this->form));
        }
    }

}
