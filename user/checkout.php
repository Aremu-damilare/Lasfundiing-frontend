<?php
header('Cache-Control: no-store, no-cache, must-revalidate, max-age=0');
header('Pragma: no-cache');
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
?>
<!DOCTYPE html><!--  This site was created in Webflow. https://www.webflow.com  -->
<!--  Last Published: Wed Apr 19 2023 14:28:22 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="63b7df9ae5e96f625fc2bd49" data-wf-site="63807ab0318db8bd26b06087">
<head>
  <meta charset="utf-8">
  <title>Checkout - Lasfunding</title>
  <meta content="dashboard" property="og:title">
  <meta content="dashboard" property="twitter:title">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="Webflow" name="generator">
  <link href="../css/normalize.css" rel="stylesheet" type="text/css">
  <link href="../css/webflow.css" rel="stylesheet" type="text/css">
  <link href="../css/lasfunding.webflow.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
  <script type="text/javascript">WebFont.load({  google: {    families: ["Ubuntu:300,300italic,400,400italic,500,500italic,700,700italic","Exo:100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic","Poppins:100,200,300,regular,500,600,700,800,900,900italic"]  }});</script>
  <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
  <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
  <link href="../images/favicon.png" rel="shortcut icon" type="image/x-icon">
  <link href="../images/webclip.png" rel="apple-touch-icon"><!--  Memberstack webflow package  -->
  
  <style>    
a{background-color:transparent;}
a:active,a:hover{outline:0;}
input{color:inherit;font:inherit;margin:0;}
input{line-height:normal;}
input[type='checkbox'],input[type='radio']{box-sizing:border-box;padding:0;}

*{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;}
input.w-button {
  -webkit-appearance:button;
  display: flex;
  justify-content: center;
}
.w-form{margin:0 0 15px;}
.w-form-done{display:none;padding:20px;text-align:center;background-color:#dddddd;}
.w-form-fail{display:none;margin-top:10px;padding:10px;background-color:#ffdede;}
label{display:block;margin-bottom:5px;font-weight:bold;}
.w-form-label{display:inline-block;cursor:pointer;font-weight:normal;margin-bottom:0px;}
.w-radio{display:block;margin-bottom:5px;padding-left:20px;}
.w-radio:before,.w-radio:after{content:" ";display:table;grid-column-start:1;grid-row-start:1;grid-column-end:2;grid-row-end:2;}
.w-radio:after{clear:both;}
.w-radio-input{margin:4px 0 0;margin-top:1px \9;line-height:normal;float:left;margin-left:-20px;}
.w-radio-input{margin-top:3px;}
.w-col{position:relative;float:left;width:100%;min-height:1px;padding-left:10px;padding-right:10px;}
.w-col-6{width:50%;}
@media screen and (max-width: 767px){
.w-col{width:100%;left:auto;right:auto;}
}
@media screen and (max-width: 479px){
.w-col{width:100%;}
}

.w-checkbox{display:block;margin-bottom:5px;padding-left:20px;}
.w-checkbox::before{content:' ';display:table;-ms-grid-column-span:1;grid-column-end:2;-ms-grid-column:1;grid-column-start:1;-ms-grid-row-span:1;grid-row-end:2;-ms-grid-row:1;grid-row-start:1;}
.w-checkbox::after{content:' ';display:table;-ms-grid-column-span:1;grid-column-end:2;-ms-grid-column:1;grid-column-start:1;-ms-grid-row-span:1;grid-row-end:2;-ms-grid-row:1;grid-row-start:1;clear:both;}
.w-checkbox-input{float:left;margin-bottom:0px;margin-left:-20px;margin-right:0px;margin-top:4px;line-height:normal;}
.w-layout-grid{display:-ms-grid;display:grid;grid-auto-columns:1fr;-ms-grid-columns:1fr 1fr;grid-template-columns:1fr 1fr;-ms-grid-rows:auto auto;grid-template-rows:auto auto;grid-row-gap:16px;grid-column-gap:16px;}
.w-checkbox-input{float:left;margin-bottom:0px;margin-left:-20px;margin-right:0px;margin-top:4px;line-height:normal;}
label{display:block;margin-bottom:5px;font-weight:bold;}
.column-3{overflow:hidden;padding-top:20px;}
.text-block-19{margin-bottom:40px;font-size:18px;font-weight:500;}

.text-block-20{margin-top:40px;}
.product-section{padding-right:20px;padding-bottom:20px;padding-left:20px;border-radius:14px;box-shadow:0 0 7px -4px #000;}
.product-section.debit-card{padding-top:20px;}
.link-4{color:rgba(224, 72, 0, 0.88);text-decoration:none;}
.checkbox-field-2{margin-top:15px;}
.checkbox-field-3{margin-top:15px;}
.link-5{color:rgba(224, 72, 0, 0.88);text-decoration:none;}
.link-6{color:rgba(224, 72, 0, 0.88);text-decoration:none;}
.submit-button-2{ 
  width:100%;
  margin:32px auto 19px;
  border-radius:14px;
  background-color:rgba(224, 72, 0, 0.88);
  font-size:18px;
  text-align:center;
}
.form-3{display:flex;margin-top:40px;flex-direction:column;}
.form-3.right{margin-top:16px;}
.text-block-21{padding:20px;font-weight:500;}
.grid-2{padding-bottom:25px;-ms-grid-rows:auto auto;grid-template-rows:auto auto;border-bottom:1px solid rgba(0, 0, 0, 0.22);background-color:#f6f6f6;}
.text-block-23{padding:20px;font-weight:500;text-align:right;}
.text-block-25{padding-right:20px;font-size:13px;font-weight:500;text-align:right;}
.text-block-26{padding-right:20px;padding-left:20px;font-size:13px;line-height:16px;font-weight:300;}
.text-block-27{margin-top:0px;padding-top:0px;padding-bottom:0px;padding-left:20px;font-weight:500;}
.grid-3{margin-top:0px;padding-top:15px;padding-bottom:15px;-ms-grid-rows:auto;grid-template-rows:auto;border-bottom:1px solid rgba(0, 0, 0, 0.22);border-radius:0px;}
.text-block-28{padding-right:20px;font-weight:500;text-align:right;}
.debit-card-button-label{margin-bottom:0px;}
.debit-card-button{margin-bottom:-19px;}
.cryptocurrency-button{margin-bottom:-19px;}
.crypto-button-label{margin-bottom:0px;}
.paystack-button{margin-bottom:-19px;}
@media screen and (min-width: 1440px){
.column-3{margin-top:0px;padding-top:20px;}
.text-block-19{font-size:18px;font-weight:500;}

.text-block-20{margin-top:20px;}
.product-section{margin-top:20px;}
}
#w-node-dedc073b-f670-9dd3-3cce-03f745bf123e-5fc2bd49{-ms-grid-column:span 1;grid-column-start:span 1;-ms-grid-column-span:1;grid-column-end:span 1;-ms-grid-row:span 1;grid-row-start:span 1;-ms-grid-row-span:1;grid-row-end:span 1;}
#w-node-_941b8568-29f2-e069-6f16-77573a171079-5fc2bd49{-ms-grid-column:span 1;grid-column-start:span 1;-ms-grid-column-span:1;grid-column-end:span 1;-ms-grid-row:span 1;grid-row-start:span 1;-ms-grid-row-span:1;grid-row-end:span 1;}
#w-node-c3a894de-6b52-d137-2f16-f94372dbcb87-5fc2bd49{-ms-grid-column:span 1;grid-column-start:span 1;-ms-grid-column-span:1;grid-column-end:span 1;-ms-grid-row:span 1;grid-row-start:span 1;-ms-grid-row-span:1;grid-row-end:span 1;}
#w-node-_3dc2f941-9a91-ce1c-77c4-178de8f275f2-5fc2bd49{-ms-grid-column:span 1;grid-column-start:span 1;-ms-grid-column-span:1;grid-column-end:span 1;-ms-grid-row:span 1;grid-row-start:span 1;-ms-grid-row-span:1;grid-row-end:span 1;}
  </style>

  <style>
    .grid-2 {
      padding-bottom: 25px;
      -ms-grid-rows: auto auto;
      grid-template-rows: auto auto;
      border-bottom: 1px solid rgba(0, 0, 0, 0.22);
      background-color: #ffffff;
  }
  </style>
  <style>
    /* Default styles for the form element */
  form {
    /* Your default styles here */
    margin: "";
  }

  /* Media query for screens 994px and above */
  @media (min-width: 994px) {
    form {
      margin: 85px;
      /* Additional styles for screens 994px and above */
    }
  }
  .payment-option {
    margin: 29px 5px;
}
  </style> 

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

<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">

<link rel="stylesheet" href="../css/scrollbar.css">


</head>
<body style="background-color: #ffffff;">
  <div class="navbar-no-shadow wf-section">
    <div data-animation="default" data-collapse="medium" data-duration="400" data-easing="ease" data-easing2="ease" role="banner" class="navbar-no-shadow-container w-nav">
      <div class="container-regular">
        <div class="navbar-wrapper">
          <a href="#" class="navbar-brand w-nav-brand"><img src="../images/Lasfund-Logo.svg" loading="lazy" alt="" class="lasfunding-logo"></a><nav role="navigation" class="nav-menu-wrapper w-nav-menu" style="transform: translateY(0px) translateX(0px);">
            <ul role="list" class="nav-menu w-list-unstyled">            
              <li>
                <a href="./dashboard.php" class="nav-link-2">Dashboard</a>
              </li>
              <li>
                <a href="#FAQ" class="nav-link-2">FAQ</a>
              </li>
             
              <li class="mobile-margin-top-10">
                <div class="nav-button-wrapper">                  
                  <a href="./index.php" class="button-primary nav-bar w-button">Sign out</a>
                  <!-- <a href="#" class="w-inline-block">
                    <img src="../images/cart.svg" loading="lazy" alt="" class="image">
                  </a> -->
                </div>
              </li>
            </ul>
          </nav>
          
          <div class="menu-button w-nav-button" style="-webkit-user-select: text;" aria-label="menu" role="button" tabindex="0" aria-controls="w-nav-overlay-0" aria-haspopup="menu" aria-expanded="false">
            <div class="icon w-icon-nav-menu"></div>
          </div>
        </div>
      </div>
    <div class="w-nav-overlay" data-wf-ignore="" id="w-nav-overlay-0" style="display: none;"></div></div>
  </div>
  <form id="CreateOrderForm"  method="POST" >
    <div class="columns-3 w-row">
      <!-- <div class="column-3 w-col w-col-6">
        <div class="signup-form">
        <div class="text-block-19 link">User details</div>
          user detail
        </div>
      </div> -->
      <div class="">
        <div class="order-summary">
          <div class="text-block-19 link">Order Summary</div>
          <div class="product-section wf-section">
            <div class="w-layout-grid grid-2">
              <div class="text-block-21">Product</div>
              <div class="text-block-23">Subtotal</div>
              <div  class="text-block-26">$ <span id="starting-balance">10,000</span>  USD Account - Consistency Enabled Account (CEA)&nbsp;× 1</div>
              <div  class="text-block-25" id="setup-fee">$99.00</div>
            </div>
            <div class="w-layout-grid grid-3">
              <div class="text-block-27">Total</div>
              <div  class="text-block-28">$ <span id="total-fee"></span></div>
            </div>
          </div>
          <div class="product-section debit-card wf-section">
            <div class="payment-option">              
                <label class="debit-card-button w-radio">
                  <input type="radio" id="Card" name="payment-method" value="Card" data-name="Card" class="w-form-formradioinput w-radio-input" disabled>
                  <span class="debit-card-button-label w-form-label" for="Card">Credit / Debit Card</span></label>                              
            </div>
            <div class="payment-option">              
                <label class="debit-card-button w-radio">
                  <input type="radio" id="Bank-transfer" name="payment-method" value="Bank-transfer" data-name="Bank-transfer" class="w-form-formradioinput w-radio-input" required>
                  <span class="debit-card-button-label w-form-label" for="Bank-transfer">Bank Transfer</span></label>                              
            </div>
            <div class="payment-option">              
                <label class="cryptocurrency-button w-radio">
                  <input type="radio" id="Cryptocurrency" name="payment-method" value="Cryptocurrency" data-name="Cryptocurrency" class="w-form-formradioinput w-radio-input" disabled>
                  <span class="crypto-button-label w-form-label" for="Cryptocurrency">Cryptocurrency</span>
                </label>                             
            </div>
            <div class="payment-option">              
                <label class="paystack-button w-radio">
                <input type="radio" id="Paystack" name="payment-method" value="Paystack" data-name="Paystack" class="w-form-formradioinput w-radio-input" disabled>
                <span class="paystack-button-label w-form-label" for="Paystack">Paystack</span>
              </label>                          
            </div>
          </div>
        
          <div class="text-block-12">Additional Information</div>
              <input type="text" class="billing-input w-input" maxlength="256" name="Notes" data-name="Notes" placeholder="Additional Notes (Note about your order)" id="Notes">
          <div class="text-block-20" style="overflow: scroll;height: 85px;">Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our privacy policy.<br><br>
            By clicking "Place Order" to register with Lasfunding, you are agreeing that you understand terms and conditions, including the Risk Management, Consistency and other guidelines on 
            <a href="./index.php" class="link-4">Lasfunding.<br>‍</a><br>You accept that Lasfunding will not issue refund once service (i.e. trading) has started on your account.</div>
          <div class="billing-form w-form">
            
              <label class="w-checkbox checkbox-field-2">
                <input type="checkbox" id="Terms-and-Condition" name="Terms-and-Condition" data-name="Terms and Condition" required="" class="w-checkbox-input">
                <span class="w-form-label" for="Terms-and-Condition">I have read and accept the <a href="#" class="link-6">Terms</a> and <a href="#" class="link-5">Privacy policy</a></span>
              </label><label class="w-checkbox checkbox-field-3">
              <input type="checkbox" id="Order-verify" name="Order-verify" data-name="Order verify" required="" class="w-checkbox-input">
              <span class="w-form-label" for="Order-verify">I have verified my order</span></label>
            
              <button type="submit" id="submitBtn" value="Place Order..." data-wait="Please wait..." class="submit-button-2 w-button"> 
                Place Order
                <span class="mini-loader-container">
                  <svg id="mini-loader" class="mini-loader" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
                      <g>
                        <ellipse id="ellipse" cx="50" cy="50" rx="25" ry="25" />
                      </g>        
                  </svg>        
                </span>  
              </button>
                       
          </div>
        </div>
      </div>    
    </div>
  </form>
   
  <div id="success-signup" style="display: none;color: #e24603;background: gainsboro;padding: 10px;margin: 23px;">

  </div>

  <!-- <div class="rl_footer1_component">
    <div class="rl-padding-global">
      <div class="rl-container-large">
        <div class="rl-padding-section-medium">
          <div class="w-layout-grid rl_footer1_top-wrapper">
            <div class="rl_footer1_left-wrapper">
              <a href="#" class="rl_footer1_logo-link w-nav-brand"><img src="./images/Lasfund-Logo.svg" loading="lazy" alt="" class="rl_footer1_logo"></a>
              <div class="rl_footer1_spacing-block-1"></div>
              <div class="rl-text-style-regular">We are Nigeria&#x27;s 1st next-generational proprietary trading firm. Our aim is to scout for talented but undercapitalized Financial-asset Traders in Nigeria (lasfunding) and empower them. They trade with our funds, and we split the profit. It’s really a win-win! We want to see retail Traders succeed. Trade with peace of mind by trading with our money. Get rid of the fear of losing your money as well as the problems of trading a small account size.</div>
              <div class="rl_footer1_spacing-block-2"></div>
            </div>
            <div class="w-layout-grid rl_footer1_menu-wrapper">
              <div class="rl_footer1_link-list">
                <div class="rl_footer_column-text">Contact Us</div>
                <div class="rl_footer1_spacing-block-4"></div>
                <div class="footer-contact-wrapper"><img src="./images/Asset-1.svg" loading="lazy" alt="" class="image-3">
                  <a href="#" class="rl_footer1_link">Lagos, Nigeria</a>
                </div>
                <div class="footer-contact-wrapper"><img src="./images/Asset-1.svg" loading="lazy" alt="" class="image-3">
                  <a href="#" class="rl_footer1_link">+234 987 652 3210</a>
                </div>
                <div class="footer-contact-wrapper"><img src="./images/Asset-1.svg" loading="lazy" alt="" class="image-3">
                  <a href="#" class="rl_footer1_link">info@lasfunding.com</a>
                </div>
              </div>
              
            </div>
          </div>
          <div class="rl_footer1_line-divider"></div>
          <div class="rl_footer1_spacing-block-6"></div>
          <div class="rl_footer1_bottom-wrapper">
            <div class="rl_footer1_credit-text">© 2023 Lasfunding. All right reserved.</div>
            <div class="w-layout-grid rl_footer1_legal-list">
              <a href="#" class="rl_footer1_legal-link">Privacy Policy</a>
              <a href="#" class="rl_footer1_legal-link">Terms of Service</a>
              <a href="#" class="rl_footer1_legal-link">Cookies Settings</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> -->
  <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=63807ab0318db8bd26b06087" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="../js/webflow.js" type="text/javascript"></script>
  <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
  
  <script src="../backend/config/_service-worker.js"></script>
  <script src="../backend/config/toast.js"></script>
  <script src="../backend/user/getUserDetails.js"></script>
  
  
  <script>        
    function getQueryParam(name) {
      const urlSearchParams = new URLSearchParams(window.location.search);
      return urlSearchParams.get(name);
    }

    
    // Get the "account_type" query parameter from the URL
    const accountType = getQueryParam('account_type');

    // Check if the "account_type" parameter exists
    if (accountType !== null) {
      // Construct the endpoint URL path with the "account_type" value
      const endpointUrl = `${baseUrl}/check-account-type/${accountType}/`;
      var startingBalanceElement = document.querySelector('#starting-balance');      
      var setupFeeElement = document.querySelector('#setup-fee');
      var totalFeeElement = document.querySelector('#total-fee');

      // Make a request to the endpoint using fetch or any other AJAX method
      fetch(endpointUrl)
          .then(response => {
              if (response.ok) {
                  // Handle the successful response here
                  return response.json();
              } else {
                  // Handle errors here
                  console.error('Request failed with status:', response.status);
              }
          })
          .then(data => {
              // Handle the response data here
              console.log(data);
              fetchUserData(accountType, baseUrl)
              setupFeeElement.innerHTML = `$${data.setup_fee}`;
              startingBalanceElement.innerHTML = data.starting_balance
              totalFeeElement.innerHTML = data.setup_fee;
          })
          .catch(error => {
              // Handle network or other errors here
              console.error('Request error:', error);
          });
    } else {
      // Handle the case where the "account_type" parameter is missing
      console.error('Missing "account_type" query parameter in the URL');
    }

  </script>

<script>

  async function fetchUserData(accountType, baseUrl) {
    try {
      const userDetailsObj = await userDetails(accessToken, baseUrl);      
      console.log("userDetailsObj", userDetailsObj);      
      createOrder(accountType, baseUrl, userDetailsObj.id)
    } catch (error) {      
      console.error("An error occurred:", error);
    }
  }

  



 

 function createOrder(accountType, baseUrl, user_id){
  var createOrderForm = document.getElementById('CreateOrderForm');
  const miniLoaderContainer = document.querySelector('.mini-loader-container')
  const successSignup = document.querySelector("#success-signup");

  const submitBtn = document.querySelector("#submitBtn");
  
  createOrderForm.addEventListener('submit', function (event) {
    var paymentMethod = document.querySelector('input[name="payment-method"]:checked');
    miniLoaderContainer.style.display = 'flex';
    submitBtn.disabled = true;    

      event.preventDefault(); 

      // Collect data from form fields
      var formData = {
          "user": user_id,
          "notes": document.getElementById('Notes').value,

          "amount": accountType,
          "paymentMethod":  paymentMethod.value,  
          "currency" :  "NGN"
      };          
    
    var jsonData = JSON.stringify(formData);
    console.log(jsonData)
    
    fetch(`${baseUrl}/create_order/`, {
        method: 'POST',
        body: jsonData,
        headers: {
            'Content-Type': 'application/json',
            'Authorization': 'Bearer ' + accessToken
        }
    })
    .then(function (response) {
        if (response.ok) {
            // Handle success
            console.log('Data sent successfully', response);
            var notice = toastSuccessNotif(`Order ${response.statusText}`)
            miniLoaderContainer.style.display = 'none'
            submitBtn.disabled = true;
            //createOrderForm.style.display = "none";
            if (notice){
              window.location.href = './orders.php';
            }
                        
        } else {
            // Handle errors
            toastErrorNotif(`${response.statusText}`)
            console.log('Data could not be sent', response);
            miniLoaderContainer.style.display = 'none'
            submitBtn.disabled = false;
            //createOrderForm.style.display = "block";
            //successSignup.style.display = "none";
        }
    })
    .catch(function (error) {
        // Handle network or other errors
        console.error('Error:', error);
        //createOrderForm.style.display = "block";
        //successSignup.style.display = "none";
        miniLoaderContainer.style.display = 'none'
    });
});

 }
</script>

</body>
</html>