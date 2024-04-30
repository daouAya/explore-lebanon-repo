<?php
session_start();

if (!isset($_SESSION['username'])) {
    // User is not logged in, redirect to the login page
    header("Location: login2.php");
    exit();
}

// User is logged in, display the main page content
echo "Welcome, " . $_SESSION['username'] . "!";
?>


<!DOCTYPE html>

<html lang="en" >
<head>
  <link rel="icon" href="logo.png" type="image/x-icon">
    <meta charset="utf-8" />
    <title>explore lebanon</title>
    <link rel="stylesheet" href="main.css" />
    <script src="main.js" defer></script>
</head>
 <body>
     <div class="content">
        <div class="header">
          
            <img src="logo.png" height="50px" width="50px" class="logo"/>
    <a href="mainpage.html" class="name">Explore Lebanon</a>
         
            <div class="header-right">
                <div class="dropdown">
                    <button class="dropbtn">Places and Activities
                      
                    </button>
                    <div class="dropdown-content">
                      <a href="nature.php">Nature and Adventures</a>
                      <a href="historical.php">Historical Tourism</a>
                      <a href="religious.php">Religious Tourism</a>
                      <a href="Winter">Winter Activities</a> 
                      <a href="Summer">Summer Activities</a>
                      <a href="city.html">City Entertainment</a> 
                      <a href="nightlife.php">Nightlife</a> 
                      <a href="Festivals">Festivals</a>
                    </div>
                  </div>
                  <div class="dropdown">
              <button class="dropbtn" onClick="scrollToSection('regions')"> Regions
            </button>
            <div class="dropdown-content" >
                <a href="South">
                    North
                </a>
                <a href="South">
                   Beqaa Valley
                </a>
                <a href="South">
                    Mount Lebanon
                </a>
                <a href="South">
                    Beirut
                </a>
                <a href="South">
                    South
                </a>
            </div>
            </div>
             
            <a  onClick="scrollToSection('tips')">Tips</a>
              <a href="#about">Contact Us</a> 
              <a ><img src="search.png" class="login" title="Search" id="searchButton" onClick="openPopup()"></a>
              <div id="searchPopup" class="popup">
                <p class="close" onClick="closePopup()">&times</p>
                <input type="text" placeholder="Search for a place or region.."><button>Search</button>
                </div>
              <a href="login2.php"><img src="login.png" class="login" title="Login" ></a>
              </div>
     </div>
     </div>
     
      <div id="secondbody">
      <video autoplay muted loop  >
        <source src="lebcrop.mp4" type="video/mp4">
        your browser does not support the video.
      </video>
      
      <div  class="Unlock">
           
          <h1 >  Unlock Lebanon's Wonders   </h1> 
      </div>
      <div class="slideshow-container" id="regions">

        <div class="mySlides fade">
          <div class="numbertext">1 / 5</div>
          <img src="d1.png" style="width:100%">

        </div>
        
        <div class="mySlides fade">
          <div class="numbertext">2 / 5</div>
        <div ><img src="d3.png" style="width: 100%"></div> 
        
        </div>
        
        <div class="mySlides fade">
          <div class="numbertext">3 / 5</div>
        <div ><img src="d22.png" style="width: 100%" ></div>  
         
        </div>

        <div class="mySlides fade">
          <div class="numbertext">4 / 5</div>
        <div ><img src="d4.png" style="width: 100%" ></div>  
        </div>
        
        <div class="mySlides fade">
          <div class="numbertext">4 / 5</div>
        <div ><img src="d5.png" style="width: 100%" ></div>  
        </div>

        <a class="prev" onclick="plusSlides(-1)">❮</a>
        <a class="next" onclick="plusSlides(1)">❯</a>
        
        </div>
       
        <br>
        
        <div style="text-align:center">
          <span class="dot" onclick="currentSlide(1)"></span> 
          <span class="dot" onclick="currentSlide(2)"></span> 
          <span class="dot" onclick="currentSlide(3)"></span> 
        </div>
        
        <script>
        let slideIndex = 1;
        showSlides(slideIndex);
        
        function plusSlides(n) {
          showSlides(slideIndex += n);
        }
        
        function currentSlide(n) {
          showSlides(slideIndex = n);
        }
        
        function showSlides(n) {
          let i;
          let slides = document.getElementsByClassName("mySlides");
          let dots = document.getElementsByClassName("dot");
          if (n > slides.length) 
          {slideIndex = 1}    
          if (n < 1) {slideIndex = slides.length}
          for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";  
          }
          for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
          }
          slides[slideIndex-1].style.display = "block";  
          dots[slideIndex-1].className += " active";
        }
        </script>
      <div class="d">
        <h2 id="tips">What you should know before visiting lebanon</h2>
        <div class="container">
            <div class="box"><img src="output-onlinegiftools (3).gif" class="im"><br/>   Weather<br/> <span>Lebanon generally experiences a Mediterranean climate with hot, dry summers and cool, wet winters.</span></div>
            <div class="box"><img src="output-onlinegiftools.gif" class="im"><br/>   Currency<br/><span>The currency used in Lebanon is the Lebanese Pound (LBP). Be aware of the current exchange rates and have a mix of cash and credit/debit cards for your expenses.</span></div>
            <div class="box"><img src="output-onlinegiftools (8).gif" class="im"><br/>   Languages<br/><span>Arabic is the official language, but English and French are widely spoken, especially in urban areas and tourist destinations</span></div>
            <div class="box"><img src="output-onlinegiftools (1).gif" class="im"><br/>   Urgent Numbers<br/><span>Red cross : ######</span></div>
      </div>
      </div>
    </div>
     </body>
    </html>
</html>
