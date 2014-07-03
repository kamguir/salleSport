<h1>TblSports List</h1>

<table>
  <thead>
    <tr>
      <th>Id sport</th>
      <th>Id type sport</th>
      <th>Id moniteur</th>
      <th>Commentaire</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($tblSports as $tblSport): ?>
    <tr>
      <td><a href="<?php echo url_for('sport/edit?id_sport='.$tblSport->getIdSport()) ?>"><?php echo $tblSport->getIdSport() ?></a></td>
      <td><?php echo $tblSport->getIdTypeSport() ?></td>
      <td><?php echo $tblSport->getIdAdherent() ?></td>
      <td><?php echo $tblSport->getCommentaire() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('sport/new') ?>">New</a>
