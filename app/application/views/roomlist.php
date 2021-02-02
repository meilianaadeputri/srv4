<div class="container">
  <h3><?= $judul ?></h3>
  <hr>
  <h5><?= $tanggal ?></h5>

<div class="row">
  <div class="col s4">
    <ul>
      <?php
        for($l=1;$l<=14;$l++) {
      ?>
          <li>
            <a href="/rooms/<?= $l ?>">lantai <?= $l ?></a>
          </li>
       <?php
        }
       ?>
    </ul>
  </div>

  <div class="col s8">
    <table>
      <thead>
        <tr>
          <th>Room</th>
          <th>Type</th>
          <th>View</th>
          <th>Rate</th>
          <th>Availability</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($rooms as $room): ?>
          <tr>
            <td><?= $room['room'] ?></td>
            <td><?= $room['rtype'] ?></td>
            <td><?= $room['dview'] ?></td>
            <td><?= $room['frate'] ?></td>
            <td>
              <?php
                $tanggal = date('Y-m-d');
                if (($room['date_in'] <= $tanggal) && ($room['date_out'] <= $tanggal && $room['date_out'] != 0) ) {
                  echo "Available";
                } else if ($room['date_in'] == 0 || $room['date_out'] == 0) {
                  echo "Unavailable";
                }
               ?>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
  </div>
</div>
