<?php
    session_start();
    include 'dbcon.php';
    if(isset($_GET['token'])){
        $token=$_GET['token'];
        $update_query = "update `registration` set status = 'active' where token='$token' "; 
        $query = mysqli_query($con,$update_query);

        if($query){
            if(isset($_SESSION['msg'])){
                $_SESSION['msg'] = "Your Account has been activated. Please login!";
                header('Location:login.php');
            }else{
                $_SESSION['msg'] = "You are logged out. Please login!";
                header('Location:login.php');
            }
        }else{
            $_SESSION['msg'] = "Your Account is not yet activated. Please check mail or register!";
            header('Location:signup.php');
        }

    }
?>