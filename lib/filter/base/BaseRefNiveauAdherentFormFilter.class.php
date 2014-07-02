<?php

/**
 * RefNiveauAdherent filter form base class.
 *
 * @package    sallesport
 * @subpackage filter
 * @author     Your name here
 */
abstract class BaseRefNiveauAdherentFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'niveau_adherent_libelle' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'niveau_adherent_libelle' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('ref_niveau_adherent_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'RefNiveauAdherent';
  }

  public function getFields()
  {
    return array(
      'niveau_adherent_id'      => 'Number',
      'niveau_adherent_libelle' => 'Text',
    );
  }
}
