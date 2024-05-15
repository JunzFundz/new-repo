
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <link rel="stylesheet" href="style/css/bootstrap.css">
    <link rel="stylesheet" href="/style/css/style.css">
    <title>Signin Template · Bootstrap v5.0</title>

    <style>
      body {
	margin: 0;
	padding: 0;
	font-family: sans-serif;
	background: #34495e;
}
.login-box {
	width: 280px;
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%, -50%);
	color: white;
}
.login-box h2 {
	margin: 0 0 20px;
	padding: 0;
	text-align: center;
	font-size: 22px;
}
.login-box form {
	padding: 0 20px;
	position: relative;
}
.login-box form input {
	width: 100%;
	margin-bottom: 20px;
}
.login-box form input[type="text"],
.login-box form input[type="password"] {
	border: none;
	border-bottom: 1px solid white;
	background: transparent;
	outline: none;
	height: 40px;
	color: white;
	font-size: 16px;
}
.login-box form input[type="submit"] {
	border: none;
	outline: none;
	height: 40px;
	color: white;
	font-size: 16px;
	background: #1c8adb;
	cursor: pointer;
	border-radius: 20px;
}
.login-box form a {
	position: relative;
	display: inline-block;
	margin-top: 40px;
}
.login-box form a span {
	position: absolute;
	height: 2px;
	width: 0%;
	background: #1c8adb;
	left: 0;
	bottom: -2px;
	transition: 0.5s;
}
.login-box form a span:nth-child(1) {
	left: 0;
}
.login-box form a span:nth-child(2),
.login-box form a span:nth-child(4) {
	top: 0;
	width: 100%;
}
.login-box form a span:nth-child(3) {
	right: 0;
}
.login-box form a:hover span {
	width: 100%;
}

    </style>

    
    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
  <div class="login-box">
		<h2>Subject Registration</h2>
		<form method="post" action="signupro.php">
			<div class="user-box">
      <label>Subject ID</label>
				<input type="text" name="id" required/>
				
			</div><div class="user-box">
      <label>Subject Code</label>
				<input type="text" name="sub_code" required/>
				
			</div>
			<div class="user-box">
      <label>Subject Description</label>
				<input type="text" name="sub_desc" required/>
				
			</div>
				<input type="submit" value="enter_sub" name="add_sub">
		</form>
	</div>

 
  </body>
</html>