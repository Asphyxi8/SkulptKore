<?php
include('..\includes\connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <!-- Bootstrap -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Style.css -->
    <link rel="stylesheet" href="C:\xampp\htdocs\musicstore\style.css">
</head>
<body>
    <div class="container mt-3">
        <h1 class="text-center">Insert Products</h1>
        <form action="" method="post" enctype="multipart/form-data" class="w-50 text-center m-auto">
            <div class="form-group">
                <label for="product_title" class="form-label">Product Title
                </label>
                <input type="text" name="product_title" id="product_title" class="form-control" placeholder="Product Title" required="required">

            </div>
            <div class="form-group">
                <label for="product_desc" class="form-label">Product Description
                </label>
                <input type="text" name="product_desc" id="product_desc" class="form-control" placeholder="Product Description" required="required">
                
            </div>
            <div class="form-group">
                <label for="product_keyword" class="form-label">Product keyword
                </label>
                <input type="text" name="product_keyword" id="product_keyword" class="form-control" placeholder="Product keyword" required="required">
                
            </div>

            <div class="form-group">
            <label for="product_brand" class="form-label">Product brand
                </label>
                <select name="product_brand" class="form-select">
                <option value="">Select a brand</option> 
                <?php
                $select_query="Select * from `brands`";
                $result=mysqli_query($con,$select_query);
                while($row=mysqli_fetch_assoc($result)){
                    $brand_title=$row['brand_title'];
                    $brand_id=$row['brand_id'];
                 echo "<option value='$brand_id'>$brand_title</option>";
                }
                ?> 
            </select>
            </div>
            <div class="form-group">
            <label for="product_category" class="form-label">Product categories
                </label>
                <select name="product_category" class="form-select">
                <option value="">Select a category</option> 
                <?php
                $select_query="Select * from `categories`";
                $result=mysqli_query($con,$select_query);
                while($row=mysqli_fetch_assoc($result)){
                    $category_title=$row['category_title'];
                    $category_id=$row['category_id'];
                 echo "<option value='$category_id'>$category_title</option>";
                }
                ?> 
            </select>
            </div>

            <div class="form-group">
                <label for="product_image" class="form-label">Product image
                </label>
                <input type="file" name="product_image" id="product_image" class="form-control"required="required">
                
            </div>

            <div class="form-group">
                <label for="product_price" class="form-label">Product price
                </label>
                <input type="text" name="product_price" id="product_price" class="form-control" placeholder="Product price" required="required">
                
            </div>

            <input type="submit" name="insert_product" value="insert product" class="btn btn-info mt-3">
        </form>
    </div>
    <?php
    if(isset($_POST['insert_product'])){
        $product_title=$_POST['product_title'];
        $product_desc=$_POST['product_desc'];
        $product_keyword=$_POST['product_keyword'];
        $product_brand=$_POST['product_brand'];
        $product_category=$_POST['product_category'];

        $product_price=$_POST['product_price'];
        $product_status="true";

        //images:
        $product_image=$_FILES['product_image']['name'];
        //temp_name_images:
        $temp_image=$_FILES['product_image']['tmp_name'];
        if($product_title=='' or $product_desc=='' or $product_keyword=='' or $product_brand=='' or $product_category=='' or $product_price=='' or  $product_image==''){
            echo '<script>alert("PLEASE FILL ALL THE FIELDS!")</script>';
            exit();
        }
        else{
            move_uploaded_file($temp_image,"./product_images/$product_image");
            $insert_query="insert into `products` (product_title,product_desc,product_keywords,category_id,brand_id,product_image,product_price,date,status) values('$product_title','$product_desc','$product_keyword','$product_category','$product_brand','$product_image','$product_price',NOW(),'$product_status')";
            $result=mysqli_query($con,$insert_query);
            if($result){
                echo '<script>alert("Product added!")</script>';
                exit();
            }
        }
    }
    ?>
</body>
</html>