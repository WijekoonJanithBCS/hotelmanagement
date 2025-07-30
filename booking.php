

<?php
    session_start();

    if(!isset($_SESSION['user'])){
        header('location:login.php');
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
        <a href="./logout.php" class="btn btn-warning btn-sm">LOG OUT</a>
    </nav>

    <main class="my-5">
        <h1 class="text-center my-2">BOOK A HOTEL</h1>
        <form class="w-50 mx-auto mt-5" action="process.php" method="post">
            <div class ="row">
                <div class="col-md-6 form-group">
                    <label>YOUR EMAIL:</label>
                    <input readonly type="email" name="uemail" value="<?php echo $_SESSION['user']; ?>" class="form-control">
                </div>

                <div class="form-group col-6">
                    <label>HOTEL NAME</label>
                    <select class="form-control" name="hotel">
                        <option disabled selected>SELECT AN HOTEL</option>
                        <option value="Hotel colombo">Hotel colombo</option>
                        <option value="Arugambay hotel">Arugambay hotel</option>
                        <option value="Negambo beach hotel">Negambo beach hotel</option>
                        <option value="galle fort hotel">galle fort hotel</option>
                        <option value="Nuwara eliya hotel">Nuwara eliya hotel</option>
                        <option value="Jaffna budget hotel">Jaffna budget hotel</option>
                    </select><br><br>
                </div>
            </div>

           <div class="row">
                <div class="form-group col-6">
                    <label>WHEN YOU ARE COMING ?</label>
                    <input type="date" name="sdate" class="form-control">
                </div>

                <div class="form-group col-6">
                    <label>WHEN YOU ARE LEAVING ?</label>
                    <input type="date" name="edate" class="form-control">
                </div>
           </div>

           <button type="submit" class="btn btn-warning mt-5" name="booking">BOOK HOTEL</button>

            

            
<footer class="fixed-bottom text-center">
  <p>&copy; 2025 BCS project (Pvt.) Ltd. All rights reserved.</p>
  <a href="contact.html">Contact Us</a> |
  <a href="privacy.html">2025 &copy; Janith</a>
</footer>

</body>

</html>