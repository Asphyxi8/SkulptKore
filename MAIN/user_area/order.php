<?php
include('..\includes\connect.php');
include('..\functions\commonfuncts.php');
if(isset($_GET['user_id'])){
    $user_id=$_GET['user_id'];
}
    $ip = getIPAddress();
    $total_price = 0;
    $cart_query_price = "Select * from `cart_details` where ip_address = '$ip'";
    $result_cart_price = mysqli_query($con,$cart_query_price);
    $count_products = mysqli_num_rows($result_cart_price);
    while($row_price = mysqli_fetch_array($result_cart_price)){
        $product_id = $row_price['product_id'];
        $quantity = $row_price['quantity'];
if($quantity==0){
    $quantity=1;
}
else{
    $quantity=$quantity;
}
        $invoice_number = mt_rand();
        $status = 'pending';
        

        $select_product="Select * from `products` where product_id = '$product_id'";
        $run_price = mysqli_query($con,$select_product);
        while($row_product_price=mysqli_fetch_array($run_price)){
            $product_price = array($row_product_price['product_price']);
            $product_price_sum = array_sum($product_price);
            $total_price += $product_price_sum*$quantity;

        }

    }

$insert_orders  = "insert into `orders` (user_id,amount_due,invoice_number,total_products,order_date,order_status) values($user_id,$total_price,$invoice_number,$count_products,NOW(),'$status')";
$result_query = mysqli_query($con,$insert_orders);
if($result_query){
    echo "<script>alert('ORDER SUBMITTED!')</script>";
    echo "<script>window.open('user_profile.php','_self')</script>";
}

$pending_orders  = "insert into `pending_orders` (user_id,invoice_number,product_id,quantity,order_status) values($user_id,$invoice_number,$product_id,$quantity,'$status')";
$result_pending_orders = mysqli_query($con,$pending_orders);

$empty_cart = "Delete from `cart_details` where ip_address='$ip'";
$empty_result = mysqli_query($con,$empty_cart);
?>