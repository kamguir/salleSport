<?php

/**
 * RefCeintureNiveau filter form base class.
 *
 * @package    sallesport
 * @subpackage filter
 * @author     Your name here
 */
abstract class BaseRefCeintureNiveauFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'ceinture_niveau'    => new sfWidgetFormFilterInput(),
      'path_image'         => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'ceinture_niveau'    => new sfValidatorPass(array('required' => false)),
      'path_image'         => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('ref_ceinture_niveau_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'RefCeintureNiveau';
  }

  public function getFields()
  {
    return array(
      'ceinture_niveau_id' => 'Number',
      'ceinture_niveau'    => 'Text',
      'path_image'         => 'Text',
    );
  }
}
