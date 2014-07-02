<?php

/**
 * RefSeanceHoraire form base class.
 *
 * @method RefSeanceHoraire getObject() Returns the current form's model object
 *
 * @package    sallesport
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseRefSeanceHoraireForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'seance_horaire_id' => new sfWidgetFormInputHidden(),
      'seance_horaire'    => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'seance_horaire_id' => new sfValidatorChoice(array('choices' => array($this->getObject()->getSeanceHoraireId()), 'empty_value' => $this->getObject()->getSeanceHoraireId(), 'required' => false)),
      'seance_horaire'    => new sfValidatorString(array('max_length' => 256, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('ref_seance_horaire[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'RefSeanceHoraire';
  }


}
