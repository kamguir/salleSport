<?php

/**
 * RefAssurance form base class.
 *
 * @method RefAssurance getObject() Returns the current form's model object
 *
 * @package    sallesport
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseRefAssuranceForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'assurance_id'      => new sfWidgetFormInputHidden(),
      'libelle_assurance' => new sfWidgetFormInputText(),
      'prix_assurance'    => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'assurance_id'      => new sfValidatorChoice(array('choices' => array($this->getObject()->getAssuranceId()), 'empty_value' => $this->getObject()->getAssuranceId(), 'required' => false)),
      'libelle_assurance' => new sfValidatorString(array('max_length' => 256, 'required' => false)),
      'prix_assurance'    => new sfValidatorNumber(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('ref_assurance[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'RefAssurance';
  }


}
