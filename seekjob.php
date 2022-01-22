<?php
if(mail("khannafees7865@gmail.com" ,"from nafees ceo","nafee ceo " ,"hjhfd")){
    echo "mail is send";
}
else{
    echo "not sent";
}

require 'conn.php';



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
    
    <h1 class="center">SeekJob</h1>
    <form method="post" action="seekJob.php" enctype="multipart/form-data">

    <label>Name:</label> 
        <input type="text" id="your Name" name="yourName" placeholder="Enter your full Name"><br>
    <label>Contact No:</label>
        <input type="text" id="Mobile number" name="contactno" placeholder="Enter your contact number"><br>  
    <label>Email id:</label>
        <input type="text" id="email" name="Email" placeholder="enter your email"><br>
   <label>Address:</label>
        <input type="text" id="add" name="Add" placeholder="enter your Address"><br>
    <label>Qualification:</label>
        <input type="text" id="qua" name="Qua" placeholder="enter your Qualification"><br>
    <label>Experiance:</label>
        <input type="text" id="exp" name="Exp" placeholder="enter your Experiance"><br>
    
    <label>resume:</label>
        <input type="file" id="file" name="file" placeholder="upload your resume"><br>
        <div class=hello>
        <input type="submit" name="submit">
        <input type="reset" name="reset"> 
</div>
    
        </form>
</body>