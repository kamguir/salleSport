<div >
    <div class="panel panel-default">
        <div class="panel-heading clearfix">
            <i class="glyphicon glyphicon-list"></i>
            <h3 class="panel-title">Planning de mes Adherents</h3>
        </div>
        <div class="panel-body">
            <div class=" entitefiltre fg-toolbar ui-toolbar ui-widget-header ui-corner-bl ui-corner-br ui-corner-tl ui-corner-tr ui-helper-clearfix">
                <form method="POST" action="<?php echo url_for("adherent/planningAdherents") ?>">        
                    <?php echo $formFilter ?>        
                </form>
            </div>

            <div>
                <table cellpadding="0" cellspacing="0" border="0" id="planningAdherents" class="display">
                    <thead>
                        <tr>
                            <th><?php echo __('Nom & Prenom') ?></th>
                            <th><?php echo __('Type Sport') ?></th>
                            <th><?php echo __('Niveau') ?></th>
                            <th><?php echo __('Ceinture') ?></th>
                            <th><?php echo __('Entraineur') ?></th>
                            <th><?php echo __('Jours Entrainement') ?></th>
                            <th><?php echo __('Horaires') ?></th>
                        </tr>   
                    </thead>
                    <tbody>
                    </tbody>
                </table></br>
            </div>

        </div>
    </div>
</div>

<!--<style> th.dpass, td.dpass {display: none;}</style>-->
<script>
    $(document).ready(function() {

        oTable2 = $('#planningAdherents').dataTable(
                {
                    "sDom": 'R<"H"lfr>t<"F"ip<',
                    "bJQueryUI": true,
                    "aaSorting": [[7, "desc"]],
                    "oLanguage": datatablefr,
                    "bAutoWidth": false,
                    "bProcessing": true,
                    "bServerSide": true,
//            "bStateSave": true,
                    "aoColumnDefs": [
                        {"aTargets": [2], "sClass": "dpass"}
                    ],
                    "sAjaxSource": '<?php echo url_for('adherent/planningAdherentsAjax') ?>',
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

        $("#planningAdherents .even,#planningAdherents .odd").live("click", function() {
//            window.location = "<?php echo url_for("adherent/edit?id_adherent=") ?>" + $(this).attr("id").substring(4);
        });
    });
</script>