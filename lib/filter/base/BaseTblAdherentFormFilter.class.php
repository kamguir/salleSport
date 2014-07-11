<?php

/**
 * TblAdherent filter form base class.
 *
 * @package    sallesport
 * @subpackage filter
 * @author     Your name here
 */
abstract class BaseTblAdherentFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'entraineur_id'                       => new sfWidgetFormPropelChoice(array('model' => 'TblAdherent', 'add_empty' => true)),
      'cin_adherent'                        => new sfWidgetFormFilterInput(),
      'nom_adherent'                        => new sfWidgetFormFilterInput(),
      'prenom_adherent'                     => new sfWidgetFormFilterInput(),
      'id_civilite'                         => new sfWidgetFormPropelChoice(array('model' => 'RefCivilite', 'add_empty' => true)),
      'id_situation'                        => new sfWidgetFormPropelChoice(array('model' => 'RefSituation', 'add_empty' => true)),
      'id_type_adherent'                    => new sfWidgetFormPropelChoice(array('model' => 'RefTypeAdherent', 'add_empty' => true)),
      'niveau_adherent_id'                  => new sfWidgetFormPropelChoice(array('model' => 'RefNiveauAdherent', 'add_empty' => true)),
      'id_type_sport'                       => new sfWidgetFormPropelChoice(array('model' => 'RefTypeSport', 'add_empty' => true)),
      'age_adherent'                        => new sfWidgetFormFilterInput(),
      'num_tel'                             => new sfWidgetFormFilterInput(),
      'adresse_adherent'                    => new sfWidgetFormFilterInput(),
      'image_adherent'                      => new sfWidgetFormFilterInput(),
      'date_adhesion'                       => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'seance_horaire_id'                   => new sfWidgetFormPropelChoice(array('model' => 'RefSeanceHoraire', 'add_empty' => true)),
      'updated_at'                          => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'deleted_at'                          => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'lnk_adherent_competition_list'       => new sfWidgetFormPropelChoice(array('model' => 'TblCompetition', 'add_empty' => true)),
      'lnk_jour_entrainement_adherent_list' => new sfWidgetFormPropelChoice(array('model' => 'RefJour', 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'entraineur_id'                       => new sfValidatorPropelChoice(array('required' => false, 'model' => 'TblAdherent', 'column' => 'id_adherent')),
      'cin_adherent'                        => new sfValidatorPass(array('required' => false)),
      'nom_adherent'                        => new sfValidatorPass(array('required' => false)),
      'prenom_adherent'                     => new sfValidatorPass(array('required' => false)),
      'id_civilite'                         => new sfValidatorPropelChoice(array('required' => false, 'model' => 'RefCivilite', 'column' => 'id_civilite')),
      'id_situation'                        => new sfValidatorPropelChoice(array('required' => false, 'model' => 'RefSituation', 'column' => 'id_situation')),
      'id_type_adherent'                    => new sfValidatorPropelChoice(array('required' => false, 'model' => 'RefTypeAdherent', 'column' => 'id_type_adherent')),
      'niveau_adherent_id'                  => new sfValidatorPropelChoice(array('required' => false, 'model' => 'RefNiveauAdherent', 'column' => 'niveau_adherent_id')),
      'id_type_sport'                       => new sfValidatorPropelChoice(array('required' => false, 'model' => 'RefTypeSport', 'column' => 'id_type_sport')),
      'age_adherent'                        => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'num_tel'                             => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'adresse_adherent'                    => new sfValidatorPass(array('required' => false)),
      'image_adherent'                      => new sfValidatorPass(array('required' => false)),
      'date_adhesion'                       => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'seance_horaire_id'                   => new sfValidatorPropelChoice(array('required' => false, 'model' => 'RefSeanceHoraire', 'column' => 'seance_horaire_id')),
      'updated_at'                          => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'deleted_at'                          => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'lnk_adherent_competition_list'       => new sfValidatorPropelChoice(array('model' => 'TblCompetition', 'required' => false)),
      'lnk_jour_entrainement_adherent_list' => new sfValidatorPropelChoice(array('model' => 'RefJour', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('tbl_adherent_filters[%s]');

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

    $criteria->addJoin(LnkAdherentCompetitionPeer::ADHERENT_ID, TblAdherentPeer::ID_ADHERENT);

    $value = array_pop($values);
    $criterion = $criteria->getNewCriterion(LnkAdherentCompetitionPeer::COMPETITION_ID, $value);

    foreach ($values as $value)
    {
      $criterion->addOr($criteria->getNewCriterion(LnkAdherentCompetitionPeer::COMPETITION_ID, $value));
    }

    $criteria->add($criterion);
  }

  public function addLnkJourEntrainementAdherentListColumnCriteria(Criteria $criteria, $field, $values)
  {
    if (!is_array($values))
    {
      $values = array($values);
    }

    if (!count($values))
    {
      return;
    }

    $criteria->addJoin(LnkJourEntrainementAdherentPeer::ID_ADHERENT, TblAdherentPeer::ID_ADHERENT);

    $value = array_pop($values);
    $criterion = $criteria->getNewCriterion(LnkJourEntrainementAdherentPeer::ID_JOUR, $value);

    foreach ($values as $value)
    {
      $criterion->addOr($criteria->getNewCriterion(LnkJourEntrainementAdherentPeer::ID_JOUR, $value));
    }

    $criteria->add($criterion);
  }

  public function getModelName()
  {
    return 'TblAdherent';
  }

  public function getFields()
  {
    return array(
      'id_adherent'                         => 'Number',
      'entraineur_id'                       => 'ForeignKey',
      'cin_adherent'                        => 'Text',
      'nom_adherent'                        => 'Text',
      'prenom_adherent'                     => 'Text',
      'id_civilite'                         => 'ForeignKey',
      'id_situation'                        => 'ForeignKey',
      'id_type_adherent'                    => 'ForeignKey',
      'niveau_adherent_id'                  => 'ForeignKey',
      'id_type_sport'                       => 'ForeignKey',
      'age_adherent'                        => 'Number',
      'num_tel'                             => 'Number',
      'adresse_adherent'                    => 'Text',
      'image_adherent'                      => 'Text',
      'date_adhesion'                       => 'Date',
      'seance_horaire_id'                   => 'ForeignKey',
      'updated_at'                          => 'Date',
      'deleted_at'                          => 'Date',
      'lnk_adherent_competition_list'       => 'ManyKey',
      'lnk_jour_entrainement_adherent_list' => 'ManyKey',
    );
  }
}
