<?php

/**
 * Skeleton subclass for performing query and update operations on the 'tbl_ceinture' table.
 *
 * 
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.lib.model
 */
class TblCeintureQuery extends BaseTblCeintureQuery {

    public function filterByDatatable($searchs = "") {
        if ($searchs == '')
            return $this;
        $arrayCondition = $arrayCombine = array();
        foreach (explode(" ", $searchs) as $i => $search) {
            $search = '%' . $search . '%';

            $this->condition('NomAdherent' . $i, 'TblAdherent.NomAdherent LIKE ?', $search)
                    ->condition('PrenomAdherent' . $i, 'TblAdherent.PrenomAdherent LIKE ?', $search);

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
                $this->orderByDateAcquisition($order);
                break;
        }
        return $this;
    }

}

// TblCeintureQuery
