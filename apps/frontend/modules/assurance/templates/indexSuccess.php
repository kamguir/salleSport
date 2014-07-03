<h1>TblAssurances List</h1>

<table>
  <thead>
    <tr>
      <th>Assurance</th>
      <th>Adherent</th>
      <th>Ref assurance</th>
      <th>Prix assurance</th>
      <th>Date assurance</th>
      <th>Created at</th>
      <th>Deleted at</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($tblAssurances as $tblAssurance): ?>
    <tr>
      <td><a href="<?php echo url_for('assurance/edit?assurance_id='.$tblAssurance->getAssuranceId()) ?>"><?php echo $tblAssurance->getAssuranceId() ?></a></td>
      <td><?php echo $tblAssurance->getAdherentId() ?></td>
      <td><?php echo $tblAssurance->getRefAssuranceId() ?></td>
      <td><?php echo $tblAssurance->getPrixAssurance() ?></td>
      <td><?php echo $tblAssurance->getDateAssurance() ?></td>
      <td><?php echo $tblAssurance->getCreatedAt() ?></td>
      <td><?php echo $tblAssurance->getDeletedAt() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('assurance/new') ?>">New</a>
