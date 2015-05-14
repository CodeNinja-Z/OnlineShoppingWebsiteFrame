<?php
   session_start();
   include("conn/conn.php");
?>
<html>
<head>
<title>Candy Store</title>
</head>
<body>
<table width="766" border="0" align="center" cellpadding="0" cellspacing="0">

  <tr>
    <td width="568" height="32" bgcolor="#FFFFFF"><a href="cart.php">My cart</a>&nbsp;<a href="index.php">Home page</a>&nbsp;<a href="admin/index.php">Admin page</a></td>
    

    <td width="121" align="center" bgcolor="#FFFFFF">
      <?php
	  if($_SESSION[username]!=""){
	    echo "cuurent user:$_SESSION[username]";
	  }
	?>
    </td>
    <td width="77" bgcolor="#FFFFFF"> 
	<?php
	if($_SESSION[username]!=""){
	    echo "<a href='logout.php'>log out</a>";
	  }
	?>
    </td>
  </tr>
</table>	
