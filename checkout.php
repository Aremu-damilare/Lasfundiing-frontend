<!DOCTYPE html><!--  This site was created in Webflow. https://www.webflow.com  -->
<!--  Last Published: Sat Mar 25 2023 00:24:17 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="63b7df9ae5e96f625fc2bd49" data-wf-site="63807ab0318db8bd26b06087">
<head>
  <meta charset="utf-8">
  <title>dashboard</title>
  <meta content="dashboard" property="og:title">
  <meta content="dashboard" property="twitter:title">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="Webflow" name="generator">
  <link href="../css/normalize.css?<?php echo time(); ?>" rel="stylesheet" type="text/css">
  <link href="../css/webflow.css?<?php echo time(); ?>" rel="stylesheet" type="text/css">
  <link href="../css/lasfunding.webflow.css?<?php echo time(); ?>" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
  <script type="text/javascript">WebFont.load({  google: {    families: ["Ubuntu:300,300italic,400,400italic,500,500italic,700,700italic","Exo:100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic","Poppins:100,200,300,regular,500,600,700,800,900,900italic"]  }});</script>
  <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
  <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
  <link href="../images/favicon.png" rel="shortcut icon" type="image/x-icon">
  <link href="../images/webclip.png" rel="apple-touch-icon"><!--  Memberstack webflow package  -->
  <script data-memberstack-app="app_clcele2je003e0ukm6ven2ivi" src="https://static.memberstack.com/scripts/v1/memberstack.js" type="text/javascript"></script>
</head>
<body>
  <div data-animation="default" class="rl_navbar2_component w-nav" data-easing2="ease" fs-scrolldisable-element="smart-nav" data-easing="ease" data-collapse="medium" data-w-id="1511b53a-28e7-ffe2-28a4-d6bde20918bb" role="banner" data-duration="400">
    <div class="rl_navbar2_container">
      <a href="#" class="rl_navbar2_logo-link w-nav-brand"><img src="../images/Lasfund-Logo.svg" loading="lazy" alt="" class="rl_navbar2_logo"></a>
      <nav role="navigation" id="w-node-_1511b53a-28e7-ffe2-28a4-d6bde20918bf-5fc2bd49" class="rl_navbar2_menu is-page-height-tablet w-nav-menu">
        <a href="#" class="nav-link-2 navdash w-nav-link">How it Works</a>
        <a href="#" class="nav-link-2 navdash w-nav-link">Programs</a>
        <a href="#" class="nav-link-2 navdash w-nav-link">FAQ</a>
        <a href="#" class="nav-link-2 navdash w-nav-link">Contact</a>
      </nav>
      <div id="w-node-af767584-0aea-c3ec-a231-8de93eeae345-5fc2bd49" class="right-navdash">
        <a href="#" class="nav-link-2 navdash w-nav-link">My Account (User name)</a><img src="../images/cart.svg" loading="lazy" alt="" class="image">
      </div>
    </div>
  </div>
  <h2 class="heading-9">Sign Up</h2>
  <div class="columns-3 w-row">
    <div class="column-4 w-col w-col-6">
      <div class="signup-form">
        <div class="text-block-17">Billing Details</div>
        <div class="billing-form w-form">
          <form id="email-form" name="email-form" data-name="Email Form" method="get" data-ms-form="signup" class="form-3"><input type="text" class="billing-input w-input" maxlength="256" name="First-Name" data-name="First Name" placeholder="Enter First Name" id="First-Name" data-ms-member="first-name" required=""><input type="text" class="billing-input w-input" maxlength="256" name="Last-Name" data-name="Last Name" placeholder="Enter Last Name" id="Last-Name" data-ms-member="last-name" required=""><input type="email" class="billing-input w-input" maxlength="256" name="Email" data-name="Email" placeholder="Email Address" id="Email" data-ms-member="email" required=""><input type="password" class="billing-input w-input" maxlength="256" name="Password" data-name="Password" placeholder="Enter Password" id="Password" data-ms-member="password" required=""><input type="text" class="billing-input w-input" maxlength="256" name="Password" data-name="Password" placeholder="Confirm Password" id="Password-2" data-ms-member="password" required=""><input type="tel" class="billing-input w-input" maxlength="256" name="Phone" data-name="Phone" placeholder="Phone Number" id="Phone" data-ms-member="phone-number" required=""><input type="text" class="billing-input w-input" maxlength="256" name="Home-Address" data-name="Home Address" placeholder="Enter Home Address" id="Home-Address" data-ms-member="address" required="">
            <div class="text-block-18">Additional Information</div><input type="text" class="billing-input w-input" maxlength="256" name="Notes" data-name="Notes" placeholder="Additional Notes (Note about your order)" id="Notes">
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
    <div class="column-3 w-col w-col-6">
      <div class="order-summary">
        <div class="text-block-19">Order Summary</div>
        <div class="product-section wf-section">
          <div class="w-layout-grid grid-2">
            <div class="text-block-21">Product</div>
            <div id="w-node-dedc073b-f670-9dd3-3cce-03f745bf123e-5fc2bd49" class="text-block-23">Subtotal</div>
            <div id="w-node-_941b8568-29f2-e069-6f16-77573a171079-5fc2bd49" class="text-block-26">$10,000 USD Account - Consistency Enabled Account (CEA), MT4  × 1</div>
            <div id="w-node-c3a894de-6b52-d137-2f16-f94372dbcb87-5fc2bd49" class="text-block-25">$99.00</div>
          </div>
          <div class="w-layout-grid grid-3">
            <div class="text-block-27">Total</div>
            <div id="w-node-_3dc2f941-9a91-ce1c-77c4-178de8f275f2-5fc2bd49" class="text-block-28">$99.00</div>
          </div>
        </div>
        <div class="product-section debit-card wf-section">
          <div class="w-form">
            <form id="email-form-2" name="email-form-2" data-name="Email Form 2" method="get"><label class="debit-card-button w-radio"><input type="radio" id="Credit-Debit-Card" name="Card" value="Credit / Debit Card" data-name="Card" class="w-form-formradioinput w-radio-input"><span class="debit-card-button-label w-form-label" for="Credit-Debit-Card">Credit / Debit Card</span></label></form>
            <div class="w-form-done">
              <div>Thank you! Your submission has been received!</div>
            </div>
            <div class="w-form-fail">
              <div>Oops! Something went wrong while submitting the form.</div>
            </div>
          </div>
        </div>
        <div class="product-section debit-card wf-section">
          <div class="w-form">
            <form id="email-form-2" name="email-form-2" data-name="Email Form 2" method="get"><label class="cryptocurrency-button w-radio"><input type="radio" id="Credit-Debit-Card" name="Card" value="Credit / Debit Card" data-name="Card" class="w-form-formradioinput w-radio-input"><span class="crypto-button-label w-form-label" for="Credit-Debit-Card">Cryptocurrency</span></label></form>
            <div class="w-form-done">
              <div>Thank you! Your submission has been received!</div>
            </div>
            <div class="w-form-fail">
              <div>Oops! Something went wrong while submitting the form.</div>
            </div>
          </div>
        </div>
        <div class="product-section debit-card wf-section">
          <div class="w-form">
            <form id="email-form-2" name="email-form-2" data-name="Email Form 2" method="get"><label class="paystack-button w-radio"><input type="radio" id="Credit-Debit-Card" name="Card" value="Credit / Debit Card" data-name="Card" class="w-form-formradioinput w-radio-input"><span class="paystack-button-label w-form-label" for="Credit-Debit-Card">Paystack</span></label></form>
            <div class="w-form-done">
              <div>Thank you! Your submission has been received!</div>
            </div>
            <div class="w-form-fail">
              <div>Oops! Something went wrong while submitting the form.</div>
            </div>
          </div>
        </div>
        <div class="text-block-20">Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our privacy policy.<br><br>By clicking &quot;Place Order&quot; to register with My Forex Funds, you are agreeing that you understand terms and conditions, including the Risk Management, Consistency and other guidelines on <a href="../index.html" class="link-4">Lasfunding.<br>‍</a><br>You accept that Lasfunding will not issue refund once service (i.e. trading) has started on your account.</div>
        <div class="billing-form w-form">
          <form id="wf-form-Order-form" name="wf-form-Order-form" data-name="Order form" method="get" data-ms-form="signup" class="form-3 right"><label class="w-checkbox checkbox-field-2"><input type="checkbox" id="Terms-and-Condition" name="Terms-and-Condition" data-name="Terms and Condition" required="" class="w-checkbox-input"><span class="w-form-label" for="Terms-and-Condition">I have read and accept the <a href="#" class="link-6">Terms</a> and <a href="#" class="link-5">Privacy policy</a></span></label><label class="w-checkbox checkbox-field-3"><input type="checkbox" id="Order-verify" name="Order-verify" data-name="Order verify" required="" class="w-checkbox-input"><span class="w-form-label" for="Order-verify">I have verified my order</span></label><input type="submit" value="Sign Up" data-wait="Please wait..." class="submit-button-2 w-button"></form>
          <div class="w-form-done">
            <div>Thank you! Your submission has been received!</div>
          </div>
          <div class="w-form-fail">
            <div>Oops! Something went wrong while submitting the form.</div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="rl_footer1_component">
    <div class="rl-padding-global">
      <div class="rl-container-large">
        <div class="rl-padding-section-medium">
          <div class="w-layout-grid rl_footer1_top-wrapper">
            <div class="rl_footer1_left-wrapper">
              <a href="#" class="rl_footer1_logo-link w-nav-brand"><img src="../images/Lasfund-Logo.svg" loading="lazy" alt="" class="rl_footer1_logo"></a>
              <div class="rl_footer1_spacing-block-1"></div>
              <div class="rl-text-style-regular">We are Nigeria&#x27;s 1st next-generational proprietary trading firm. Our aim is to scout for talented but undercapitalized Financial-asset Traders in Nigeria (lasfunding) and empower them. They trade with our funds, and we split the profit. It’s really a win-win! We want to see retail Traders succeed. Trade with peace of mind by trading with our money. Get rid of the fear of losing your money as well as the problems of trading a small account size.</div>
              <div class="rl_footer1_spacing-block-2"></div>
            </div>
            <div class="w-layout-grid rl_footer1_menu-wrapper">
              <div class="rl_footer1_link-list">
                <div class="rl_footer_column-text">Contact Us</div>
                <div class="rl_footer1_spacing-block-4"></div>
                <div class="footer-contact-wrapper"><img src="../images/Asset-1.svg" loading="lazy" alt="" class="image-3">
                  <a href="#" class="rl_footer1_link">Lagos, Nigeria</a>
                </div>
                <div class="footer-contact-wrapper"><img src="../images/Asset-1.svg" loading="lazy" alt="" class="image-3">
                  <a href="#" class="rl_footer1_link">+234 987 652 3210</a>
                </div>
                <div class="footer-contact-wrapper"><img src="../images/Asset-1.svg" loading="lazy" alt="" class="image-3">
                  <a href="#" class="rl_footer1_link">info@lasfunding.com</a>
                </div>
              </div>
              <div class="rl_footer1_link-list">
                <div class="rl_footer_column-text">Apply Online</div>
                <div class="rl_footer1_spacing-block-4"></div>
                <a data-w-id="a8454ba9-aaca-eaca-df8f-a1abb34ceced" href="#" class="button-2 w-button">Trade Now</a>
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
  <script src="../js/webflow.js" type="text/javascript"></script>
  <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
</body>
</html>