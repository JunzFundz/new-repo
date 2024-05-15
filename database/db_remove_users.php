<?php

if(isset($_GET['emp_id'])){
	include "db_conn.php";
	function valemp_idate($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data; 
	}
	$emp_id = valemp_idate($_GET['emp_id']);

	$sql = "DELETE FROM logged
			WHERE emp_id=$emp_id";

	$result = mysqli_query($conn, $sql);
		
		if ($result) {
		   header("Location:  ../include/users_list.php?success=Successfully deleted");
		}else {
			header("Location:  ../include/users_list.php?error=unknown error occurred&$user_data");
		}

}else {
	header("Location:  ../include/users_list.php");
}