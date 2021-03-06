<?php

/**
 * TblFacture form.
 *
 * @package    sallesport
 * @subpackage form
 * @author     Your name here
 */
class TblFactureForm extends BaseTblFactureForm {

    public function configure() {

        $myObjTypeSport = $this->getOption('objTypesport');
        $qlisteAdherents = TblAdherentQuery::create()
                ->filterByIdTypeAdherent(RefTypeAdherent::ADHERENT);
        $this->widgetSchema['id_adherent'] = new sfWidgetFormPropelChoice(array('model' => 'tblAdherent', 'criteria' => $qlisteAdherents));
        $this->validatorSchema['id_adherent'] = new sfValidatorPropelChoice(array('model' => 'tblAdherent'));
        $this->widgetSchema['id_adherent']->setAttribute("class", "form-control");
        $this->getWidget("id_adherent")->setOption("add_empty", '-- Aucun --');

        $this->widgetSchema['type_sport'] = new sfWidgetFormInputText(array());
        $this->widgetSchema['type_sport']->setAttribute("class", "form-control");
        $this->widgetSchema['type_sport']->setAttribute('disabled', 'disabled');
        if ($myObjTypeSport) {
            $this->getWidget("type_sport")->setDefault($myObjTypeSport->getRefTypeSport()->getLibelle());
        }
        

        $this->widgetSchema['prix_facture'] = new sfWidgetFormInputText(array());
        $this->validatorSchema['prix_facture'] = new sfValidatorInteger(array('required' => true));
        $this->widgetSchema['prix_facture']->setAttribute("class", "form-control");
        if ($myObjTypeSport) {
            $this->getWidget("prix_facture")->setDefault($myObjTypeSport->getRefTypeSport()->getMontantSport());
        }

        $widgetDateTime = new orcaWidgetFormDateText(array('format' => 'Y-m-d H:i:s', 'form' => $this));
        $validatorDateTime = new orcaValidatorDateTimesText(array('with_time' => true, 'format' => 'd/m/Y H:i'));

        $this->setWidget('date_reglement', $widgetDateTime);
        $this->getWidget('date_reglement')->setOption('format', 'Y-m-d H:i:s');
        $this->setValidator('date_reglement', $validatorDateTime);
        $this->setDefault('date_reglement', date('Y-m-d H:i:s'));
        $this->widgetSchema['date_reglement']->setAttribute("class", "form-control");

        $this->widgetSchema['commentaire'] = new sfWidgetFormTextarea(array());
        $this->validatorSchema['commentaire'] = new sfValidatorString(array('required' => false));
        $this->widgetSchema['commentaire']->setAttribute("class", "form-control");

        $this->getWidgetSchema()->setLabels(array(
            'id_adherent' => 'Nom Prenom Adherent ',
            'type_sport' => 'Type Sport ',
        ));
    }

}
