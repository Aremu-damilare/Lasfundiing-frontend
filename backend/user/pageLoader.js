

function pageLoader(state){
    var topBar = document.querySelector(".topbar");
    var mainSection = document.querySelector("body > div.main-section");
    var navBar = document.querySelector("body > div.rl_navbar1_component.w-nav");
    var loaderContainer = document.querySelector('.loader-container');    

    if(state == false){
      loaderContainer.style.display = 'none';
  
      topBar.style.display = "flex"
      mainSection.style.display = "block"
      navBar.style.display = "block"
    } else {
      loaderContainer.style.display = 'flex';
  
      topBar.style.display = "none"
      mainSection.style.display = "none"
      navBar.style.display = "none"
    }
  }
  