<?php

/**
 * adherent actions.
 *
 * @package    sallesport
 * @subpackage adherent
 * @author     Your name here
 */
//listes des membres par jour / par entraineur / type de sport / pr categorie age / horaire
// tbl competition
class adherentActions extends sfActions {

    public function executeIndex(sfWebRequest $request) {
        $this->tblAdherents = tblAdherentQuery::create()->find();
    }

    public function executeSs(sfWebRequest $request) {
        $this->tblAdherents = tblAdherentQuery::create()->find();
    }

    public function executeNew(sfWebRequest $request) {
        $this->form = new tblAdherentForm();
    }

    public function executeCreate(sfWebRequest $request) {
        $this->forward404Unless($request->isMethod(sfRequest::POST));

        $this->form = new tblAdherentForm();

        $this->processForm($request, $this->form);

        $this->setTemplate('new');
    }

    public function executeEdit(sfWebRequest $request) {
        $tblAdherent = tblAdherentQuery::create()->findPk($request->getParameter('id_adherent'));
        $this->forward404Unless($tblAdherent, sprintf('Object tblAdherent does not exist (%s).', $request->getParameter('id_adherent')));
        $this->form = new tblAdherentForm($tblAdherent);
    }

    public function executeUpdate(sfWebRequest $request) {
        $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
        $tblAdherent = tblAdherentQuery::create()->findPk($request->getParameter('id_adherent'));
        $this->forward404Unless($tblAdherent, sprintf('Object tblAdherent does not exist (%s).', $request->getParameter('id_adherent')));
        $this->form = new tblAdherentForm($tblAdherent);

        $this->processForm($request, $this->form);

        $this->setTemplate('edit');
    }

    public function executeDelete(sfWebRequest $request) {
        $request->checkCSRFProtection();

        $tblAdherent = tblAdherentQuery::create()->findPk($request->getParameter('id_adherent'));
        $this->forward404Unless($tblAdherent, sprintf('Object tblAdherent does not exist (%s).', $request->getParameter('id_adherent')));
        $tblAdherent->delete();
        $this->getUser()->setFlash('notice', 'Membre supprimée.');
        $this->redirect('adherent/listeMembres');
    }

    protected function processForm(sfWebRequest $request, sfForm $form) {
        $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
        if ($form->isValid()) {
            $tblAdherent = $form->save();
            $this->getUser()->setFlash('notice', 'Adhérent enregistré.');
//            $this->redirect('adherent/edit?id_adherent=' . $tblAdherent->getIdAdherent());
            $this->redirect('adherent/listeMembres');
        }
    }

    public function executeListeMembres(sfWebRequest $request) {
        $sf_user = $this->getUser();
        $this->formFilter = new TblAdherentFormFilter(null, array('sf_user' => $sf_user), false);
        $this->formFilter->bind($request->isMethod("post") ? $request->getParameter($this->formFilter->getName()) : $sf_user->getAttribute("dataTableFilterAdherent", array()));

        if ($this->formFilter->isValid()) {
            $sf_user->setAttribute("dataTableFilterAdherent", $this->formFilter->getValues());
        }
    }

    public function executeListeDesMembresAjax(sfWebRequest $request) {

        $sf_user = $this->getUser();
        $data = array();

        $formFilter = new TblAdherentFormFilter();

        $tblAdherents = TblAdherentQuery::create()
                ->joinRefTypeSport()
                ->mergeWith($formFilter->buildCriteria($sf_user->getAttribute("dataTableFilterAdherent", array())))
                ->orderByDatatable($request->getParameter("iSortCol_0"), $request->getParameter("sSortDir_0", Criteria::ASC))
                ->filterByDatatable($request->getParameter("sSearch"))
                ->paginate(($request->getParameter('iDisplayStart') / $request->getParameter('iDisplayLength')) + 1, $request->getParameter("iDisplayLength"));

        foreach ($tblAdherents as $tblAdherent) /* @var $tblAdherents TblAdherent */ {
            $data[] = $tblAdherent->toArrayString();
        }
        $nb = $tblAdherents->count();

        return $this->renderText(json_encode(array("sEcho" => $request->getParameter("sEcho") + 1,
                    "iTotalDisplayRecords" => $nb,
                    "aaData" => $data)));
    }

    public function executeListeEntraineurs(sfWebRequest $request) {
        $sf_user = $this->getUser();
        $this->formFilter = new TblAdherentFormFilter(null, array('sf_user' => $sf_user), false);
        $this->formFilter->bind($request->isMethod("post") ? $request->getParameter($this->formFilter->getName()) : $sf_user->getAttribute("dataTableFilterEntraineur", array()));

        if ($this->formFilter->isValid()) {
            $sf_user->setAttribute("dataTableFilterEntraineur", $this->formFilter->getValues());
        }
    }

    public function executeListeDesEntraineursAjax(sfWebRequest $request) {

        $sf_user = $this->getUser();
        $data = array();

        $formFilter = new TblAdherentFormFilter();

        $tblAdherents = TblAdherentQuery::create()
                ->filterByIdTypeAdherent(RefTypeAdherent::ENTRAINEUR)
                ->joinRefTypeSport()
                ->mergeWith($formFilter->buildCriteria($sf_user->getAttribute("dataTableFilterEntraineur", array())))
                ->orderByDatatable($request->getParameter("iSortCol_0"), $request->getParameter("sSortDir_0", Criteria::ASC))
                ->filterByDatatable($request->getParameter("sSearch"))
                ->paginate(($request->getParameter('iDisplayStart') / $request->getParameter('iDisplayLength')) + 1, $request->getParameter("iDisplayLength"));

        foreach ($tblAdherents as $tblAdherent) /* @var $tblAdherents TblAdherent */ {
            $data[] = $tblAdherent->AdherentstoArrayString();
        }
        $nb = $tblAdherents->count();

        return $this->renderText(json_encode(array("sEcho" => $request->getParameter("sEcho") + 1,
                    "iTotalDisplayRecords" => $nb,
                    "aaData" => $data)));
    }

    public function executeListeAdherents(sfWebRequest $request) {
        $sf_user = $this->getUser();
        $this->formFilter = new TblAdherentFormFilter(null, array('sf_user' => $sf_user), false);
        $this->formFilter->bind($request->isMethod("post") ? $request->getParameter($this->formFilter->getName()) : $sf_user->getAttribute("dataTableFilterAdherent", array()));

        if ($this->formFilter->isValid()) {
            $sf_user->setAttribute("dataTableFilterAdherent", $this->formFilter->getValues());
        }
    }

    public function executeListeDesAdherentsAjax(sfWebRequest $request) {

        $sf_user = $this->getUser();
        $data = array();

        $formFilter = new TblAdherentFormFilter();

        $tblAdherents = TblAdherentQuery::create()
                ->filterByIdTypeAdherent(RefTypeAdherent::ADHERENT)
                ->joinRefTypeSport()
                ->mergeWith($formFilter->buildCriteria($sf_user->getAttribute("dataTableFilterAdherent", array())))
                ->orderByDatatable($request->getParameter("iSortCol_0"), $request->getParameter("sSortDir_0", Criteria::ASC))
                ->filterByDatatable($request->getParameter("sSearch"))
                ->paginate(($request->getParameter('iDisplayStart') / $request->getParameter('iDisplayLength')) + 1, $request->getParameter("iDisplayLength"));

        foreach ($tblAdherents as $tblAdherent) /* @var $tblAdherents TblAdherent */ {
            $data[] = $tblAdherent->AdherentstoArrayString();
        }
        $nb = $tblAdherents->count();

        return $this->renderText(json_encode(array("sEcho" => $request->getParameter("sEcho") + 1,
                    "iTotalDisplayRecords" => $nb,
                    "aaData" => $data)));
    }

    public function executePlanningEntraineurs(sfWebRequest $request) {
        $sf_user = $this->getUser();
        $this->formFilter = new TblAdherentFormFilter(null, array('sf_user' => $sf_user), false);
        $this->formFilter->bind($request->isMethod("post") ? $request->getParameter($this->formFilter->getName()) : $sf_user->getAttribute("dataTableFilterPlanningEntraineurs", array()));

        if ($this->formFilter->isValid()) {
            $sf_user->setAttribute("dataTableFilterPlanningEntraineurs", $this->formFilter->getValues());
        }
    }

    public function executePlanningEntraineursAjax(sfWebRequest $request) {

        $sf_user = $this->getUser();
        $data = array();

        $formFilter = new TblAdherentFormFilter();

        $tblAdherents = TblAdherentQuery::create()
                ->filterByIdTypeAdherent(RefTypeAdherent::ENTRAINEUR)
                ->joinRefTypeSport()
                ->mergeWith($formFilter->buildCriteria($sf_user->getAttribute("dataTableFilterPlanningEntraineurs", array())))
                ->orderByDatatable($request->getParameter("iSortCol_0"), $request->getParameter("sSortDir_0", Criteria::ASC))
                ->filterByDatatable($request->getParameter("sSearch"))
                ->paginate(($request->getParameter('iDisplayStart') / $request->getParameter('iDisplayLength')) + 1, $request->getParameter("iDisplayLength"));

        foreach ($tblAdherents as $tblAdherent) /* @var $tblAdherents TblAdherent */ {
            $data[] = $tblAdherent->PlanningEntrainneurstoArrayString();
        }
        $nb = $tblAdherents->count();

        return $this->renderText(json_encode(array("sEcho" => $request->getParameter("sEcho") + 1,
                    "iTotalDisplayRecords" => $nb,
                    "aaData" => $data)));
    }

    public function executePlanningAdherents(sfWebRequest $request) {
        $sf_user = $this->getUser();
        $this->formFilter = new TblAdherentFormFilter(null, array('sf_user' => $sf_user), false);
        $this->formFilter->bind($request->isMethod("post") ? $request->getParameter($this->formFilter->getName()) : $sf_user->getAttribute("dataTableFilterPlanningAdherents", array()));

        if ($this->formFilter->isValid()) {
            $sf_user->setAttribute("dataTableFilterPlanningAdherents", $this->formFilter->getValues());
        }
    }

    public function executePlanningAdherentsAjax(sfWebRequest $request) {

        $sf_user = $this->getUser();
        $data = array();

        $formFilter = new TblAdherentFormFilter();

        $tblAdherents = TblAdherentQuery::create()
                ->filterByIdTypeAdherent(RefTypeAdherent::ADHERENT)
                ->joinRefTypeSport()
                ->mergeWith($formFilter->buildCriteria($sf_user->getAttribute("dataTableFilterPlanningAdherents", array())))
                ->orderByDatatable($request->getParameter("iSortCol_0"), $request->getParameter("sSortDir_0", Criteria::ASC))
                ->filterByDatatable($request->getParameter("sSearch"))
                ->paginate(($request->getParameter('iDisplayStart') / $request->getParameter('iDisplayLength')) + 1, $request->getParameter("iDisplayLength"));

        foreach ($tblAdherents as $tblAdherent) /* @var $tblAdherents TblAdherent */ {
            $data[] = $tblAdherent->MesAdherentstoArrayString();
        }
        $nb = $tblAdherents->count();

        return $this->renderText(json_encode(array("sEcho" => $request->getParameter("sEcho") + 1,
                    "iTotalDisplayRecords" => $nb,
                    "aaData" => $data)));
    }

    public function executeJourhoraireByIdEntraineurAjax(sfWebRequest $request) {
        $this->adherent_id = $request->getParameter('adherent_id');
        $this->joursHoraires = LnkJourEntrainementAdherentQuery::create()
                ->filterByIdAdherent($this->adherent_id)
                ->find();

        $this->form = new TblAdherentForm(null, array('objJoursHoraires' => $this->joursHoraires));
        if ($request->isXmlHttpRequest()) {
            return $this->renderPartial('adherent/frmJoursHoraires', array('form' => $this->form));
        }
    }

    public function executeEntraineursByTypeSportAjax(sfWebRequest $request) {
        $this->entraineur_id = $request->getParameter('entraineur_id');
        $this->listEntraineurs = TblAdherentQuery::create()
                ->filterByIdTypeSport($this->entraineur_id)
                ->find();
//        echo Propel::getConnection()->getLastExecutedQuery();
//        die;
//        var_dump($this->listEntraineurs);
        $this->form = new TblAdherentForm(null, array('objListEntraineurs' => $this->listEntraineurs));
        if ($request->isXmlHttpRequest()) {

            return $this->renderPartial('adherent/frmEntraineurID', array('form' => $this->form));
        }
    }

}
