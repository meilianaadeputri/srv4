<h1><?= $judul ?></h1>

<table>
  <thead>
    <tr>
      <td>Member</td>
      <td>Prodi</td>
      <td>Angkatan</td>
      <td>No. Telepon</td>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($members as $member): ?>
      <tr>
        <td><?= $member['nama']; ?></td>
        <td><?= $member['prodi']; ?></td>
        <td><?= $member['angkatan']; ?></td>
        <td><?= $member['telepon']; ?></td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>
