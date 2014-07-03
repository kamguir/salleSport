<div>
    <div class="panel panel-default">
        <div class="panel-heading clearfix">
            <i class="icon-calendar"></i>
            <h3 class="panel-title">Modifier Sport</h3>
        </div>
        <div class="panel-body">
            <?php include_partial('form', array('form' => $form)) ?>
        </div>
    </div>
    <div class="col-md-12 col-xs-12">
        <h3 class="page-header">Actions</h3>
        <div>
           <a href="<?php echo url_for('depenses/new') ?>" class="btn btn-primary"><i class="icon-plus-sign icon-white"></i>Ajouter dépense</a> 
            <a href="<?php echo url_for('depenses/listeDepenses') ?>" class="btn btn-primary"><i class="icon-list icon-white"></i>Liste des dépenses</a> 
        </div></br>
    </div>
</div>