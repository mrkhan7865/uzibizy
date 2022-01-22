
<?php
$local="localhost";
$pass="";
$user="root";
$dbname="job";
$conn=mysqli_connect("$local","$user","","$dbname");
if (!$conn){
    echo "connection is unsuccessfull";
}
else{
    echo "connection is successfull";


}
?>

<?php


$file=$_FILES['myfile'];

$filename=$file['name'];

$Name=$_POST['CompanyName'];
$Number=$_POST['CompanyNumber'];
$Mail=$_POST['CompanyMail'];
$Address=$_POST['CompanyAddress'];
$name1=$_POST['name1'];
$qualification=$_POST['Qualification'];
$exp=$_POST['RequiredExperiance'];
$salary=$_POST['Salary'];




$qu=mysqli_query($conn,"INSERT INTO `jobportals`( `myfile`, `companyname`, `companynumber`, `companymail`, `companyaddress`, `name`, `qualification`, `rexp`, `salary`) VALUES 
('$filename','$Name','$Number','$Mail','$Address','$name1','$qualification','$exp','$salary')");
?>