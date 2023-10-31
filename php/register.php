<?php
    include('../config/connect.php');

    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = md5($POST['password']);

        $query = mysqli_connect($connect, "INSERT INTO users SET name='$name', email='$email', password='$password' ");
        if($query) {
            $data = mysqli_fetch_array(mysqli_connect($connect, "SELECT * FROM users WHERE email='$email' AND password='$password'"));

            $_SESSION['user_id'] =$data['id'];
            header('location: ../blogger');
        } else{
            header('localhost: ../register.php');
        }
    } else{
        header('localhost: ../register.php');
    }

?>