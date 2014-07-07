<?php

/**
 * TblCompetition filter form base class.
 *
 * @package    sallesport
 * @subpackage filter
 * @author     Your name here
 */
abstract class BaseTblCompetitionFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'competition_libelle'           => new sfWidgetFormFilterInput(),
      'type_sport_id'                 => new sfWidgetFormPropelChoice(array('model' => 'RefTypeSport', 'add_empty' => true)),
      'ville_id'                      => new sfWidgetFormPropelChoice(array('model' => 'RefVille', 'add_empty' => true)),
      'prix_competition'              => new sfWidgetFormFilterInput(),
      'adresse_competition'           => new sfWidgetFormFilterInput(),
      'date_competition'              => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'created_at'                    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'deleted_at'                    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'lnk_adherent_competition_list' => new sfWidgetFormPropelChoice(array('model' => 'TblAdherent', 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'competition_libelle'           => new sfValidatorPass(array('required' => false)),
      'type_sport_id'                 => new sfValidatorPropelChoice(array('required' => false, 'model' => 'RefTypeSport', 'column' => 'id_type_sport')),
      'ville_id'                      => new sfValidatorPropelChoice(array('required' => false, 'model' => 'RefVille', 'column' => 'ville_id')),
      'prix_competition'              => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'adresse_competition'           => new sfValidatorPass(array('required' => false)),
      'date_competition'              => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'created_at'                    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'deleted_at'                    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'lnk_adherent_competition_list' => new sfValidatorPropelChoice(array('model' => 'TblAdherent', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('tbl_competition_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function addLnkAdherentCompetitionListColumnCriteria(Criteria $criteria, $field, $values)
  {
    if (!is_array($values))
    {
      $values = array($values);
    }

    if (!count($values))
    {
      return;
    }

    $criteria->addJoin(LnkAdherentCompetitionPeer::COMPETITION_ID, TblCompetitionPeer::COMPETITION_ID);

    $value = array_pop($values);
    $criterion = $criteria->getNewCriterion(LnkAdherentCompetitionPeer::ADHERENT_ID, $value);

    foreach ($values as $value)
    {
      $criterion->addOr($criteria->getNewCriterion(LnkAdherentCompetitionPeer::ADHERENT_ID, $value));
    }

    $criteria->add($criterion);
  }

  public function getModelName()
  {
    return 'TblCompetition';
  }

  public function getFields()
  {
    return array(
      'competition_id'                => 'Number',
      'competition_libelle'           => 'Text',
      'type_sport_id'                 => 'ForeignKey',
      'ville_id'                      => 'ForeignKey',
      'prix_competition'              => 'Number',
      'adresse_competition'           => 'Text',
      'date_competition'              => 'Date',
      'created_at'                    => 'Date',
      'deleted_at'                    => 'Date',
      'lnk_adherent_competition_list' => 'ManyKey',
    );
  }
}
