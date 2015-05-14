<?php
include("conn/conn.php");
class chkinput{
   var $login;
   var $password;

   function chkinput($x,$y){
     $this->login=$x;
     $this->password=$y;
    }

   function checkinput(){
     include("conn/conn.php");
     $sql=mysql_query("select * from customer where login='".$this->login."'",$conn);
     $info=mysql_fetch_array($sql);
     if($info==false){
          echo "<script language='javascript'>alert('user not exitsed');history.back();</script>";
          exit;
       }
      else{
	      if($info[password]==$this->password)
            {  
			   session_start();
	           $_SESSION[username]=$info[login];
			   session_register("producelist");
			   $producelist="";
			   session_register("quantity");
			   $quantity="";
               header("location:index.php");
               exit;
            }
          else {
             echo "<script language='javascript'>alert('wrong password!');history.back();</script>";
             exit;
           }

      }    
   }
 }

    $obj=new chkinput(trim($_POST[login]),trim($_POST[password]));
    $obj->checkinput();
?>
