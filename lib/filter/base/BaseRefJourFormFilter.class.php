<?php

/**
 * RefJour filter form base class.
 *
 * @package    sallesport
 * @subpackage filter
 * @author     Your name here
 */
abstract class BaseRefJourFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'libelle_jour'                        => new sfWidgetFormFilterInput(),
      'lnk_jour_entrainement_adherent_list' => new sfWidgetFormPropelChoice(array('model' => 'TblAdherent', 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'libelle_jour'                        => new sfValidatorPass(array('required' => false)),
      'lnk_jour_entrainement_adherent_list' => new sfValidatorPropelChoice(array('model' => 'TblAdherent', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('ref_jour_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
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

    $criteria->addJoin(LnkJourEntrainementAdherentPeer::ID_JOUR, RefJourPeer::ID_JOUR);

    $value = array_pop($values);
    $criterion = $criteria->getNewCriterion(LnkJourEntrainementAdherentPeer::ID_ADHERENT, $value);

    foreach ($values as $value)
    {
      $criterion->addOr($criteria->getNewCriterion(LnkJourEntrainementAdherentPeer::ID_ADHERENT, $value));
    }

    $criteria->add($criterion);
  }

  public function getModelName()
  {
    return 'RefJour';
  }

  public function getFields()
  {
    return array(
      'id_jour'                             => 'Number',
      'libelle_jour'                        => 'Text',
      'lnk_jour_entrainement_adherent_list' => 'ManyKey',
    );
  }
}
