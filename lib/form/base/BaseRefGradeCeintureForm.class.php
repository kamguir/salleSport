<?php

/**
 * RefGradeCeinture form base class.
 *
 * @method RefGradeCeinture getObject() Returns the current form's model object
 *
 * @package    sallesport
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseRefGradeCeintureForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'grade_id'     => new sfWidgetFormInputHidden(),
      'grade_niveau' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'grade_id'     => new sfValidatorChoice(array('choices' => array($this->getObject()->getGradeId()), 'empty_value' => $this->getObject()->getGradeId(), 'required' => false)),
      'grade_niveau' => new sfValidatorString(array('max_length' => 20, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('ref_grade_ceinture[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'RefGradeCeinture';
  }


}
