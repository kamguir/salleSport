<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <title>
            <?php include_slot('title', 'BackOffice Gestion Salle Sport') ?>
        </title>
        <?php include_http_metas() ?>
        <?php include_metas() ?>
        <?php include_title() ?>
        <link rel="shortcut icon" href="/images/pictos/favicon.ico" />
        <?php include_stylesheets() ?>
        <?php include_javascripts() ?>
    </head>
    <body>
        <div id="header">
        </div>
        <?php if ($sf_request->hasAttribute('notice') || $sf_user->getFlash('notice')): ?>
            <script type="text/javascript">
                $('#header').notif({title: "Information", content: "<?php echo $sf_request->getAttribute('notice') . $sf_user->getFlash('notice') ?>", timeout: 6000, cls: "success"})
            </script>
        <?php endif; ?>
        <!-- Header -->
        <div class="container">
            <div class="top-bar">
                <div class="logo">
                    GSSport
                    <!--<sup><i class="icon-cloud"></i></sup>-->
                </div>
                <!-- Icon nav start -->
                <ul id="icon-nav">
                    <li>
                        <a href="<?php echo url_for('adherent/listeMembres') ?>" data-original-title="" title="">
                            <i class="glyphicon glyphicon-user"></i>
                            <span class="count-label"></span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo url_for('facture/listeFactures') ?>" data-original-title="" title="">
                            <i class="glyphicon glyphicon-flash"></i>
                            <span class="count-label count-lb-yellow"></span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo url_for('depenses/alertes') ?>" data-original-title="" title="">
                            <i class="glyphicon glyphicon-exclamation-sign"></i>
                            <span class="count-label count-lb-green"></span>
                        </a>
                    </li>
                </ul>
                <!-- Icon nav end -->

                <!-- Search bar start -->
                <div class="custom-search hidden-xs">
                  <!--<input type="text" class="search-query" placeholder="Search here">-->
                  <!--<i class="icon-search"></i>-->
                </div>
                <!-- Search bar end -->

            </div>

            <header class="navbar" style="position: static;">
                <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
                    <ul class="nav navbar-nav" >
                        <li>
                            <a href="<?php echo url_for('accueil/index') ?>" data-original-title="" title="">Accueil</a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-original-title="" title="">Adherents <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo url_for('adherent/new') ?>" data-original-title="" title="">Nouveau Membre</a></li>
<!--                                <li><a href="<?php echo url_for('adherent/listeAdherents') ?>" data-original-title="" title="">Liste Adherents</a></li>
                                <li><a href="<?php echo url_for('adherent/listeEntraineurs') ?>" data-original-title="" title="">Liste Entraîneurs</a></li>-->
                                <li><a href="<?php echo url_for('adherent/listeMembres') ?>" data-original-title="" title="">Liste Membres</a></li>
                                <!--                <li class="divider"></li>
                                                <li><a href="grid.html" data-original-title="" title="">Grid</a></li>
                                                <li class="divider"></li>-->
                                <!--<li><a href="ui-elements.html" data-original-title="" title="">More UI Elements...</a></li>-->
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-original-title="" title="">Facturation <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo url_for('facture/new') ?>" data-original-title="" title="">Nouvelle Facture</a></li>
                                <li><a href="<?php echo url_for('facture/listeFactures') ?>" data-original-title="" title="">Mes Factures</a></li>
                                <li><a href="<?php echo url_for('depenses/listeDepenses') ?>" data-original-title="" title="">Mes Dépenses</a></li>
                                <li><a href="<?php echo url_for('assurance/listeAssurances') ?>" data-original-title="" title="">Assurances</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-original-title="" title="">Gestion <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo url_for('adherent/planningEntraineurs') ?>" data-original-title="" title="">Planning Entraineurs</a></li>
                                <li><a href="<?php echo url_for('adherent/mesAdherents') ?>" data-original-title="" title="">Planning Adhérents</a></li>
                                <li><a href="<?php echo url_for('ceinture/listeCeintures') ?>" data-original-title="" title="">Ceinture</a></li>
                                <li><a href="<?php echo url_for('competition/index') ?>" data-original-title="" title="">Competitions</a></li>
                                <!--<li><a href="<?php echo url_for('depenses/alertes') ?>" data-original-title="" title="">Alerts</a></li>-->
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-original-title="" title="">Administration <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo url_for('adminRefTypeSport/index') ?>" data-original-title="" title="">Types Sport</a></li>
                                <li><a href="<?php echo url_for('adminSeance/index') ?>" data-original-title="" title="">Séances</a></li>
                                <li><a href="<?php echo url_for('adminAssurance/index') ?>" data-original-title="" title="">Assurances</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="<?php echo url_for('depenses/mesAlertes') ?>" data-original-title="" title="">Alerts</a>
                        </li>
                    </ul>

                    <!-- Mini navigation start -->
                    <ul class="nav navbar-nav navbar-right hidden-sm hidden-xs">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-original-title="" title=""><span class="glyphicon glyphicon-cog"></span> Compte <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><h5>&nbsp;&nbsp;Nom : <?php echo $sf_user->getAttribute('user_nom') ?></h5></li>
                                <li><h5>&nbsp;&nbsp;Prénom : <?php echo $sf_user->getAttribute('user_prenom') ?></h5></li>
                                <li><h5>&nbsp;&nbsp;Prénom : <?php echo $sf_user->getAttribute('fonction') ?></h5></li>
                                <!--<li><h5>&nbsp;&nbsp;Fonction : <?php echo $sf_user->getAttribute('user_prenom') ?></h5></li>-->
                                <li class="divider"></li>
                                <li><a href="<?php echo url_for('auth/logout') ?>" data-original-title="" title="">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                    <!-- Mini navigation end -->

                </nav>
            </header>

            <div class="page-title">
                <div class="row ">
                    <!-- Breadcrumb nav start -->
                    <div class="col-md-3 col-sm-4 col-xs-6">
                        <h2><?php echo $sf_context->getModuleName(); ?></h2>
                        <ul class="breadcrumb">
                            <li>Home</li>
                            <li>Gallery</li>
                        </ul>
                    </div>
                    <!-- Breadcrumb nav end -->
                    <div class="col-md-9 col-sm-9 col-xs8">
                        <!--             Mini Nav Right Start 
                                    <ul id="page-settings" class="hidden-sm">
                                      <li id="reportrange">
                                        <i class="icon-calendar"></i>
                                        <span>May 14, 2014 - June 12, 2014</span> <b class="caret"></b>
                                      </li>
                                      <li>
                                        <i class="icon-cog"></i>
                                      </li>
                                    </ul>
                                     Mini Nav Right End -->
                        <!-- Stats Start -->
                        <?php include_component('accueil', 'bandeauInfo')  ?>
<!--                        <ul class="stats hidden-sm hidden-xs">
                            <li>
                                <span id="orders" class="graph"><canvas width="30" height="18" style="display: inline-block; width: 62px; height: 18px; vertical-align: top;"></canvas></span>
                                <div class="details">
                                    <span class="big">2,591</span>
                                    <span class="small">Adherents</span>
                                </div>
                            </li>
                            <li>
                                <span id="currentBalance" class="graph"><canvas width="30" height="18" style="display: inline-block; width: 62px; height: 18px; vertical-align: top;"></canvas></span>
                                <div class="details">
                                    <span class="big">$444</span>
                                    <span class="small">Factures</span>
                                </div>
                            </li>
                            <li>
                                <span id="currentBalance" class="graph"><canvas width="30" height="18" style="display: inline-block; width: 62px; height: 18px; vertical-align: top;"></canvas></span>
                                <div class="details">
                                    <span class="big">$7,345</span>
                                    <span class="small">Dépenses</span>
                                </div>
                            </li>
                        </ul>-->
                        <!-- Stats End -->
                    </div>
                </div>
            </div>
        </div><!-- /container -->
        </div>
        <!-- /Header -->
        <!-- Main -->
        <div class="container">
            <!-- Main -->
            <?php echo $sf_content ?>
            <!-- /Main -->
            <!--</body>-->

            <div class="row"></div>
            <footer class="text-center" style="background-color: #f5f5f5; text-align: center;">Tous droits réservés. Copyright © 2014 --by Kamguir--</footer>
        </div>
    </body>
</html>

<script>
    // very simple to use!
    $(document).ready(function() {
        $('.js-activated').dropdownHover().dropdown();
    });
</script>