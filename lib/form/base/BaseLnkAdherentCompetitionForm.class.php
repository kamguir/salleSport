<?php

/**
 * LnkAdherentCompetition form base class.
 *
 * @method LnkAdherentCompetition getObject() Returns the current form's model object
 *
 * @package    sallesport
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseLnkAdherentCompetitionForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'adherent_id'    => new sfWidgetFormInputHidden(),
      'competition_id' => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'adherent_id'    => new sfValidatorPropelChoice(array('model' => 'TblAdherent', 'column' => 'id_adherent', 'required' => false)),
      'competition_id' => new sfValidatorPropelChoice(array('model' => 'TblCompetition', 'column' => 'competition_id', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('lnk_adherent_competition[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'LnkAdherentCompetition';
  }


}
