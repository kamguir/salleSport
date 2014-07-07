<?php

/**
 * RefVille filter form base class.
 *
 * @package    sallesport
 * @subpackage filter
 * @author     Your name here
 */
abstract class BaseRefVilleFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'libelle_ville' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'libelle_ville' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('ref_ville_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'RefVille';
  }

  public function getFields()
  {
    return array(
      'ville_id'      => 'Number',
      'libelle_ville' => 'Text',
    );
  }
}
