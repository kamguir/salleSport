<?php

/**
 * RefCeintureCouleur filter form base class.
 *
 * @package    sallesport
 * @subpackage filter
 * @author     Your name here
 */
abstract class BaseRefCeintureCouleurFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'ceinture_couleur'    => new sfWidgetFormFilterInput(),
      'path_image'          => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'ceinture_couleur'    => new sfValidatorPass(array('required' => false)),
      'path_image'          => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('ref_ceinture_couleur_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'RefCeintureCouleur';
  }

  public function getFields()
  {
    return array(
      'ceinture_couleur_id' => 'Number',
      'ceinture_couleur'    => 'Text',
      'path_image'          => 'Text',
    );
  }
}
