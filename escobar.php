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
    <title>Esco-Bar</title>
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
    <img src="escobar1.jpg" class="img">
    
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="escobar2.jpg" class="img">
    
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


 <h1> Esco-Bar  </h1>
<h2> &nbsp; &nbsp;Esco-Bar:&nbsp; &nbsp;  </h2>

<p class="description">

Located in the heart of Beirut, Esco-Bar is a renowned hotspot that encapsulates the city's vibrant nightlife scene.<br>
 It's not just a bar; it's an institution where culture, music, and camaraderie converge to create unforgettable moments.
          <div id="fact">
            <h3 class="candle">Did You Know?</h3>
            <br>
            <p>
            The venue is housed in a beautifully restored building that dates back to the early 20th century, adding a touch of<br>
             nostalgia to its modern ambiance. <br>
            It's a testament to Beirut's rich cultural heritage and resilience in the face of adversity.
</p>
          </div>
          <br><br><br>
          <h2> &nbsp; &nbsp;Entertainment:</h2>
          <p class="description">  
          Esco-Bar is known for its diverse lineup of events and performances, ranging from live music and DJ sets to comedy<br>
           shows and art exhibitions. The stage comes alive with the sounds of local and international artists, while the crowd <br>
           dances and socializes late into the night.

          </p>
           <p>Location</p>
           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3313.370233839905!2d35.53863707550764!3d33.854348173232125!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151f179383b84cab%3A0x61ebbf14773813c6!2sESCO-BAR%20The%20Backyard%20Hazmieh!5e0!3m2!1sen!2slb!4v1714580663246!5m2!1sen!2slb" class="map" width="500" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
              <button class="fav-btn" id="fav-btn" onclick="addToFavorites('Esco-Bar')" style= style="background-color:rgb(92, 0, 0) ;">Add to Favorites</button>
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