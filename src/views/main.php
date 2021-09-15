<?php 

include 'header.php'; 
require_once '../controllers/entryController.php';
$total = 0;

?>

<div class="container">
  <div class="row align-content-center justify-content-around p-5">

    <h1>Welcome to Finance!</h1>

    <form action="" method="post">

      <select name="filter-key" id="filter-key" onchange='loadNewContent()'>
        <option value="" disabled selected>Choose option</option>
        <option value="date_recorded">date</option>
        <option value="expense">amount</option>
        <option value="comment">comment</option>
        <option value="expense_type">transaction type</option>
      </select>
      <div id="new-form" class="form-group mb-3">
      </div>
      <input type="submit" value="filter" />
    </form>

    <?php
    if(isset($_POST['filter-key']) && isset($_POST['filter-value'])){
        $dictionary = getAll($_POST['filter-key'], $_POST['filter-value']);
    } else {
      $expenses = getExpenses();
      $income = getIncome();
      $dictionary = [...$expenses, ...$income];
         // sorting entries by date
      usort($dictionary, function($a, $b){
      return strcmp($a->date, $b->date);
    });
    }
    
include 'Itable.php';
?>
  </div>

  <?php include 'footer.php' ?>