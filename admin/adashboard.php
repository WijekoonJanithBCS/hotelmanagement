<?php include('../dbcon.php');?>



<!DOCTYPE html>
<html lang="en">

<head>

    <title>TRAVEL LK</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-light bg-light justify-content-between-between mx-3">
        <a href="../index.php" class="navbar-brand">Travel LK</a>
        <a href="./alogout.php " class="btn btn-warning btn-sm">ADMIN LOGOUT</a>
       
    </nav>

    <main class="my-5">
        
         <div class="row w-75 mx-auto">
            <div class="container">
                <h3 class="text-center mx-2">WEL COME TO ADMIN DASHBOARD</h3>
            </div>

            <div class="container text-start">
                <a href="addNewUser.php" class="btn btn-primary btn-sm mx-2">ADD NEW USER</a>
            </div>

            <table class="table mt-2">
                <thead class="table-start">
                    <th>ID</th>
                    <th>NAME</th>
                    <th>EMAIL</th>
                    <th>GENDER</th>
                    <th>CITY</th>
                    <th>ACTION</th>
                </thead>

                <tbody>
                    <?php
                        $sql="SELECT * FROM user";
                        $res=mysqli_query($con,$sql);

                        if(mysqli_num_rows($res)>0){
                            while($row=mysqli_fetch_assoc($res)){
                        
                    ?>

                            <tr>
                                <td><?php echo $row['id'];?></td>
                                <td><?php echo $row['name'];?></td>
                                <td><?php echo $row['email'];?></td>
                                <td><?php echo $row['gender'];?></td>
                                <td><?php echo $row['city'];?></td>
                                <td>
                                    <a href="./uedit.php?id=<?php echo $row['id'];?>" class="btn btn-success btn-sm">EDIT</a>
                                    <a href="./udelete.php?id=<?php echo $row['id'];?>" class="btn btn-danger btn-sm ">DELETE</a>
                                </td>
                            </tr>
                        <?php
                            }
                        }
                    ?>
                
        


        

        
    

            
<footer class="fixed-bottom text-center">
  <p>&copy; 2025 BCS project (Pvt.) Ltd. All rights reserved.</p>
  <a href="contact.html">Contact Us</a> |
  <a href="privacy.html">2025 &copy; Janith</a>
</footer>

</body>

</html>