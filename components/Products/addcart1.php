<?php 
include "include/db.php";
include "php/function.php";
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/add.css">
 <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" type="text/css" href="../font/css/all.css">
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
                      <li><a href='../Products/product1.php'>shop</a></li>
                  </ul>";
                }
                else{
                  echo "
                  <ul>
                      <li><a href='../php/index.php'>Home</a></li>
                      <li><a href='../Products/product1.php'>shop</a></li>
                      <li><a href='../php/LoginSystem.php'>Login</a></li>

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
<div class="carditem">
  <h2 align="center">Your Cart Item: <?php item();?></h2>
</div>
<form action="addcart1.php" method="post" enctype="multipart/form-data" class="article">
<table align="center" border="3">
  <tr align="center">
    <th>Product Image</th>
    <th>Product Title</th>
    <th>price</th>
    <th>qty</th>
    <th>Remove</th>
  </tr>
  <?php
  if(isset($_SESSION['name'])){
  $Email=$_SESSION['name'];
  $ip_add = getREalIpAddr();
  $total=0;
  $i=1;
  $j=1;
  $product=array();
  $sel_price = "select * from cart where Email='$Email' ";
  $run_price = mysqli_query($con,$sel_price);
  $num_row = mysqli_num_rows($run_price);
  while($record =mysqli_fetch_array($run_price)){
    $pro_id = $record['p_id'];
    array_push($product,$pro_id);
    $pro_price = "select * from product where product_id='$pro_id' ";
    $run_price_pro =mysqli_query($con,$pro_price);
    while($p_price =mysqli_fetch_array($run_price_pro)){
      $product_price = array($p_price['product_price']);
      $product_title = $p_price['product_title'];
      $product_image = $p_price['product_img2'];
      $only_price = $p_price['product_price'];
      $values = array_sum($product_price);
      $total += $values;
      echo "
      <tr style='background-color:#f0f3f7;'>
        <td><img src='../admin/product_imges/".$product_image."' height ='80' width='100'></td>
        <td>".$product_title."</td>
        <td> ".$only_price."</td>
        <td><input type='text' name='qty".$i."' value='1' size='3'></td>
        <td><input type='checkbox' name='remove".$j."' value='".$pro_id."'></td>
      </tr>";
    }
    $i=$i+1;
    $j=$j+1;
  } 
  if(isset($_POST['update'])){
    // $i = 0;
    for($i=1;$i<=$num_row;$i=$i+1){
      $qty = $_POST['qty'.$i];
      $pro_id = $product[$i-1];
      $insert_qty = "update cart set qty='$qty' where Email = '$Email' and p_id=$pro_id ";
      $run_qty = mysqli_query($con,$insert_qty);
      $total=($total)*($qty);
      if($run_qty){
        echo "<script>window.open('addcart1.php','_self')</script>";

      }
    }
  }
  if(isset($_POST['update'])){
    for($j=1;$j<=$num_row;$j=$j+1){
      $remove_id = $_POST['remove'.$j];
      $delete_products = "delete from cart where p_id='$remove_id' ";
      $run_delete = mysqli_query($con,$delete_products);
      if($run_delete){
        echo "<script>window.open('addcart1.php','_self')</script>";
      }
    }
  }
 if(isset($_POST['continue'])){
      header('location:product1.php');
    }
  }
  else{
  
      echo "<script>alert('LOGIN RQUIRED !!');</script>";
      header('location:../php/LoginSystem.php');
  }
  ?>
  <tr >
    <td colspan="2"><b>SUB TOTAL</b></td>
    <td><b><?php echo getTotal_price(); ?></b></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td><input type="submit" name="update" value="Update Cart" class="but1"></td>
    <td><input type="submit" name="continue" value="Continue Shopping" class="but1"></td>
    <?php 
    if(isset($_SESSION["name"])){
                
    echo "<td><button class='but11'><a href='checkout.php' class='checkout' style='text-decoration:none;'>CHECKOUT</a></button></td>";  
  }
  else{
    echo "<td><button class='but11'><a href='../php/LoginSystem.php' class='checkout' style='text-decoration:none;'>CHECKOUT</a></button></td>";  
  }
  ?>
  </tr>
 </table>
</form>
<?php
$j=1;

 ?>
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
