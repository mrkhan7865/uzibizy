<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Portals</title>
    <link rel="stylesheet" href="jobportal.css">
</head>
<style>
    body{background-image:url('21.jpg');}
    table{
        text-align:center;
    }
    .miss{
        
       margin-top:15%;
        display:flex;
        border-radius:8px;
       
    
    }
    .miss input{
        padding:20px 150px;
        margin:70px;
        
    }
    .miss>button{
        background:green;
        width:100px;
        height:50px;
        margin-top:75px;
        border-radius:15px;
        
    }
    
    
    </style>
<body>
    <section class="header">
        <nav>
            <h1>UZIBIZY</h1>

            <div class="nav-links" id="navLinks">
                <i class="fa fa-times" aria-hidden="true" onclick="hideMenu()"></i>

                <ul>
                   
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="about.html">ABOUT US</a></li>
                    <li><a href="jobpost.php">JOB POST</a></li>
                    <li><a href="seekjob.php">SEEK JOB</a></li>
                                     
                    <li class="shakeel"><a href="">LOG IN</a></li> 
                    
                </ul>
               
            </div>

            <i class="fa fa-bars" aria-hidden="true" onclick="showMenu()"></i>    
            
        </nav>


        <div class="miss" >
    <input type="text" name="search" id="bar" placeholder="Qualification" style=" border-radius:15px; text-size:50px" >
    <input type="text" name="search" id="bar2" placeholder="Location" style=" border-radius:15px;">
    <button>search</button>
    </div>  
    </section>
    
   
        
    </div>
    <div>
       
    </div>
  
    <table border=4px width=100%>
        <tr>
            <br>
        <th>no </th>
        <th>logo</th>
        <th>company name </th>
        <th>contact</th>
        <th>email</th>
        <th>address</th>
        <th>hr name</th>
        <th>qualification</th>
        <th>experiance</th>
        <th>salary</th>
        <br>
    </tr>
    
    <tr>
    <?php 
        include 'conn.php';
        $q="select * from jobportals";
        $e=mysqli_query($conn,$q);
        while($i=mysqli_fetch_array($e)){
            ?>
       <td><?php echo $i['id']?></td>
       <td><img src="file/<?php echo $i['myfile']?>"width="50px" height="50px"></td>
       <td><?php echo $i['companyname']?></td>
       <td><?php echo $i['companynumber']?></td>
       <td><?php echo $i['companymail']?></td>
       <td><?php echo $i['companyaddress']?></td>
       <td><?php echo $i['name']?></td>
       <td><?php echo $i['qualification']?></td>
       <td><?php echo $i['rexp']?></td>
       <td><?php echo $i['salary']?></td>
       <td><a href="seekjob.php"><button style="background-color: green;">apply now </button></a></td>
        </tr>
            <?php
        }
        
        ?>
       
    </tr>
    </table>
    
</body>
</html>