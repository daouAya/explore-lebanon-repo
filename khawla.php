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
    <link rel="icon" href="logo.png" type="image/x-icon">
    <meta charset="utf-8" />
    <title>Sayeda Khawla Shrine</title>
    <link rel="stylesheet" href="religiousplace.css" /> 
    <script src="places.js" defer></script>
    <script src="place.js" defer></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
   

  </head>
<body style="background-color:#efdfb8;">
    
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
                      <a href="city.html">City Entertainment</a> 
                      <a href="nightlife.php">Nightlife</a> 
                      <a href="festivals.php">Festivals</a>
                    </div>
                  </div>
                  <div class="dropdown">
             <button class="dropbtn"> Regions
            </button>
            <div class="dropdown-content">
                <a href="north.php">
                    North
                </a>
                <a href="beqaa.php">
                   Beqaa Valley
                </a>
                <a href="mount.php">
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
         
            <a  onClick="scrollToSection('tips')">Tips</a>
            <a href="#about">Contact Us</a> 
            <a ><img src="search.png" class="login" title="Search" id="searchButton" onClick="openPopup()"></a>
            <div id="searchPopup" class="popup">
              <button class="close" onClick="closePopup()">&times</button>
              <input type="text" placeholder="Search for a place or region.."><button>Search</button>
              </div>
            <a href="login2.php"><img src="login.png" class="login" title="Log in"></a>
   
              
            </div>
          </div>
          
          
        <!-- Slideshow container -->
<div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <img src="khawla1.jpg" class="img">
    
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="khawla2.jpg" class="img">
    
  </div>

  

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  
</div>
<br>


 <h1> Sayeda Khawla Shrine</h1>
<h2> &nbsp; &nbsp;Sayeda Khawla Shrine&nbsp; &nbsp;  </h2>

<p class="description">

The Sayeda Khawla Shrine in Baalbeck holds a significant place in the hearts of both locals and visitors alike,<br>
 serving as a spiritual center and a testament to the region's rich cultural heritage. Nestled within the ancient city<br>
  of Baalbeck, renowned for its Roman ruins, the shrine is dedicated to Sayeda Khawla, the daughter of Imam Hussein,<br>
   revered in Shia Islam. Originally built centuries ago, the shrine has undergone various renovations and expansions,<br>
    reflecting the enduring devotion of its followers. 
  
          <div id="fact">
            <h3 class="candle">Did You Know?</h3>
            <br>
            <p>
           
One interesting fact about the Sayeda Khawla Shrine in Baalbeck is its unique blend of <br>
architectural styles. While the shrine itself is a testament to Islamic architecture, it also incorporates<br>
 elements from earlier civilizations that inhabited the region. The intricate designs and motifs found in the shrine's <br>
 structure reflect influences from Phoenician, Roman, and Byzantine cultures.

</p>
          </div>
          <br><br><br>
          <h2> &nbsp; &nbsp;A Symbol of Unity:</h2>
          <p class="description">  
          Another intriguing aspect of the Sayeda Khawla Shrine is its role as a center for cultural exchange and religious<br>
           tolerance. Despite being a sacred site in Shia Islam, the shrine has historically welcomed visitors from diverse<br>
            religious backgrounds, including Christians and Druze, who come to pay their respects and seek blessings. <br>
            This tradition of inclusivity underscores the pluralistic nature of Baalbeck and highlights the shared reverence <br>
             for spiritual figures transcending sectarian boundaries.
          </p>
           <p>Location</p>
           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3307.648958066966!2d36.19905727551436!3d34.00154947317617!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1518a3dc228a925b%3A0x475591c7fcc180ff!2sSayyida%20Khawla%20Shrine!5e0!3m2!1sen!2slb!4v1714598226422!5m2!1sen!2slb" class="map" width="500" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
           </div>
           <br>
              <button class="fav-btn" id="fav-btn" onclick="addToFavorites('Sayeda Khawla Shrine')"  style="background-color:#86621f; ;">Add to Favorites</button>
              <a href="favorites.php" onclick="displayFavorites()"> &nbsp; &nbsp; View Favorites &nbsp;&nbsp;</a>

<!--star rating:-->

<?php
if (isset($_SESSION['username'])) {
    echo '<div class="rating-box">
            <header>How was your experience?</header>
            <br>
            <div class="stars">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
            </div>
          </div>';
} else if (!isset($_SESSION['username'])) {
    echo '<div id="restricted">OOPS! You cannot access this section unless you have an account.<br>
    <a href="login2.php">Log in here!</a> In order to leave a comment or rate this place. Enjoy all features when logged in </div>';
}
?>
</body>