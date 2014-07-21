<?php

/**
 * TblAssurance form.
 *
 * @package    sallesport
 * @subpackage form
 * @author     Your name here
 */
class TblAssuranceForm extends BaseTblAssuranceForm {

    public function configure() {
        
        $myObjPrixAssurance = $this->getOption('objTypeAssurance');
        
        $this->setWidget('date_assurance', new orcaWidgetFormJQueryDate(array(
            'image' => "/images/pictos/calendar.png",
            'config' => '{firstDay: 1, buttonText: \'Changer la date\'}',
            'culture' => 'fr'
        )));

        $qlisteAdherents = TblAdherentQuery::create()
                ->filterByIdTypeAdherent(RefTypeAdherent::ADHERENT);
        $this->widgetSchema['adherent_id'] = new sfWidgetFormPropelChoice(array('model' => 'tblAdherent', 'criteria' => $qlisteAdherents));
        $this->validatorSchema['adherent_id'] = new sfValidatorPropelChoice(array('model' => 'tblAdherent'));
        $this->widgetSchema['adherent_id']->setAttribute('required', true);
        $this->getWidget("adherent_id")->setOption("add_empty", '-- Aucun --');
        $this->widgetSchema['adherent_id']->setAttribute("class", "form-control");

        $this->widgetSchema['ref_assurance_id'] = new sfWidgetFormPropelChoice(array('model' => 'refAssurance'));
        $this->validatorSchema['ref_assurance_id'] = new sfValidatorPropelChoice(array('model' => 'refAssurance'));
        $this->widgetSchema['ref_assurance_id']->setAttribute('required', true);
        $this->getWidget("ref_assurance_id")->setOption("add_empty", '-- Aucune --');
        $this->widgetSchema['ref_assurance_id']->setAttribute("class", "form-control");

        $this->widgetSchema['prix_assurance'] = new sfWidgetFormInputText(array());
        $this->validatorSchema['prix_assurance'] = new sfValidatorInteger(array('required' => true));
        $this->widgetSchema['prix_assurance']->setAttribute('required', true);
        $this->widgetSchema['prix_assurance']->setAttribute("class", "form-control");
        if ($myObjPrixAssurance) {
            $this->getWidget("prix_assurance")->setDefault($myObjPrixAssurance->getPrixAssurance());
        }

        $widgetDateTime = new orcaWidgetFormDateText(array('format' => 'Y-m-d H:i:s', 'form' => $this));
        $validatorDateTime = new orcaValidatorDateTimesText(array('with_time' => true, 'format' => 'd/m/Y H:i'));

        $this->setWidget('date_assurance', $widgetDateTime);
        $this->getWidget('date_assurance')->setOption('format', 'Y-m-d H:i:s');
        $this->setValidator('date_assurance', $validatorDateTime);
        $this->setDefault('date_assurance', date('Y-m-d H:i:s'));
        $this->widgetSchema['date_assurance']->setAttribute("class", "form-control");

        $this->getWidgetSchema()->setLabels(array(
            'adherent_id' => 'Nom Prenom Adhérent ',
            'date_assurance' => 'Date ',
            'ref_assurance_id' => 'Type Assurance ',
            'prix_assurance' => 'Prix ',
        ));
    }

}
