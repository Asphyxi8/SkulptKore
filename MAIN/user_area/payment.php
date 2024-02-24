<?php
include('..\includes\connect.php');
include('..\functions\commonfuncts.php');
@session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
    <link rel="stylesheet" href="style3.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

<?php
    $ip = getIPAddress();
    $user_name = $_SESSION['user_username'];
    $get_user = "Select * from `user_details` where username = '$user_name'";
    $result = mysqli_query($con,$get_user);
    $row_data = mysqli_fetch_assoc($result);
    $user_id = $row_data['user_id'];
?>
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
                    <a class="nav-link" href="register3.html"><i class="bi bi-handbag" style="font-size: 4vh"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="register3.html"><i class="bi bi-person" style="font-size: 4vh"></i></a>
                </li>
            </ul>
        </div>
    </nav>

<div class="full-screen">
    <div class="content-block" style="height: 50vh; border-radius: 5vh; border: 1px solid black; box-shadow: 12px 12px 2px 1px rgba(0, 0, 255, .2); ; position: absolute; left: 50%; top: 50%; transform: translate(-50%,-50%);">
        <div class="text-medium-big font-blue" style="text-align: center">
            Choose  A  Payment  Option
        </div>
        <hr class="back-gray" style="height:0.5vh;"><hr class="back-gray" style="height:0.5vh">
        <br><br>
        <div style="height: 50%; width: 50vw; margin: auto;">
            <div style=" margin: auto;">
                <div class="font-blue text-medium">Pay Online <span style="float: right;"><a href="https://www.paypal.com">Click Here</a></span></div>
                <div class="font-blue text-medium">Pay On Delivery <span style="float: right;"><a href="order.php?user_id=<?php echo $user_id ?>">Pay Offline</a></span></div>
            </div>
        </div>
    </div>
</div>
</body>
</html>