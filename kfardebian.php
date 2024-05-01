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
    <title>Mzaar Kfardebian</title>
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
    <img src="kfardebian1.jpg" class="img">
    
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="kfardebian2.jpg" class="img">
    
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


 <h1>Mzaar Kfardebian</h1>
<h2> &nbsp; &nbsp;Mzaar Kfardebian:<br>&nbsp; &nbsp;Skiing Paradise: Mzaar Kfardebian</h2>

<p class="description">
    Experience the thrill of Lebanon's premier ski destination, Mzaar Kfardebian. Nestled amidst the majestic peaks of Mount Lebanon, <br>
    this resort offers a perfect blend of adventure and relaxation amidst stunning natural beauty. Whether carving down pristine slopes or enjoying après-ski delights, 
    Mzaar promises an unforgettable mountain retreat.
          </p>
          <div id="fact">
            <h3 class="candle">Did You Know?</h3>
            <br>
            <p>Mzaar Kfardebian,is not only Lebanon's largest ski resort but also the oldest, with a history dating back to the 1960s.
                 <br>
                 Its legacy as a premier winter sports destination in the Middle East continues to attract visitors from around the world,
                  making it a beloved gem in Lebanon's tourism landscape

                </p>
          </div>
          <br><br><br>
          <h2> &nbsp; &nbsp;Attractions and Activities:</h2>
          <p class="description">
            At Mzaar Kfardebian, the winter wonderland offers endless opportunities for adventure and relaxation. Visitors can carve through pristine slopes on skis or snowboards,<br>
            explore scenic trails on snowshoes, glide gracefully across the ice at the skating rink, <br>
            experience the thrill of snowmobiling, and enjoy family fun with tubing down snowy hills. With activities suitable for all ages and skill levels, Mzaar promises an unforgettable winter escape amidst the breathtaking beauty of Mount Lebanon.</p>
           
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24562.015328591635!2d35.820826945223644!3d34.00172551914448!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151f4c244bc6ebe1%3A0x4293a87b20264a23!2sKfardebian!5e0!3m2!1sen!2slb!4v1714574234917!5m2!1sen!2slb" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>    </div>
              <button class="fav-btn" id="fav-btn" onclick="addToFavorites('Mzaar Kfardebian')" style="background-color:rgba(145, 236, 146, 0.688) ;">Add to Favorites</button>
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