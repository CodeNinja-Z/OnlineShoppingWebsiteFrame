<?php
	$page=intval($_POST[page_id]);
	include("conn/conn.php");
	while(list($value,$name)=each($_POST))
	{ 
		$sql1=mysql_query("select * from order_item where order_id='".$value."'",$conn);
		$info=mysql_fetch_array($sql1);
		mysql_query("delete from order_item where id='".$info[id]."'",$conn);
		mysql_query("delete from `order` where id='".$value."'",$conn);
	}
	header("location:lookorder.php?page=".$page."");
?>
