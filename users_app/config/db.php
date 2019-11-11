<?php

require('config/config.php');

    // Connect to DB
    $connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME) or die(mysqli_error(mysqli));

    $result = $connection->query("SELECT * FROM users ORDER BY id ASC") or die($mysqli->error);

    // Fetch Data
    $users = mysqli_fetch_all($result, MYSQLI_ASSOC);
    // var_dump($users);

?>