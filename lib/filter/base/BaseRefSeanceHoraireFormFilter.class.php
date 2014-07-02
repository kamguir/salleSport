<?php

/**
 * RefSeanceHoraire filter form base class.
 *
 * @package    sallesport
 * @subpackage filter
 * @author     Your name here
 */
abstract class BaseRefSeanceHoraireFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'seance_horaire'    => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'seance_horaire'    => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('ref_seance_horaire_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'RefSeanceHoraire';
  }

  public function getFields()
  {
    return array(
      'seance_horaire_id' => 'Number',
      'seance_horaire'    => 'Text',
    );
  }
}
