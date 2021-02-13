

    <!DOCTYPE html>
    <html>
    <head>
        <title>Application</title>
        <?php include 'css/style.css'; ?>
        <?php include 'links/links.php'; ?>
    </head>
    <body>
    <div class="container register">
        <div class="row">
        <div class="col-md-3 register-left">
            <img src="http://connectfuturetech.com/wp-content/uploads/2020/09/Untitled-1-removebg-preview_2_100x100.png" alt="logo"/>
            <h3>Register here!</h3>
            <p>Please fill out all the details carefully</p>
            <a href="login.php">Login here</a> <br/>
        </div>
    <div class="col-md-9 register-right">
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
        <h3 class="register-heading">Registration form</h3>
            <form action="<?php echo htmlentities($_SERVER['PHP_SELF']) ?>" method="POST">
                <div class="row register-form">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" Placeholder="Enter your name" name="user" value="" required/>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" Placeholder="Enter your email" name="email" value="" required/>
                        </div>

                        <div class="form-group">
                            <input type="tel" class="form-control" Placeholder="Enter your Mobile no." name="mob" value="" required/>
                        </div>

                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="password" class="form-control" Placeholder="Enter your Password" name="password" value="" required/>
                        </div>

                        <div class="form-group">
                            <input type="password" class="form-control" Placeholder="Confirm password" name="confirmpass" value="" required/>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" Placeholder="Address" name="address" value="" required/>
                        </div>

                        <input type="submit" class="btnRegister" name="submit" value="Register"/>
                    </div>

                </div>
            </form>
        </div>
    </div>
    
    </div>    

    </div>
    </div>
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
                        $insertquery = "insert into registration(name, email, mobile, password, confirmpass, address) values ('$name', '$email', '$mobile', '$secpass', '$secconfirmpass', '$address')";
                        $query = mysqli_query($con,$insertquery);
                        
                    if($query){
                ?>
                        <script>
                            alert("Thank you for registering with us! Please login");
                        </script>
                <?php
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