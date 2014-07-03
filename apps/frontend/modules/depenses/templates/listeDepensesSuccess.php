<div>
    <div class="panel panel-default">
        <div class="panel-heading clearfix">
            <i class="glyphicon glyphicon-list"></i>
            <h3 class="panel-title">Liste des Dépenses</h3>
        </div>
        <div class="panel-body">
                <div class=" entitefiltre fg-toolbar ui-toolbar ui-widget-header ui-corner-bl ui-corner-br ui-corner-tl ui-corner-tr ui-helper-clearfix">
        <form method="POST" action="<?php echo url_for("depenses/listeDepenses") ?>">        
            <?php echo $formFilter ?>        
        </form>
    </div>

    <div>
        <table cellpadding="0" cellspacing="0" border="0" id="listeDesDepenses" class="display">
            <thead>
                <tr>
                    <th><?php echo __('Date Dépenses') ?></th>
                    <th><?php echo __('Type Dépenses') ?></th>
                    <th><?php echo __('Montant Dépenses') ?></th>
                    <th><?php echo __('Etat Paiement') ?></th>
                </tr>   
            </thead>
            <tbody>
            </tbody>
        </table></br>
    </div>
        </div>
    </div>
  <?php include_partial('divActions', array()) ?>
</div>

<!--<style> th.dpass, td.dpass {display: none;}</style>-->
<script>
    $(document).ready(function() {

        oTable2 = $('#listeDesDepenses').dataTable(
                {
                    "sDom": 'R<"H"lfr>t<"F"ip<',
                    "bJQueryUI": true,
                    "aaSorting": [[0, "desc"]],
                    "oLanguage": datatablefr,
                    "bAutoWidth": false,
                    "bProcessing": true,
                    "bServerSide": true,
//            "bStateSave": true,
                    "aoColumnDefs": [
                        {"aTargets": [2], "sClass": "dpass"}
                    ],
                    "sAjaxSource": '<?php echo url_for('depenses/listeDesDepensesAjax') ?>',
                    "fnRowCallback": function(nRow, aData, iDisplayIndex, iDisplayIndexFull) {
                        if (aData[0] == '<?php echo $sf_user->getAttribute('last_viewed_entite_rrf', 'none'); ?>') {
                            $(nRow).addClass('last_viewed');
                        }
                        return nRow;

                    },
                    "fnServerData": function(sSource, aoData, fnCallback) {


                        $.ajax({"dataType": 'json',
                            "type": "POST",
                            "url": sSource,
                            "data": aoData,
                            "success": function(data) {
                                if (data.iTotalDisplayRecords == 0)
                                {
                                    $('.div_menu_bas').hide();
                                }
                                else
                                {
                                    $('.div_menu_bas').show();
                                }
                                fnCallback(data)
                            }
                        }
                        );
                    }
                });

        $("#listeDesDepenses .even,#listeDesDepenses .odd").live("click", function() {
            window.location = "<?php echo url_for("depenses/edit?id_depenses=") ?>" + $(this).attr("id").substring(4);
        });
    });
</script>
<div>
<!--    <h3 class="page-header">Actions</h3>
    <div>
        <a href="<?php // echo url_for('facture/new') ?>" class="btn btn-primary"><i class="icon-plus-sign icon-white"></i>Ajouter Facture</a> 
        <a href="<?php // echo url_for('facture/listeFacture') ?>" class="btn btn-primary"><i class="icon-list icon-white"></i>Liste des Factures</a> 
    </div></br>-->
</div>