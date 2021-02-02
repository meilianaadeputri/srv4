<div class="container">
  <h3><?= $judul ?></h3>
  <hr>

<div class="row">
  <div class="col s1">
      <ul>
        <?php
          for($b=4;$b<=11;$b++) {
        ?>
            <li>
              <a href="/guests/<?= $b ?>">bulan <?= $b ?></a>
            </li>
         <?php
       }
         ?>
      </ul>
  </div>

<div class="col s11">
  <table>
    <thead>
      <tr>
        <th>Room</th>
        <th>Name</th>
        <th>Roomtype</th>
        <th>Check-in</th>
        <th>Check-out</th>
      </tr>
    </thead>
    <tbody>
      <?php
      foreach ($guests as $guest): ?>
      <tr>
        <td><?= $guest['room'] ?></td>
        <td><?= $guest['nama'] ?></td>
        <td><?= $guest['rtype'] ?></td>
        <td><?= $guest['date_in'] ?></td>
        <td><?= $guest['date_out'] ?></td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>
</div>
</div>
</div>
