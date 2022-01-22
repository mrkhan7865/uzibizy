<?php
include 'dbms.php';
if (isset($_POST['submit']))
{
	$Name = $_POST['fname'];
	$mobile_no_1= $_POST['1number'];
	$mobile_no_2= $_POST['2number'];
	$Address= $_POST['add1'];
	$Gmail= $_POST['mail'];
	$dateofbirth= $_POST['DOB'];
	$Gender= $_POST['mygender'];
	$Subject= $_POST['subject1'];


	

	$sql="INSERT INTO admission_form(fname,1number,2number,add1,mail,DOB,mygender,subject1)values('$Name','$mobile_no_1','$mobile_no_2','$Address','$Gmail','$dateofbirth','$Gender','$Subject')";
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