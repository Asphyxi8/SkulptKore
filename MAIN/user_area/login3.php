<?php
include('..\includes\connect.php');
include('..\functions\commonfuncts.php');
@session_start();
?>
<?php
if(isset($_POST['login'])){
    $ip = getIPAddress();
    $user_username=$_POST['user_username'];
    $user_password=$_POST['user_password'];
    $check_login = "Select * from `user_details` where username = '$user_username'";
    $result = mysqli_query($con,$check_login);
    $row_count = mysqli_num_rows($result);
    $row_data = mysqli_fetch_assoc($result);
    $query_cart = "Select * from `cart_details` where ip_address = '$ip'";
    $select_cart = mysqli_query($con,$query_cart);
    $row_count_cart = mysqli_num_rows($select_cart);
    $query_ex = "Select * from `temp_exercise_log` where ip = '$ip'";
    $result_ex = mysqli_query($con,$query_ex);
    $row_count_ex = mysqli_num_rows($result_ex);
    if($row_count>0){
        $_SESSION['user_username'] = $user_username;
        if(password_verify($user_password,$row_data['user_password'])){
            $id=$row_data['user_id'];
            $select_from_user_exercises = "SELECT * FROM `exercise_log` where user_id=$id order by timestamp desc";
            $run_select_user_exercises = mysqli_query($con,$select_from_user_exercises);
            $row_run_user_exercises = mysqli_fetch_assoc($run_select_user_exercises);
            $row_timestamp = $row_run_user_exercises['timestamp'];
            $db_timestamp = strtotime($row_timestamp);


            $current_timestamp = strtotime(date('Y-m-d H:i:s'));
            
            // Calculate the difference in seconds
            $diff_seconds = $current_timestamp - $db_timestamp;
            
            // Calculate the difference in days
            $diff_days = floor($diff_seconds / 86400);
            if($diff_days<0){
                $diff_days = 0;
            }
            if(
                $diff_days>=5
            )
            {
            echo "<script>alert('You last logged your exercises $diff_days ago, we encourage you to log in more often and work out!')</script>";
            }

            if($row_count == 1 and $row_count_cart==0){
                if($row_count_ex>0){
                    $_SESSION['user_username'] = $user_username;
                    echo "<script>alert('login successful')</script>";
                    echo "<script>window.open('plan.php', '_self')</script>";
                }
                else{
                $_SESSION['user_username'] = $user_username;
                echo "<script>alert('login successful')</script>";
                echo "<script>window.open('user_profile.php', '_self')</script>";
                }
            }
            else{
                $_SESSION['user_username'] = $user_username;
                echo "<script>alert('login successful')</script>";
                echo "<script>alert('you have items in your cart')</script>";
                echo "<script>window.open('payment.php','_self')</script>";
            }
        }
        else{
            echo "<script>alert('invalid credentials')</script>";
        }
    }else{
        echo "<script>alert('invalid credentials')</script>";
    }


}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login3</title>
    <link rel="stylesheet" href="style3.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script type="module" src="https://ajax.googleapis.com/ajax/libs/model-viewer/3.0.1/model-viewer.min.js"></script>
</head>
<body>
    <!--Navbar-->
    <nav class="navbar sticky-top navbar-expand-lg navbar-custom">
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="navbar-brand" href="..\Static pages 3\home3.html">Logo Space</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="..\Static pages 3\home3.html">Home</a>
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
                        <a class="dropdown-item" href="..\Static pages 3\exercise3.html">Customize</a>
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

    <!--Screen 1-->
    <div class="full-screen" style="display: flex;justify-content: right;align-items: center;">
        <div class="form-box-login">
            <div id="login1">
                <model-viewer alt="blob8" src="assets/blob8.gltf" ar auto-rotate rotation-per-second="20deg"></model-viewer>
            </div>
            <div class="form-text">
                <div class="text-big">
                    Login
                </div>
                <br><br>
                <form method="post">
                    <div class="row">
                        <div class="col">
                            <input type="text" class="form-control form-control-lg" placeholder="Username" name="user_username">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col">
                            <input type="text" class="form-control form-control-lg" placeholder="Password" name="user_password">
                        </div>
                    </div>
                    <br><br>
                    <div style="display:flex; justify-content:center;">
                        <input type="submit" class="sub-button" style="display:flex;justify-self:center;" name="login" value="Login">
                    </div>
                    <br><br>
                    <div style="display: flex; justify-content: center; position: relative; transform: translate(0%,250%);">
                        <a href="register3.html" class="text-small">Don't have an account? Register</a>
                    </div>
                </form>
                
            </div>
        </div>
    </div>

    <!--Screen 2-->


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
