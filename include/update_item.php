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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  </head>
  <style>
    label {
      color: black;
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

  <body style="background-color: white;">

    <div class="container modal-new-width">
      <h4 style="color: black;" class="display-4 text-center">Edit Items</h4>

      <?php if (isset($_GET['error'])) { ?>
        <div class="alert alert-danger" role="alert">
          <?php echo $_GET['error']; ?>
        </div>
      <?php } ?>

      <br><br>

      <?php foreach ($sql as $row) { ?>
        <form class="row g-3" action="../database/db_update_item.php" method="post">

          <input type="hidden" name="item_id" value="<?= $row['item_id'] ?>">

          <div style="display: flex; flex-direction:row; gap: 1rem">
            <div class="">
              <label for="itemscol" class="form-label newcorsur">Item</label>
              <input type="text" type="text" class="form-control" id="itemscol" name="itemscol" required value="<?= $row['itemscol'] ?>">
            </div>

            <div class="">
              <label for="serial" class="form-label">Serial </label>
              <input type="text" class="form-control" id="serial" name="serial" required value="<?= $row['serial'] ?>">
            </div>

            <div class="">
              <label for="item_condition" class="form-label newcorsur">Condition</label>
              <select class="form-select form-select-md" aria-label=".form-select-lg example" name="item_condition">
                <option value="working" <?php if ($row['item_condition'] === 'working') echo 'selected'; ?>>Working</option>
                <option value="defect" <?php if ($row['item_condition'] === 'defect') echo 'selected'; ?>>Defective</option>
              </select>
            </div>

            <div class="">
              <label for="date" class="form-label newcorsur"> Date added</label>
              <input type="date" class="form-control" id="date" name="date" required value="<?= $row['date_added'] ?>">
            </div>

            <div class="">
              <button type="submit" name="update" class="btn" style="color: green; margin-top: 25px; font-size: 20px"><i class="bi bi-check-lg"></i></button>
            </div>
          </div>

        </form>
    <?php }
    } ?>

    <br>
    <a type="button" href="admin_panel.php" class="btn btn-primary">
      Back to home
    </a>

    </div>
    </div>
  </body>

  </html>