<?php 
include "include/db.php";
include "php/function.php";
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <script src="../js/jquery.min.js"></script>
</head>
<body>  

<?php getCart();?>
<div class="home">
          <div class="wrap">
              <nav class="nav-area">
                  <img src="../img/logo.jpg" width="10%" height="70" class="img11"/>
                  <?php 
                  session_start();
                  if(isset($_SESSION["name"])){
                  echo "
                  <ul>
                      <li><a href='../php/Logout.php'>Logout</a></li>
                      <li><a href='../Products/addcart1.php'>cart</a></li>
                      <li><a href='../Products/Product1.php'>shop</a></li>
                  </ul>";
                }
                else{
                  echo "
                  <ul>
                      <li><a href='../php/index.php'>Home</a></li>
                      <li><a href='../Products/addcart1.php'>cart</a></li>
                      <li><a href='../Products/Product1.php'>shop</a></li>
                  </ul>";
                }
                  ?>
                  <form  method="get" action="../Products/result.php" enctype="multipart/form-data">
                      <input type="search" placeholder="What are you looking for?"  name="user_query">
                      <button value='Search' name='search' type='submit'>search</button>
                  </form>
              </nav> 
          </div>
</div>
<div>
  <img src="../img/Free.jpg" style="width: 100%;" />
</div>  
<div class="row">
  <div class="col-3 col-s-3 menu">
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
              <div id='product'>
              <img src='../admin/product_imges/$pro_image' class='imgbox'>
             
              </div>
            ";
    }
  }
?>
  </div>

  <div class="col-6 col-s-6" >
    <?php getCart();?> 
    <?php 
    if(isset($_SESSION['name'])){

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
              <div id='product'>
              <h3>$pro_title</h3>
              <h3>price $pro_price</h3>
              <div class='but_class'>
              <a href='product1.php?add_cart=$pro_id' class='a2'>Add To Cart</a> 
              <a href='../Products/checkout.php' class='a3'>BUY NOW</a>

              </div>
              </div>
            ";
    }
  }
}
else{
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
              <div id='product'>
              <h3>$pro_title</h3>
              <h3>price $pro_price</h3>
              <div class='but_class'>
              <a href='product1.php?add_cart=$pro_id' class='a2'>Add To Cart</a> 
              <a href='../php/LoginSystem.php' class='a3'>BUY NOW</a>
              </div>
              </div>
            ";
    }
  }
}
?>

</div>
</div>
<div>
  <img src="../img/know.jpg" style="width: 100%;" />
</div>
<div>
  <img src="../img/know1.jpg" style="width: 100%;" />
</div>
<div class="wrapper">
    <h1>POPULAR PRODUCT CATEGEORY</h1>
    <div class="img-area">
<!-- Photo Grid -->
    <?php 
    getPro1();
    getCatPro();
    getBrandPro();
    ?>
  </div>
</div>

<div class="alert">
  <span class="closebtn">&times;</span>  
  <strong>Todays</strong> offer $20 OFF order $300 or more with code "SHOESLLY-01"+ Free Shipping!
</div>

<!-- FOOTER START -->
<div class="footer">
  <div class="contain">
  <div class="col">
    <h1>Recent Shoes</h1>
    <table>
  <tr>
    <?php recentPro();?>
  </tr>
  
</table>
  </div>
  <div class="col">
    <h1>Products</h1>
    <ul>
      <li>Mens</li>
      <li>Women</li>
      <li>Kids</li>
      <li>Boys</li>
    </ul>
  </div>
  <div class="col">
    <h1>Accounts</h1>
    <ul>
      <li>Home</li>
      <li>Blog</li>
      <li>About</li>
    </ul>
  </div>
  <div class="col">
    <h1>Support</h1>
    <ul>
      <li>Contact us</li>
      <li>Web chat</li>
      <li>Open ticket</li>
    </ul>
  </div>
   <div class="col">
    <h1>GET IN TOUCH</h1>
    <ul>
      <li>Sneaker - Responsive Prestashop Theme
123 Main Street, Anytown, CA 12345 - USA.
United States<br><br>
Call us: (012) 800 456 789-987<br><br>
Email us: shoeslly123@gmail.com<br>
</li>
    </ul>
  </div>
  <div class="clearfix"></div>
</div>
</div>
<!-- END OF FOOTER -->
<script type="text/javascript">
  function displayMenu() {
  var x = document.getElementById("nav");
    if (x.className === "navbar") {
        x.className += " responsive";
    } else {
        x.className = "navbar";
    }
}
</script>

<script>
var close = document.getElementsByClassName("closebtn");
var i;

for (i = 0; i < close.length; i++) {
  close[i].onclick = function(){
    var div = this.parentElement;
    div.style.opacity = "0";
    setTimeout(function(){ div.style.display = "none"; }, 600);
  }
}
</script>
</body>
</html>
