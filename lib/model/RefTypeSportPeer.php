<?php



/**
 * Skeleton subclass for performing query and update operations on the 'ref_type_sport' table.
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
class RefTypeSportPeer extends BaseRefTypeSportPeer {

    const FULLCONTACT = 1;
    const TEAKWONDO = 2;
    const AEROBIC = 3;
    const KARATE = 4;
    const JUDO = 5;
    const MUSCULATION = 6;

    public static function getTypeSportByID($idTypeSport)
    {
        $libelleSport = null;

        switch ($idTypeSport) {
            case RefTypeSportPeer::FULLCONTACT: $libelleSport = 'FULLCONTACT';
                break;
            case RefTypeSportPeer::TEAKWONDO: $libelleSport = 'TEAKWONDO';
                break;
            case RefTypeSportPeer::AEROBIC: $libelleSport = 'AEROBIC';
                break;
            case RefTypeSportPeer::KARATE: $libelleSport = 'KARATE';
                break;
            case RefTypeSportPeer::JUDO: $libelleSport = 'JUDO';
                break;
            case RefTypeSportPeer::MUSCULATION: $libelleSport = 'MUSCULATION';
                break;

            default: 
                break;
        }
        return $libelleSport;
    }
} // RefTypeSportPeer
