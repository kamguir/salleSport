<?php

/**
 * RefTypeAdherent filter form base class.
 *
 * @package    sallesport
 * @subpackage filter
 * @author     Your name here
 */
abstract class BaseRefTypeAdherentFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'libelle_type_adherent' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'libelle_type_adherent' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('ref_type_adherent_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'RefTypeAdherent';
  }

  public function getFields()
  {
    return array(
      'id_type_adherent'      => 'Number',
      'libelle_type_adherent' => 'Text',
    );
  }
}
