<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">TYPE</th>
      <th scope="col">DATE</th>
      <th scope="col">EXPENSE</th>
      <th scope="col">DESCRIPTION</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>

    <?php
      for($i = 0; $i < count($dictionary); $i++){
        echo "
        <tr>
          <th scope='row'>".($i + 1)."</th>
          <td>".$dictionary[$i]->type."</td>
          <td>".$dictionary[$i]->date."</td>
          ";
          if($dictionary[$i]->type === 'income'){
            $total += $dictionary[$i]->expense;
            echo "
          <td class='text-success'>$".$dictionary[$i]->expense."</td>
          ";
          }else{
            $total -= $dictionary[$i]->expense;
            echo "
            <td class='text-danger'>$".$dictionary[$i]->expense."</td>
            ";
          }
        echo "
          <td>".$dictionary[$i]->description."</td>
          <td>
          <form action='' method='post'>
            <input type='hidden' name='id' value=".$dictionary[$i]->id.">
            <input class='text-white btn btn-danger click' type='submit' title='delete entry' value='X'>
          </form>
          </td>
          ";
      }
        echo "
        </tr>
        <td>Total Balance: </td>
        <td>$".$total."</td>";
    ?>

  </tbody>
</table>

<?php
include_once '../controllers/entryController.php';

if(isset($_POST['id'])){
  deleteEnetry($_POST['id']);
}