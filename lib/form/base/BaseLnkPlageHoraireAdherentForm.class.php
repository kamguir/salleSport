<?php

/**
 * LnkPlageHoraireAdherent form base class.
 *
 * @method LnkPlageHoraireAdherent getObject() Returns the current form's model object
 *
 * @package    sallesport
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseLnkPlageHoraireAdherentForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'horaire_id'  => new sfWidgetFormInputHidden(),
      'adherent_id' => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'horaire_id'  => new sfValidatorPropelChoice(array('model' => 'RefPlageHoraire', 'column' => 'horaire_id', 'required' => false)),
      'adherent_id' => new sfValidatorPropelChoice(array('model' => 'TblAdherent', 'column' => 'id_adherent', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('lnk_plage_horaire_adherent[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'LnkPlageHoraireAdherent';
  }


}
