<?php

/**
 * RefPlageHoraire filter form base class.
 *
 * @package    sallesport
 * @subpackage filter
 * @author     Your name here
 */
abstract class BaseRefPlageHoraireFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'horaire_plage' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'horaire_plage' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('ref_plage_horaire_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'RefPlageHoraire';
  }

  public function getFields()
  {
    return array(
      'horaire_id'    => 'Number',
      'horaire_plage' => 'Text',
    );
  }
}
