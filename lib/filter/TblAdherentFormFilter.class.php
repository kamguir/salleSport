<?php

/**
 * TblAdherent filter form.
 *
 * @package    sallesport
 * @subpackage filter
 * @author     Your name here
 */
class TblAdherentFormFilter extends BaseTblAdherentFormFilter {

    public function configure() {

        //Nature Membre
        $natureMembre = RefTypeAdherentQuery::create()->groupByLibelleTypeAdherent();
        $this->setWidget("id_type_adherent", new sfWidgetFormPropelChoice(array('model' => 'RefTypeAdherent', 'criteria' => $natureMembre, 'add_empty' => true)));
        $this->getWidget('id_type_adherent')->setOption("add_empty", "- Toutes -")
                ->setAttribute("onChange", "submit()");
        $this->setValidator("id_type_adherent", new sfValidatorPropelChoice(array('model' => 'RefTypeAdherent', 'required' => false)));

        //Type Sport
        $typeSport = RefTypeSportQuery::create()->groupByLibelle();
        $this->setWidget("id_type_sport", new sfWidgetFormPropelChoice(array('model' => 'RefTypeSport', 'criteria' => $typeSport, 'add_empty' => true)));
        $this->getWidget('id_type_sport')->setOption("add_empty", "- Tous -")
                ->setAttribute("onChange", "submit()");
        $this->setValidator("id_type_sport", new sfValidatorPropelChoice(array('model' => 'RefTypeSport', 'required' => false)));
      
        //Jours Entrainement
        $Jours = RefJourQuery::create()->groupByLibelleJour();
        $this->setWidget("id_jour", new sfWidgetFormPropelChoice(array('model' => 'RefJour', 'criteria' => $Jours, 'add_empty' => true )));
        $this->getWidget('id_jour')->setOption("add_empty", "- Tous -")
                ->setAttribute("onChange", "submit()");
        $this->setValidator("id_jour", new sfValidatorPropelChoice(array('model' => 'RefJour', 'required' => false)));

        
        $action = sfContext::getInstance()->getActionName();
        $useFilds = array('id_type_sport');

        if ($action == 'listeMembres') {
//            $useFilds[] = 'id_type_adherent';
//            $this->getWidgetSchema()->setLabels(array(
//                'id_type_adherent' => "Nature :",
//            ));
        }
        
        if ($action == 'mesAdherents') {
            $useFilds[] = 'id_jour';
        }
        $this->getWidgetSchema()->setLabels(array(
            'id_type_sport' => "Type Sport :",
        ));

        $this->useFields($useFilds);
    }

}
