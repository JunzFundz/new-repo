<?php

if (isset($_GET['item'])) {
  require_once "../database/db_conn.php";

  $itemscol = $_GET['item'];

  $sql = mysqli_query($conn, "SELECT * FROM item WHERE itemscol = '$itemscol'");


?>
  <!DOCTYPE html>
  <html>

  <head>

    <title>Update Item</title>
    <link rel="stylesheet" href="../excess/style.css">
    <link rel="stylesheet" href="../style/css/bootstrap.css">
    <link rel="shortcut icon" href="../img/cityhall.jpg" type="image/x-icon">
    <link rel="stylesheet" href="css-grids-admin.css">
  </head>
  <style>
    form {
      margin: -10% 30% 30% 30%;
    }

    .modal-new-width {
      margin-top: 60px;
      margin-bottom: -50px;
      width: 40%;
    }

    .newcorsur:hover {
      cursor: help;
    }
  </style>

  <body>

    <div class="container modal-new-width">
      <form class="row g-3">

        <h4 class="display-4 text-center">View Items</h4>

        <?php if (isset($_GET['error'])) { ?>
          <div class="alert alert-danger" role="alert">
            <?php echo $_GET['error']; ?>
          </div>
        <?php } ?>

        <?php foreach ($sql as $row) { ?>

          <div style="display: flex; flex-direction:row; gap: 1rem">
            <div class="col-md-3">
              <label for="itemscol" class="form-label newcorsur"><strong>Item</strong></label>
              <input type="text" type="text" class="form-control" id="itemscol" name="itemscol" required disabled value="<?= $row['itemscol'] ?>">
            </div>

            <div class="col-md-3">
              <label for="serial" class="form-label"><strong>Serial </strong></label>
              <input type="text" class="form-control" id="serial" name="serial" required disabled value="<?= $row['serial'] ?>">
            </div>

            <div class="col-md-3" hidden>
              <label for="pc_num" class="form-label newcorsur"> <strong>Quantity</strong></label>
              <input type="text" class="form-control" id="pc_num" name="pc_num" required disabled value="<?= $row['pc_num'] ?>">
            </div>

            <div class="col-md-3">
              <label for="item_condition" class="form-label newcorsur"><strong>Condition</strong></label>
              <select disabled class="form-select form-select-md mb-3" aria-label=".form-select-lg example" name="item_condition">
                <option disabled value="working" <?php if ($row['item_condition'] === 'working') echo 'selected'; ?>>Working</option>
                <option disabled value="defect" <?php if ($row['item_condition'] === 'defect') echo 'selected'; ?>>Defective</option>
              </select>
            </div>

            <div class="col-md-3">
              <label for="date_added" class="form-label newcorsur"> <strong>Date added</strong></label>
              <input type="text" class="form-control" id="date_added" name="date_added" required disabled value="<?= $row['date_added'] ?>">
            </div>
          </div>

      <?php }
      } ?>

      <div class="col-md-6" hidden>
        <label for="room" class="form-label newcorsur"> <strong>Office</strong></label>
        <select class="form-select form-select-md mb-3" aria-label=".form-select-lg example" name="room" disabled value="<?= $row['room'] ?>">

          <option disabled value="Laboratory 1" <?php if ($row['room'] === 'Select') echo 'selected'; ?>>Select</option>
          <option disabled value="Mayor Office" <?php if ($row['room'] === 'Mayor Office') echo 'selected'; ?>>Office of the City Mayor</option>
          <option disabled value="Administrator Office" <?php if ($row['room'] === 'Administrator Office') echo 'selected'; ?>>City Administrator’s Office</option>
          <option disabled value="HR" <?php if ($row['room'] === 'Laborato') echo 'HR'; ?>>Human Resource Management & Development Office</option>
          <option disabled value="Civil Security" <?php if ($row['room'] === 'Civil Security') echo 'selected'; ?>>Civil Security Office</option>
          <option disabled value="CPICAD" <?php if ($row['room'] === 'CPICAD') echo 'selected'; ?>>City Population, Information and Community Affairs Division (CPICAD)</option>
          <option disabled value="Permit Section" <?php if ($row['room'] === 'Permit Section') echo 'selected'; ?>>Permit Section Office</option>
          <option disabled value="IT Office" <?php if ($row['room'] === 'IT Office') echo 'selected'; ?>>Information & Communications Technology Office</option>
          <option disabled value="Multimedia" <?php if ($row['room'] === 'Multimedia') echo 'selected'; ?>>Multimedia Office</option>
          <option disabled value="Toursim" <?php if ($row['room'] === 'Toursim') echo 'selected'; ?>>Tourism Office</option>
          <option disabled value="CDRRM" <?php if ($row['room'] === 'Toursim') echo 'selected'; ?>>City Disaster Risk Reduction Management Division</option>
          <option disabled value="PIO" <?php if ($row['room'] === 'Toursim') echo 'selected'; ?>>Public Information Office</option>
          <option disabled value="SK" <?php if ($row['room'] === 'Toursim') echo 'selected'; ?>>Office of the Sangguniang Panlungsod</option>
          <option disabled value="City Planning" <?php if ($row['room'] === 'Toursim') echo 'selected'; ?>>Office of the City Planning & Development Coordinator</option>
          <option disabled value="Civil Registrar" <?php if ($row['room'] === 'Toursim') echo 'selected'; ?>>Office of the City Civil Registrar</option>
          <option disabled value="GSO" <?php if ($row['room'] === 'Toursim') echo 'selected'; ?>>Office of the City General Services Officer</option>
          <option disabled value="Budget Office" <?php if ($row['room'] === 'Toursim') echo 'selected'; ?>>Office of the City Budget Officer</option>
          <option disabled value="Accounting Office" <?php if ($row['room'] === 'Toursim') echo 'selected'; ?>>Office of the City Accountant</option>
          <option disabled value="Treasurer Office" <?php if ($row['room'] === 'Toursim') echo 'selected'; ?>>Office of the City Treasurer</option>
          <option disabled value="Bagsakan" <?php if ($row['room'] === 'Toursim') echo 'selected'; ?>>Office of the Market Supervisor</option>
          <option disabled value="Assessor Office" <?php if ($row['room'] === 'Toursim') echo 'selected'; ?>>Office of the City Assessor</option>
          <option disabled value="City Health" <?php if ($row['room'] === 'Toursim') echo 'selected'; ?>>Office of the City Health Office</option>
          <option disabled value="DSWD" <?php if ($row['room'] === 'Toursim') echo 'selected'; ?>>Office of the City Social Welfare & Development Officer</option>
          <option disabled value="CAO" <?php if ($row['room'] === 'Toursim') echo 'selected'; ?>>Office of the City Agriculturist</option>
          <option disabled value="City Veternary Office" <?php if ($row['room'] === 'Toursim') echo 'selected'; ?>>Office of the City Veterinarian</option>
          <option disabled value="City Engineering Office" <?php if ($row['City Engineering Office'] === 'Toursim') echo 'selected'; ?>>Office of the City Engineer</option>
          <option disabled value="Legal Office" <?php if ($row['room'] === 'Legal Office') echo 'selected'; ?>>Office of the City Legal Officer</option>
          <option disabled value="ENRO" <?php if ($row['room'] === 'ENRO') echo 'selected'; ?>>Office of the Environment & Natural Resources Officer</option>
          <option disabled value="BAC" <?php if ($row['room'] === 'BAC') echo 'selected'; ?>>Office of the BAC Secretariat</option>
          <option disabled value="DILG" <?php if ($row['room'] === 'DILG') echo 'selected'; ?>>Office of the City DILG Officer</option>
          <option disabled value="TMO" <?php if ($row['room'] === 'TMO') echo 'selected'; ?>>Traffic Management Office</option>
        </select>
      </div>

      <a type="button" href="admin_panel.php" class="btn btn-primary">
        Back to home
      </a>

    </div>
    </form>
    </div>
  </body>

  </html>