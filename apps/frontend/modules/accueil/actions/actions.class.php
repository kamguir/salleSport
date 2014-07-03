<?php

/**
 * accueil actions.
 *
 * @package    sallesport
 * @subpackage accueil
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class accueilActions extends sfActions {

    /**
     * Executes index action
     *
     * @param sfRequest $request A request object
     */
    public function executeIndex(sfWebRequest $request) {
        $this->facturesPayes = TblFactureQuery::create()
                ->filterByEtatPaiement(true)
                ->count();

        $this->facturesNonPayes = TblFactureQuery::create()
                ->filterByEtatPaiement(false)
                ->count();

        $this->nbrTotalDepenses = TblDepensesQuery::create()
                ->filterByDateDepenses(array("min" => date('Y') . '-' . date('m') . '-01', "max" => date('Y') . '-' . date('m') . '-31'))
                ->count();
       
        $this->nbrTotalAssurances = TblAssuranceQuery::create()
                ->filterByDateAssurance(array("min" => date('Y') . '-' . date('m') . '-01', "max" => date('Y') . '-' . date('m') . '-31'))
                ->count();

        $this->nbrTotalDepensesNonPayesduMoisCourant = TblDepensesQuery::create()
                ->filterByDateDepenses(array("min" => date('Y') . '-' . date('m') . '-01', "max" => date('Y') . '-' . date('m') . '-31'))
                ->filterByEtatPaiement(FALSE)
                ->count();
        
        $this->nbrTotalAssuranceNonPayesduMoisCourant = TblAssuranceQuery::create()
                ->filterByDateAssurance(array("min" => date('Y') . '-' . date('m') . '-01', "max" => date('Y') . '-' . date('m') . '-31'))
                ->filterByEtatPaiement(FALSE)
                ->count();
        
        $this->nbrTotalDepensesNonPayes = TblDepensesQuery::create()
                ->filterByEtatPaiement(FALSE)
                ->count();
        
        $this->nbrTotalDepensesPayes = TblDepensesQuery::create()
                ->filterByEtatPaiement(true)
                ->count();
        
        $this->nbrTotalAssurancesPayes = TblAssuranceQuery::create()
                ->filterByEtatPaiement(true)
                ->count();

        $this->tblAdherents = TblAdherentQuery::create()
                ->find();

        $this->totalFacturesParJour = TblFactureQuery::create()
                ->filterByDateReglement(array("min" => date('Y') . '-' . date('m') . '-'.date('d'), "max" => date('Y') . '-' . date('m') . '-'.date('d').' 23:59:59'))
                ->withColumn('SUM(' . TblFacturePeer::PRIX_FACTURE . ')', "montantTotalJour")
                ->select('montantTotalJour')
                ->findOne();
        
        $this->totalFacturesParMois = TblFactureQuery::create()
                ->filterByDateReglement(array("min" => date('Y') . '-' . date('m') . '-01', "max" => date('Y') . '-' . date('m') . '-31'))
                ->withColumn('SUM(' . TblFacturePeer::PRIX_FACTURE . ')', "montantTotal")
                ->select('montantTotal')
                ->findOne();
        
        $this->totalFacturesParAnnee = TblFactureQuery::create()
                ->filterByDateReglement(array("min" => date('Y') . '-' . '1' . '-01', "max" => date('Y') . '-' . '12' . '-31'))
                ->withColumn('SUM(' . TblFacturePeer::PRIX_FACTURE . ')', "montantTotal")
                ->select('montantTotal')
                ->findOne();
    }

    public function executeLien(sfWebRequest $request) {
        
    }

    public function executeListeAdherentsNonPaye(sfWebRequest $request) {
        $sf_user = $this->getUser();
        $this->formFilter = new TblFactureFormFilter(null, array('sf_user' => $sf_user), false);
        $this->formFilter->bind($request->isMethod("post") ? $request->getParameter($this->formFilter->getName()) : $sf_user->getAttribute("dataTableFilterAdherentNonPaye", array()));

        if ($this->formFilter->isValid()) {
            $sf_user->setAttribute("dataTableFilterAdherentNonPaye", $this->formFilter->getValues());
        }
    }

    public function executeListeDesAdherentsNonPayeAjax(sfWebRequest $request) {

        $sf_user = $this->getUser();
        $data = array();

        $formFilter = new TblFactureFormFilter();

        $tblFactures = TblFactureQuery::create()
                ->joinTblAdherent()
                ->useTblAdherentQuery()
                    ->useRefTypeSportQuery()
                    ->endUse()
                ->endUse()
                ->filterByEtatPaiement(0)
                ->mergeWith($formFilter->buildCriteria($sf_user->getAttribute("dataTableFilterAdherentNonPaye", array())))
                ->orderByDatatable($request->getParameter("iSortCol_0"), $request->getParameter("sSortDir_0", Criteria::ASC))
                ->filterByDatatable($request->getParameter("sSearch"))
                ->paginate(($request->getParameter('iDisplayStart') / $request->getParameter('iDisplayLength')) + 1, $request->getParameter("iDisplayLength"));

        foreach ($tblFactures as $tblFacture) /* @var $tblFactures TblFacture */ {
            $data[] = $tblFacture->toArrayStringAdherentNonPaye();
        }
        $nb = $tblFactures->count();

        return $this->renderText(json_encode(array("sEcho" => $request->getParameter("sEcho") + 1,
//                    "iTotalRecords" => $nbT,
                    "iTotalDisplayRecords" => $nb,
                    "aaData" => $data)));
    }

}
