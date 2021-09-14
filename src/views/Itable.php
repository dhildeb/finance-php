<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">TYPE</th>
      <th scope="col">DATE</th>
      <th scope="col">EXPENSE</th>
      <th scope="col">DESCRIPTION</th>
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
          ";
      }
        echo "
        </tr>
        <td>Total Balance: </td>
        <td>$".$total."</td>";
    ?>

  </tbody>
</table>