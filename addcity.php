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
		<img src="./images/register.jpg" style="width:100%;height:600px;padding-left:40px;"/>
            </div>

            <div style="width:50%;float:left;padding-left:55px;padding-top:5px;height:400px;background-color:#;">
            	<form method="post" action="addcity.php"  enctype="multipart/form-data">
				<table class="style1">
                    <tr>
                        <td>
                            &nbsp;</td>
                        <td class="style2">
                            &nbsp;</td>
                        <td align="center" colspan="2">
                            <span style="font-weight:bolder;font-size:25px;color:black;">Add City Here !!!</span></td>
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
                            <span style="font-size:20px;font-weight:bold;color:;">City Name: </span></td>
                        <td>&nbsp;
                        <input type="text" placeholder="Enter City Name" id="city" required name="city" class="textbox" onchange="valuname()"/>
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
                             <input id="logi" type="submit" value="Add City" class="button"  onclick="return validator();" /></td>
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
      
      $citys = mysqli_real_escape_string($db,$_POST['city']);

      
	  $sql = "Insert into citys values ('$citys')";
	  
      $result = mysqli_query($db,$sql);
	  
    echo "<script type='text/javascript'>alert('City Added Successfully !!');</script>";
     
   }
?>
</html>