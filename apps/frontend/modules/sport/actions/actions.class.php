<?php

/**
 * sport actions.
 *
 * @package    sallesport
 * @subpackage sport
 * @author     Your name here
 */
class sportActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->tblSports = tblSportQuery::create()->find();
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new tblSportForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new tblSportForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $tblSport = tblSportQuery::create()->findPk($request->getParameter('id_sport'));
    $this->forward404Unless($tblSport, sprintf('Object tblSport does not exist (%s).', $request->getParameter('id_sport')));
    $this->form = new tblSportForm($tblSport);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $tblSport = tblSportQuery::create()->findPk($request->getParameter('id_sport'));
    $this->forward404Unless($tblSport, sprintf('Object tblSport does not exist (%s).', $request->getParameter('id_sport')));
    $this->form = new tblSportForm($tblSport);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $tblSport = tblSportQuery::create()->findPk($request->getParameter('id_sport'));
    $this->forward404Unless($tblSport, sprintf('Object tblSport does not exist (%s).', $request->getParameter('id_sport')));
    $tblSport->delete();

    $this->redirect('sport/listeSports');
    $this->redirect('sport/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $tblSport = $form->save();

      $this->redirect('sport/listeSports');
//      $this->redirect('sport/edit?id_sport='.$tblSport->getIdSport());
    }
  }
  
   public function executeListeSports(sfWebRequest $request) {
        $sf_user = $this->getUser();
        $this->formFilter = new TblSportFormFilter(null, array('sf_user' => $sf_user), false);
        $this->formFilter->bind($request->isMethod("post") ? $request->getParameter($this->formFilter->getName()) : $sf_user->getAttribute("dataTableFilterSport", array()));

        if ($this->formFilter->isValid()) {
            $sf_user->setAttribute("dataTableFilterFacture", $this->formFilter->getValues());
        }
    }
    
     public function executeListeDesSportsAjax(sfWebRequest $request) {

        $sf_user = $this->getUser();
        $data = array();

        $formFilter = new TblSportFormFilter();

        $tblSports = TblSportQuery::create()
                ->mergeWith($formFilter->buildCriteria($sf_user->getAttribute("dataTableFilterSport", array())))
//                ->orderByDatatable($request->getParameter("iSortCol_0"), $request->getParameter("sSortDir_0", Criteria::ASC))
//                ->filterByDatatable($request->getParameter("sSearch"))
                ->paginate(($request->getParameter('iDisplayStart') / $request->getParameter('iDisplayLength')) + 1, $request->getParameter("iDisplayLength"));
        
        foreach ($tblSports as $tblSport) /* @var $tblSports TblSport */ {
            $data[] = $tblSport->toArrayString();
        }
        $nb = $tblSports->count();

        return $this->renderText(json_encode(array("sEcho" => $request->getParameter("sEcho") + 1,
//                    "iTotalRecords" => $nbT,
                    "iTotalDisplayRecords" => $nb,
                    "aaData" => $data)));
    }
}
