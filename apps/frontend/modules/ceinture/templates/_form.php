<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('ceinture/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?ceinture_id='.$form->getObject()->getCeintureId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>
    <div class="row">
        <label class="col-xs-5" ><?php echo $form['adherent_id']->renderLabel() ?></label>
        <div class="col-xs-5">
            <?php echo $form['adherent_id']->renderError() ?>
            <?php echo $form['adherent_id'] ?>
        </div>
    </div>
    <div class="row">
        <label class="col-xs-5" ><?php echo $form['grade_id']->renderLabel() ?></label>
        <div class="col-xs-5">
            <?php echo $form['grade_id']->renderError() ?>
            <?php echo $form['grade_id'] ?>
        </div>
    </div>
    <div class="row">
        <label class="col-xs-5" ><?php echo $form['competance_id']->renderLabel() ?></label>
        <div class="col-xs-5">
            <?php echo $form['competance_id']->renderError() ?>
            <?php echo $form['competance_id'] ?>
        </div>
    </div>
    <div class="row">
        <label class="col-xs-5" ><?php echo $form['titre_entraineur_id']->renderLabel() ?></label>
        <div class="col-xs-5">
            <?php echo $form['titre_entraineur_id']->renderError() ?>
            <?php echo $form['titre_entraineur_id'] ?>
        </div>
    </div>
    <div class="row">
        <label class="col-xs-5" ><?php echo $form['ceinture_couleur_id']->renderLabel() ?></label>
        <div class="col-xs-5">
            <?php echo $form['ceinture_couleur_id']->renderError() ?>
            <?php echo $form['ceinture_couleur_id'] ?>
        </div>
    </div>
    <div class="row">
        <label class="col-xs-5" ><?php echo $form['date_acquisition']->renderLabel() ?></label>
        <div class="col-xs-5">
            <?php echo $form['date_acquisition']->renderError() ?>
            <?php echo $form['date_acquisition'] ?>
        </div>
    </div>

    <div class="row">
        <?php echo $form->renderHiddenFields(false) ?>
        &nbsp;
        <!--<a class="btn btn-info" href="<?php echo url_for('ceinture/listeCeintures') ?>">Retour list</a>-->
        <?php if (!$form->getObject()->isNew()): ?>
            &nbsp;<a class="btn btn-danger" <?php echo link_to('Supprimer', 'ceinture/delete?ceinture_id=' . $form->getObject()->getCeintureId(), array('method' => 'delete', 'confirm' => 'Are you sure?')) ?></a>
        <?php endif; ?>
        <input class="btn btn-primary" id="valider" type="submit" value="Enregistrer" />
    </div>
</form>
