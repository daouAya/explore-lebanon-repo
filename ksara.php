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
    <img src="ksara1.jpg" class="img">
    
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="ksara2.jpg" class="img">
    
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="ksara3.jpg" class="img">
   
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


 <h1>Ksara Winery</h1>
<h2> &nbsp; &nbsp;Ksara Winery:<br>&nbsp; &nbsp;Shouf Cedar Reserve</h2>

<p class="description">
   
Nestled in Lebanon's Bekaa Valley, Ksara Winery is a testament to centuries of winemaking tradition.<br>
Founded in 1857 by Jesuit priests, this historic estate invites visitors to explore its vineyards, cellars,
 and tasting rooms, offering a captivating journey through Lebanon's renowned wine culture. 
          </p>
          <div id="fact">
            <h3 class="candle">Did You Know?</h3>
            <br>
            <p>Ksara Winery, founded by Jesuit priests in 1857, is one of Lebanon's oldest and most prestigious wineries, 
                 <br>
                 renowned for its award-winning wines and commitment to quality and sustainability.

                </p>
          </div>
          <br><br><br>
          <h2> &nbsp; &nbsp;Attractions and Activities:</h2>
          <p class="description">
            Visitors to Ksara Winery can immerse themselves in the rich history and winemaking culture of Lebanon, explore the scenic vineyards, learn about the winemaking process through guided tours, <br>
            experience wine tastings of the estate's renowned vintages, dine at the winery's restaurant offering gourmet cuisine paired with Ksara wines,<br>
            and enjoy breathtaking views of the Bekaa Valley from the estate's picturesque surroundings.</p>
           
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3314.4543379928596!2d35.889946475614586!3d33.82639197324285!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151f34ea39524517%3A0x16af31f9876cbd6a!2sChateau%20Ksara!5e0!3m2!1sen!2slb!4v1714574190428!5m2!1sen!2slb" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>    </div>
              <button class="fav-btn" id="fav-btn" onclick="addToFavorites('Ksara winery')" style="background-color:rgba(145, 236, 146, 0.688) ;">Add to Favorites</button>
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