<?php

/**
 * TblDepenses form.
 *
 * @package    sallesport
 * @subpackage form
 * @author     Your name here
 */
class TblDepensesForm extends BaseTblDepensesForm {

    public function configure() {
        
        $this->setWidget('date_depenses', new orcaWidgetFormJQueryDate(array(
            'image' => "/images/pictos/calendar.png",
            'config' => '{firstDay: 1, buttonText: \'Changer la date\'}',
            'culture' => 'fr'
        )));
        $this->widgetSchema['id_ref_depenses']->setAttribute('add_empty', false);
        $this->widgetSchema['id_ref_depenses']->setAttribute('required', true);
        $this->widgetSchema['id_ref_depenses']->setAttribute("class", "form-control");
        $this->widgetSchema['montant_depenses']->setAttribute("class", "form-control");
        $this->widgetSchema['etat_paiement']->setAttribute("class", "checkbox");
        $this->widgetSchema['montant_depenses']->setAttribute('required', true);
        $this->widgetSchema['date_depenses']->setAttribute('required', true);
        $this->getWidget("id_ref_depenses")->setOption("add_empty", '-- Aucune --');

       

        $this->getWidgetSchema()->setLabels(array(
            'date_depenses' => 'Date Dépense ',
            'id_ref_depenses' => 'Type Dépense ',
        ));
//        $this->useFields(array('date_depenses','id_ref_depenses'));
    }

}
