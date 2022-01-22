<?php
include 'dbms.php';
if (isset($_POST['submit']))
{
	$firstname = $_POST['fname'];
	$middlename= $_POST['mname'];
	$lastname= $_POST['lname'];
	
	

	$sql="INSERT INTO admission(fname,mname,lname)values('$firstname','$middlename','$lastname')";
	if (mysqli_query($con,$sql))
	{
		echo "<script>alert('record submited')</script>";

	}
	else
	{
		echo "error:" .mysqli_error($con);
	}
	mysqli_close($con);

}
?>