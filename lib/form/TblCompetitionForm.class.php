<?php

/**
 * TblCompetition form.
 *
 * @package    sallesport
 * @subpackage form
 * @author     Your name here
 */
class TblCompetitionForm extends BaseTblCompetitionForm {

    public function configure() {
        $this->widgetSchema['competition_libelle'] = new sfWidgetFormInputText(array());
        $this->validatorSchema['competition_libelle'] = new sfValidatorString(array('required' => true));
        $this->widgetSchema['competition_libelle']->setAttribute("class", "form-control");

        $this->widgetSchema['type_sport_id'] = new sfWidgetFormPropelChoice(array('model' => 'refTypeSport'));
        $this->validatorSchema['type_sport_id'] = new sfValidatorPropelChoice(array('model' => 'refTypeSport'));
        $this->widgetSchema['type_sport_id']->setAttribute("class", "form-control");
        $this->getWidget("type_sport_id")->setOption("add_empty", '-- Aucun --');

        $this->widgetSchema['ville_id'] = new sfWidgetFormPropelChoice(array('model' => 'refVille'));
        $this->validatorSchema['ville_id'] = new sfValidatorPropelChoice(array('model' => 'refVille'));
        $this->widgetSchema['ville_id']->setAttribute("class", "form-control");
        $this->getWidget("ville_id")->setOption("add_empty", '-- Aucune --');

        $this->widgetSchema['prix_competition'] = new sfWidgetFormInputText(array());
        $this->validatorSchema['prix_competition'] = new sfValidatorInteger(array('required' => true));
        $this->widgetSchema['prix_competition']->setAttribute("class", "form-control");

        $this->widgetSchema['adresse_competition'] = new sfWidgetFormTextarea(array(), array('rows' => '2', 'cols' => "35"));
        $this->validatorSchema['adresse_competition'] = new sfValidatorString(array('max_length' => 255, 'required' => false));


        $widgetDateTime = new orcaWidgetFormDateText(array('format' => 'Y-m-d H:i:s', 'form' => $this));
        $validatorDateTime = new orcaValidatorDateTimesText(array('with_time' => true, 'format' => 'd/m/Y H:i'));
        $this->setWidget('date_competition', $widgetDateTime);
        $this->getWidget('date_competition')->setOption('format', 'Y-m-d H:i:s');
        $this->setValidator('date_competition', $validatorDateTime);
        $this->setDefault('date_competition', date('Y-m-d H:i:s'));
        $this->widgetSchema['date_competition']->setAttribute("class", "form-control");
        
        $qRefJour = TblAdherentQuery::Create();
        $this->setWidget("lnk_adherent_competition_list", new sfWidgetFormPropelChoice(array('model' => 'tblAdherent', 'criteria' => $qRefJour , 'multiple' => true, 'expanded' => true), array('style' => 'list-style-type:none;')));
        $this->setValidator('lnk_adherent_competition_list', new sfValidatorPropelChoice(array('model' => 'tblAdherent', 'multiple' => true, 'required' => true)));

        $this->getWidgetSchema()->setLabels(array(
            'competition_libelle' => 'Titre Competition',
            'type_sport_id' => 'Type Sport',
            'ville_id' => 'Ville',
            'prix_competition' => 'Prix',
            'adresse_competition' => 'Adresse',
            'date_competition' => 'Date',
            'lnk_adherent_competition_list' => 'Liste Participants'
        ));
    }

}
