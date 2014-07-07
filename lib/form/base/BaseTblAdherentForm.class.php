<?php

/**
 * TblAdherent form base class.
 *
 * @method TblAdherent getObject() Returns the current form's model object
 *
 * @package    sallesport
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseTblAdherentForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_adherent'                         => new sfWidgetFormInputHidden(),
      'cin_adherent'                        => new sfWidgetFormInputText(),
      'nom_adherent'                        => new sfWidgetFormInputText(),
      'prenom_adherent'                     => new sfWidgetFormInputText(),
      'id_civilite'                         => new sfWidgetFormPropelChoice(array('model' => 'RefCivilite', 'add_empty' => true)),
      'id_situation'                        => new sfWidgetFormPropelChoice(array('model' => 'RefSituation', 'add_empty' => true)),
      'id_type_adherent'                    => new sfWidgetFormPropelChoice(array('model' => 'RefTypeAdherent', 'add_empty' => true)),
      'niveau_adherent_id'                  => new sfWidgetFormPropelChoice(array('model' => 'RefNiveauAdherent', 'add_empty' => true)),
      'id_type_sport'                       => new sfWidgetFormPropelChoice(array('model' => 'RefTypeSport', 'add_empty' => true)),
      'age_adherent'                        => new sfWidgetFormInputText(),
      'num_tel'                             => new sfWidgetFormInputText(),
      'adresse_adherent'                    => new sfWidgetFormInputText(),
      'image_adherent'                      => new sfWidgetFormInputText(),
      'date_adhesion'                       => new sfWidgetFormDateTime(),
      'seance_horaire_id'                   => new sfWidgetFormPropelChoice(array('model' => 'RefSeanceHoraire', 'add_empty' => true)),
      'updated_at'                          => new sfWidgetFormDateTime(),
      'deleted_at'                          => new sfWidgetFormDateTime(),
      'lnk_adherent_competition_list'       => new sfWidgetFormPropelChoice(array('multiple' => true, 'model' => 'TblCompetition')),
      'lnk_jour_entrainement_adherent_list' => new sfWidgetFormPropelChoice(array('multiple' => true, 'model' => 'RefJour')),
    ));

    $this->setValidators(array(
      'id_adherent'                         => new sfValidatorChoice(array('choices' => array($this->getObject()->getIdAdherent()), 'empty_value' => $this->getObject()->getIdAdherent(), 'required' => false)),
      'cin_adherent'                        => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'nom_adherent'                        => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'prenom_adherent'                     => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'id_civilite'                         => new sfValidatorPropelChoice(array('model' => 'RefCivilite', 'column' => 'id_civilite', 'required' => false)),
      'id_situation'                        => new sfValidatorPropelChoice(array('model' => 'RefSituation', 'column' => 'id_situation', 'required' => false)),
      'id_type_adherent'                    => new sfValidatorPropelChoice(array('model' => 'RefTypeAdherent', 'column' => 'id_type_adherent', 'required' => false)),
      'niveau_adherent_id'                  => new sfValidatorPropelChoice(array('model' => 'RefNiveauAdherent', 'column' => 'niveau_adherent_id', 'required' => false)),
      'id_type_sport'                       => new sfValidatorPropelChoice(array('model' => 'RefTypeSport', 'column' => 'id_type_sport', 'required' => false)),
      'age_adherent'                        => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'num_tel'                             => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'adresse_adherent'                    => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'image_adherent'                      => new sfValidatorString(array('max_length' => 128, 'required' => false)),
      'date_adhesion'                       => new sfValidatorDateTime(array('required' => false)),
      'seance_horaire_id'                   => new sfValidatorPropelChoice(array('model' => 'RefSeanceHoraire', 'column' => 'seance_horaire_id', 'required' => false)),
      'updated_at'                          => new sfValidatorDateTime(array('required' => false)),
      'deleted_at'                          => new sfValidatorDateTime(array('required' => false)),
      'lnk_adherent_competition_list'       => new sfValidatorPropelChoice(array('multiple' => true, 'model' => 'TblCompetition', 'required' => false)),
      'lnk_jour_entrainement_adherent_list' => new sfValidatorPropelChoice(array('multiple' => true, 'model' => 'RefJour', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('tbl_adherent[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'TblAdherent';
  }


  public function updateDefaultsFromObject()
  {
    parent::updateDefaultsFromObject();

    if (isset($this->widgetSchema['lnk_adherent_competition_list']))
    {
      $values = array();
      foreach ($this->object->getLnkAdherentCompetitions() as $obj)
      {
        $values[] = $obj->getCompetitionId();
      }

      $this->setDefault('lnk_adherent_competition_list', $values);
    }

    if (isset($this->widgetSchema['lnk_jour_entrainement_adherent_list']))
    {
      $values = array();
      foreach ($this->object->getLnkJourEntrainementAdherents() as $obj)
      {
        $values[] = $obj->getIdJour();
      }

      $this->setDefault('lnk_jour_entrainement_adherent_list', $values);
    }

  }

  protected function doSave($con = null)
  {
    parent::doSave($con);

    $this->saveLnkAdherentCompetitionList($con);
    $this->saveLnkJourEntrainementAdherentList($con);
  }

  public function saveLnkAdherentCompetitionList($con = null)
  {
    if (!$this->isValid())
    {
      throw $this->getErrorSchema();
    }

    if (!isset($this->widgetSchema['lnk_adherent_competition_list']))
    {
      // somebody has unset this widget
      return;
    }

    if (null === $con)
    {
      $con = $this->getConnection();
    }

    $c = new Criteria();
    $c->add(LnkAdherentCompetitionPeer::ADHERENT_ID, $this->object->getPrimaryKey());
    LnkAdherentCompetitionPeer::doDelete($c, $con);

    $values = $this->getValue('lnk_adherent_competition_list');
    if (is_array($values))
    {
      foreach ($values as $value)
      {
        $obj = new LnkAdherentCompetition();
        $obj->setAdherentId($this->object->getPrimaryKey());
        $obj->setCompetitionId($value);
        $obj->save();
      }
    }
  }

  public function saveLnkJourEntrainementAdherentList($con = null)
  {
    if (!$this->isValid())
    {
      throw $this->getErrorSchema();
    }

    if (!isset($this->widgetSchema['lnk_jour_entrainement_adherent_list']))
    {
      // somebody has unset this widget
      return;
    }

    if (null === $con)
    {
      $con = $this->getConnection();
    }

    $c = new Criteria();
    $c->add(LnkJourEntrainementAdherentPeer::ID_ADHERENT, $this->object->getPrimaryKey());
    LnkJourEntrainementAdherentPeer::doDelete($c, $con);

    $values = $this->getValue('lnk_jour_entrainement_adherent_list');
    if (is_array($values))
    {
      foreach ($values as $value)
      {
        $obj = new LnkJourEntrainementAdherent();
        $obj->setIdAdherent($this->object->getPrimaryKey());
        $obj->setIdJour($value);
        $obj->save();
      }
    }
  }

}
