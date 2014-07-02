<?php

/**
 * LnkJourEntrainementAdherent form base class.
 *
 * @method LnkJourEntrainementAdherent getObject() Returns the current form's model object
 *
 * @package    sallesport
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseLnkJourEntrainementAdherentForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_jour'     => new sfWidgetFormInputHidden(),
      'id_adherent' => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'id_jour'     => new sfValidatorPropelChoice(array('model' => 'RefJour', 'column' => 'id_jour', 'required' => false)),
      'id_adherent' => new sfValidatorPropelChoice(array('model' => 'TblAdherent', 'column' => 'id_adherent', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('lnk_jour_entrainement_adherent[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'LnkJourEntrainementAdherent';
  }


}
