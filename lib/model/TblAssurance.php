<?php

/**
 * Skeleton subclass for representing a row from the 'tbl_assurance' table.
 *
 * 
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.lib.model
 */
class TblAssurance extends BaseTblAssurance {

    public function toArrayString() {

        $nomAdherent = ' -- ';
        $preNomAdherent = ' -- ';
        $libelleAss = ' -- ';
        $prixAss = ' -- ';
        $iconeEtat = 'ko.png';

        if ($this->getRefAssurance()) {
            $libelleAss = $this->getRefAssurance()->getLibelleAssurance();
            $prixAss = $this->getRefAssurance()->getPrixAssurance();
            if ($this->getEtatPaiement()) {
                $iconeEtat = "ok.png";
            } else {
                $iconeEtat = "ko.png";
            }
        }
        if ($this->getTblAdherent()) {
            $nomAdherent = $this->getTblAdherent()->getNomAdherent();
            $preNomAdherent = $this->getTblAdherent()->getPrenomAdherent();
        }

        return array(
            $nomAdherent . ' ' . $preNomAdherent,
            $libelleAss,
            $this->getPrixAssurance(),
            $this->getDateAssurance(),
            "<img src=/images/" . $iconeEtat . " alt=\"Smiley face\"'>",
            "DT_RowId" => "row_" . $this->getAssuranceId()
        );
    }

}

// TblAssurance
