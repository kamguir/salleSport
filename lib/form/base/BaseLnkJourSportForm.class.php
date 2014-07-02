<?php

/**
 * LnkJourSport form base class.
 *
 * @method LnkJourSport getObject() Returns the current form's model object
 *
 * @package    sallesport
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseLnkJourSportForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_type_sport' => new sfWidgetFormInputHidden(),
      'id_jour'       => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'id_type_sport' => new sfValidatorPropelChoice(array('model' => 'RefTypeSport', 'column' => 'id_type_sport', 'required' => false)),
      'id_jour'       => new sfValidatorPropelChoice(array('model' => 'RefJour', 'column' => 'id_jour', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('lnk_jour_sport[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'LnkJourSport';
  }


}
