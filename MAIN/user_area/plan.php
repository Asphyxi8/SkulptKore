
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plan</title>
    <style>
        .card-button-wrap{
            display: flex;
            justify-content: space-around;
        }
    </style>
    <link rel="stylesheet" href="style3.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />

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

    <div class="full-screen" style="height: auto;">
        <div style="width: 75vw; margin: auto;">
        <hr>
        <div class="text-medium-big font-blue" style="text-align: right; padding-right: 3vw; ">Your Plan</div>
        <hr>
        <?php
include('..\includes\connect.php');
include('..\functions\commonfuncts.php');
    $count = 0;
    $ip = getIPAddress();
    $query = "Select * from `temp_exercise_log` where ip = '$ip'";
    $result = mysqli_query($con,$query);
    $row_count = mysqli_num_rows($result);
    if($row_count>0){
    $exercises = array();
while ($row = mysqli_fetch_assoc($result)) {
$links = $row['e_link'];
$sets = $row['e_sets'];
$reps = $row['e_reps'];
    $e_name = $row['e_name'];
    $e_level = $row['e_level'];
    $e_equipment = $row['e_equipment'];
    echo"<div style='width:80vw;padding-top: 1%; margin: auto'>
    <div class='card' style='width: 100%; text-align: center; display:flex; flex-direction: row;margin:auto;'>
    <table style='width: 100%;'>
    <tr>
        <td style='width:30%'>
            <div class='card-body'>
                <div style='flex-direction: column; padding-left: 3vw'>
                    <h4 class='card-title'>$e_name</h4>
                    <h6 class='card-subtitle mb-2 text-muted'>$e_equipment</h6>
                </div>
            </div>
        </td>
        <td style='width:30%'>
            <div class='card-body' style='text-align:center'>
                <div style='flex-direction: column'>
                    <h5>$e_level</h5>
                    <h6 class='card-subtitle mb-2'>SETS:$sets</h6>
                    <h6 class='card-subtitle mb-2'>REPS:$reps</h6>
                </div>
            </div>
        </td>
        <td style='width:40%'>
            <div>
                <iframe width='400' height='200' src='$links' allowfullscreen></iframe>
            </div>
        </td>
    </tr>
    </table>
    </div>
</div>";
    $exercise = array('name' => $e_name, 'level' => $e_level, 'equipment' => $e_equipment);
    $count+=1;
    $exercises[] = $exercise;
}
$serialized_data = serialize($exercises);
    if(isset($_SESSION['user_username'])){
    echo "<div class='separater' style='height: 5vh'></div>
    <span style='float:right'><button class='button-35'><a href='plan.php?log'>LOG IT</a></button></span><br>
    <div class='separater' style='height: 10vh'></div>";
    }
    else{
        echo '<hr>';
        echo "<div class='text-small-medium font-blue'><span style='float:right;'>To log your exercises, you must first <a href='login3.php'>login</a></span></div>";
        echo '<div class="separater" style="height: 15vh;"></div>';

    }

if(isset($_GET['log'])){
    $username = $_SESSION['user_username'];
    $get_id = "Select * from `user_details` where username = '$username'";
    $result_get_id = mysqli_query($con,$get_id);
    $row_id = mysqli_fetch_assoc($result_get_id);
    $id = $row_id['user_id'];
    $query_log = "insert into `exercise_log`(user_id,log,count_exercises) values($id,'$serialized_data',$count)";
    $delete_query = "delete from `temp_exercise_log` where ip = '$ip'";
    $delete_query_log = mysqli_query($con,$delete_query);
    $run_query_log = mysqli_query($con,$query_log);
    echo "<script>alert('Logged!')</script>";
    echo "<script>window.open('user_profile.php','_self')</script>";

    
}

}
else{
    echo "<div class='text-small-medium font-blue' style='padding-left: 6vw;'>No Exercises</div><hr>";
    echo '<div class="text-small font-blue" style="padding-right: 6vw;"><span style="float: right;"><a href="..\Static pages 3\exercise3.php"> MAKE YOUR PLAN NOW!</a></span></div>';
    echo '<div class="separater" style="height: 15vh"></div>';
}
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
</body>
</html>