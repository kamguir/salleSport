<div >
    <div class="panel panel-default">
        <div class="panel-heading clearfix">
            <i class="glyphicon glyphicon-list"></i>
            <h3 class="panel-title">Liste des Entraineurs</h3>
        </div>
        <div class="panel-body">
            <div class=" entitefiltre fg-toolbar ui-toolbar ui-widget-header ui-corner-bl ui-corner-br ui-corner-tl ui-corner-tr ui-helper-clearfix">
                <form method="POST" action="<?php echo url_for("adherent/listeEntraineurs") ?>">        
                    <?php echo $formFilter ?>        
                </form>
            </div>

            <div>
                <table cellpadding="0" cellspacing="0" border="0" id="listeDesEntraineurs" class="display">
                    <thead>
                        <tr>
                            <th><?php echo __('Nom & Prenom') ?></th>
                            <th><?php echo __('Situation') ?></th>
                            <th><?php echo __('Age') ?></th>
                            <th><?php echo __('Num Tél') ?></th>
                            <!--<th><?php // echo __('Adresse') ?></th>-->
                            <th><?php echo __('Type Sport') ?></th>
                            <th><?php echo __('Niveau') ?></th>
                            <th><?php echo __('Date Adhesion') ?></th>
                        </tr>   
                    </thead>
                    <tbody>
                    </tbody>
                </table></br>
            </div>

        </div>
    </div>
    <div class="col-md-12 col-xs-12">
        <!--<div style="clear: both; width: 100%;"></div>-->
        <h3 class="page-header">Actions</h3>
        <div>
            <a href="<?php echo url_for('adherent/new') ?>" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i>Ajouter Membre</a> 
            <a href="<?php echo url_for('adherent/listeEntraineurs') ?>" class="btn btn-primary"><i class="glyphicon glyphicon-list"></i>Liste des Entraineurs</a> 
        </div></br>
    </div>
</div>

<!--<style> th.dpass, td.dpass {display: none;}</style>-->
<script>
    $(document).ready(function() {

        oTable2 = $('#listeDesEntraineurs').dataTable(
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
                    "sAjaxSource": '<?php echo url_for('adherent/listeDesEntraineursAjax') ?>',
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

        $("#listeDesEntraineurs .even,#listeDesEntraineurs .odd").live("click", function() {
            window.location = "<?php echo url_for("adherent/edit?id_adherent=") ?>" + $(this).attr("id").substring(4);
        });
    });
</script>