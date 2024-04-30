// Function to open the popup
const secondbody=document.getElementById('secondbody');
const secondheader=document.querySelector('secondheader');

const searchPopup = document.getElementById("searchPopup");

function openPopup() {
  searchPopup.style.display = "block";

    secondbody.classList.add('blurry');
    secondheader.classList.add('blurry');
   
  }
  
  function closePopup() {
    document.getElementById("searchPopup").style.display = "none";

   secondbody.classList.remove('blurry');
   secondheader.classList.remove('blurry');
  }
  function openPopup2() {
    const login=document.getElementById('loginPopup');
    login.style.display = "block";
    secondbody.classList.add('blurry');
      secondheader.classList.add('blurry');
     
    }
    
 
  document.getElementById("searchButton").addEventListener("click", openPopup);

  function scrollToSection(sectionId) {
    var section = document.getElementById(sectionId);
    section.scrollIntoView({ behavior: 'smooth' });
}