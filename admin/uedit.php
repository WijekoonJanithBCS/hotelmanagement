<?php
    session_start();

    if(!isset($_SESSION['auser'])){
        header('location:adminlogin.php');
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <title>TRAVEL LK</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-light bg-light justify-content-between-between mx-3">
        <a href="./index.php" class="navbar-brand">Travel LK</a>
        <a href="./adashboard.php" class="btn btn-warning btn-sm">BACK TO DASHBOARD</a>
    </nav>

    <main class="my-5">
        <h1 class="text-center my-2">ADMIN - USER UPDATE</h1>

        <?PHP
            $id=$_GET['id'];
            include '../dbcon.php';

            $sql="SELECT * FROM user WHERE id='$id'";
            $res=mysqli_query($con,$sql);

            if(mysqli_num_rows($res)>0){
                //values found
                $row=mysqli_fetch_assoc($res);
                //key:value
                ?>
            
        
        <form class="w-50 mx-auto mt-5" action="../process.php" method="post">
            <input type="text" name="id" value="<?php echo $row['id'];?>" hidden>
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="uname" class="form-control" value="<?php echo $row['name'];?>"><br>
            </div>

            <div class="form-group">
                <label>Email Address</label>
                <input type="email" name="uemail" class="form-control" value="<?php echo$row['email'];?>"><br>
            </div>

            <div class="form-group">
                <label>password</label>
                <input type="text" name="upass" class="form-control" value="<?php echo$row['pw'];?>"><br>
            </div>

            <div class="form-group">
                <label>Gender</label><br>
                <input type="radio" name="ugender" value="male">MALE
                <input type="radio" name="ugender" value="female">FEMALE
                <input type="radio" name="ugender" value="other">OTHER
                <input type="radio" name="ugender" value="<?php echo $row['gender'];?>">

            </div><br>

            <div class="form-group">
                <label>City</label>
                <input type="text" name="ucity" class="form-control" value="<?php echo$row['city'];?>"><br>
            </div>

            <button type="submit" class="btn btn-success" name="aUserUpdate">UPDATE USER</button>
           
            

            
        </form>

        <?php
            }
        ?>

    </main>
        


        

        </div>
    </div>

            
<footer class="fixed-bottom text-center">
  <p>&copy; 2025 BCS project (Pvt.) Ltd. All rights reserved.</p>
  <a href="contact.html">Contact Us</a> |
  <a href="privacy.html">2025 &copy; Janith</a>
</footer>

</body>

</html>