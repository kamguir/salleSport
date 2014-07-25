<?php

/**
 * TblCeinture form.
 *
 * @package    sallesport
 * @subpackage form
 * @author     Your name here
 */
class TblCeintureForm extends BaseTblCeintureForm {

    public function configure() {
        $widgetDateTime = new orcaWidgetFormDateText(array('format' => 'Y-m-d H:i:s', 'form' => $this));
        $validatorDateTime = new orcaValidatorDateTimesText(array('with_time' => true, 'format' => 'd/m/Y H:i'));

        $this->setWidget('date_acquisition', $widgetDateTime);
        $this->getWidget('date_acquisition')->setOption('format', 'Y-m-d H:i:s');
        $this->setValidator('date_acquisition', $validatorDateTime);
        $this->setDefault('date_acquisition', date('Y-m-d H:i:s'));
        $this->widgetSchema['date_acquisition']->setAttribute("class", "form-control");

        $qlisteAdherents = TblAdherentQuery::create()
                ->filterByIdTypeAdherent(array(null, RefTypeAdherent::ADHERENT, RefTypeAdherent::ENTRAINEUR));
        $this->widgetSchema['adherent_id'] = new sfWidgetFormPropelChoice(array('model' => 'tblAdherent', 'criteria' => $qlisteAdherents));
        $this->validatorSchema['adherent_id'] = new sfValidatorPropelChoice(array('model' => 'tblAdherent'));
        $this->widgetSchema['adherent_id']->setAttribute("class", "form-control");
        $this->getWidget("adherent_id")->setOption("add_empty", '-- Aucun --');

        $this->widgetSchema['grade_id'] = new sfWidgetFormPropelChoice(array('model' => 'refGradeCeinture'));
        $this->validatorSchema['grade_id'] = new sfValidatorPropelChoice(array('model' => 'refGradeCeinture'));
        $this->widgetSchema['grade_id']->setAttribute("class", "form-control");
        $this->getWidget("grade_id")->setOption("add_empty", '-- Aucun --');

        $this->widgetSchema['competance_id'] = new sfWidgetFormPropelChoice(array('model' => 'refCompetance'));
        $this->validatorSchema['competance_id'] = new sfValidatorPropelChoice(array('model' => 'refCompetance'));
        $this->widgetSchema['competance_id']->setAttribute("class", "form-control");
        $this->getWidget("competance_id")->setOption("add_empty", '-- Aucune --');

        $this->widgetSchema['titre_entraineur_id'] = new sfWidgetFormPropelChoice(array('model' => 'refTitreEntraineur'));
        $this->validatorSchema['titre_entraineur_id'] = new sfValidatorPropelChoice(array('model' => 'refTitreEntraineur'));
        $this->widgetSchema['titre_entraineur_id']->setAttribute("class", "form-control");
        $this->getWidget("titre_entraineur_id")->setOption("add_empty", '-- Aucun --');

        $this->widgetSchema['ceinture_couleur_id'] = new sfWidgetFormPropelChoice(array('model' => 'refCeintureCouleur'));
        $this->validatorSchema['ceinture_couleur_id'] = new sfValidatorPropelChoice(array('model' => 'refCeintureCouleur'));
        $this->widgetSchema['ceinture_couleur_id']->setAttribute("class", "form-control");
        $this->getWidget("ceinture_couleur_id")->setOption("add_empty", '-- Aucun --');

        $this->getWidgetSchema()->setLabels(array(
            'date_acquisition' => 'Date Aquisition ',
            'adherent_id' => 'Nom Prenom Adhérent ',
            'competance_id' => 'Compétance ',
        ));
    }

    public function bind(array $taintedValues = null, array $taintedFiles = null) {

        $objAdherent = TblAdherentQuery::create()
                ->filterByIdAdherent($taintedValues['adherent_id'])
                ->findOne();
        if ($objAdherent) {
            if ($objAdherent->getIdTypeAdherent() == RefTypeAdherent::ADHERENT) {
                $this->getValidator('titre_entraineur_id')->setOption('required', false);
            }
        }
        parent::bind($taintedValues, $taintedFiles);
    }

}
