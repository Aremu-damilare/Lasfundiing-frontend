var userData;
const accessToken = localStorage.getItem('access_token');
const analyzerSection  = document.querySelector(".analyzer-section.dashboard.wf-section")
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
      firstNameElement.textContent = data.user ? `${data.user.first_name}!` : 'first name';
      profileName.textContent = data.user ? `${data.user.first_name} ${data.user.last_name}` : 'first name last name';
      profileEmail.textContent = data.user ? `${data.user.email}` : 'email@email';
      userData = data.user
    }  

  })
  .catch(error => {
    console.error(error);
  });



  fetch(`${baseUrl}/orders/`, {
    method: 'GET',
    headers: {
      'Authorization': 'Bearer ' + accessToken
    }
  })
  .then(response => response.json())
  .then(data => {
    console.log("orders", data);
      
  })
  .catch(error => {
    console.error(error);
  });

  setDisplay(true)

}

function orderData(data){
  if (data === null || data === undefined || data.length === 0) {
    console.log("The data variable is empty.");
    // Remove all existing elements inside analyzerSection
    while (analyzerSection.firstChild) {
      analyzerSection.removeChild(analyzerSection.firstChild);
    }

    // Create and append new elements
    const span1 = document.createElement("span");
    if (userData) {
      span1.textContent = `Hello ${userData.first_name} ${userData.last_name}`;
    } else {
      span1.textContent = "Hello, User";
    }
    analyzerSection.appendChild(span1);

    const span2 = document.createElement("span");
    span2.innerHTML = `From your account dashboard, you can view your 
    <a href="../user/orders.html">recent orders</a>, 
    manage your <a href="#">billing address</a>, and <a href="#">
    edit your password and account details.</a>`;
    analyzerSection.appendChild(span2);
  } else {
    console.log("The data variable is not empty.");    

  }
}

function transactionData(data){
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
      <span id="" class="${element.status}"><img src="../images/transactions-status/${element.status}.svg" loading="lazy" alt="" class="status-icon">
        <span class="text-block-63">${element.status}</span>
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
