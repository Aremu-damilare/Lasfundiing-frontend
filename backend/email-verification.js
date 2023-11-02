const queryParams = new URLSearchParams(window.location.search);
const email = queryParams.get('email');



// update email element with email value
const emailElement = document.querySelector('.user-email');
if (emailElement) {
  emailElement.textContent = email;
}

const resendLink = document.querySelector('.resend-link');
const userEmail = document.querySelector('.user-email').textContent;
const fiveMinutesInMs = 5 * 60 * 1000;

// check if timer exists/cookie exists
const timer = parseInt(localStorage.getItem('resendTimer'));
if (timer && timer > Date.now()) {
  disableResendLink();
  startResendTimer(timer);
}

resendLink.addEventListener('click', async (event) => {
  event.preventDefault();
  
  // disable the resend link and start the timer
  disableResendLink();
  startResendTimer(Date.now() + fiveMinutesInMs);
  
  // make the post request to resend the email
  try {
    const response = await fetch(`${baseUrl}/resend-email/`, {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json'
      },
      body: JSON.stringify({ email: userEmail })
    });
    if (!response.ok) {
      throw new Error('Error resending email');
    }
  } catch (error) {
    console.error('Error:', error);
    enableResendLink();
    stopResendTimer();
  }
});

function disableResendLink() {
  resendLink.style.display = 'none' 
}

function enableResendLink() {
    resendLink.style.display = 'block' 
}

function startResendTimer(endTime) {
  const countdownEl = document.createElement('div');
  countdownEl.classList.add('countdown');
  resendLink.after(countdownEl);
  
  const intervalId = setInterval(() => {
    const timeRemaining = Math.round((endTime - Date.now()) / 1000);
    if (timeRemaining <= 0) {
      clearInterval(intervalId);
      countdownEl.remove();
      enableResendLink();
    } else {
      countdownEl.textContent = ` (${timeRemaining}s)`;
    }
    // save the timer in local storage
    localStorage.setItem('resendTimer', endTime.toString());
  }, 1000);
}

function stopResendTimer() {
  document.querySelector('.countdown').remove();
  localStorage.removeItem('resendTimer');
}
