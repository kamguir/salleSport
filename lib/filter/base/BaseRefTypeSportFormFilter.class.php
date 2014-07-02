<?php

/**
 * RefTypeSport filter form base class.
 *
 * @package    sallesport
 * @subpackage filter
 * @author     Your name here
 */
abstract class BaseRefTypeSportFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'libelle'          => new sfWidgetFormFilterInput(),
      'montant_sport'    => new sfWidgetFormFilterInput(),
      'sport_image_path' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'libelle'          => new sfValidatorPass(array('required' => false)),
      'montant_sport'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'sport_image_path' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('ref_type_sport_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'RefTypeSport';
  }

  public function getFields()
  {
    return array(
      'id_type_sport'    => 'Number',
      'libelle'          => 'Text',
      'montant_sport'    => 'Number',
      'sport_image_path' => 'Text',
    );
  }
}
