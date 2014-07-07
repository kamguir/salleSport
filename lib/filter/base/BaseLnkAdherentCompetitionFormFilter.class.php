<?php

/**
 * LnkAdherentCompetition filter form base class.
 *
 * @package    sallesport
 * @subpackage filter
 * @author     Your name here
 */
abstract class BaseLnkAdherentCompetitionFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
    ));

    $this->setValidators(array(
    ));

    $this->widgetSchema->setNameFormat('lnk_adherent_competition_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'LnkAdherentCompetition';
  }

  public function getFields()
  {
    return array(
      'adherent_id'    => 'ForeignKey',
      'competition_id' => 'ForeignKey',
    );
  }
}
