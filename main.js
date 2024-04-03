
function openPopup() {
    document.getElementById("searchPopup").style.display = "block";
  }
  
 
  function closePopup() {
    document.getElementById("searchPopup").style.display = "none";
  }
  
 
  document.getElementById("searchButton").addEventListener("click", openPopup);

  function scrollToSection(sectionId) {
    var section = document.getElementById(sectionId);
    section.scrollIntoView({ behavior: 'smooth' });
}