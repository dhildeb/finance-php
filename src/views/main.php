<?php 

include 'header.php'; 
require_once '../controllers/entryController.php';
$total = 0;

?>

<div class="container">
  <div class="row align-content-center justify-content-around p-5">
    
    <h1>Welcome to Finance!</h1>
    
<form action="" method="post">

    <select name="filter-key">  
      <option value="" disabled selected>Choose option</option>
      <option value="date_recorded">date</option>  
      <option value="expense">amount</option>  
      <option value="comment">comment</option>  
      <option value="expense_type">income</option>  
    </select>
    
    <input type="submit" value="filter"/>
</form>

    <?php
    echo $_REQUEST['filter-key'];
    // if(isset($_POST['filter-key'])){
    //   if(!empty($_POST['filter-key'])) {
        // $dictionary = getAll("expense", "5");
    // } else {
        $dictionary = getAll();
    // }
    // }
console_log($dictionary);
include 'Itable.php';
?>
</div>

<?php include 'footer.php' ?>