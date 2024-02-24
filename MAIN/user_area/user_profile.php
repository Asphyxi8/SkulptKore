  <!--Initial php Stuff-->
  <?php
include('..\includes\connect.php');
session_start();


if(!isset($_SESSION['user_username'])){
    include('user_login.php');
}
else{
$username = $_SESSION['user_username'];
$user_query = "Select * from `user_details` where username='$username'";
$result_query = mysqli_query($con,$user_query);
$row = mysqli_fetch_assoc($result_query);
$username=$row['username'];
$user_id = $row['user_id'];
get_user_order_details();
}
?>

<?php
function getIPAddress() {  
  //whether ip is from the share internet  
   if(!empty($_SERVER['HTTP_CLIENT_IP'])) {  
              $ip = $_SERVER['HTTP_CLIENT_IP'];  
      }  
  //whether ip is from the proxy  
  elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {  
              $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];  
   }  
//whether ip is from the remote address  
  else{  
           $ip = $_SERVER['REMOTE_ADDR'];  
   }  
   return $ip;  
}
?>

<?php
    function get_user_order_details(){
    global $con;
    $username_order = $_SESSION['user_username'];
    $get_details = "Select * from `user_details` where username = '$username_order'";
    $result_query = mysqli_query($con,$get_details);
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <style>
        .footer td{
            width: 8vw;
        }
    </style>
    <link rel="stylesheet" href="style3.css">
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

<!--Screen 1-->
<div class="half-screen back-blue">
  <div style="padding-left: 5%; padding-top: 2%; width: 50vw">
    <div class="text-big font-grey">
      User Details
    </div>
    <br><hr class="back-grey">
    <div style="padding-left: 4%">
      <div class="text-small-medium font-grey">Name: HAha</div>
      <div class="text-small-medium font-grey">Username: maybe</div>
      <div class="text-small-medium font-grey">Email: well</div>
    </div>
  </div>
</div>


<!--Screen 2-->
<div class="full-screen" style="height: auto">
  <div style="width: 65vw; margin: auto;">
    <hr>
    <div class="text-medium-big font-blue" style="text-align: right; padding-right: 3vw; ">Your Orders</div>
    <hr>
    <div class="text-medium font-blue" style="padding-left: 3vw;">Order History<span style="float: right;"><a href='user_profile.php?my_orders'>---Show Orders</a></span></div>
    <hr>
    <?php
    
    while($row_query=mysqli_fetch_array($result_query)){
        $user_id = $row_query['user_id'];
            $get_orders = "Select * from `orders` where user_id=$user_id and order_status='pending'";
            $result_orders = mysqli_query($con,$get_orders);
            $row_count = mysqli_num_rows($result_orders);
            if($row_count>0){
                echo "<div class='text-small-medium font-blue' style='padding-left: 6vw;'>You have '$row_count' pending orders</div>";
            }
            else{
                echo "<div class='text-small-medium font-blue' style='padding-left: 6vw;'>You have zero pending orders</div>";
                echo "<div class='text-small-medium font-blue' style='padding-left: 6vw;'><span style='float:right'><a href='..\Static pages 3\products3.php'>---Explore Products</a></span></div>";
                echo "<div class='separater' style='height:5vh'></div>";
            }
        }
    
    ?>
    <hr>
    <div class="text-medium-big font-blue" style="text-align: right; padding-right: 3vw; ">Your Excercises</div>
    <hr>
    <?php
        $ip=getIPAddress();
        $user_exercises = "Select * from `exercise_log` where user_id = $user_id";
        $run_user_exercises = mysqli_query($con,$user_exercises);
        $row_count_user_exercises = mysqli_num_rows($run_user_exercises);
        $plan_select = "Select * from `temp_exercise_log` where ip = '$ip'";
        $run_plan = mysqli_query($con,$plan_select);
        $num_run_plan = mysqli_num_rows($run_plan);
        if($num_run_plan>0){
            echo "<div class='text-small-medium font-blue' style='padding-left: 6vw;'>You have exercises in your plan yet to be logged</div>";
            echo "<div class='text-small-medium font-blue' style='padding-left: 6vw;'><span style='float:right'><a href = 'plan.php?'>---Go to plan</a></span></div>";
            
            echo "<div class='separater' style='height:5vh'></div>";
            
        }
        if($row_count_user_exercises>0){
            echo "<div class='text-small-medium font-blue' style='padding-left: 6vw;'>You have logged '$row_count_user_exercises' exercise sessions!</div>";
            echo "<div class='text-small-medium font-blue'><span style='float: right;'><a href='user_profile.php?my_exercise_log'>---Show Logged Exercises</a></span></div>";
            echo "<div class='separater' style='height:5vh'></div>";
        }
        else{
            echo "<div class='text-small-medium font-blue' style='padding-left: 6vw;'>You have not yet logged any exercises</div>";
            echo "<div class='text-small-medium font-blue' style='padding-left: 6vw;'><span style='float: right;'><a href ='..\Static pages 3\\exercise3.php'>---Try a workout!</a></span></div>";
            echo "<div class='separater' style='height:5vh'></div>";
        }
    }
?>
<hr>
</div>
</div>


<?php
    if(isset($_GET['my_orders'])){
        include('user_orders.php');
    }
    if(isset($_GET['my_exercise_log'])){
        include('user_exercises.php');
    }
?>

    
<!--Screen 3-->

<div class="full-screen back-blue">
  <div class="font-grey text-big" style="padding-left: 1%;">
    Your Stats
    <hr class= "back-purple" style="float: left; width: 80vw">
</div>
<?php
    $user_name = $_SESSION['user_username'];
    $get_details = "Select * from `user_details` where username = '$user_name'";
    $result_query = mysqli_query($con,$get_details);
    $row_query=mysqli_fetch_array($result_query);
    $user_id = $row_query['user_id'];
    $select_for_calendar = "SELECT DATE_FORMAT(`timestamp`, '%Y-%m-%d') AS `date` FROM `exercise_log` WHERE `user_id` = $user_id";

    $result = mysqli_query($con, $select_for_calendar);
    $timestamps = array();
    if (mysqli_num_rows($result) > 0) {
      while ($row = mysqli_fetch_assoc($result)) {
        $timestamps[] = strtotime($row['date']);
      }
    }

    $dates = array();
    foreach ($timestamps as $timestamp) {
      $date = date('Y-m-d', $timestamp);
      if (!isset($dates[$date])) {
        $dates[$date] = array();
      }
      $dates[$date][] = $timestamp;
    }

    // Get the current month and year
    $month = date('m');
    $year = date('Y');
    
    // Loop through each day of the current month
    $num_days = date('t', mktime(0, 0, 0, $month, 1, $year));
    $day_of_week = date('w', mktime(0, 0, 0, $month, 1, $year));
    $current_day = 1 - $day_of_week;
          
    echo "<table class='calendar'>";
    echo '<tr>';
    echo '<th style="width:6vw;">Sun</th><th style="width:6vw;">Mon</th><th style="width:6vw;">Tue</th><th style="width:6vw;">Wed</th><th style="width:6vw;">Thu</th><th style="width:6vw;">Fri</th><th style="width:6vw;">Sat</th>';
    echo '</tr>';

    for ($i = 0; $i < 6; $i++) {
        echo '<tr>';
        for ($j = 0; $j < 7; $j++) {
            if ($current_day < 1 || $current_day > $num_days) {
                echo '<td style="width:6vw;">&nbsp;</td>';
            } else {
                $date = date('Y-m-d', mktime(0, 0, 0, $month, $current_day, $year));
                $timestamp_links = '';
                if (isset($dates[$date])) {
                  foreach ($dates[$date] as $timestamp) {
                    $formatted_timestamp = date('Y-m-d', $timestamp);
                    $timestamp_links .= '<a href="timestamp.php?timestamp=' . $formatted_timestamp . '" target = "_blank"><i class="bi bi-bookmark" style="font-size: 2.7vh; position: absolute; transform:translate(90%,-55%);"></i> </a>';
                    break;
                  }
                }
                echo '<td style="width:6vw;';
                if (isset($dates[$date])) {
                    echo 'color: #FF5386;';
                }
                echo '"><strong>' . $current_day . '</strong>' . $timestamp_links . '</td>';
            }
            $current_day++;
        }
        echo '</tr>';
        if ($current_day > $num_days) {
            break;
        }
    }
    echo '</table>';
?>

<?php
// Step 1: Retrieve data from database
$start_date = date('Y-m-01'); // First day of current month
$end_date = date('Y-m-t'); // Last day of current month
$query = "SELECT DATE(timestamp) AS date, sum(count_exercises) AS count FROM exercise_log WHERE user_id = $user_id AND timestamp BETWEEN '$start_date' AND '$end_date' GROUP BY DATE(timestamp)";
$results = mysqli_query($con,$query);
echo $query;

// Step 2: Format the data
$data = [];
foreach ($results as $row) {
    $data[] = [
        'x' => $row['date'],
        'y' => $row['count']
    ];
}

// Step 3: Choose a graphing library
// For example, using Chart.js:
?>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
  <canvas id="myChart"></canvas>
  <script>
    var ctx = document.getElementById('myChart').getContext('2d');
    var chart = new Chart(ctx, {
        type: 'bar',
        data: {
            datasets: [{
                label: 'My Exercise Logs',
                data: <?php echo json_encode($data); ?>,
            }]
        },
        options: {
            scales: {
                xAxes: [{
                    type: 'time',
                    time: {
                        unit: 'day',
                        displayFormats: {
                            day: 'MMM D'
                        }
                    },
                    ticks: {
                        source: 'auto'
                    }
                }],
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
  </script>
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
</body>
</html>