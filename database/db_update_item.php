<?php

if (isset($_POST['update'])) {
    include "db_conn.php";

    $itemscol = $_POST['itemscol'];
    $item_id = $_POST['item_id'];
    $serial = $_POST['serial'];
    $item_condition = $_POST['item_condition'];
    $date = $_POST['date'];

    $sql = "UPDATE item SET  itemscol = '$itemscol', serial = '$serial', item_condition = '$item_condition', date_added = '$date'
        WHERE item_id = $item_id";

    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "<script type='text/javascript'>
            alert('Success');
            window.location.href = '../include/update_item.php?item={$itemscol}';
            </script>";
    } else {
        header("Location:../interface/update_item.php?item_id={$item_id}&error=unknown error occurred");
    }
} else {
    include "db_conn.php";

    $sql = "SELECT * FROM item";
    $result = mysqli_query($conn, $sql);
}
