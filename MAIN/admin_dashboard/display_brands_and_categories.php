


<?php 
include('..\includes\connect.php');
?>

<div class="col-md-12">
      <ul class="navbar-nav">
        <table style="width:100%; text-align:top;">
            <td style="width:50%">
        <li class="nav-item">
          <a href="" class="nav-link bg-info text-center"><h2>Brands</h2></a>
        </li>
        <?php
          $query_brand_fetch="SELECT * FROM `brands`";
          $result_brand_fetch=mysqli_query($con,$query_brand_fetch);
          while($brand_row=mysqli_fetch_assoc($result_brand_fetch)){
            $brand_data=$brand_row['brand_title'];
            echo '<li class="nav-item"><a href="" class="nav-link bg-secondary text-center text-light my-0 p-3">'.$brand_data.'</a></li>';
          }

          
          ?>
          </td>
          <td>
          <li class="nav-item">
          <a href="" class="nav-link bg-info text-center"><h2>Categories</h2></a>
        </li>
        <?php
          $query_cat_fetch="SELECT * FROM `categories`";
          $result_cat_fetch=mysqli_query($con,$query_cat_fetch);
          while($cat_row=mysqli_fetch_assoc($result_cat_fetch)){
            $category_data=$cat_row['category_title'];
            echo '<li class="nav-item"><a href="" class="nav-link bg-secondary text-center text-light my-0 p-3">'.$category_data.'</a></li>';
          }

          
          ?>
          </td>
        </table>
      </ul>
</div>