<?php

/**
 * RefJour form base class.
 *
 * @method RefJour getObject() Returns the current form's model object
 *
 * @package    sallesport
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseRefJourForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_jour'                             => new sfWidgetFormInputHidden(),
      'libelle_jour'                        => new sfWidgetFormInputText(),
      'lnk_jour_entrainement_adherent_list' => new sfWidgetFormPropelChoice(array('multiple' => true, 'model' => 'TblAdherent')),
    ));

    $this->setValidators(array(
      'id_jour'                             => new sfValidatorChoice(array('choices' => array($this->getObject()->getIdJour()), 'empty_value' => $this->getObject()->getIdJour(), 'required' => false)),
      'libelle_jour'                        => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'lnk_jour_entrainement_adherent_list' => new sfValidatorPropelChoice(array('multiple' => true, 'model' => 'TblAdherent', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('ref_jour[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'RefJour';
  }


  public function updateDefaultsFromObject()
  {
    parent::updateDefaultsFromObject();

    if (isset($this->widgetSchema['lnk_jour_entrainement_adherent_list']))
    {
      $values = array();
      foreach ($this->object->getLnkJourEntrainementAdherents() as $obj)
      {
        $values[] = $obj->getIdAdherent();
      }

      $this->setDefault('lnk_jour_entrainement_adherent_list', $values);
    }

  }

  protected function doSave($con = null)
  {
    parent::doSave($con);

    $this->saveLnkJourEntrainementAdherentList($con);
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
    $c->add(LnkJourEntrainementAdherentPeer::ID_JOUR, $this->object->getPrimaryKey());
    LnkJourEntrainementAdherentPeer::doDelete($c, $con);

    $values = $this->getValue('lnk_jour_entrainement_adherent_list');
    if (is_array($values))
    {
      foreach ($values as $value)
      {
        $obj = new LnkJourEntrainementAdherent();
        $obj->setIdJour($this->object->getPrimaryKey());
        $obj->setIdAdherent($value);
        $obj->save();
      }
    }
  }

}
