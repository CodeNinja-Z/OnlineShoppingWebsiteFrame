<html>
	<head>
		<title>Admin System</title>
	</head>
	<?php 
		include("conn/conn.php");
		include("top.php");
	?>
	<body>
	  <tr>
		<td>
			<table width="0" border="0" align="center" cellpadding="0" cellspacing="0">
			  <td height="50"><font><b>Admin System</b></font>
				  <tr>
					<td height="20" ><a href="additem.php">add item</a></td>
				  </tr>
				  <tr>
					<td height="22" ><a href="edititem.php">edit item</a></td>
				  </tr>
				  <tr>
					<td height="22" ><a href="edituser.php">User Management</a></td>
				  </tr>
				  <tr>
					<td height="22" ><a href="lookorder.php">Order management</a></td>
				  </tr>
				</td>
			</tr>
		  </table>
		</td>
	  </tr>
	</body>
</html>

