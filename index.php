<?php
session_start();
require_once 'database/db_conn.php'
  ?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.84.0">
  <link rel="stylesheet" href="style/css/bootstrap.css">
  <link rel="stylesheet" href="excess/style.css">
  <link rel="stylesheet" href="background.css">
  <link rel="shortcut icon" href="img/cityhall.jpg">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
  <title>
      NORSU | ISMS
    </title>

</head>

<body>
  <!-- animated background -->
  <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
		xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="100%" height="100%" viewBox="0 0 1600 900" preserveAspectRatio="xMidYMax slice">
		<defs>
			<linearGradient id="bg">
				<stop offset="0%" style="stop-color:rgba(130, 158, 249, 0.06)"></stop>
				<stop offset="50%" style="stop-color:rgba(76, 190, 255, 0.6)"></stop>
				<stop offset="100%" style="stop-color:#345B73"></stop>
			</linearGradient>
			<path id="wave" fill="url(#bg)" d="M-363.852,502.589c0,0,236.988-41.997,505.475,0
	s371.981,38.998,575.971,0s293.985-39.278,505.474,5.859s493.475,48.368,716.963-4.995v560.106H-363.852V502.589z" />
		</defs>
		<g>
			<use xlink:href='#wave' opacity=".3">
				<animateTransform
          attributeName="transform"
          attributeType="XML"
          type="translate"
          dur="10s"
          calcMode="spline"
          values="270 230; -334 180; 270 230"
          keyTimes="0; .5; 1"
          keySplines="0.42, 0, 0.58, 1.0;0.42, 0, 0.58, 1.0"
          repeatCount="indefinite" />
			</use>
			          type="translate"
          dur="8s"
          calcMode="spline"
          values="-270 230;243 220;-270 230"
          keyTimes="0; .6; 1"
          keySplines="0.42, 0, 0.58, 1.0;0.42, 0, 0.58, 1.0"
          repeatCount="indefinite" />
			</use>
			<use xlink:href='#wave' opacty=".9">
				<animateTransform
          attributeName="transform"
          attributeType="XML"
          type="translate"
          dur="6s"
          calcMode="spline"
          values="0 230;-140 200;0 230"
          keyTimes="0; .4; 1"
          keySplines="0.42, 0, 0.58, 1.0;0.42, 0, 0.58, 1.0"
          repeatCount="indefinite" />
     </use>
		</g>
	</svg>
			
  <!-- animated background-->
  <div>
    <div class="container">
      <div class="wrapper">
      <div class="title"><span>Log in</span></div>
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

        if ($row['emp_id'] == 1) {
          $_SESSION['Username'] = $Username;
          $_SESSION['id'] = $row['emp_id'];
          header('Location: include/admin_panel.php');
        } else {
          $_SESSION['Username'] = $Username;
          $_SESSION['id'] = $row['emp_id'];
          header('Location: include/user_panel.php');
        }
      } else {
        echo '<script type = "text/javascript">';
        echo 'alert("Invalid Username or Password!");';
        echo 'window.location.href = "index.php" ';
        echo '</script>';
      }
    }
    ?>

    <script src="script/js/bootstrap.bundle.js"></script>

</body>

</html>