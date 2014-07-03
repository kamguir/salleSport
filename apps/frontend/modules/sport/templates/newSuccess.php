<div class="col-md-6">
    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="panel-title">
                <i class="glyphicon glyphicon-wrench pull-right"></i>
                <h4> Nouveau Sport </h4>
            </div>
        </div>
        <div class="panel-body">
            <?php include_partial('form', array('form' => $form)) ?>
        </div><!--/panel content-->
    </div>

    <div>
        <h3 class="page-header">Actions</h3>
        <div>
            <a href="<?php echo url_for('sport/new') ?>" class="btn btn-primary"><i class="icon-plus-sign icon-white"></i>Ajouter Sport</a> 
            <a href="<?php echo url_for('sport/listeSports') ?>" class="btn btn-primary"><i class="icon-list icon-white"></i>Liste des Sports</a> 
        </div></br>
    </div>
</div>
