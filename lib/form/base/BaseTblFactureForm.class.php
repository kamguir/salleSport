<?php

/**
 * TblFacture form base class.
 *
 * @method TblFacture getObject() Returns the current form's model object
 *
 * @package    sallesport
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseTblFactureForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_facture'     => new sfWidgetFormInputHidden(),
      'id_adherent'    => new sfWidgetFormPropelChoice(array('model' => 'TblAdherent', 'add_empty' => true)),
      'prix_facture'   => new sfWidgetFormInputText(),
      'date_reglement' => new sfWidgetFormDateTime(),
      'etat_paiement'  => new sfWidgetFormInputCheckbox(),
      'commentaire'    => new sfWidgetFormInputText(),
      'created_at'     => new sfWidgetFormDateTime(),
      'deleted_at'     => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id_facture'     => new sfValidatorChoice(array('choices' => array($this->getObject()->getIdFacture()), 'empty_value' => $this->getObject()->getIdFacture(), 'required' => false)),
      'id_adherent'    => new sfValidatorPropelChoice(array('model' => 'TblAdherent', 'column' => 'id_adherent', 'required' => false)),
      'prix_facture'   => new sfValidatorNumber(array('required' => false)),
      'date_reglement' => new sfValidatorDateTime(array('required' => false)),
      'etat_paiement'  => new sfValidatorBoolean(array('required' => false)),
      'commentaire'    => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'created_at'     => new sfValidatorDateTime(array('required' => false)),
      'deleted_at'     => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('tbl_facture[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'TblFacture';
  }


}
