<h1>TblFactures List</h1>

<table>
  <thead>
    <tr>
      <th>Id facture</th>
      <th>Id adherent</th>
      <th>Prix facture</th>
      <th>Date reglement</th>
      <th>Etat paiement</th>
      <th>Commentaire</th>
      <th>Created at</th>
      <th>Deleted at</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($tblFactures as $tblFacture): ?>
    <tr>
      <td><a href="<?php echo url_for('facture/edit?id_facture='.$tblFacture->getIdFacture()) ?>"><?php echo $tblFacture->getIdFacture() ?></a></td>
      <td><?php echo $tblFacture->getIdAdherent() ?></td>
      <td><?php echo $tblFacture->getPrixFacture() ?></td>
      <td><?php echo $tblFacture->getDateReglement() ?></td>
      <td><?php echo $tblFacture->getEtatPaiement() ?></td>
      <td><?php echo $tblFacture->getCommentaire() ?></td>
      <td><?php echo $tblFacture->getCreatedAt() ?></td>
      <td><?php echo $tblFacture->getDeletedAt() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('facture/new') ?>">New</a>
