<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Sign up</title>
    <?php 
        include 'links/links.php';
        include 'css/stylesignup.css';
    ?>
</head>
    <body>
        <div class = "card bg-light">
        <article class="card-body mx-auto" style="max-width:400px;">
            <h4 class="card-little mt-3 text-center">Create Account</h4>
            <p class="text-center">Get started with your account for FREE!</p>
            <p>
                <a href="" class="btn btn-block btn-gmail"><i class="fa fa-google"></i>Login via Gmail</a>
                <a href="" class="btn btn-block btn-facebook"><i class="fa fa-facebook"></i>Login via facebook</a>
            </p>
            <p class="divider-text">
            <span class="bg-light">OR</span>
            </p>
            <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-user"></i></span>
                    </div>
                    <input type="text" name="user" class="form-control" placeholder="Your name" value="" required/>
                </div><!-- form group // -->
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                    </div>
                    <input type="email" name="email" class="form-control" placeholder="Your Email" value="" required/>
                </div><!-- form group // -->
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-phone"></i></span>
                    </div>
                    <input type="number" name="mob" class="form-control" placeholder="Your Mobile no." value="" required/>
                </div><!-- form group // -->
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-lock"></i></span>
                    </div>
                    <input type="password" name="password" class="form-control" placeholder="Enter Password" value="" required/>
                </div><!-- form group // -->
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-lock"></i></span>
                    </div>
                    <input type="password" name="confirmpass" class="form-control" placeholder="Re-enter Password" value="" required/>
                </div><!-- form group // -->
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-home"></i></span>
                    </div>
                    <input type="text" name="address" class="form-control" placeholder="Your Address" value="" required/>
                </div><!-- form group // -->
                <div class="form-group">
                <button type="submit" name="submit" class="btn btn-primary btn-block">CREATE ACCOUNT</button>
                </div><!-- form group // -->
                <p class="text-center">Have an account? <a href="login.php">Log In</a></p>
            </form>
        </article>
        
        </div> <!--Card // -->
    </body>

</html>
<?php
        include 'dbcon.php';
        if(isset($_POST['submit'])){
            $name = $_POST['user'];
            $email= $_POST['email'];
            $mobile= $_POST['mob'];
            $pass = $_POST['password'];
            $confirmpass = $_POST['confirmpass'];
            $address = $_POST['address'];
            
            $secpass = password_hash($pass,PASSWORD_BCRYPT);
            $secconfirmpass = password_hash($confirmpass,PASSWORD_BCRYPT);
            $token = bin2hex(random_bytes(15));
            
            $emailquery = " select * from `registration` where email='$email' ";
            $checkquery = mysqli_query($con,$emailquery);
            $emailcount = mysqli_num_rows($checkquery);
            
            if($emailcount>0){
                ?>
                    <script>alert("The email <?php echo $email; ?> already exists");</script>
                <?php
            }else{
                if($pass === $confirmpass)
                    {
                        $insertquery = "insert into registration(name, email, mobile, password, confirmpass, address, token, status) values ('$name', '$email', '$mobile', '$secpass', '$secconfirmpass', '$address', '$token', 'inactive')";
                        $query = mysqli_query($con,$insertquery);
                        
                    if($query){
                        $to_email = $email;
                        $subject = "Email Activation";
                        $body = " Hi $name ! Click here to activate the account http://eclipsetechno.in/demo/application/activate.php?token=$token";
                        $sender_from = "From: connectfuturetech@gmail.com";
                        
                        if(mail($to_email,$subject,$body,$sender_from)){
                            $_SESSION['msg']="Please check your email to activate the account, $email";
                            header('location:login.php');
                            
                        }else{
                            ?>
                                <script>
                                    alert("Error! The mail couldn't be sent to $email");
                                </script>
                            <?php
                        }
                
                    }else{
                ?>
                        <script>
                            alert("Error: Something went wrong during the Registration! Try again!");
                        </script>
                <?php
                    }
                }else{
                    ?>
                        <script>alert("The Confirm Password doesn't match actual password. Type carefully!");</script>
                    <?php
                    
                }
            }
            
             
        }
    ?>