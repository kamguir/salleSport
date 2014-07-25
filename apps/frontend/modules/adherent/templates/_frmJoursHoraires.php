<div class="col-xs-8 col-md-offset-4" style="width: 60%;float: initial;margin-top: 4%;">
    <label class="col-xs-2" ><?php echo $form['seance_horaire_id']->renderLabel() ?></label>
    <div class="col-xs-4">
        <?php echo $form['seance_horaire_id']->renderError() ?>
        <?php echo $form['seance_horaire_id'] ?>
    </div>
</div>

<script>
    $(function() {

        $("#tbl_adherent_id_type_adherent").change(changeTypeAdherent);

        function changeTypeAdherent()
        {
            typeAdherent = $("#tbl_adherent_id_type_adherent").val();
            
            if (typeAdherent == <?php echo RefTypeAdherentPeer::ENTRAINEUR ?>)
            {
                $("#tbl_adherent_seance_horaire_id").attr("disabled","");
            }
            else if (typeAdherent == <?php echo RefTypeAdherentPeer::ADHERENT ?>)
            {
                $("#tbl_adherent_seance_horaire_id").attr("disabled","disabled");
            }
            else if (typeAdherent == <?php echo RefTypeAdherentPeer::EMPLOYE ?>)
            {
                $("#tbl_adherent_seance_horaire_id").attr("disabled","");
            }
        }
        changeTypeAdherent();
    });
</script>