<?php
include 'header.php';
include_once '../models/databaseConn.php';
include_once '../controllers/entryController.php';
$total = 0;
// TODO refactor to one controller and transactions
$expenses = getExpenses();
$income = getIncome();
$data = [...$expenses, ...$income];
usort($data, function($a, $b){
  return strcmp($a->date, $b->date);
});

if(isset($_POST['submit'])){
  createExpense();
  header("location: ../public/index.php");
  return;
}

$months = array_map(function($entry){
 $d = substr($entry->date, 0, -3);
  return $d;}, $data);
$months = array_unique($months);
console_log($months);

?>
<form class="w-25 text-center mx-auto my-3" action="" method="post">
  <label for="month">SEARCH BY MONTH</label>
  <div class="input-group">
    <select class="custom-select" name="month" id="month">
      <?php
    foreach($months as $m){
      echo "<option value='$m'>$m</option>";
    }
    ?>
    <div class="input-group-append">
      <input class="btn btn-info" type="submit" name="search" value="search" />
    </div>
  </select>
</div>
</form>
<?php

if(isset($_POST['search'])){
 $dictionary = array_filter($data, function($entry){
    if(str_contains($entry->date, $_POST['month'])){
      return $entry;
    }
  });
  $dictionary = array_values($dictionary);
} else {
  $dictionary = $data;
}

include 'Itable.php';
?>



<?php include 'footer.php'; ?>