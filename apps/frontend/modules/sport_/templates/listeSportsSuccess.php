<div>
    <div class="panel panel-default">
        <div class="panel-heading clearfix">
            <i class="icon-calendar"></i>
            <h3 class="panel-title">Liste des Sports Avec Entraineur</h3>
        </div>
        <div class="panel-body">
            <div class=" entitefiltre fg-toolbar ui-toolbar ui-widget-header ui-corner-bl ui-corner-br ui-corner-tl ui-corner-tr ui-helper-clearfix">
                <form method="POST" action="<?php echo url_for("sport/listeSports") ?>">        
                    <?php echo $formFilter ?>        
                </form>
            </div>

            <div>
                <table cellpadding="0" cellspacing="0" border="0" id="listeDesSports" class="display">
                    <thead>
                        <tr>
                            <th><?php echo __('Nom & Prenom Entraineur') ?></th>
                            <th><?php echo __('Type Sport') ?></th>
                            <th><?php echo __('Jours porogramés') ?></th>
                        </tr>   
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-md-12 col-xs-12">
        <h3 class="page-header">Actions</h3>
        <div>
            <a href="<?php echo url_for('sport/new') ?>" class="btn btn-primary"><i class="icon-plus-sign icon-white"></i>Ajouter Sport</a> 
            <a href="<?php echo url_for('sport/listeSports') ?>" class="btn btn-primary"><i class="icon-list icon-white"></i>Liste des Sports</a> 
        </div></br>
    </div>
</div>

<!--<style> th.dpass, td.dpass {display: none;}</style>-->
<script>
    $(document).ready(function() {

        oTable2 = $('#listeDesSports').dataTable(
                {
                    "sDom": 'R<"H"lfr>t<"F"ip<',
                    "bJQueryUI": true,
                    "aaSorting": [[6, "desc"]],
                    "oLanguage": datatablefr,
                    "bAutoWidth": false,
                    "bProcessing": true,
                    "bServerSide": true,
//            "bStateSave": true,
                    "aoColumnDefs": [
                        {"aTargets": [1], "sClass": "dpass"}
                    ],
                    "sAjaxSource": '<?php echo url_for('sport/listeDesSportsAjax') ?>',
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

        $("#listeDesSports .even,#listeDesSports .odd").live("click", function() {
            window.location = "<?php echo url_for("sport/edit?id_sport=") ?>" + $(this).attr("id").substring(4);
        });
    });
</script>