<?php

/**
 * RefNiveauAdherent form base class.
 *
 * @method RefNiveauAdherent getObject() Returns the current form's model object
 *
 * @package    sallesport
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseRefNiveauAdherentForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'niveau_adherent_id'      => new sfWidgetFormInputHidden(),
      'niveau_adherent_libelle' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'niveau_adherent_id'      => new sfValidatorChoice(array('choices' => array($this->getObject()->getNiveauAdherentId()), 'empty_value' => $this->getObject()->getNiveauAdherentId(), 'required' => false)),
      'niveau_adherent_libelle' => new sfValidatorString(array('max_length' => 256, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('ref_niveau_adherent[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'RefNiveauAdherent';
  }


}
