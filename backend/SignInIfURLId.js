const checkElement = async selector => {
  while ( document.querySelector(selector) === null) {
      await new Promise( resolve =>  requestAnimationFrame(resolve) )
  }
  return document.querySelector(selector); 
  };                  
  
    
  // checkElement('signin').then((selector) => {        
        
  // })   


function SignInIfURLId(elementId) {
    // Get the current page URL
    const currentURL = window.location.href;    
    // Check if the URL contains "#signin"
    if (currentURL.includes("#signin")) {
      // Try to find the element with the given id
      console.log("currentURL", currentURL)
       
      if (elementId) {
        // Click the element
        const signInBtn = document.getElementById(elementId);              
        console.log("elementId", elementId)    
        signInBtn.click()
        return true;
      }
    }  
    // Return false if no URL contains "#signin" or if the element is not found
    return false;
  }
  
 