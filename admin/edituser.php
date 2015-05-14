
<html>
<head>
<title>User Mangement</title>
</head>

<body topmargin="0" leftmargin="0">
<?php
       include("conn/conn.php");
       include("top.php");
       $sql=mysql_query("select count(*) as total from customer ",$conn);
	   $info=mysql_fetch_array($sql);
	   $total=$info[total];
	   if($total==0)
	   {
	     echo "no user!";
	   }
	   else
	   {
?>
<form name="form1" method="post" action="deleteuser.php">
<table width="600" border="0" align="center" cellpadding="0" cellspacing="0">
	  <p>&nbsp;</p>
  <tr>
    <td height="20" bgcolor="#FFCF60"><div align="center" class="style1">user management</div></td>
  </tr>
  <tr>
    <td  bgcolor="#666666"><table width="600" border="0" align="center" cellpadding="0" cellspacing="1">
       <?php
             $sql1=mysql_query("select * from customer order by id desc ",$conn);
	   ?>
	   <tr>
          <td width="224" height="20" bgcolor="#FFFFFF"><div align="center">User id</div></td>
          <td width="424" bgcolor="#FFFFFF"><div align="center">User Name</div></td>
          <td width="424" bgcolor="#FFFFFF"><div align="center">First Name</div></td>
          <td width="424" bgcolor="#FFFFFF"><div align="center">Last Name</div></td>
          <td width="224" bgcolor="#FFFFFF"><div align="center">password</div></td>
          <td width="224" bgcolor="#FFFFFF"><div align="center">email</div></td>
          <td width="424" bgcolor="#FFFFFF"><div align="center">Delete User</div></td>
 
        </tr>
       <?php
	      while($info1=mysql_fetch_array($sql1))
		     {
	   ?>
	   <tr>
          <td height="20" bgcolor="#FFFFFF"><div align="center"><?php echo $info1[id];?></div></td>
          <td height="20" bgcolor="#FFFFFF"><div align="center"><?php echo $info1[login];?></div></td>
          <td height="20" bgcolor="#FFFFFF"><div align="center"><?php echo $info1[first];?></div></td>
          <td height="20" bgcolor="#FFFFFF"><div align="center"><?php echo $info1[last];?></div></td>
          <td height="20" bgcolor="#FFFFFF"><div align="center"><?php echo $info1[password];?></div></td>
          <td height="20" bgcolor="#FFFFFF"><div align="center"><?php echo $info1[email];?></div></td>  
          <td height="20" bgcolor="#FFFFFF"><div align="center">
          <input type="checkbox" name="<?php echo $info1[id];?>" value=<?php echo $info1[id];?>></div></td>          
        </tr>
		<?php
	        }
		?>
    </table></td>
  </tr>
</table>
<table width="600" height="25" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="92"><div align="center"><input type="submit" value="Delete users">
    </div></td>
  </tr>
</table>
<?php
   }
?>
</form>
</body>
</html>
