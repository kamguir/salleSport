<?php

/**
 * LnkSportAdherent form base class.
 *
 * @method LnkSportAdherent getObject() Returns the current form's model object
 *
 * @package    sallesport
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseLnkSportAdherentForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_sport'    => new sfWidgetFormInputHidden(),
      'id_adherent' => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'id_sport'    => new sfValidatorPropelChoice(array('model' => 'TblSport', 'column' => 'id_sport', 'required' => false)),
      'id_adherent' => new sfValidatorPropelChoice(array('model' => 'TblAdherent', 'column' => 'id_adherent', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('lnk_sport_adherent[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'LnkSportAdherent';
  }


}
