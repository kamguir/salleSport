<?php

/**
 * LnkPlageHoraireAdherent filter form base class.
 *
 * @package    sallesport
 * @subpackage filter
 * @author     Your name here
 */
abstract class BaseLnkPlageHoraireAdherentFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
    ));

    $this->setValidators(array(
    ));

    $this->widgetSchema->setNameFormat('lnk_plage_horaire_adherent_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'LnkPlageHoraireAdherent';
  }

  public function getFields()
  {
    return array(
      'horaire_id'  => 'ForeignKey',
      'adherent_id' => 'ForeignKey',
    );
  }
}
