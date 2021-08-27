<?php
   include("config.php");
    session_start();
if($_SERVER["REQUEST_METHOD"]=="POST")
		{
			
			$num=$_POST['num'];
			$amt=$_POST['amt'];
		
			$desc=$_POST['desc'];
		$a= $_SESSION['email'];
		//echo $a;
			$result = mysqli_query($db,"SELECT * FROM owner where Email='$a'")or die(mysqli_error());
while($row = mysqli_fetch_array( $result ))
{
$d=$row['Pg'];


			
			
			
		   echo $d;
		   $uploaded_dir = "./uploads/"; 
		   $filename = $_FILES["userfile"]["name"]; 
		   $path = $uploaded_dir . $filename; 
		   
		    $imageFileType=strtolower(pathinfo($filename,PATHINFO_EXTENSION));
				
				if($imageFileType!="jpg" )
				{
					echo "<script> alert('Image format error. Choose only PNG/JPG')</script>";
					
				}
				else
				{				   
					move_uploaded_file($_FILES["userfile"]["tmp_name"], $path);
				   
					
					//$wid="W"+mt_rand(100000, 999999);
					$query = "insert into room values('$num','$d','$amt','$desc','Empty','$filename','$path')";
					//echo $query;
					mysqli_query($db,$query);
					echo "<script> alert('Room Added successfully')</script>";
					echo "<script>window.location='addroom.php';</script>";
				}
			
}	
		}
		?>