<h1>TblAdherents List</h1>

<table>
  <thead>
    <tr>
      <th>Id adherent</th>
      <th>Cin adherent</th>
      <th>Nom adherent</th>
      <th>Prenom adherent</th>
      <th>Id civilite</th>
      <th>Situation</th>
      <th>Age adherent</th>
      <th>Num tel</th>
      <th>Adresse adherent</th>
      <th>Id type fonction</th>
      <th>Date adheration</th>
      <th>Id sport</th>
      <th>Id type adherent</th>
      <th>Updated at</th>
      <th>Deleted at</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($tblAdherents as $tblAdherent): ?>
    <tr>
      <td><a href="<?php echo url_for('adherent/edit?id_adherent='.$tblAdherent->getIdAdherent()) ?>"><?php echo $tblAdherent->getIdAdherent() ?></a></td>
      <td><?php echo $tblAdherent->getCinAdherent() ?></td>
      <td><?php echo $tblAdherent->getNomAdherent() ?></td>
      <td><?php echo $tblAdherent->getPrenomAdherent() ?></td>
      <td><?php echo $tblAdherent->getIdCivilite() ?></td>
      <td><?php echo $tblAdherent->getIdSituation() ?></td>
      <td><?php echo $tblAdherent->getAgeAdherent() ?></td>
      <td><?php echo $tblAdherent->getNumTel() ?></td>
      <td><?php echo $tblAdherent->getAdresseAdherent() ?></td>
      <td><?php echo $tblAdherent->getDateAdhesion() ?></td>
      <td><?php echo $tblAdherent->getIdTypeSport() ?></td>
      <td><?php echo $tblAdherent->getIdTypeAdherent() ?></td>
      <td><?php echo $tblAdherent->getUpdatedAt() ?></td>
      <td><?php echo $tblAdherent->getDeletedAt() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('adherent/new') ?>">New</a>
