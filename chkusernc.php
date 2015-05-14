<?php
 $nc=trim($_GET[nc]);
?>
<?php
 include("conn/conn.php");
?>
<html>
<head>
<title>
Check username conflicts
</title>
</head>
<body topmargin="0" leftmargin="0">
<table width="200" height="100" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FADD33">
  <tr>
    <td height="50"><div align="center">
	
	<?php
	  if($nc=="")
	  {
	    echo "please enter username!";
	  
	  }
	  else
	  {
	    $sql=mysql_query("select * from customer where name='".$nc."'",$conn);  
	    $info=mysql_fetch_array($sql);
		if($info==true)
		{
		  echo "username existed!";
		}
		else
		{
		  echo "username can be used!";
		} 
	  }
	?>
	</div></td>
  </tr>
  <tr>
    <td height="50"><div align="center"><input type="button" value="close" class="buttoncss" onClick="window.close()"></div></td>
  </tr>
</table>
</body>
