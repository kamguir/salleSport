<?php

/**
 * LnkJourSport filter form base class.
 *
 * @package    sallesport
 * @subpackage filter
 * @author     Your name here
 */
abstract class BaseLnkJourSportFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
    ));

    $this->setValidators(array(
    ));

    $this->widgetSchema->setNameFormat('lnk_jour_sport_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'LnkJourSport';
  }

  public function getFields()
  {
    return array(
      'id_type_sport' => 'ForeignKey',
      'id_jour'       => 'ForeignKey',
    );
  }
}
