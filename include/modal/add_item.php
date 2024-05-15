<?php
require '../database/db_conn.php'
?>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Wix+Madefor+Display:wght@500&display=swap" rel="stylesheet">
<link rel="stylesheet" href="../panel.css">
<style>
  .modal {
    font-family: 'Geologica', sans-serif;
  }

  @import url('https://fonts.googleapis.com/css2?family=Geologica:wght@500&display=swap');

  .new-add-btn {
    --primary-color: #645bff;
    --secondary-color: #fff;
    --hover-color: #111;
    --arrow-width: 10px;
    --arrow-stroke: 2px;
    box-sizing: border-box;
    border: 0;
    border-radius: 20px;
    color: var(--secondary-color);
    padding: 1em 1.8em;
    background: var(--primary-color);
    display: flex;
    transition: 0.2s background;
    align-items: center;
    gap: 0.6em;
    font-weight: bold;
  }

  .new-add-btn .arrow-wrapper {
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .new-add-btn .arrow {
    margin-top: 1px;
    width: var(--arrow-width);
    background: var(--primary-color);
    height: var(--arrow-stroke);
    position: relative;
    transition: 0.2s;
  }

  .new-add-btn .arrow::before {
    content: "";
    box-sizing: border-box;
    position: absolute;
    border: solid var(--secondary-color);
    border-width: 0 var(--arrow-stroke) var(--arrow-stroke) 0;
    display: inline-block;
    top: -3px;
    right: 3px;
    transition: 0.2s;
    padding: 3px;
    transform: rotate(-45deg);
  }

  .new-add-btn:hover {
    background-color: var(--hover-color);
  }

  .new-add-btn:hover .arrow {
    background: var(--secondary-color);
  }

  .new-add-btn:hover .arrow:before {
    right: 0;
  }

  /* content */

  .modal-new-style {
    padding-top: 30px;
    padding-left: 30px;
    padding-right: 30px;
    padding-bottom: -30px;
    border-radius: 20px !important;
  }

  .title-sign {
    font-size: 35px !important;
    text-align: center !important;
  }

  .modal-header {
    display: flex;
    justify-content: center !important;
  }
</style>


<div class="modal fade" id="add-item" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content modal-new-style">
      <div class="modal-header text-center">
        <h1 class="modal-title fs-5 title-sign" id="exampleModalLabel">Add Item</h1>
      </div>
      <div class="modal-body">
        <form class="row g-3" method="post" action="../database/db_item.php" >

          <div id="form-container">
            <div class="div-form">
              <div>
                <label for="itemscol" class="form-label newcorsur"> <strong>Item</strong></label>
                <input type="text" class="form-control" name="itemscol[]" required>
              </div>
              <div>
                <label for="serial" class="form-label"> <strong>Serial</strong></label>
                <input type="text" class="form-control" name="serial[]" required>
              </div>
              <div>
                <label for="item_condition" class="form-label newcorsur"><strong>Condition</strong></label>
                <select class="form-select form-select-md mb-3" aria-label=".form-select-lg example" name="item_condition[]">
                  <option selected value="working">Working</option>
                  <option value="defect">Defective</option>
                </select>
              </div>
            </div>
          </div>

          <a href="#" id="add-one">Add more</a>

          <div class="modal-footer">
            <button class="new-add-btn" name="add" type="submit">
              Add
              <div class="arrow-wrapper">
                <div class="arrow"></div>
              </div>
            </button>
          </div>

        </form>
      </div>

    </div>
  </div>
</div>

<script>
  document.getElementById('add-one').addEventListener('click', function(e) {
    e.preventDefault();

    // Clone the first form group
    var clone = document.querySelector('.div-form').cloneNode(true);

    // Clear values in the cloned inputs
    var inputs = clone.querySelectorAll('input, select');
    inputs.forEach(function(input) {
      input.value = '';
    });

    // Append the cloned form group to the container
    document.getElementById('form-container').appendChild(clone);
  });
</script>