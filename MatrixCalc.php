<!DOCTYPE html>
<html>
	<head></head>
	<body style="background-color:HoneyDew;"> <!--background-color of course :D-->
	<header> <h1>Salma's Matrix Calculator</h1><br> <!--the title-->
	
	<!--Here I am taking in the first matrix-->
	<?php echo("Please type the first matrix:")?><br>
	<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
	<label></label><input type="number_format" name="m10"><?php?> <!--each one of these holds the value of one part of the matrix-->
	<label></label><input type="number_format" name="m11"><?php?><br><br> <!--in these matrices, labels would not make sense as they would disrupt the matrix-->
	<label></label><input type="number_format" name="m12"><?php?>
	<label></label><input type="number_format" name="m13"><?php?>
	<br><br><br><br> 
	
	<!--Here I am taking in the second matrix-->
    <?php echo("Please type the second matrix:")?><br>
	<label></label><input type="number_format" name="m20"><?php?>
	<label></label><input type="number_format" name="m21"><?php?><br><br>
	<label></label><input type="number_format" name="m22"><?php?>
	<label></label><input type="number_format" name="m23"><?php?><br><br>
	
	<input type="submit" value = "Submit Matrices"> <!--This allows us to tell the program to run the values-->
	</form>
	
	
<?php	
	if($_SERVER["REQUEST_METHOD"]=="POST") //determines that the get request has been made from the client to the server
	{
		$M1[0]=$_POST['m10']; //top left value of first matrix
		$M1[1]=$_POST['m11']; //top right value of first matrix
		$M1[2]=$_POST['m12']; //bottom left value of first matrix
		$M1[3]=$_POST['m13']; //bottom right value of first matrix
		
		$M2[0]=$_POST['m20']; //top left value of second matrix
		$M2[1]=$_POST['m21']; //top right value of second matrix
		$M2[2]=$_POST['m22']; //bottom left value of second matrix
		$M2[3]=$_POST['m23']; //bottom right value of second matrix
		
		if(is_numeric($M1[0]) && is_numeric($M1[1]) && is_numeric($M1[2]) && is_numeric($M1[3]) && is_numeric($M2[0]) && is_numeric($M2[01]) && is_numeric($M2[02])  && is_numeric($M2[03]))
		{
			echo"<br><br>Matrix 1: <br>"; //printing first matrix
			echo $M1[0]; echo"&nbsp;&nbsp;";
			echo $M1[1]; echo"&nbsp;&nbsp; <br>";
			echo $M1[2]; echo"&nbsp;&nbsp;";
			echo $M1[3]; echo" <br><br>";
			
			
		    echo"Matrix 2: <br>"; //printing second matrix
			echo $M2[0]; echo"&nbsp;&nbsp;";
			echo $M2[1]; echo"&nbsp;&nbsp; <br>";
			echo $M2[2]; echo"&nbsp;&nbsp;";
			echo $M2[3]; echo" <br><br>";
			
			
			echo"The sum of your two matrices is:<br>";
			//calculating the results
			$M30 = $M1[0] + $M2[0]; //we add corresponding components of one matrix to the other to get the result (both top lefts)
			$M31 = $M1[1] + $M2[1]; //adding the top right values
			$M32 = $M1[2] + $M2[2]; //adding the bottom left values	
			$M33 = $M1[3] + $M2[3]; //adding the bottom right values
			
			//printing the final matrix values
			echo $M30; echo"&nbsp;&nbsp;";
			echo $M31; echo"&nbsp;&nbsp; <br>";
			echo $M32; echo"&nbsp;&nbsp;";
			echo $M33; echo"<br>";
		}
		else
		{
			echo"All values must be numbers<br><br><br><br><br><br><br><br><br><br><br><br><br>";
		}
	}
?>
		
	<footer> 
	<br><br><br><br><br><br>
		<p>&copy;Copyright Salma Mobasher 2021</p> <!--copyright-->
	</footer>
	</body>
</html>