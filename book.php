<?php 
include('config.php');
session_start();
$a= $_SESSION['email'];
 $room = mysqli_real_escape_string($db,$_GET['room']);
 $pg = mysqli_real_escape_string($db,$_GET['pg']);
 $desc = mysqli_real_escape_string($db,$_GET['desc']);
 $amt = mysqli_real_escape_string($db,$_GET['amt']);
$result2 = mysqli_query($db,"SELECT * FROM users where Email='$a'")or die(mysqli_error());
while($row = mysqli_fetch_array( $result2 ))
{
	$email=$row['Email'];
$uname=$row['Uname'];
$add=$row['Address'];
$ph=$row['Phone'];
$img=$row['ImageName'];
$path=$row['ImagePath'];
$date=date("Y/m/d");
$d="SELECT * FROM users where Email='$a'";
echo $d;
$sql = "Insert into booking values('$email','$uname','$add','$ph','$img','$path','Booked','$date','$room','$pg')";
	  echo $sql;
      $result = mysqli_query($db,$sql);
	  
    // $sql1 = "update slots set Status=''";
     $sql1 = "update room set Status='Booked'  where Status= 'Empty' and Room='$room' and Pg='$pg'";
	  //echo $sql;
      $result1 = mysqli_query($db,$sql1);
	  echo "<script> alert('Room Booked successfully')</script>";
					echo "<script>window.location='userhome.php';</script>";
}
?>