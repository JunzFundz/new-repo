<?php
require_once '../database/db_conn.php'
?>

<link rel="stylesheet" href="../panel.css">
<div class="modal fade" id="modal-add-user" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Add Users</h1>
      </div>
      <div class="modal-body">
        
      <center>
      <form class="row g-3" method="post" action="../database/db_user.php">

  <div class="col-md-6">
    <label for="Username" class="form-label">Create Username</label>
    <input type="text" 
           class="form-control" 
           id="inputEmail4" 
           name="Username" required 
           value="<?php if (isset($_GET['Username']))
	    	   					   echo($_GET['Username']); ?>">
  </div>
  <div class="col-md-6">
    <label for="Password" class="form-label">Password</label>
    <input type="password" 
           class="form-control" 
           id="inputEmail4" 
           name="Password" required 
           value="<?php if (isset($_GET['Password']))
	    	   					   echo($_GET['Password']); ?>">
  </div>
  <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="submit">Add</button>
      </div>
      </center>
      </form>
      </div>
    </div>
  </div>
</div>