<?php

/**
 * RefTypeSport form base class.
 *
 * @method RefTypeSport getObject() Returns the current form's model object
 *
 * @package    sallesport
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseRefTypeSportForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_type_sport'    => new sfWidgetFormInputHidden(),
      'libelle'          => new sfWidgetFormInputText(),
      'montant_sport'    => new sfWidgetFormInputText(),
      'sport_image_path' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_type_sport'    => new sfValidatorChoice(array('choices' => array($this->getObject()->getIdTypeSport()), 'empty_value' => $this->getObject()->getIdTypeSport(), 'required' => false)),
      'libelle'          => new sfValidatorString(array('max_length' => 250, 'required' => false)),
      'montant_sport'    => new sfValidatorNumber(array('required' => false)),
      'sport_image_path' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('ref_type_sport[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'RefTypeSport';
  }


}
