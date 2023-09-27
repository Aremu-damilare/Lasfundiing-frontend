const queryString = window.location.search;
const queryParams = new URLSearchParams(queryString);
const orderID = queryParams.get('order-id');
const accessToken = localStorage.getItem('access_token');
const baseUrl = `http://127.0.0.1:8000`




const checkOutBtn = document.querySelector("body > div.main-section > div.payment-section > div.right-payment-wrapper > div > div.billing-form.w-form > input")
checkOutBtn.addEventListener("click", () => {
  const paymentMethod = document.querySelector('input[name="Card"]:checked').value;    
  console.log('Selected payment method:', paymentMethod);

    const requestData = {
      payment_method: paymentMethod,
      order_id: orderID
    };
  
    
    fetch(`${baseUrl}/checkout/`, {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',
        'Authorization': 'Bearer ' + accessToken
      },
      body: JSON.stringify(requestData)
    })
    .then(response => {
      if (response.ok) {
        return response.json(); 
      } else {
        throw new Error('Request failed'); 
      }
    })
    .then(data => {            
      console.log(data);    
      setTimeout(function() {
        window.location.href = '/user/dashboard.html';
      }, 2000);
    })
    .catch(error => {
      console.error(error);
    });

  });

  
  
  console.log("access_token", accessToken)
  
  const accountAmount = document.querySelector('#account-amount');
  const price = document.querySelector('#price-text')
  const priceTotal = document.querySelector('#price-text-total')
  const platform = document.querySelector('#platform')
  const description = document.querySelector('#description')

  
  fetch(`${baseUrl}/order/${orderID}/`, {
    method: 'GET',
    headers: {
      'Authorization': 'Bearer ' + accessToken
    }
  })
  .then(response => response.json())
  .then(data => {
        
      if (data) {
          console.log('The data array ', data);
          console.log("orddd", data.account_type)
          accountAmount.innerHTML = `${data.account_type[0].amount}`
          priceTotal.innerHTML = `$${data.account_type[0].price}`
          price.innerHTML = `$${data.account_type[0].price}`
          description.innerHTML = `${data.account_type[0].description}`
          platform.innerHTML = `${data.platform.platform}`
        } else {
                  
          
        }
  })
  .catch(error => {
    console.error(error);
  });