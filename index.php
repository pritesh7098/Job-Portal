<?php
session_start();
error_reporting(0);

$a = ("Location: loging.php");
$b = ("Location: logout.php");
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://kit.fontawesome.com/5beee37699.js" crossorigin="anonymous"></script>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
   
    <header>
    <nav>
      <div class="logo">JOB<pp>PORTAL</pp></div>
      <input type="checkbox" id="click">
      <label for="click" class="menu-btn">
        <i class="fa-solid fa-bars"></i>
      </label>
      <ul>
        <li><a class="active" href="index.php">HOME</a></li>
        <li><a href="interview.html">INTERVIEW PREP</a></li>
        <li><a href="about.html">ABOUT US </a></li>
        <li><a href="contact.html">CONTACT US</a></li>
        <li><a href=""><i class="icon fa-solid fa-user"></i></a>
          <div class="log-menu"> 
            <ul>
              <li>
                <?php 
                if(!$_SESSION['username']){
                  echo "<h4> welcome User </h4>";
                }
                 else{
                  echo "<h4> welcome ". $_SESSION['username'] ."</h4>";
                }
                 ?>
              </li>
              <li><a class="logout" href="login.php">Login</a></li>
              <li><a class="logout" href="logout.php">Logout</a></li>
            </ul>
          </div>
        </li>
      </ul>
    </nav>
  </header>
  <main class="background-image">

    <section class="section1">
       <h1>Job Update for Freshers and Experience</h1>
       
      </section>

       <section class="section2">
         
    <div id="buttons">
      <button class="btn" onclick="filterObjects('all')">All</button>
      <button class="btn" onclick="filterObjects('2022')" >2022 Batch</button>
      <button class="btn" onclick="filterObjects('freshers')">Freshers</button>
      <button class="btn" onclick="filterObjects('experienced')">Experienced</button>
      <button class="btn" onclick="filterObjects('work')">Work From Home</button>
      <button class="btn" onclick="filterObjects('internships')">Internships</button>
      <button class="btn" onclick="filterObjects('software')">Software/IT</button>
      <button class="btn" onclick="filterObjects('any')">Any stream</button>
      <!-- <button class="btn" onclick="filterObjects('location')">Job Location</button> -->
      <button class="btn" onclick="filterObjects('company')">Company</button>
    </div>

  </section>
    
 <div class="objects">

  <div class="box freshers 2022 software" >
    <a href="infosys.html"><img src="./img/infosys.jpg"></a>
         <h4><a href="infosys.html">Infosys</h4></a>
           <h3><a href="infosys.html">Graphic Designer</h3></a>
    
           <hr>
           <div class="info">
            <ul>
              <li><i class="fa-solid fa-briefcase"></i>0-0 Yrs</li>
              <li><i class="fa-solid fa-indian-rupee-sign"></i>3.38 LPA</li>
              <li><i class="fa-solid fa-location-dot"></i>Bengaluru</li>
              <li><i class="fa-solid fa-graduation-cap"></i>Bachelor Degree</li>
              <li><i class="fa-solid fa-chalkboard"></i>CS|IT</li>
              <li><i class="fa-solid fa-calendar"></i>2022|21|20|19|18|17</li>  
            </ul>
           </div>
           <hr>
           <div class="sps">
          <ul>
           <li>Photoshop</li>
           <li>Illustrator</li>
           <li>Sketch</li>
           <li>Design skills</li>
           <li>Art</li>
           <li>Equivalent</li>
        </ul>
           </div>
  </div>
         

  <div class="box any 2022 ">
    <a href="wipro.html"><img src="./img/wipro.jpg"></a>
    <h4><a href="wipro.html">Wipro</h4></a>
      <h3><a href="wipro.html">Production Agent</h3></a>
       <hr>
       <div class="info">
        <ul>
          <li><i class="fa-solid fa-briefcase"></i>0-2 Yrs</li>
          <li><i class="fa-solid fa-indian-rupee-sign"></i>4.58 LPA</li>
          <li><i class="fa-solid fa-location-dot"></i>Pune</li>
          <li><i class="fa-solid fa-graduation-cap"></i>Any Graduate</li>
          <li><i class="fa-solid fa-chalkboard"></i>Any stream</li>
          <li><i class="fa-solid fa-calendar"></i>2022|21|20|19|18|17</li>  
        </ul>
       </div>
       <hr>
       <div class="sps">
      <ul>
       <li>Communication</li>
       <li>Verbal</li>
       <li>Soft skills</li>
       <li>Self-motivated</li>
       <li>visualization</li>
    </ul>
       </div>
</div>



<div class="box 2022 work any">
  <a href="amazon.html"><img src="./img/amazonlogo.jpg"></a>
  <h4><a href="amazon.html">Amazon</h4></a>
    <h3><a href="amazon.html">Voice Process Amazon</h3></a>
     <hr>
     <div class="info">
      <ul>
        <li><i class="fa-solid fa-briefcase"></i>Fresher </li>
        <li><i class="fa-solid fa-indian-rupee-sign"></i>4 LPA</li>
        <li><i class="fa-solid fa-location-dot"></i>work from home</li>
        <li><i class="fa-solid fa-graduation-cap"></i>Bachelor Degree</li>
        <li><i class="fa-solid fa-chalkboard"></i>Any Stream</li>
        <li><i class="fa-solid fa-calendar"></i>2022|21|20|19|18|17</li>  
      </ul>
     </div>
     <hr>
     <div class="sps">
    <ul>
     <li>Verbal</li>
     <li>Communication</li>
     <li>English</li>
     <li>Fresher</li>
     <li>written</li>
  </ul>
     </div>
</div>


<div class="box software 2022 any">
  <a href="adobe.html"><img src="./img/adobe.jpg"></a>
  <h4><a href="adobe.html">Adobe</h4></a>
    <h3><a href="adobe.html">Software Quality Engineer</h3></a>
     <hr>
     <div class="info">
      <ul>
        <li><i class="fa-solid fa-briefcase"></i>Fresher</li>
        <li><i class="fa-solid fa-indian-rupee-sign"></i>10 LPA</li>
        <li><i class="fa-solid fa-location-dot"></i>Banglore</li>
        <li><i class="fa-solid fa-graduation-cap"></i>Bachelor Degree</li>
        <li><i class="fa-solid fa-chalkboard"></i>Any Stream</li>
        <li><i class="fa-solid fa-calendar"></i>2022|21|20|19|18|17</li>  
      </ul>
     </div>
     <hr>
     <div class="sps">
    <ul>
      <li>Software testing</li>
     <li>Written</li>
     <li>Verbal</li>
     <li>Communication</li>
     <li>English</li>
  </ul>
     </div>
</div>

<div class="box 2022 work experienced any">
  <a href="acc.html"><img src="./img/accenture.png"></a>
  <h4><a href="acc.html">Accenture</h4></a>
    <h3><a href="acc.html">Customor Support</h3></a>
     <hr>
     <div class="info">
      <ul>
        <li><i class="fa-solid fa-briefcase"></i>2-3 Yrs</li>
        <li><i class="fa-solid fa-indian-rupee-sign"></i>3 LPA</li>
        <li><i class="fa-solid fa-location-dot"></i>work from home</li>
        <li><i class="fa-solid fa-graduation-cap"></i>Bachelor Degree</li>
        <li><i class="fa-solid fa-chalkboard"></i>Any stream</li>
        <li><i class="fa-solid fa-calendar"></i>2022|21|20|19|18|17</li>  
      </ul>
     </div>
     <hr>
     <div class="sps">
    <ul>
     <li>Team player</li>
     <li>Quick learner</li>
     <li>Verbal skills</li>
     <li>Communication</li>
     <li>Multi-Tasking</li>
   </ul>
     </div>
 </div>
 

 <div class="box 2022 software">
  <a href="dailyhunt.html"><img src="./img/dailyhunt.jpg"></a>
  <h4><a href="dailyhunt.html">Dailyhunt</h4></a>
    <h3><a href="dailyhunt.html">Python Developer</h3></a>
     <hr>
     <div class="info">
      <ul>
        <li><i class="fa-solid fa-briefcase"></i>Fresher</li>
        <li><i class="fa-solid fa-indian-rupee-sign"></i>5 LPA</li>
        <li><i class="fa-solid fa-location-dot"></i>Bengaluru</li>
        <li><i class="fa-solid fa-graduation-cap"></i>M.Tech/M.E or B.Tech/B.E</li>
        <li><i class="fa-solid fa-chalkboard"></i>Computer Science</li>
        <li><i class="fa-solid fa-calendar"></i>2022|21|20|19|18|17</li>  
      </ul>
     </div>
     <hr>
     <div class="sps">
    <ul>
     <li>Python Developer</li>
     <li>Mysql</li>
     <li>Nosql</li>
     <li>Develop</li>
     <li>Backend</li>
   </ul>
     </div>
 </div>



 <div class="box 2022 any">
  <a href="deloitte.html"><img src="./img/deloitte.png"></a>
  <h4><a href="deloitte.html">Deloitte</h4></a>
    <h3><a href="deloitte.html">Customer Support Associate</h3></a>
     <hr>
     <div class="info">
      <ul>
        <li><i class="fa-solid fa-briefcase"></i>0-1 Yrs</li>
        <li><i class="fa-solid fa-indian-rupee-sign"></i>5 LPA</li>
        <li><i class="fa-solid fa-location-dot"></i>Hyderabad</li>
        <li><i class="fa-solid fa-graduation-cap"></i>Bachelor Degree</li>
        <li><i class="fa-solid fa-chalkboard"></i>Any Graduate</li>
        <li><i class="fa-solid fa-calendar"></i>2022|21|20|19|18|17</li>  
      </ul>
     </div>
     <hr>
     <div class="sps">
    <ul>
     <li>verbal skills</li>
     <li>written</li>
     <li>ITIL framework</li>
     <li>MS-Office</li>
     <li>English</li>
   </ul>
     </div>
 </div>

 
 <div class="box freshers 2022 internships">
  <a href="hp.html"><img src="./img/hp.png"></a>
  <h4><a href="hp.html">Hp</h4></a>
    <h3><a href="hp.html"> CA Internship in HP</h3></a>
     <hr>
     <div class="info">
      <ul>
        <li><i class="fa-solid fa-briefcase"></i>Internships</li>
        <li><i class="fa-solid fa-indian-rupee-sign"></i>30K /Month</li>
        <li><i class="fa-solid fa-location-dot"></i>Banglore</li>
        <li><i class="fa-solid fa-graduation-cap"></i>Bachelor Degree</li>
        <li><i class="fa-solid fa-chalkboard"></i>Enrolled in University</li>
        <li><i class="fa-solid fa-calendar"></i>2022/23</li>  
      </ul>
     </div>
     <hr>
     <div class="sps">
    <ul>
     <li>Good written</li>
     <li>Oral communication</li>
     <li>Good visualization</li>
     <li>Programming</li>
     <li>Self-motivated</li>
   </ul>
     </div>
 </div>


 <div class="box freshers 2022 any">
  <a href="zoho.html"><img src="./img/zoho.jpg"></a>
  <h4><a href="zoho.html">Zoho</h4></a>
    <h3><a href="zoho.html"> Marketing Analyst </h3></a>
     <hr>
     <div class="info">
      <ul>
        <li><i class="fa-solid fa-briefcase"></i>Fresher</li>
        <li><i class="fa-solid fa-indian-rupee-sign"></i>8 LPA</li>
        <li><i class="fa-solid fa-location-dot"></i>Chennai</li>
        <li><i class="fa-solid fa-graduation-cap"></i>BBA, MBA, BBM </li>
        <li><i class="fa-solid fa-chalkboard"></i>Any stream</li>
        <li><i class="fa-solid fa-calendar"></i>2022/21/20/19/18/17</li>  
      </ul>
     </div>
     <hr>
     <div class="sps">
    <ul>
     <li>Good written</li>
     <li>Oral communication</li>
     <li>Good visualization</li>
     <li>Programming</li>
     <li>Self-motivated</li>
   </ul>
     </div>
 </div>



 <div class="box freshers 2022 any">
  <a href="mahindra.html"><img src="./img/mahindra.jpg"></a>
  <h4><a href="mahindra.html">Mahindra</h4></a>
    <h3><a href="mahindra.html"> Graduate Apprentice Trainee </h3></a>
     <hr>
     <div class="info">
      <ul>
        <li><i class="fa-solid fa-briefcase"></i>Fresher</li>
        <li><i class="fa-solid fa-indian-rupee-sign"></i>3.58 LPA</li>
        <li><i class="fa-solid fa-location-dot"></i>Nagpur</li>
        <li><i class="fa-solid fa-graduation-cap"></i>BE/B.Tech </li>
        <li><i class="fa-solid fa-chalkboard"></i>Any stream</li>
        <li><i class="fa-solid fa-calendar"></i>2022/21</li>  
      </ul>
     </div>
     <hr>
     <div class="sps">
    <ul>
     <li>written</li>
     <li>Oral communication</li>
     <li>Good visualization</li>
     <li>creative thinking</li>
     <li>Self-motivated</li>
   </ul>
     </div>
 </div>



 <div class="box freshers any">
  <a href="Toppr.html"><img src="./img/toppr.png"></a>
  <h4><a href="Toppr.html">Toppr</h4></a>
    <h3><a href="Toppr.html"> Business Development Associate </h3></a>
     <hr>
     <div class="info">
      <ul>
        <li><i class="fa-solid fa-briefcase"></i>0-2 yr</li>
        <li><i class="fa-solid fa-indian-rupee-sign"></i>4 LPA</li>
        <li><i class="fa-solid fa-location-dot"></i>Ahmedabad</li>
        <li><i class="fa-solid fa-graduation-cap"></i>MBA/PGDM or B.Tech/BE </li>
        <li><i class="fa-solid fa-chalkboard"></i>Any stream</li>
        <li><i class="fa-solid fa-calendar"></i>2022/21/20/19/18/17</li>  
      </ul>
     </div>
     <hr>
     <div class="sps">
    <ul>
     <li>Communication</li>
     <li>presentation</li>
     <li>Good visualization</li>
     <li>creative thinking</li>
     <li>Self-motivated</li>
   </ul>
     </div>
 </div>




</div>
   
    <!-- <section class="bg-image">
      
    </section> -->
    <script src="./js/scripts.js"></script>
    <br>
  </main>


  <footer>
    <p></p> Created By <a>Team04</a>
    |@2022 All rights reserved</p>
  </footer>
    
  </body>
</html>
