<?php



/**
 * Skeleton subclass for representing a row from the 'ref_categorie_age' table.
 *
 * 
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.lib.model
 */
class RefCategorieAge extends BaseRefCategorieAge {
    public function __toString() {
        return $this->getCategorieLibelle();
    }
} // RefCategorieAge
