<?php

/**
 * Skeleton subclass for representing a row from the 'ref_type_sport' table.
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
class RefTypeSport extends BaseRefTypeSport {

    public function __toString() {
        return $this->getLibelle();
    }

}

// RefTypeSport
