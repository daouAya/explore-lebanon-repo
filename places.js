function addToFavorites(placeName) {
    var favoritePlaces = JSON.parse(localStorage.getItem('favoritePlaces')) || [];
  
    var isAlreadyFavorite = favoritePlaces.includes(placeName);
  
    if (!isAlreadyFavorite) {
        favoritePlaces.push(placeName);
        localStorage.setItem('favoritePlaces', JSON.stringify(favoritePlaces));
        alert('Added to Favorites!');
    } else {
        alert('This place is already in your favorites!');
    }
  }
  
  function displayFavorites() {
    var favoritePlaces = JSON.parse(localStorage.getItem('favoritePlaces')) || [];
    var favoriteList = document.getElementById('favoriteList');
    favoriteList.innerHTML = '';
  
    if (favoritePlaces.length === 0) {
        favoriteList.innerHTML = '<li>No favorite places yet.</li>';
    } else {
        favoritePlaces.forEach(function(place) {
            var listItem = document.createElement('li');
            listItem.textContent = place;
            favoriteList.appendChild(listItem);
        });
    }
  }
  
  function displayFavorites() {
    var favoritePlaces = JSON.parse(localStorage.getItem('favoritePlaces')) || [];
    var favoriteList = document.getElementById('favoriteList');
    favoriteList.innerHTML = ''; 
  
    if (favoritePlaces.length === 0) {
        favoriteList.innerHTML = '<li>No favorite places yet.</li>';
    } else {
        favoritePlaces.forEach(function(place) {
            var listItem = document.createElement('li');
            listItem.textContent = place;
            favoriteList.appendChild(listItem);
        });
    }
  }
  
  
  displayFavorites();