<!DOCTYPE html>
<html lang="en">

<head>

    <title>TRAVEL LK</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-light bg-light justify-content-between-between mx-3">
        <a href="./index.php" class="navbar-brand">Travel LK</a>
        <a href="./index.php" class="btn btn-warning btn-sm">BACK TO HOME</a>
    </nav>

    <main class="my-5">
        <h1 class="text-center my-2">WEL COME TO USER REGISTER</h1>
        <form class="w-50 mx-auto mt-5" action="process.php" method="post">
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="uname" class="form-control" placeholder="Enter ename..."><br>
            </div>

            <div class="form-group">
                <label>Email Address</label>
                <input type="email" name="uemail" class="form-control" placeholder="Enter Email..."><br>
            </div>

            <div class="form-group">
                <label>password</label>
                <input type="password" name="upass" class="form-control" placeholder="Enter password..."><br>
            </div>

            <div class="form-group">
                <label>Gender</label><br>
                <input type="radio" name="ugender" value="male">MALE
                <input type="radio" name="ugender" value="female">FEMALE
                <input type="radio" name="ugender" value="other">OTHER
            </div><br>

            <div class="form-group">
                <label>City</label>
                <input type="text" name="ucity" class="form-control" placeholder="Enter City..."><br>
            </div>

            <button type="submit" class="btn btn-success" name="register">REGISTER</button>
            <a class="btn btn-secondary btn-sm" href="./login.php">Already hava an account. Login ? </a>
            </div>

            
        </form>
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