var APP_NAME = 'Lasfunding';
var APP_VER = '1.1.1';
var LOCALHOST_BACKEND_URL = `http://127.0.0.1:8000`;
var LIVEHOST_BACKEND_URL = `https://lasfunding.com:8080`;
var PRIMARY_COLOR = '#df5b1e'
var baseUrl = LOCALHOST_BACKEND_URL
const accessToken = localStorage.getItem('access_token');


function togglePasswordVisibility(passwordFieldId) {
    const passwordField = document.getElementById(passwordFieldId);
  
    if (passwordField.type === 'password') {
      passwordField.type = 'text';
    } else {
      passwordField.type = 'password';
    }
  }