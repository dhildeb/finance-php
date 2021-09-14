<?php
include 'header.php';
include_once '../models/databaseConn.php';
include_once '../controllers/entryController.php';
$total = 0;
// TODO refactor to one controller and transactions
$expenses = getExpenses();
$income = getIncome();
$dictionary = [...$expenses, ...$income];

if(isset($_POST['submit'])){
  // createExpense();
  header("location: ../public/index.php");
  return;
}

include 'Itable.php';
?>



<?php include 'footer.php'; ?>