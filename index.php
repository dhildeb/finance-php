<?php

    require 'src/models/DatabaseConn.php';
    require 'src/controllers/entryController.php';
    include_once 'src/util/logger.php';

     $action = filter_input(INPUT_POST, 'action', FILTER_SANITIZE_STRING);
     if(!$action) {
       $action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_STRING);
       if(!$action) {
         $action = 'home';
       }
     }
     
    switch($action){
      case "expenseForm":
        include 'src/views/expenseForm.php';
        break;
      case "incomeForm":
        include 'src/views/incomeForm.php';
        break;
      case "tableView":
        include 'src/views/tableView.php';
        break;
      default:
        include 'src/views/main.php';
    }