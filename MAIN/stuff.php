<?php 
include('includes/connect.php');
include('functions/commonfuncts.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Style.css -->
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="cart.php">Cart</a>
                        </li>
                        <li class="nav-item">
                            <?php if(!isset($_SESSION['user_username'])){
                                echo "<a href='user_area\user_login.php'>LOGIN</a>";
                            }
                            else{
                                echo "<a href='user_area\user_logout.php'>LOGOUT</a>";
                            }
                                ?>
                        </li>
                        <li class="nav-item">
                         <a href="user_area\user_profile.php">PROFILE</a>
                        </li>
                        <li class="nav-item">
                            <?php 
                            if(isset($_SESSION['user_username'])){
                                
                                echo "Welcome ";
                                echo $_SESSION['user_username'];
                            }
                            else{
                                echo "Welcome guest";
                            }

                            ?>
                        </li>
                    </ul>

                    <form class="d-flex" action="searchproducts.php" method="get">
                        <input style="width:30%" class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search_data">

                        <input type="submit" class="btn btn-outline-primary" name="search_data_product" value="Search">
                    </form>
                </div>
            </div>
        </nav>

        <div class="row">
            <!-- Products -->
            <div class="col-md-10">
              <div class="row">
           
<?php
cart();
getproducts();

?>
            </div>
</div>


            <!-- Sidenav -->
            <div class="col-md-2" style="position:fixed;right:0%;">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="" class="nav-link bg-info text-center">
                            <h2>Brands</h2>
                        </a>
                    </li>
                    <?php
          getbrands();
          ?>
                    <li class="nav-item">
                        <a href="" class="nav-link bg-info text-center">
                            <h2>Categories</h2>
                        </a>
                    </li>
                    <?php
getcats();

          
          ?>
                </ul>
            </div>
        </div>

        <div class="bg-info p-0 text-center">
            footer
        </div>



        <!-- Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>