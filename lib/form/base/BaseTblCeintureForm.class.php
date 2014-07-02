<?php

/**
 * TblCeinture form base class.
 *
 * @method TblCeinture getObject() Returns the current form's model object
 *
 * @package    sallesport
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseTblCeintureForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'ceinture_id'         => new sfWidgetFormInputHidden(),
      'adherent_id'         => new sfWidgetFormPropelChoice(array('model' => 'TblAdherent', 'add_empty' => true)),
      'grade_id'            => new sfWidgetFormPropelChoice(array('model' => 'RefGradeCeinture', 'add_empty' => true)),
      'competance_id'       => new sfWidgetFormPropelChoice(array('model' => 'RefCompetance', 'add_empty' => true)),
      'titre_entraineur_id' => new sfWidgetFormPropelChoice(array('model' => 'RefTitreEntraineur', 'add_empty' => true)),
      'ceinture_couleur_id' => new sfWidgetFormPropelChoice(array('model' => 'RefCeintureCouleur', 'add_empty' => true)),
      'date_acquisition'    => new sfWidgetFormDateTime(),
      'created_at'          => new sfWidgetFormDateTime(),
      'deleted_at'          => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'ceinture_id'         => new sfValidatorChoice(array('choices' => array($this->getObject()->getCeintureId()), 'empty_value' => $this->getObject()->getCeintureId(), 'required' => false)),
      'adherent_id'         => new sfValidatorPropelChoice(array('model' => 'TblAdherent', 'column' => 'id_adherent', 'required' => false)),
      'grade_id'            => new sfValidatorPropelChoice(array('model' => 'RefGradeCeinture', 'column' => 'grade_id', 'required' => false)),
      'competance_id'       => new sfValidatorPropelChoice(array('model' => 'RefCompetance', 'column' => 'competance_id', 'required' => false)),
      'titre_entraineur_id' => new sfValidatorPropelChoice(array('model' => 'RefTitreEntraineur', 'column' => 'titre_entraineur_id', 'required' => false)),
      'ceinture_couleur_id' => new sfValidatorPropelChoice(array('model' => 'RefCeintureCouleur', 'column' => 'ceinture_couleur_id', 'required' => false)),
      'date_acquisition'    => new sfValidatorDateTime(array('required' => false)),
      'created_at'          => new sfValidatorDateTime(array('required' => false)),
      'deleted_at'          => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('tbl_ceinture[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'TblCeinture';
  }


}
