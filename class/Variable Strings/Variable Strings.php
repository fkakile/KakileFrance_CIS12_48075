<?php
	 	/*
			Kakile, France
			Agust 27, 2014
			Purpose: Comments/Variables
		*/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Strings and Variables</title>
</head>

<body>
	<?php
		//Decaler Variables
		$hours=40;//Worked 40 hours
		$payRate=9;//$'s/hour
		//Calculate the paycheck
		$grossPay=$hours*$payRate;
		//Output the resulte
		echo "<p>Hours Worked = $hours (hrs)</p>";
		echo '<p>Pay Rate = $$payRate </p>';
		echo "<p>Pay check = $".$grossPay.'</p>';
	?>
</body>
</html>