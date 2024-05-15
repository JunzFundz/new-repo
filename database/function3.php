<?php



$sql = "SELECT * FROM item ORDER BY pc_num AND room";
$result = mysqli_query($conn, $sql);
