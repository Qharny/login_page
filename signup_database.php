<?php
    // Include the connection file
    require "conn.php";

    // Check if the 'signup' form has been submitted
    if(isset($_POST['signup'])){
        // Sanitize and escape user input
        $fname = mysqli_real_escape_string($my_connection, $_POST['fullname']);
        $uname = mysqli_real_escape_string($my_connection, $_POST['username']);
        $mail = mysqli_real_escape_string($my_connection, $_POST['email']);
        $passd = mysqli_real_escape_string($my_connection, $_POST['pass']);
        $con_passd = mysqli_real_escape_string($my_connection, $_POST['con_password']);

        // SQL query to check if the username or email already exists
        $compare = "SELECT * FROM signup WHERE Username = '$uname' OR Email = '$mail'";

        // Execute the query
        $check = mysqli_query($my_connection, $compare);

        // Check if a matching username or email is found in the database
        if(mysqli_num_rows($check) > 0){
            echo "<script> alert('Username or Email has already been taken'); </script>";
        }
        else{
            // Check if the entered passwords match
            if($passd == $con_passd){
                // Insert user data into the 'signup' table
                $data = "INSERT INTO signup (Fullname, Username, Email, Password, confirm_password) VALUES('$fname','$uname', '$mail' ,'$passd', '$con_passd')";
                mysqli_query($my_connection, $data);
                echo "<script> alert('Registered successfully'); </script>";
            }
            else{
                echo "<script> alert('Password does not Match'); </script>";
            };
        };
    }
?>
