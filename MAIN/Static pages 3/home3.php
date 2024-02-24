<?php

session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home3</title>
    <style>
        .footer td{
            width: 8vw;
        }
    </style>
    <link rel="stylesheet" href="..\user_area\style3.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script type="module" src="https://ajax.googleapis.com/ajax/libs/model-viewer/3.0.1/model-viewer.min.js"></script>
</head>
<body>
    <!--Navbar-->
    <nav class="navbar sticky-top navbar-expand-lg navbar-custom">
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="navbar-brand" href="home3.html"><img src="assets/logo.png" height="90vh"></a>
                </li>
            </ul>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="home3.php">Home</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="exercise3.php">Workouts</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="home3.html">Shop</a>
                </li>
            </ul>
        </div>
        <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item my-auto">
                <?php
                    if(isset($_SESSION['user_username'])){
                        echo'
                    <a class="nav-link" href="..\user_area\user_logout.php">Logout</a>';
                    }
                    else{
                        echo'
                    <a class="nav-link" href="..\user_area\login3.php">Login</a>';
                    }
                    ?>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="..\user_area\plan.php"><i class="bi bi-journal" style="font-size: 4vh"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="cart3.php"><i class="bi bi-handbag" style="font-size: 4vh"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="..\user_area\user_profile.php"><i class="bi bi-person" style="font-size: 4vh"></i></a>
                </li>
            </ul>
        </div>
    </nav>

    <!--Screen 1-->
    <div class="full-screen content-top font-blue" style="background-image: url(assets/work8.jpg); background-size:cover;">
        <div class="half-width" style="position: relative; top: 60px; left: 200px">
            <div class="text-heading">
                Your First Step Towards Fitness
            </div>
            <div class="text-medium text-box" style="position: relative; transform: translate(10%,0%);"> Don't let anything stop you on your path of dream fitness</div>
            <div class="text-box" style="position: relative; top: 40px; transform: translate(10%,0%);">
                <a href="register3.html">
                    <button type="submit" class="sub-button font-blue" style="display:flex;justify-self:center;">Join Now</button>
                </a>
            </div>
        </div>
    </div>

    <!--Screen 2-->
    <div class="half-screen back-blue content-center">
        <div style="text-align: center;">
            <div class="text-big font-purple">
                Everything you need to get started on your fitness journey
            </div>
        </div>
    </div>

    <!--Screen 3-->
    <div class="full-screen">
        <div class="row" style="margin: auto; padding: 5%;">
            <div id="home1">
                <model-viewer alt="blob1" src="assets/blob4.gltf" ar auto-rotate rotation-per-second="20deg"></model-viewer>
            </div>
            <div class="column" style="background-image: url(assets/weight1.jpg); background-size: cover;"></div>
            <div class="column content-center" style="background-color:#dfd4f3;">
                <span class="text-medium" style="position: relative; transform: translate(0%,-100%);"><a href="exercise3.html">Plan Your Workouts</a></span>
            </div>
        </div>
    </div>

    <!--Screen 4-->
    <div class="full-screen">
        <div class="row" style="margin: auto; padding: 5%;">
            <div id="home2">
                <model-viewer alt="blob2" src="assets/blob5.gltf" ar auto-rotate rotation-per-second="20deg"></model-viewer>
            </div>
            <div class="column content-center" style="background-color:#dfd4f3;">
                <span class="text-medium font-blue" style="position: relative; transform: translate(0%,-100%);"><a href="home3.html">Track Your Progress</a></span>
            </div>
            <div class="column" style="background-image: url(assets/board1.jpg); background-size: cover;"></div>
        </div>
    </div>


    <!--Screen 5-->
    <div class="full-screen">
        <div class="row" style="margin: auto; padding: 5%;">
            <div id="home-b-3">
                <model-viewer alt="blob2" src="assets/blob7.gltf" ar auto-rotate rotation-per-second="20deg"></model-viewer>
            </div>
            <div class="column" style="background-image: url(assets/weight3.jpg); background-size: cover;"></div>
            <div class="column content-center" style="background-color:#dfd4f3;">
                <span class="text-medium" style="position: relative; transform: translate(0%,-100%);"><a href="products3.html">Get Equipment</a></span>
            </div>
        </div>
    </div>
    
    <!--Screen 4-->
    <div class="third-screen" style="height: 11vh">

    </div>

    <!--Screen 2-->
    <div class="half-screen back-blue content-center">
        <div style="text-align: center;">
            <div class="text-big font-purple">
                Everything you need to get started on your fitness journey
            </div>
            <div class="text-small">

            </div>
        </div>
    </div>

    <!--Footer-->
    <div class="footer">
        <table>
            <tr>
                <th colspan="5"> Skulpt Kore</th>
            </tr>
            <tr>
                <td><a href="home3.html">Home</a></td>
                <td><a href="home3.html">Workouts</a></td>
                <td><a href="products3.html">Shop</a></td>
                <td><a href="aboutus3.html">About Us</a></td>
                <td><a href="contactus3.html">Contact Us</a></td>
            </tr>
        </table>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>