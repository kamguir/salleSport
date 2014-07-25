<div>
    <div class="panel panel-default">
        <div class="panel-heading clearfix">
            <i class="glyphicon glyphicon-list" id="envoiMail" style="cursor:  pointer;"></i>
            <h3 class="panel-title">Liste des alerts du mois ( <?php echo date('m'); ?> )</h3>
        </div>

        <div id="ajax_div" style="padding:10px;text-align: center;">
        </div>
        <?php if ($mesFacturesNonPayes): ?>
            <?php
            $civilite = '';
            $nomAdherent = '';
            $preNomAdherent = '';
            $prixFacture = '';
            $typeSport = '';
            $dateReglement = '';
            $coreMessage = '';
            $coreMessageDepenses = '';
            foreach ($mesFacturesNonPayes as $value) {
                $civilite = $value->getTblAdherent()->getRefCivilite()->getLibelleCivilite();
                $nomAdherent = $value->getTblAdherent()->getNomAdherent();
                $preNomAdherent = $value->getTblAdherent()->getPrenomAdherent();
                $prixFacture = $value->getPrixFacture();
                $typeSport = $value->getTblAdherent()->getRefTypeSport()->getLibelle();
                $dateReglement = $value->getDateReglement();
                $coreMessage = $civilite . ' <b>' . $preNomAdherent . ' ' . $nomAdherent . '</b> adhérent dans sport <b>' . $typeSport .
                        '</b> n a pas payé la facture de <b>' . $prixFacture . 'DH</b>, derniere date de payement est <b>' . $dateReglement . '</b></br>';
                ?>
                <div class="panel-body" style="padding: 4px;" >
                    <div class="alert alert-block alert-danger fade in">
                        <button data-dismiss="alert" class="close" type="button" data-original-title="">
                            x
                        </button>
                        <p>
                            <?php echo $coreMessage; ?>
                        </p>
                    </div>
                </div>
                <?php
            };
            ?>
        <?php endif; ?>
        <?php if ($mesDepensesNonPayes): ?>
            <?php
            $typeDepenses = '';
            $montantDepenses = '';
            foreach ($mesDepensesNonPayes as $value) {
                $montantDepenses = $value->getMontantDepenses();
                $typeDepenses = $value->getRefDepenses()->getLibelleDepenses();
                $dateReglement = $value->getDateDepenses();
                $coreMessageDepenses .= 'La factures <b>' . $typeDepenses . '</b> reçu le <b>' . $dateReglement .
                        '</b> avec montant <b>' . $montantDepenses . 'DH</b><br/>';
                ?>
                <div class="panel-body" style="padding: 4px;" >
                    <div class="alert alert-block alert-danger fade in">
                        <button data-dismiss="alert" class="close" type="button" data-original-title="">
                            x
                        </button>
                        <p>
                            <?php echo $coreMessageDepenses; ?>
                        </p>
                    </div>
                </div>
                <?php
            };
            ?>
        <?php endif; ?>
    </div>
</div>

<script>
    $(document).ready(function() {
        $("#envoiMail").click(function() {
            $('#ajax_div').html('<img src="/images/pictos/gif-load.gif" />');
            $.post('<?php echo url_for('depenses/envoiMail') ?>', function(data) {
                if (data == 1)
                {
                    alert('Votre email est envoyé .');
                }
                else
                {
                    alert('Veuillez saisir une adresse email valide .');
                }
                $('#ajax_div').html('');
            });
        });
    });
</script>