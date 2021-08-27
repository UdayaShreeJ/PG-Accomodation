<?php
   include("config.php");
   session_start();
   
      $id = mysqli_real_escape_string($db,$_GET['id']);
	  
	  
	  
	  $sql = "delete from owner where Email='$id' where Status='$Approved'";	  
      $result = mysqli_query($db,$sql);
	  
	
	echo "<script type='text/javascript'>alert('Owner Deleted Successfully !!');</script>";
	echo "<script type='text/javascript'>window.location='mainowner.php';</script>";
	
?>