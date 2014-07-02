<?php

/**
 * RefAssurance filter form base class.
 *
 * @package    sallesport
 * @subpackage filter
 * @author     Your name here
 */
abstract class BaseRefAssuranceFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'libelle_assurance' => new sfWidgetFormFilterInput(),
      'prix_assurance'    => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'libelle_assurance' => new sfValidatorPass(array('required' => false)),
      'prix_assurance'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('ref_assurance_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'RefAssurance';
  }

  public function getFields()
  {
    return array(
      'assurance_id'      => 'Number',
      'libelle_assurance' => 'Text',
      'prix_assurance'    => 'Number',
    );
  }
}
