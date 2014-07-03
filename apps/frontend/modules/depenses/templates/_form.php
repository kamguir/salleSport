<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('depenses/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id_depenses='.$form->getObject()->getIdDepenses() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>
    <?php echo $form->renderGlobalErrors() ?>
    <div class="row">
        <label class="col-xs-5" ><?php echo $form['date_depenses']->renderLabel() ?></label>
        <div class="col-xs-5">
            <?php echo $form['date_depenses']->renderError() ?>
            <?php echo $form['date_depenses'] ?>
        </div>
    </div>
    <div class="row">
        <label class="col-xs-5" ><?php echo $form['id_ref_depenses']->renderLabel() ?></label>
        <div class="col-xs-5">
            <?php echo $form['id_ref_depenses']->renderError() ?>
            <?php echo $form['id_ref_depenses'] ?>
        </div>
    </div>
    <div class="row">
        <label class="col-xs-5" ><?php echo $form['montant_depenses']->renderLabel() ?></label>
        <div class="col-xs-4">
            <?php echo $form['montant_depenses']->renderError() ?>
            <?php echo $form['montant_depenses'] ?>
        </div>
    </div>
    <div class="row">
        <label class="col-xs-5" ><?php echo $form['etat_paiement']->renderLabel() ?></label>
        <div class="col-xs-4">
            <?php echo $form['etat_paiement']->renderError() ?>
            <?php echo $form['etat_paiement'] ?>
        </div>
    </div>
    <div class="row">
        <?php echo $form->renderHiddenFields(false) ?>
        &nbsp;
        <!--<a class="btn btn-info" href="<?php echo url_for('depenses/listeDepenses') ?>">Retour list</a>-->
        <?php if (!$form->getObject()->isNew()): ?>
            &nbsp;<a class="btn btn-danger" <?php echo link_to('Supprimer', 'depenses/delete?id_depenses=' . $form->getObject()->getIdDepenses(), array('method' => 'delete', 'confirm' => 'Are you sure?')) ?></a>
        <?php endif; ?>
        <input class="btn btn-primary" id="valider" type="submit" value="Enregistrer" />
    </div>
</form>
