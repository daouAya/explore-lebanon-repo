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
    <title>Cornayel Lakes</title>
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
    <img src="cedars1.jpg" class="img">
    
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="cedars2.jpg" class="img">
    
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="cedars3.jpg" class="img">
   
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


 <h1> CEDARS OF GOD</h1>
<h2> &nbsp; &nbsp;Cornayel Lakes:<br>&nbsp; &nbsp; Mount Lebanon's Hidden Alpine Haven </h2>

<p class="description">
Come explore the timeless beauty of the Cedars of God in Lebanon! <br>
Wander through this ancient forest, where each tree whispers tales of history and resilience. <br>
Lose yourself in the serene majesty of these towering cedars, a testament to nature's enduring splendor.<br> Discover the spiritual
 significance and cultural heritage of this sacred site, and let its tranquility rejuvenate your soul.<br>
 Experience the magic of the Cedars of God , a journey you'll cherish forever.
          </p>
          <div id="fact">
            <h3 class="candle">Did You Know?</h3>
            <br>
            <p>
            These iconic trees have cultural and historical significance,<br>
             often mentioned in religious texts <br> and revered for their beauty and longevity.</p>
          </div>
          <br><br><br>
          <h2> &nbsp; &nbsp;Attractions and Activities:</h2>
          <p class="description">  
            
Visitors can explore the timeless beauty of the Cedars of God in Lebanon, wandering through a majestic forest of ancient
 cedar trees. These towering giants offer a serene setting for relaxation and reflection.<br>
 Guided tours provide insights into the rich history
  and cultural significance of this sacred site,<br> enhancing the experience for curious explorers. In the winter months,
   the Cedars of God transform into a snowy paradise, <br>offering opportunities for skiing and snowboarding amidst breathtaking <br>
   scenery. After a day of adventure, visitors can indulge in the flavors of Lebanese cuisine at nearby restaurants,<br>
    savoring the local specialties.<br>
 Whether seeking adventure or serenity, the Cedars of God promise an unforgettable journey for all who visit.
          </p>
           
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3298.1822982944664!2d36.04633337552529!3d34.243891673085514!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x152205ad16dd85fb%3A0x4f7ed5033f3af01b!2sCedars%20of%20God%20Bsharri!5e0!3m2!1sen!2slb!4v1714563252173!5m2!1sen!2slb"class="map" width="500" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <br>
              <button class="fav-btn" id="fav-btn" onclick="addToFavorites('Balou3-Bal3a')" style="background-color:rgba(145, 236, 146, 0.688) ;">Add to Favorites</button>
  <a href="favorites.php" onclick="displayFavorites()">&nbsp; &nbsp; View Favorites&nbsp; &nbsp; </a>

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