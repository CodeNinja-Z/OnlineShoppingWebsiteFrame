<?php
include("conn/conn.php");
if(is_numeric($_POST[price])==false)
 {
   echo "<script>alert('Price must be numeric!');history.back();</script>";
   exit;
 }
$name=$_POST[name];
$price=$_POST[price];
$description=$_POST[description];
$upfile=$_POST[upfile];

function imgdir(){
   $dir = "product/";
   if(!is_dir($dir)){
      mkdir($dir,0777);
   }
   return $dir;
}

$uploadfile = imgdir();

move_uploaded_file($_FILES['upfile']['tmp_name'], $uploadfile.$_FILES['upfile']['name']);
if(trim($_FILES['upfile']['name']!=""))
 { 
  $uploadfile=$_FILES['upfile']['name'];
}
else
 {
  $uploadfile="";
 }
 
mysql_query("insert into product(name, price, photo_url, description)values('$name','$price','$uploadfile','$description')",$conn);
echo "<script>alert('product: ".$name." added!');window.location.href='additem.php';</script>";
?>
