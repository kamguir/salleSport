<div>
    <div class="panel panel-default">
        <div class="panel-heading clearfix">
            <i class="glyphicon glyphicon-comment"></i>
            <h3 class="panel-title">Modifier l'adherent ( <b><?php echo $form->getObject()->getNomAdherent() . ' ' . $form->getObject()->getPrenomAdherent() ?></b> ).
                <?php if ($form->getObject()->getIdTypeAdherent() == RefTypeAdherentPeer::ADHERENT): ?>
                Entraineur est: ( <b><?php echo $form->getObject()->getEntraineurById($form->getObject()->getEntraineurId()) ?></b> )
                <?php endif; ?>
            </h3>
        </div>
        <div class="panel-body">
            <?php include_partial('form', array('form' => $form)) ?>
        </div>
    </div>
    <?php include_partial('divActions', array()) ?>
</div>