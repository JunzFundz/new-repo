<?php

require_once '../database/db_conn.php';

if (isset($_POST['getUserRequest'])) {
  $reqId = $_POST['reqId'];

  $stmt = mysqli_query($conn, "SELECT * from tbl_hitems");

?>

  <h6>Requested by : <?php echo $reqId ?></h6>

  <table class="table">
    <thead>
      <tr>
        <th scope="col">Item</th>
        <th scope="col">Serial</th>
        <th scope="col">Status</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($stmt as $row) { ?>
        <tr>
          <td><?= $row['item'] ?></td>
          <td><?= $row['serial'] ?></td>
          <td><?= $row['h_status'] ?></td>
        </tr>
      <?php } ?>
    </tbody>
  </table>

  <?php }

if (isset($_POST['getUser'])) {
  echo $requested_by = $_POST['requested_by'];
  $item = $_POST['item'];

  $sql = mysqli_query($conn, "SELECT * FROM item WHERE m_con = 'Available' AND itemscol = '$item'");

  foreach ($sql as $row) { ?>

    <form action="../database/db_request.php" method="post" style="margin-block: 10px;">
      <input type="hidden" name="request" value="<?php echo $requested_by ?>">
      <div class="row g-3 align-items-center">
        <div class="col-auto">
          <label for="" class="col-form-label">Serial</label>
        </div>
        <div class="col-auto">
          <input type="hidden" id="" name="item" value="<?= $row['itemscol'] ?>" class="form-control" aria-describedby="s">

          <input type="text" id="" readonly name="serial" value="<?= $row['serial'] ?>" class="form-control" aria-describedby="s">
        </div>
        <div class="col-auto">
          <span id="s" class="form-text">
            <input class="btn btn-primary" name="submitdata" type="submit" value="Add">
          </span>
        </div>
      </div>
    </form>

<?php
  }
}
