
<html>
<head>
<title>Display order</title>
</head>
<?php 
	include("conn/conn.php");
	include("top.php");
?>
<body topmargin="0" leftmargin="0">
	<?php
		$sql=mysql_query("select count(*) as total from `order` ",$conn);
		$info=mysql_fetch_array($sql);
		$total=$info[total];
		if($total==0){
		 echo "No finalized order yet!";
		}
		else{
		   $pagesize=20;
		   if ($total<=$pagesize){
			  $pagecount=1;
			} 
			if(($total%$pagesize)!=0){
			   $pagecount=intval($total/$pagesize)+1;
			}else{
			   $pagecount=$total/$pagesize;
			}
			if(($_GET[page])==""){
				$page=1;
			
			}else{
				$page=intval($_GET[page]);
			}
		   $sql1=mysql_query("select * from `order` order by id limit ".($page-1)*$pagesize.",$pagesize",$conn);
		   $info1=mysql_fetch_array($sql1);
	?>
<form name="form1" method="post" action="deleteorder.php">   
<table width="750" border="0" align="center" cellpadding="0" cellspacing="0">
	  <p>&nbsp;</p>
  <tr>
    <td height="20" bgcolor="#FFCF60"><div align="center" class="style1">Display orders </div></td>
  </tr>
  <tr>
    <td height="40" bgcolor="#666666"><table width="750" height="44" border="0" align="center" cellpadding="0" cellspacing="1">
	  <tr>
        <td width="121" height="20" bgcolor="#FFFFFF"><div align="center">order id</div></td>
        <td width="59" bgcolor="#FFFFFF"><div align="center">customer id</div></td>
        <td width="60" bgcolor="#FFFFFF"><div align="center">order date</div></td>
        <td width="70" bgcolor="#FFFFFF"><div align="center">order time</div></td>
        <td width="88" bgcolor="#FFFFFF"><div align="center">total</div></td>
        <td width="87" bgcolor="#FFFFFF"><div align="center">creditcard number</div></td>
        <td width="141" bgcolor="#FFFFFF"><div align="center">creditcard expiration date</div></td>
        <td width="115" bgcolor="#FFFFFF"><div align="center">Delete</div></td>
      
	  </tr>
	  <?php
		    do{
	  ?>
      <tr>
        <td height="21" bgcolor="#FFFFFF"><div align="center"><?php echo $info1[id];?></div></td>
        <td height="21" bgcolor="#FFFFFF"><div align="center"><?php echo $info1[customer_id];?></div></td>
        <td height="21" bgcolor="#FFFFFF"><div align="center"><?php echo $info1[order_date];?></div></td>
        <td height="21" bgcolor="#FFFFFF"><div align="center"><?php echo $info1[order_time];?></div></td>
        <td height="21" bgcolor="#FFFFFF"><div align="center"><?php echo $info1[total];?></div></td>
        <td height="21" bgcolor="#FFFFFF"><div align="center"><?php echo $info1[creditcard_number];?></div></td>
        <td height="21" bgcolor="#FFFFFF"><div align="center"><?php echo $info1[creditcard_month]."/".$info1[creditcard_year];?></div></td>
        <td height="21" bgcolor="#FFFFFF"><div align="center">
            <input type="checkbox"  name=<?php echo $info1[id];?> value=<?php echo $info1[id];?>></div></td>
      </tr>
	  <?php
	      }while($info1=mysql_fetch_array($sql1))
	  ?>
	 
    </table></td>
  </tr>
</table>
<table width="750" height="20" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="652"><div align="right">
	Order count:
	    <?php
		   echo $total;
		  ?>        
		page&nbsp;<?php echo $page;?>/&nbsp;<?php echo $pagecount; ?>&nbsp;
        <?php
		  if($page>=2)
		  {
		  ?>
        <a href="lookorder.php?page=1" title="first"><font face="webdings"> first </font></a>
		 <a href="lookorder.php?id=<?php echo $id;?>&page=<?php echo $page-1;?>" title="prev"><font face="webdings"> prev </font></a>
        <?php
		  }
		   if($pagecount<=4){
		    for($i=1;$i<=$pagecount;$i++){
		  ?>
        <?php
		     }
		   }else{
		   for($i=1;$i<=4;$i++){	 
		  ?>
        <a href="lookorder.php?page=<?php echo $i;?>"><?php echo $i;?></a>
        <?php }?>
        <a href="lookorder.php?page=<?php echo $page+1;?>" title="next"><font face="webdings"> next </font></a> 
		<a href="lookorder.php?id=<?php echo $id;?>&page=<?php echo $pagecount;?>" title="last"><font face="webdings"> last </font></a>
        <?php }?>

	</div></td>
    <td width="98"><div align="center"><input type="hidden" name="page_id" value=<?php echo $page;?>><input type="submit" value="Delete orders"></div></td>
  </tr>
</table>
<?php
 }
?>
</form>
</body>
</html>
