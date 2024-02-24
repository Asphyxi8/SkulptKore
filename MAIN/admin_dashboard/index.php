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
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg navbar-light bg-info">
        <div class="container-fluid">    "SkulptKoreLogo"
        <nav class="navbar navbar-expand-lg">
            <ul class="navbar-nav">
                <li class="navbar-item">
                    <a href="" class="nav-link">Welcome Guest</a>
                </li>
            </ul>
        </nav>
</div>
</div>


<div class="bg-light text-center p-2">
    Manage Details
</div>

<div class="row bg-dark text-light p-2 align-items-center">
    <div class="col-md-12 bg-secondary">
        <div class="button text-center align-items-center py-2">
        <button><a href="index.php?insert_category" class="nav-link bg-info text-light px-2">Insert Categories</a></button>
        <button><a href="index.php?insert_brand" class="nav-link bg-info text-light px-2">Insert Brands</a></button>
        <button><a href="index.php?dispbrndcat" class="nav-link bg-info text-light px-2">Display Brands and Categories</a></button>
        <button><a href="index.php?deletecat" class="nav-link bg-info text-light px-2">Delete Category</a></button>
        <button><a href="index.php?deletebrand" class="nav-link bg-info text-light px-2">Delete Brand</a></button>
        <button><a href="index.php?deleteall" class="nav-link bg-info text-light px-2">Clear Database</a></button>
        <button><a href="insert_product.php" class="nav-link bg-info text-light px-2">Insert Product</a></button>

        
        </div>
    </div>
</div>



<div class="container">
    <?php 
    if(isset($_GET['insert_category'])){
        include('insert_categories.php');
    }
    if(isset($_GET['insert_brand'])){
        include('insert_brands.php');
    }
    if(isset($_GET['dispbrndcat'])){
        include('display_brands_and_categories.php');
    }
    if(isset($_GET['deletebrand'])){
        include('delete_brands.php');
    }
    if(isset($_GET['deletecat'])){
        include('delete_categories.php');
    }
    if(isset($_GET['deleteall'])){
        include('delete_all.php');
    }
    ?>
</div>

 <!-- Bootstrap JS -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>