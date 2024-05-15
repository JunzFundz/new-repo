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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <link rel="stylesheet" href="css-grids.css">
</head>
<body>
      <div class="container-II">
        <div class="childcon">

    <div class="accordion-item mod_acc">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
      <i class="fas fa-user"></i> 
      <span class="username-style"><?php echo $_SESSION['Username'];?></span>
      </button>
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
    <div class="new1">
        <li><a class="dropdown-item" href="../database/db_logout.php">Logout</a></li>
        <li><a class="dropdown-item" href="change_pass.php">Change Password</a></li>
    </div>
    </div>
  </div>
        <div class="menu-buttom">
        <li><a class="dropdown-item" href="item.php" >Add item</a></li>
        <li><a class="dropdown-item" href="adduser.php">Add users</a></li>
        <li><a class="dropdown-item" >Remove users</a></li>
        </div>
        </div>

        <div class="child">
     
        </div>
      </div>
<script src="../script/js/bootstrap.bundle.js"></script>
</body>
</html>