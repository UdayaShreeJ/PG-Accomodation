<?php
   include("config.php");
   session_start();
   
      $id = mysqli_real_escape_string($db,$_GET['id']);
	  
	  
	  
	  $sql = "delete from room where Room='$id'";	  
      $result = mysqli_query($db,$sql);
	  
	
	echo "<script type='text/javascript'>alert('Room Deleted Successfully !!');</script>";
	echo "<script type='text/javascript'>window.location='mainroom.php';</script>";
	

   //}
?>