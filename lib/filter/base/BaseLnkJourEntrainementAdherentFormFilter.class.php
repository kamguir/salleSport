<?php

/**
 * LnkJourEntrainementAdherent filter form base class.
 *
 * @package    sallesport
 * @subpackage filter
 * @author     Your name here
 */
abstract class BaseLnkJourEntrainementAdherentFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
    ));

    $this->setValidators(array(
    ));

    $this->widgetSchema->setNameFormat('lnk_jour_entrainement_adherent_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'LnkJourEntrainementAdherent';
  }

  public function getFields()
  {
    return array(
      'id_jour'     => 'ForeignKey',
      'id_adherent' => 'ForeignKey',
    );
  }
}
