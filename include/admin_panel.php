<?php
session_start();
include '../database/db_conn.php';

$sql = "SELECT COUNT(*) AS totalItems FROM request WHERE status='pending'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$totalItems = $row['totalItems'];

mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/css/bootstrap.css">
    <link rel="stylesheet" href="css-grids-admin.css">
    <link rel="shortcut icon" href="../img/cityhall.jpg" type="image/x-icon">
</head>

<body>
    <div class="container-II">
        <div class="childcon">
            <div class="accordion-item ">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        <i class="fas fa-user"></i>
                        <span class="username-style">
                            <?php echo $_SESSION['Username']; ?>
                        </span>
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                    data-bs-parent="#accordionExample">
                    <div class="new1">
                        <li><a class="dropdown-item" href="../database/db_logout.php">Logout</a></li>
                        <li><a class="dropdown-item" href="../modal/change_pass.php" data-bs-toggle="modal"
                                data-bs-target="#modal-change-pass">Change Password</a></li>
                    </div>
                </div>
            </div>
            <div class="menu-buttom">
                <li><a class="dropdown-item" href="modal/add_item.php" data-bs-toggle="modal"
                        data-bs-target="#add-item">Add item</a></li>
                <li><a class="dropdown-item" href="modal/add_user.php" data-bs-toggle="modal"
                        data-bs-target="#modal-add-user">Add users</a></li>
                <li><a class="dropdown-item" href="users_list.php"> User Lists</a></li>
                <li><a class="position-relative dropdown-item" href="admin_approval.php">Requests
                        <span class="position-absolute  badge-count translate-middle badge rounded-pill bg-danger">
                            <?php echo $totalItems; ?>
                            <span class="visually-hidden">unread messages</span>
                        </span>
                    </a>
                </li>
            </div>
        </div>
        <?php require_once('load_modals.php'); ?>
        <div class="child">
            <?php include "sidemenu.php"; ?>
        </div>
    </div>
    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>