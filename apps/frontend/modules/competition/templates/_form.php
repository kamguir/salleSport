<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('competition/' . ($form->getObject()->isNew() ? 'create' : 'update') . (!$form->getObject()->isNew() ? '?competition_id=' . $form->getObject()->getCompetitionId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
    <?php if (!$form->getObject()->isNew()): ?>
        <input type="hidden" name="sf_method" value="put" />
    <?php endif; ?>

    <div class="row">
        <label class="col-xs-5" ><?php echo $form['competition_libelle']->renderLabel() ?></label>
        <div class="col-xs-5">
            <?php echo $form['competition_libelle']->renderError() ?>
            <?php echo $form['competition_libelle'] ?>
        </div>
    </div>
    <div class="row">
        <label class="col-xs-5" ><?php echo $form['type_sport_id']->renderLabel() ?></label>
        <div class="col-xs-5">
            <?php echo $form['type_sport_id']->renderError() ?>
            <?php echo $form['type_sport_id'] ?>
        </div>
    </div>
    <div class="row">
        <label class="col-xs-5" ><?php echo $form['ville_id']->renderLabel() ?></label>
        <div class="col-xs-5">
            <?php echo $form['ville_id']->renderError() ?>
            <?php echo $form['ville_id'] ?>
        </div>
    </div>
    <div class="row">
        <label class="col-xs-5" ><?php echo $form['prix_competition']->renderLabel() ?></label>
        <div class="col-xs-5">
            <?php echo $form['prix_competition']->renderError() ?>
            <?php echo $form['prix_competition'] ?>
        </div>
    </div>
    <div class="row">
        <label class="col-xs-5" ><?php echo $form['adresse_competition']->renderLabel() ?></label>
        <div class="col-xs-5">
            <?php echo $form['adresse_competition']->renderError() ?>
            <?php echo $form['adresse_competition'] ?>
        </div>
    </div>
    <div class="row">
        <label class="col-xs-5" ><?php echo $form['date_competition']->renderLabel() ?></label>
        <div class="col-xs-5">
            <?php echo $form['date_competition']->renderError() ?>
            <?php echo $form['date_competition'] ?>
        </div>
    </div>
    <div class="row">
        <label class="col-xs-5" ><?php echo $form['lnk_adherent_competition_list']->renderLabel() ?></label>
        <div class="col-xs-5">
            <?php echo $form['lnk_adherent_competition_list']->renderError() ?>
            <?php echo $form['lnk_adherent_competition_list'] ?>
        </div>
    </div>

    <div class="row">
        <?php echo $form->renderHiddenFields(false) ?>
        &nbsp;
        <!--<a class="btn btn-info" href="<?php echo url_for('competition/index') ?>">Retour list</a>-->
        <?php if (!$form->getObject()->isNew()): ?>
            &nbsp;<a class="btn btn-danger" <?php echo link_to('Supprimer', 'competition/delete?competition_id=' . $form->getObject()->getCompetitionId(), array('method' => 'delete', 'confirm' => 'Are you sure?')) ?></a>
        <?php endif; ?>
        <input class="btn btn-primary" id="valider" type="submit" value="Enregistrer" />
    </div>
</form>
