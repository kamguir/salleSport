<?php

/**
 * RefCeintureNiveau form base class.
 *
 * @method RefCeintureNiveau getObject() Returns the current form's model object
 *
 * @package    sallesport
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseRefCeintureNiveauForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'ceinture_niveau_id' => new sfWidgetFormInputHidden(),
      'ceinture_niveau'    => new sfWidgetFormInputText(),
      'path_image'         => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'ceinture_niveau_id' => new sfValidatorChoice(array('choices' => array($this->getObject()->getCeintureNiveauId()), 'empty_value' => $this->getObject()->getCeintureNiveauId(), 'required' => false)),
      'ceinture_niveau'    => new sfValidatorString(array('max_length' => 256, 'required' => false)),
      'path_image'         => new sfValidatorString(array('max_length' => 256, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('ref_ceinture_niveau[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'RefCeintureNiveau';
  }


}
