<?php
include '../includes/connect.php';
include '../functions/commonfuncts.php';
?>
<?php

session_start();
session_unset();
session_destroy();
$ip = getIPAddress();
$delete_query = "DELETE from `temp_exercise_log` where ip = '$ip'";
$run_delete_query = mysqli_query($con,$delete_query);
$delete_query2=" DELETE from `cart_details` where ip_address = '$ip'";
$run_delete_query2=mysqli_query($con,$delete_query2);
echo "<script>window.open('../Static pages 3/home3.php','_self')</script>";


?>