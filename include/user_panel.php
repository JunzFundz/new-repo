<?php
session_start();
require_once '../database/db_conn.php'
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../style/css/bootstrap.css">
  <link rel="stylesheet" href="css-grids-user.css">
  <link rel="stylesheet" href="css-grids-user.css">
  <link rel="shortcut icon" href="../img/cityhall.jpg">
  <title>
    User Dashboard
  </title>
</head>

<body>
  <div class="container-II">
    <div class="childcon">
      <div class="accordion" id="accordionExample">
        <div class="accordion-item mod_acc">
          <h2 class="accordion-header" id="headingThree">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
              <i class="fas fa-user"></i>
              <span class="username-style">
                <?php echo $_SESSION['Username']; ?>
                <?php  $user = $_SESSION['id']; ?>
              </span>
            </button>
          </h2>
          <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <div class="new1">
                <li><a class="dropdown-item" href="../database/db_logout.php">Logout</a></li>
                <li><a class="dropdown-item" href="../modal/change_pass.php" data-bs-toggle="modal" data-bs-target="#modal-change-pass">Change Password</a></li>
              </div>
            </div>
          </div>
        </div>
        <div class="menu-buttom">
          <li><a class="dropdown-item" href="user_request.php">Send Request</a></li>
          <li><a class="dropdown-item" href="user_request_list.php">Request</a></li>
        </div>
      </div>
    </div>
    <?php require_once('load_modals.php'); ?>
    <div class="child">
      <?php
      include 'user_sidemenu.php'
      ?>
    </div>
  </div>
  <script src="../script/js/bootstrap.js"></script>
</body>

</html>