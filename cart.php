<?php
 session_start();
 if($_SESSION[username]==""){
    echo "<script>alert('log in first!');history.back();</script>";
	exit;
  }
?>
<?php
 include("top.php");
?>
<table width="766" height="438" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="229" height="438" valign="top" bgcolor="#F4F4F4"><?php include("left.php");?></td>
    <td width="561" align="center" valign="top" bgcolor="#FFFFFF">
      <table width="557" border="0" align="center" cellpadding="0" cellspacing="0">
        <form name="form1" method="post" action="cart.php">
          <tr>
            <td height="46" background="images/cart.gif"></td>
          </tr>
          <tr>
            <td  bgcolor="#FFFFFF"><table width="500" border="0" align="center" cellpadding="0" cellspacing="1">
                <?php
			  session_register("total");
			  if($_GET[emp]=="yes"){
			     $_SESSION[producelist]="";
				 $_SESSION[quantity]=""; 
			  }
			   $cart=explode("@",$_SESSION[producelist]);
			   $s=0;
			   for($i=0;$i<count($cart);$i++){
			       $s+=intval($cart[$i]);
			   }
			  if($s==0 ){
				   echo "<tr>";
                   echo" <td height='25' colspan='6' bgcolor='#FFFFFF' align='center'>empty cart!</td>";
                   echo"</tr>";
				}
			  else{ 
			?>
                <tr>
                  <td width="125" height="25" bgcolor="#FFFFFF"><div align="center">name</div></td>
                  <td width="52" bgcolor="#FFFFFF"><div align="center">quantity</div></td>
                  <td width="64" bgcolor="#FFFFFF"><div align="center">price</div></td>
                  <td width="66" bgcolor="#FFFFFF"><div align="center">count</div></td>
                  <td width="71" bgcolor="#FFFFFF"><div align="center">operation</div></td>
                </tr>
                <?php
			    $total=0;
			    $array=explode("@",$_SESSION[producelist]);
				$arrayquantity=explode("@",$_SESSION[quantity]);
				 while(list($name,$value)=each($_POST)){
					  for($i=0;$i<count($array)-1;$i++){
					    if(($array[$i])==$name){
						  $arrayquantity[$i]=$value;  
						}
					}
				}
			    $_SESSION[quantity]=implode("@",$arrayquantity);
				
				for($i=0;$i<count($array)-1;$i++){ 
				   $id=$array[$i];
				   $num=$arrayquantity[$i];
				  
				  if($id!=""){
				   $sql=mysql_query("select * from product where id='".$id."'",$conn);
				   $info=mysql_fetch_array($sql);
				   $total1=$num*$info[price];
				   $total+=$total1;
				   $_SESSION["total"]=$total;
			?>
                <tr>
                  <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[name];?></div></td>
                  <td height="25" bgcolor="#FFFFFF"><div align="center">
                  <input type="text" name="<?php echo $info[id];?>" size="2" value=<?php echo $num;?>>
                  </div></td>
                  <td height="25" bgcolor="#FFFFFF"><div align="center">$<?php echo $info[price];?></div></td>
                  <td height="25" bgcolor="#FFFFFF"><div align="center">$<?php echo @($info[price] * $num);?></div></td>
                  <td height="25" bgcolor="#FFFFFF"><div align="center"><a href="removecart.php?id=<?php echo $info[id]?>">remove</a></div></td>
                </tr>
                <?php
			      }
				 }
			 ?>
                <tr>
                  <td height="25" colspan="8" bgcolor="#FFFFFF"><div align="right">
                      <table width="500" height="25" border="0" align="center" cellpadding="0" cellspacing="0">
                        <tr>
                          <td width="125"><div align="center">
                              <input name="submit2" type="submit" value="change quantity">
                          </div></td>
                          <td width="125"><div align="center"><a href="checkout.php">check out</a></div></td>
                          <td width="125"><div align="center"><a href="cart.php?emp=yes">empty cart</a></div></td>
                          <td width="125"><div align="left">Total: $<?php echo $total;?></div></td>
                        </tr>
                      </table>
                  </div></td>
                </tr>
                <?php
			 }
			?>
            </table></td>
          </tr>
        </form>
    </table></td>
  </tr>
</table>

