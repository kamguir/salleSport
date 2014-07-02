<?php

/**
 * TblDepenses filter form.
 *
 * @package    sallesport
 * @subpackage filter
 * @author     Your name here
 */
class TblDepensesFormFilter extends BaseTblDepensesFormFilter {

    private $monEtat = array(
        3 => 'Toutes',
        1 => 'Payé',
        0 => 'Non Payé',
    );

    public function configure() {
        
        $this->setWidget('etat', new sfWidgetFormChoice(array(
            'choices' => $this->monEtat,
            'multiple' => false,
            'expanded' => false)));
        $this->setValidator('etat', new sfValidatorChoice(array('choices' => array_keys($this->monEtat), 'multiple' => true, 'required' => false)));
        $this->getWidget('etat')->setAttribute("onChange", "submit()");
       
        $this->useFields(array('etat'));
    }

}
