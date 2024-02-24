<?php
include('..\includes\connect.php');
session_start();

$timestamp = $_GET['timestamp'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Timestamp</title>
    <link rel="stylesheet" href="style3.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script type="module" src="https://ajax.googleapis.com/ajax/libs/model-viewer/3.0.1/model-viewer.min.js"></script>
    <style>
        .exercises th{
            text-align: center;
        }
    </style>
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
    <div class="third-screen back-blue content-center" style="height: 20vh">
        <div style="text-align: center;">
            <div class="text-medium-big font-purple">
                Excercise Records
            </div>
            <div class="text-medium font-purple">
                <?php
                    echo $timestamp;
                ?>
            </div>
        </div>
    </div>

    <!--Screen 2-->
    <div class="full-screen" style="height: auto;">
        <div class="content-block">
            <div style="width:100%; height:auto; border-radius: 5vh; padding-top: 2vh; "><br>
            <?php
                $user_name = $_SESSION['user_username'];
                $select_query = "Select * from `user_details` where username = '$user_name'";
                $run_query = mysqli_query($con,$select_query);
                $user_row = mysqli_fetch_assoc($run_query);
                $user_id = $user_row['user_id'];
                if(isset($_GET['timestamp'])){
                $timestamp = $_GET['timestamp'];
                $count = 1;
                $time_query = "Select * from `exercise_log` where user_id = $user_id and timestamp like '%$timestamp%'";
                $run_time_query = mysqli_query($con,$time_query);
                while($row = mysqli_fetch_assoc($run_time_query)){
                    echo "<div class='font-blue text-small'>$count".'.</div>';
                    echo "<div style='border-radius: 5vw; width: 65vw; margin: auto;box-shadow: rgba(0, 0, 0, 0.4) 0px 2px 4px, rgba(0, 0, 0, 0.3) 0px 7px 13px -3px, rgba(0, 0, 0, 0.2) 0px -3px 0px inset;'>";
                    echo "<table class='exercises text-small' style = 'width: 100%;'><tr>
                    <th>Name</th><th>Level</th><th>Equipment</th></tr>";
                    $serialized_data = $row['log'];
                    $exercises = unserialize($serialized_data);
                    $array_length = count($exercises);
                    foreach ($exercises as $exercise) {
                        echo "<tr>";
                        echo "<td>{$exercise['name']}</td>";
                        echo "<td>{$exercise['level']}</td>";
                        echo "<td>{$exercise['equipment']}</td>";
                        echo "</tr>";
                    }
                    echo "</table></div><br><br>";
                    $count++;
                    }
                }
            ?>
            </div>
        </div>
    </div>
    <div class="separater"></div>

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
</body>
</html>