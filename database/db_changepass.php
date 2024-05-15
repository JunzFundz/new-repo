<?php
    require_once 'db_conn.php'
?>

<?php
session_start();
  if (isset($_POST['submit'])) {
    $current_password = $_POST['current_password'];
    $new_password = $_POST['new_password'];
    $Username = $_SESSION['Username'];

    $sql = "SELECT * FROM logged WHERE Username='$Username' AND Password='$current_password'";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
      $sql = "UPDATE logged SET Password='$new_password' WHERE Username='$Username'";

      if (mysqli_query($conn, $sql)) {
        echo '<script type = "text/javascript">';
        echo 'alert("Password Changed Succesfully");';
        echo 'window.location.href = "../include/admin_panel.php" ';
        echo '</script>';
      } else {
        echo "Error: " . mysqli_error($conn);
      }
    } else {
      echo '<script type = "text/javascript">';
        echo 'alert("Invalid Password");';
        echo 'window.location.href = "../include/modal/change_pass.php" ';
        echo '</script>';
    }
  }
?>