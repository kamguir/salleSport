<?php

/**
 * TblAssurance filter form base class.
 *
 * @package    sallesport
 * @subpackage filter
 * @author     Your name here
 */
abstract class BaseTblAssuranceFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'adherent_id'      => new sfWidgetFormPropelChoice(array('model' => 'TblAdherent', 'add_empty' => true)),
      'ref_assurance_id' => new sfWidgetFormPropelChoice(array('model' => 'RefAssurance', 'add_empty' => true)),
      'prix_assurance'   => new sfWidgetFormFilterInput(),
      'etat_paiement'    => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'date_assurance'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'created_at'       => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'deleted_at'       => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
    ));

    $this->setValidators(array(
      'adherent_id'      => new sfValidatorPropelChoice(array('required' => false, 'model' => 'TblAdherent', 'column' => 'id_adherent')),
      'ref_assurance_id' => new sfValidatorPropelChoice(array('required' => false, 'model' => 'RefAssurance', 'column' => 'assurance_id')),
      'prix_assurance'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'etat_paiement'    => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'date_assurance'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'created_at'       => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'deleted_at'       => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
    ));

    $this->widgetSchema->setNameFormat('tbl_assurance_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'TblAssurance';
  }

  public function getFields()
  {
    return array(
      'assurance_id'     => 'Number',
      'adherent_id'      => 'ForeignKey',
      'ref_assurance_id' => 'ForeignKey',
      'prix_assurance'   => 'Number',
      'etat_paiement'    => 'Boolean',
      'date_assurance'   => 'Date',
      'created_at'       => 'Date',
      'deleted_at'       => 'Date',
    );
  }
}
