<?php

if (isset($_POST['add'])) {
	include "db_conn.php";

	$itemscol = $_POST['itemscol'];
	$serial = $_POST['serial'];
	$item_condition = $_POST['item_condition'];

	for ($i = 0; $i < count($itemscol); $i++) {
		$item = strtoupper($itemscol[$i]);
		$ser = mysqli_real_escape_string($conn, $serial[$i]);
		$cond = mysqli_real_escape_string($conn, $item_condition[$i]);

		$sql = "INSERT INTO item (itemscol, serial, item_condition, m_con, date_added) VALUES ('$item', '$ser', '$cond', 'Available', NOW())";

		if (mysqli_query($conn, $sql)) {
			echo '<script type = "text/javascript">';
			echo 'alert("Item added successfully");';
			echo 'window.location.href = "../include/admin_panel.php" ';
			echo '</script>';
		} else {
			echo "Error: " . mysqli_error($conn);
		}
	}
}

?>

