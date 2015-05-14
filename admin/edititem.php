<html>
<head>
<title>edit item</title>
</head>
<?php
  include("conn/conn.php");
  include("top.php");
?>
<body topmargin="0" leftmargin="0">
<?php
	   $sql=mysql_query("select count(*) as total from product ",$conn);
	   $info=mysql_fetch_array($sql);
	   $total=$info[total];
	   if($total==0){
	     echo "no product yet!";
	   }
	   else
	    {
?>
<form name="form1" method="post" action="deleteitem.php">
  <p>&nbsp;</p>
  <table width="750" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="75" bgcolor="#666666"><table width="750" border="0" cellpadding="0" cellspacing="1">
	  <tr bgcolor="#FFCF60">
        <td height="20" colspan="10"><div align="center" class="style1">Edit item</div></td>
      </tr>
      <tr>
        <td width="60" height="28" bgcolor="#FFFFFF"><div align="center">Delete</div></td>
        <td width="100" bgcolor="#FFFFFF"><div align="center">id</div></td>        
        <td width="100" bgcolor="#FFFFFF"><div align="center">Name</div></td>
        <td width="100" bgcolor="#FFFFFF"><div align="center">Price</div></td>
        <td width="100" bgcolor="#FFFFFF"><div align="center">Description</div></td>
        <td width="100" bgcolor="#FFFFFF"><div align="center">Photo</div></td>
        <td width="100" bgcolor="#FFFFFF"><div align="center">Edit</div></td>
      </tr>
	  <?php
           $sql1=mysql_query("select * from product order by id ",$conn);
		   while($info1=mysql_fetch_array($sql1))
		    {
	  ?>
      <tr>
        <td height="25" bgcolor="#FFFFFF"><div align="center">
          <input type="checkbox" name="<?php echo $info1[id];?>" value=<?php echo $info1[id];?>>
        </div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info1[id];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info1[name];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info1[price];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info1[description];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info1[photo_url];?></div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="center"><a href="changeitem.php?id=<?php echo $info1[id];?>">edit</a></div></td>
      </tr>
	 <?php
	    }
      ?>
    </table></td>
  </tr>
</table>
<table width="750" height="25" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="165">
	  <div align="left"><input name="submit" type="submit" id="submit" value="Delete items">
	</td>
  </tr>
</table>
</form>
  <?php
	}
  ?>
</body>
</html>
