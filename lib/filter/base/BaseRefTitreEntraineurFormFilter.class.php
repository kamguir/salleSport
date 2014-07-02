<?php

/**
 * RefTitreEntraineur filter form base class.
 *
 * @package    sallesport
 * @subpackage filter
 * @author     Your name here
 */
abstract class BaseRefTitreEntraineurFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'titre_entraineur_libelle' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'titre_entraineur_libelle' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('ref_titre_entraineur_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'RefTitreEntraineur';
  }

  public function getFields()
  {
    return array(
      'titre_entraineur_id'      => 'Number',
      'titre_entraineur_libelle' => 'Text',
    );
  }
}
