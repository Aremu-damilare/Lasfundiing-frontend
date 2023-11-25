const RegisterForm = document.querySelector('#email-form > input.submit-button.w-button');
const miniLoaderContainer = document.querySelector('.mini-loader-container')
const baseUrl = "https://lasfunding.com:8000"


RegisterForm.addEventListener('click', (event) => {
  miniLoaderContainer.style.display = 'block'
  console.log("Register form submited")
  event.preventDefault();

  const email =  document.querySelector('#Email-2').value;

  var elements = document.querySelectorAll('#Password')
  const password1 = elements[0].value;
  const password2 = elements[1].value;

  const phone = document.querySelector('#Phone-Number').value;
  const country = document.querySelector('#Select-Country-3').value;
  const firstname = document.querySelector('#First-Name').value;
  const lastname = document.querySelector('#Last-Name').value;
  const signInCheckBox = document.querySelector('#checkbox-2');

  

  var data = JSON.stringify({ email: email, password1: password1, password2: password2, 
    phone: phone, country: country ,firstname: firstname, lastname: lastname  
  })
  const errorMessage = document.querySelector('.w-form-fail');
  const successMessage = document.querySelector('.w-form-done');
  
  console.log("--- data ---", data)
  if (password1 !== '' && signInCheckBox.checked) {
    fetch(`${baseUrl}/register/`, {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json'
      },
      body: data
    })
    .then(response => {
      if (response.ok) {
        // Redirect to a new page or do something else        
        errorMessage.style.display = 'none';
        successMessage.style.display = 'block';
        setTimeout(function() {
          window.location.href = `email-verification.html?email=${email}`;
        }, 2000);
        miniLoaderContainer.style.display = 'none'
        console.log("response", response)
      } else {
        miniLoaderContainer.style.display = 'none'
        response.json().then(data => {
          console.log("response", data)          
          errorMessage.style.display = 'block';
          successMessage.style.display = 'none';
          
          
          let errorHtml = '';
          for (const key in data) {
            const errorMessages = data[key];
            for (const errorMessage of errorMessages) {
              errorHtml += `${key}: ${errorMessage}<br>`;
            }
          }
          errorMessage.innerHTML = errorHtml;
          throw new Error('Error registering');
        })
      }
    })
    .catch(error => {
      miniLoaderContainer.style.display = 'none'
      console.error('Error:', error);
      successMessage.style.display = 'none';
      errorMessage.style.display = 'block';
      errorMessage.textContent = 'Oops! Something went wrong while submitting the form.';
    });
  }
  
});
