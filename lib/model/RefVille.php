<?php



/**
 * Skeleton subclass for representing a row from the 'ref_ville' table.
 *
 * 
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.lib.model
 */
class RefVille extends BaseRefVille {
    public function __toString() {
        return $this->getLibelleVille();
    }
} // RefVille
