<?php 
include "include/db.php";
include "php/function.php";
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="css/product.css">
  <title>SHOP</title>
  </head>
<body>
<div class="home">
          <div class="wrap">
              <nav class="nav-area">
                  <img src="../img/logo.jpg" width="10%" height="70" class="img11"/>
                 <?php 
                  session_start();
                  if(isset($_SESSION["name"])){
                  echo "
                  <ul>
                      <li><a href='../php/index.php'>Home</a></li>
                      <li><a href='../php/Logout.php'>Logout</a></li>
                      <li><a href='../Products/addcart1.php'>cart</a></li>
                  </ul>";
                }
                else{
                  echo "
                  <ul>
                      <li><a href='../php/index.php'>Home</a></li>
                       <li><a href='../php/LoginSystem.php'>Login</a></li>
                      <li><a href='../Products/addcart1.php'>cart</a></li>
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
  <img src="../img/shop.jpg" style="width: 100%;" />
</div>
<?php getCart();?>
<div class="row">
  <div class="col-3 col-s-3 menu">
    <button class="but1">Categeories</button>
    <ul>
      <l1><?php 
       getCat();
      ?></l1>
    </ul>
    <button class="but1">Brands</button>
     <ul>
      <l1><?php 
       getBrand();
      ?></l1>
    </ul>
  </div>

  <div class="col-6 col-s-6">
    
  <div class="wrapper">
    <h1>SHOE PRODUCTS</h1>
    <div class="img-area">
<!-- Photo Grid -->
    <?php 
    getPro();
    getCatPro();
    getBrandPro();
    ?>
  </div>
  </div>
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
    <?php recentPro(); ?>
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
