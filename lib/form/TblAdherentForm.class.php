<?php

/**
 * TblAdherent form.
 *
 * @package    sallesport
 * @subpackage form
 * @author     Your name here
 */
class TblAdherentForm extends BaseTblAdherentForm {

    public function configure() {

        $this->widgetSchema['cin_adherent'] = new sfWidgetFormInputText(array());
        $this->validatorSchema['cin_adherent'] = new sfValidatorString(array('required' => false));
        $this->widgetSchema['cin_adherent']->setAttribute("class","form-control");

        $this->widgetSchema['nom_adherent'] = new sfWidgetFormInputText(array());
        $this->validatorSchema['nom_adherent'] = new sfValidatorString(array('required' => true));
        $this->widgetSchema['nom_adherent']->setAttribute("class","form-control");

        $this->widgetSchema['prenom_adherent'] = new sfWidgetFormInputText(array());
        $this->validatorSchema['prenom_adherent'] = new sfValidatorString(array('required' => true));
        $this->widgetSchema['prenom_adherent']->setAttribute("class","form-control");

        $this->widgetSchema['id_civilite'] = new sfWidgetFormPropelChoice(array('model' => 'refCivilite'));
        $this->validatorSchema['id_civilite'] = new sfValidatorPropelChoice(array('model' => 'refCivilite'));
        $this->widgetSchema['id_civilite']->setAttribute("class","form-control");

        $this->widgetSchema['id_situation'] = new sfWidgetFormPropelChoice(array('model' => 'refSituation'));
        $this->validatorSchema['id_situation'] = new sfValidatorPropelChoice(array('model' => 'refSituation'));
        $this->widgetSchema['id_situation']->setAttribute("class","form-control");
        
        $this->widgetSchema['age_adherent'] = new sfWidgetFormInputText(array());
        $this->validatorSchema['age_adherent'] = new sfValidatorString(array('required' => false));
        $this->widgetSchema['age_adherent']->setAttribute("class","form-control");
        
        $this->widgetSchema['adresse_adherent'] = new sfWidgetFormTextarea(array(), array('rows' => '2','cols'=>"35"));
        $this->validatorSchema['adresse_adherent'] = new sfValidatorString(array('max_length' => 255, 'required' => false));
        
        $this->widgetSchema['num_tel'] = new sfWidgetFormInputText(array());
        $this->validatorSchema['num_tel'] = new sfValidatorString(array('required' => false));
        $this->widgetSchema['num_tel']->setAttribute("class","form-control");
        
        $this->widgetSchema['id_type_sport'] = new sfWidgetFormPropelChoice(array('model' => 'refTypeSport'));
        $this->validatorSchema['id_type_sport'] = new sfValidatorPropelChoice(array('model' => 'refTypeSport'));
        $this->widgetSchema['id_type_sport']->setAttribute("class","form-control");
        
        $this->widgetSchema['id_type_adherent'] = new sfWidgetFormPropelChoice(array('model' => 'refTypeAdherent'));
        $this->validatorSchema['id_type_adherent'] = new sfValidatorPropelChoice(array('model' => 'refTypeAdherent', 'required' => false));
        $this->widgetSchema['id_type_adherent']->setAttribute("class","form-control");

        $this->widgetSchema['seance_horaire_id'] = new sfWidgetFormPropelChoice(array('model' => 'refSeanceHoraire'));
        $this->validatorSchema['seance_horaire_id'] = new sfValidatorPropelChoice(array('model' => 'refSeanceHoraire', 'required' => true));
        $this->widgetSchema['seance_horaire_id']->setAttribute("class","form-control");
        $this->getWidget("seance_horaire_id")->setOption("add_empty", '-- Aucun --');
        
        $this->widgetSchema['niveau_adherent_id'] = new sfWidgetFormPropelChoice(array('model' => 'refNiveauAdherent'));
        $this->validatorSchema['niveau_adherent_id'] = new sfValidatorPropelChoice(array('model' => 'refNiveauAdherent', 'required' => true));
        $this->widgetSchema['niveau_adherent_id']->setAttribute("class","form-control");
        $this->getWidget("niveau_adherent_id")->setOption("add_empty", '-- Aucun --');
        
        $widgetDateTime = new orcaWidgetFormDateText(array('format' => 'Y-m-d H:i:s', 'form' => $this));
        $validatorDateTime = new orcaValidatorDateTimesText(array('with_time' => true, 'format' => 'd/m/Y H:i'));

        $this->setWidget('date_adhesion', $widgetDateTime);
        $this->getWidget('date_adhesion')->setOption('format', 'Y-m-d H:i:s');
        $this->setValidator('date_adhesion', $validatorDateTime);
        $this->setDefault('date_adhesion', date('Y-m-d H:i:s'));
        $this->widgetSchema['date_adhesion']->setAttribute("class","form-control");

        //lnk jour entrainement adherent
        $jourEntrainementSelected = LnkJourEntrainementAdherentQuery::create()
                ->filterByIdAdherent($this->getObject()->getIdAdherent())
                ->find();
        $qRefJour = RefJourQuery::Create();
        $this->setWidget("lnk_jour_entrainement_adherent_list", new sfWidgetFormPropelChoice(array('model' => 'refJour', 'criteria' => $qRefJour, 'method' => 'getLibelleJour', 'multiple' => true, 'expanded' => true), array('style' => 'list-style-type:none;')));
        $this->setValidator('lnk_jour_entrainement_adherent_list', new sfValidatorPropelChoice(array('model' => 'refJour', 'multiple' => true, 'required' => true)));
        if ($jourEntrainementSelected) {
            // si update chargé les types lavages
            $values = array();
            foreach ($jourEntrainementSelected as $obj) {
                $values[] = $obj->getIdJour();
            }
            $this->setDefault('lnk_jour_entrainement_adherent_list', $values);
        }
        
        $this->widgetSchema['image_adherent'] = new sfWidgetFormInputFile(array(
            'label' => 'Image ',
        ));

        $this->validatorSchema['image_adherent'] = new sfValidatorFile(array(
            'required' => false,
            'path' => sfConfig::get('sf_web_dir') . '/images/imagesAdherents',
        ));
        
        $this->getWidgetSchema()->setLabels(array(
            'nom_adherent' => 'Nom',
            'cin_adherent' => 'CIN',
            'prenom_adherent' => 'Prenom ',
            'id_civilite' => 'Civilite',
            'age_adherent' => 'Age',
            'adresse_adherent' => 'Adresse',
            'id_type_sport' => 'Type de Sport',
            'id_situation' => 'Situation',
            'lnk_jour_entrainement_adherent_list' => 'Jour Entrainement',
            'seance_horaire_id' => 'Horaire ',
            'niveau_adherent_id' => 'Niveau ',
            'id_type_adherent' => 'Type Adherent'
        ));
    }
}
