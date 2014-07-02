<?php

/**
 * LnkSportEntraineur form base class.
 *
 * @method LnkSportEntraineur getObject() Returns the current form's model object
 *
 * @package    sallesport
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseLnkSportEntraineurForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_sport'      => new sfWidgetFormInputHidden(),
      'id_entraineur' => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'id_sport'      => new sfValidatorPropelChoice(array('model' => 'TblSport', 'column' => 'id_sport', 'required' => false)),
      'id_entraineur' => new sfValidatorPropelChoice(array('model' => 'TblAdherent', 'column' => 'id_adherent', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('lnk_sport_entraineur[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'LnkSportEntraineur';
  }


}
