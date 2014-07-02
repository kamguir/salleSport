<?php

/**
 * RefCategorieAge form base class.
 *
 * @method RefCategorieAge getObject() Returns the current form's model object
 *
 * @package    sallesport
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseRefCategorieAgeForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'categorie_age_id'  => new sfWidgetFormInputHidden(),
      'categorie_age_min' => new sfWidgetFormInputText(),
      'categorie_age_max' => new sfWidgetFormInputText(),
      'categorie_libelle' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'categorie_age_id'  => new sfValidatorChoice(array('choices' => array($this->getObject()->getCategorieAgeId()), 'empty_value' => $this->getObject()->getCategorieAgeId(), 'required' => false)),
      'categorie_age_min' => new sfValidatorNumber(array('required' => false)),
      'categorie_age_max' => new sfValidatorNumber(array('required' => false)),
      'categorie_libelle' => new sfValidatorString(array('max_length' => 256, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('ref_categorie_age[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'RefCategorieAge';
  }


}
