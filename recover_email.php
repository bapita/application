<?php
    session_start();
    ob_start();
?>

<!DOCTYPE html>
<html>
<head>
<title>Recover email</title>
<?php 
        include 'links/links.php';
        include 'css/stylesignup.css';
?>
</head>
<body>
<div class = "card bg-light">
        <article class="card-body mx-auto" style="max-width:400px;">
            <h4 class="card-little mt-3 text-center">Recover Password</h4>
            <p class="text-center">Enter your registered only email ID here</p>
    
            <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
                
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                    </div>
                    <input type="email" name="email" class="form-control" placeholder="Your Email" value="<?php if(isset($_COOKIE['emailcookie'])){ echo $_COOKIE['emailcookie']; } ?>" required/>
                </div><!-- form group // -->
                
                
                <div class="form-group">
                <button type="submit" name="submit" class="btn btn-primary btn-block">Send Mail</button>
                </div><!-- form group // -->
                <p class="text-center">Remember your account? <a href="login.php">Login here</a></p>
                
            </form>
        </article>
        
        </div> <!--Card // -->
    </body>

</html>

</body>
</html>

<?php  
        include 'dbcon.php'; 
        if(isset($_POST['submit'])){
            $email = $_POST['email'];
            $email_search = "select * from `registration` where email = '$email' ";
            $query = mysqli_query($con,$email_search);
            $email_count= mysqli_num_rows($query)
                if($email_count>0){
                    $user_data = mysqli_fetch_array($query)''
                    $token = $user_data['token']; 
                    $username = $user_data['name'];
                    $subject = "Forgot Password Recovery";
                    $body = "Hi $username! Click on the this link to update your password. http://eclipsetechno.in/demo/application/reset_password.php?token=$token";
                    $sender_email = "From: connectfuturetech.com";

                        if(mail($email,$subject,$body,$sender_email)){
                            $_SESSION['msg'] = "check your email for password recovery";
                            header('location:login.php');
                        }else{
                            $_SESSION['msg'] = "Email sending failed";
                            header('location:login.php');
                            }
                }else{
                            $_SESSION['msg'] = "Email does not exist!";
                            header('location:login.php');
                        }
        }
    ?>