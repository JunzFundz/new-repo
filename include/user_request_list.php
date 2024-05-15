<?php
session_start();
include '../database/db_conn.php';

// Query to count the number of items
$sql = "SELECT COUNT(*) AS totalItems FROM request WHERE status='pending'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$totalItems = $row['totalItems'];

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>


<meta name="viewport" message="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../style/css/bootstrap.min.css">
<link rel="stylesheet" href="panel.css">
<link rel="shortcut icon" href="../img/cityhall.jpg" type="image/x-icon">
<link rel="stylesheet" href="css-grids.css">
<link href="https://fonts.googleapis.com/css2?family=Wix+Madefor+Display:wght@500&display=swap" rel="stylesheet">
<script src="../script/js/bootstrap.min.js"></script>
<style>
  body{
    font-family: 'Wix Madefor Display', sans-serif;
  }

</style>
</head>
<body>


<a href="user_panel.php" style="text-decoration: none;color:black"><img src="../img/icons8-back-64.png" alt=""
        class="back-home"><i>Home</i></a>

    <div class="child">
<h1 class="text-center  text-white bg-dark col-md-12">PENDING LIST</h1>

<table class="table table-bordered col-md-12">
  <thead>
    <tr>
      <th scope="col">ID</th>
	    <th scope="col">ITEM</th>
	    <th scope="col">QUANTITY</th>
      <th scope="col">DATE REQUESTED</th>
      <th scope="col">ROOM</th>
	    <th scope="col">REASON</th>
	    <th scope="col">STATUS</th>
    </tr>
  </thead>

<?php 

$query = "SELECT * FROM request WHERE status = 'Pending' ORDER BY request_id ASC";
$result = mysqli_query($conn,$query);
while($row = mysqli_fetch_array($result))  { ?>


  <tbody>
    <tr>
      <th scope="row"><?php echo $row['request_id']; ?></th>
      <td><?php echo $row['item_need']; ?></td>
      <td><?php echo $row['item_quantity']; ?></td>
      <td><?php echo $row['date_requested']; ?></td>
      <td><?php echo $row['req_room']; ?></td>
      <td><?php echo $row['message']; ?></td>
      <td><?php echo $row['status']; ?></td>

    </tr>
   
  </tbody>
  <?php } ?>
</table>




 
&nbsp &nbsp   &nbsp &nbsp   &nbsp &nbsp   &nbsp &nbsp   &nbsp &nbsp   &nbsp &nbsp  &nbsp 


<h1 class="text-center text-white bg-success col-md-12">APPROVED LIST</h1>

<!-- Add the delete button -->


<table class="table table-bordered col-md-12">
  <thead>
    <tr>
    <th scope="col">ID</th>
	    <th scope="col">ITEM</th>
	    <th scope="col">QUANTITY</th>
      <th scope="col">DATE</th>
      <th scope="col">ROOM</th>
	    <th scope="col">REASON</th>
	    <th scope="col">STATUS</th>
    </tr>
  </thead>

  <?php
  $query = "SELECT * FROM request WHERE status = 'Approved'";
  $result = mysqli_query($conn, $query);
  while ($row = mysqli_fetch_array($result)) { ?>

    <tbody>
      <tr>
        <th scope="row"><?php echo $row['request_id']; ?></th>
        <td><?php echo $row['item_need']; ?></td>
      <td><?php echo $row['item_quantity']; ?></td>
      <td><?php echo $row['date_requested']; ?></td>
      <td><?php echo $row['req_room']; ?></td>
      <td><?php echo $row['message']; ?></td>
      <td><?php echo $row['status']; ?></td>
      </tr>
    </tbody>

  <?php } ?>

</table>
  </br>
  </br>
  </br>

    </div>
</div>
<?php require_once ('load_modals.php'); ?>
</body>
</html>