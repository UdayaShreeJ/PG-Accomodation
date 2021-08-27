<?php
   include("ownerhead.php");
   //include("config.php");
   ?>
   <?php session_start(); ?>
<br><br><br><br><br>
  <html>
<body>
<div style="width:100%;float:left;padding-left:15px;padding-top:10px;min-height:550px;>
         
            <div style="width:50%;float:left;padding-left:1px;">
            	<form method="post" action="savedata.php">
				<h1 style="font-weight:bolder;font-size:25px;color:red;text-align:center;">  Manage the Room Details !!!</h1> <br><br>
				<?php

include('config.php');
$a= $_SESSION['email'];

$result1 = mysqli_query($db,"SELECT * FROM owner where Email='$a'")or die(mysqli_error());
while($row = mysqli_fetch_array( $result1 ))
{
$d=$row['Pg'];
$result = mysqli_query($db,"SELECT * FROM room where Pg='$d'")or die(mysqli_error());

echo "<table border='1' cellpadding='10' width='1200px'>";
echo "<tr style='text-decoration:underline;text-align:center;'>
<th><font color='#ffff00'>Room ID</font></th>
<th><font color='#ffff00'size:'40px';>Description</font></th>
<th><font color='#ffff00'>Status Type</font></th>
<th><font color='#ffff00'>Image</font></th>


<th><font color='#ffff00'>Delete</font></th>
</tr>";

while($row = mysqli_fetch_array( $result ))
{

echo "<tr align='center'>";
echo '<td><b><font color="#663300">' . $row['Room'] . '</font></b></td>';
echo '<td><b><font color="#663300">' . $row['Descp'] . '</font></b></td>';
echo '<td><b><font color="#663300">' . $row['Status'] . '</font></b></td>';
echo '<td><img src="' . $row['ImagePath'] .'" style="height:50px;width:50px;" /></td>';
echo '<td><b><font color="#ffff00"><a href="deleteroom.php?id=' . $row['Room'] . '">Delete</a></font></b></td>';

echo "</tr>";

}

echo "</table>";
}
?>
                </form>
            </div>


</div>

</body>
</html>