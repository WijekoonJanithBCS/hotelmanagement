<!DOCTYPE html>
<html lang="en">

<head>

    <title>TRAVEL LK</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-light bg-light justify-content-between-between mx-3">
        <a href="./index.php" class="navbar-brand">Travel LK</a>
        
    

        <?php
            session_start();

            if(!isset($_SESSION['user'])){
                
                echo '<a href="./login.php" class="btn btn-success btn-sm">LOG IN</a>';
                
            }
            else{
                
                echo '<a href="./logout.php" class="btn btn-warning btn-sm">LOG OUT</a>';
                
            }
        ?>

    <main class="my-5">
        <section class="jumbotron text-center">
            <div class="container">
                <h1 class="jumbotron-heading">WEL COME TO CENTRAL PROVINCE</h1>
                <p>VISIT YOUR DREAM HOTEL HERE.....</p>
            </div>
        </section>


        <div class="row">
            <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                    <img class="card-img-top" style="height:200px;" src="./img/img01.jpg">
                    <div class="card-body">
                        <P class="card text"><h3>Hotel colombo</h3>offers a world-class hospitality experience with luxurious accommodations and exceptional service tailored for every traveler. Located in prime destinations, Hilton ensures comfort, elegance, and unforgettable memories for guests around the globe </P>
                        <div class="d-flex justify-content-between align-items-center">
                            
                            <div class="btn-group">
                                <button type="button" class="btn btn-outline-primary btn-sm">VIEW</button>
                                <button type="button" class="btn btn-outline-success btn-sm">BOOK NOW</button>
                            </div>
                            <small class="text muted">RS.15000/=</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                    <img class="card-img-top" style="height:200px;" src="./img/img02.jpg">
                    <div class="card-body">
                        <P class="card text"> <h3>Arugambay hotel</h3>offers a world-class hospitality experience with luxurious accommodations and exceptional service tailored for every traveler. Located in prime destinations, Hilton ensures comfort, elegance, and unforgettable memories for guests around the globe </P>
                        <div class="d-flex justify-content-between align-items-center">
                            
                            <div class="btn-group">
                                <button type="button" class="btn btn-outline-primary btn-sm">VIEW</button>
                                <button type="button" class="btn btn-outline-success btn-sm">BOOK NOW</button>
                            </div>
                            <small class="text muted">RS.15000/=</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                    <img class="card-img-top" style="height:200px;" src="./img/img03.jpg">
                    <div class="card-body">
                        <P class="card text"><h3>Negambo beach hotel </h3>offers a world-class hospitality experience with luxurious accommodations and exceptional service tailored for every traveler. Located in prime destinations, Hilton ensures comfort, elegance, and unforgettable memories for guests around the globe </P>
                        <div class="d-flex justify-content-between align-items-center">
                            
                            <div class="btn-group">
                                <button type="button" class="btn btn-outline-primary btn-sm">VIEW</button>
                                <button type="button" class="btn btn-outline-success btn-sm">BOOK NOW</button>
                            </div>
                            <small class="text muted">RS.15000/=</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                    <img class="card-img-top" style="height:200px;" src="./img/img01.jpg">
                    <div class="card-body">
                        <P class="card text"> <h3>Galle fort hotel </h3>offers a world-class hospitality experience with luxurious accommodations and exceptional service tailored for every traveler. Located in prime destinations, Hilton ensures comfort, elegance, and unforgettable memories for guests around the globe </P>
                        <div class="d-flex justify-content-between align-items-center">
                            
                            <div class="btn-group">
                                <button type="button" class="btn btn-outline-primary btn-sm">VIEW</button>
                                <button type="button" class="btn btn-outline-success btn-sm">BOOK NOW</button>
                            </div>
                            <small class="text muted">RS.15000/=</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                    <img class="card-img-top" style="height:200px;" src="./img/img02.jpg">
                    <div class="card-body">
                        <P class="card text"><h3>Nuwara eliya hotel </h3>offers a world-class hospitality experience with luxurious accommodations and exceptional service tailored for every traveler. Located in prime destinations, Hilton ensures comfort, elegance, and unforgettable memories for guests around the globe  </P>
                        <div class="d-flex justify-content-between align-items-center">
                            
                            <div class="btn-group">
                                <button type="button" class="btn btn-outline-primary btn-sm">VIEW</button>
                                <button type="button" class="btn btn-outline-success btn-sm">BOOK NOW</button>
                            </div>
                            <small class="text muted">RS.15000/=</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                    <img class="card-img-top" style="height:200px;" src="./img/img03.jpg">
                    <div class="card-body">
                        <P class="card text"><h3>Jaffna budget hotel </h3>offers a world-class hospitality experience with luxurious accommodations and exceptional service tailored for every traveler. Located in prime destinations, Hilton ensures comfort, elegance, and unforgettable memories for guests around the globe  </P>
                        <div class="d-flex justify-content-between align-items-center">
                            
                            <div class="btn-group">
                                <button type="button" class="btn btn-outline-primary btn-sm">VIEW</button>
                                <button type="button" class="btn btn-outline-success btn-sm">BOOK NOW</button>
                            </div>
                            <small class="text muted">RS.15000/=</small>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

            
<footer>
  <p>&copy; 2025 BCS project (Pvt.) Ltd. All rights reserved.</p>
  <a href="contact.html">Contact Us</a> |
  <a href="privacy.html">2025 &copy; Janith</a>
</footer>

</body>

</html>