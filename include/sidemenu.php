<?php require_once "../database/function.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../style/css/bootstrap.css">
	<link rel="stylesheet" href="panel.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
	<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="../style/css/datatables.css">

	<title> Dashboard </title>

	<style>
		body {
			background: #BFD5E2;
		}
	</style>
</head>

<body>
	<div class="container">
		<div class="box">
			<h1 class="display-4 text-center title-1">Inventory & Supply Management for Computer System <br> Bais City</h1><br>

			<?php if (mysqli_num_rows($result)) { ?>
				<table class="table table-striped " id="myTable">
					<thead class="backgroun-inn">
						<tr>
							<th scope="col">Item</th>
							<th scope="col">Total available</th>
							<th scope="col">Total availed</th>
							<th scope="col">Action</th>
						</tr>
					</thead>
					<tbody>
						<?php while ($rows = mysqli_fetch_assoc($result)) { ?>

							<tr>
								<td>
									<?= $rows['itemscol']; ?>
								</td>
								<td>
									<?php

									$sql_availed = mysqli_query($conn, "SELECT COUNT(*) AS total_availed FROM item WHERE itemscol = '{$rows['itemscol']}' AND m_con = 'Available' ");
									$rows_availed = mysqli_fetch_assoc($sql_availed);
									echo $rows_availed['total_availed'];

									?>
								</td>
								<td>
									<?php

									$sql_availed = mysqli_query($conn, "SELECT COUNT(*) AS total_availed FROM item WHERE itemscol = '{$rows['itemscol']}' AND m_con = 'Availed' ");
									$rows_availed = mysqli_fetch_assoc($sql_availed);
									echo $rows_availed['total_availed'];

									?>
								</td>
								<td>
									<a class="btn" href="view.php?item=<?= $rows['itemscol'] ?>"><img src="../img/eye.ico" alt="View Item" class="icon-size"></a>

									<a class="btn" href="update_item.php?item=<?= $rows['itemscol'] ?>"><img src="../img/icons8-update-48.png" alt="" class="icon-size"></a>
								</td>
								<?php require_once('load_modals.php'); ?>
							</tr>

						<?php } ?>
					</tbody>
				</table>
			<?php } ?>

		</div>
	</div>

	<script src="../script/js/bootstrap.bundle.min.js"></script>
	<script src="../script/js/datatables.js"></script>
	<script>
		$(document).ready(function() {
			let table = new DataTable('#myTable');
		})
	</script>
</body>

</html>