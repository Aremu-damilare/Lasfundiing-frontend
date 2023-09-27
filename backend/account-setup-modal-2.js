const queryString = window.location.search;
const queryParams = new URLSearchParams(queryString);
const accountType = queryParams.get('account-type');
let platform = queryParams.get('platform');
const price = document.querySelector('.account-price-text')
const amount1 = document.querySelector(".amount-orange-text")
const amount2 = document.querySelector(".amount-text")
const baseUrl = "http://lasfunding.com:8000"
let selectedAccountType;

window.accountType = accountType;
window.platform = platform;



fetch(`${baseUrl}/account-types/`, {
  method: 'GET',
  headers: {
    
  }
})
.then(response => response.json())
.then(data => {
    if (data.length === 0) {
        console.log('The data array is empty');
        
      } else {          
        console.log(data);
        const accountType = window.accountType;        
        selectedAccountType = data.find(type => type.id === parseInt(accountType));        
        price.innerHTML = `$${selectedAccountType.price}`
        amount1.innerHTML = `$${selectedAccountType.amount}`
        amount2.innerHTML = `$${selectedAccountType.amount}`
        console.log(selectedAccountType);       
      }
})
.catch(error => {
  console.error(error);
});

var accountSetupConfirmLink = document.querySelector("a.price-wrapper.w-inline-block")
const accessToken = localStorage.getItem('access_token');
accountSetupConfirmLink.addEventListener("click", function(){
    if(platform == "5"){
        platform = 2
    }else {
        platform = 1
    }
    fetch(`${baseUrl}/create_order/`, {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json',
          'Authorization': 'Bearer ' + accessToken

        },
        body: JSON.stringify({account_type: [accountType], platform: platform})
      })
      .then(response => response.json())
      .then(data => {
        console.log(data.success, data.order_id);
        const url = `account-setup-modal-3.html?order-id=${data.order_id}`;
        window.location.href = url;
      })
      .catch(error => {
        console.error(error);
      });
})