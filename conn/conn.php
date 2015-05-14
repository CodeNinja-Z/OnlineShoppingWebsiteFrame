<?php
     $conn=mysql_connect("localhost","root","") or die("connection failed".mysql_error());

     mysql_select_db("candystore",$conn) or die("connection authenation failed".mysql_error());
?>
