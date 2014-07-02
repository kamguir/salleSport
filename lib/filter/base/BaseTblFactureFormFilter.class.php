<?php

/**
 * TblFacture filter form base class.
 *
 * @package    sallesport
 * @subpackage filter
 * @author     Your name here
 */
abstract class BaseTblFactureFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_adherent'    => new sfWidgetFormPropelChoice(array('model' => 'TblAdherent', 'add_empty' => true)),
      'prix_facture'   => new sfWidgetFormFilterInput(),
      'date_reglement' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'etat_paiement'  => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'commentaire'    => new sfWidgetFormFilterInput(),
      'created_at'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'deleted_at'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
    ));

    $this->setValidators(array(
      'id_adherent'    => new sfValidatorPropelChoice(array('required' => false, 'model' => 'TblAdherent', 'column' => 'id_adherent')),
      'prix_facture'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'date_reglement' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'etat_paiement'  => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'commentaire'    => new sfValidatorPass(array('required' => false)),
      'created_at'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'deleted_at'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
    ));

    $this->widgetSchema->setNameFormat('tbl_facture_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'TblFacture';
  }

  public function getFields()
  {
    return array(
      'id_facture'     => 'Number',
      'id_adherent'    => 'ForeignKey',
      'prix_facture'   => 'Number',
      'date_reglement' => 'Date',
      'etat_paiement'  => 'Boolean',
      'commentaire'    => 'Text',
      'created_at'     => 'Date',
      'deleted_at'     => 'Date',
    );
  }
}
