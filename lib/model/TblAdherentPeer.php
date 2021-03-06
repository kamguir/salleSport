<?php

/**
 * Skeleton subclass for performing query and update operations on the 'tbl_adherent' table.
 *
 * 
 *
 * This class was autogenerated by Propel 1.6.6-dev on:
 *
 * 03/27/14 16:29:20
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.lib.model
 */
class TblAdherentPeer extends BaseTblAdherentPeer {

    const ADHERENT = 1;
    const ENTRAINEUR = 2;
    const EMPLOYES = 3;
    

    public static function getNbrAdherentByTypeSport($idTypeSport) {
        $nbr = TblAdherentQuery::create()
                ->filterByDateAdhesion(array("min" => date('Y').'-'.date('m').'-01', "max" => date('Y').'-'.date('m').'-31'))
                ->filterByIdTypeAdherent(1)
                ->filterByIdTypeSport($idTypeSport)
                ->count();
        return $nbr;
    }

}

// TblAdherentPeer
