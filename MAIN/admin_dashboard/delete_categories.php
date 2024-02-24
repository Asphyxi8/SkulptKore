<?php
include('..\includes\connect.php');
if(isset($_POST['del_cat'])){
    $cat_name=$_POST['del_cat_title'];
    $select_query="SELECT * FROM `categories` WHERE category_title='$cat_name';";
    $result_select=mysqli_query($con,$select_query);
    $num_rows=mysqli_num_rows($result_select);
    if($num_rows==0){
        echo"<script>alert('NO SUCH CATEGORY')</script>";
    }
    else{
    $insert_query="DELETE FROM `categories` WHERE category_title='$cat_name';";
    $result=mysqli_query($con,$insert_query);
    if($result){
        echo "<script>alert('DELETED SUCCESSFULLY')</script>";
    }
}
}

?>



<form action="" method="post" class="mb-2">
<div class="input-group mb-3 py-2">
  <span class="input-group-text" id="basic-addon1">Category:</span>
  <input type="text" class="form-control" name="del_cat_title" placeholder="Delete Category">
</div>
<div class="input-group mb-3">
  <input type="submit" class="form-control" name="del_cat" value="Delete">
</div>
</form>

