const accessToken = localStorage.getItem('access_token');
const analyzerSection  = document.querySelector(".analyzer-section.dashboard.wf-section")
const baseUrl = "http://127.0.0.1:8000"
// const baseUrl = "https://lasfunding.com:8080"
const firstNameElement = document.querySelector('.user-fname');

const profileName = document.querySelector('body > div.topbar > div.profile > div > span.profile-name');
const profileEmail = document.querySelector('body > div.topbar > div.profile > div > span.profile-email');
const transactionsTable = document.querySelector('.transaction-table')
const noTransactionsTable = document.querySelector('.no-transaction-table')

// stop page animation
var topBar = document.querySelector(".topbar");
var mainSection = document.querySelector("body > div.main-section");
var navBar = document.querySelector("body > div.rl_navbar1_component.w-nav");
var loaderContainer = document.querySelector('.loader-container');

topBar.style.display = "none";
mainSection.style.display = "none";
navBar.style.display = "none";


if(accessToken){
  getAllUserData()
}
console.log("accessToken", accessToken)

function getAllUserData(){

  fetch(`${baseUrl}/user/`, {
    method: 'GET',
    headers: {
      'Authorization': 'Bearer ' + accessToken
    }
  })
  .then(response => response.json())
  .then(data => {
    console.log("user", data);
    
    if(data.user){
      console.log("data.user", data.user);          
      profileName.textContent = data.user ? `${data.user.first_name} ${data.user.last_name}` : 'first name last name';
      profileEmail.textContent = data.user ? `${data.user.email}` : 'email@email';      
    }  

  })
  .catch(error => {
    console.error(error);
  });
  
  setDisplay(true)

}


function setDisplay(state){
  if(state == true){
    loaderContainer.style.display = 'none';

    topBar.style.display = "flex"
    mainSection.style.display = "block"
    navBar.style.display = "block"
  } else {
    loaderContainer.style.display = 'block';

    topBar.style.display = "none"
    mainSection.style.display = "none"
    navBar.style.display = "none"
  }
}


function formatDate(dateString) {
    const createdAt = new Date(dateString);
    const formattedDate = createdAt.toLocaleDateString('en-US', {
      year: 'numeric',
      month: '2-digit',
      day: '2-digit'
    });
    return formattedDate;
  }

  function formatDateTime(dateString) {
    // Parse the input date string
    const date = new Date(dateString);
  
    // Format the date
    const formattedDate = `${date.toLocaleDateString('en-US')} | ${formatTime(date)}`;
  
    return formattedDate;
  }
  
  // Helper function to format time
  function formatTime(date) {
    const hours = date.getHours();
    const minutes = date.getMinutes();
    const ampm = hours >= 12 ? 'PM' : 'AM';
    const formattedHours = hours % 12 === 0 ? 12 : hours % 12;
  
    // return `${formattedHours}:${padZero(minutes)}:${padZero(date.getSeconds())}.${date.getMilliseconds()}${ampm}`;
    return `${formattedHours}:${padZero(minutes)}${ampm}`;
  }
  
  // Helper function to pad single-digit numbers with a leading zero
  function padZero(number) {
    return number < 10 ? `0${number}` : number;
  }


  function setElementDisplayByClassName(className, state) {
    const elements = document.getElementsByClassName(className);              
    for (const element of elements) {
      element.style.display = state;
    }
  }

   


  function createList(values, IdValue) {
    // Check if values is an array
    if (!Array.isArray(values)) {
        // If it's not an array, convert it to an array with a single element
        values = [values];
    }

    // Create the HTML string
    const htmlString = `
        <ul class="admin-account-type-list" id="${IdValue}">
            ${values.map(val => `<li  class="admin-account-type-list" >${val}</li>`).join('\n')}
        </ul>`;

    return htmlString;
}