<div class="container">
  <h3><?= $judul ?></h3>
  <hr>

<div class="row">
  <div class="col s1">
    <ul>
      <?php
        for($i ='A'; $i <='Z'; $i++) {
          if ($i == 'Q' or $i == 'X') continue;
      ?>
          <li>
            <a href="/members/<?= $i ?>"><?= $i ?></a>
          </li>
       <?php
        if ($i == 'Z') break;}
       ?>
    </ul>
  </div>
  <div class="col s11">
    <table>
      <thead>
        <tr>
          <th>Member ID</th>
          <th>Name</th>
          <th>City</th>
          <th>Country</th>
          <th>Phone Number</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($members as $member): ?>
          <tr>
            <td><?= $member['member_ID'] ?></td>
            <td><?= $member['nama'] ?></td>
            <td><?= $member['kota'] ?></td>
            <td><?= $member['Country'] ?></td>
            <td><?= $member['telepon'] ?></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
  </div>
</div>
