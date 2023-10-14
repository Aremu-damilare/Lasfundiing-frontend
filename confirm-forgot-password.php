<?php
header('Cache-Control: no-store, no-cache, must-revalidate, max-age=0');
header('Pragma: no-cache');
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
?>
<!DOCTYPE html><!--  This site was created in Webflow. https://www.webflow.com  -->
<!--  Last Published: Wed May 03 2023 23:06:33 GMT+0000 (Coordinated Universal Time)  -->
<html >
<head>
  <meta charset="utf-8">
  <title>Password Reset Confirm - Lasfunding</title>
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
  <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
  <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
  <link href="images/favicon.png" rel="shortcut icon" type="image/x-icon">
  <link href="images/webclip.png" rel="apple-touch-icon"><!--  Memberstack webflow package  -->
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
    <form id="passwordResetForm" name="wf-form-Forgot-Password" data-name="Forgot Password" method="POST" class="signup-form-container">
        <img src="images/Lasfund-Logo.svg" loading="lazy" alt="" class="lasfunding-logo" style="margin: 50px;">
      <h2 class="signup-header">Password Reset Confirm</h2>
      <div>Password reset e-mail link is confirmed<span class="line-break-until-portait">reset the user's password.</span></div>
      <div class="space _2"></div>
        <div class="input-wrapper">
            <label for="newpassword" class="hide">New password</label>
            <input type="password" class="input w-input" id="newpassword1"  name="newpassword1" placeholder="New password..." required="">
        </div>

        <div class="input-wrapper">
            <label for="newpassword2" class="hide">Confirm password</label>
            <input type="password"  class="input w-input" id="newpassword2"  name="newpassword2" placeholder="Confirm password..." required="">
        </div>

      <div class="space"></div>
      <input type="submit" value="Reset Password" data-wait="Please wait..." class="button-5 w-button">
      <div class="space"></div>
      <div class="mini-loader-container">
        <svg id="mini-loader" class="mini-loader" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
            <g>
                <ellipse id="ellipse" cx="50" cy="50" rx="25" ry="25" />
            </g>        
        </svg>        
    </div>
    <div class="w-form-done">
        <div>Thank you! Your submission has been received!</div>
    </div>
    <div class="w-form-fail">
        <div>Oops! Something went wrong while submitting the form.</div>
    </div>
      <!-- <div>
        <a href="#">I already have a code → </a>
      </div> -->
    </form>
    
  </div>  
  <script src="js/webflow.js" type="text/javascript"></script>
  
  <script src="./backend/config/_service-worker.js"></script>

    <script>
    function getQueryParams() {
        const queryString = window.location.search;
        const urlParams = new URLSearchParams(queryString);
        
        const uid = urlParams.get("uid");
        const token = urlParams.get("token");
        console.log(uid, token)

        if (uid !== null && token !== null) {
                return { uid, token };
            } else {
                return null; 
            }
        }

        const queryParams = getQueryParams();

        if (queryParams) {
            const { uid, token } = queryParams;
                console.log("Value of 'uid':", uid);
                console.log("Value of 'token':", token);
            } else {
            console.log("Both 'uid' and 'token' are required in the query parameters.");
        }        
    </script>

    <script>
    document.addEventListener('DOMContentLoaded', function () {
        // Select the form element
        const form = document.getElementById('passwordResetForm');
        var doneElement = document.querySelector('.w-form-done');
        var failElement = document.querySelector('.w-form-fail');

        // Add an event listener to the form to capture the submit event
        form.addEventListener('submit', async function (event) {
            event.preventDefault(); // Prevent the default form submission behavior

            
            const queryString = window.location.search;
            const urlParams = new URLSearchParams(queryString);
            const uid = urlParams.get("uid");
            const token = urlParams.get("token");

            // Get the email input value
            const new_password1 = document.getElementById('newpassword1').value;
            const new_password2 = document.getElementById('newpassword2').value;

            // Create an object to send as JSON
            const requestData = { token, uid, new_password1, new_password2 };

            try {
                const response = await fetch(`${baseUrl}/password-reset-confirm/${uid}/${token}/`, {
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