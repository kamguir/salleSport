<?php

/**
 * ceinture actions.
 *
 * @package    sallesport
 * @subpackage ceinture
 * @author     Your name here
 */
class ceintureActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->tblCeintures = tblCeintureQuery::create()->find();
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new tblCeintureForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new tblCeintureForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $tblCeinture = tblCeintureQuery::create()->findPk($request->getParameter('ceinture_id'));
    $this->forward404Unless($tblCeinture, sprintf('Object tblCeinture does not exist (%s).', $request->getParameter('ceinture_id')));
    $this->form = new tblCeintureForm($tblCeinture);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $tblCeinture = tblCeintureQuery::create()->findPk($request->getParameter('ceinture_id'));
    $this->forward404Unless($tblCeinture, sprintf('Object tblCeinture does not exist (%s).', $request->getParameter('ceinture_id')));
    $this->form = new tblCeintureForm($tblCeinture);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $tblCeinture = tblCeintureQuery::create()->findPk($request->getParameter('ceinture_id'));
    $this->forward404Unless($tblCeinture, sprintf('Object tblCeinture does not exist (%s).', $request->getParameter('ceinture_id')));
    $tblCeinture->delete();
    $this->getUser()->setFlash('notice', 'Ceinture supprimée.');
    $this->redirect('ceinture/listeCeintures');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $tblCeinture = $form->save();
      $this->getUser()->setFlash('notice', 'Ceinture Sauvegardée.');
      $this->redirect('ceinture/listeCeintures');
//      $this->redirect('ceinture/edit?ceinture_id='.$tblCeinture->getCeintureId());
    }
  }
  
  public function executeListeCeintures(sfWebRequest $request) {
        $sf_user = $this->getUser();
        $this->formFilter = new TblCeintureFormFilter(null, array('sf_user' => $sf_user), false);
        $this->formFilter->bind($request->isMethod("post") ? $request->getParameter($this->formFilter->getName()) : $sf_user->getAttribute("dataTableFilterCeinture", array()));

        if ($this->formFilter->isValid()) {
            $sf_user->setAttribute("dataTableFilterCeinture", $this->formFilter->getValues());
        }
    }

    public function executeListeDesCeinturesAjax(sfWebRequest $request) {

        $sf_user = $this->getUser();
        $data = array();

        $formFilter = new TblCeintureFormFilter();

        $tblCeintures = TblCeintureQuery::create()
                ->joinTblAdherent()
                ->mergeWith($formFilter->buildCriteria($sf_user->getAttribute("dataTableFilterCeinture", array())))
                ->orderByDatatable($request->getParameter("iSortCol_0"), $request->getParameter("sSortDir_0", Criteria::ASC))
                ->filterByDatatable($request->getParameter("sSearch"))
                ->paginate(($request->getParameter('iDisplayStart') / $request->getParameter('iDisplayLength')) + 1, $request->getParameter("iDisplayLength"));

        foreach ($tblCeintures as $tblCeinture) /* @var $tblCeintures TblCeintures */ {
            $data[] = $tblCeinture->toArrayString();
        }
        $nb = $tblCeintures->count();

        return $this->renderText(json_encode(array("sEcho" => $request->getParameter("sEcho") + 1,
                    "iTotalDisplayRecords" => $nb,
                    "aaData" => $data)));
    }
}
