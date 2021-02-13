<?php
$server = "localhost";
$user ="user-app-db";
$password = "user-app-db";
$db = "application-db";

$con = mysqli_connect($server, $user, $password,$db);
if(!$con){
    ?>
    <script>
        alert("Connection with DB couldn't be established");
    </script>
    <?php
}
?>