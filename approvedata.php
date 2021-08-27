<?php
   include("config.php");
   session_start();
   
      $id = mysqli_real_escape_string($db,$_GET['id']);
	  
	  
	 
	  $sql = "update owner set Status='Approved' where Status= 'Pending'";
	  //echo $sql;
      $result = mysqli_query($db,$sql);
	  
	
	echo "<script type='text/javascript'>alert('Owner Approved  Successfully !!');</script>";
	echo "<script type='text/javascript'>window.location='approveowner.php';</script>";
	

   //}
?>