<?php

/**
 * RefTitreEntraineur form base class.
 *
 * @method RefTitreEntraineur getObject() Returns the current form's model object
 *
 * @package    sallesport
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseRefTitreEntraineurForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'titre_entraineur_id'      => new sfWidgetFormInputHidden(),
      'titre_entraineur_libelle' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'titre_entraineur_id'      => new sfValidatorChoice(array('choices' => array($this->getObject()->getTitreEntraineurId()), 'empty_value' => $this->getObject()->getTitreEntraineurId(), 'required' => false)),
      'titre_entraineur_libelle' => new sfValidatorString(array('max_length' => 256, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('ref_titre_entraineur[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'RefTitreEntraineur';
  }


}
