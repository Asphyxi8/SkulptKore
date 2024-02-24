<?php
include('..\includes\connect.php');
if(isset($_POST['submit_brand'])){
    $brand_name=$_POST['brand_title'];
    $select_query="SELECT * FROM `brands` WHERE brand_title='$brand_name';";
    $result_select=mysqli_query($con,$select_query);+
    $num_rows=mysqli_num_rows($result_select);
    if($num_rows>0){
        echo"<script>alert('DUPLICATE BRAND')</script>";
    }
    else{
    $insert_query="INSERT INTO `brands`(`brand_title`) VALUES ('$brand_name')";
    $result=mysqli_query($con,$insert_query);
    if($result){
        echo "<script>alert('ADDED SUCCESSFULLY')</script>";
    }
}
}

?>





<form action="" method="post" class="mb-2">
<div class="input-group mb-3 py-2">
  <span class="input-group-text" id="basic-addon1">Brand:</span>
  <input type="text" class="form-control" name="brand_title" placeholder="Insert Brand">
</div>
<div class="input-group mb-3">
  <input type="submit" class="form-control" name="submit_brand" value="Insert">
</div>
</form>

