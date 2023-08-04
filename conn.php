<?php
    session_start();
    
    $host = "localhost";
    $user_name="root";
    $pass = "";
    $db_name = "my_database";

    $my_connection = mysqli_connect($host, $user_name, $pass, $db_name);

    if($my_connection){
        echo "Connected to database Successfully";
    }
    else{
        die("Connection Failed".mysqli_error());
    }


?>