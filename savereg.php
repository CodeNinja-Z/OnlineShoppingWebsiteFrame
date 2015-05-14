<?php
session_start();
include("conn/conn.php");

$login=$_POST[login];
$pwd1=$_POST[password];
$password=($_POST[password]);
$email=$_POST[email];
$first=$_POST[first];
$last=$_POST[last];
$sql=mysql_query("select * from customer where login='".$login."'",$conn);
$info=mysql_fetch_array($sql);
if($info==true)
 {
   echo "<script>alert('username existed!');history.back();</script>";
   exit;
 }
 else
 {  
    mysql_query("insert into customer (login,password,email,first,last) values ('$login','$password','$email','$first','$last')",$conn);
	session_register("username");
	$username=$login;
    session_register("producelist");
	$producelist="";
	session_register("quantity");
	$quantity="";
    echo "<script>alert('success!');window.location='index.php';</script>";
 }
?>
