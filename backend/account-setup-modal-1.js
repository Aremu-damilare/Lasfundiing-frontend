const elements = document.querySelectorAll('[class^="mt"][class$="-type-wrapper w-inline-block"]');
const baseUrl = "http://lasfunding.com:8000/"

elements.forEach((element) => {
  element.addEventListener('click', (event) => {    
    const classList = element.classList;
    const platform = classList[0].match(/\d+/)[0];
    
    const queryString = window.location.search;
    const queryParams = new URLSearchParams(queryString);
    const accountType = queryParams.get('account-type');
    
    
    const url = `account-setup-modal-2.html?account-type=${accountType}&platform=${platform}`;
    window.location.href = url;
    
  });
});

// fetch('http://lasfunding.com:8000/platforms/', {
//   method: 'GET',
//   headers: {
    
//   }
// })
// .then(response => response.json())
// .then(data => {
//     if (data.length === 0) {
//         console.log('The data array is empty');
        
//       } else {
                      
       
//       }
// })
// .catch(error => {
//   console.error(error);
// });

