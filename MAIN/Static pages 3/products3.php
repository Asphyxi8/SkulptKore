<?php 
include('../includes/connect.php');
include('../functions/commonfuncts.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products3</title>
    <style>
        .footer td{
            width: 8vw;
        }
    </style>
    <link rel="stylesheet" href="..\user_area\style3.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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
                    <a class="nav-link" href="home3.html">Home</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="home3.html">Workouts</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="home3.html">Shop</a>
                </li>
            </ul>
        </div>
        <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
        <ul class="navbar-nav">
                <!-- KANISHKA PLS FIX THIS LOL -->
                <li class="nav-item  my-auto" style="width:15vw; vertical-align: middle">
                    <form class="d-flex" style="float:right"  action="searchproducts.php" method="get">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search_data">
                            <input type="submit" class="btn btn-outline-primary" name="search_data_product" value="Search">
                    </form>
                </li>
            </ul>
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
                    <a class="nav-link" href="register3.html"><i class="bi bi-journal" style="font-size: 4vh"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="cart3.php"><i class="bi bi-handbag" style="font-size: 4vh"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="register3.html"><i class="bi bi-person" style="font-size: 4vh"></i></a>
                </li>
            </ul>
        </div>
    </nav>

    <!--Sidebar-->
    <div class="sidebar">
        <form class="text-small font-purple" style="padding: 20px;">
            Categories<br>
            <hr class="back-pink">
            <?php getcats(); ?>
            <hr class="back-pink">
            Brands<br>
            <hr class="back-pink">
            <?php getbrands(); ?>
            <hr class="back-pink">
            <br><br>
        </form>
    </div>

    <!--Screen 1-->
    <div class="third-screen content-top font-blue" style="background-image: url(assets/equip1.jpg); background-size:cover;">

    </div>

    <!--Screen 2-->
    <div class="full-screen" style="height: auto">
        <div style="width: 80vw; float: right; padding-top: 1%; padding-left: 2%;">
            <div class="row row-ex">
                <?php 
                getproducts();
                cart();
                ?>
            </div>
        </div>
    </div>

    <!--Footer-->
    <div class="footer">
        <table>
            <tr style="width: 50vw;">
                <th colspan="5"> Skulpt Kore</th>
            </tr>
            <tr style="width: 50vw;">
                <td><a href="home3.html">Home</a></td>
                <td><a href="home3.html">Workouts</a></td>
                <td><a href="products3.html">Shop</a></td>
                <td><a href="aboutus3.html">About Us</a></td>
                <td><a href="home3.html">Contact Us</a></td>
            </tr>
        </table>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
