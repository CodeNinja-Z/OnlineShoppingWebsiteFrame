<?php
include("conn/conn.php");
while(list($name,$value)=each($_POST))
  {
    mysql_query("delete from customer where id=".$value."",$conn); 
  }
header("location:edituser.php");
?>
