<ul class="stats hidden-sm hidden-xs">
    <li>
        <span id="orders" class="graph"><canvas width="30" height="18" style="display: inline-block; width: 62px; height: 18px; vertical-align: top;"></canvas></span>
        <div class="details">
            <span class="big" style="color: #000;"><?php echo $nbrAdherents; ?></span>
            <span class="small">Adherents</span>
        </div>
    </li>
    <li>
        <span id="currentBalance" class="graph"><canvas width="30" height="18" style="display: inline-block; width: 62px; height: 18px; vertical-align: top;"></canvas></span>
        <div class="details">
            <span class="big" style="color: #a4db79;"><?php echo $montantFacturesPayés; ?> DH</span>
            <span class="small">Factures</span>
        </div>
    </li>
    <li>
        <span id="currentBalance" class="graph"><canvas width="30" height="18" style="display: inline-block; width: 62px; height: 18px; vertical-align: top;"></canvas></span>
        <div class="details">
            <span class="big" style="color: #FC0000;"><?php echo $montantFacturesNonPayés; ?> DH</span>
            <span class="small">Factures</span>
        </div>
    </li>
    <li>
        <span id="currentBalance" class="graph"><canvas width="30" height="18" style="display: inline-block; width: 62px; height: 18px; vertical-align: top;"></canvas></span>
        <div class="details">
            <span class="big" style="color: #FC0000;"><?php echo $montantDepenses; ?> DH</span>
            <span class="small">Dépenses</span>
        </div>
    </li>
</ul>