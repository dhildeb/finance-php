<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../assets/css/style.css" />
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
    integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

  <title>Finance</title>
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">

          <form action="." method="post" class="mt-3 mr-3">
            <input type="hidden" name="action" value="home">
            <a type="submit" href="?action=Home"> Home</a>
          </form>
          <form action="." method="post" class="mt-3 mr-3">
            <input type="hidden" name="action" value="tableView">
            <a type="submit" href="?action=tableView">View Report</a>
          </form>
          <form action="." method="post" class="mt-3 mr-3">
            <input type="hidden" name="action" value="expenseForm">
            <a type="submit" href="?action=expenseForm">Expense form</a>
          </form>
          <form action="." method="post" class="mt-3 mr-3">
            <input type="hidden" name="action" value="incomeForm">
            <a type="submit" href="?action=incomeForm">Income form</a>
          </form>
        </ul>
      </div>
    </div>
  </nav>