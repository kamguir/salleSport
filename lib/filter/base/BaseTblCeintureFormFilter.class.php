<?php

/**
 * TblCeinture filter form base class.
 *
 * @package    sallesport
 * @subpackage filter
 * @author     Your name here
 */
abstract class BaseTblCeintureFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'adherent_id'         => new sfWidgetFormPropelChoice(array('model' => 'TblAdherent', 'add_empty' => true)),
      'grade_id'            => new sfWidgetFormPropelChoice(array('model' => 'RefGradeCeinture', 'add_empty' => true)),
      'competance_id'       => new sfWidgetFormPropelChoice(array('model' => 'RefCompetance', 'add_empty' => true)),
      'titre_entraineur_id' => new sfWidgetFormPropelChoice(array('model' => 'RefTitreEntraineur', 'add_empty' => true)),
      'ceinture_couleur_id' => new sfWidgetFormPropelChoice(array('model' => 'RefCeintureCouleur', 'add_empty' => true)),
      'date_acquisition'    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'created_at'          => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'deleted_at'          => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
    ));

    $this->setValidators(array(
      'adherent_id'         => new sfValidatorPropelChoice(array('required' => false, 'model' => 'TblAdherent', 'column' => 'id_adherent')),
      'grade_id'            => new sfValidatorPropelChoice(array('required' => false, 'model' => 'RefGradeCeinture', 'column' => 'grade_id')),
      'competance_id'       => new sfValidatorPropelChoice(array('required' => false, 'model' => 'RefCompetance', 'column' => 'competance_id')),
      'titre_entraineur_id' => new sfValidatorPropelChoice(array('required' => false, 'model' => 'RefTitreEntraineur', 'column' => 'titre_entraineur_id')),
      'ceinture_couleur_id' => new sfValidatorPropelChoice(array('required' => false, 'model' => 'RefCeintureCouleur', 'column' => 'ceinture_couleur_id')),
      'date_acquisition'    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'created_at'          => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'deleted_at'          => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
    ));

    $this->widgetSchema->setNameFormat('tbl_ceinture_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'TblCeinture';
  }

  public function getFields()
  {
    return array(
      'ceinture_id'         => 'Number',
      'adherent_id'         => 'ForeignKey',
      'grade_id'            => 'ForeignKey',
      'competance_id'       => 'ForeignKey',
      'titre_entraineur_id' => 'ForeignKey',
      'ceinture_couleur_id' => 'ForeignKey',
      'date_acquisition'    => 'Date',
      'created_at'          => 'Date',
      'deleted_at'          => 'Date',
    );
  }
}
