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
    <img src="balou31.jpg" class="img">
    
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="balou32.jpg" class="img">
    
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="balou33.jpg" class="img">
   
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


 <h1> BALOU'-BALA'AA</h1>
<h2> &nbsp; &nbsp;Balou'-Bala'aa:<br>&nbsp; &nbsp; Adventure Oasis </h2>

<p class="description">
Come to Balou Bal3a in Lebanon, where you can discover rugged mountain landscapes and vibrant cultural traditions.<br>
 Hike through scenic valleys, try thrilling activities like rock climbing and paragliding, and immerse yourself in local crafts and cuisine.<br>
 Experience the beauty and adventure of Balou Bal3a , an unforgettable journey awaits!
          <div id="fact">
            <h3 class="candle">Did You Know?</h3>
            <br>
            <p>
            An interesting fact about Balou Bal3a is that it is home to the "Cave of the Three Bridges,"<br>
             a natural wonder where three stone bridges have formed over time within a single cavern, <br>
            creating a breathtaking and unique geological formation.</p>
          </div>
          <br><br><br>
          <h2> &nbsp; &nbsp;Attractions and Activities:</h2>
          <p class="description">  
            
          Beyond its natural wonders, Balou Bal3a boasts a rich cultural heritage that beckons to be explored.<br>
           Visitors can immerse themselves in the vibrant traditions of the local communities, engaging with artisans,<br>
            and learning about traditional crafts such as pottery and weaving.<br>
           The warm hospitality of the locals adds an extra layer of authenticity to the experience,<br> inviting visitors to
            feel truly welcomed<br> and embraced by the spirit of the region.

To complete the journey, travelers can savor the flavors of Lebanese cuisine <br>at charming local eateries,
 indulging in traditional dishes made with fresh, <br>locally sourced ingredients. From hearty stews to flavorful mezze platters,<br>
  the culinary delights of Balou Bal3a are sure to<br> tantalize the taste buds and leave a lasting impression.
          </p>
           
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3300.8155800960517!2d35.8705549755221!3d34.17663247311048!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151f55a063a05ac7%3A0x5f8d2657b108445b!2sBalou3%20Balaa%20RestHouse!5e0!3m2!1sen!2slb!4v1714563804791!5m2!1sen!2slb" width="500" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <br>
              <button class="fav-btn" id="fav-btn" onclick="addToFavorites('Cedars of God')" style="background-color:rgba(145, 236, 146, 0.688) ;">Add to Favorites</button>
  <a href="favorites.php" onclick="displayFavorites()">&nbsp; &nbsp;View Favorites &nbsp; &nbsp;</a>

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