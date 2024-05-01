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
    <title>Prophet Job Tomb</title>
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
    <img src="niha1.jpg" class="img">
    
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="niha2.jpg" class="img">
    
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


 <h1> Prophet Job Tomb</h1>
<h2> &nbsp; &nbsp;Prophet Job Tomb &nbsp; &nbsp;  </h2>

<p class="description">
The Prophet Job Shrine in Niha, Lebanon, is a revered site steeped in both religious significance and historical intrigue.<br>
 Situated amidst the breathtaking landscapes of the Qadisha Valley, the shrine is dedicated to Prophet Job (Nabi Ayoub in Arabic),<br>
  a figure venerated in Judaism, Christianity, and Islam for his perseverance and unwavering faith in the face of adversity.
  
          <div id="fact">
            <h3 class="candle">Did You Know?</h3>
            <br>
            <p>
           
Another fascinating aspect of the Prophet Job Shrine in Niha, Lebanon, is its connection to local folklore and traditions.<br>
 Throughout the centuries, the shrine has been the subject of numerous myths and legends passed down through generations.<br>
  One particularly intriguing legend surrounding the shrine is the belief in its mystical healing powers.

</p>
          </div>
          <br><br><br>
          <h2> &nbsp; &nbsp;A Rich History:</h2>
          <p class="description">  
          Legend has it that Job sought refuge in the cave adjacent to the shrine during his trials, and the site has since<br>
           become a place of pilgrimage for believers seeking solace and divine intervention. One fascinating aspect of the<br>
            shrine is its unique architectural design, blending elements of ancient Phoenician craftsmanship with Islamic <br>
            aesthetics. The intricately carved stone walls and domed roof create an atmosphere of reverence and tranquility,<br>
             inviting visitors to reflect on the enduring wisdom of Job's story. Moreover, the shrine's location amid the rugged<br>
              beauty of the Qadisha Valley adds to its mystique
          </p>
           <p>Location</p>
           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d106407.00212119965!2d35.54311169217944!3d33.547690659019736!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151edc5b53a08889%3A0x1dd2559982566bdc!2sNiha%20Chouf!5e0!3m2!1sen!2slb!4v1714598681341!5m2!1sen!2slb" class="map" width="500" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
           </div>
           <br>
              <button class="fav-btn" id="fav-btn" onclick="addToFavorites('Prophet Job Tomb')"  style="background-color:#86621f; ;">Add to Favorites</button>
              <a href="favorites.php" class="nnn" onclick="displayFavorites()"> &nbsp; &nbsp; View Favorites &nbsp;&nbsp;</a>

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