<?php
require 'conn.php';

if(isset($_POST['submit'])){
    $file=$_FILES['myfile'];
    mysqli_query($conn,"insert into jobportals(myfile,companyname,companynumber,companymail,companyaddress,name,qualification,rexp,salary)values
    ('$file[name]','$_POST[CompanyName]','$_POST[CompanyNumber]','$_POST[CompanyMail]','$_POST[CompanyAddress]','$_POST[name1]','$_POST[Qualification]','$_POST[RequiredExperiance]','$_POST[Salary]')");
    $dstloc="file/";
    move_uploaded_file($file['tmp_name'],$dstloc.$file['name']);
}



?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>

<style>
    body{background-image: url('20.jpg');}
h1{text-align: center;}
    form{
        position:relative;
      
        left:31%;
        transform: translate(-50,-50);
        width: 600px;
        height: 720px;
        background-color: #fed8b1;
    }
    form>input{
        display: flex;
        flex-direction: column;
        background-color: rgb(54, 166, 197);
        padding: 10px, 5px ;
        margin: 10px 200px;
        text-align: center;
      
    }
   form,div ,label{
        text-align: center;
    }
    
    .job{display: flex;
   
    position: absolute;
    }
    label {
        text-align: center ;
    }
    .button:hover{background-color: aquamarine;}
    
</style>
</head>
<body>

   
        <h1 class="center">job Post</h1>
        
        
     <form method="post" action="jobpost.php" enctype="multipart/form-data">
        
    
        <label>Company Logo:</label>
        <input type="file" id="myfile" name="myfile" placeholder="Company logo"><br>
        <label>Name:</label> 
        <input type="text" id="Company Name" name="CompanyName" placeholder="Enter Company Name"><br>
        <label>Contact no:</label>
        <input type="number" id="company no" name="CompanyNumber" placeholder="Enter Company Number"><br>
        <label>Email ID:</label> 
        <input type="text" id="Company Mail" name="CompanyMail" placeholder="Enter Company mail"><br>
        <label>Company Address:</label> 
        <input type="text" id="Company Address" name="CompanyAddress" placeholder="Enter company Address"><br>
        <label>Name:</label>
        <input type="text" id="name" name="name1" placeholder="Enter your Name"><br>
        <label>Qualification Required:</label>
        <input type="text" id="qualification" name="Qualification" placeholder="Qualification"><br>
        <label>Experiance Required:</label>
        <input type="text" id="exp" placeholder="RequiredExperiance" name="RequiredExperiance"><br>
        <label>Salary range:</label>
        <input type="text" id="salary" name="Salary" placeholder="salary range"><br>
   
       <div class=hello>
        <input type="submit" id="button" name="submit" value="submit" >
        <input type="reset" id="button" value="reset" >
</div>
        
    <div class="time">
    <div  style="margin-right: 1%;">
    &nbsp; &nbsp; &nbsp;
</form>
</div>

</div>
</form> 
    
    

</body>
</html>