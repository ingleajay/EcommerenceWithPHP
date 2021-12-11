<?php 
include( "../Products/php/function.php"); 
include ("../Products/include/db.php"); 

?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="../font/css/all.css">
	<link rel="stylesheet" type="text/css" href="../css/index.css">
<script src="../js/jquery.min.js"></script>
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
                      <li><a href='../Products/addcart1.php'>cart</a></li>
                      <li><a href='../Products/Product1.php'>shop</a></li>
                  </ul>";
                }
                else{
                  echo "
                  <ul>
                      <li><a href='../php/LoginSystem.php'>Login</a></li>
                      <li><a href='../Products/addcart1.php'>cart</a></li>
                      <li><a href='../Products/Product1.php'>shop</a></li>
                  </ul>";
                }
                  ?>
                  <form  method="get" action="../Products/result.php" enctype="multipart/form-data">
                      <input type="search" placeholder="What are you looking for?"  name="user_query">
                      <button value="Search" name="search" type="submit">search</button>
                  </form>
              </nav> 
          </div>
</div>

<?php 
    if(isset($_SESSION["name"])){
      echo "
      
      <div class='topnav'>
            <a >".$_SESSION['name']."</a>
            <div class='search-container'>
             <form action=''>
            <button><a href='logout.php' >Logout</a></button>
            </form>
            </div>
      </div>";
    }
    else{

 }
  ?>
<img src="../img/back1.jpg" style="width: 100%; height: auto; margin:0px; padding: 0px;">
<div class="slideshow-container">

<div class="mySlides fade">
  <img src="../img/pic11.jpg" class="img1" style="width:100%">
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
  <img src="../img/pic0.jpg"  class="img1" style="width:100%">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <img src="../img/pic13.jpg" class="img1" style="width:100%">
  <div class="text">Caption Three</div>
</div>

</div>
<br>
<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<!-- MAIN (Center website) -->
<div class="main">
<h2 class="name2">POPULAR PRODUCT CATEGEORY</h2>

<!-- Portfolio Gallery Grid -->
<div class="row">
  <div class="column">
    <div class="content">
      <img src="../img/pic14.jpg" alt="Mountains" style="width:100%">
      <p class="cat">MENS</p>
     <div class="but1" >
      <button class="butbox"><a href="../Products/product1.php">SHOP</a></button>
     </div>
    </div>
  </div>
  <div class="column">
    <div class="content">
    <img src="../img/pic15.jpg" alt="Lights" style="width:100%">
    <p class="cat">BOYS</p>
     <div class="but1" >
      <button class="butbox"><a href="../Products/product1.php">SHOP</a></button>
     </div>
    </div>
  </div>
  <div class="column">
    <div class="content">
    <img src="../img/pic16.jpg" alt="Nature" style="width:100%">
    <p class="cat">WOMENS</p>
     <div class="but1">
      <button class="butbox"><a href="../Products/product1.php">SHOP</a></button>
     </div>
    </div>
  </div>
  <div class="column">
    <div class="content">
    <img src="../img/pic17.jpg" alt="Mountains" style="width:100%">
    <p class="cat">KIDS</p>
     <div class="but1">
      <button  class="butbox"><a href="../Products/product1.php">SHOP</a></button>
     </div>
    </div>
  </div>
<!-- END GRID -->
</div>
<!-- END MAIN -->
</div>
<div>
  <img src="../img/offer.jpg" style="width: 100%;" />
</div>
<div>
  <img src="../img/offer1.jpg" style="width: 100%;" />
</div>
<div class="gallery-section">
        <div class="inner-width">
            <h1>SHOES GALLERY</h1>
            <div class="border"></div>
            <div class="gallery">
            <a href="../img/pic1.jpg" class="image">
              <img src="../img/pic1.jpg" alt=''>
            </a>
             <a href="../img/pic2.jpg" class="image">
              <img src="../img/pic2.jpg" alt=''>
            </a>
             <a href="../img/pic3.jpg" class="image">
              <img src="../img/pic3.jpg" alt=''>
            </a>
            <a href="../img/pic4.jpg" class="image">
              <img src="../img/pic4.jpg" alt=''>
            </a>
            <a href="../img/pic5.jpg" class="image">
              <img src="../img/pic5.jpg" alt=''>
            </a>
            <a href="../img/pic6.jpg" class="image">
              <img src="../img/pic6.jpg" alt=''>
            </a>
            <a href="../img/pic7.jpg" class="image">
              <img src="../img/pic7.jpg" alt=''>
            </a>
            <a href="../img/pic8.jpg" class="image">
              <img src="../img/pic8.jpg" alt=''>
            </a> 
            </div>
        </div>
      </div>

<div>
  <img src="../img/adds.jpg" style="width: 100%;" />
</div>
<?php getCart();?>

<div class="wrapper">
    <h3 style="text-align: center;">Blockbuster deals with exchange</h3>
    <div class="img-area">
<!-- Photo Grid -->
    <?php 
    getPro2();
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
    <?php recentPro()?>
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
<!-- <div id="map"></div>
 --><script>
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
  <script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
<!-- <script type="text/javascript">
  function initmap(){
    var location = {lat:19.032801,lng:72.896355};
    var map= new google.maps.Map(document.getElementById("map"),{
      zoom:4,
      center:location
    });
  }
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDIUH_TnmrFFWkNQadyHljCKa9PmQbSmh4&callback=initmap"></script> -->
</body>
</html>