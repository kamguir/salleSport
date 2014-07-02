<?php

/**
 * RefCivilite form base class.
 *
 * @method RefCivilite getObject() Returns the current form's model object
 *
 * @package    sallesport
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseRefCiviliteForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_civilite'      => new sfWidgetFormInputHidden(),
      'libelle_civilite' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_civilite'      => new sfValidatorChoice(array('choices' => array($this->getObject()->getIdCivilite()), 'empty_value' => $this->getObject()->getIdCivilite(), 'required' => false)),
      'libelle_civilite' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('ref_civilite[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'RefCivilite';
  }


}
