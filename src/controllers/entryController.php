<?php
include '../models/Transaction.php';

  function get($sql){
    global $conn;
    $dictionary = [];
    $res = $conn->query($sql);
    if ($res->num_rows > 0) {
      while($row = $res->fetch_assoc()) {
        array_push($dictionary, new Transaction($row['id'], $row["expense_type"], $row["date_recorded"], $row["expense"], $row["comment"]));
      }
    } else {
      echo "0 results";
    }

    return $dictionary;
  }

  function getExpenses(){
    $sql = "SELECT * FROM entries WHERE expense_type = 'expense' ORDER BY date_recorded";
   $dictionary = get($sql);
    // sorting entries by date
    // usort($dictionary, function($a, $b){
    //   return strcmp($a->date, $b->date);
    // });
    return $dictionary;
  }

  function getIncome(){

    $sql = "SELECT * FROM entries WHERE expense_type = 'income' ORDER BY date_recorded";
    $dictionary = get($sql);
    return $dictionary;
  }

  function getAll($col = "date_recorded", $query = '*'){
    global $conn;
    $dictionary = [];

    $stmt = $conn->prepare("SELECT * FROM entries WHERE $col=? ORDER BY date_recorded");
    $stmt->bind_param("s", $query);
    $stmt->execute();
    $res = $stmt->get_result();
    
    if ($res->num_rows > 0) {
      while($row = $res->fetch_assoc()) {
        array_push($dictionary, new Transaction($row['id'], $row["expense_type"], $row["date_recorded"], $row["expense"], $row["comment"]));
      }
    } else {
      echo "0 results";
    }

    return $dictionary;
  }

  function createExpense(){

    global $conn;
    $newType = htmlspecialchars($_POST["type"] ?? '', ENT_QUOTES);
    $newDate = htmlspecialchars($_POST["date"] ?? '', ENT_QUOTES);
    $newExpense = htmlspecialchars($_POST["expense"] ?? '', ENT_QUOTES);
    $newDescription = htmlspecialchars($_POST["description"] ?? '', ENT_QUOTES);

    if(isset($_POST['submit'])){
      $stmt = $conn->prepare("INSERT INTO entries (expense_type, date_recorded, expense, comment) VALUES (?, ?, ?, ?)");
      
      if (!$stmt) {
        die ("Statement Error: " . $conn->error);
      }

      $stmt->bind_param("ssis", $newType, $newDate, $newExpense, $newDescription);

      $stmt->execute();
      $stmt->close();
    }
  }

  function createIncome(){

    global $conn;
    $newType = htmlspecialchars($_POST["expense_type"] ?? '', ENT_QUOTES);
    $newDate = htmlspecialchars($_POST["date"] ?? '', ENT_QUOTES);
    $newExpense = htmlspecialchars($_POST["expense"] ?? '', ENT_QUOTES);
    $newDescription = htmlspecialchars($_POST["description"] ?? '', ENT_QUOTES);

    if(isset($_POST['submit'])){
      $stmt = $conn->prepare("INSERT INTO entries (expense_type, date_recorded, expense, comment) VALUES (?, ?, ?, ?)");
      
      if (!$stmt) {
        die ("Statement Error: " . $conn->error);
      }

      $stmt->bind_param("ssis", $newType, $newDate, $newExpense, $newDescription);

      $stmt->execute();
      $stmt->close();
    }
  }

  function deleteEnetry($id){
    global $conn;
    $query = 'DELETE FROM entries WHERE id = ?';
    $stmt = $conn->prepare($query);
    if(!$stmt){
      error_log('mysqli prepare() failed: ');
      error_log( print_r( htmlspecialchars($stmt->error), true ) );
      exit;
    }
    $stmt->bind_param('i', $id);
    if(!$stmt){
      console_log('error deleting');
    }else{
      console_log('entry deleted');
    }
    $stmt->execute();
    $stmt->closeCursor();
    
  }