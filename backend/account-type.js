const accountTypeGrid = document.querySelectorAll("#Programs > div")
const baseUrl = "http://lasfunding.com:8000"
const accessToken = localStorage.getItem('access_token');


accountTypeGrid.forEach(element => {
    element.parentNode.removeChild(element);
  });



// 
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
// 


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
        // console.log('The data array is not empty', data);
        const newDiv = document.createElement("div");
        newDiv.innerHTML = `
        <div class="w-layout-grid account-type-grid ">                            
        </div>
                            `
        const parentElement = document.querySelector("#Programs")        
        parentElement.appendChild(newDiv);

        const accountTypeCard = document.querySelector(".w-layout-grid.account-type-grid")
        data.forEach((element, index) => {     
            // inside the data.forEach() loop
            const featureDivs = element.features.split('\r\n\r\n').map(feature => `
            <div class="amount-info-wrapper">
                <img src="../images/Vector-1332.svg" loading="lazy" alt="">
                <div class="text-block-35">${feature.trim()}</div>
            </div>
            `).join('');       
            accountTypeCard.innerHTML += `
        <div id="w-node-_4963d81b-f8d4-87ed-48fa-5770489b26fc-ac8f630d" class="amount-wrapper dashboard">
        <div class="amount-header dashboard">
           <div class="text-header-amount">
              <div class="text-block-32">Account type</div>
              <div class="text-block-33 dashboard">$${element.amount}</div>
           </div>
           <div class="amount-img"><img src="../images/Component-279-${index+5}.svg" loading="lazy" width="60" alt="" class="amount-image dashboard"></div>
        </div>

        ${featureDivs}
               
        <div class="button-wrappers dashboard">
           <a href="#" data-account-id="${element.id}" class="button-primary transparent learn-more dashboard w-button">Learn More</a>
           <a href="#" data-account-id="${element.id}"  class="button-primary learn-more start-now dashboard w-button">Start Now</a>
        </div>
        </div>`

        });                
       
      }
})
.catch(error => {
  console.error(error);
});



const checkElement = async selector => {
    while ( document.querySelector(selector) === null) {
        await new Promise( resolve =>  requestAnimationFrame(resolve) )
    }
    return document.querySelector(selector); 
};                  
    

checkElement('div.button-wrappers.dashboard > a.button-primary.learn-more.start-now.dashboard.w-button').then((selector) => {
    var links = document.querySelectorAll('div.button-wrappers.dashboard > a.button-primary.learn-more.start-now.dashboard.w-button');
    links.forEach(element => {
        console.log("foreachh", element)
        element.addEventListener('click', (event) => {
            event.preventDefault();
            console.log("preventdefault", element)
            const accountId = element.dataset.accountId;  
            const url = `account-setup-modal-1.html?account-type=${accountId}`;  
            window.location.href = url;
          });
    })
})




