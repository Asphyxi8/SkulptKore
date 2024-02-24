<?php
include('..\includes\connect.php');
if(isset($_POST['delete_everything'])){
    $delete_query="TRUNCATE `brands`";
    $delete_query1="TRUNCATE `categories`";
    mysqli_query($con,$delete_query);
    mysqli_query($con,$delete_query1);
    echo "<script>alert('cleared')</script>";
}

?>





<form action="" method="post" class="mb-2">
<label class="bg-warning warning">WARNING! WILL DELETE EVERYTHING FROM THE DATABASE</label>
  <input type="submit" class="form-control" name="delete_everything" value="Delete Anyways">
</div>
</form>

