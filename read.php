<?php
	include("top.php");
	include("conn/conn.php");
?>
<table width="766" height="438" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="209" height="438" valign="top" bgcolor="#F0F0F0"><?php include("left.php");?></td>
    <td width="581" align="center" valign="top" bgcolor="#FFFFFF">
		<?php 
		$sql=mysql_query("select * from product where id=".$_GET[id]."",$conn); 
		$info=mysql_fetch_object($sql);
		?>
		<div>product name:<?php echo $info->name;?></div>
		<div>product description:<?php echo $info->description;?></div>
		<div>product price: $<?php echo $info->price;?></div>
		<div><?php echo "<p><img src='" . "images/product/" . $info->photo_url . "' width='100px'/></p>"; ?></div>
	</td>
