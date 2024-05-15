<?php
session_start();

require_once '../database/db_conn.php';

?>

<!DOCTYPE html>
<html>

<head>
  <title> Submit Request </title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="panel.css">
  <link rel="shortcut icon" href="../img/cityhall.jpg" type="image/x-icon">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<style>
  body {
    height: 100vh;
  }
</style>

<body>

  <br><br>
  <a href="user_panel.php" style="text-decoration: none;color:black"><img src="../img/icons8-back-64.png" alt="" class="back-home"><i>Home</i></a>
  <center>
    <form method="post" action="">
      <div id="request" class="form-group text-left col-md-6 mb-4 request-form-width">
        <h2>USER REQUEST FORM</h2></br>
        <div class="form-group">
          <label for="requested_by">PERSON REQUESTED</label>
          <input class="form-control" type="text" name="requested_by" value="">
        </div>

        <div class="form-group">
          <label for="form-select">ITEM</label>
          <!-- <input class="form-control" type="text" name="item_n" value=""> -->
          <select name="item_n" class="form-select" aria-label="Default select example">
            <option selected>select item</option>
            <?php $sql = mysqli_query($conn, "SELECT DISTINCT itemscol FROM item");
            foreach ($sql as $row) {

              echo '<option value="' . $row['itemscol'] . '">' . $row['itemscol'] . '</option>';
            } ?>
          </select>
        </div>

        <div class="form-group">
          <label for="item_quantity">QUANTITY</label>
          <input type="number" class="form-control" id="item_quantity" name="item_quantity" required>
        </div>

        <div class="form-group">
          <label for="date_requested">DATE</label>
          <input type="date" class="form-control" id="date_requested" name="date_requested" required>
        </div>

        <label for="req_room">ROOM</label>
        <select class="form-select form-select-md mb-3" aria-label=".form-select-sm example" name="req_room">
          <option selected disabled>Select Room</option>
          <option value="Mayor Office">Office of the City Mayor</option>
          <option value="Administrator Office">City Administrator’s Office</option>
          <option value="HR">Human Resource Management & Development Office</option>
          <option value="Civil Security">Civil Security Office</option>
          <option value="CPICAD">City Population, Information and Community Affairs Division (CPICAD)</option>
          <option value="Permit Section">Permit Section Office</option>
          <option value="IT Office">Information & Communications Technology Office</option>
          <option value="Multimedia">Multimedia Office</option>
          <option value="Toursim">Tourism Office</option>
          <option value="CDRRM">City Disaster Risk Reduction Management Division</option>
          <option value="PIO">Public Information Office</option>
          <option value="SK">Office of the Sangguniang Panlungsod</option>
          <option value="City Planning">Office of the City Planning & Development Coordinator</option>
          <option value="Civil Registrar">Office of the City Civil Registrar</option>
          <option value="GSO">Office of the City General Services Officer</option>
          <option value="Budget Office">Office of the City Budget Officer</option>
          <option value="Accounting Office">Office of the City Accountant</option>
          <option value="Treasurer Office">Office of the City Treasurer</option>
          <option value="Bagsakan">Office of the Market Supervisor</option>
          <option value="Assessor Office">Office of the City Assessor</option>
          <option value="City Health">Office of the City Health Office</option>
          <option value="DSWD">Office of the City Social Welfare & Development Officer</option>
          <option value="CAO">Office of the City Agriculturist</option>
          <option value="City Veternary Office">Office of the City Veterinarian</option>
          <option value="City Engineering Office">Office of the City Engineer</option>
          <option value="Legal Office">Office of the City Legal Officer</option>
          <option value="ENRO">Office of the Environment & Natural Resources Officer</option>
          <option value="BAC">Office of the BAC Secretariat</option>
          <option value="DILG">Office of the City DILG Officer</option>
          <option value="traffic">Traffic Management Office</option>
        </select>

        <div class="form-outline  col-md-6 mb-4 text-area-form">
          <label for="message">REASON</label>
          <textarea name="message" id="message" class="col-md-12"></textarea>

        </div>

        <div class="pt-1 col-md-6 mb-2">
          <button class="btn btn-dark btn-lg btn-success-34" type="submit" name="submit">Submit</button>
        </div>
    </form>
  </center>
</body>

</html>

<?php

if (isset($_POST['submit'])) {

  $requested_by = $_POST['requested_by'];
  $item_n = $_POST['item_n'];
  $item_quantity = $_POST['item_quantity'];
  $date_requested = $_POST['date_requested'];
  $req_room = $_POST['req_room'];
  $message = $_POST['message'];

  $sub = mysqli_query($conn, "INSERT INTO request ( item_need ,requested_by,date_requested 	,req_room ,	item_quantity,	message 	,status) VALUES ('$item_n', '$requested_by', '$date_requested', '$req_room','$item_quantity', '$message', 'Pending')");

  if ($sub > 0) {
    echo '<script>
            var result = confirm("Your request is under process! Would you like to request again?");
            if (result) {
              window.location.href = "user_panel.php";
            } else {
              window.location.href = "user_panel.php";
            }
          </script>';
  } else {
    echo "Something went wrong!";
  }
}
?>