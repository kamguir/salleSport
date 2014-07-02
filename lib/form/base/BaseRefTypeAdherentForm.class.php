<?php

/**
 * RefTypeAdherent form base class.
 *
 * @method RefTypeAdherent getObject() Returns the current form's model object
 *
 * @package    sallesport
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseRefTypeAdherentForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_type_adherent'      => new sfWidgetFormInputHidden(),
      'libelle_type_adherent' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_type_adherent'      => new sfValidatorChoice(array('choices' => array($this->getObject()->getIdTypeAdherent()), 'empty_value' => $this->getObject()->getIdTypeAdherent(), 'required' => false)),
      'libelle_type_adherent' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('ref_type_adherent[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'RefTypeAdherent';
  }


}
