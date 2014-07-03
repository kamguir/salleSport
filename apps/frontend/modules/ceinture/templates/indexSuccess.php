<h1>TblCeintures List</h1>

<table>
  <thead>
    <tr>
      <th>Ceinture</th>
      <th>Adherent</th>
      <th>Ceinture niveau</th>
      <th>Date acquisition</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($tblCeintures as $tblCeinture): ?>
    <tr>
      <td><a href="<?php echo url_for('ceinture/edit?ceinture_id='.$tblCeinture->getCeintureId()) ?>"><?php echo $tblCeinture->getCeintureId() ?></a></td>
      <td><?php echo $tblCeinture->getAdherentId() ?></td>
      <td><?php echo $tblCeinture->getCeintureNiveauId() ?></td>
      <td><?php echo $tblCeinture->getDateAcquisition() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('ceinture/new') ?>">New</a>
