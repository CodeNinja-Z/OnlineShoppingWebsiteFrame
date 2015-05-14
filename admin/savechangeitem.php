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

if($upfile!="")
{
$sql=mysql_query("select * from product where id=".$_GET[id]."",$conn);
$info=mysql_fetch_array($sql);
}

function imgdir(){
   $dir = "product/";
   if(!is_dir($dir)){
      mkdir($dir,0777);
   }
   return $dir;
}
$uploadfile = imgdir();
move_uploaded_file($_FILES['upfile']['tmp_name'], $uploadfile.$_FILES['upfile']['name']);
$uploadfile=$_FILES['upfile']['name'];
mysql_query("update product set name='$name',price='$price',photo_url='$uploadfile',description='$description' where id=".$_GET[id]."",$conn);
echo "<script>alert('product: ".$name." edited!');window.location='edititem.php';</script>";
?>
