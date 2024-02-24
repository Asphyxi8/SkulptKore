


<form action="" method="post" class="mb-2">
<div class="input-group mb-3 py-2">
  <span class="input-group-text p-2" id="basic-addon1">Category:</span>
  <input type="text" class="form-control" name="category_title" placeholder="Insert Category">
</div>
<div class="input-group mb-3">
  <input type="submit" class="form-control bg-info" name="submit_category" value="Insert">
</div>
</form>

<?php
include('..\includes\connect.php');
if(isset($_POST['submit_category'])){
    $category_name=$_POST['category_title'];
    $select_query="SELECT * FROM `categories` WHERE category_title='$category_name';";
    $result_select=mysqli_query($con,$select_query);
    $num_rows=mysqli_num_rows($result_select);
    if($num_rows>0){
        echo"<script>alert('DUPLICATE CATEGORY')</script>";
    }
    else{
    $insert_query="INSERT INTO `categories`(`category_title`) VALUES ('$category_name')";
    $result=mysqli_query($con,$insert_query);
    if($result){
        echo "<script>alert('ADDED SUCCESSFULLY')</script>";
    }
}
}

?>