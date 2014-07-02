<?php

/**
 * RefCivilite filter form base class.
 *
 * @package    sallesport
 * @subpackage filter
 * @author     Your name here
 */
abstract class BaseRefCiviliteFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'libelle_civilite' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'libelle_civilite' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('ref_civilite_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'RefCivilite';
  }

  public function getFields()
  {
    return array(
      'id_civilite'      => 'Number',
      'libelle_civilite' => 'Text',
    );
  }
}
