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
    <img src="seven1.jpg" class="img">
    
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="seven2.jpg" class="img">
    
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


 <h1> Seven Sisters</h1>
<h2> &nbsp; &nbsp;Seven Sister DownTown:&nbsp; &nbsp;  </h2>

<p class="description">

Seven Sisters Beirut is not just a nightclub; it's a destination for those seeking an unforgettable nightlife experience <br>
in the heart of Beirut. Situated in the vibrant Achrafieh district, this upscale venue boasts an ambiance that is both glamorous<br>
 and inviting, drawing in partygoers from across the city and beyond.
          <div id="fact">
            <h3 class="candle">Did You Know?</h3>
            <br>
            <p>
            An interesting fact about Seven Sisters Beirut is that it takes its name from the famous Pleiades star cluster,<br>
             also known as the Seven Sisters, which holds significance in various cultures and mythologies around the world.<br>
              Just as the stars shine brightly in the night sky, Seven Sisters Beirut illuminates the Beirut nightlife scene<br>
               with its dazzling ambiance and unforgettable experiences.



</p>
          </div>
          <br><br><br>
          <h2> &nbsp; &nbsp;Entertainment:</h2>
          <p class="description">  
          Seven Sisters is more than just a place to dance; it's a hub of entertainment and socializing.<br>
           World-class DJs spin an eclectic mix of beats, ranging from chart-topping hits to underground tracks, keeping the<br>
            energy levels high and the crowd moving until the early hours of the morning.

          </p>
           <p>Location</p>
           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1170.765252642596!2d35.50276980533965!3d33.90448040597194!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151f16e97332e0ed%3A0x5e2842f17bbbacc6!2sSeven%20Sisters%20Beirut!5e0!3m2!1sen!2slb!4v1714578892519!5m2!1sen!2slb" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
              <button class="fav-btn" id="fav-btn" onclick="addToFavorites('Seven Sisters')"  style="background-color:rgb(92, 0, 0) ;">Add to Favorites</button>
  <a href="favorites.php" class="nnn" onclick="displayFavorites()">View Favorites</a>

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