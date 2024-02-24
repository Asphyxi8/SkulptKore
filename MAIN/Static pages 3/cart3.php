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
    <title>Cart3</title>
    <style>

/* CSS */
.button-23 {
  background-color: #FFFFFF;
  border: 1px solid #222222;
  border-radius: 8px;
  box-sizing: border-box;
  color: #222222;
  cursor: pointer;
  display: inline-block;
  font-family: Circular,-apple-system,BlinkMacSystemFont,Roboto,"Helvetica Neue",sans-serif;
  font-size: 16px;
  font-weight: 600;
  line-height: 20px;
  margin: 0;
  outline: none;
  padding: 13px 23px;
  position: relative;
  text-align: center;
  text-decoration: none;
  touch-action: manipulation;
  transition: box-shadow .2s,-ms-transform .1s,-webkit-transform .1s,transform .1s;
  user-select: none;
  -webkit-user-select: none;
  width: auto;
}

.button-23:focus-visible {
  box-shadow: #222222 0 0 0 2px, rgba(255, 255, 255, 0.8) 0 0 0 4px;
  transition: box-shadow .2s;
}

.button-23:active {
  background-color: #F7F7F7;
  border-color: #000000;
  transform: scale(.96);
}

.button-23:disabled {
  border-color: #DDDDDD;
  color: #DDDDDD;
  cursor: not-allowed;
  opacity: 1;
}
    </style>
    <link rel="stylesheet" href="..\user_area\style3.css">
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

    <!--Screen 1-->
    <div class="third-screen back-blue" style="height: 15vh;">
        <div class="text-heading content-center font-purple">
            Items
        </div>
    </div>

    <!--Separater-->
    <div class="third-screen" style="height: 10vh;">
 </div>
   
    <!--Screen 2-->
    <form method="post">
    <div class="full-screen" style="height:auto">
        <div class="content-block" style=" padding-top: 2vh; padding-bottom: 2vh; border-radius: 2vh; border: 1px solid #BFBFBF; box-shadow: 0px 0px 20px #00000062;">
        <?php
    global $con;
    $ip = getIPAddress();
    $total = 0;
    $query = "Select * from `cart_details` where ip_address = '$ip'";
    $result = mysqli_query($con,$query);
    $num_rows_result = mysqli_num_rows($result);
    if($num_rows_result>0){
        echo '<table class="cart" style="width: 95%; margin: auto; text-align: center; transform: translate(-2%,0)">';
        echo '<tr class="text-small">
        <th> </th>
        <th>Name</th>
        <th>Price</th>
        <th>Quantity</th>
        <th colspan="2">Select to Delete</th>
        </tr>';
    while($row = mysqli_fetch_array($result)){
      $product_id = $row['product_id'];
      $quantity = $row['quantity'];
      $select= "Select * from `products` where product_id='$product_id'";
      $result_products=mysqli_query($con,$select);
      while($row_product = mysqli_fetch_array($result_products)){
        $product_title = $row_product['product_title'];
        $product_image = $row_product['product_image'];
        $product_price = array($row_product['product_price']);
        $price_table = $row_product['product_price'];
        $product_values = array_sum($product_price);
        $total += $product_values*$quantity;
        echo"
        <tr style='height: 12vh;'>
        <td>
            <img style = 'border-radius: 1vh; height: 10vh' src='..\admin_dashboard\product_images\\$product_image'></td>
            <td><div class='text-small'>$product_title</div></td>
            <td><div class='text-small'>$price_table</div></td>
            <td><input type='number' class='text-small' style='width:15vw;' name='qty[]' value='$quantity'></td>
            <input type='hidden' name='id_to_update[]' value='$product_id'>
            <td><input type = 'checkbox' name = 'iditem[]' value=' ";
        echo $product_id."'";
        echo "</td></tr>";
      }
      
    }

    echo '</table>';
}

else{
    echo 'YOU HAVE NO ITEMS IN YOUR CART';
}
    ?>
        </div>
    </div>
    <div class="content-block">
        <?php
        echo "<br><span style='float:right;'><input type='submit' value='update' name='update_cart' class='button-23'>
        <input type='submit' value='remove' name='remove_cart' class='button-23'></span><br>";
        ?>
    </div>
</form>

    <!-- WELL -->
    <div class="separater">
        
    </div>

    <!--Separater-->
    <div class="third-screen" style="background-color: transparent; height: 5vh;">    </div>

    <!--Screen 3-->

    <div class="third-screen" style="height:auto">
        <div class="content-block" style="display: flex;justify-content: right;">
            <div class="total-price" style="border-radius: 2vh; padding: 3%">
                <div class="text-small-medium">
                    <p>Subtotal:<span style="float: right;"><?php echo $total ?></span></p>
                    <p>Discount:<span style="float: right;"><?php $discount = 0.10*$total; echo $discount; ?></span></p>
                    <p>Taxes:<span style="float: right;"><?php $total = $total-$discount; $taxes = 0.18*$total; echo $taxes; ?> </span></p>
                    <p>Total:<span style="float: right;"><?php $total = $total + $taxes; echo $total;?></span></p><hr>
                    <p><a href='products3.php'><button class="button-35">Continue Shopping</button></a>
                    <span style="float:right"><a href='../user_area/user_checkout.php'><button class="button-35">Proceed To Checkout</button></a></span></p>
                </div>
            </div>
        </div>
    </div>

    <!--Separater-->
    <div class="third-screen" style="background-color: transparent; height: 5vh;">    </div>

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
<?php

function remove_cart(){
    global $con;
if(isset($_POST['remove_cart'])){
        foreach($_POST['iditem'] as $remove_id){
            $delete_query = "Delete from `cart_details` where product_id = '$remove_id'";
            $result_run_delete = mysqli_query($con,$delete_query);
            if($result_run_delete){
                echo "<script>window.open('cart3.php','_self')</script>";
            }
        }
    }
}
remove_cart();
$get_ip = getIPAddress();

if(isset($_POST['update_cart'])){
    $array_id = $_POST['id_to_update'];
    $array_qty = $_POST['qty'];
    $length = count($array_id);
    for ($i = 0; $i < $length; $i++) {
        $update_id = $array_id[$i];
        $update_qty = $array_qty[$i];
        $update_cart = "Update `cart_details` set quantity = '$update_qty' where product_id = '$update_id'";
        $result_cart_update_query = mysqli_query($con,$update_cart);
}
$run_cleaning_query = "DELETE from `cart_details` where quantity = 0";
$running_cleaning_query = mysqli_query($con,$run_cleaning_query);
echo "<script>window.open('cart3.php','_self')</script>";
}

?>

</body>
</html>