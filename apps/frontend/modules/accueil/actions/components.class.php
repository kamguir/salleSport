
<?php

class accueilComponents extends sfComponents {

    public function executeBandeauInfo($request) {
        $this->nbrAdherents = TblAdherentQuery::create()
                ->filterByIdTypeAdherent(RefTypeAdherent::ADHERENT)
                ->addAnd(TblAdherentPeer::DATE_ADHESION, 'DAY(' . TblAdherentPeer::DATE_ADHESION . ')between 1 and 31', Criteria::CUSTOM)
                ->addAnd(TblAdherentPeer::DATE_ADHESION, 'MONTH(' . TblAdherentPeer::DATE_ADHESION     . ')='.date('m'), Criteria::CUSTOM)
                ->addAnd(TblAdherentPeer::DATE_ADHESION, 'YEAR(' . TblAdherentPeer::DATE_ADHESION . ')='.date('Y') , Criteria::CUSTOM)
                ->count();
//        echo Propel::getConnection()->getLastExecutedQuery();
//        die;

        $this->montantFacturesPayés = TblFactureQuery::create()
                ->filterByDateReglement(array("min" => date('Y') . '-' . date('m') . '-01', "max" => date('Y') . '-' . date('m') . '-31'))
                ->filterByEtatPaiement(true)
                ->withColumn('SUM(' . TblFacturePeer::PRIX_FACTURE . ')', "montantTotal")
                ->select('montantTotal')
                ->findOne();

        $this->montantFacturesNonPayés = TblFactureQuery::create()
                ->filterByDateReglement(array("min" => date('Y') . '-' . date('m') . '-01', "max" => date('Y') . '-' . date('m') . '-31'))
                ->filterByEtatPaiement(false)
                ->withColumn('SUM(' . TblFacturePeer::PRIX_FACTURE . ')', "montantTotal")
                ->select('montantTotal')
                ->findOne();

        $this->montantDepenses = TblDepensesQuery::create()
                ->filterByDateDepenses(array("min" => date('Y') . '-' . date('m') . '-01', "max" => date('Y') . '-' . date('m') . '-31'))
                ->count();
    }

}
