<?php

    require '../models/DatabaseConn.php';
    require '../controllers/entryController.php';
    include_once '../util/logger.php';

     $action = filter_input(INPUT_POST, 'action', FILTER_SANITIZE_STRING);
     if(!$action) {
       $action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_STRING);
       if(!$action) {
         $action = 'home';
       }
     }
     
    switch($action){
      case "expenseForm":
        include '../views/expenseForm.php';
        break;
      case "incomeForm":
        include '../views/incomeForm.php';
        break;
      case "tableView":
        include '../views/tableView.php';
        break;
      default:
        include '../views/main.php';
    }