<html>
<head>
<title></title>
</head>
<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<p>&nbsp;</p>
<p> 
</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<script language="javascript">
	  function chkinput(form){
	    if(form.name.value==""){
		  alert("admin user name!");
		  form.name.select();
		  return(false);
		}
		if(form.pwd.value==""){
		  alert("pwd!");
		  form.pwd.select();
		  return(false);
		}
		return(true);
	  }
	</script>
<form name="form1" method="post" action="chkadmin.php" onSubmit="return chkinput(this)">
  <table width="545" border="0" align="center" cellpadding="0" cellspacing="0" id="__01">
	<tr>
		<td height="226"><font><b>Admin Login</b></font></td>
	</tr>
	<tr>
          <tr>
            <td width="257" align="center">admin user name:</td>
            <td width="94" align="center"><input type="text" name="name" size="14" maxlength="20" class="inputcss"></td>
            <td width="53" align="center">&nbsp;pwd:</td>
            <td width="104" align="center"><input type="password" name="pwd" size="14" maxlength="20" class="inputcss"></td>
            <td width="99">&nbsp;
                <input name="imageField" type="image" src="images/button-login.jpg" width="100" height="54" border="0"></td>
          </tr>
        </table></td>
	</tr>
</table>
</form>
</body>
</html>
