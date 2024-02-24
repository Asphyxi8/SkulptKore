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
    <link rel="stylesheet" href="style3.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <!--Navbar-->
    <nav class="navbar sticky-top navbar-expand-lg navbar-custom">
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="navbar-brand" href="home3.html">Logo Space</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="home3.html">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Workouts
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Arms</a>
                        <a class="dropdown-item" href="#">Legs</a>
                        <a class="dropdown-item" href="#">Back</a>
                        <a class="dropdown-item" href="#">Shoulders</a>
                        <a class="dropdown-item" href="#">Full Body</a>
                        <a class="dropdown-item" href="exercise3.html">Customize</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Shop
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="products3.html">All items</a>
                        <a class="dropdown-item" href="#">Tops</a>
                        <a class="dropdown-item" href="#">Pants</a>
                        <a class="dropdown-item" href="#">Shoes</a>
                        <a class="dropdown-item" href="#">Equipment</a>
                    </div>
                </li>
            </ul>
        </div>
        <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
            <ul class="navbar-nav">
                <!-- KANISHKA PLS FIX THIS LOL -->
                <li class="nav-item  my-auto" style="width:15vw;">
                    <form class="d-flex" style="float:right"  action="searchproducts.php" method="get">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search_data">
                            <input type="submit" class="btn btn-outline-primary" name="search_data_product" value="Search">
                    </form>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="login3.html">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="register3.html">Register</a>
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
        </form>
    </div>

    <!--Screen 1-->
    <div class="third-screen content-top font-blue" style="background-image: url(assets/equip1.jpg); background-size:cover;">

    </div>

    <!--Screen 2-->
    <div class="full-screen" style="height: auto">
        <div class="exceblock">
            <?php 
            getproducts();
            cart();
            ?>
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
                <td><a href="home3.html">Contact Us</a></td>
            </tr>
        </table>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
