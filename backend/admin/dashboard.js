var userData;
const accessToken = localStorage.getItem('access_token');
const analyzerSection  = document.querySelector(".analyzer-section.dashboard.wf-section")
const baseUrl = "http://127.0.0.1:8000"
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

// window.addEventListener('load', function() {
  
//   setTimeout(function() {
    // loaderContainer.style.display = 'none';

    // topBar.style.display = "flex"
    // mainSection.style.display = "block"
    // navBar.style.display = "block"
//   }, 3000);      
// });

if(accessToken){
  getAllUserData()
}
console.log("xxxxxxxx", accessToken)

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
      userData = data.user
    }  

  })
  .catch(error => {
    console.error(error);
  });



  fetch(`${baseUrl}/admin/store/transactions/`, {
    method: 'GET',
    headers: {
      'Authorization': 'Bearer ' + accessToken
    }
  })
  .then(response => response.json())
  .then(data => {
    
    if(data.length === 0){
      console.log("No transactions", data);
      transactionsTable.style.display = 'none'
      noTransactionsTable.style.display = 'block'
    } else {
      console.log("Transactions", data);
      transactionsTable.style.display = 'grid'
      noTransactionsTable.style.display = 'none'

      data.forEach(element => {
        console.log(element)
        transactionsTable.innerHTML += `
      <div id="" class="status">
        <div id="" class="${element.status}"><img src="../images/transactions-status/${element.status}.svg" loading="lazy" alt="" class="status-icon">
          <div class="text-block-63">${element.status}</div>
        </div>
      </div>
      <div id="" class="payment-type">
        <div class="text-block-62">${element.card_type}  **** ${element.card_last_4_digits}</div>
        <div class="text-block-61">${element.payment_method}</div>
      </div>
      <div id="" class="amount">
        <div class="text-block-64">$${element.amount}</div>
      </div>
      <div id="" class="date">
        <div class="text-block-65">${formatDate(element.created_at)}</div>
      </div>`

      });
    }
    
  })
  .catch(error => {
    console.error(error);
  });


  console.log("xxxxxxxxxxxxxxxxxxxxx")
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