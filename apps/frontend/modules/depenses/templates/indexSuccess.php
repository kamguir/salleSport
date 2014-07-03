<h1>TblDepensess List</h1>

<table>
  <thead>
    <tr>
      <th>Id depenses</th>
      <th>Date depenses</th>
      <th>Id ref depenses</th>
      <th>Montant depenses</th>
      <th>Etat paiement</th>
      <th>Created at</th>
      <th>Updated at</th>
      <th>Deleted at</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($tblDepensess as $tblDepenses): ?>
    <tr>
      <td><a href="<?php echo url_for('depenses/edit?id_depenses='.$tblDepenses->getIdDepenses()) ?>"><?php echo $tblDepenses->getIdDepenses() ?></a></td>
      <td><?php echo $tblDepenses->getDateDepenses() ?></td>
      <td><?php echo $tblDepenses->getIdRefDepenses() ?></td>
      <td><?php echo $tblDepenses->getMontantDepenses() ?></td>
      <td><?php echo $tblDepenses->getEtatPaiement() ?></td>
      <td><?php echo $tblDepenses->getCreatedAt() ?></td>
      <td><?php echo $tblDepenses->getUpdatedAt() ?></td>
      <td><?php echo $tblDepenses->getDeletedAt() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('depenses/new') ?>">New</a>
