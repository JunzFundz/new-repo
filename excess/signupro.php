<?php
    if(isset($_POST['add_sub'])){
        $conn = mysqli_connect ('localhost', 'root', '', 'school') or die('Unable to connect');
        $id = $_POST['id'];
      $sub_code = $_POST['sub_code'];
      $sub_desc = $_POST['sub_desc'];

      $add_subject = "INSERT INTO subject_info (id,sub_code,sub_desc) VALUES ('$id','$sub_code','$sub_desc')"; 

      if(mysqli_query($conn,$add_subject)){
        echo "Subject Added Successfully!";
      }


    }
        ?>