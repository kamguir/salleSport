<?php

/**
 * RefCompetance form base class.
 *
 * @method RefCompetance getObject() Returns the current form's model object
 *
 * @package    sallesport
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseRefCompetanceForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'competance_id'      => new sfWidgetFormInputHidden(),
      'competance_libelle' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'competance_id'      => new sfValidatorChoice(array('choices' => array($this->getObject()->getCompetanceId()), 'empty_value' => $this->getObject()->getCompetanceId(), 'required' => false)),
      'competance_libelle' => new sfValidatorString(array('max_length' => 256, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('ref_competance[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'RefCompetance';
  }


}
