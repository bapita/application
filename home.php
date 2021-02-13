<?php
    session_start();
    if(!isset($_SESSION['name'])){
        header("Location: login.php");
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Welcome to Home</title>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Mulish&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
        <?php
            include 'css/homestyle.css';
        ?>
    </head>
    
    <body>
        <header>
            <nav class="navbar">
                <div class="logo">
                    <a href="http://connectfuturetech.com" target="_blank">Company Logo</a>
                </div>
                <div class = "menu">
                    <ul>
                        <li><a href="#" class="active">Home</a></li>
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Gallery</a></li>
                        <li><a href="#">Portfolio</a></li>
                        <li><a href="#">Contact us</a></li>
                    </ul>
                </div>
                <div class="contact_btn">
                    <a href="logout.php">Logout</a>
                </div>
            </nav>
            <div class="center_content">
                <h1>Hello <?php echo $_SESSION['name']; ?></h1>
                <h2>Welcome to the Dashboard!</h2>
            </div>
            
            <div class="social_network">
                <div class="fa_icons">
                    <a href="">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                </div>
                <div class="fa_icons">
                    <a href="">
                        <i class="fab fa-twitter"></i>
                    </a>
                </div>
                <div class="fa_icons">
                    <a href="">
                        <i class="fab fa-instagram"></i>
                    </a>
                </div>
                <div class="fa_icons">
                    <a href="">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>
            <div class="grid_sec">
                <img src="https://images.vexels.com/media/users/3/157918/isolated/lists/e54e73c9f51d8783e7b3240298ee10e7-cross-grid-design.png">
            </div>
        </header>
    </body>
</html>