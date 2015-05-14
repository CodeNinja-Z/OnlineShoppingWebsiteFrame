<?php
 include("conn/conn.php");
 while(list($name,$value)=each($_POST))
  {
	  $sql1=mysql_query("select * from order_item where product_id='".$value."'",$conn);
	  $info=mysql_fetch_array($sql1);
	  mysql_query("delete from order_item where id='".$info[id]."'",$conn);
      mysql_query("delete from product where id='".$value."'",$conn);
  }
 header("location:edititem.php"); 
?>
