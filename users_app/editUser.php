<?php 
    require('config/config.php');

    $connection = new mysqli('localhost', 'root', '123123', 'users_app') or die(mysqli_error(mysqli));

    // Check for submit
	if(isset($_POST['submit'])){
		// Get form data
        $update_id = mysqli_real_escape_string($connection, $_POST['update_id']);
        $username = mysqli_real_escape_string($connection, $_POST['username']);
        $plan = mysqli_real_escape_string($connection, $_POST['plan']);
        $balance = mysqli_real_escape_string($connection, $_POST['balance']);

		$query = "UPDATE users SET 
					username='$username',
					balance='$balance',
					plan='$plan' 
                        WHERE id = {$update_id}";
        
		if(mysqli_query($connection, $query)){
			header('Location: '.ROOT_URL.'');
		} else {
			echo 'ERROR: '. mysqli_error($connection);
		}
	}

    // get ID
    $id = mysqli_real_escape_string($connection ,$_GET['user']);

    $result = $connection->query('SELECT * FROM users WHERE id = '.$id) or die($mysqli->error);
   
    // Fetch Data
    $user = mysqli_fetch_assoc($result);
    // var_dump($user);

?>

<!-- Template -->

<!-- Header -->
<?php include('inc/header.php'); ?>

<div class="container my-5">

    <div class="text-center">

    <h4>Edit User <span class="text-primary"><?php echo $user['username']; ?></span></h4>

    </div>

    <div class="col-md-6 mx-auto">

    <form  method="POST" class='form-group p-3 mb-1 mt-5'>
        
        <label>Username</label>
        <input class='form-control mb-2' type="text" name="username" required value="<?php echo $user['username']; ?> "  >
    
        <input type="hidden" name="update_id" value="<?php echo $user['id']; ?>" >

        <label><span class="text-success">$</span> Balance</label>
        <input class='form-control my-2' type="text"  name="balance" value="<?php echo $user['balance'] ;  ?> " ></input>

        <div class="form-group mb-2">
                <label for="exampleFormControlSelect1">Select Plan</label>
                <select name="plan" class="form-control" id="exampleFormControlSelect1">
                <option value="Basic">Basic</option>
                <option value="PRO">PRO</option>
        </div>

        <input type="submit" name="submit" value='Save' class='btn btn-primary btn-block my-4' >
        <a href="<?php echo ROOT_URL; ?>" class="btn btn-outline-primary">Back</a>

        
    </form>
    </div>


</div>



<!-- Footer -->
<?php include('inc/footer.php'); ?>