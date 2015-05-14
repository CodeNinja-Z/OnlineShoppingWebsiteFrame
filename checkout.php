<?php
	include("top.php");
	include("conn/conn.php");
    session_start();
	$sql=mysql_query("select * from customer where login = ".$_SESSION[username]."",$conn);
	$info=mysql_fetch_array($sql);

?>
<table width="766" height="438" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="209" height="438" valign="top" bgcolor="#F4F4F4"><div align="center">
      <?php include("left.php");?>
      </div></td>
    <td width="557" align="center" valign="top" bgcolor="#FFFFFF">       <script language="javascript">
		   function chkinput(form){
			   var cardDate = new Date();
			   cardDate.setFullYear(2000+parseInt(form.creditcard_year.value), parseInt(form.creditcard_month.value)-1);
			   var curDate = new Date();
			   if(form.creditcard_number.value.length!=16){
				  alert("invalid credit card number!");
				  form.creditcard_number.select();
				  return(false);
				}
			   if(form.creditcard_month.value==""){
				  alert("please enter expiration month!");
				  form.creditcard_number.select();
				  return(false);
				}				
			   if(form.creditcard_year.value==""){
				  alert("please enter expiration year!");
				  form.creditcard_number.select();
				  return(false);
				}				
				if(curDate > cardDate){
				  alert("This card is expired!");
				  form.creditcard_month.select();
				  return(false);
				}
				return(true);
			 }
		 </script>
      <table width="557" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td height="6"></td>
        </tr>
      </table>
      <table width="530" border="0" align="center" cellpadding="1" cellspacing="0" bgcolor="#FCC223">
      <tr>
        <td height="25" bgcolor="#FEDD9A"><div align="center" style="color: #720206">Receiver info</div></td>
      </tr>
      <tr>
        <td height="295"><table width="530" height="293" border="0" align="center" cellpadding="0" cellspacing="1">

            <form name="form1" method="post" action="saveorder.php" onSubmit="return chkinput(this)">
              <tr>
                <td width="100" height="25" bgcolor="#FFFFFF"><div align="center">Name:</div></td>
                <td width="183" bgcolor="#FFFFFF"><div align="left">
                <?php 
					echo $info[first]."  ";
					echo $info[last];
					?>
                </div></td>
              </tr>
              <tr>
                <td height="25" bgcolor="#FFFFFF"><div align="center">Credit-card number:</div></td>
                <td height="25" colspan="3" bgcolor="#FFFFFF"><div align="left">
                    <input type="text" name="creditcard_number" size="25" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'">
                </div></td>
              </tr>
              <tr>
                <td height="25" bgcolor="#FFFFFF"><div align="center">expiration date(MM/YY):</div></td>
                <td height="25" colspan="3" bgcolor="#FFFFFF"><div align="left">
                    <input type="text" name="creditcard_month" size="2" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'">
                    / <input type="text" name="creditcard_year" size="2" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'">

                </div></td>
              </tr>
              <tr>
                <td height="25" bgcolor="#FFFFFF"><div align="center">Email:</div></td>
                <td height="25" colspan="3" bgcolor="#FFFFFF"><div align="left">
                <?php 
					echo $info[email];
					?>
				</div></td>
              </tr>

                <td height="22" colspan="4" bgcolor="#FFFFFF"><div align="center">
                    <input name="submit2" type="submit" value="Check out">
                </div></td>
              </tr>
            </form>
        </table></td>
      </tr>
    </table></td>
  </tr>
</table>
<?php
 if($_GET[order_id]!="")
  {  $order=$_GET[order_id];
     $array=explode("@",$_SESSION[producelist]);
	 $sum=count($array)*20+360;
    echo" <script language='javascript'>";
	echo" window.open('showorder.php?order='+'".$order."','newframe','top=150,left=200,width=600,height=".$sum.",menubar=no,toolbar=no,location=no,scrollbars=no,status=no ')";
	echo "</script>";

  }
?>
