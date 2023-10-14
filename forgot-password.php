<!DOCTYPE html>
<html data-wf-page="63b7df9ae5e96fa990c2bd44" data-wf-site="63807ab0318db8bd26b06087">
<head>
  <meta charset="utf-8">
  <title>Forgot password - Lasfunding</title>
  <meta content="forgot-password" property="og:title">
  <meta content="forgot-password" property="twitter:title">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="Webflow" name="generator">
  <link href="css/normalize.css" rel="stylesheet" type="text/css">
  <link href="css/webflow.css" rel="stylesheet" type="text/css">
  <link href="css/lasfunding.webflow.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
  <script type="text/javascript">WebFont.load({  google: {    families: ["Ubuntu:300,300italic,400,400italic,500,500italic,700,700italic","Exo:100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic","Poppins:100,200,300,regular,500,600,700,800,900,900italic"]  }});</script>
  <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
  <link href="images/favicon.png" rel="shortcut icon" type="image/x-icon">
  <link href="images/webclip.png" rel="apple-touch-icon">
  

  <style>
    .mini-loader-container {
        display: none;
        align-items: center;
        flex-direction: column;
      }
      
      .mini-loader {
        width: 60px;
        /** height: 2256px; **/
        stroke-width: 5px;
        stroke: #fff;
        fill: transparent;
        stroke-dasharray: 157.1;
        stroke-dashoffset: 0;
        animation: rot 4s infinite linear, clr 9s infinite linear;
      }
      
      @keyframes rot {
        0% {
          transform: rotate(0deg);
          stroke-dashoffset: 157.1;
        }
        50% {
          stroke-dashoffset: 0;
        }
        100% {
          transform: rotate(360deg);
          stroke-dashoffset: -157.1;
        }
      }
      
      @keyframes clr {
          0%,
          100% {
            stroke: #F5C1A9;
          }
          20% {
            stroke: #E04800;
          }
          40% {
            stroke: #E04800;
          }
          
          60% {
            stroke: #F5C1A9;
          }
          80% {
            stroke: #F5C1A9;
          }
        }  
 </style>

</head>
<body class="forgot-pw-body">
  <div class="w-form">
    <form id="passwordResetForm"  method="POST" class="signup-form-container">    
    <img src="images/Lasfund-Logo.svg" loading="lazy" alt="" class="lasfunding-logo" style="margin: 50px;">
      <h2 class="signup-header">Forgot password?</h2>
      <div>No worries, we will send you instructions on how to reset <span class="line-break-until-portait">your password by email.</span></div>
      <div class="space _2"></div>
      <div class="input-wrapper"><label for="Email-4" class="hide">Email Address</label>
      <input type="email" id="email" class="input w-input" maxlength="256" name="Email-2" data-name="Email 2" placeholder="Email..." id="Email-4" required=""></div>
      <div class="space"></div><input type="submit" value="Send instrutctions..." data-wait="Please wait..." class="button-5 w-button">
      <div class="space"></div>
      <div class="mini-loader-container">
        <svg id="mini-loader" class="mini-loader" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
            <g>
                <ellipse id="ellipse" cx="50" cy="50" rx="25" ry="25" />
            </g>        
        </svg>        
    </div>
      <!-- <div>
        <a href="#">I already have a code → </a>
      </div> -->
    </form>
    <div class="w-form-done">
      <div>Your submission has been received! Check your email Inbox or Spam.</div>
    </div>
    <div class="w-form-fail">
      <div>Oops! Something went wrong while submitting the form.</div>
    </div>
  </div>
  <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=63807ab0318db8bd26b06087" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>  
  <script src="js/webflow.js" type="text/javascript"></script>  
  <script src="./backend/config/_service-worker.js"></script>



<script>
  document.addEventListener('DOMContentLoaded', function () {
    // Select the form element
    const form = document.getElementById('passwordResetForm');
    var doneElement = document.querySelector('.w-form-done');
    var failElement = document.querySelector('.w-form-fail');

    // Add an event listener to the form to capture the submit event
    form.addEventListener('submit', async function (event) {
        event.preventDefault();
        setElementDisplayByClassName('mini-loader-container', 'flex');
      console.log("forgot password")

        const email = document.getElementById('email').value;
        
        const requestData = { email };

        try {
            const response = await fetch(`${baseUrl}/password-reset/`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify(requestData),
            });

            if (response.ok) {                
                const data = await response.json();
                console.log('Password reset request successful:', data);
                failElement.style.display = 'none';
                doneElement.style.display = 'flex';
                setElementDisplayByClassName('mini-loader-container', 'none');
                
            } else {                
                console.error('Password reset request failed:', response.status, response.statusText);
                failElement.style.display = 'flex';
                doneElement.style.display = 'none';
                setElementDisplayByClassName('mini-loader-container', 'none');
            }
        } catch (error) {
            console.error('An error occurred:', error);
            failElement.style.display = 'flex';
            doneElement.style.display = 'none';
            setElementDisplayByClassName('mini-loader-container', 'none');
        }
    });
});

</script>

<script>
  function setElementDisplayByClassName(className, state) {
    const elements = document.getElementsByClassName(className);              
    for (const element of elements) {
      element.style.display = state;
    }
  }
</script>

</body>
</html>