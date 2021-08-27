<?php
   include("config.php");
   session_start();

if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$email=$_POST["email"];
	$pswd=$_POST["pswd"];
	
	if($email=="admin@gmail.com" && $pswd=="admin")
	{
			$_SESSION['email']=$email;
		echo "<script>		window.location='adminhome.php';		</script>";
	}
	else
	{
		$query="select * from users where Email='$email' and Password='$pswd'";
		
		$result=mysqli_query($db,$query);
		
		$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
		$count = mysqli_num_rows($result);
		
		if($count>0)
		{
			$_SESSION['email']=$email;
			echo $_SESSION['email'];
			echo "<script>window.location='userhome.php';</script>";
		}
		else
		{
			echo "<script>
			alert('Invalid Credentials');
		window.location='login.php';
		</script>";
		}
	}
	
	
	
}

?>