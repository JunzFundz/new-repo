<?php

include "db_conn.php";

$sql = "SELECT * FROM item WHERE room = 'pc_num' ORDER BY room";
$result = mysqli_query($conn, $sql);
