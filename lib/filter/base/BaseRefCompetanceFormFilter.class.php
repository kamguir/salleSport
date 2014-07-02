<?php

/**
 * RefCompetance filter form base class.
 *
 * @package    sallesport
 * @subpackage filter
 * @author     Your name here
 */
abstract class BaseRefCompetanceFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'competance_libelle' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'competance_libelle' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('ref_competance_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'RefCompetance';
  }

  public function getFields()
  {
    return array(
      'competance_id'      => 'Number',
      'competance_libelle' => 'Text',
    );
  }
}
