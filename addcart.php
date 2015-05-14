<?php
session_start();
include("conn/conn.php");
if($_SESSION[username]==""){
  echo "<script>alert('please log in!');history.back();</script>"; 
  exit;
 }
$id=strval($_GET[id]);
$sql=mysql_query("select * from product where id='".$id."'",$conn); 
$info=mysql_fetch_array($sql);
  $array=explode("@",$_SESSION[producelist]);
  for($i=0;$i<count($array)-1;$i++){
	 if($array[$i]==$id){
	     echo "<script>alert('already in cart!');history.back();</script>";
		 exit;
	  }
	}
  $_SESSION[producelist]=$_SESSION[producelist].$id."@";
  $_SESSION[quantity]=$_SESSION[quantity]."1@";
  header("location:cart.php");
?> 
