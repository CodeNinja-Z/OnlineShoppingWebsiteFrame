<?php
session_start();
include("conn/conn.php");
$sql=mysql_query("select * from customer where login='".$_SESSION[username]."'",$conn);
$info=mysql_fetch_array($sql);
$customer_id=$info[id];
$total=(float)$_SESSION[total];
$creditcard_number=$_POST[creditcard_number];
$creditcard_month=(int)$_POST[creditcard_month];
$creditcard_year=(int)$_POST[creditcard_year];
mysql_query("insert into `order` (customer_id, order_date, order_time, total, creditcard_number, creditcard_month, creditcard_year) values ('$customer_id',CURRENT_DATE(), CURRENT_TIME(),'$total','$creditcard_number','$creditcard_month','$creditcard_year')",$conn); 
if(is_numeric($customer_id)){
echo $customer_id;
}

$array=explode("@",$_SESSION[producelist]);
$array_quatity=explode("@",$_SESSION[quantity]);

$rowSQL = mysql_query( "SELECT MAX(id) AS max FROM `order`;" );
$row = mysql_fetch_array( $rowSQL );
$curorder = $row['max'];
for($i=0;$i<count($array)-1;$i++){ 
	$id=$array[$i];
	$num=$array_quatity[$i];
	if($id!=""){
		mysql_query("insert into order_item (order_id, product_id, quantity) values('$curorder', '$id', '$num')",$conn);	
	}
}
header("location:checkout.php?order_id=$curorder");
?>
