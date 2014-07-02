<?php

/**
 * LnkSportAdherent filter form base class.
 *
 * @package    sallesport
 * @subpackage filter
 * @author     Your name here
 */
abstract class BaseLnkSportAdherentFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
    ));

    $this->setValidators(array(
    ));

    $this->widgetSchema->setNameFormat('lnk_sport_adherent_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'LnkSportAdherent';
  }

  public function getFields()
  {
    return array(
      'id_sport'    => 'ForeignKey',
      'id_adherent' => 'ForeignKey',
    );
  }
}
