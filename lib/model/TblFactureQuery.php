<?php

/**
 * Skeleton subclass for performing query and update operations on the 'tbl_facture' table.
 *
 * 
 *
 * This class was autogenerated by Propel 1.6.6-dev on:
 *
 * 03/27/14 16:29:21
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.lib.model
 */
class TblFactureQuery extends BaseTblFactureQuery {

    public function filterByEtat($searchs  = "") {
        
        if ($searchs && $searchs[0] != 3 ) {
            return $this->filterByEtatPaiement($searchs[0])->find();
        }  else {
             return $this;
        }
        
    }
    public function filterByDatatable($searchs = "") {
        if ($searchs == '')
            return $this;
        $arrayCondition = $arrayCombine = array();
        foreach (explode(" ", $searchs) as $i => $search) {
            $search = '%' . $search . '%';

            $this->condition('IdFacture' . $i, 'TblFacture.IdAdherent LIKE ?', $search)
                    ->condition('nomAdherent' . $i, 'TblAdherent.NomAdherent LIKE ?', $search)
                    ->condition('preNomAdherent' . $i, 'TblAdherent.PrenomAdherent LIKE ?', $search)
                    ->condition('libelle' . $i, 'RefTypeSport.Libelle LIKE ?', $search)
                    ->condition('NumTel' . $i, 'TblAdherent.NumTel LIKE ?', $search)
                    ->condition('prixFacture' . $i, 'TblFacture.PrixFacture LIKE ?', $search);

            $arrayCondition[] = 'nomAdherent' . $i;
            $arrayCondition[] = 'preNomAdherent' . $i;
            $arrayCondition[] = 'NumTel' . $i;
            $arrayCondition[] = 'libelle' . $i;
            $arrayCondition[] = 'prixFacture' . $i;
            $arrayCondition[] = 'IdFacture' . $i;

            $this->combine($arrayCondition, 'or', "combine" . $i);
            $arrayCombine[] = "combine" . $i;
            $arrayCondition = array();
        }

        return $this->combine($arrayCombine, 'and');
    }

    public function orderByDatatable($col, $order) {
        switch ($col) {
            case 0:
                $this->orderByIdFacture($order);
                break;
            case 1:
                $this->orderByIdAdherent($order);
                break;
        }
        return $this;
    }

}

// TblFactureQuery
