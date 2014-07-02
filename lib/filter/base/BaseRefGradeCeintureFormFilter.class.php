<?php

/**
 * RefGradeCeinture filter form base class.
 *
 * @package    sallesport
 * @subpackage filter
 * @author     Your name here
 */
abstract class BaseRefGradeCeintureFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'grade_niveau' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'grade_niveau' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('ref_grade_ceinture_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'RefGradeCeinture';
  }

  public function getFields()
  {
    return array(
      'grade_id'     => 'Number',
      'grade_niveau' => 'Text',
    );
  }
}
