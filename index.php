<html>
    <head>
        <meta name="veiwport" content="with=device-width, initial-scale=1.0">
        <title>1 web site</title>
        <link rel="stylesheet" href="web.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
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
                        <li><a href="">CONTACT</a></li>
                       
                    </ul>
                </div>
                <i class="fa fa-bars" aria-hidden="true" onclick="showMenu()"></i>
                
            </nav>
    <div class="text-box">
        <h1>Uzibizy </h1>
        <p>One million Accountants success stories.<br>
            Start yours today.</p>
                  <a href="jobportal.php" class="hero-btn">visit us to know more</a>
    </div>        



        </section>

        <section class="course">
            <h1></h1>

        </section>







         
        <script>
            var navLinks = document.getElementById("navLinks");
            function  showMenu(){
                navLinks.style.right = "0";
            }
            function  hideMenu(){
                navLinks.style.right = "-200px";
            }
        </script>
    </body>








</html>