<?php
include('..\includes\connect.php');
include('..\functions\commonfuncts.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirm Payment</title>
    <link rel="stylesheet" href="style3.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script type="module" src="https://ajax.googleapis.com/ajax/libs/model-viewer/3.0.1/model-viewer.min.js"></script>
</head>
<body>
    <?php
if(isset($_GET['order_id'])){
    $order_id = $_GET['order_id'];
    $select = "Select * from `orders` where order_id = $order_id";
    $result = mysqli_query($con,$select);
    $row = mysqli_fetch_assoc($result);
    $invoice_number = $row['invoice_number'];
    $amount_due = $row['amount_due'];

}
if(isset($_POST['submit'])){
    $amount = $_POST['amount'];
    $payment_mode = $_POST['payment_mode'];
    $invoice_number = $_POST['invoice_number'];
    $insert_query = "Insert into `user_payments` (order_id,invoice_number,amount,payment_mode) values($order_id,$invoice_number,$amount,'$payment_mode')";
    $result_query =mysqli_query($con,$insert_query);
    if($result_query){
        echo "<script>window.open('user_profile.php','_self')</script>";
    }
    $update = "Update `orders` set order_status = 'complete' where order_id = $order_id";
    $result_update = mysqli_query($con,$update);    

}
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
    <div class="full-screen" style="display: flex;justify-content: right;align-items: center;">
        <div class="form-box-payment">
            <div class="form-text">
                <div class="text-medium-big">
                    Confirm Payment
                </div>
            <br><br>
            <form method="post">
                <div class="row" style="padding-left: 3vw;">
                    <div class="col">
                        <?php
                        echo '<div class="text-small-medium font-blue">Invoice Number: &nbsp;&nbsp; <span style="background-color: white; padding: 5px; border-radius: 1vh">'.$invoice_number.'</span></div>' ;
                        ?>
                    </div>
                </div>
                <br>
                <div class="row" style="padding-left: 3vw;">
                    <div class="col">
                        <?php
                        echo '<div class="text-small-medium font-blue">Amount Payable: &nbsp;&nbsp;<span style="background-color: white; padding: 5px; border-radius: 1vh">$'.$amount_due.'</span></div>' ;
                        ?>
                    </div>
                </div>
                <br><br><br>
                <div class="row" style="padding-left: 3vw;">
                    <div class="col">
                    <label for ="payment_mode" >
                    <select id = "payment_mode" name="payment_mode" style="width: 25vw; text-align: center;" class="form-control form-control-lg">
                        <option value="">Select Payment Mode</option>
                        <option value="UPI">UPI</option>
                        <option value="Netbanking">Netbanking</option>
                        <option value="PayPal">PayPal</option>
                        <option value="COD">Cash On Delivery</option>
                        <option value="OfflineMode">Pay Offline</option>
                    </select><br>
                    </div>
                </div>
                <br><br>
                <div style="padding-left: 9vw;">
                    <input type="submit" class="sub-button" value="Confirm" name = "submit">
                </div>
                <br><br>           
            </form>
            </div>
        </div>
    </div>
</div>



</body>
</html>