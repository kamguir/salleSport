<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('sport/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id_sport='.$form->getObject()->getIdSport() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>
 <?php echo $form->renderGlobalErrors() ?>
   <div class="row">
        <label class="col-xs-5" ><?php echo $form['id_type_sport']->renderLabel() ?></label>
        <div class="col-xs-5">
            <?php echo $form['id_type_sport']->renderError() ?>
            <?php echo $form['id_type_sport'] ?>
        </div>
    </div>
   <div class="row">
        <label class="col-xs-5" ><?php echo $form['id_moniteur']->renderLabel() ?></label>
        <div class="col-xs-5">
            <?php echo $form['id_moniteur']->renderError() ?>
            <?php echo $form['id_moniteur'] ?>
        </div>
    </div>
   <div class="row">
        <label class="col-xs-5" ><?php echo $form['lnk_sport_adherent_list']->renderLabel() ?></label>
        <div class="col-xs-5">
            <?php echo $form['lnk_sport_adherent_list']->renderError() ?>
            <?php echo $form['lnk_sport_adherent_list'] ?>
        </div>
    </div>
   <div class="row">
        <label class="col-xs-5" ><?php echo $form['commentaire']->renderLabel() ?></label>
        <div class="col-xs-5">
            <?php echo $form['commentaire']->renderError() ?>
            <?php echo $form['commentaire'] ?>
        </div>
    </div>

    <div class="row">
        <?php echo $form->renderHiddenFields(false) ?>
        &nbsp;
        <!--<a class="btn btn-info" href="<?php echo url_for('sport/listeSports') ?>">Retour list</a>-->
        <?php if (!$form->getObject()->isNew()): ?>
            &nbsp;<a class="btn btn-danger" <?php echo link_to('Supprimer', 'sport/delete?id_sport=' . $form->getObject()->getIdSport(), array('method' => 'delete', 'confirm' => 'Are you sure?')) ?></a>
        <?php endif; ?>
        <input class="btn btn-primary" id="valider" type="submit" value="Enregistrer" />
    </div>
</form>
