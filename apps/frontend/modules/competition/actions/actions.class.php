<?php

/**
 * competition actions.
 *
 * @package    sallesport
 * @subpackage competition
 * @author     Your name here
 */
class competitionActions extends sfActions
{

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new tblCompetitionForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new tblCompetitionForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $tblCompetition = tblCompetitionQuery::create()->findPk($request->getParameter('competition_id'));
    $this->forward404Unless($tblCompetition, sprintf('Object tblCompetition does not exist (%s).', $request->getParameter('competition_id')));
    $this->form = new tblCompetitionForm($tblCompetition);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $tblCompetition = tblCompetitionQuery::create()->findPk($request->getParameter('competition_id'));
    $this->forward404Unless($tblCompetition, sprintf('Object tblCompetition does not exist (%s).', $request->getParameter('competition_id')));
    $this->form = new tblCompetitionForm($tblCompetition);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $tblCompetition = tblCompetitionQuery::create()->findPk($request->getParameter('competition_id'));
    $this->forward404Unless($tblCompetition, sprintf('Object tblCompetition does not exist (%s).', $request->getParameter('competition_id')));
    $tblCompetition->delete();

    $this->redirect('competition/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $tblCompetition = $form->save();

      $this->redirect('competition/edit?competition_id='.$tblCompetition->getCompetitionId());
    }
  }
  
  public function executeIndex(sfWebRequest $request) { 
        $sf_user = $this->getUser();
        $this->formFilter = new TblCompetitionFormFilter(null, array('sf_user' => $sf_user), false);
        $this->formFilter->bind($request->isMethod("post") ? $request->getParameter($this->formFilter->getName()) : $sf_user->getAttribute("dataTableFilterListeCompetitions", array()));

        if ($this->formFilter->isValid()) {
            $sf_user->setAttribute("dataTableFilteristeCompetitionsListeCompetitions", $this->formFilter->getValues());
        }
    }

    public function executeCompetitionsAjax(sfWebRequest $request) {

        $sf_user = $this->getUser();
        $data = array();
        
        $formFilter = new TblCompetitionFormFilter();

        $tblCompetitions = TblCompetitionQuery::create()
                ->mergeWith($formFilter->buildCriteria($sf_user->getAttribute("dataTableFilterListeCompetitions", array())))
//                ->orderByDatatable($request->getParameter("iSortCol_0"), $request->getParameter("sSortDir_0", Criteria::ASC))
//                ->filterMesAdherentsByDatatable($request->getParameter("sSearch"))
                ->paginate(($request->getParameter('iDisplayStart') / $request->getParameter('iDisplayLength')) + 1, $request->getParameter("iDisplayLength"));

        foreach ($tblCompetitions as $tblCompetition) /* @var $tblCompetitions TblCompetition */ {
            $data[] = $tblCompetition->toArrayString();
        }
        $nb = $tblCompetitions->count();

        return $this->renderText(json_encode(array("sEcho" => $request->getParameter("sEcho") + 1,
                    "iTotalDisplayRecords" => $nb,
                    "aaData" => $data)));
    }
}
