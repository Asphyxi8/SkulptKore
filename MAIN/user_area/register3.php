<?php
include('..\includes\connect.php');
include('..\functions\commonfuncts.php');
?>
<?php
$usernameErr = $emailErr = $passwordErr = $confirmPasswordErr = $addressErr = $phoneErr = "";
    ?>

<?php
if(isset($_POST['register'])){
    $user_username = $_POST['user_username'];
    $user_email = $_POST['user_email'];
    $user_password = $_POST['user_password'];
    $user_confirm_password = $_POST['user_confirm_password'];
    $user_address = $_POST['user_address'];
    $user_phone_number = $_POST['user_phone_number'];
    $hash_password = password_hash($user_password,PASSWORD_DEFAULT);
    $ip = getIPAddress();
 // Validate username
 if (empty($user_username)) {
    $usernameErr = "Username is required";
} 

// Validate email
if (empty($user_email)) {
    $emailErr = "Email is required";
} elseif (!filter_var($user_email, FILTER_VALIDATE_EMAIL)) {
    $emailErr = "Invalid email format";
}

// Validate password
if (empty($user_password)) {
    $passwordErr = "Password is required";
}

// Validate confirm password
if (empty($user_confirm_password)) {
    $confirmPasswordErr = "Confirm password is required";
} elseif ($user_password != $user_confirm_password) {
    $confirmPasswordErr = "Passwords do not match";
}

// Validate address
if (empty($user_address)) {
    $addressErr = "Address is required";
}

// Validate phone number
if (empty($user_phone_number)) {
    $phoneErr = "Phone number is required";
} elseif (!ctype_digit($user_phone_number) || strlen($user_phone_number) != 10) {
    $phoneErr = "Invalid phone number format";
}

// If there are no errors, proceed with registration
if (empty($usernameErr) && empty($emailErr) && empty($passwordErr) && empty($confirmPasswordErr) && empty($addressErr) && empty($phoneErr)) {
    $user_username_query = "Select * from `user_details` where username = '$user_username'";
    $user_email_query = "Select * from `user_details` where user_email = '$user_email'";
    $result1 =mysqli_query($con,$user_email_query);
    $result = mysqli_query($con,$user_username_query);
    $rows_count = mysqli_num_rows($result);
    $rows_count1= mysqli_num_rows($result1);

    if($rows_count>0 and $rows_count1>0){
        echo "<script>alert('Username and Email Already Exist')</script>";
    } 
    elseif($rows_count>0){
        echo "<script>alert('Username already exists')</script>";
    }
    elseif($rows_count1>0){
        echo"<script>alert('Email already exists')</script>";
    }
    elseif($user_password!=$user_confirm_password){
        echo"<script>alert('Passwords do not match')</script>";

    }
    else{
    $query = "insert into `user_details` (username,user_email,user_password,user_ip,user_address) values('$user_username','$user_email','$hash_password','$ip','$user_address')";
    $result_insert = mysqli_query($con,$query);
    echo"<script>alert('User added')</script>";
    echo"<script>window.open('login3.php','_self')</script>";
    }

    $select_cart_items = "Select * from `cart_details` where ip_address = '$ip'";
    $result_cart = mysqli_query($con,$select_cart_items);
    $rows_count3 = mysqli_num_rows($result_cart);
    if($rows_count3>0){
        echo "<script>alert('You have items in your cart')</script>";
        echo "<script>window.open('user_checkout.php','_self')</script>";
    }
}

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register3</title>
    <link rel="stylesheet" href="style3.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <!--Navbar-->
    <nav class="navbar sticky-top navbar-expand-lg navbar-custom">
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="navbar-brand" href="home3.html">Logo Space</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="home3.html">Home</a>
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
                        <a class="dropdown-item" href="exercise3.html">Customize</a>
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
        <div class="form-box-register">
            <div class="form-text">
                <div class="text-big">
                    Register
                </div>
                <br><br>
                <form method="post">
                    <div class="row">
                        <div class="col">
                            <input type="text" class="form-control form-control-lg" placeholder="Username" value="<?php if(isset($user_username)){ echo $user_username; }?>" name="user_username">
                            <?php echo $usernameErr; ?>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control form-control-lg" placeholder="Address" name="user_address" value="<?php if(isset($user_address)){ echo $user_address;} ?>">
                            <?php echo $addressErr; ?>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col">
                            <input type="text" class="form-control form-control-lg" placeholder="Email" name="user_email" value="<?php if(isset($user_email)){ echo $user_email;} ?>">
                            <?php echo $emailErr; ?>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control form-control-lg" placeholder="Phone Number" name="user_phone_number" value="<?php if(isset($user_number)){ echo $user_phone_number;}?>">
                            <?php echo $phoneErr; ?>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col">
                            <input type="text" class="form-control form-control-lg" placeholder="Password" name="user_password" value="<?php if(isset($user_password)){ echo $user_password;} ?>">
                            <?php echo $passwordErr; ?>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control form-control-lg" placeholder="Confirm Password" name="user_confirm_password" value="<?php if(isset($user_confirm_password)){ echo $user_confirm_password;} ?>">
                            <?php echo $confirmPasswordErr; ?>
                        </div>
                    </div>
                    <br><br>
                    <div style="display:flex; justify-content:center;">
                        <input type="submit" name="register" value="Register" class="sub-button" style="display:flex;justify-self:center;">
                    </div>
                    <br><br>
                    <div style="display: flex; justify-content: center; position: relative; transform: translate(0%,130%);">
                        <a href="login3.html" class="text-small">Already a member? Login</a>
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
