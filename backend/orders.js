
const accessToken = localStorage.getItem('access_token');
const withOutOrder = document.querySelector(".order-content.without-orders")
const withOrder = document.querySelector(".order-content.with-orders")
const withOrderviewed = document.querySelector(".order-content.viewed")
const baseUrl = "http://lasfunding.com:8000"


console.log("access_token", accessToken)
const profileName = document.querySelector('body > div.topbar > div.profile > div > span.profile-name');
const profileEmail = document.querySelector('body > div.topbar > div.profile > div > span.profile-email');
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

fetch(`${baseUrl}/orders/`, {
  method: 'GET',
  headers: {
    'Authorization': 'Bearer ' + accessToken
  }
})
.then(response => response.json())
.then(data => {
  
    if (data.length === 0) {
        console.log('The data array is empty', data);

        withOutOrder.style.display = 'block'
        withOrder.style.display = 'none'
        withOrderviewed.style.display = 'none'
      } else {
        const targetElement = document.querySelector('.w-layout-grid.order-grid');
        console.log('The data array is not empty', data);
        
        data.forEach((element, index) => {   
                          
        targetElement.innerHTML += `
            <div id="" class="order-table-text">
              <div id="" class="text-block-70">#${element.id}</div>
            </div>
            <div id="" class="order-table-text">
              <div id="" class="text-block-70">${formatDate(element.created_at)}</div>
            </div>
            <div id="" class="order-table-text">
              <div id="" class="text-block-70">${element.order_status}</div>
            </div>
            <div id="" class="order-table-text">
              <div id="" class="view-order-link">View</div>
            </div>  
      `;          
          })
        withOutOrder.style.display = 'none'
        withOrder.style.display = 'block'
        withOrderviewed.style.display = 'none'
      }
})
.catch(error => {
  console.error(error);
});


function formatDate(dateString) {
  const createdAt = new Date(dateString);
  const formattedDate = createdAt.toLocaleDateString('en-US', {
    year: 'numeric',
    month: '2-digit',
    day: '2-digit'
  });
  return formattedDate;
}