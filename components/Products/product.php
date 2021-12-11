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
<div class="topnav" id="myTopnav">
  <a href="product.php" class="active">Home</a>
  <a href="myaccount.php">My Account</a>
  <a href="../php/LoginSystem.php">Login</a>
  <a href="addcart.php">Your Cart</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>
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
<?php getCart();?>
<div class="row">
  <div class="column1 left" style="background-color:#fff;">
    <button class="accordion"><h2 style="color:purple;" class="cat"><B>CATEGORIES</B></h2></button>
    <ul class="panel">
      <?php 
       getCat();
      ?>
    </ul>
    <button class="accordion"><h2 style="color:purple;"><B>BRANDS</B></h2></button>
    <ul class="panel">
        <?php 
       getBrand();
      ?>
    </ul>
 
  </div>

  <div class="column right">

    <?php 
    getPro();
    getCatPro();
    getBrandPro();
    ?>
</div>
</div>
<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>

<script type="text/javascript" src="js/Accordion.js"></script>
</body>
</html>
