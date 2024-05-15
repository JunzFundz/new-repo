<?php

include 'db_conn.php';

if (isset($_POST['archive'])) {

  $archiveQuery = "INSERT INTO archived_history SELECT * FROM request WHERE status = 'approved'";
  $archiveResult = mysqli_query($conn, $archiveQuery);

  if ($archiveResult) {

    $deleteQuery = "DELETE FROM request WHERE status = 'approved'";
    $deleteResult = mysqli_query($conn, $deleteQuery);

    if ($deleteResult) {
        echo '<script type = "text/javascript">';
        echo 'alert("Rquests archived successfully!");';
        echo 'window.location.href = "../include/admin_approval.php" ';
        echo '</script>';
    } else {
      echo "Failed to delete history. Please try again.";
    }
  } else {
    echo "Failed to archive history. Please try again.";
  }
}
?>
