<?php

/**
 * TblAssurance form base class.
 *
 * @method TblAssurance getObject() Returns the current form's model object
 *
 * @package    sallesport
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseTblAssuranceForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'assurance_id'     => new sfWidgetFormInputHidden(),
      'adherent_id'      => new sfWidgetFormPropelChoice(array('model' => 'TblAdherent', 'add_empty' => true)),
      'ref_assurance_id' => new sfWidgetFormPropelChoice(array('model' => 'RefAssurance', 'add_empty' => true)),
      'prix_assurance'   => new sfWidgetFormInputText(),
      'etat_paiement'    => new sfWidgetFormInputCheckbox(),
      'date_assurance'   => new sfWidgetFormDateTime(),
      'created_at'       => new sfWidgetFormDateTime(),
      'deleted_at'       => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'assurance_id'     => new sfValidatorChoice(array('choices' => array($this->getObject()->getAssuranceId()), 'empty_value' => $this->getObject()->getAssuranceId(), 'required' => false)),
      'adherent_id'      => new sfValidatorPropelChoice(array('model' => 'TblAdherent', 'column' => 'id_adherent', 'required' => false)),
      'ref_assurance_id' => new sfValidatorPropelChoice(array('model' => 'RefAssurance', 'column' => 'assurance_id', 'required' => false)),
      'prix_assurance'   => new sfValidatorNumber(array('required' => false)),
      'etat_paiement'    => new sfValidatorBoolean(array('required' => false)),
      'date_assurance'   => new sfValidatorDateTime(array('required' => false)),
      'created_at'       => new sfValidatorDateTime(array('required' => false)),
      'deleted_at'       => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('tbl_assurance[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'TblAssurance';
  }


}
