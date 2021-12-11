<?php
// session_start();
$db= mysqli_connect("localhost","root","","ecommerce");

function getREalIpAddr(){

if(!empty($_SERVER['HTTP_CLIENT_IP'])){
  $ip = $_SERVER['HTTP_CLIENT_IP'];
}
elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
{
  $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
}
else{
  $ip = $_SERVER['REMOTE_ADDR'];
}

return $ip;

}
function getCart(){
  global $db;
  if(isset($_SESSION['name'])){
  if(isset($_GET['add_cart'])){
    $Email=$_SESSION['name'];
    $p_id =$_GET['add_cart'];
    $check_pro ="select * from cart where Email='$Email' AND p_id='$p_id' ";
    $run_check = mysqli_query($db,$check_pro) or die("Error1");
    if(mysqli_num_rows($run_check)>0){
      echo "<script>alert('alredy added')</script>";
    }
    else{
      $q = "Insert into cart(p_id,qty,Email) values($p_id,1,'$Email')";
      $run_q =mysqli_query($db,$q) or die("Error");
      echo "<script>window.open('product1.php','_self')</script>";

    }
  }
}
else{

}
}
function item(){
  if(isset($_GET['add_cart'])){
    $ip_add = getREalIpAddr();
    global $db;
    $Email=$_SESSION['name'];
    $get_item = "select * from cart where Email='$Email' ";
    $run_item = mysqli_query($db,$get_item);
    $count_item = mysqli_num_rows($run_item);
  }
  else{
    global $db;
    $ip_add = getREalIpAddr();
    $Email=$_SESSION['name'];
    if(!isset($Email)){
    
    $get_item = "select * from cart where Email='$Email' ";
    $run_item = mysqli_query($db,$get_item);
    $count_item = mysqli_num_rows($run_item);    }
    else{
    $get_item = "select * from cart where Email='$Email' ";
    $run_item = mysqli_query($db,$get_item);
    $count_item = mysqli_num_rows($run_item);
  }
}
  echo $count_item;
}
function getTotal_price(){
  global $db;
  $Email=$_SESSION['name'];
  $ip_add = getREalIpAddr();
  $total=0;
  $sel_price = "select * from cart where Email='$Email' ";
  $run_price = mysqli_query($db,$sel_price);
  while($record =mysqli_fetch_array($run_price)){
    $pro_id = $record['p_id'];
    $pro_price = "select * from product where product_id='$pro_id' ";
    $run_price_pro =mysqli_query($db,$pro_price);
    // while($p_price =mysqli_fetch_array($run_price_pro)){
    //   $product_price = array($p_price['product_price']);
    //   $values = array_sum($product_price);
    //   $total += $values;
    // }
    $p_price =mysqli_fetch_array($run_price_pro);
    $product_price = $p_price['product_price'];
    $total = $total + ($product_price * $record['qty']);
  }
  return $total;
  // echo $total;
}
function getPro(){
	global $db;
	if (!isset($_GET['cat'])){
      if(!isset($_GET['brand'])){
          $get_product = "select * from product order by rand() LIMIT 0,9";
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
             <div class='single-img'>
             <img src='../admin/product_imges/$pro_image' width='300' height='300'>
              <h3>$pro_title</h3>
              <div class='but_class'>
              <a href='detail1.php?pro_id=$pro_id' class='a1'>Details</a>
              <a href='product1.php?add_cart=$pro_id' class='a2'>Add To Cart</a> 
              </div>
             </div>
            ";

    }
  }
}
}
function getPro1(){
  global $db;
  if (!isset($_GET['cat'])){
      if(!isset($_GET['brand'])){
          $get_product = "select * from product order by rand() LIMIT 0,4";
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
             <div class='single-img'>
             <img src='../admin/product_imges/$pro_image' width='300' height='300'>
              <h3>$pro_title</h3>
              <div class='but_class'>
              <a href='detail1.php?pro_id=$pro_id' class='a1'>Details</a>
              <a href='product1.php?add_cart=$pro_id' class='a2'>Add To Cart</a> 
              </div>
             </div>
            ";

    }
  }
}
}
function getPro2(){
  global $db;
  if (!isset($_GET['cat'])){
      if(!isset($_GET['brand'])){
          $get_product = "select * from product order by rand() LIMIT 0,4";
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
             <div class='single-img'>
             <img src='../admin/product_imges/$pro_image' width='300' height='300'>
              <h3 style='text-align:center;'>$pro_title</h3>
              <div class='but_class'>
              <a href='../Products/detail1.php?pro_id=$pro_id' class='a1'>Details</a>
              <a href='../Products/product1.php?add_cart=$pro_id' class='a2'>Add To Cart</a> 
              </div>
             </div>
            ";

    }
  }
}
}

function recentPro(){
  global $db;
  if (!isset($_GET['cat'])){
      if(!isset($_GET['brand'])){
          $get_product = "select * from product order by rand() LIMIT 0,1";
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
             <div class='recent-img'>
             <img src='../admin/product_imges/$pro_image' width='160' height='200'>
              <h5>$pro_title</h5>
            </div>
            ";

    }
  }
}
}
function getCat(){
	global $db;
	 $get_cats= "select * from categories";
        $run_cats= mysqli_query($db,$get_cats);
        while($row_cats=mysqli_fetch_array($run_cats)){

          $cat_id = $row_cats['cat_id'];
          $cat_title = $row_cats['cat_title'];
          echo "<li><a href='product1.php?cat=$cat_id'>$cat_title</a></li>";
      }
}

function getBrand(){
	global $db;
	 $get_brand= "select * from brands";
        $run_brand= mysqli_query($db,$get_brand);
        while($row_brand=mysqli_fetch_array($run_brand)){

          $brand_id = $row_brand['brand_id'];
          $brand_title = $row_brand['brand_title'];
          echo "<li><a href='product1.php?brand=$brand_id'>$brand_title</a></li>";
      }
}

function getCatPro(){
	global $db;
	if (isset($_GET['cat'])){
		$cat_id = $_GET['cat'];
          $get_cat_product = "select * from product where cat_id='$cat_id' ";
          $run_cat_product = mysqli_query($db,$get_cat_product) or die(mysqli_error($db));
          $count = mysqli_num_rows($run_cat_product);
          if($count == 0){
          	echo "<h2>NO PRODUCTS FOUNDS IN THIS CATEGEORY</h2>";
          }
          while($row_cat_product= mysqli_fetch_array($run_cat_product)){

            $pro_id = $row_cat_product['product_id'];
            $pro_title= $row_cat_product['product_title'];
            $pro_cat = $row_cat_product['cat_id'];
            $pro_brand = $row_cat_product['brand_id'];
            $pro_desc = $row_cat_product['product_desc'];
            $pro_price = $row_cat_product['product_price'];
            $pro_image = $row_cat_product['product_img1'];
            echo 
            "
              <div class='single-img'>
              <img src='../admin/product_imges/$pro_image' width='300' height='400'>
              <h3>$pro_title</h3>
              <div class='but_class'>
              <a href='detail1.php?pro_id=$pro_id' class='a1'>Details</a>
              <a href='product1.php?add_cart=$pro_id' class='a2'>Add To Cart</a> 
              </div>
              </div>
            ";

    }
}
}

function getBrandPro(){
	global $db;
	if (isset($_GET['brand'])){
		$brand_id = $_GET['brand'];
          $get_brand_product = "select * from product where brand_id='$brand_id' ";
          $run_brand_product = mysqli_query($db,$get_brand_product) or die(mysqli_error($db));
          $count = mysqli_num_rows($run_brand_product);
          if($count == 0){
          	echo "<h2>NO PRODUCTS FOUNDS IN THIS CATEGEORY</h2>";
          }
          while($row_brand_product= mysqli_fetch_array($run_brand_product)){

            $pro_id = $row_brand_product['product_id'];
            $pro_title= $row_brand_product['product_title'];
            $pro_cat = $row_brand_product['cat_id'];
            $pro_brand = $row_brand_product['brand_id'];
            $pro_desc = $row_brand_product['product_desc'];
            $pro_price = $row_brand_product['product_price'];
            $pro_image = $row_brand_product['product_img1'];
            echo 
            "
              <div class='single-img'>
              <img src='../admin/product_imges/$pro_image' width='300' height='400'>
              <h3>$pro_title</h3>
              <div class='but_class'>
              <a href='detail1.php?pro_id=$pro_id' class='a1'>Details</a>
              <a href='product1.php?add_cart=$pro_id' class='a2'>Add To Cart</a> 
              </div>
              </div>
            ";

    }
}
}


?>