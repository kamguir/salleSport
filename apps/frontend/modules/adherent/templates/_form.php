<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('adherent/' . ($form->getObject()->isNew() ? 'create' : 'update') . (!$form->getObject()->isNew() ? '?id_adherent=' . $form->getObject()->getIdAdherent() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
    <?php if (!$form->getObject()->isNew()): ?>
        <input type="hidden" name="sf_method" value="put" />
    <?php endif; ?>
    <?php echo $form->renderGlobalErrors() ?>

    <!--<div class="panel-body" style="padding: 6px;">-->
    <div class="row">
        <div class="col-xs-8 col-sm-6" style="width: 45%;"> <br>
            <div class="row">
                <label class="col-xs-4" ><?php echo $form['id_type_adherent']->renderLabel() ?></label>
                <div class="col-xs-7">
                    <?php echo $form['id_type_adherent']->renderError() ?>
                    <?php echo $form['id_type_adherent'] ?>
                </div>
            </div>
            <div class="row">
                <label class="col-xs-4" ><?php echo $form['id_type_sport']->renderLabel() ?></label>
                <div class="col-xs-7">
                    <?php echo $form['id_type_sport']->renderError() ?>
                    <?php echo $form['id_type_sport'] ?>
                </div>
            </div>
            <div class="row">
                <label class="col-xs-4" ><?php echo $form['cin_adherent']->renderLabel() ?></label>
                <div class="col-xs-7">
                    <?php echo $form['cin_adherent']->renderError() ?>
                    <?php echo $form['cin_adherent'] ?>
                </div>
            </div>
            <div class="row">
                <label class="col-xs-4" ><?php echo $form['nom_adherent']->renderLabel() ?></label>
                <div class="col-xs-7">
                    <?php echo $form['nom_adherent']->renderError() ?>
                    <?php echo $form['nom_adherent'] ?>
                </div>
            </div>
            <div class="row">
                <label class="col-xs-4" ><?php echo $form['prenom_adherent']->renderLabel() ?></label>
                <div class="col-xs-7">
                    <?php echo $form['prenom_adherent']->renderError() ?>
                    <?php echo $form['prenom_adherent'] ?>
                </div>
            </div>
            <div class="row">
                <label class="col-xs-4" ><?php echo $form['id_civilite']->renderLabel() ?></label>
                <div class="col-xs-7">
                    <?php echo $form['id_civilite']->renderError() ?>
                    <?php echo $form['id_civilite'] ?>
                </div>
            </div>
            <div class="row">
                <label class="col-xs-4" ><?php echo $form['id_situation']->renderLabel() ?></label>
                <div class="col-xs-7">
                    <?php echo $form['id_situation']->renderError() ?>
                    <?php echo $form['id_situation'] ?>
                </div>
            </div>
            <div class="row">
                <label class="col-xs-4" ><?php echo $form['age_adherent']->renderLabel() ?></label>
                <div class="col-xs-7">
                    <?php echo $form['age_adherent']->renderError() ?>
                    <?php echo $form['age_adherent'] ?>
                </div>
            </div>
            <div class="row">
                <label class="col-xs-4" ><?php echo $form['num_tel']->renderLabel() ?></label>
                <div class="col-xs-7">
                    <?php echo $form['num_tel']->renderError() ?>
                    <?php echo $form['num_tel'] ?>
                </div>
            </div>
            <div class="row">
                <label class="col-xs-4" ><?php echo $form['date_adhesion']->renderLabel() ?></label>
                <div class="col-xs-7">
                    <?php echo $form['date_adhesion']->renderError() ?>
                    <?php echo $form['date_adhesion'] ?>
                </div>
            </div>
            <div class="row">
                <label class="col-xs-4" ><?php echo $form['adresse_adherent']->renderLabel() ?></label>
                <div class="col-xs-7">
                    <?php echo $form['adresse_adherent']->renderError() ?>
                    <?php echo $form['adresse_adherent'] ?>
                </div>
            </div>
        </div>
        <div class="col-xs-8 col-md-offset-6" style="margin-left: 46%;width: 58%;margin-left: 60%;float: none;">
            <label class="col-xs-4" style="width: 21%;"><?php echo $form['lnk_jour_entrainement_adherent_list']->renderLabel() ?></label>
            <div class="col-xs-8">
                <?php echo $form['lnk_jour_entrainement_adherent_list']->renderError() ?>
                <?php echo $form['lnk_jour_entrainement_adherent_list'] ?>
            </div>
        </div>
        <div class="col-xs-8 col-md-offset-6" style="margin-left: 46%;width: 40%;margin-left: 60%;float: none;">
            <label class="col-xs-4" style="width: 21%;"><?php echo $form['seance_horaire_id']->renderLabel() ?></label>
            <div class="col-xs-8">
                <?php echo $form['seance_horaire_id']->renderError() ?>
                <?php echo $form['seance_horaire_id'] ?>
            </div>
        </div>
        <div class="col-xs-8 col-md-offset-6" style="margin-left: 46%;width: 40%;margin-left: 60%;float: none;">
            <label class="col-xs-4" style="width: 21%;"><?php echo $form['niveau_adherent_id']->renderLabel() ?></label>
            <div class="col-xs-8">
                <?php echo $form['niveau_adherent_id']->renderError() ?>
                <?php echo $form['niveau_adherent_id'] ?>
            </div>
        </div>
    </div>
    <div class="row">
                <?php echo $form->renderHiddenFields(false) ?>
                &nbsp;
                <!--<a class="btn btn-info" href="<?php echo url_for('adherent/listeAdherents') ?>">Retour list</a>-->
                <?php if (!$form->getObject()->isNew()): ?>
                    &nbsp;<a class="btn btn-danger" <?php echo link_to('Supprimer', 'adherent/delete?id_adherent=' . $form->getObject()->getIdAdherent(), array('method' => 'delete', 'confirm' => 'Are you sure?')) ?></a>
                <?php endif; ?>
                <input class="btn btn-primary" id="valider" type="submit" value="Enregistrer" />
            </div>
    <!--</div>-->
</form>

<script>
    $(function() {

        $("#tbl_adherent_id_type_adherent").change(changeTypeAdherent);
        
        function changeTypeAdherent()
        {
            typeAdherent = $("#tbl_adherent_id_type_adherent").val();
            
            if (typeAdherent == <?php echo RefTypeAdherentPeer::EMPLOYE ?> ) 
            {       
                $("#tbl_adherent_id_type_sport").hide();
            } 
            else 
            {
                $("#tbl_adherent_id_type_sport").show();
            }
        }

        changeTypeAdherent();

    });
</script>
