const queryString = window.location.search;
const queryParams = new URLSearchParams(queryString);
const orderID = queryParams.get('order-id');
const price = document.querySelector('#email-form > div.price-wrapper-setup > div')
const form = document.getElementById('email-form');
const errorMessage = document.querySelector('.w-form-fail');
const successMessage = document.querySelector('.w-form-done');
const accessToken = localStorage.getItem('access_token');
const baseUrl = "http://lasfunding.com:8000"
window.accountType = orderID;


const headers = new Headers();
headers.append('Authorization', `Bearer ${accessToken}`);

fetch(`${baseUrl}/order/${orderID}/`, {
  method: 'GET',
  headers: headers,
})
  .then(response => {
    if (response.ok) {
      return response.json();
    } else {
      throw new Error('Error retrieving order details');
    }
  })
  .then(data => {
    // order details
    console.log(data);
    price.innerHTML = `$${data.total_amount}`
    
  })
  .catch(error => {
    console.error('Error:', error);
  });



form.addEventListener('submit', function (event) {
  event.preventDefault(); 
  
  const firstName = document.querySelector('#First-Name').value;
  const lastName = document.querySelector('#Last-Name').value;
  const address = document.querySelector('#Address').value;
  const country = document.querySelector('#Select-Country-3').value;
  const state = document.querySelector('#State').value;
  const city = document.querySelector('#City').value;
  const phone = document.querySelector('#Phone-Number').value;
  

  const headers = new Headers();
  headers.append('Authorization', 'Bearer ' + accessToken); 

  
  const formData = new FormData();
  formData.append('first_name', firstName);
  formData.append('last_name', lastName);
  formData.append('address', address);
  formData.append('country', country);
  formData.append('state', state);
  formData.append('city', city);
  formData.append('phone', phone);

  
  fetch(`${baseUrl}/billing/`, {
  method: 'POST',
  headers: headers,
  body: formData
})
  .then(response => {
    if (response.ok) {
      console.log('Form submitted successfully.');
      errorMessage.style.display = 'none'
      successMessage.style.display = 'block'
      const url = `account-type-step-2.html?order-id=${orderID}`;
        window.location.href = url;
    } else {
      console.error('Error submitting the form:', response.status);
      errorMessage.style.display = 'block'
      successMessage.style.display = 'none'
    }
  })
  .catch(error => {
    console.error('Error submitting the form:', error);
    errorMessage.style.display = 'block'
      successMessage.style.display = 'none'
  });

});

