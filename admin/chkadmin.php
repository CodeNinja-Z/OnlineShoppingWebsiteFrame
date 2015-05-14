<?php
 class chkinput{
   var $name;
   var $pwd;

   function chkinput($x,$y)
    {
     $this->name=$x;
     $this->pwd=$y;
    }

   function checkinput()
   {
	  if($this->name==='admin' && $this->pwd != ""){
		   header("location:default.php");
		}
	  else
	   {
		 echo "<script language='javascript'>alert('wrong password or admin name');history.back();</script>";
		 exit;
	   }  
   }
 }


    $obj=new chkinput(trim($_POST[name]),trim($_POST[pwd]));
    $obj->checkinput();

?>
