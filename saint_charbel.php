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
    <title>Seven Sisters </title>
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
    <img src="charbel1.jpg" class="img">
    
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="charbel2.jpg" class="img">
    
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


 <h1> Saint Charbel Tomb </h1>
<h2> &nbsp; &nbsp;Saint Charbel Tomb:&nbsp; &nbsp;  </h2>

<p class="description">

The tomb of Saint Charbel, one of Lebanon's most venerated saints, holds a special place in the hearts of countless pilgrims and<br>
 believers. Located in the peaceful setting of Annaya, Lebanon, the tomb serves as a focal point for those seeking solace,<br>
  healing, and spiritual guidance.

Saint Charbel, a Maronite monk known for his deep devotion to prayer and asceticism, <br>
lived a life of humility and holiness in the late 19th century. After his passing in 1898, numerous miraculous healings 
<br> and intercessions were attributed to him, solidifying his reputation as a saintly figure.
          <div id="fact">
            <h3 class="candle">Did You Know?</h3>
            <br>
            <p>
            Saint Charbel, despite being buried for decades, remained remarkably intact and even exuded a mysterious liquid<br>
             known as "myrrh." This phenomenon, often attributed to the saint's sanctity, has been a source of wonder and awe <br>
             for believers, drawing even more pilgrims to his tomb in search of spiritual blessings and healing.



</p>
          </div>
          <br><br><br>
          <h2> &nbsp; &nbsp;Attractions:</h2>
          <p class="description">  
          What makes Saint Charbel's tomb particularly special is the palpable sense of peace and divine presence that<br>
           envelops the space. Many visitors report experiencing profound spiritual encounters and receiving answers to their <br>
           prayers while in the presence of the saint's relics.
           The tomb itself is a humble yet sacred site, adorned with candles, flowers, and tokens of gratitude from devotees<br>
            who have experienced the saint's miraculous interventions. Pilgrims from all walks of life flock to the tomb,<br>
             seeking Saint Charbel's intercession for healing, protection, and blessings.

          </p>
           <p>Location</p>
           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3303.000685700778!2d35.751369375519694!3d34.12073217313134!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151f519d4dd95839%3A0x7cc87101cbb702cf!2sMonastery%20Saint%20Maroun!5e0!3m2!1sen!2slb!4v1714593267150!5m2!1sen!2slb" class="map" width="500" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
           </div>
           <br>
              <button class="fav-btn" id="fav-btn" onclick="addToFavorites('Saint Charbel Tomb')"  style="background-color:#86621f; ;">Add to Favorites</button>
              <a href="favorites.php"  class="nnn" onclick="displayFavorites()"> &nbsp; &nbsp; View Favorites &nbsp;&nbsp;</a>

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