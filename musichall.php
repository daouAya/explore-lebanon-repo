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
    <title>Music Hall</title>
    <link rel="stylesheet" href="nightplace.css" /> 
    <script src="places.js" defer></script>
    <script src="place.js" defer></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
   

  </head>
<body style="background-color: black;">
    
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
    <img src="music1.jpg" class="img">
    
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="music2.jpg" class="img">
    
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


 <h1> Music Hall</h1>
<h2> &nbsp; &nbsp;Music Hall Beirut:&nbsp; &nbsp;  </h2>

<p class="description" >

The Music Hall in Beirut is not just a venue; it's an immersive experience. Nestled in the heart of the city, it pulsates 
<br> with energy, offering a unique blend of live music, entertainment, and cultural fusion. 
<br> Step inside, and you'll find yourself surrounded by an eclectic mix of sounds, from traditional Lebanese melodies
<br>  to contemporary hits, creating an atmosphere that is both electric and enchanting.
          <div id="fact">
            <h3 class="candle">Did You Know?</h3>
            <br>
            <p>
            Music Hall in Beirut is that it was originally established in 2003 by Elefteriades Productions,<br>
             founded by Michel Elefteriades, a Lebanese musician, producer, and politician. The venue quickly gained <br>
             international recognition for its unique concepts.



</p>
          </div>
          <br><br><br>
          <h2> &nbsp; &nbsp;Entertainment:</h2>
          <p class="description">  
          it's not just about the music; it's about the entire experience. Sip on handcrafted cocktails at the bar, indulge in<br>
           delicious bites from the menu, and lose yourself in the rhythm of the night.<br> Whether you're dancing to the beat or 
           simply soaking in the ambiance, <br>every moment at the Music Hall is filled with excitement and joy.


          </p>
           <p>Location</p>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d106156.52526731364!2d35.48464370174384!3d33.750549978060356!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151f16dd97485849%3A0xec76fb6b61858122!2sMusicHall%20Starco!5e0!3m2!1sen!2slb!4v1714578630903!5m2!1sen!2slb" class="map" width="500" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
              <button class="fav-btn" id="fav-btn" onclick="addToFavorites('Music Hall')" style="background-color:rgb(92, 0, 0) ;">Add to Favorites</button>
  <a href="favorites.php" onclick="displayFavorites()">View Favorites</a>

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