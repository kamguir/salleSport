<?php

/**
 * Skeleton subclass for representing a row from the 'tbl_competition' table.
 *
 * 
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.lib.model
 */
class TblCompetition extends BaseTblCompetition {

    public function toArrayString() {
        $typeSport = ' -- ';
        $ville = ' -- ';
        if ($this->getRefTypeSport()) {
            $typeSport = $this->getRefTypeSport()->getLibelle();
        }
        
        if ($this->getRefVille()) {
            $ville = $this->getRefVille()->getLibelleVille();
        }

        return array(
            $this->getCompetitionLibelle(),
            $typeSport,
            $ville,
            $this->getPrixCompetition(),
            $this->getAdresseCompetition(),
            $this->getDateCompetition(),
            "DT_RowId" => "row_" . $this->getCompetitionId()
        );
    }

}

// TblCompetition
