<?php

/**
 * LnkSportEntraineur filter form base class.
 *
 * @package    sallesport
 * @subpackage filter
 * @author     Your name here
 */
abstract class BaseLnkSportEntraineurFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
    ));

    $this->setValidators(array(
    ));

    $this->widgetSchema->setNameFormat('lnk_sport_entraineur_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'LnkSportEntraineur';
  }

  public function getFields()
  {
    return array(
      'id_sport'      => 'ForeignKey',
      'id_entraineur' => 'ForeignKey',
    );
  }
}
