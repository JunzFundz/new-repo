<?php
require_once '../database/db_conn.php'
?>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Wix+Madefor+Display:wght@500&display=swap" rel="stylesheet">
<link rel="stylesheet" href="../../bootstrap-5.2.3-dist/css/bootstrap.css">
<link rel="stylesheet" href="../panel.css">
<style>

	.modal {
		background: rgba(255,255,255,0.25);
-webkit-backdrop-filter: blur(4px);
backdrop-filter: blur(4px);
border: 1px solid rgba(255,255,255,0.125);
	}
	
	.modal-content{
		border-radius: 1 0px !important;
		color: white;
		font-family: 'Wix Madefor Display', sans-serif;
		background-color:#345B73 !important;
		background: rgba(255,255,255,0.25);
-webkit-backdrop-filter: blur(4px);
backdrop-filter: blur(4px);
border: 1px solid rgba(255,255,255,0.125);
	}

</style>

<div class="modal fade" id="view-item" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5 text-center" id="exampleModalLabel">View Item</h1>

      </div>
      <div class="modal-body">
      <form action="../database/db_item.php" method="post">


		<?php if (isset($_GET['error'])) { ?>
		<div class="alert alert-danger" role="alert">
  		<?php echo $_GET['error']; ?>
		</div>
		<?php } ?>

        <?php

?>

	  <div class="form-group">
	    <label for="itemscol">Item</label>
	    <input type="text" 
	    	   class="form-control" 
	    	   id="itemscol"
	   		   name="itemscol" 
	   		    value="<?php echo $itemscol; ?>"
	    	   	required placeholder="Enter Item">
	  	</div>
		</br>

		<div class="form-group">
	    <label for="room">Room</label>
	    <input type="text" 
	    	   class="form-control" 
	    	   id="room"
	   		   name="room" 
	   		    value="<?php echo "$room"; ?>"
	    	   	required placeholder="Room">
	  	</div>
<br>
		  <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="item_condition" value="<?php echo 
          $item_condition ?>" >

  <option  selected value="Working">Working</option>
  <option value="Defect" disabled>Defect</option>
</select>


<br>
      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="add">Add</button>
      
      </form>
      </div>
      
    </div>
  </div>
</div>
