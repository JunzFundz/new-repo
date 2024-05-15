<?php include "../database/db_conn.php";
$sql = "SELECT * FROM logged";
$result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../style/css/bootstrap.css">
	<link rel="stylesheet" href="panel.css">
	<!-- <link rel="stylesheet" href="css-grids-admin.css"> -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
	<link rel="shortcut icon" href="../img/cityhall.jpg" type="image/x-icon">

	<title>NORSU ISMS | User Lists</title>

	<style>
		body {
			background: #BFD5E2;
		}

		thead {
			color: white;
			background-color: #345b73;
		}

		table,
		tr,
		td {
			text-align: center;
			line-height: 50px;
			border-style: ridge;
		}
	</style>

</head>

<div class="position-button">
    <br>
    <br>
    <br>
    <a href="admin_panel.php" style="text-decoration: none;color:black"><img src="../img/icons8-back-64.png" alt=""
        class="back-home"><i>Dashboard</i></a>
  </div>

<body class="">

	<div class="container">
		<div class="box">
			<h1 class="display-4 text-center title-1">Inventory & Supply Management for Computer System <br> NORSU - Bais
				Campus
			</h1><br>

			

			<?php if (isset($_GET['success'])) { ?>
				<div class="alert alert-success" role="alert">
					<?php echo $_GET['success']; ?>
				</div>
			<?php } ?>
			<?php if (mysqli_num_rows($result)) { ?>
				<table class="table table-striped">
					<thead class="background-inn">
						<tr>
							<th scope="col">User ID</th>
							<th scope="col">Username</th>
							<!-- <th scope="col">Action</th> -->
						</tr>
					</thead>
					<tbody>
						<?php

						while ($rows = mysqli_fetch_assoc($result)) { ?>
							<tr>
								<td>
									<?= $rows['emp_id']; ?>
								</td>
								<td>
									<i><?= $rows['Username']; ?></i>
								</td>
								<!-- <td><a class="btn btn-success btn-newcolor "
										href="../database/db_remove_users.php?emp_id=<?= $rows['emp_id'] ?>">Remove</a>
								</td> -->
							</tr>
						<?php } ?>
					</tbody>
				</table>
			<?php } ?>
		</div>
	</div>
	<script src="../script/js/bootstrap.bundle.min.js"></script>
</body>

</html>