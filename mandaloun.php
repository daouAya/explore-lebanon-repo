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
    <title>Mandaloun </title>
    <link rel="stylesheet" href="nightplace.css" /> 
    <script src="places.js" defer></script>
    <script src="place.js" defer></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
   

  </head>
<body style="background-color:black;">
    
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
    <img src="mandaloun1.jpg" class="img">
    
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="mandaloun2.jpg" class="img">
    
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


 <h1> Al Mandaloun</h1>
<h2> &nbsp; &nbsp;Al Mandaloun Beirut:&nbsp; &nbsp;  </h2>

<p class="description">
As you step through the doors of Mandaloun, you're transported into a world of luxury and opulence. <br>
The club's stylish design, with its sleek architecture and cutting-edge lighting, creates an atmosphere that is both <br>
glamorous and inviting. Every corner of Mandaloun is meticulously curated to provide an unforgettable nightlife experience.
          <div id="fact">
            <h3 class="candle">Did You Know?</h3>
            <br>
            <p>
            Mandaloun is that it is housed in a historic building that dates back to the early 20th century.<br>
             Originally serving as a traditional Lebanese mansion, the venue has been beautifully renovated and transformed<br>
              into the iconic nightclub it is today, blending heritage with modern luxury to create a truly unique nightlife <br>
              experience.
</p>
          </div>
          <br><br><br>
          <h2> &nbsp; &nbsp;Entertainment:</h2>
          <p class="description">  
          The pulsating beats of the music fill the air, beckoning guests to hit the dance floor and let loose.<br>
           World-renowned DJs and performers grace the stage, delivering electrifying sets that keep the energy levels<br>
            soaring throughout the night. From chart-topping hits to underground tracks, Mandaloun offers a diverse musical <br>
            journey that caters to every taste.

For those seeking a more exclusive experience, Mandaloun's VIP areas provide the perfect retreat. <br>
Luxurious furnishings, impeccable service, and breathtaking views of the dance floor create an ambiance of indulgence<br>
 and sophistication.
          </p>
           <p>Location</p>
           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3311.8976591171413!2d35.51085447550949!3d33.89228947321769!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151f16fc80f4e93d%3A0x6679e5b08cbcfa64!2sAl%20Mandaloun!5e0!3m2!1sen!2slb!4v1714579261992!5m2!1sen!2slb" class="map" width="500" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
              <button class="fav-btn" id="fav-btn" onclick="addToFavorites('Al Mandaloun')" style= style="background-color:rgb(92, 0, 0) ;">Add to Favorites</button>
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