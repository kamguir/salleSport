<?php

/**
 * RefVille form base class.
 *
 * @method RefVille getObject() Returns the current form's model object
 *
 * @package    sallesport
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseRefVilleForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'ville_id'      => new sfWidgetFormInputHidden(),
      'libelle_ville' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'ville_id'      => new sfValidatorChoice(array('choices' => array($this->getObject()->getVilleId()), 'empty_value' => $this->getObject()->getVilleId(), 'required' => false)),
      'libelle_ville' => new sfValidatorString(array('max_length' => 128, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('ref_ville[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'RefVille';
  }


}
