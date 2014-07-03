<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('facture/' . ($form->getObject()->isNew() ? 'create' : 'update') . (!$form->getObject()->isNew() ? '?id_facture=' . $form->getObject()->getIdFacture() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
    <?php if (!$form->getObject()->isNew()): ?>
        <input type="hidden" name="sf_method" value="put" />
    <?php endif; ?>
    <?php echo $form->renderGlobalErrors() ?>
    <div class="row">
        <label class="col-xs-5" ><?php echo $form['id_adherent']->renderLabel() ?></label>
        <div class="col-xs-4">
            <?php echo $form['id_adherent']->renderError() ?>
            <?php echo $form['id_adherent'] ?>
        </div>
    </div>
    <div class="row">
        <label class="col-xs-5" ><?php echo $form['prix_facture']->renderLabel() ?></label>
        <div class="col-xs-4">
            <?php echo $form['prix_facture']->renderError() ?>
            <?php echo $form['prix_facture'] ?>
        </div>
    </div>
    <div class="row">
        <label class="col-xs-5" ><?php echo $form['date_reglement']->renderLabel() ?></label>
        <div class="col-xs-4">
            <?php echo $form['date_reglement']->renderError() ?>
            <?php echo $form['date_reglement'] ?>
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
        <label class="col-xs-5" ><?php echo $form['commentaire']->renderLabel() ?></label>
        <div class="col-xs-4">
            <?php echo $form['commentaire']->renderError() ?>
            <?php echo $form['commentaire'] ?>
        </div>
    </div>
    <div class="row">
        <?php echo $form->renderHiddenFields(false) ?>
        &nbsp;
        <!--<a class="btn btn-info" href="<?php echo url_for('facture/listeFactures') ?>">Retour list</a>-->
        <?php if (!$form->getObject()->isNew()): ?>
            &nbsp;<a class="btn btn-danger" <?php echo link_to('Supprimer', 'facture/delete?id_facture=' . $form->getObject()->getIdFacture(), array('method' => 'delete', 'confirm' => 'Are you sure?')) ?></a>
        <?php endif; ?>
        <input class="btn btn-primary" id="valider" type="submit" value="Enregistrer" />
    </div>
</form>