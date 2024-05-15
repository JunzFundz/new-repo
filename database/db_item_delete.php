<?php

if(isset($_GET['item_id'])){
	include "db_conn.php";
  	function validate($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = stripslashes($data);
		return $data; 
	}

	$item_id = validate($_GET['item_id']);

	$sql = "DELETE FROM item
			WHERE item_id=$item_id";
	$result = mysqli_query($conn, $sql);
		
		if (mysqli_query($conn,$sql)) {
		echo '<script type = "text/javascript">';
        echo 'alert("Successfully deleted");';
        echo 'window.location.href = "../include/admin_panel.php" ';
        echo '</script>';
		}else {
			header("Location: ../include/admin_panel.php?error=unknown error occurred&$user_data");

		}

}else {
	header("Location: ../include/admin_panel.php");
}