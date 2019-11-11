<?php 
    require('config/db.php');

    // Check DELETE Submit
    if(isset($_POST['delete'])){
        // Get form data
        $delete_id = mysqli_real_escape_string($connection, $_POST['delete_id']);

        $query = "DELETE FROM users WHERE id = {$delete_id}";

        if(mysqli_query($connection, $query)){
            header('Location: '.ROOT_URL.'');
        } else {
            echo 'ERROR: '. mysqli_error($connection);
        }
        }

        // Check for UPDATE submit
        if(isset($_POST['submit'])){
            // GET form data
            // echo 'Submited';
            $username = mysqli_real_escape_string($connection, $_POST['username']);
            $plan = mysqli_real_escape_string($connection, $_POST['plan']);
            $balance = mysqli_real_escape_string($connection, $_POST['balance']);
    
    
            $query = "INSERT INTO users(username,plan,balance) VALUES('$username', '$plan', '$balance')";
    
            if(mysqli_query($connection, $query)){
                header('Location: '.ROOT_URL.'');
                echo "<meta http-equiv='refresh' content='0'>";
            } else {
                echo 'ERROR: '.mysqli_error($connection);
            }
    
        }

?>

<!-- Template -->

<!-- Header -->
<?php include('inc/header.php'); ?>

<div class="container my-5">

    <!-- Button trigger modal -->
    <div class="text-center">
        <button type="button" class="btn btn-outline-primary px-5" data-toggle="modal" data-target="#exampleModalCenter">
            Add New User
        </button>
    </div>
    
    <!-- Table -->
    <?php include('inc/table.php'); ?>    

    <!-- ADD User Modal -->
    <?php include('inc/addUserModal.php'); ?>   

</div>


<!-- Footer -->
<?php include('inc/footer.php'); ?>