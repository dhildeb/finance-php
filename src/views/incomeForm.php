<?php include 'header.php'; ?>

<div class="container">
  <h1>Income</h1>
  <form action="../public/index.php" method="post" class="mt-4" enctype="multipart/form/data">
    <input type="hidden" name="type" value="income">
    <div class="form-group mb-3">
      <label for="date" class="form-label">date</label>
      <input class="form-control" type="date" name="date" id="date" class="form-control" value="<?= date('Y-m-d'); ?>">
    </div>
    <div class="mb-3">
      <label for="expense" class="form-label">income</label>
      <input type="number" name="expense" id="expense" class="form-control" autofocus>
    </div>
    <div class="mb-3">
      <label for="description" class="form-label">description</label>
      <textarea type="text" name="description" id="description" class="form-control"></textarea>
    </div>
    <input type="hidden" name="action" value="tableView">
    <button type="submit" name="submit" value="expense-item" class="btn btn-info"
      href="?action=tableView">Submit</button>
  </form>

</div>

<?php include 'footer.php'; ?>