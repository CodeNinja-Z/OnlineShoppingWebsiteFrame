<?php
 include("top.php");
 session_start();
?>
<table width="766" height="438" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="209" height="438" valign="top" bgcolor="#F0F0F0"><?php include("left.php");?></td>
    <td width="581" align="center" valign="top" bgcolor="#FFFFFF">
      <?php
       $sql=mysql_query("select count(*) as total from product",$conn);
	   $info=mysql_fetch_array($sql);
	?>
      <table width="550" height="10" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td background="images/line1.gif"></td>
        </tr>
      </table>
      <table width="550" height="70" border="0" align="center" cellpadding="0" cellspacing="0">
        <?php
	         $sql1=mysql_query("select * from product ",$conn);
             while($info1=mysql_fetch_array($sql1))
		     {
		  ?>
		  <td>Name: <a href="read.php?id=<?php echo $info1[id];?>"><?php echo $info1[name];?></a></td>
		  <?php 
 	  
			echo "<tr>";
			echo "<td>Description:" . $info1[description] . "</td>";
			echo "<td>Price: $" . $info1[price] . "</td>";
			echo "<td><img src='" . "admin/product/" . $info1[photo_url] . "' width='100px' /></td>";
			echo "</tr>";
?>	
        <tr>
          <td height="20" colspan="6" width="461"><div align="center">&nbsp;&nbsp;&nbsp;&nbsp;<a href="addcart.php?id=<?php echo $info1[id];?>"><img src="images/purchase.jpg" width="80" height="60" border="0" style=" cursor:hand"></a></div></td>
        </tr>
        <tr>
          <td height="10" colspan="7" background="images/line1.gif"></td>
        </tr>
        <?php
	    }
		
		?>
      </table>
      
	</td>
  </tr>
</table>
