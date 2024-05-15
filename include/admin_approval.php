<?php
session_start();
require_once '../database/db_conn.php';

$sql = "SELECT COUNT(*) AS totalItems FROM request WHERE status='pending'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$totalItems = $row['totalItems'];

?>

<!DOCTYPE html>
<html>

<head>
  <title>NORSU ISMS | Request Lists</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../style/css/bootstrap.min.css">
  <link rel="stylesheet" href="panel.css">
  <link rel="stylesheet" href="css-grids.css">
  <link rel="shortcut icon" href="../img/cityhall.jpg" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css2?family=Wix+Madefor+Display:wght@500&display=swap" rel="stylesheet">
  <script src="../script/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  
  <style>
    body {
      font-family: 'Wix Madefor Display', sans-serif;
    }
  </style>
</head>

<body>

  <div class="position-button">
    <br>
    <br>
    <br>
    <a href="admin_panel.php" style="text-decoration: none;color:black"><img src="../img/icons8-back-64.png" alt="" class="back-home"><i>Dashboard</i></a>
  </div>

  <div class="admin-style">
    <a onclick="printPage()" href="">Print</a>
    <br>
    <br>

    <nav>
      <div class="nav nav-tabs" id="nav-tab" role="tablist">
        <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Pending</button>
        <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Approved</button>
      </div>
    </nav>

    <div class="tab-content" id="nav-tabContent">
      <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
        <br>
        <table class="table table-bordered col-md-12">
          <thead>
            <tr>
              <th scope="col">Request ID</th>
              <th scope="col">ITEM</th>
              <th scope="col">PERSON REQUESTED</th>
              <th scope="col">QUANTITY</th>
              <th scope="col">DATE REQUESTED</th>
              <th scope="col">ROOM</th>
              <th scope="col">REASON</th>
              <th scope="col">STATUS</th>
              <th scope="col">ACTION</th>
            </tr>
          </thead>

          <?php
          $query = "SELECT * FROM request WHERE status = 'pending' ORDER BY request_id ASC";

          $result = mysqli_query($conn, $query);
          while ($row = mysqli_fetch_array($result)) {
          ?>
            <tbody>
              <tr>
                <th scope="row">
                  <?php echo $row['request_id']; ?>
                </th>
                <td>
                  <?php echo $row['item_need']; ?>
                </td>
                <td>
                  <?php echo $row['requested_by']; ?>
                </td>
                <td>
                  <?php echo $row['item_quantity']; ?>
                </td>
                <td>
                  <?php echo $row['date_requested']; ?>
                </td>
                <td>
                  <?php echo $row['req_room']; ?>
                </td>
                <td>
                  <?php echo $row['message']; ?>
                </td>
                <td>
                  <?php echo $row['status']; ?>
                </td>
                <td>
                  <form action="admin_approval.php" method="POST" style="flex-direction: row; display:flex">
                    <input type="hidden" name="request_id" value="<?php echo $row['request_id']; ?>" />

                    <input type="submit" name="approve" value="Approve" class="btn btn-success button-class-action"> <br>

                    <input type="submit" name="delete" value="Reject" class="btn btn-danger button-class-action">
                  </form>
                </td>
              </tr>
            </tbody>
          <?php } ?>
        </table>
      </div>

      <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
        <?php
        if (isset($_POST['approve'])) {
          $request_id = $_POST['request_id'];
          $select = "UPDATE request SET status = 'Approved' WHERE request_id = '$request_id' ";
          $resut = mysqli_query($conn, $select);
          echo '<script type = "text/javascript">';
          echo 'if (confirm("Request Accepted")) {';
          echo '  window.location.href = "admin_approval.php";';
          echo '}';
          echo '</script>';
        }

        if (isset($_POST['delete'])) {
          $request_id = $_POST['request_id'];
          $select = "DELETE FROM request WHERE request_id = '$request_id' ";
          $resut = mysqli_query($conn, $select);
          echo '<script type = "text/javascript">';
          echo 'alert("Requested Rejected ");';
          echo 'window.location.href = "admin_approval.php" ';
          echo '</script>';
        }
        ?>

        <br>
        <table class="table table-bordered col-md-12">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">ITEM</th>
              <th scope="col">PERSON REQUESTED</th>
              <th scope="col">QUANTITY</th>
              <th scope="col">DATE REQUESTED</th>
              <th scope="col">ROOM</th>
              <th scope="col">REASON</th>
              <th scope="col">STATUS</th>
              <th></th>
            </tr>
          </thead>

          <?php
          $query = "SELECT * FROM request WHERE status = 'Approved'";
          $result = mysqli_query($conn, $query);
          while ($row = mysqli_fetch_array($result)) { ?>
            <tbody>
              <tr>
                <th scope="row">
                  <?php echo $row['request_id']; ?>
                </th>
                <td>
                  <?php echo $row['item_need']; ?>
                </td>
                <td>
                  <?php echo $row['requested_by']; ?>
                </td>
                <td>
                  <?php echo $row['item_quantity']; ?>
                </td>
                <td>
                  <?php echo $row['date_requested']; ?>
                </td>
                <td>
                  <?php echo $row['req_room']; ?>
                </td>
                <td>
                  <?php echo $row['message']; ?>
                </td>
                <td style="color: green; font-weight:700">
                  <?php echo $row['status']; ?>
                </td>
                <td>
                  <button type="button" class="btn btn-info show-id" data-show-id="<?php echo $row['requested_by']; ?>" >VIEW</button>

                  <button type="button" class="btn btn-primary show-id-add" data-requested_by="<?php echo $row['requested_by']; ?>" data-item="<?php echo $row['item_need']; ?>">ADD</button>
                </td>
              </tr>
            </tbody>
          <?php } ?>
        </table>
      </div>
    </div>

  </div>

  <?php 
  include 'modal/view_request.php';
  include 'modal/req.php';  
  ?>

  <script>
    function printPage() {
      window.print();
    }

    $(document).on('click', '.show-id', function () {
        const reqId = $(this).data('show-id');

        console.log(reqId);
        $.ajax({
            url: 'db_view_records.php',
            type: 'post',
            data: {
                "getUserRequest": true,
                'reqId': reqId
            },
            success: function (response) {
                $('.modal-body').html(response);
                $('#request-view').modal('show');
            },
            error: function () {
                alert('Error: Unable to load request details');
            }
        });
    });

    $(document).on('click', '.show-id-add', function () {
        const requested_by = $(this).data('requested_by');
        const item = $(this).data('item');

        console.log(requested_by);
        $.ajax({
            url: 'db_view_records.php',
            type: 'post',
            data: {
                "getUser": true,
                'requested_by': requested_by,
                'item': item
            },
            success: function (response) {
                $('.modal-body').html(response);
                $('#request-add').modal('show');
            },
            error: function () {
                alert('Error: Unable to load request details');
            }
        });
    });


  </script>
</body>
</html>