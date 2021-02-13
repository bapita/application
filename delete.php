<?php

    include 'dbcon.php';
    $id = $_GET['ids'];
    $deletequery = "DELETE FROM `registration` WHERE id=$id";
    $query = mysqli_query($con,$deletequery);
    
    if($query){
                ?>
                <script>
                    alert("Deleted successfully");
                </script>
                <?php
                header('location:select.php');
            }else{
                ?>
                <script>
                    alert("Data deletion could not be done");
                </script>
                <?php
            }
?>