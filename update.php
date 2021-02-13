

    <!DOCTYPE html>
    <html>
    <head>
        <title>Update Application</title>
        <?php include 'css/style.css'; ?>
        <?php include 'links/links.php'; ?>
    </head>
    <body>
    <div class="container register">
        <div class="row">
        <div class="col-md-3 register-left">
            <img src="http://connectfuturetech.com/wp-content/uploads/2020/09/Untitled-1-removebg-preview_2_100x100.png" alt="logo"/>
            <h3>Update now!</h3>
            <p>Please update the details carefully</p>
            <a href="select.php">Back to list</a> <br/>
        </div>
    <div class="col-md-9 register-right">
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
        <h3 class="register-heading">Update form</h3>
            <form action="<?php echo htmlentities($_SERVER['PHP_SELF']) ?>" method="POST">
                <div class="row register-form">
                    
                    <?php
                        include 'dbcon.php';
                        $id = $_GET['id'];
                        $selectquery = " select * from registration where id=$id";
                        $query = mysqli_query($con,$selectquery);
                        $result = mysqli_fetch_assoc($query);
                        
                        if(isset($_POST['submit'])){
                        
                        $name = $_POST['user'];
                        $email = $_POST['email'];
                        $mobile = $_POST['mob'];
                        $id = $_POST['id'];
                        $pass = $_POST['password'];
                        $address = $_POST['address'];
                        
                        //$updatequery = " update registration set name='$name', email='$email', mobile='$mobile', password='$pass', confirmpass='$confirmpass', address='$address' where id=$id ";
                        $updatequery = " UPDATE `registration` SET `name`='$name',`email`='$email',`mobile`='$mobile',`password`='$pass',`address`='$address' WHERE id=$id ";
                        $query = mysqli_query($con,$updatequery);
                    
                        if($query){
                    ?>
                        <script>
                            alert("Updated Successfully for  <?php echo $name; ?>");
                        </script>
                    <?php
                        }else{
                    ?>
                        <script>
                            alert("Error: Could not be updated for  <?php echo $name; ?>");
                        </script>
                    <?php
                    }
                }
            ?>
                    
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" Placeholder="Enter your name" name="user" value="<?php echo $result['name']; ?>" required/>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" Placeholder="Enter your email" name="email" value="<?php echo $result['email']; ?>" required/>
                        </div>

                        <div class="form-group">
                            <input type="tel" class="form-control" Placeholder="Enter your Mobile no." name="mob" value="<?php echo $result['mobile']; ?>" required/>
                        </div>

                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" Placeholder="ID" name="id" value="<?php echo $result['id']; ?>" required/>
                        </div>

                        <div class="form-group">
                            <input type="password" class="form-control" Placeholder="Enter your Password" name="password" value="<?php echo $result['password']; ?>" required/>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" Placeholder="Address" name="address" value="<?php echo $result['address']; ?>" required/>
                        </div>

                        <input type="submit" class="btnRegister" name="submit" value="Update"/>
                    </div>

                </div>
            </form>
        </div>
    </div>
    
    </div>    

    </div>
    </div>
    </html>
    
    
