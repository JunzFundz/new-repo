
<?php
require_once 'db_conn.php';

if (isset($_POST['submitdata'])) {
    $serial = $_POST['serial'];
    $request = $_POST['request'];
    $item = $_POST['item'];

    $sql = mysqli_query($conn, "INSERT INTO tbl_hitems (user, item , serial, h_status) VALUES ('$request', '$item', '$serial', '1')");

    if ($sql > 0) {
        $sql = mysqli_query($conn, "UPDATE item SET m_con = 'Availed' WHERE itemscol = '$item' AND serial = '$serial'");
        echo "<script type='text/javascript'>
        alert('Success');
        window.location.href = '../include/admin_approval.php';
        </script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

?>
