<?php

/**
 * Skeleton subclass for representing a row from the 'tbl_ceinture' table.
 *
 * 
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.lib.model
 */
class TblCeinture extends BaseTblCeinture {

    public function toArrayString() {
        $nomAdherent = ' -- ';
        $preNomAdherent = ' -- ';
        $competanceAdherent = ' -- ';
        $titreEntraineur = ' -- ';
        $niveauCeinture = ' -- ';
        $grade = ' -- ';
        if ($this->getTblAdherent()) {
            $nomAdherent = ucfirst($this->getTblAdherent()->getNomAdherent());
            $preNomAdherent =  ucfirst($this->getTblAdherent()->getPrenomAdherent());
        }
        if ($this->getRefCompetance()) {
            $competanceAdherent = ucfirst($this->getRefCompetance()->getCompetanceLibelle());
        }
        if ($this->getRefTitreEntraineur()) {
            $titreEntraineur = ucfirst($this->getRefTitreEntraineur()->getTitreEntraineurLibelle());
        }
        if ($this->getRefCeintureCouleur()) {
            $niveauCeinture = ucfirst($this->getRefCeintureCouleur()->getCeintureCouleur());
        }
        if ($this->getRefGradeCeinture()) {
            $grade = ucfirst($this->getRefGradeCeinture()->getGradeNiveau());
        }
        return array(
            $preNomAdherent .' '.$nomAdherent,
            $grade,
            $competanceAdherent,
            $titreEntraineur,
            $niveauCeinture,
            $this->getDateAcquisition(),
            "DT_RowId" => "row_" . $this->getCeintureId()
        );
    }

}

// TblCeinture
