<?php
require_once '../database/db_conn.php'
	?>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Wix+Madefor+Display:wght@500&display=swap" rel="stylesheet">
<link rel="stylesheet" href="../panel.css">
<style>
	.modal {
		background: rgba(255, 255, 255, 0.25);
		-webkit-backdrop-filter: blur(4px);
		backdrop-filter: blur(4px);
		border: 1px solid rgba(255, 255, 255, 0.125);
	}

	.modal-content {
		border-radius: 1 0px !important;
		color: white;
		font-family: 'Wix Madefor Display', sans-serif;
		background-color: #345B73 !important;
		background: rgba(255, 255, 255, 0.25);
		-webkit-backdrop-filter: blur(4px);
		backdrop-filter: blur(4px);
		border: 1px solid rgba(255, 255, 255, 0.125);
	}
</style>

<div class="modal fade" id="add-item" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h1 class="modal-title fs-5 text-center" id="exampleModalLabel">Add Item</h1>

			</div>
			<div class="modal-body">
				<form action="../database/db_item.php" method="post">

				<div class="col-md-6">
    <label for="fname" class="form-label">First name</label>
    <input type="text" 
           class="form-control" 
           id="inputEmail4" 
           name="fname" required 
           value="<?php if (isset($_GET['fname']))
	    	   					   echo($_GET['fname']); ?>">
  </div>

  <div class="col-md-6">
    <label for="mi" class="form-label">Middle Initial</label>
    <input type="text" 
           class="form-control" 
           id="inputEmail4" 
           name="mi" required 
           value="<?php if (isset($_GET['mi']))
	    	   				  	 echo($_GET['mi']); ?>">
  </div>


					<?php if (isset($_GET['error'])) { ?>
						<div class="alert alert-danger" role="alert">
							<?php echo $_GET['error']; ?>
						</div>
					<?php } ?>

					<div class="form-group">
						<label for="pc_num">PC Number</label>
						<input type="text" class="form-control" id="pc_num" name="pc_num" value="<?php if (isset($_GET['pc_num']))
							echo ($_GET['pc_num']); ?>" required placeholder="Enter PC Number">
					</div>
					</br>

					<div class="form-group">
						<label for="itemscol">Item</label>
						<input type="text" class="form-control" id="itemscol" name="itemscol" value="<?php if (isset($_GET['itemscol']))
							echo ($_GET['itemscol']); ?>" required placeholder="Enter Item">
					</div>
					</br>

					<div class="form-group">
						<label for="serial">Serial Number</label>
						<input type="text" class="form-control" id="serial" name="serial" value="<?php if (isset($_GET['serial']))
							echo ($_GET['serial']); ?>" required placeholder="Enter Serial Number	">
					</div>
					</br>

					<label for="room">Room</label>
					<select class="form-select form-select-md mb-3" aria-label=".form-select-lg example" name="room" value="<?php if (isset($_GET['room']))
						echo ($_GET['room']); ?>">
  
						<option selected disabled>Select Room</option>
						<option selected value="Laboratory 1">Lab 1</option>
						<option value="Laboratory 2">Lab 2</option>
					</select>

					<label for="item_condition">Condition</label>
					<select class="form-select form-select-md mb-3" aria-label=".form-select-lg example" name="item_condition"
						value="<?php if (isset($_GET['item_condition']))
							echo ($_GET['item_condition']); ?>">

						<option selected class="working" value="Working">Working</option>
						<option class="defect" value="Defect" disabled>Defect</option>
					</select>


					<br>
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary" name="add">Add</button>

				</form>
			</div>

		</div>
	</div>
</div>

<!-- <script>
	function toggleFormGroup(selectElement) {
		var workingFormGroup = document.getElementById("working-form-group");
		if (selectElement.value === "working") {
			workingFormGroup.style.display = "inline-block";
		} else {
			workingFormGroup.style.display = "none";
		}
		var defectFormGroup = document.getElementById("defect-form-group");
		if (selectElement.value === "defect") {
			defectFormGroup.style.display = "inline-block";
		} else {
			defectFormGroup.style.display = "none";
		}
	}
</script> -->