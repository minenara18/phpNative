<?php

    include('../config/connect.php');

    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $password = md5($_POST['password']);

        $query = mysqli_query($connect, "SELECT * FROM users WHERE email='$email' AND password='$password'");
        
        if(mysqli_num_rows($query)) {

            $data = mysqli_fetch_array($query);
            $_SESSION['user_id'] = $data['id'];
            header('location: ../blogger');
        } else{
            header('localhost: ../login.php');
        }
    } else{
        header('localhost: ../signup.php');
    }

?>