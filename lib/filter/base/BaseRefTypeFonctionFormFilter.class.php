<?php

/**
 * RefTypeFonction filter form base class.
 *
 * @package    sallesport
 * @subpackage filter
 * @author     Your name here
 */
abstract class BaseRefTypeFonctionFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'libelle_fonction' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'libelle_fonction' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('ref_type_fonction_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'RefTypeFonction';
  }

  public function getFields()
  {
    return array(
      'id_type_fonction' => 'Number',
      'libelle_fonction' => 'Text',
    );
  }
}
