// const submit = document.querySelector('#email-form > input.submit-button.w-button');
const loginForm = document.querySelector('#email-form > input.submit-button.w-button');
const miniLoaderContainer = document.querySelector('.mini-loader-container')
const baseUrl = "https://lasfunding.com:8080"


loginForm.addEventListener('click', (event) => {
  miniLoaderContainer.style.display = 'flex'
  event.preventDefault();

  const email =  document.querySelector('#email').value;
  const password = document.querySelector('#Password').value;
  const signInCheckBox = document.querySelector('#checkbox');

  const errorMessage = document.querySelector('.w-form-fail');
  const successMessage = document.querySelector('.w-form-done');

  if (password !== '' && signInCheckBox.checked) {
  fetch(`${baseUrl}/login/`, {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json'
    },
    body: JSON.stringify({ email: email, password: password })
  })
  .then(response => {
    if (response.ok) {
      // Redirect to a new page or do something else
      
      response.json().then(data => {
        console.log("response.ok data",data)
          localStorage.setItem('access_token', data.access_token);
        localStorage.setItem('refresh_token', data.refresh_token);
        localStorage.setItem('user', JSON.stringify(data.user));
      })
      errorMessage.style.display = 'none';
      successMessage.style.display = 'block';
       
      
      setTimeout(function() {
        window.location.href = 'user/dashboard.html';
      }, 2000);
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
        throw new Error('Error signing in');
      })
    }
  })
  .catch(error => {
    miniLoaderContainer.style.display = 'none'
    successMessage.style.display = 'none';
      errorMessage.style.display = 'block';
      errorMessage.textContent = 'Ooops! Something went wrong while submitting the form.';
  });
  } else {
    miniLoaderContainer.style.display = 'none'
    successMessage.style.display = 'none';
    errorMessage.style.display = 'block';
    errorMessage.textContent = 'Ooops! All fields are required.';
  }
});

