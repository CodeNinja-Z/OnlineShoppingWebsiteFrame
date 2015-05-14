<?php include("Conn/conn.php");?>
<table width="209" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td height="153"><table width="209" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td height="33" colspan="3">&nbsp;</td>
            </tr>
            <tr>
              <td width="15">&nbsp;</td>
              <td width="177"><table width="180" height="10" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td valign="top"><table width="100%" height="100" border="0" align="center" cellpadding="0" cellspacing="1">
                      <tr>
                        <td><table width="180" height="100" border="0" align="center" cellpadding="0" cellspacing="0">
                            <tr>
                              <td><table width="180" border="0" cellpadding="0" cellspacing="0">
                           <script language="javascript">
							 function chkuserinput(form){
							   if(form.login.value==""){
								  alert("Enter user name!");
								  form.login.select();
								  return(false);
								}		
								if(form.password.value==""){
								  alert("enter pwd!");
								  form.password.select();
								  return(false);
								}	
							   return(true);				 
							 }
						  </script>
                                 
                                  <form name="form2" method="post" action="chkuser.php" onSubmit="return chkuserinput(this)">
                                    <tr>
                                      <td height="10" colspan="3">&nbsp;</td>
                                    </tr>
                                    <tr>
                                      <td width="50" height="20"><div align="right">user:</div></td>
                                      <td height="20" colspan="2"><div align="left">
                                          <input type="text" name="login" size="19" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'">
                                      </div></td>
                                    </tr>
                                    <tr>
                                      <td height="20"><div align="right">pwd:</div></td>
                                      <td colspan="2"><div align="left">
                                          <input type="password" name="password" size="19" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'">
                                      </div></td>
                                    </tr>

                                    <tr>
                                      <td height="20" colspan="3">                                        
										<div align="right">
                                          <input type="hidden" value="<?php echo $num;?>" name="num">
                                          <input name="submit" type="submit" value="submit">
										<a href="reg.php">register</a>&nbsp;
										</div>
									  </td>
                                    </tr>
                                  </form>
                              </table></td>
                            </tr>
                        </table></td>
                      </tr>
                  </table></td>
                </tr>
              </table></td>
              <td width="17">&nbsp;</td>
            </tr>
            <tr>
              <td colspan="3">&nbsp;</td>
            </tr>
          </table></td>
        </tr>
 </table>
      
