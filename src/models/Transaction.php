<?php

class Transaction{
  public $id;
  public $type;
  public $date;
  public $expense;
  public $description;

  function __construct($newId, $newType, $newDate, $newExpense, $newDescription){
    $this->id = $newId;
    $this->type= $newType;
    $this->date = $newDate;
    $this->expense = $newExpense;
    $this->description = $newDescription;
  }
}