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
    <title>Nabi Shuaib Tomb</title>
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
    <img src="shuaib1.jpg" class="img">
    
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="nabi-shuaib.png" class="img">
    
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


 <h1> Nabi Shuaib Tomb</h1>
<h2> &nbsp; &nbsp;Nabi Shuaib Tomb &nbsp; &nbsp;  </h2>

<p class="description">

The Maqam Nabi Shuaib, situated near the town of Hasbaya in southern Lebanon, holds profound spiritual significance <br>
for both the Druze community and followers of Islam. Believed to be the burial place of the biblical figure Jethro,<br>
 or Nabi Shuaib in Arabic, who is revered as a prophet in both Druze and Islamic traditions, the maqam serves as a <br>
 sacred pilgrimage site and a symbol of religious unity and reverence.
  
          <div id="fact">
            <h3 class="candle">Did You Know?</h3>
            <br>
            <p>
            One intriguing aspect of the Maqam Nabi Shuaib is its unique architectural design, which reflects the<br>
             cultural synthesis and historical continuity of the region. The maqam features a simple yet elegant structure,<br>
              with a white dome and minaret overlooking the surrounding landscape.
</p>
          </div>
          <br><br><br>
          <h2> &nbsp; &nbsp;Symbol of Unity:</h2>
          <p class="description">  
          Today, the Maqam Nabi Shuaib stands as a cherished symbol of Lebanon's rich religious heritage and cultural diversity.<br>
           Its significance transcends sectarian boundaries, serving as a place of spiritual solace and communal celebration<br>
            for people of all faiths. As a beacon of unity and tolerance, the maqam continues to inspire devotion and reverence <br>
            among pilgrims and visitors, embodying the timeless values of faith, compassion, and mutual understanding.
          </p>
           <p>Location</p>
           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13323.88613226719!2d35.67485015564345!3d33.39790687456214!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151ec69cc4ea1465%3A0xe5a197746f6edd48!2sHasbaiyya!5e0!3m2!1sen!2slb!4v1714602455967!5m2!1sen!2slb" class="map" width="500" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
           </div>
           <br>
              <button class="fav-btn" id="fav-btn" onclick="addToFavorites('Nabi Shouaib Tomb')"  style="background-color:#86621f; ;">Add to Favorites</button>
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