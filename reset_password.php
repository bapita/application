<?php
    session_start();
    ob_start();
?>

<!DOCTYPE html>
<html>
<head>
<title>Reset Password</title>
<?php 
        include 'links/links.php';
        include 'css/stylesignup.css';
?>
</head>
<body>
<div class = "card bg-light">
        <article class="card-body mx-auto" style="max-width:400px;">
            <h4 class="card-little mt-3 text-center">Reset Password</h4>
            <p class="text-center">Please fill carefully</p>
            <br/>
            <div>
                <p class="bg-info text-white px-4">
                    <?php   
                        if(isset($_SESSION['passmsg'])){
                            echo $_SESSION['passmsg'];
                        }else{
                           echo $_SESSION['passmsg'] = "";
                        }
                    ?>
                </p>
            </div>
            
            <form action="" method="POST">
                
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
                
                
                <div class="form-group">
                <button type="submit" name="submit" class="btn btn-primary btn-block">Reset</button>
                </div><!-- form group // -->
                
                
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
        if(iiset($_GET['token'])){
            $newpass = mysqli_real_escape_string($con,$_POST['password']);
            $newconfirmpass = mysqli_real_escape_string($con,$_POST['confirmpass']);

            $securenewpass = password_hash($newpass,PASSWORD_BCRYPT);
            $secureconfirmpass = password_hash($newconfirmpass,PASSWORD_BCRYPT);

            $token = $_GET['token'];
            if($newpass === $newconfirmpass){
                $updatequery = "UPDATE `registration` SET `password`='$securenewpass', `confirmpass`='$secureconfirmpass' where `token`='$token' ";
                $query = mysqli_query($con,$updatequery);
                if($query){
                    $_SESSION['msg'] = "Password updated";
                    header('location:login.php');
                }else{
                    $_SESSION['passmsg'] = "Sorry! Password couldn't be updated";
                    header('location:reset_password.php');
                }
            }else{
                $_SESSION['passmsg'] = "Password doesn't match with confirm password";
                header('location:reset_password.php');
            }
        }else{
            $_SESSION['passmsg'] = "No token received yet!";
            header('location:reset_password.php');
        }
    }
                       
?>