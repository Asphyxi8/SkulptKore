<style>
  .add{
    width: 16vw;
    height: 5vh;
    background-color: transparent;
  }
  .add:hover{
    background-color: #B2B6F4;
  }
  .card{
    width: 16vw;
    height: auto;
    margin: auto;
    align-items: center;
    margin-bottom: 2vh;
  }
  .card-img{
    heigth:'90%';
    width:'90%';
  }
</style>
<?php
function getproducts(){
    global $con;
    if(!isset($_GET['brand']) and !isset($_GET['category'])){
    // $select="SELECT * from `products` order by rand() limit 0,9";
    $select="SELECT * from `products` order by rand()";
    $result=mysqli_query($con,$select);
    while($row=mysqli_fetch_assoc($result)){
      $product_id=$row['product_id'];
      $product_title=$row['product_title'];
      $product_desc=$row['product_desc'];
      $product_brand=$row['brand_id'];
      $product_category=$row['category_id'];
      $product_price=$row['product_price'];
      $product_image=$row['product_image'];
      if (0 === strpos($product_image, 'http')) {
        echo "
        <div class='card'>
        <img class='card-img' src='$product_image' alt='Card image cap'>
        <div class='card-body'>
          <h6>$product_title</h6>
          <h6 class='card-subtitle mb-2 text-muted'>$product_desc</h6>
          <h6 class='card-subtitle mb-2 text-muted'>$$product_price</h6>        
        </div>
        <div class='card-button-wrap'>
        <a href='products3.php?add_to_cart=$product_id'><button class='add'>Add To Cart</button></a>
            </div>
        </div>";
      }
      else{
      echo "<div class='card'>
      <img class='card-img' src='..\admin_dashboard\product_images\\$product_image' alt='Card image cap'>
      <div class='card-body'>
      <h6>$product_title</h6>
        <h6 class='card-subtitle mb-2 text-muted'>$product_desc</h6>
        <h6 class='card-subtitle mb-2 text-muted'>$$product_price</h6>        
      </div>
      <div class='card-button-wrap'>
      <a href='products3.php?add_to_cart=$product_id'><button class='add'>Add To Cart</button></a>
          </div>
    </div>";
    }
  }
}

elseif(isset($_GET['category'])){
    $query_category=$_GET['category'];
    $select="SELECT * from `products` where category_id=$query_category";
    $result=mysqli_query($con,$select);
    while($row=mysqli_fetch_assoc($result)){
      $product_id=$row['product_id'];
      $product_title=$row['product_title'];
      $product_desc=$row['product_desc'];
      $product_brand=$row['brand_id'];
      $product_category=$row['category_id'];
      $product_price=$row['product_price'];
      $product_image=$row['product_image'];
      if (0 === strpos($product_image, 'http')) {
        echo "<div class='card'>
        <img class='card-img' src='$product_image' alt='Card image cap'>
        <div class='card-body'>
        <h6>$product_title</h6>
          <h6 class='card-subtitle mb-2 text-muted'>$product_desc</h6>
          <h6 class='card-subtitle mb-2 text-muted'>$$product_price</h6>        
        </div>
        <div class='card-button-wrap'>
        <a href='products3.php?add_to_cart=$product_id'><button class='add'>Add To Cart</button></a>
            </div>
      </div>";
      }
      else{
      echo "<div class='card'>
      <img class='card-img' src='..\admin_dashboard\product_images\\$product_image' alt='Card image cap'>
      <div class='card-body'>
      <h6>$product_title</h6>
        <h6 class='card-subtitle mb-2 text-muted'>$product_desc</h6>
        <h6 class='card-subtitle mb-2 text-muted'>$$product_price</h6>        
      </div>
      <div class='card-button-wrap'>
      <a href='products3.php?add_to_cart=$product_id'><button class='add'>Add To Cart</button></a>
          </div>
    </div>";
    }
    }
}
elseif(isset($_GET['brand'])){
        $query_brand=$_GET['brand'];
        $select="SELECT * from `products` where brand_id=$query_brand";
        $result=mysqli_query($con,$select);
        while($row=mysqli_fetch_assoc($result)){
          $product_id=$row['product_id'];
          $product_title=$row['product_title'];
          $product_desc=$row['product_desc'];
          $product_brand=$row['brand_id'];
          $product_category=$row['category_id'];
          $product_price=$row['product_price'];
          $product_image=$row['product_image'];
          if (0 === strpos($product_image, 'http')) {
            echo "<div class='card'>
            <img class='card-img' src='$product_image' alt='Card image cap'>
            <div class='card-body'>
            <h6>$product_title</h6>
              <h6 class='card-subtitle mb-2 text-muted'>$product_desc</h6>
              <h6 class='card-subtitle mb-2 text-muted'>$$product_price</h6>        
            </div>
            <div class='card-button-wrap'>
            <a href='products3.php?add_to_cart=$product_id'><button class='add'>Add To Cart</button></a>
                </div>
          </div>";
          }
          else{
          echo "<div class='card'>
          <img class='card-img' src='..\admin_dashboard\product_images\\$product_image' alt='Card image cap'>
          <div class='card-body'>
          <h6>$product_title</h6>
            <h6 class='card-subtitle mb-2 text-muted'>$product_desc</h6>
            <h6 class='card-subtitle mb-2 text-muted'>$$product_price</h6>        
          </div>
          <div class='card-button-wrap'>
          <a href='products3.php?add_to_cart=$product_id'><button class='add'>Add To Cart</button></a>
              </div>
        </div>";
        }
        }
}

}

// function geteveryproduct(){
//   global $con;
//     if(!isset($_GET['brand']) and !isset($_GET['category'])){
//     $select="SELECT * from `products` order by rand()";
//     $result=mysqli_query($con,$select);
//     while($row=mysqli_fetch_assoc($result)){
//       $product_id=$row['product_id'];
//       $product_title=$row['product_title'];
//       $product_desc=$row['product_desc'];
//       $product_brand=$row['brand_id'];
//       $product_category=$row['category_id'];
//       $product_price=$row['product_price'];
//       $product_image=$row['product_image'];
//       echo "
//       <div class='card-body'>
//           <img src='admin_dashboard\product_images\\$product_image'>
//           <div>$product_title</div>
//           <div>$product_desc</div>
//           <div>$product_price</div>
//               <a href='products3.php?add_to_cart=$product_id'>Add To Cart</a>
  
//       </div>";
//     }
// }

// }
function getbrands(){
    global $con;
    $query_brand_fetch="SELECT * FROM `brands`";
          $result_brand_fetch=mysqli_query($con,$query_brand_fetch);
          while($brand_row=mysqli_fetch_assoc($result_brand_fetch)){
            $brand_data=$brand_row['brand_title'];
            $brand_id=$brand_row['brand_id'];
            echo "<a href='products3.php?brand=$brand_id'>".$brand_data."</a>";
          }

          
}


function getcats(){
    global $con;
    $query_cat_fetch="SELECT * FROM `categories`";
    $result_cat_fetch=mysqli_query($con,$query_cat_fetch);
    while($cat_row=mysqli_fetch_assoc($result_cat_fetch)){
      $category_data=$cat_row['category_title'];
      $category_id=$cat_row['category_id'];
      echo "<a href='products3.php?category=$category_id'>".$category_data."</a>";
    }
}


function searchproduct(){
  global $con;
  if(isset($_GET['search_data_product'])){
$findingProduct=$_GET['search_data'];
  $select="SELECT * from `products` where product_keywords like '%$findingProduct%'";
  $result=mysqli_query($con,$select);
  while($row=mysqli_fetch_assoc($result)){
    $product_id=$row['product_id'];
    $product_title=$row['product_title'];
    $product_desc=$row['product_desc'];
    $product_brand=$row['brand_id'];
    $product_category=$row['category_id'];
    $product_price=$row['product_price'];
    $product_image=$row['product_image'];
    if (0 === strpos($product_image, 'http')) {
      echo "<div class='card'>
      <img class='card-img' src='$product_image' alt='Card image cap'>
      <div class='card-body'>
      <h6>$product_title</h6>
        <h6 class='card-subtitle mb-2 text-muted'>$product_desc</h6>
        <h6 class='card-subtitle mb-2 text-muted'>$$product_price</h6>        
      </div>
      <div class='card-button-wrap'>
      <a href='products3.php?add_to_cart=$product_id'><button class='add'>Add To Cart</button></a>
          </div>
    </div>";
    }
    else{
    echo "<div class='card'>
    <img class='card-img' src='..\admin_dashboard\product_images\\$product_image' alt='Card image cap'>
    <div class='card-body'>
    <h6>$product_title</h6>
      <h6 class='card-subtitle mb-2 text-muted'>$product_desc</h6>
      <h6 class='card-subtitle mb-2 text-muted'>$$product_price</h6>        
    </div>
    <div class='card-button-wrap'>
    <a href='products3.php?add_to_cart=$product_id'><button class='add'>Add To Cart</button></a>
        </div>
  </div>";
  }
  }
  }
}

//resource: javatpoint
function getIPAddress() {  
  //whether ip is from the share internet  
   if(!empty($_SERVER['HTTP_CLIENT_IP'])) {  
              $ip = $_SERVER['HTTP_CLIENT_IP'];  
      }  
  //whether ip is from the proxy  
  elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {  
              $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];  
   }  
//whether ip is from the remote address  
  else{  
           $ip = $_SERVER['REMOTE_ADDR'];  
   }  
   return $ip;  
}

function cart(){
  global $con;
  if(isset($_GET['add_to_cart'])){
 $ip = getIPAddress();
 $get_product_id=$_GET['add_to_cart'];
 $select="SELECT * from `cart_details` where ip_address='$ip' and product_id=$get_product_id";
 $result=mysqli_query($con,$select);
 $num_rows=mysqli_num_rows($result);
 if($num_rows>0){
echo "<script>alert('ALREADY IN CART!')</script>";
echo "<script>window.open('products3.php','_self')</script>";
 }
 else{
  $query="insert into `cart_details` (product_id,ip_address,quantity) values($get_product_id,'$ip',1)";
  $result_new=mysqli_query($con,$query);
  echo "<script>alert('item added!')</script>";
echo "<script>window.open('products3.php','_self')</script>";
 }
}
}



//total cart function

function cart_total(){
global $con;
$ip = getIPAddress();
$total = 0;
$query = "Select * from `cart_details` where ip_address = '$ip'";
$result = mysqli_query($con,$query);
while($row = mysqli_fetch_array($result)){
  $product_id = $row['product_id'];
  $quanity = $row['quantity'];
  $select= "Select * from `products` where product_id='$product_id'";
  $result_products=mysqli_query($con,$select);

  while($row_product = mysqli_fetch_array($result_products)){
    $product_price=array($row_product['product_price']);
    $product_values = array_sum($product_price);
    $total += $product_values*$quantity;

  }
}
echo $total;
}
?>
