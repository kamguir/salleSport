<?php

/**
 * RefPlageHoraire form base class.
 *
 * @method RefPlageHoraire getObject() Returns the current form's model object
 *
 * @package    sallesport
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseRefPlageHoraireForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'horaire_id'    => new sfWidgetFormInputHidden(),
      'horaire_plage' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'horaire_id'    => new sfValidatorChoice(array('choices' => array($this->getObject()->getHoraireId()), 'empty_value' => $this->getObject()->getHoraireId(), 'required' => false)),
      'horaire_plage' => new sfValidatorString(array('max_length' => 256, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('ref_plage_horaire[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'RefPlageHoraire';
  }


}
