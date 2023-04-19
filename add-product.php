<?php  
include "config.php";

$product_code = $_POST['product_code'];
$product_name = $_POST['product_name'];
$product_desc = $_POST['product_desc'];
$qty = $_POST['qty'];
$price = $_POST['price'];
$product_img_loc = $_FILES['product_img_name']['tmp_name'];
$product_img_name = $_FILES['product_img_name']['name'];
$product_img = $_FILES['product_img_name'];

$r=rand();
$dir="image/products";
$NewLocation= 'images/products/'.$r.$product_img_name;


move_uploaded_file($product_img_loc,$NewLocation);

$q="INSERT INTO products(product_code, product_name,product_img_name, product_desc, qty, price) VALUES ('$product_code','$product_name','$NewLocation','$product_desc',$qty,$price)";

$add=$mysqli -> query($q);
if($add)
{
    header("Location:index.php");
}

?>