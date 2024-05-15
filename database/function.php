<?php

require_once "db_conn.php";

$sql = "SELECT DISTINCT itemscol FROM item ";
$result = mysqli_query($conn, $sql);

