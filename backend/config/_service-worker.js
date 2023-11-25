var APP_NAME = 'Lasfunding';
var APP_VER = '1.1.1';
var LOCALHOST_BACKEND_URL = `http://127.0.0.1:8000`;
var LIVEHOST_BACKEND_URL = `https://lasfunding.com:8080`;
var PRIMARY_COLOR = '#df5b1e'
var baseUrl = LIVEHOST_BACKEND_URL
const accessToken = localStorage.getItem('access_token');


function togglePasswordVisibility(passwordFieldId) {
    const passwordField = document.getElementById(passwordFieldId);
  
    if (passwordField.type === 'password') {
      passwordField.type = 'text';
    } else {
      passwordField.type = 'password';
    }
  }


  function formatDateTime(dateString) {
    // Parse the input date string
    const date = new Date(dateString);
  
    // Format the date
    const formattedDate = `${date.toLocaleDateString('en-US')} | ${formatTime(date)}`;
  
    return formattedDate;
  }
  
  // Helper function to format time
  function formatTime(date) {
    const hours = date.getHours();
    const minutes = date.getMinutes();
    const ampm = hours >= 12 ? 'PM' : 'AM';
    const formattedHours = hours % 12 === 0 ? 12 : hours % 12;
  
    // return `${formattedHours}:${padZero(minutes)}:${padZero(date.getSeconds())}.${date.getMilliseconds()}${ampm}`;
    return `${formattedHours}:${padZero(minutes)}${ampm}`;
  }
  
  // Helper function to pad single-digit numbers with a leading zero
  function padZero(number) {
    return number < 10 ? `0${number}` : number;
  }