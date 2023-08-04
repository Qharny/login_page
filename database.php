<?php
    require "conn.php";

    if(isset($_POST['login'])){
        $name = mysqli_real_escape_string($my_connnection, $_POST['mail']);
        $pass = mysqli_real_escape_string($my_connnection, $_POST['password']);


        $data = "INSERT INTO login(Email, Password) VALUES('$name', '$pass')";

        $result = mysqli_query($my_connection, $data);

        if($result){
            echo "Submitted Successfully";
        }
        else{
            echo "Wrong Details";
        }
    }
?>