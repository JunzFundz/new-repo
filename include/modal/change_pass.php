<?php
require_once '../database/db_conn.php'
?>

<link rel="stylesheet" href="../panel.css">   
<div class="modal fade" id="modal-change-pass" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Change Password</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form class="row g-3" method="post" action="../database/db_changepass.php">
  <div class="col-md-6">
    <label for="current_password" class="form-label">Current Password</label>
    <input type="password" class="form-control" id="inputEmail4" name="current_password" required>
  </div>
  <div class="col-md-6">
    <label for="new_password" class="form-label">New Password</label>
    <input type="password" class="form-control" id="inputEmail4" name="new_password" required>
  </div>
  <!-- <div class="col-md-6">
    <label for="current_password" class="form-label">Username</label>
    <input type="password" class="form-control" id="inputEmail4" name="current_username" required>
  </div>
  <div class="col-md-6">
    <label for="new_password" class="form-label">New Username</label>
    <input type="password" class="form-control" id="inputEmail4" name="new_username" required>
  </div> -->
  <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="submit" value="Change Password">Add</button>
      </div>
      </form>
      </div>
      
    </div>
  </div>
</div>