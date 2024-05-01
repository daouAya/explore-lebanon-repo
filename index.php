<?php
session_start();

if (isset($_SESSION['username'])) {
 // User is logged in, display the main page content
echo "Welcome, " . $_SESSION['username'] . "!";
}
?>




<!DOCTYPE html>

<html lang="en" >
<head>
    <meta charset="utf-8" />
    <title>Explore Lebanon</title>
    <link rel="stylesheet" href="mainstyle.css" />
    <script src="main.js" defer></script>
</head>
 <body>
     <div class="content">
        <div class="header">
            <img src="logo.png" height="50px" width="50px" class="logo"/>
    <a href="index.php" class="name">Explore Lebanon</a>
         
            <div class="header-right">
                <div class="dropdown">
                    <button class="dropbtn">Places and Activities
                      
                    </button>
                    <div class="dropdown-content">
                      <a href="nature.php">Nature and Adventures</a>
                      <a href="historical.php">Historical Tourism</a>
                      <a href="religious.php">Religious Tourism</a>
                      <a href="winter.php">Winter Activities</a> 
                      <a href="summer.php">Summer Activities</a>
                      <a href="city.php">City Entertainment</a> 
                      <a href="nightlife.php">Nightlife</a> 
                      <a href="festival.php">Festivals</a>
                    </div>
                  </div>
                  <div class="dropdown">
                  <button cursor="pointer" class="dropbtn" onClick="scrollToSection('regions')"> Regions
            </button>
            <div class="dropdown-content">
                <a href="north.php">
                    North
                </a>
                <a href="beqaa.php">
                   Beqaa Valley
                </a>
                <a href="mountleb.php">
                    Mount Lebanon
                </a>
                <a href="beirut.php">
                    Beirut
                </a>
                <a href="south.php">
                    South
                </a>
            </div>
            </div>
             
            <a  cursor="pointer" onClick="scrollToSection('tips')">Tips</a>
              <a href="contact.php">Contact Us</a> 
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
       <div class="slideimage">
        <img src="d1.png" style="width:100%">
        <div class="info">
          <h3>South</h3><br>
        <pre>
            Discover the allure of South Lebanon's cultural treasures and natural beauty.
            Wander through ancient ruins in Tyre, 
            unwind on pristine beaches in Naqoura, 
            and savor the flavors of Lebanese cuisine.
            Experience genuine hospitality and create lasting memories in South Lebanon.

            <a href="south.php" class="nna"> see more! </a>  
          </pre>
        </div>
      </div>   
        </div>
        
        <div class="mySlides fade">
          <div class="numbertext">2 / 5</div>
          <div class="slideimage">
        <div ><img src="d3.png" style="width: 100%"></div> 
       <div class="info">
        <h3>Beirut</h3><br>
    <pre>
      Beirut, Lebanon's dynamic capital, entices tourists with its rich history,
      vibrant culture, and cosmopolitan atmosphere. 
      From ancient ruins to bustling markets,
      the city offers a captivating blend of tradition and modernity. 
      Explore its streets, savor its cuisine,
      and immerse yourself in the energy of Beirut's diverse neighborhoods.

       <a href="beirut.php" class="ann">  see more!  </a>
        </pre>
       </div>   
      </div>
        </div>
        
        <div class="mySlides fade">
          <div class="numbertext">3 / 5</div>
          <div class="slideimage">
        <div ><img src="d22.png" style="width: 100%" ></div>  
        <div class="info">
          <h3>North</h3><br>
      <pre>
        North Lebanon beckons with its stunning coastlines, ancient ruins,
        and mountain villages.
        Explore the historic towns of Batroun and Byblos,
        relax on sandy beaches,and wander through the majestic Kadisha Valley.
        From breathtaking landscapes to rich cultural heritage,
        North Lebanon promises an unforgettable journey for every traveler.

        <a href="north.php" class="nan">  see more!  </a>
          </pre>
         </div>   
        </div>
       </div>
        <div class="mySlides fade">
          <div class="numbertext">4 / 5</div>
          <div class="slideimage">
        <div ><img src="d4.png" style="width: 100%" ></div>  
        <div class="info">
          <h3>Mont Lebanon</h3><br>
      <pre>
         Mont Lebanon, in Lebanon, is a pretty area between the sea and the mountains.
         It's famous for its beautiful views and old places to visit. 
         You can go to nice towns like Broummana, see old buildings like Beiteddine Palace, 
         and do fun things like hiking or skiing in the mountains. 
         Mont Lebanon is a great place to explore nature and history at the same time.
          
         <a href="mountleb.php" class="no">  see more!  </a>
          </pre>
        </div>
         </div>   
      </div>
        
        <div class="mySlides fade">
          <div class="numbertext">5 / 5</div>
          <div class="slideimage">
        <div ><img src="d5.png" style="width: 100%" ></div>  
        <div class="info">
          <h3>Beqaa</h3><br>
      <pre>
        The Beqaa Valley in Lebanon is a fertile region between mountains,
        famous for its history and agriculture.
        Explore ancient ruins at Baalbek, enjoy scenic vineyards,
        and experience Lebanese hospitality in charming villages.
        It's a perfect blend of culture and nature for any traveler.

        <a href="beqaa.php" class="ano">  see more!  </a>
          </pre>      
      </div>  
      </div>
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
      <div class="d" id="tips">
        <h2>What you should know before visiting lebanon</h2>
        <div class="container">
            <div class="box"><img src="output-onlinegiftools (3).gif" class="im"><br/>   Weather<br/> <span>Lebanon generally experiences a Mediterranean climate with hot, dry summers and cool, wet winters.</span></div>
            <div class="box"><img src="output-onlinegiftools.gif" class="im"><br/>   Currency<br/><span>The currency used in Lebanon is the Lebanese Pound (LBP). Be aware of the current exchange rates and have a mix of cash and credit/debit cards for your expenses.</span></div>
            <div class="box"><img src="output-onlinegiftools (8).gif" class="im"><br/>   Languages<br/><span>Arabic is the official language, but English and French are widely spoken, especially in urban areas and tourist destinations</span></div>
            <div class="box"><img src="output-onlinegiftools (1).gif" class="im"><br/>   Urgent Numbers<br/><span>Red cross : ######</span></div>
      </div>
      </div>
    <div class="footer">
      <img class="lo" src="green.jpg"> 
      <div>
        The copy rights of our website :

      </div>
 <br/>
 <br/>
 <br/>
 <br/>
 <br/>
    </div>
    </div>
      </div>
      </div>
      </div>
     </body>
  
</html>
