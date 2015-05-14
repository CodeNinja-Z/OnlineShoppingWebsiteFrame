<html>
<head>
<title>add item</title>
</head>
<?php 
	include("conn/conn.php");
	include("top.php");
?>
<body topmargin="0" leftmargin="0">
<table width="720" border="0" align="center" cellpadding="0" cellspacing="0">
    <p>&nbsp;</p>
	<tr>
    <td height="20" bgcolor="#FFCF60"><div align="center" class="style1">add item</div></td>
  </tr>
  <tr>
    <td height="253" bgcolor="#666666"><table width="720" border="0" cellpadding="0" cellspacing="1">
	<script language="javascript">
	function chkinput(form)
	{
	  if(form.name.value=="")
	   {
	     alert("item name!");
		 form.name.select();
		 return(false);
	   }
	  if(form.price.value=="")
	   {
	     alert("price!");
		 form.price.select();
		 return(false);
	   }
	   if(form.description.value=="")
	   {
	     alert("description!");
		 form.description.select();
		 return(false);
	   }
	
	   return(true);
	}
    </script>
     <form name="form1" enctype="multipart/form-data" method="post" action="savenewitem.php" onSubmit="return chkinput(this)">
	  <tr>
        <td width="129" height="25" bgcolor="#FFFFFF"><div align="center">name:</div></td>
        <td width="618" bgcolor="#FFFFFF"><div align="left"><input type="text" name="name" size="25"></div></td>
      </tr>
      <tr>
        <td height="25" bgcolor="#FFFFFF"><div align="center">price:</div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="left">$<input type="text" name="price" size="10"></div></td>
      </tr>
      <tr>
        <td height="25" bgcolor="#FFFFFF"><div align="center">photo:</div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="left">
		<input type="hidden" name="MAX_FILE_SIZE" value="2000000">
        <input type="file" name="upfile" size="30"></div></td>
      </tr>
      <tr>
        <td height="80" bgcolor="#FFFFFF"><div align="center">description:</div></td>
        <td height="25" bgcolor="#FFFFFF"><div align="left"><textarea name="description" cols="80" rows="8"></textarea>
        </div></td>
      </tr>
      <tr>
        <td height="25" colspan="2" bgcolor="#FFFFFF"><div align="center"><input name="submit" type="submit" id="submit" value="Add">
        &nbsp;&nbsp;<input type="reset" value="reset"></div></td>
      </tr>
	  </form>
    </table></td>
  </tr>
</table>
</body>
</html>
