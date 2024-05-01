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
    <title>Paragliding</title>
    <link rel="stylesheet" href="place.css" /> 
    <script src="places.js" defer></script>
    <script src="place.js" defer></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
   

  </head>
<body style="background-color: rgba(191, 248, 192, 0.688);">
    
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
    <img src="parag2.jpg" class="img">
    
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="parag3.jpg" class="img">
    
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="parag1.jpg" class="img">
   
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div>
<br>


 <h1>Shouf Cedars</h1>
<h2> &nbsp; &nbsp;Shouf Cedars:<br>&nbsp; &nbsp;Shouf Cedar Reserve</h2>

<p class="description">
    Nestled in Lebanon's Shouf Mountains, the Shouf Cedar Nature Reserve is a sanctuary of ancient trees and diverse wildlife.<br>
    Immerse yourself in the beauty of nature and the warmth of local hospitality in this breathtaking natural haven.
          </p>
          <div id="fact">
            <h3 class="candle">Did You Know?</h3>
            <br>
            <p>The Shouf Biosphere Reserve, home to the Shouf Cedar Nature Reserve, is not only the largest reserve in Lebanon 
                 <br>
                 but also showcases one of the oldest and most extensive cedar forests in the country, with some trees dating back over 1,000 years.

                </p>
          </div>
          <br><br><br>
          <h2> &nbsp; &nbsp;Attractions and Activities:</h2>
          <p class="description">
            In the Shouf Cedar Nature Reserve, visitors can immerse themselves in the tranquil beauty of the ancient forest, explore winding trails amidst towering cedars,<br>
            engage in birdwatching to spot a variety of avian species,<br>
            , and embrace the serenity of nature through meditation or yoga practices amidst the tranquil surroundings.</p>
           
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3317.416991170368!2d35.728923675611235!3d33.74988887327235!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151f257c616aa895%3A0x2b522d7e9fbc04d9!2sShouf%20Cedars!5e0!3m2!1sen!2slb!4v1714574290909!5m2!1sen!2slb" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>    </div>
              <button class="fav-btn" id="fav-btn" onclick="addToFavorites('Shouf Cedars')" style="background-color:rgba(145, 236, 146, 0.688) ;">Add to Favorites</button>
  <a href="favorites.php" onclick="displayFavorites()">View Favorites</a>
   
<!--star rating:-->

<?php
if (isset($_SESSION['username'])) {
    echo '<div class="rating-box">
            <header>How was your experience?</header>
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