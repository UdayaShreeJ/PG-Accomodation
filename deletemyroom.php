<?php 
include('config.php');
session_start();
$a= $_SESSION['email'];
$id = mysqli_real_escape_string($db,$_GET['id']);
 $room = mysqli_real_escape_string($db,$_GET['room']);
 $pg = mysqli_real_escape_string($db,$_GET['pg']);
 $ph = mysqli_real_escape_string($db,$_GET['ph']);
 $uname = mysqli_real_escape_string($db,$_GET['uname']);
 $date = mysqli_real_escape_string($db,$_GET['date']);
 $address = mysqli_real_escape_string($db,$_GET['address']);
 $image = mysqli_real_escape_string($db,$_GET['image']);

$sql = "Insert into history values('$id','$room','$pg','$ph','$uname','$address','$date','$image')";
	//  echo $sql;
      $result = mysqli_query($db,$sql);
	  
    // $sql1 = "update slots set Status=''";
     $sql1 = "update room set Status='Empty'  where Status= 'Booked' and Room='$room' and Pg='$pg'";
	 // echo $sql1;
      $result1 = mysqli_query($db,$sql1);
      $sql2 = "update booking set Status='Empty'  where Status= 'Booked' and Room='$room' and Pg='$pg'";
       echo $sql2;
       $result2 = mysqli_query($db,$sql2);
	  echo "<script> alert('Room Exited successfully')</script>";
					//echo "<script>window.location='userhome.php';</script>";

?>