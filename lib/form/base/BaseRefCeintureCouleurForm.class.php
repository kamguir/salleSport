<?php

/**
 * RefCeintureCouleur form base class.
 *
 * @method RefCeintureCouleur getObject() Returns the current form's model object
 *
 * @package    sallesport
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseRefCeintureCouleurForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'ceinture_couleur_id' => new sfWidgetFormInputHidden(),
      'ceinture_couleur'    => new sfWidgetFormInputText(),
      'path_image'          => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'ceinture_couleur_id' => new sfValidatorChoice(array('choices' => array($this->getObject()->getCeintureCouleurId()), 'empty_value' => $this->getObject()->getCeintureCouleurId(), 'required' => false)),
      'ceinture_couleur'    => new sfValidatorString(array('max_length' => 256, 'required' => false)),
      'path_image'          => new sfValidatorString(array('max_length' => 256, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('ref_ceinture_couleur[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'RefCeintureCouleur';
  }


}
