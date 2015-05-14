<?php
 include("top.php");
?>
<script language="javascript">
  function chknc(nc)
  {
    window.open("chkusernc.php?nc="+nc,"newframe","width=200,height=10,left=500,top=200,menubar=no,toolbar=no,location=no,scrollbars=no,location=no");
  }
</script>
<script language="javascript">
  function chkinput(form)
  {
    if(form.login.value=="")
	{
	 alert("Please enter username!");
	 form.login.select();
	 return(false);
	}
	if(form.password.value=="")
	{
	 alert("Please enter pwd!");
	 form.password.select();
	 return(false);
	}
	if(form.password.value.length<6)
	 {
	 alert("pwd longer than 6!");
	 form.password.select();
	 return(false);
	 }	
   if(form.email.value=="")
	{
	 alert("Please enter email!");
	 form.email.select();
	 return(false);
	 }
	if(form.email.value.indexOf('@')<0)
	{
	 alert("wrong email!");
	 form.email.select();
	 return(false);
	 }
   if(form.first.value=="")
	{
	 alert("Please enter fist name!");
	 form.first.select();
	 return(false);
	 }
  if(form.last.value=="")
	{
	 alert("Please enter last name!");
	 form.last.select();
	 return(false);
	 }
   return(true);
  }
</script>
<table width="766" height="350" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="229" height="350" align="center" valign="top" bgcolor="#F0F0F0"><?php include("left.php");?></td>
    <td width="561" align="center" valign="top" bgcolor="#FFFFFF"><table width="557"  height="15" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td width="500"><table width="557" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td  bgcolor="#555555"><table width="557" border="0" align="center" cellpadding="0" cellspacing="0">
                  <form name="form1" method="post" action="savereg.php" onSubmit="return chkinput(this)">
                    <tr>
                      <td width="100" height="20" bgcolor="#FFFFFF"><div align="center">&nbsp;&nbsp;username</div></td>
                      <td width="397" bgcolor="#FFFFFF"><div align="left">
                          <input type="text" name="login" size="25" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'">
                          <input name="button2" type="button" onclick="chknc(form1.login.value)" value="check user name">
                      </div></td>
                    </tr>
                    <tr>
                      <td height="20" bgcolor="#FFFFFF"><div align="center">pwd:</div></td>
                      <td height="20" bgcolor="#FFFFFF"><div align="left">
                          <input type="password" name="password" size="25" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'">
                    </tr>
                    <tr>
                      <td height="20" bgcolor="#FFFFFF"><div align="center">E-mail:</div></td>
                      <td height="20" bgcolor="#FFFFFF"><div align="left">
                          <input type="text" name="email" size="25" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'">
                    </tr>
                    <tr>
                      <td height="20" bgcolor="#FFFFFF"><div align="center">fist name:</div></td>
                      <td height="20" bgcolor="#FFFFFF"><div align="left">
                          <input type="text" name="first" size="25" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'">
                      </div></td>
                    </tr>
                    <tr>
                      <td height="20" bgcolor="#FFFFFF"><div align="center">last name:</div></td>
                      <td height="20" bgcolor="#FFFFFF"><div align="left">
                          <input type="text" name="last" size="25" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'">
                    </tr>

                    <tr>
                      <td height="20" colspan="2" bgcolor="#FFFFFF"><div align="center">
                          <input name="submit2" type="submit" value="submit">
&nbsp;&nbsp;
                      <input name="reset" type="reset" value="edit">
                      </div></td>
                    </tr>
                  </form>
              </table></td>
            </tr>
          </table>
		</td>
      </tr>
    </table></td>
  </tr>
</table>
