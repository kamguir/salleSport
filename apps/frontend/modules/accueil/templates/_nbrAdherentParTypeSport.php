<div class="col-lg-12" >
    <!--Highcharts - Basic column-->
    <div class="panel panel-success" >
        <div class="panel-heading">
            <h3 class="panel-title"></h3>
        </div>
        <div class="panel-body" style="padding: 0px;">
            <div id="resultat_filtre" style="height: 200px; margin: 0 auto"></div>
        </div>
    </div>
</div>
<?php
$tblTypeSport = array();
foreach ($tblAdherents as $tblAdherent) {
    
    $tblTypeSport[] = RefTypeSportPeer::getTypeSportByID($tblAdherent->getIdTypeSport());
    $nbrAdherentFULLCONTACT = TblAdherentPeer::getNbrAdherentByTypeSport(RefTypeSportPeer::FULLCONTACT);
    $nbrAdherentTEAKWONDO = TblAdherentPeer::getNbrAdherentByTypeSport(RefTypeSportPeer::TEAKWONDO);
    $nbrAdherentAEROBIC = TblAdherentPeer::getNbrAdherentByTypeSport(RefTypeSportPeer::AEROBIC);
    $nbrAdherentKARATE = TblAdherentPeer::getNbrAdherentByTypeSport(RefTypeSportPeer::KARATE);
    $nbrAdherentJUDO = TblAdherentPeer::getNbrAdherentByTypeSport(RefTypeSportPeer::JUDO);
    $nbrAdherentMUSCULATION = TblAdherentPeer::getNbrAdherentByTypeSport(RefTypeSportPeer::MUSCULATION);
//    var_dump($nbrAdherentMUSCULATION);die;
}
//var_dump($nbrAdherentFULLCONTACT);die;
$libelleforReporting = implode(',', array_values($tblTypeSport));
?>
<!--Highcharts - Basic column-->
<script>

    $(function() {
        chart1 = new Highcharts.Chart({
            chart: {
                renderTo: 'resultat_filtre',
                type: 'column'
            },
            title: {
                text: 'Nombre D\'adhérent Par Type Sport'
            },
            subtitle: {
                text: ''
            },
            xAxis: {
                categories: ['FULLCONTACT', 'TEAKWONDO', 'AEROBIC', 'KARATE', 'JUDO', 'MUSCULATION'],
                title: {
                    text: null
                }
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'indicateurs',
                    align: 'high'
                },
                labels: {
                    overflow: 'justify'
                }
            },
            tooltip: {
                valueSuffix: ' '
            },
            plotOptions: {
                bar: {
                    dataLabels: {
                        enabled: true
                    }
                }
            },
            legend: {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'top',
                x: -20,
                y: 100,
                floating: true,
                borderWidth: 1,
                backgroundColor: '#FFFFFF',
                shadow: true
            },
            credits: {
                enabled: false
            },
            series: [{
                    name: 'nbr Adherent',
                    data: [<?php echo $nbrAdherentFULLCONTACT; ?>, <?php echo $nbrAdherentTEAKWONDO; ?>, <?php echo $nbrAdherentAEROBIC; ?>,
                        <?php echo $nbrAdherentKARATE; ?>, <?php echo $nbrAdherentJUDO; ?>, <?php echo $nbrAdherentMUSCULATION; ?>]
                }
            ]
        });
    });
</script>