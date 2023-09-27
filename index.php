<!DOCTYPE html><!--  This site was created in Webflow. https://www.webflow.com  -->
<!--  Last Published: Wed May 03 2023 23:06:33 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="63b7df9ae5e96fa990c2bd44" data-wf-site="63807ab0318db8bd26b06087">
<head>
  <meta charset="utf-8">
  <title>Lasfunding</title>
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
<body class="body-7">
  <div style="display:none;opacity:0" class="modal-wrapper">
    <div style="opacity:0" class="form-container login w-container">
      <div class="form-block w-form">
        <div class="modal-header">
          <div class="form-header">Log in</div>
          <div data-w-id="c0277bb6-3121-4cad-bcc9-21686fabc09e" class="close-modal-button"><img src="images/Asset-4.svg" loading="lazy" alt=""></div>
        </div>
        <form id="email-form" name="email-form" data-name="Email Form" method="get" data-ms-form="login" class="form login">
          <input type="email" class="email-field w-input" maxlength="256" name="email" data-name="email" placeholder="Enter Email Address" id="email" data-ms-member="email" required />
          
          <div class="password-input-block login">
            <input type="password" class="password-field w-input" maxlength="256" name="Password" data-name="Password" placeholder="Enter Password" id="Password" data-ms-member="password" required />
            <!-- <div class="eye login">
              <img src="images/hide.png" loading="lazy" alt="" class="eye-icon">
            </div> -->
          </div>
          <div class="remember-me-section login"><label class="w-checkbox checkbox-field">
            <input type="checkbox" id="checkbox" name="checkbox" data-name="Checkbox" class="w-checkbox-input" required />
            <span class="checkbox-label w-form-label" for="checkbox">Remember me</span></label>
            <div class="forgot-password">
              <a href="forgot-password.php" class="forgot-pw-wrapper">Forgot Password?</a>
            </div>
          </div><input type="submit" value="Login" data-wait="Please wait..." class="submit-button w-button">
          <div class="text-block-15">Do not have an account? <a href="./register.php" data-w-id="ba5ec799-8a3d-8ac9-2bc8-5b0ed9ba9c57" class="link">Sign Up</a>
          </div>
        </form>

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
      </div>
    </div>

    <div style="display:none" class="form-container sign-up w-container">
      <div class="form-block w-form">
        <div class="modal-header">
          <div class="form-header">Sign Up</div>
          <div data-w-id="0177f809-8f7e-3012-38c3-e890edb9884c" class="close-modal-button"><img src="images/Asset-4.svg" loading="lazy" alt=""></div>
        </div>
        <form id="email-form" name="email-form" data-name="Email Form" method="get" data-ms-form="signup" class="form"><input type="text" class="email-field w-input" maxlength="256" name="First-Name" data-name="First Name" placeholder="Enter First Name" id="First-Name" data-ms-member="first-name" required=""><input type="text" class="email-field w-input" maxlength="256" name="Last-Name" data-name="Last Name" placeholder="Enter Last Name" id="Last-Name" data-ms-member="last-name" required=""><input type="email" class="email-field w-input" maxlength="256" name="Email" data-name="Email" placeholder="Enter Email Address" id="Email-2" data-ms-member="email" required="">
          <div class="password-input-block"><input type="password" class="password-field w-input" maxlength="256" name="Password" data-name="Password" placeholder="Enter Password" id="Password" data-ms-member="password" required="">
            <div class="eye"><img src="images/hide.png" loading="lazy" alt="" class="eye-icon"></div>
          </div>
          <div class="password-input-block"><input type="password" class="password-field w-input" maxlength="256" name="Password" data-name="Password" placeholder="Confirm Password" id="Password" required="">
            <div class="eye confirm"><img src="images/hide.png" loading="lazy" alt="" class="eye-icon"></div>
          </div><input type="tel" class="email-field w-input" maxlength="256" name="Phone-Number" data-name="Phone Number" placeholder="Enter Phone Number" id="Phone-Number" data-ms-member="phone-number" required="">
          <div class="remember-me-section"><label class="w-checkbox checkbox-field"><input type="checkbox" id="checkbox-2" name="checkbox-2" data-name="Checkbox 2" class="w-checkbox-input"><span class="checkbox-label w-form-label" for="checkbox-2">I have read and accept the Terms and Privacy policy</span></label></div><input type="submit" value="Sign Up" data-wait="Please wait..." class="submit-button w-button">
          <div class="text-block-15">You have an account? <a href="#" data-w-id="0177f809-8f7e-3012-38c3-e890edb98861" class="link login">Login</a>
          </div>
        </form>
        <div class="w-form-done">
          <div>Thank you! Your submission has been received!</div>
        </div>
        <div class="w-form-fail">
          <div>Oops! Something went wrong while submitting the form.</div>
        </div>
      </div>
    </div>
  </div>
  <div class="navbar-no-shadow wf-section">
    <div data-animation="default" data-collapse="medium" data-duration="400" data-easing="ease" data-easing2="ease" role="banner" class="navbar-no-shadow-container w-nav">
      <div class="container-regular">
        <div class="navbar-wrapper">
          <a href="#" class="navbar-brand w-nav-brand"><img src="images/Lasfund-Logo.svg" loading="lazy" alt="" class="lasfunding-logo"></a>
          <nav role="navigation" class="nav-menu-wrapper w-nav-menu">
            <ul role="list" class="nav-menu w-list-unstyled">
              <li>
                <a href="#How-It-Works" class="nav-link-2 how-it-works">How it works</a>
              </li>
              <li>
                <a href="#Programs" class="nav-link-2">Programs</a>
              </li>
              <li>
                <a href="#FAQ" class="nav-link-2">FAQ</a>
              </li>
              <li>
                <a href="contact.php" class="nav-link-2">Contact</a>
              </li>
              <li class="mobile-margin-top-10">
                <div class="nav-button-wrapper">
                  <a data-w-id="39763524-28b0-34c5-f0e4-c2a338dcd4f5" href="#" class="nav-link-2 sign-in login">Sign In</a>
                  <a href="register.php" class="button-primary nav-bar w-button">Join Now</a>
                  <a href="#" class="w-inline-block"><img src="images/cart.svg" loading="lazy" alt="" class="image"></a>
                </div>
              </li>
            </ul>
          </nav>
          <div class="menu-button w-nav-button">
            <div class="icon w-icon-nav-menu"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <section class="hero-heading-left wf-section"><img src="images/Upperleft.svg" loading="lazy" width="80" data-w-id="c629b89c-2c82-5b4e-7fd4-0fd0e6a1b53c" alt="" class="eclipse-3"><img src="images/Upperleft.svg" loading="lazy" width="123" data-w-id="da3b9033-5f30-6b84-7e66-7500a170391d" alt="" class="eclipse-1"><img src="images/Upperleft.svg" loading="lazy" width="324" data-w-id="eccca136-5531-af90-967e-95fdbfc55713" alt="" class="eclipse-2">
    <div class="hero-container">
      <div class="hero-wrapper">
        <h1 class="heading">Your <span>strategy</span>, <br>Your way and we <br>take the risks</h1>
        <p class="margin-bottom-24px">Trade up to $50,000 of our company&#x27;s capital and get paid up to 80% of <br>the profit weekly or monthly. No challenges. No risk for you, we take the losses. <br>Join the team of our successful Traders now.</p>
        <div class="hero-buttons">
          <a href="register.php" class="button-primary hero-btn w-button">Start Trading</a>
          <a data-w-id="c17572d0-cd7a-bcef-110c-67d508e0fe86" href="#" class="button-primary transparent login w-button">Log In</a>
        </div>
      </div>
      <div class="hero-wrapper mobile">
        <div class="hero-split">
          <h1 class="heading">Your <span>strategy</span>, your way and we take the risks</h1>
          <p class="margin-bottom-24px">Trade up to $100,000 of our company&#x27;s capital and get paid up to 80% of the profit weekly or monthly. No challenges. No risk for you, Join the our community as we celebrate our Traders.</p>
          <div class="hero-split"><img src="images/Analyzer.svg" loading="lazy" width="509" alt="" class="shadow-two">
            <div class="hero-buttons">
              <a href="#" class="button-primary hero-btn w-button">Start Trading</a>
              <a data-w-id="f50952c8-34a6-6ca7-cabb-1acbfe062267" href="#" class="button-primary transparent w-button">Log In</a>
            </div>
          </div>
        </div>
      </div>
      <div class="features">
        <div class="pricing-grid">
          <div id="w-node-f6a0b02e-c6d8-f8e1-a999-218011fabfab-90c2bd44" class="feature-card-three"><img src="images/statistic-1.svg" loading="lazy" alt="" class="feature-image">
            <h3 class="heading-2">No Challenges</h3>
            <p class="pricing-card-text">We believe you have what it takes to be successful. Sign up, choose an account size, and start trading to earn as soon as a week.</p>
          </div>
          <div id="w-node-f6a0b02e-c6d8-f8e1-a999-218011fabfb5-90c2bd44" class="feature-card-three"><img src="images/shield.svg" loading="lazy" alt="" class="feature-image">
            <h3 class="heading-3">One-time Fee</h3>
            <p class="pricing-card-text">No monthly charges or other hidden fees. What’s more, will be reimbursed to you once you become our AsoRock AccountTM Trader.</p>
          </div>
          <div id="w-node-f6a0b02e-c6d8-f8e1-a999-218011fabfbf-90c2bd44" class="feature-card-three"><img src="images/briefcase.svg" loading="lazy" alt="" class="feature-image">
            <h3 class="heading-4">Fast Payout</h3>
            <p class="pricing-card-text">Fast payout systems allow you to get paid promptly and consistently. Receive payments monthly or weekly!</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="account-table wf-section">
    <div class="trading-table-container w-container">
      <div class="div-block-8">
        <h2 class="heading-5">Get The Account Size <br>Required To Become A Successful Trader</h2>
        <a id="w-node-_1c2d59a8-fd6d-ebeb-a7a4-8d7fecb13dc5-90c2bd44" data-w-id="1c2d59a8-fd6d-ebeb-a7a4-8d7fecb13dc5" href="#" class="button-primary trade w-button">Trade</a>
      </div>
      <div class="trading-table-wrapper">
        <div class="trading-table-title">
          <div class="text-block-10">Trading using your own money</div>
          <div class="text-block-11">Trading using our funded accounts</div>
        </div>
        <div class="trade-features">
          <div class="w-layout-grid grid">
            <div id="w-node-c91ff248-1fe8-499d-ef6c-528be4e7c3ff-90c2bd44" class="text-block">Lower Risk</div>
            <div id="w-node-_2d903f96-f943-032e-f1b2-09405ea9df59-90c2bd44" class="text-block-4">You risk losing your money</div>
            <div id="w-node-_05bed23f-cd25-5b21-abad-ba64f67c54bf-90c2bd44" class="text-block-9">We cover the <br>losses</div>
            <div id="w-node-ae92bfc2-15be-8020-6c5d-5df3b796da9d-90c2bd44" class="text-block-2">Higher Returns</div>
            <div id="w-node-_68a4f06c-c021-b6ef-97b9-c23d6ac84673-90c2bd44" class="text-block-5">You get little returns</div>
            <div id="w-node-_14cb2036-5f24-46b9-0eed-a4b0acc790c2-90c2bd44" class="text-block-8">You earn 50x in returns</div>
            <div id="w-node-bdeb3c95-2bc6-5053-d37b-bba584cf6114-90c2bd44" class="text-block-3">World-Class Support</div>
            <div id="w-node-_65dd89e3-01e1-b3db-02e9-c1e9982b681a-90c2bd44" class="text-block-6">Trade alone; limited growth</div>
            <div id="w-node-_8e61ced6-7ce0-f3db-5b41-6e0c9b75f75a-90c2bd44" class="text-block-7">Trade with the support of experts</div>
          </div>
        </div>
      </div>
    </div><img src="images/Upperleft-1.svg" loading="lazy" width="64" alt="" class="eclipse-6"><img src="images/Upperleft-1.svg" loading="lazy" alt="" class="eclipse-5"><img src="images/Upperleft-2.svg" loading="lazy" alt="" class="image-7">
  </div>
  <div class="trading-table-container mobile w-container">
    <h2 class="heading-5">Get The Account Size Required To Become A Successful Trader</h2>
    <div class="trading-table-wrapper">
      <div class="trading-table-title">
        <div class="text-block-10">Trading using your <br>own money</div>
        <div class="text-block-11">Trading using our <br>funded accounts</div>
      </div>
      <div class="trade-features">
        <div class="w-layout-grid grid">
          <div id="w-node-_84a84e53-7125-b015-d5b9-32f8ae6a1b11-90c2bd44" class="text-block">Lower Risk</div>
          <div id="w-node-_84a84e53-7125-b015-d5b9-32f8ae6a1b13-90c2bd44" class="text-block-4">You risk losing your money</div>
          <div id="w-node-_84a84e53-7125-b015-d5b9-32f8ae6a1b15-90c2bd44" class="text-block-9">We cover the losses</div>
          <div id="w-node-_84a84e53-7125-b015-d5b9-32f8ae6a1b19-90c2bd44" class="text-block-2">Higher Returns</div>
          <div id="w-node-_84a84e53-7125-b015-d5b9-32f8ae6a1b1b-90c2bd44" class="text-block-5">You get little returns</div>
          <div id="w-node-_84a84e53-7125-b015-d5b9-32f8ae6a1b1d-90c2bd44" class="text-block-8">You earn 50x in returns</div>
          <div id="w-node-_84a84e53-7125-b015-d5b9-32f8ae6a1b21-90c2bd44" class="text-block-3">World-Class Support</div>
          <div id="w-node-_84a84e53-7125-b015-d5b9-32f8ae6a1b23-90c2bd44" class="text-block-6">Trade alone; limited growth</div>
          <div id="w-node-_84a84e53-7125-b015-d5b9-32f8ae6a1b25-90c2bd44" class="text-block-7">Trade with the support of experts</div>
          <a id="w-node-_84a84e53-7125-b015-d5b9-32f8ae6a1b17-90c2bd44" href="#" class="button-primary trade w-button">Trade</a>
          <a id="w-node-_84a84e53-7125-b015-d5b9-32f8ae6a1b1f-90c2bd44" href="#" class="button-primary trade w-button">Trade</a>
          <a id="w-node-_84a84e53-7125-b015-d5b9-32f8ae6a1b27-90c2bd44" href="#" class="button-primary trade w-button">Trade</a>
        </div>
      </div>
    </div>
  </div>

  

  <section id="Programs" class="trade-section wf-section">
    <div class="container-7">
      <h2 class="centered-heading-3">Sign Up to Start Trading Using Our Funds</h2>
      <p style="text-align:center;">How much fund do you want in your account?</p>

      <br><br><br>
    </div>

    <style>

        .account-type-container{                
        margin: 0 auto;                                           
        }
        
        
        table{
        margin: 0 auto;
        border-collapse: collapse;        
        width: 100%;        
        }
        
        td, th {
        padding-left: 20px;
        padding-right: 95px;
        padding-bottom: 20px;
        padding-top: 20px;
        border: 1px solid #0000002e;
        border-right: none;
        border-left: none;                
        }

        
        thead {
        background-color: black;
        color: white;
        } 

    
        tr th:nth-child(2),
        tr th:nth-child(4),
        tr td:nth-child(2),
        tr td:nth-child(4),
        tr:first-child td {
            background-color: #80808059;
        }

        
        tr th:not(:nth-child(2)):not(:nth-child(4)),
        tr td:not(:nth-child(2)):not(:nth-child(4)),
        tr:first-child th {
            background-color: transparent;
        }

            /* Make the first account-type-column in the tbody red */

    tbody tr td:first-child {
        color: red;
        
    }
    </style>
    <style>           
        .table-switcher {
        
        }       
        .row {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            width: 100%;
        }
        
        .account-type-column {
            display: flex;
            flex-direction: account-type-column;
            flex-basis: 100%;
            flex: 1
        }
        
        .account-type-column-account-type-column {            
            height: 100px;
            padding: 10px;
        }                              
        
    </style>
    <style>
        .a-btn.transparent {
            color: rgba(224, 72, 0, .88);
            background-color: rgba(0, 0, 0, 0);
            border: 1px solid rgba(224, 72, 0, .88);
            /* padding-left: 45px; */
            /* padding-right: 45px; */
            /* font-size: 16px; */
            font-weight: 600;
        }
        
        .a-btn {
            color: #fff;
            text-align: center;
            /* letter-spacing: 2px; */
            /* text-transform: none; */
            background-color: rgba(224, 72, 0, .88);
            border-radius: 20px;
            /* margin-top: 30px; */
            /* margin-right: 0; */
            padding: 5px 24px;
            font-size: 12px;
            line-height: 20px;
            text-decoration: none;
            transition: all .2s;
        }
        .mb-2 {
            margin-bottom: 20px;
        }
    </style>
    <div class="account-type-container">      
        <div class='table-switcher'>
            <div class='row'>
              <div class='account-type-column'>
                <div class='account-type-column-account-type-column'>
                  <div class="mb-2">Course Format:</div> 
                  <div><a href="#" class="a-btn hero-btn">Online</a></div>                
                </div>
              </div>
              <div class='account-type-column'>
                <div class='account-type-column-account-type-column'>                
                    <div class="mb-2">Starting balance:</div>
                    <style>
                      .start-balance {
                        display: flex;
                        align-content: stretch;
                        flex-wrap: wrap;
                        flex-direction: row;
                    }
                    </style>
                    <div class="start-balance">
                      <a href="#" class="a-btn transparent  ">$5,000</a>                                            
                      <a href="#" class="a-btn transparent  ">$10,000</a>
                      <a href="#" class="a-btn transparent  ">$25,000</a>
                </div>                        
                  </div>
              </div>
              <div class='account-type-column'>
                <div class='account-type-column-account-type-column'>
                    <div class="mb-2">Set-Up Fee </div>
                    <div>Starting Monthly Fee</div>
                  </div>
              </div>
              <div class='account-type-column'>
                <div class='account-type-column-account-type-column'>                
                    <div class="link mb-2">$100.99 (+VAT)</div>                
                    <div class="link">$100.99 (+VAT)</div>
                  </div>
              </div>
              <div class='account-type-column'>
                <div class='account-type-column-account-type-column'>
                    <div class="mb-2">Get Funded for <span class="link">$25,000</span></div>
                    <div><a href="#" class="a-btn hero-btn ">Buy Now</a></div>
                </div>
              </div>
            </div>
        </div>  
        <div style="overflow-x: auto;margin: 15px;">
          <table>
              <thead>
              <tr>
                  <th></th>
                  <th>Step 1</th>
                  <th>Step 2</th>
                  <th>Step 3</th>
                  <th>Step 4</th>            
              <tr>  
              </thead>
              <tbody>
              <tr>
                  <td>Balance</td>
                  <td>$25,000</td>
                  <td>$50,000</td>
                  <td>$75,000</td>
                  <td>$100,000</td>
              </tr>

              <tr>
                  <td>Profit Target</td>
                  <td>8% ($1600)</td>
                  <td>8% ($4000)</td>
                  <td>8% ($6000)</td>
                  <td>8% ($8000)</td>            
              </tr>

              <tr>
                  <td>Profit share</td>
                  <td>70:30</td>
                  <td>70:30</td>
                  <td>70:30</td>
                  <td>70:30</td>            
              </tr>

              <tr>
                  <td>Next Step Target</td>
                  <td>1 Withdrawal</td>
                  <td>2 Withdrawal</td>
                  <td>2 Withdrawal</td>
                  <td>2 Withdrawal</td>            
              </tr>

              <tr>
                  <td>Account Fee</td>
                  <td>$209.99, <br> if target not met</td>
                  <td>$209.99, <br> if target not met</td>
                  <td>$209.99, <br> if target not met</td>
                  <td>$209.99, <br> if target not met</td>
              </tr>
              
              </tbody>               
          </table>
        </div>                
    </div>   
    <div style="text-align: center;">
    <a href="#" class="button-primary hero-btn w-button">Find out about online program</a>
  </div>
  </section>


  <section id="How-It-Works" class="how-it-works-section wf-section">
    <div class="container-4">
      <h2 class="centered-heading-2">How It Works?</h2>
      <div class="pricing-grid-2">
        <div id="w-node-f3378ff8-bf84-a8c6-0e73-4285a705cf26-90c2bd44" class="how-it-works-ft">
          <div class="text-block-13">1</div>
          <div class="div-block">
            <h3 class="heading-8">Verification</h3>
            <p class="pricing-card-text-2">We provide three account sizes for Traders to start with: $5,000, $10,000, $25,000, $50,000 and $100,000.  Choose your account size, select a broker, and you’ll receive login details within 24 hours of purchase! This is the account you’ll begin trading.</p>
          </div>
          <a href="register.php" class="text-link-arrow-2 first w-inline-block">
            <div class="text-block-29">Learn more</div>
            <div class="arrow-embed-2 w-embed"><svg width="12" height="12" viewbox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M11.72 15L16.3472 10.357C16.7732 9.92932 16.7732 9.23603 16.3472 8.80962L11.72 4.16667L10.1776 5.71508L12.9425 8.4889H4.16669V10.6774H12.9425L10.1776 13.4522L11.72 15Z" fill="currentColor"></path>
              </svg></div>
          </a>
        </div>
        <div id="w-node-_5215f367-6e96-9b34-b760-fad0df758da9-90c2bd44" class="how-it-works-ft">
          <div class="text-block-13">2</div>
          <div class="div-block">
            <h3 class="heading-6">Start trading</h3>
            <p class="pricing-card-text-2">Start your trading journey with us today and take advantage of the many opportunites we offer for the forex market. Open an account now and begin your path to financial success.</p>
          </div>
          <a href="register.php" class="text-link-arrow-2 middle w-inline-block">
            <div class="text-block-30">Learn more</div>
            <div class="arrow-embed-2 w-embed"><svg width="12" height="12" viewbox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M11.72 15L16.3472 10.357C16.7732 9.92932 16.7732 9.23603 16.3472 8.80962L11.72 4.16667L10.1776 5.71508L12.9425 8.4889H4.16669V10.6774H12.9425L10.1776 13.4522L11.72 15Z" fill="currentColor"></path>
              </svg></div>
          </a>
        </div>
        <div id="w-node-_9c508c96-f719-5699-ae01-bb6f398debd8-90c2bd44" class="how-it-works-ft">
          <div class="text-block-13">3</div>
          <div class="div-block">
            <h3 class="heading-7">Get Paid</h3>
            <p class="pricing-card-text-2">Our website offers a range of resources to help you get started, including educational, materials, market analysis and a trading platform. <br>Don&#x27;t wait any longer to take control of your financial future. Sign up and start earning the income you deserve</p>
          </div>
          <a href="register.php" class="text-link-arrow-2 third w-inline-block">
            <div class="text-block-31">Learn more</div>
            <div class="arrow-embed-2 w-embed"><svg width="12" height="12" viewbox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M11.72 15L16.3472 10.357C16.7732 9.92932 16.7732 9.23603 16.3472 8.80962L11.72 4.16667L10.1776 5.71508L12.9425 8.4889H4.16669V10.6774H12.9425L10.1776 13.4522L11.72 15Z" fill="currentColor"></path>
              </svg></div>
          </a>
        </div>
      </div>
    </div>
  </section>
  <!-- <section id="Programs" class="trade-section wf-section">
    <div class="container-7">
      <h2 class="centered-heading-4">Sign Up to Start Trading Using Our Funds</h2>
    </div>
    <div class="w-layout-grid account-type-grid">
      <div id="w-node-_2f92368a-363e-d862-fc78-7f9efd43936b-90c2bd44" class="amount-wrapper">
        <div class="amount-header">
          <div class="text-header-amount">
            <div class="text-block-32">Account type</div>
            <div class="text-block-33">$5,000</div>
          </div>
          <div class="amount-img"><img src="images/Component-279-5.svg" loading="lazy" width="60" alt="" class="amount-image"></div>
        </div>
        <div class="amount-info-wrapper"><img src="images/Vector-1332.svg" loading="lazy" alt="">
          <div class="text-block-35">Evaluation Up to 80% profit split + 100% refund for first withdrawal</div>
        </div>
        <div class="amount-info-wrapper"><img src="images/Vector-1332.svg" loading="lazy" alt="">
          <div class="text-block-35">Phase 1 Minimum of 0 trading day</div>
        </div>
        <div class="amount-info-wrapper"><img src="images/Vector-1332.svg" loading="lazy" alt="">
          <div class="text-block-35">8% profits target</div>
        </div>
        <div class="amount-info-wrapper"><img src="images/Vector-1332.svg" loading="lazy" alt="">
          <div class="text-block-35">5% daily drawdown</div>
        </div>
        <div class="amount-info-wrapper"><img src="images/Vector-1332.svg" loading="lazy" alt="">
          <div class="text-block-35">30 days of trading</div>
        </div>
        <div class="amount-info-wrapper"><img src="images/Vector-1332.svg" loading="lazy" alt="">
          <div class="text-block-35">12% overall drawdown</div>
        </div>
        <div class="button-wrappers">
          <a href="register.php" class="button-primary transparent learn-more w-button">Learn More</a>
          <a href="register.php" class="button-primary learn-more start-now w-button">Start Now</a>
        </div>
      </div>
      <div id="w-node-_21d67ee8-ba71-64ae-cc6e-db2215cbb771-90c2bd44" class="amount-wrapper">
        <div class="amount-header">
          <div class="text-header-amount">
            <div class="text-block-32">Account type</div>
            <div class="text-block-33">$10,000</div>
          </div>
          <div class="amount-img"><img src="images/Component-279-6.svg" loading="lazy" alt="" class="amount-image"></div>
        </div>
        <div class="amount-info-wrapper"><img src="images/Vector-1332.svg" loading="lazy" alt="">
          <div class="text-block-35">Evaluation Up to 80% profit split + 100% refund for first withdrawal</div>
        </div>
        <div class="amount-info-wrapper"><img src="images/Vector-1332.svg" loading="lazy" alt="">
          <div class="text-block-35">Phase 1 Minimum of 0 trading day</div>
        </div>
        <div class="amount-info-wrapper"><img src="images/Vector-1332.svg" loading="lazy" alt="">
          <div class="text-block-35">8% profits target</div>
        </div>
        <div class="amount-info-wrapper"><img src="images/Vector-1332.svg" loading="lazy" alt="">
          <div class="text-block-35">5% daily drawdown</div>
        </div>
        <div class="amount-info-wrapper"><img src="images/Vector-1332.svg" loading="lazy" alt="">
          <div class="text-block-35">30 days of trading</div>
        </div>
        <div class="amount-info-wrapper"><img src="images/Vector-1332.svg" loading="lazy" alt="">
          <div class="text-block-35">12% overall drawdown</div>
        </div>
        <div class="button-wrappers">
          <a href="register.php" class="button-primary transparent learn-more w-button">Learn More</a>
          <a href="register.php" class="button-primary learn-more start-now w-button">Start Now</a>
        </div>
      </div>
      <div id="w-node-a34533dc-4261-0a9b-b0bc-7baca405b8da-90c2bd44" class="amount-wrapper">
        <div class="amount-header">
          <div class="text-header-amount">
            <div class="text-block-32">Account type</div>
            <div class="text-block-33">$25,000</div>
          </div>
          <div class="amount-img"><img src="images/Component-279-7.svg" loading="lazy" width="59" alt="" class="amount-image"></div>
        </div>
        <div class="amount-info-wrapper"><img src="images/Vector-1332.svg" loading="lazy" alt="">
          <div class="text-block-35">Evaluation Up to 80% profit split + 100% refund for first withdrawal</div>
        </div>
        <div class="amount-info-wrapper"><img src="images/Vector-1332.svg" loading="lazy" alt="">
          <div class="text-block-35">Phase 1 Minimum of 0 trading day</div>
        </div>
        <div class="amount-info-wrapper"><img src="images/Vector-1332.svg" loading="lazy" alt="">
          <div class="text-block-35">8% profits target</div>
        </div>
        <div class="amount-info-wrapper"><img src="images/Vector-1332.svg" loading="lazy" alt="">
          <div class="text-block-35">5% daily drawdown</div>
        </div>
        <div class="amount-info-wrapper"><img src="images/Vector-1332.svg" loading="lazy" alt="">
          <div class="text-block-35">30 days of trading</div>
        </div>
        <div class="amount-info-wrapper"><img src="images/Vector-1332.svg" loading="lazy" alt="">
          <div class="text-block-35">12% overall drawdown</div>
        </div>
        <div class="button-wrappers">
          <a href="register.php" class="button-primary transparent learn-more w-button">Learn More</a>
          <a href="register.php" class="button-primary learn-more start-now w-button">Start Now</a>
        </div>
      </div>
      <div id="w-node-ac53e3b3-1c48-548d-d9c6-74f87a4e2f4d-90c2bd44" class="amount-wrapper">
        <div class="amount-header">
          <div class="text-header-amount">
            <div class="text-block-32">Account type</div>
            <div class="text-block-33">$50,000</div>
          </div>
          <div class="amount-img"><img src="images/Component-279-8.svg" loading="lazy" width="60" alt="" class="amount-image"></div>
        </div>
        <div class="amount-info-wrapper"><img src="images/Vector-1332.svg" loading="lazy" alt="">
          <div class="text-block-35">Evaluation Up to 80% profit split + 100% refund for first withdrawal</div>
        </div>
        <div class="amount-info-wrapper"><img src="images/Vector-1332.svg" loading="lazy" alt="">
          <div class="text-block-35">Phase 1 Minimum of 0 trading day</div>
        </div>
        <div class="amount-info-wrapper"><img src="images/Vector-1332.svg" loading="lazy" alt="">
          <div class="text-block-35">8% profits target</div>
        </div>
        <div class="amount-info-wrapper"><img src="images/Vector-1332.svg" loading="lazy" alt="">
          <div class="text-block-35">5% daily drawdown</div>
        </div>
        <div class="amount-info-wrapper"><img src="images/Vector-1332.svg" loading="lazy" alt="">
          <div class="text-block-35">30 days of trading</div>
        </div>
        <div class="amount-info-wrapper"><img src="images/Vector-1332.svg" loading="lazy" alt="">
          <div class="text-block-35">12% overall drawdown</div>
        </div>
        <div class="button-wrappers">
          <a href="register.php" class="button-primary transparent learn-more w-button">Learn More</a>
          <a href="register.php" class="button-primary learn-more start-now w-button">Start Now</a>
        </div>
      </div>
      <div id="w-node-ac53e3b3-1c48-548d-d9c6-74f87a4e2f6b-90c2bd44" class="amount-wrapper">
        <div class="amount-header">
          <div class="text-header-amount">
            <div class="text-block-32">Account type</div>
            <div class="text-block-33">$100,000</div>
          </div>
          <div class="amount-img"><img src="images/Component-279-9.svg" loading="lazy" alt="" class="amount-image"></div>
        </div>
        <div class="amount-info-wrapper"><img src="images/Vector-1332.svg" loading="lazy" alt="">
          <div class="text-block-35">Evaluation Up to 80% profit split + 100% refund for first withdrawal</div>
        </div>
        <div class="amount-info-wrapper"><img src="images/Vector-1332.svg" loading="lazy" alt="">
          <div class="text-block-35">Phase 1 Minimum of 0 trading day</div>
        </div>
        <div class="amount-info-wrapper"><img src="images/Vector-1332.svg" loading="lazy" alt="">
          <div class="text-block-35">8% profits target</div>
        </div>
        <div class="amount-info-wrapper"><img src="images/Vector-1332.svg" loading="lazy" alt="">
          <div class="text-block-35">5% daily drawdown</div>
        </div>
        <div class="amount-info-wrapper"><img src="images/Vector-1332.svg" loading="lazy" alt="">
          <div class="text-block-35">30 days of trading</div>
        </div>
        <div class="amount-info-wrapper"><img src="images/Vector-1332.svg" loading="lazy" alt="">
          <div class="text-block-35">12% overall drawdown</div>
        </div>
        <div class="button-wrappers">
          <a href="register.php" class="button-primary transparent learn-more w-button">Learn More</a>
          <a href="register.php" class="button-primary learn-more start-now w-button">Start Now</a>
        </div>
      </div>
      <div id="w-node-ac53e3b3-1c48-548d-d9c6-74f87a4e2f89-90c2bd44" class="amount-wrapper">
        <div class="amount-header">
          <div class="text-header-amount">
            <div class="text-block-32">Account type</div>
            <div class="text-block-33">$200,000</div>
          </div>
          <div class="amount-img"><img src="images/Component-279-10.svg" loading="lazy" width="59" alt="" class="amount-image"></div>
        </div>
        <div class="amount-info-wrapper"><img src="images/Vector-1332.svg" loading="lazy" alt="">
          <div class="text-block-35">Evaluation Up to 80% profit split + 100% refund for first withdrawal</div>
        </div>
        <div class="amount-info-wrapper"><img src="images/Vector-1332.svg" loading="lazy" alt="">
          <div class="text-block-35">Phase 1 Minimum of 0 trading day</div>
        </div>
        <div class="amount-info-wrapper"><img src="images/Vector-1332.svg" loading="lazy" alt="">
          <div class="text-block-35">8% profits target</div>
        </div>
        <div class="amount-info-wrapper"><img src="images/Vector-1332.svg" loading="lazy" alt="">
          <div class="text-block-35">5% daily drawdown</div>
        </div>
        <div class="amount-info-wrapper"><img src="images/Vector-1332.svg" loading="lazy" alt="">
          <div class="text-block-35">30 days of trading</div>
        </div>
        <div class="amount-info-wrapper"><img src="images/Vector-1332.svg" loading="lazy" alt="">
          <div class="text-block-35">12% overall drawdown</div>
        </div>
        <div class="button-wrappers">
          <a href="register.php" class="button-primary transparent learn-more w-button">Learn More</a>
          <a href="register.php" class="button-primary learn-more start-now w-button">Start Now</a>
        </div>
      </div>
    </div>
   
  </section> -->
  <section class="testimonial-slider-small wf-section">
    <div class="container-6">
      <h2 class="centered-heading-3">Feedback From Our Traders</h2>
      <div data-delay="4000" data-animation="slide" class="testimonial-slider w-slider" data-autoplay="false" data-easing="ease" data-hide-arrows="true" data-disable-swipe="false" data-autoplay-limit="0" data-nav-spacing="3" data-duration="500" data-infinite="true">
        <div class="w-slider-mask">
          <div class="testimonial-slide-wrapper w-slide">
            <div class="testimonial-card">
              <p class="paragraph">Lasfunding&#x27;s platform  is user-friendly, reliable, and offers a wide range of technical and fundamental analysis tools. They also offer real-time market data, fast execution speeds, and the ability to place orders directly from the charts.</p>
              <div class="testimonial-info">
                <div>
                  <h3 class="testimonial-author">Afolabi Mercy</h3>
                  <div class="tagline">Lagos, Nigeria</div>
                </div>
                <div class="testimonial-icon-wrapper"><img src="images/“.svg" loading="lazy" alt=""></div>
              </div>
            </div>
          </div>
          <div class="testimonial-slide-wrapper w-slide">
            <div class="testimonial-card">
              <p class="paragraph-3">Forex traders may evaluate a broker based on several factors such as the speed and reliability of trade execution but at Lasfunding it was swift and very reliable. Their services are top-notch.</p>
              <div class="testimonial-info">
                <div>
                  <h3 class="testimonial-author">Obinna Ezeama</h3>
                  <div class="tagline">Abuja, Nigeria</div>
                </div>
                <div class="testimonial-icon-wrapper"><img src="images/“.svg" loading="lazy" alt=""></div>
              </div>
            </div>
          </div>
          <div class="testimonial-slide-wrapper w-slide">
            <div class="testimonial-card">
              <p>Lasfunding&#x27;s platform  is user-friendly, reliable, and offers a wide range of technical and fundamental analysis tools. They also offer real-time market data, fast execution speeds, and the ability to place orders directly from the charts.</p>
              <div class="testimonial-info">
                <div>
                  <h3 class="testimonial-author">Joseph Emmanuel</h3>
                  <div class="tagline">Abuja, Nigeria</div>
                </div>
                <div class="testimonial-icon-wrapper"><img src="images/“.svg" loading="lazy" alt=""></div>
              </div>
            </div>
          </div>
        </div>
        <div class="testimonial-slider-left w-slider-arrow-left">
          <div class="arrow-wrapper"><img src="images/Frame-6689.svg" loading="lazy" alt="" class="slider-arrow-embed"></div>
        </div>
        <div class="testimonial-slider-right w-slider-arrow-right">
          <div class="arrow-wrapper"><img src="images/Frame-6688.svg" loading="lazy" alt="" class="slider-arrow-embed"></div>
        </div>
        <div class="testimonial-slide-nav w-slider-nav w-round"></div>
      </div>
    </div>
  </section>
  <section id="FAQ" class="rl_section_faq1-2">
    <div class="rl-padding-global-2">
      <div class="rl-container-small-2">
        <div class="rl-padding-section-large-2">
          <div class="rl_faq1_component-2">
            <div class="rl_faq1_heading-wrapper-2">
              <h2 class="rl-heading-style-h2-2">Frequently Asked Questions</h2>
            </div>
            <div class="rl_faq1_list-2">
              <div class="rl_faq1_accordion-2">
                <div data-w-id="69375eff-9d0c-2cd3-dca5-e9c7e53b6ff7" class="rl_faq1_question-2">
                  <div class="rl_faq1_question-text-2">How many accounts can I have?</div>
                  <div class="rl_faq1_icon-wrapper-2">
                    <div class="rl_faq1_icon-2 w-embed"><svg width=" 100%" height=" 100%" viewbox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M16.5303 20.884C16.2374 21.1769 15.7625 21.1769 15.4696 20.884L7.82315 13.2375C7.53025 12.9446 7.53025 12.4698 7.82315 12.1769L8.1767 11.8233C8.46959 11.5304 8.94447 11.5304 9.23736 11.8233L15.9999 18.5859L22.7625 11.8233C23.0554 11.5304 23.5303 11.5304 23.8231 11.8233L24.1767 12.1769C24.4696 12.4698 24.4696 12.9446 24.1767 13.2375L16.5303 20.884Z" fill="currentColor"></path>
                      </svg></div>
                  </div>
                </div>
                <div style="width:100%;height:0px" class="rl_faq1_answer-2">
                  <div class="rl_faq1_answer-wrapper-2">
                    <p class="rl-text-style-regular-2">We do not place any limit on the number of trading accounts you can have in the Lasfunding Challenge and Verification.</p>
                  </div>
                </div>
              </div>
              <div class="rl_faq1_accordion-2">
                <div data-w-id="69375eff-9d0c-2cd3-dca5-e9c7e53b7001" class="rl_faq1_question-2">
                  <div class="rl_faq1_question-text-2">Why is there a fee?</div>
                  <div class="rl_faq1_icon-wrapper-2">
                    <div class="rl_faq1_icon-2 w-embed"><svg width=" 100%" height=" 100%" viewbox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M16.5303 20.884C16.2374 21.1769 15.7625 21.1769 15.4696 20.884L7.82315 13.2375C7.53025 12.9446 7.53025 12.4698 7.82315 12.1769L8.1767 11.8233C8.46959 11.5304 8.94447 11.5304 9.23736 11.8233L15.9999 18.5859L22.7625 11.8233C23.0554 11.5304 23.5303 11.5304 23.8231 11.8233L24.1767 12.1769C24.4696 12.4698 24.4696 12.9446 24.1767 13.2375L16.5303 20.884Z" fill="currentColor"></path>
                      </svg></div>
                  </div>
                </div>
                <div style="width:100%;height:0px" class="rl_faq1_answer-2">
                  <div class="rl_faq1_answer-wrapper-2">
                    <p class="rl-text-style-regular-2">The fee serves as a trader&#x27;s commitment to treat the account with the utmost care and responsibility. A trader has something in the game and the psychology is working. Also, the fee is just a marginal percentage compared to the size of the FTMO Account that you will receive after succeeding in the Evaluation Process.</p>
                  </div>
                </div>
              </div>
              <div class="rl_faq1_accordion-2">
                <div data-w-id="69375eff-9d0c-2cd3-dca5-e9c7e53b700b" class="rl_faq1_question-2">
                  <div class="rl_faq1_question-text-2">How do I withdraw my profits?</div>
                  <div class="rl_faq1_icon-wrapper-2">
                    <div class="rl_faq1_icon-2 w-embed"><svg width=" 100%" height=" 100%" viewbox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M16.5303 20.884C16.2374 21.1769 15.7625 21.1769 15.4696 20.884L7.82315 13.2375C7.53025 12.9446 7.53025 12.4698 7.82315 12.1769L8.1767 11.8233C8.46959 11.5304 8.94447 11.5304 9.23736 11.8233L15.9999 18.5859L22.7625 11.8233C23.0554 11.5304 23.5303 11.5304 23.8231 11.8233L24.1767 12.1769C24.4696 12.4698 24.4696 12.9446 24.1767 13.2375L16.5303 20.884Z" fill="currentColor"></path>
                      </svg></div>
                  </div>
                </div>
                <div style="width:100%;height:0px" class="rl_faq1_answer-2">
                  <div class="rl_faq1_answer-wrapper-2">
                    <p class="rl-text-style-regular-2">The option to place a payout on-demand after a period of 10 calendar days from the first placed trade on the account.</p>
                  </div>
                </div>
              </div>
              <div class="rl_faq1_accordion-2">
                <div data-w-id="69375eff-9d0c-2cd3-dca5-e9c7e53b7015" class="rl_faq1_question-2">
                  <div class="rl_faq1_question-text-2">Account retake/ reset</div>
                  <div class="rl_faq1_icon-wrapper-2">
                    <div class="rl_faq1_icon-2 w-embed"><svg width=" 100%" height=" 100%" viewbox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M16.5303 20.884C16.2374 21.1769 15.7625 21.1769 15.4696 20.884L7.82315 13.2375C7.53025 12.9446 7.53025 12.4698 7.82315 12.1769L8.1767 11.8233C8.46959 11.5304 8.94447 11.5304 9.23736 11.8233L15.9999 18.5859L22.7625 11.8233C23.0554 11.5304 23.5303 11.5304 23.8231 11.8233L24.1767 12.1769C24.4696 12.4698 24.4696 12.9446 24.1767 13.2375L16.5303 20.884Z" fill="currentColor"></path>
                      </svg></div>
                  </div>
                </div>
                <div style="width:100%;height:0px" class="rl_faq1_answer-2">
                  <div class="rl_faq1_answer-wrapper-2">
                    <p class="rl-text-style-regular-2">I have successfully passed the FTMO Challenge, now what?When you have passed all the Trading Objectives in the LASFUNDING Challenge, you will receive a notification in your Account analyser and you don&#x27;t need to trade the account any more. We will be automatically alerted that you have passed our Challenge and we will proceed to evaluate your trading results accordingly.After approximately 24-48 hours, we will then send you the new account login credentials for the Verification stage.</p>
                  </div>
                </div>
              </div>
              <div class="rl_faq1_accordion-2">
                <div data-w-id="69375eff-9d0c-2cd3-dca5-e9c7e53b701f" class="rl_faq1_question-2">
                  <div class="rl_faq1_question-text-2">Who can join Lasfunding?</div>
                  <div class="rl_faq1_icon-wrapper-2">
                    <div class="rl_faq1_icon-2 w-embed"><svg width=" 100%" height=" 100%" viewbox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M16.5303 20.884C16.2374 21.1769 15.7625 21.1769 15.4696 20.884L7.82315 13.2375C7.53025 12.9446 7.53025 12.4698 7.82315 12.1769L8.1767 11.8233C8.46959 11.5304 8.94447 11.5304 9.23736 11.8233L15.9999 18.5859L22.7625 11.8233C23.0554 11.5304 23.5303 11.5304 23.8231 11.8233L24.1767 12.1769C24.4696 12.4698 24.4696 12.9446 24.1767 13.2375L16.5303 20.884Z" fill="currentColor"></path>
                      </svg></div>
                  </div>
                </div>
                <div style="width:100%;height:0px" class="rl_faq1_answer-2">
                  <div class="rl_faq1_answer-wrapper-2">
                    <p class="rl-text-style-regular-2">We accept traders from all around the world. There is no special qualification required. All clients must be at least 18 years old. If vou know how to trade profitably and with proper risk management, that is all we care about.</p>
                  </div>
                </div>
              </div>
              <div class="rl_faq1_accordion-2">
                <div data-w-id="ad6cd133-769f-752d-d5e4-227f93edb682" class="rl_faq1_question-2">
                  <div class="rl_faq1_question-text-2">How do I become a trader?</div>
                  <div class="rl_faq1_icon-wrapper-2">
                    <div class="rl_faq1_icon-2 w-embed"><svg width=" 100%" height=" 100%" viewbox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M16.5303 20.884C16.2374 21.1769 15.7625 21.1769 15.4696 20.884L7.82315 13.2375C7.53025 12.9446 7.53025 12.4698 7.82315 12.1769L8.1767 11.8233C8.46959 11.5304 8.94447 11.5304 9.23736 11.8233L15.9999 18.5859L22.7625 11.8233C23.0554 11.5304 23.5303 11.5304 23.8231 11.8233L24.1767 12.1769C24.4696 12.4698 24.4696 12.9446 24.1767 13.2375L16.5303 20.884Z" fill="currentColor"></path>
                      </svg></div>
                  </div>
                </div>
                <div style="width:100%;height:0px" class="rl_faq1_answer-2">
                  <div class="rl_faq1_answer-wrapper-2">
                    <p class="rl-text-style-regular-2">In order to become an FTMO Trader, you will have to pass our 2-step Evaluation Process.</p>
                  </div>
                </div>
              </div>
              <div class="rl_faq1_accordion-2">
                <div data-w-id="e2138206-ae66-b0d3-b724-17fc362d5351" class="rl_faq1_question-2">
                  <div class="rl_faq1_question-text-2">The LASFUNDING Challenge</div>
                  <div class="rl_faq1_icon-wrapper-2">
                    <div class="rl_faq1_icon-2 w-embed"><svg width=" 100%" height=" 100%" viewbox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M16.5303 20.884C16.2374 21.1769 15.7625 21.1769 15.4696 20.884L7.82315 13.2375C7.53025 12.9446 7.53025 12.4698 7.82315 12.1769L8.1767 11.8233C8.46959 11.5304 8.94447 11.5304 9.23736 11.8233L15.9999 18.5859L22.7625 11.8233C23.0554 11.5304 23.5303 11.5304 23.8231 11.8233L24.1767 12.1769C24.4696 12.4698 24.4696 12.9446 24.1767 13.2375L16.5303 20.884Z" fill="currentColor"></path>
                      </svg></div>
                  </div>
                </div>
                <div style="width:100%;height:0px" class="rl_faq1_answer-2">
                  <div class="rl_faq1_answer-wrapper-2">
                    <p class="rl-text-style-regular-2">A 30 calendar day demo account where you will have to trade according to our rules. You will have superior account conditions in the form of our own LASFUNDING account solution with very low commissions and raw spreads. If you manage to pass all requirements, you will proceed to the second and final step of the evaluation.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="rl_footer1_component">
    <div class="rl-padding-global">
      <div class="rl-container-large">
        <div class="rl-padding-section-medium">
          <div class="w-layout-grid rl_footer1_top-wrapper">
            <div class="rl_footer1_left-wrapper">
              <a href="#" class="rl_footer1_logo-link w-nav-brand"><img src="images/Lasfund-Logo.svg" loading="lazy" alt="" class="rl_footer1_logo"></a>
              <div class="rl_footer1_spacing-block-1"></div>
              <div class="rl-text-style-regular">We are Nigeria&#x27;s 1st next-generational proprietary trading firm. Our aim is to scout for talented but undercapitalized Financial-asset Traders in Nigeria (lasfunding) and empower them. They trade with our funds, and we split the profit. It’s really a win-win! We want to see retail Traders succeed. Trade with peace of mind by trading with our money. Get rid of the fear of losing your money as well as the problems of trading a small account size.</div>
              <div class="rl_footer1_spacing-block-2"></div>
            </div>
            <div class="w-layout-grid rl_footer1_menu-wrapper">
              <div class="rl_footer1_link-list">
                <div class="rl_footer_column-text">Contact Us</div>
                <div class="rl_footer1_spacing-block-4"></div>
                <div class="footer-contact-wrapper"><img src="images/Asset-1.svg" loading="lazy" alt="" class="image-3">
                  <a href="#" class="rl_footer1_link">Lagos, Nigeria</a>
                </div>
                <div class="footer-contact-wrapper"><img src="images/Asset-1.svg" loading="lazy" alt="" class="image-3">
                  <a href="#" class="rl_footer1_link">+234 987 652 3210</a>
                </div>
                <div class="footer-contact-wrapper"><img src="images/Asset-1.svg" loading="lazy" alt="" class="image-3">
                  <a href="#" class="rl_footer1_link">info@lasfunding.com</a>
                </div>
              </div>
              <div class="rl_footer1_link-list">
                <div class="rl_footer_column-text">Apply Online</div>
                <div class="rl_footer1_spacing-block-4"></div>
                <a data-w-id="a8454ba9-aaca-eaca-df8f-a1abb34ceced" href="register.php" class="button-2 w-button">Trade Now</a>
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
  </div>
  <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=63807ab0318db8bd26b06087" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="js/webflow.js" type="text/javascript"></script>
  <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->

  <script src="./backend/login.js"></script>
  <script>
    const accessToken = localStorage.getItem('access_token');

    fetch(`${baseUrl}/orders/`, {
      method: 'GET',
      headers: {
        'Authorization': 'Bearer ' + accessToken
      }
    })
    .then(response => response.json())
    .then(data => {
      console.log("data", data);
      
      if (data.code === 'token_not_valid') {
        console.log("token_not_valid");
        
      } else {
        console.log("Valid");    
        window.location.href = 'user/dashboard.php';
      }

    })
    .catch(error => {
      console.error(error);
    });
  </script>

</body>
</html>