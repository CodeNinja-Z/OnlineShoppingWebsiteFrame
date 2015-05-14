<?php
session_start();
?>
<html>
<head>
<title>order</title>
<style type="text/css">
<!--
.style5 {
	color: #000000;
	font-weight: bold;
}
.style6 {color: #000000}
.style7 {color: #990000}
-->
</style>
</head>
<?php
  include("conn/conn.php");
  $order_id=$_GET[order];
  $sql1=mysql_query("select * from order_item where order_id='".$order_id."'",$conn);

?>
<body topmargin="0" leftmargin="0" class="scrollbar">
	<font color=red><b><i>For printing, <a href=# onclick="window.print();return false;">click here</a> or press Ctrl+P</i></b></font>
<table width="600" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="306" bgcolor="#FFFFFF"><table width="600"  border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td height="20" bgcolor="#FFEDBF"><div align="center" class="style7">Congratuations! <?php echo $_SESSION[username];?> ,Your order is finalized:</div></td>
      </tr>
      <tr>
        <td height="20" bgcolor="#FFFFFF"><div align="left"><span class="style5">&nbsp;order id:</span><?php echo $order_id;?></div></td>
      </tr>
      <tr>
        <td height="20" bgcolor="#FFFFFF"><div align="left" class="style5">&nbsp;order list:</div></td>
      </tr>
    </table>
      <table width="500" height="60" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td bgcolor="#666666"><table width="500" border="0" align="center" cellpadding="0" cellspacing="1">
              <tr bgcolor="#FFEDBF">
                <td width="153" height="20"><div align="center" class="style7">product name</div></td>
                <td width="80"><div align="center" class="style7">price</div></td>
                <td width="80"><div align="center" class="style7">quantity</div></td>
                <td width="101"><div align="center" class="style7">count</div></td>
              </tr>
              <?php
				$total=0;
				while($info1=mysql_fetch_array($sql1))
				 {
					 $sql2=mysql_query("select * from product where id='".$info1[product_id]."'",$conn);
					 $info2=mysql_fetch_array($sql2);
					 $total=$total+=$info1[quantity]*$info2[price];
				?>
              <tr bgcolor="#FFFFFF">
                <td height="20"><div align="center"><?php echo $info2[name];?></div></td>
                <td height="20"><div align="center"><?php echo $info2[price];?></div></td>
                <td height="20"><div align="center"><?php echo $info1[quantity];?></div></td>
                <td height="20"><div align="center"><?php echo $info1[quantity]*$info2[price];?></div></td>
              </tr>
              <?php
	   }
	   
	 ?>
              <tr bgcolor="#FFFFFF">
                <td height="20" colspan="5">
                  <div align="right"><span class="style5">Total: $</span><?php echo $total;?> </div></td>
              </tr>
          </table>
        </tr>
        <table width="480" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr bgcolor="#FFFFFF">Customer Infomation:
        <?php 
        $sql3=mysql_query("select customer_id from `order` where id='".$order_id."'",$conn);
		$info3=mysql_fetch_array($sql3); 
		$sql4=mysql_query("select * from customer where id='".$info3[0]."'",$conn);
		$info4=mysql_fetch_array($sql4); 
		?>
          <td width="181" height="20" align="center"><div align="left" class="style6">&nbsp;First Name:</div></td>
          <td colspan="3"><div align="left"><?php echo $info4[first];?></div></td>
        </tr>
        <tr bgcolor="#FFFFFF">
          <td height="20" align="center"><div align="left" class="style6">&nbsp;Last Name:</div></td>
          <td height="20" colspan="3"><div align="left"><?php echo $info4[last];?></div></td>
        </tr>
        <tr bgcolor="#FFFFFF">
          <td height="20" align="center"><div align="left" class="style6">&nbsp;E-mail:</div></td>
          <td height="20"><div align="left"><?php echo $info4[email];?></div></td>
          <td height="20">&nbsp;</td>
          <td height="20">&nbsp;</td>
        </tr>
          </td>

      </table>
	<?php
		$_SESSION[producelist]="";
		$_SESSION[quatity]=""; 
		include("conn/conn.php");$this->load->library('email');
		$this->email->from('linrjun@gmail.com', 'Sihan Wu');
		$sql=mysql_query("select email from customer where login = ".$_SESSION[username]."",$conn);
		$info=mysql_fetch_array($sql);
		$this->email->to($info);
		$this->email->subject('receipt');
		$this->email->message('This is a receipt :)');
		$this->email->send();
		echo $this->email->print_debugger();
	?>
	</td>
  </tr>
</table>
</body>
</html>
