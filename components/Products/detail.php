<?php 
include "include/db.php";
include "php/function.php";
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="css/style.css">
 <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" type="text/css" href="../font/css/all.css">
 </head>
 
<body>
<div class="row1">
  <div class="col1 left1">
    <img src="../img/logo.jpg" class="logo">
  </div>
  <div class="col2 right1">
    <form method="get" action="result.php" enctype="multipart/form-data" class="search">
      <input type="text" class="searchTerm" placeholder="What are you looking for?" name="user_query">
      <button type="submit" class="searchButton" value="Search" name="search">
      <i class="fas fa-search"></i>
    </button>
  </form>
  </div>
</div>
<div class="row">
  <div class="column12 right12">

    <?php 
    if(isset($_GET['pro_id'])){
      $product_id = $_GET['pro_id'];
      $get_product = "select * from product where product_id = '$product_id' ";
          $run_product = mysqli_query($db,$get_product);
          while($row_product=mysqli_fetch_array($run_product)){

            $pro_id = $row_product['product_id'];
            $pro_title= $row_product['product_title'];
            $pro_cat = $row_product['cat_id'];
            $pro_brand = $row_product['brand_id'];
            $pro_desc = $row_product['product_desc'];
            $pro_price = $row_product['product_price'];
            $pro_image = $row_product['product_img1'];
            echo 
            "
              <div id='single_product'>
              <img src='../admin/product_imges/$pro_image' width='300' height='400'>
              <h3>$pro_title</h3>
              <div class='but_class'>
              <a href='product.php' class='a1'>Go back</a>
              </div>
              </div>
            ";
    }
  }
?>
</div>
<?php getCart();?> 
<div class="column11 left11" style="background-color:#fff;">
    <?php 
    if(isset($_GET['pro_id'])){
      $product_id = $_GET['pro_id'];
      $get_product = "select * from product where product_id = '$product_id' ";
          $run_product = mysqli_query($db,$get_product);
          while($row_product=mysqli_fetch_array($run_product)){

            $pro_id = $row_product['product_id'];
            $pro_title= $row_product['product_title'];
            $pro_cat = $row_product['cat_id'];
            $pro_brand = $row_product['brand_id'];
            $pro_desc = $row_product['product_desc'];
            $pro_price = $row_product['product_price'];
            $pro_image = $row_product['product_img1'];
            echo 
            "
              <div id='single_product'>
              <h3>$pro_title</h3>
              <h2>price $pro_price</h2>
              <div class='but_class'>
              <a href='product.php?add_cart=$pro_id' class='a2'>Add To Cart</a> 
              <a href='../php/LoginSystem.php' class='a3'>BUY NOW</a>

              </div>
              </div>
            ";
    }
  }
?>
  </div>

</div>
<script type="text/javascript" src="js/Accordion.js"></script>
</body>
</html>
