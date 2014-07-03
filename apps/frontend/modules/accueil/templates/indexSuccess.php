<div class="row">
</div>
<div class="row">
    <div class="col-md-5 col-sm-5 col-sx-12">
        <div class="panel panel-default">
            <div class="panel-heading clearfix">
                <i class="glyphicon glyphicon-euro"></i>
                <h3 class="panel-title">Mes Statéstiques</h3>
            </div>
            <div class="_panel-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover no-margin">
                        <tbody>
                        <th></th>
                        <th>Factures</th>
                        <th>Dépenses</th>
                        <th>Assurances</th>
                        <tr>
                            <td>
                                Nbr total
                            </td>
                            <td>
                                <span class="label label-default">
                                    <?php echo $facturesPayes + $facturesNonPayes; ?>
                                </span>
                            </td>
                            <td>
                                <span class="label label-default">
                                    <?php echo $nbrTotalDepenses; ?>
                                </span>
                            </td>
                            <td>
                                <span class="label label-default">
                                    <?php echo $nbrTotalAssurances; ?>
                                </span>
                            </td>
                        </tr>
                        <tr class="active">
                            <td>
                                Nbr payés
                            </td>
                            <td>
                                <span class="label label-info">
                                    <?php echo $facturesPayes; ?>
                                </span>
                            </td>
                            <td>
                                <span class="label label-info">
                                    <?php echo $nbrTotalDepensesPayes; ?>
                                </span>
                            </td>
                            <td>
                                <span class="label label-info">
                                    <?php echo $nbrTotalAssurancesPayes; ?>
                                </span>
                            </td>
                        </tr>
                        <tr class="warning">
                            <td>
                                Nbr non payés
                            </td>
                            <td>
                                <span class="label label-success">
                                    <?php echo $facturesNonPayes; ?>
                                </span>
                            </td>
                            <td>
                                <span class="label label-success">
                                    <?php echo $nbrTotalDepensesNonPayesduMoisCourant; ?>
                                </span>
                            </td>
                            <td>
                                <span class="label label-success">
                                    <?php echo $nbrTotalAssuranceNonPayesduMoisCourant; ?>
                                </span>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4 col-sm-5 col-sx-12">
        <div class="panel panel-default">
            <div class="panel-heading clearfix">
                <i class="glyphicon glyphicon-euro"></i>
                <h3 class="panel-title">Mes Statéstiques</h3>
            </div>
            <div class="_panel-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover no-margin">
                        <tbody>
                        <th></th>
                        <th>Assurance</th>
                        <th>Dépenses</th>
                        <tr>
                            <td style="width:60%" >
                                Nbr total
                            </td>
                            <td style="width:40%">
                                <span class="label label-default">
                                    <?php echo $facturesPayes + $facturesNonPayes; ?>
                                </span>
                            </td>
                            <td style="width:40%">
                                <span class="label label-default">
                                    <?php echo $nbrTotalDepenses; ?>
                                </span>
                            </td>
                        </tr>
                        <tr class="active">
                            <td>
                                Nbr payés
                            </td>
                            <td>
                                <span class="label label-info">
                                    <?php echo $facturesPayes; ?>
                                </span>
                            </td>
                            <td>
                                <span class="label label-info">
                                    <?php echo $nbrTotalDepensesPayes; ?>
                                </span>
                            </td>
                        </tr>
                        <tr class="warning">
                            <td>
                                Nbr non payés
                            </td>
                            <td>
                                <span class="label label-success">
                                    <?php echo $facturesNonPayes; ?>
                                </span>
                            </td>
                            <td>
                                <span class="label label-success">
                                    <?php echo $nbrTotalDepensesNonPayesduMoisCourant; ?>
                                </span>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-10 col-xs-10">
        <div class="panel panel-default">
            <div class="panel-heading clearfix">
                <!--<i class="icon-bar-chart"></i>-->
                <i class="glyphicon glyphicon-user"></i>
                <h3 class="panel-title">Statéstiques Mois ( <strong><?php echo date('m'); ?></strong> )</h3>
            </div>
            <div class="panel-body">
                <?php include_partial('nbrAdherentParTypeSport', array('tblAdherents' => $tblAdherents)); ?>    
            </div>
        </div>
    </div>
</div>

<div class="row">
    <!--<div class="row" style="margin-left: 10%;">
        <div class="col-md-9">
            <div class="panel-default">
                <a href="#"><h4>Réporting du Mois (<?php echo date('m'); ?>)</h4></a>
            </div>
            <hr style="margin-top: 5px; margin-bottom: 5px;">
        </div>
        <div class="col-md-3">
            <div class="panel panel-default">
                <div class="panel-heading" ><h4><b>Factures</b> </h4></div>
                <div class="panel-body">
                <ul class="list-group">
                    <li class="list-group-item">
                        Nbr total
                        <span class="badge"><?php echo $facturesPayes + $facturesNonPayes; ?></span>
                    </li>
                </ul>
                <ul class="list-group">
                    <li class="list-group-item">
                        Factures payés
                        <span class="badge"><?php echo $facturesPayes; ?></span>
                    </li>
                </ul>
                <ul class="list-group">
                    <li class="list-group-item">
                        Factures non payés
                        <span class="badge"><?php echo $facturesNonPayes; ?></span>
                    </li>
                </ul>
            </div>
        </div>
            <div class="row">
            <a href="#"><strong><i class="glyphicon glyphicon-comment"></i> Discussions</strong></a>
            </div>
        <div class="col-md-3">
            <div class="panel panel-default">
                <div class="panel-heading" ><h4><b>Dépenses</b></h4></div>
                <div class="panel-body">
                <ul class="list-group">
                    <li class="list-group-item">
                        Nbr total
                        <span class="badge"><?php echo $nbrTotalDepenses; ?></span>
                    </li>
                </ul>
                <ul class="list-group">
                    <li class="list-group-item">
                        Non payés du mois
                        <span class="badge"><?php echo $nbrTotalDepensesNonPayesduMoisCourant; ?></span>
                    </li>
                </ul>
                <ul class="list-group">
                    <li class="list-group-item">
                        Total Non payés
                        <span class="badge"><?php echo $nbrTotalDepensesNonPayes; ?></span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-md-3">
            <div class="panel panel-default">
                <div class="panel-heading" ><h4><b>Les Entrées</b></h4></div>
                <div class="panel-body">
                <ul class="list-group">
                    <li class="list-group-item">
                        Entrées du Jour
                        <span class="badge"><?php
    ($totalFacturesParJour) ? $res1 = $totalFacturesParJour : $res1 = 0;
    echo $res1;
    ?></span>
                    </li>
                </ul>
                <ul class="list-group">
                    <li class="list-group-item">
                        Entrées du mois
                        <span class="badge"><?php echo $totalFacturesParMois; ?></span>
                    </li>
                </ul>
                <ul class="list-group">
                    <li class="list-group-item">
                        Entées de l'année 
                        <span class="badge"><?php echo $totalFacturesParAnnee; ?></span>
                    </li>
                </ul>
            </div>
        </div>
        </div>-->
    <!--    <div class="col-xs-10" style="margin-left: 10%;">
    <?php // include_partial('listeAdherentsNonPaye');   ?>    
        </div>-->
    <div class="col-xs-6">
        <?php // include_partial('nbrAdherentParTypeSport', array('tblAdherents' => $tblAdherents));   ?>    
    </div>
</div>