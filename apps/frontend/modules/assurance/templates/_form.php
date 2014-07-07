<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('assurance/' . ($form->getObject()->isNew() ? 'create' : 'update') . (!$form->getObject()->isNew() ? '?assurance_id=' . $form->getObject()->getAssuranceId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
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
        <label class="col-xs-5" ><?php echo $form['ref_assurance_id']->renderLabel() ?></label>
        <div class="col-xs-5">
            <?php echo $form['ref_assurance_id']->renderError() ?>
            <?php echo $form['ref_assurance_id'] ?>
        </div>
    </div>
    <div id="prixAssurance_form">
        <?php include_partial('frmPrixAssurance', array('form' => $form)) ?>
    </div>
    <div class="row">
        <label class="col-xs-5" ><?php echo $form['etat_paiement']->renderLabel() ?></label>
        <div class="col-xs-5">
            <?php echo $form['etat_paiement']->renderError() ?>
            <?php echo $form['etat_paiement'] ?>
        </div>
    </div>
    <div class="row">
        <label class="col-xs-5" ><?php echo $form['date_assurance']->renderLabel() ?></label>
        <div class="col-xs-5">
            <?php echo $form['date_assurance']->renderError() ?>
            <?php echo $form['date_assurance'] ?>
        </div>
    </div>
    <div class="row">
        <?php echo $form->renderHiddenFields(false) ?>
        &nbsp;
        <!--<a class="btn btn-info" href="<?php echo url_for('assurance/index') ?>">Retour list</a>-->
        <?php if (!$form->getObject()->isNew()): ?>
            &nbsp;<a class="btn btn-danger" <?php echo link_to('Supprimer', 'assurance/delete?assurance_id=' . $form->getObject()->getAssuranceId(), array('method' => 'delete', 'confirm' => 'Are you sure?')) ?></a>
        <?php endif; ?>
        <input class="btn btn-primary" id="valider" type="submit" value="Enregistrer" />
    </div>
</form>

<script>
    $(document).ready(function() {
        $("#tbl_assurance_ref_assurance_id").live("change", function() {
            assurance_id = $('#tbl_assurance_ref_assurance_id').val();
            $.post("<?php echo url_for("assurance/prixByTypeAssuranceAjax") ?>", {assurance_id: assurance_id}, function(html) {
                $('#prixAssurance_form').html(html);
            });
        });
    });
</script>