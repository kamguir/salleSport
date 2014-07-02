<?php

/**
 * RefCategorieAge filter form base class.
 *
 * @package    sallesport
 * @subpackage filter
 * @author     Your name here
 */
abstract class BaseRefCategorieAgeFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'categorie_age_min' => new sfWidgetFormFilterInput(),
      'categorie_age_max' => new sfWidgetFormFilterInput(),
      'categorie_libelle' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'categorie_age_min' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'categorie_age_max' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'categorie_libelle' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('ref_categorie_age_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'RefCategorieAge';
  }

  public function getFields()
  {
    return array(
      'categorie_age_id'  => 'Number',
      'categorie_age_min' => 'Number',
      'categorie_age_max' => 'Number',
      'categorie_libelle' => 'Text',
    );
  }
}
