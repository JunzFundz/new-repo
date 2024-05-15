<?php
  session_start();
  $conn = mysqli_connect ('localhost', 'root', '', 'db_inventory') or die('Unable to connect');
?>
<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>Login Form | CodingLab</title> -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
  </head>
  <body>
    <div class="container">
      <div class="wrapper">
        <div class="title"><span>Login Form</span></div>
        <form method="post" action="index.php">
          <div class="row">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Username" name="Username" required>
          </div>
          <div class="row">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Password" name="Password" required>
          </div>
          <div class="row button">
            <input type="submit" value="Login" name="login">
          </div>
        </form>
      </div>
    </div>
<?php
    if (isset($_POST['login'])) {
      $Username = $_POST['Username'];
      $Password = $_POST['Password'];
    
      $sql = "SELECT * FROM logged WHERE Username = '$Username' AND Password = '$Password'";
    
      $result = mysqli_query($conn, $sql);
    
      if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
    
        if ($row['id'] == 1) {
        $_SESSION['Username'] = $Username;
        header('Location: include/login.php');
        } else {
        $_SESSION['Username'] = $Username;
        header('Location: include/user.php');
        }
      } else {
        echo '<script type = "text/javascript">';
        echo 'alert("Invalid Username or Password!");';
        echo 'window.location.href = "index.php" ';
        echo '</script>';
      }
      }
?>
  </body>
</html>
 