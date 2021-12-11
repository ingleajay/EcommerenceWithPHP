<?php include "include/db.php"; ?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/style_insert.css">
 <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
 <script>tinymce.init({selector:'textarea'});</script>
 <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<div class="container">
<h1 align="center">Insert New Product</h1>	
  <form action="insert_product.php" method="post" enctype="multipart/form-data">
    <div class="row">
      <div class="col-25">
        <label >Product title</label>
      </div>
      <div class="col-75">
        <input type="text" name="product_title" placeholder="Product title">
      </div>
    </div>
   <div class="row">
      <div class="col-25">
        <label>Product categories</label>
      </div>
      <div class="col-75">
        <select name="product_cat">
          <option>select a category</option>
           <?php 
        $get_cats= "select * from categories";
        $run_cats= mysqli_query($con,$get_cats);
        while($row_cats=mysqli_fetch_array($run_cats)){

          $cat_id = $row_cats['cat_id'];
          $cat_title = $row_cats['cat_title'];
          echo "<option value='$cat_id'>$cat_title</option>";
      }
      ?>
  		</select>
      </div>
    </div>
   <div class="row">
      <div class="col-25">
        <label>Product brands</label>
      </div>
      <div class="col-75">
        <select name="product_brand">
          <option>select product brand</option>
           <?php 
        $get_brand= "select * from brands";
        $run_brand= mysqli_query($con,$get_brand);
        while($row_brand=mysqli_fetch_array($run_brand)){

          $brand_id = $row_brand['brand_id'];
          $brand_title = $row_brand['brand_title'];
          echo "<option value='$brand_id'>$brand_title</option>";
      }
      ?>
  		</select>
      </div>
    </div>
   
    <div class="row">
      <div class="col-25">
        <label >Product image 1</label>
      </div>
      <div class="col-75">
        <input type="file" name="product_img1" placeholder="Product image 1">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label>Product image 2</label>
      </div>
      <div class="col-75">
        <input type="file" name="product_img2" placeholder="Product image 2">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label>Product image 3</label>
      </div>
      <div class="col-75">
        <input type="file"  name="product_img3" placeholder="Product image 3">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label>Product price</label>
      </div>
      <div class="col-75">
        <input type="text" name="product_price" placeholder="Product price">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label>Product detail</label>
      </div>
      <div class="col-75">
        <textarea id="subject" name="product_desc" placeholder="write product details" style="height:200px" ></textarea>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label>Product Keyword</label>
      </div>
      <div class="col-75">
        <input type="text" name="product_keyword" placeholder="Product Keyword" >
      </div>
    </div>
    <div class="row">
      <input type="submit"  name="insert_product" value="Insert Product">
    </div>
  </form>
</div>

</body>
</html>

<?php
if(isset($_POST['insert_product']))
{
	$product_title=$_POST['product_title'];
	$product_cat=$_POST['product_cat'];
	$product_brand=$_POST['product_brand'];
	$product_price=$_POST['product_price'];
  $product_desc=$_POST['product_desc'];
	$status ='on';
	$product_keyword = $_POST['product_keyword'];

	//image names

	$product_img1 = $_FILES['product_img1']['name'];
	$product_img2 = $_FILES['product_img2']['name'];
	$product_img3 = $_FILES['product_img3']['name'];

	//image temp names:

	$temp_name1 = $_FILES['product_img1']['tmp_name'];
	$temp_name2 = $_FILES['product_img2']['tmp_name'];
	$temp_name3 = $_FILES['product_img3']['tmp_name'];


if($product_title == '' OR $product_cat=='' OR $product_brand=='' OR $product_desc == '' OR $product_price == '' OR $product_keyword=='' OR $product_img1=='')
{
  echo "<script>alert('Please fill the fields')</script>";
  exit();
}
else{

	$insert_product = "insert into product (cat_id,brand_id,date,product_title,product_img1,product_img2,product_img3,product_price,product_desc,product_keyword,status)values ('$product_cat','$product_brand',NOW(),'$product_title','$product_img1','$product_img2','$product_img3','$product_price','$product_desc','$product_keyword','$status')";

  //upload image to its folder
  move_uploaded_file($temp_name1,"product_imges/$product_img1");
  move_uploaded_file($temp_name2,"product_imges/$product_img2");
  move_uploaded_file($temp_name3,"product_imges/$product_img3");
 
	$run_product = mysqli_query($con,$insert_product);
	if($run_product)
	{
		echo "<script>alert('product insert sucessfully!')</script>";
	}
}
}

?>





































