<?php
    session_start();
    ob_start();
?>
    

<!DOCTYPE html>
<html>
<head>
    <title>Log In</title>
    <?php 
        include 'links/links.php';
        include 'css/stylesignup.css';
    ?>
</head>
    <body>
        
        <?php
            include 'dbcon.php';
            if(isset($_POST['submit'])){
                $email = $_POST['email'];
                $password = $_POST['password'];
                
                $emailsearch = " select * from `registration` where email='$email' and status='active' ";
                $query = mysqli_query($con,$emailsearch);
                $emailcount = mysqli_num_rows($query);
                if($emailcount){
                    $emailpass = mysqli_fetch_assoc($query);
                    $dbpass = $emailpass['password'];
                    $_SESSION['name'] = $emailpass['name'];
                    $passdecode = password_verify($password,$dbpass);
                    
                    if($passdecode){
                        if(isset($_POST['check'])){
                            setcookie('emailcookie',$email,time()+86400);
                            setcookie('passcookie',$password,time()+86400);
                            header('location:home.php');
                        }else{
                            header('location:home.php');
                        }
                    }else{
                        ?>
                            <script>alert("Error: Password is incorrect. Try again!");</script>
                        <?php
                    }
                }else{
                    ?>
                        <script>alert("Either email is incorrect or is not activated. Try again or Verify via email.");</script>
                    <?php
                }
            }
        ?>
        
        <div class = "card bg-light">
        <article class="card-body mx-auto" style="max-width:400px;">
            <h4 class="card-little mt-3 text-center">Log In here</h4>
            <p class="text-center">Get started with your own Dashboard!</p>
            <p>
                <a href="" class="btn btn-block btn-gmail"><i class="fa fa-google"></i>Login via Gmail</a>
                <a href="" class="btn btn-block btn-facebook"><i class="fa fa-facebook"></i>Login via facebook</a>
            </p>
            <p class="divider-text">
            <span class="bg-light">OR</span>
            </p>
            <div>
                <p class="bg-success text-white px-4">
                    <?php   
                        if(isset($_SESSION['msg'])){
                            echo $_SESSION['msg'];
                        }else{
                           echo $_SESSION['msg'] = "You are Logged out. Please Login!";
                        }
                    ?>
                </p>
            </div>
            <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
                
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                    </div>
                    <input type="email" name="email" class="form-control" placeholder="Your Email" value="<?php if(isset($_COOKIE['emailcookie'])){ echo $_COOKIE['emailcookie']; } ?>" required/>
                </div><!-- form group // -->
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-lock"></i></span>
                    </div>
                    <input type="password" name="password" class="form-control" placeholder="Enter Password" value="<?php if(isset($_COOKIE['passcookie'])){ echo $_COOKIE['passcookie']; } ?>" required/>
                </div><!-- form group // -->
                <div class="form-group">
                    
                    <input type="checkbox" name="check"/> Remember Me
                </div>
                
                <div class="form-group">
                <button type="submit" name="submit" class="btn btn-primary btn-block">LOGIN</button>
                </div><!-- form group // -->
                <p class="text-center">Not having any account? <a href="signup.php">Register today!</a></p>
                <p class="text-center">Forgot Password? <a href="recover_email.php">Click here</a></p>
            </form>
        </article>
        
        </div> <!--Card // -->
    </body>

</html>
