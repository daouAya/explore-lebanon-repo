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
    <title>Our Lady of Awaiting</title>
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
            <a href="contact.php">Contact Us</a> 
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
    <img src="lady1.jpg" class="img">
    
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="lady2.jpg" class="img">
    
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


 <h1> Our Lady of Awaiting</h1>
<h2> &nbsp; &nbsp;Our Lady of Awaiting &nbsp; &nbsp;  </h2>

<p class="description">

Our Lady of Maghdouche, located in the southern town of Maghdouche in Lebanon, is a revered Marian shrine with deep <br>
spiritual significance for Christians in the region. The shrine is dedicated to the Virgin Mary and is believed to mark <br>
the site where she appeared to a local shepherd centuries ago. The sanctuary is known for its iconic statue of Our Lady of<br>
 Maghdouche, which is said to have miraculous properties and attracts pilgrims from far and wide seeking blessings and divine<br>
  intervention.
  
          <div id="fact">
            <h3 class="candle">Did You Know?</h3>
            <br>
            <p>
            One remarkable aspect of Our Lady of Maghdouche is its historical legacy and cultural importance.<br>
             The shrine has been a place of pilgrimage for centuries, with pilgrims flocking to the site to pay homage <br>
             to the Virgin Mary and seek her intercession in times of need.
</p>
          </div>
          <br><br><br>
          <h2> &nbsp; &nbsp;A Lebanese Blessing:</h2>
          <p class="description">  
          Today, Our Lady of Maghdouche continues to inspire faith and devotion among believers, serving as a symbol of hope,<br>
           healing, and divine grace. Whether as a place of prayer, pilgrimage, or spiritual retreat, the shrine remains a <br>
           cherished cornerstone of Lebanon's religious and cultural heritage, inviting visitors to experience the profound<br>
            sense of peace and reverence that permeates its sacred grounds.
          </p>
           <p>Location</p>
           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3326.005958740209!2d35.37622728234948!3d33.52723070466772!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151ef1db3c64c781%3A0x3a8039c384be1c5c!2zQmFzaWxpY2Egb2YgT3VyIExhZHkgb2YgTWFudGFyYSAtINio2KfYstmK2YTZitmDINiz2YrYr9ipINin2YTZhdmG2LfYsdip!5e0!3m2!1sen!2slb!4v1714600542766!5m2!1sen!2slb" class="map" width="500" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
           </div>
           <br>
              <button class="fav-btn" id="fav-btn" onclick="addToFavorites('Our Lady of Awaiting')"  style="background-color:#86621f; ;">Add to Favorites</button>
              <a href="favorites.php" class="nnn"onclick="displayFavorites()"> &nbsp; &nbsp; View Favorites &nbsp;&nbsp;</a>

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