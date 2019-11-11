<table class="table table-hover  my-5">
  <thead class="text-warning">
    <tr>
      <th scope="col"># ID</th>
      <th scope="col">Name</th>
      <th scope="col">Plan</th>
      <th scope="col">Balance</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>

<?php foreach($users as $user): ?>

    <tr>
      <th scope="row"><?php echo $user['id']; ?></th>
      <td><?php echo $user['username']; ?></td>
      <td><?php echo $user['plan']; ?></td>
      <td><?php echo $user['balance']; ?><span class="text-success">$</span></td>
      <td>

      <div class="row">
      
      <a class="btn btn-small btn-outline-primary mr-1" href="editUser.php?user=<?php echo $user['id']; ?>"><i class="fa fa-pen"></i></a>
       
       <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
         <input type="hidden" name="delete_id" value="<?php echo $user['id']; ?>">
         <button type="submit" name="delete" class="btn btn-small btn-outline-danger"><i class="fa fa-trash-alt"></i></button>
       </form>

      </div>
                    

      </td>
    </tr>


<?php endforeach; ?>

  </tbody>
</table>