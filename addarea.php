<?php
   include("adminhead.php");
   include("config.php");
   ?>
   <?php session_start(); ?>
<br><br><br><br>
   <html>
<body onload="myFunction()">
   <div style="height:600px;background-color:#;padding-top:40px;">
		<div style="width:50%;float:left;margin:0;background-color:#;">
		<img src="./images/register.jpg" style="width:100%;height:400px;padding-left:40px;"/>
            </div>

            <div style="width:50%;float:left;padding-left:55px;padding-top:5px;height:610px;background-color:#;">
            	<form method="post" action="addarea.php"  enctype="multipart/form-data">
				<table class="style1">
                    <tr>
                        <td>
                            &nbsp;</td>
                        <td class="style2">
                            &nbsp;</td>
                        <td align="center" colspan="2">
                            <span style="font-weight:bolder;font-size:25px;color:black;">Add Area Data By Using City !!!</span></td>
                        <td>
                            &nbsp;</td>
                    </tr>
                   <tr>
                        <td>
                            &nbsp;</td>
                        <td class="style2">
                            &nbsp;</td>
                        <td align="right">
                            &nbsp;</td>
                        <td>
                            &nbsp;</td>
                        <td>
                            &nbsp;</td>
                    </tr>
							<?php
					$query = "SELECT * FROM `citys`";

// for method 1

$result1 = mysqli_query($db, $query);

// for method 2

$result2 = mysqli_query($db, $query);

$options = "";

while($row2 = mysqli_fetch_array($result2))
{
    $options = $options."<option>$row2[0]</option>";
}

	//echo $_SESSION['uname'];
?>
					 <tr>
                        <td>
                            &nbsp;</td>
                        <td class="style2">
                            &nbsp;</td>
                        <td align="right">
                            <span style="font-size:20px;font-weight:bold;color:#;">City Name: </span></td>
                        <td>
                        &nbsp;
						
						<select class="form-control" id="city" name="city"  onclick = myFunction()>
			<option value="0">      -----Select-----</option>
            <?php while($row1 = mysqli_fetch_array($result1)):;?>

            <option value="<?php echo $row1[0];?>"><?php echo $row1[0];?></option>

            <?php endwhile;?>
			

        </select>
                        
                            &nbsp;</td>
                        <td>
                            &nbsp;</td>
                    </tr>
					<tr>
                        <td>
                            &nbsp;</td>
                        <td class="style2">
                            &nbsp;</td>
                        <td align="right">
                            &nbsp;</td>
                        <td>
                            &nbsp;</td>
                        <td>
                            &nbsp;</td>
                    </tr>
			
                    <tr>
                        <td>
                            &nbsp;</td>
                        <td class="style2">
                            &nbsp;</td>
                        <td align="right">
                            <span style="font-size:20px;font-weight:bold;color:#;">Area Name: </span></td>
                        <td>&nbsp;
                        <input type="text" placeholder="Enter Area Name" id="area" required name="area" class="textbox" onchange="valuname()"/>
                            &nbsp;</td>
                        <td>
                            &nbsp;</td>
                    </tr>
                    <tr>
                        <td>
                            &nbsp;</td>
                        <td class="style2">
                            &nbsp;</td>
                        <td align="right">
                            &nbsp;</td>
                        <td>
                            &nbsp;</td>
                        <td>
                            &nbsp;</td>
                    </tr>
                    <tr>
                        <td>
                            &nbsp;</td>
                        <td class="style2">
                            &nbsp;</td>
                        <td align="right">
                            
                        <td>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                             <input id="logi" type="submit" value="Add Area" class="button"  onclick="return validator();" /></td>
                        </td>
                        <td>
                            &nbsp;</td>
                    </tr>
                </table>
                </form>
            </div>


</div>


</body>
<?php
  include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $city = mysqli_real_escape_string($db,$_POST['city']);
      $area = mysqli_real_escape_string($db,$_POST['area']);

      
	  $sql = "Insert into area values ('$city','$area')";
	  
      $result = mysqli_query($db,$sql);
	  
    echo "<script type='text/javascript'>alert('Area Added Successfully !!');</script>";
     
   }
?>
</script>
</html>