<?php

/**
 * Skeleton subclass for performing query and update operations on the 'tbl_assurance' table.
 *
 * 
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.lib.model
 */
class TblAssuranceQuery extends BaseTblAssuranceQuery {

    public function filterByDatatable($searchs = "") {
        if ($searchs == '')
            return $this;
        $arrayCondition = $arrayCombine = array();
        foreach (explode(" ", $searchs) as $i => $search) {
            $search = '%' . $search . '%';

            $this->condition('PrixAssurance' . $i, 'TblAssurance.PrixAssurance LIKE ?', $search)
                    ->condition('NomAdherent' . $i, 'TblAdherent.NomAdherent LIKE ?', $search)
                    ->condition('PrenomAdherent' . $i, 'TblAdherent.PrenomAdherent LIKE ?', $search);

            $arrayCondition[] = 'PrixAssurance' . $i;
            $arrayCondition[] = 'NomAdherent' . $i;
            $arrayCondition[] = 'PrenomAdherent' . $i;

            $this->combine($arrayCondition, 'or', "combine" . $i);
            $arrayCombine[] = "combine" . $i;
            $arrayCondition = array();
        }

        return $this->combine($arrayCombine, 'and');
    }

    public function orderByDatatable($col, $order) {
        switch ($col) {
            case 0:
                $this->orderByAdherentId($order);
                break;
            case 1:
                $this->orderByAssuranceId($order);
                break;
        }
        return $this;
    }
    
    public function filterByEtat($searchs  = "") {
        
        if ($searchs && $searchs[0] != 3 ) {
            return $this->filterByEtatPaiement($searchs[0])->find();
        }  else {
             return $this;
        }
        
    }

}

// TblAssuranceQuery
