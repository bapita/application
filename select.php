<?php
session_start();
?>
<!--Doctype HTML-->
<html>

    <head>
        <title></title>
        <?php include 'css/style.css'; ?>
        <?php include 'links/links.php'; ?>
    </head>
    <body>
        <div class = "main-div">
        <h1>List of registered users</h1>
        <div class="center-div">
            <div class= "table-responsive">
                <table>
                    <thead>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Mobile no</th>
                        <th>Address</th>
                        <th colspan = "2">Operation</th>
                    </thead>
                    <tbody>
                        
                        <?php
                            include 'dbcon.php';
                            $selectquery = "select * from registration";
                            $query = mysqli_query($con,$selectquery);
                            while($result = mysqli_fetch_assoc($query)){
                                
                            ?>
                        
                        <tr>
                            <td><?php echo $result['name']; ?></td>
                            <td><?php echo $result['email']; ?></td>
                            <td><?php echo $result['mobile']; ?></td>
                            <td><?php echo $result['address']; ?></td>
                            <td><a href = "update.php?id=<?php echo $result['id']; ?>"><i class="fas fa-edit"></i></a></td>
                            <td><a href = "delete.php?ids=<?php echo $result['id']; ?>"><i class="fas fa-trash"></i></a></td>
                        </tr>
                        <?php
                            }
                        
                        ?>
                    </tbody>
                </table>
                
            </div>
        </div>
            
        </div>
    </body>
</html>