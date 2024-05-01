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
    <title>The Melkite Catholic Cathedral of Saint Elias</title>
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
    <img src="melkite1.jpg" class="img">
    
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="melkite2.jpg" class="img">
    
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


 <h1> The Melkite Catholic Cathedral of Saint Elias</h1>
<h2> &nbsp; &nbsp;The Melkite Catholic Cathedral of Saint Elias &nbsp; &nbsp;  </h2>

<p class="description">

The Melkite Cathedral of Saint Elias in Beirut stands as a beacon of spirituality and cultural heritage in the heart of<br>
 Lebanon's bustling capital. Dedicated to Saint Elias, a revered prophet in Christianity, the cathedral holds a special place <br>
 in the hearts of the Melkite Greek Catholic community, one of the oldest Christian denominations in the region. <br>
 Its striking architecture, blending Byzantine and Romanesque influences, captivates visitors with its grandeur and elegance.
  
          <div id="fact">
            <h3 class="candle">Did You Know?</h3>
            <br>
            <p>

            One interesting fact about the Melkite Cathedral of Saint Elias in Beirut is its stunning interior adorned<br>
             with intricate iconography and ornate decorations. Within the cathedral, visitors are treated to a visual feast <br>
             of vibrant frescoes, elaborate mosaics, and beautifully crafted icons 
</p>
          </div>
          <br><br><br>
          <h2> &nbsp; &nbsp;More than Just a Cathedral:</h2>
          <p class="description">  
          
The Melkite Cathedral of Saint Elias in Beirut stands as a beacon of spirituality and cultural heritage in the heart of Lebanon's<br>
 bustling capital. Dedicated to Saint Elias, a revered prophet in Christianity, the cathedral holds a special place in the hearts<br>
  of the Melkite Greek Catholic community, one of the oldest Christian denominations in the region. Its striking architecture, <br>
  blending Byzantine and Romanesque influences, captivates visitors with its grandeur and elegance. Originally built in the late <br>
  19th century, the cathedral has undergone several renovations and expansions, reflecting Beirut's rich tapestry of history and <br>
  the enduring faith of its inhabitants.<br>

In addition to its religious significance, the Melkite Cathedral of Saint Elias plays a vital cultural role in Beirut's <br>
vibrant community. It serves as a venue for various cultural events, including concerts, art exhibitions, and religious<br>
 ceremonies, fostering a sense of unity and belonging among Lebanon's diverse population. Whether as a place of prayer,<br>
  a cultural hub, or a symbol of resilience, the Melkite Cathedral of Saint Elias continues to enrich the fabric of Beirut's<br>
   social and spiritual landscape
          </p>
           <p>Location</p>
           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d211950.40406124253!2d35.200623894531255!3d33.896734000000016!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151f16e69dc91bab%3A0xe37fa68fe805a8e3!2sSt.%20Elias%20Melkite%20Greek%20Catholic%20Cathedral!5e0!3m2!1sen!2slb!4v1714599091271!5m2!1sen!2slb"class="map" width="500" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
           </div>
           <br>
              <button class="fav-btn" id="fav-btn" onclick="addToFavorites('The Melkite Cathedral of Saint Elias')"  style="background-color:#86621f; ;">Add to Favorites</button>
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