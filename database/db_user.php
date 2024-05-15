<?php
session_start();
  if (isset($_POST['submit'])) {
    include "db_conn.php";
	function validate($data){
		$data = trim($data);
		$data = stripslashes($data);
    $data = stripslashes($data);
		return $data; 
	  }

    $Username = validate($_POST['Username']);
	  $Password = validate($_POST['Password']);

    $sql = "INSERT INTO logged (Username, Password) VALUES ('$Username', '$Password')";

    if (mysqli_query($conn, $sql)) {
      echo '<script type = "text/javascript">';
      echo 'alert("New User has been added!");';
      echo 'window.location.href = "../include/admin_panel.php" ';
      echo '</script>';
    }else{
      echo "Error: " . mysqli_error($conn);
    }
  }
?>


