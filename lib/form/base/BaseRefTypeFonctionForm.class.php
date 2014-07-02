<?php

/**
 * RefTypeFonction form base class.
 *
 * @method RefTypeFonction getObject() Returns the current form's model object
 *
 * @package    sallesport
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseRefTypeFonctionForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_type_fonction' => new sfWidgetFormInputHidden(),
      'libelle_fonction' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_type_fonction' => new sfValidatorChoice(array('choices' => array($this->getObject()->getIdTypeFonction()), 'empty_value' => $this->getObject()->getIdTypeFonction(), 'required' => false)),
      'libelle_fonction' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('ref_type_fonction[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'RefTypeFonction';
  }


}
