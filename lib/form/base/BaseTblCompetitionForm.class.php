<?php

/**
 * TblCompetition form base class.
 *
 * @method TblCompetition getObject() Returns the current form's model object
 *
 * @package    sallesport
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseTblCompetitionForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'competition_id'                => new sfWidgetFormInputHidden(),
      'competition_libelle'           => new sfWidgetFormInputText(),
      'type_sport_id'                 => new sfWidgetFormPropelChoice(array('model' => 'RefTypeSport', 'add_empty' => true)),
      'ville_id'                      => new sfWidgetFormPropelChoice(array('model' => 'RefVille', 'add_empty' => true)),
      'prix_competition'              => new sfWidgetFormInputText(),
      'adresse_competition'           => new sfWidgetFormInputText(),
      'date_competition'              => new sfWidgetFormDateTime(),
      'created_at'                    => new sfWidgetFormDateTime(),
      'deleted_at'                    => new sfWidgetFormDateTime(),
      'lnk_adherent_competition_list' => new sfWidgetFormPropelChoice(array('multiple' => true, 'model' => 'TblAdherent')),
    ));

    $this->setValidators(array(
      'competition_id'                => new sfValidatorChoice(array('choices' => array($this->getObject()->getCompetitionId()), 'empty_value' => $this->getObject()->getCompetitionId(), 'required' => false)),
      'competition_libelle'           => new sfValidatorString(array('max_length' => 256, 'required' => false)),
      'type_sport_id'                 => new sfValidatorPropelChoice(array('model' => 'RefTypeSport', 'column' => 'id_type_sport', 'required' => false)),
      'ville_id'                      => new sfValidatorPropelChoice(array('model' => 'RefVille', 'column' => 'ville_id', 'required' => false)),
      'prix_competition'              => new sfValidatorNumber(array('required' => false)),
      'adresse_competition'           => new sfValidatorString(array('max_length' => 256, 'required' => false)),
      'date_competition'              => new sfValidatorDateTime(array('required' => false)),
      'created_at'                    => new sfValidatorDateTime(array('required' => false)),
      'deleted_at'                    => new sfValidatorDateTime(array('required' => false)),
      'lnk_adherent_competition_list' => new sfValidatorPropelChoice(array('multiple' => true, 'model' => 'TblAdherent', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('tbl_competition[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'TblCompetition';
  }


  public function updateDefaultsFromObject()
  {
    parent::updateDefaultsFromObject();

    if (isset($this->widgetSchema['lnk_adherent_competition_list']))
    {
      $values = array();
      foreach ($this->object->getLnkAdherentCompetitions() as $obj)
      {
        $values[] = $obj->getAdherentId();
      }

      $this->setDefault('lnk_adherent_competition_list', $values);
    }

  }

  protected function doSave($con = null)
  {
    parent::doSave($con);

    $this->saveLnkAdherentCompetitionList($con);
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
    $c->add(LnkAdherentCompetitionPeer::COMPETITION_ID, $this->object->getPrimaryKey());
    LnkAdherentCompetitionPeer::doDelete($c, $con);

    $values = $this->getValue('lnk_adherent_competition_list');
    if (is_array($values))
    {
      foreach ($values as $value)
      {
        $obj = new LnkAdherentCompetition();
        $obj->setCompetitionId($this->object->getPrimaryKey());
        $obj->setAdherentId($value);
        $obj->save();
      }
    }
  }

}
