<!DOCTYPE html><!--  This site was created in Webflow. https://www.webflow.com  -->
<!--  Last Published: Wed May 03 2023 23:06:33 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="64263cddb8b80c4137390e2c" data-wf-site="63807ab0318db8bd26b06087">
<head>
  <meta charset="utf-8">
  <title>Profile</title>
  <meta content="Profile" property="og:title">
  <meta content="Profile" property="twitter:title">
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
  <!-- <script data-memberstack-app="app_clcele2je003e0ukm6ven2ivi" src="https://static.memberstack.com/scripts/v1/memberstack.js" type="text/javascript"></script> -->

  <link rel="stylesheet" href="../css/custom.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body class="dashboard-body">

  <div class="topbar">
	  <div class="logo">
		<a href="#"><img src="../images/Lasfund-Logo.svg" alt="Logo"></a>
	  </div>
    
    <!-- navbar search form -->
	  <div class="search-container">
      <form action="#">
        <span class="search-container-border">
        <input type="text" placeholder="Search...">
        <button type="submit"><i class="fa fa-search"></i></button>
      </span>
      </form>
    </div>
    <!-- navbar search form end-->

    
    <!-- notification icons -->
    <div class="notification">
      <span class="navbar-item-notification"><i class="fa fa-envelope"></i>  </span>
      <span class="navbar-item-notification"> <i class="fa fa-bell"></i>  </span>
    </div>
    <!-- notification icons end-->


	  <!-- profile  -->
    <div class="profile">
      <img src="../images/Ellipse336.png" alt="Profile Avatar" width="50" height="50">
      <div class="profile-emails">
        <span class="profile-name">Chinadu Toluwaloper</span>
        <span class="profile-email">Toluwaloper@email.com</span>
      </div>
	  </div>
    <!-- profile end -->

    <!-- cart icon -->
    <div class="cart-icon">
      <!-- <i class="fa fa-shopping-cart"></i> -->
      <span class="cart-count">0</span>
      <a href="./account-type.html" class="w-inline-block">
        <img src="../images/cart.svg" loading="lazy" alt="" class="image"></a>
    </div>
    <!-- cart icon end -->

	  <!-- <button class="sidebar-toggle"><img src="file:///C:/Users/Aremu_damilare/JS_projects/lasfunding/final_frontend/user/user/images/icons/hamburger.svg" alt="" srcset="file:///C:/Users/Aremu_damilare/JS_projects/lasfunding/final_frontend/user/user/dashboard.html "></button> -->
	</div>

  <div data-animation="default" class="rl_navbar1_component w-nav" data-easing2="ease" fs-scrolldisable-element="smart-nav" data-easing="ease" data-collapse="medium" role="banner" data-no-scroll="1" data-duration="400">
    <div class="rl_navbar1_container">
      <nav role="navigation" class="rl_navbar1_menu is-page-height-tablet w-nav-menu">
        <div class="dashboard"><img src="../images/DiamondsFour.svg" loading="lazy" width="34" alt="">
          <a href="#" class="rl_navbar1_link dashboard w-nav-link">Dashboard</a>
        </div>
        <div class="right-navbar-wrapper">
          <div class="text-block-36">ANALYTICS</div>
          <div class="right-navbar-link"><img src="../images/ChartLineUp-1.svg" loading="lazy" alt="" class="image-9">
            <a href="./analyzer.html" class="rl_navbar1_link w-nav-link">Analyzer</a>
          </div>
          <div class="right-navbar-link"><img src="../images/CurrencyCircleDollar-1.svg" loading="lazy" alt="" class="sign-out-icon">
            <a href="#" class="rl_navbar1_link w-nav-link">Bonus Requests</a>
          </div>
        </div>
        <div class="right-navbar-wrapper">
          <div class="text-block-36">MENU</div>
          <div class="right-navbar-link"><img src="../images/Handbag.svg" loading="lazy" alt="" class="image-9">
            <a href="./orders.html" class="rl_navbar1_link w-nav-link">Order</a>
          </div>
          <div class="right-navbar-link"><img src="../images/CreditCard.svg" loading="lazy" alt="" class="sign-out-icon">
            <a href="./payment-methods.html" class="rl_navbar1_link w-nav-link">Payment Method</a>
          </div>
        </div>
        <div class="right-navbar-wrapper">
          <div class="text-block-36">PERSONAL</div>
          <div class="right-navbar-link"><img src="../images/UserCircle-1.svg" loading="lazy" alt="" class="image-9">
            <a href="./profile.html" class="rl_navbar1_link w-nav-link">Profile</a>
          </div>
          <div class="right-navbar-link"><img src="../images/Bell-1.svg" loading="lazy" alt="" class="sign-out-icon">
            <a href="#" class="rl_navbar1_link notification w-nav-link">Notification</a>
          </div>
          <div class="right-navbar-link"><img src="../images/Vector.svg" loading="lazy" alt="" class="sign-out-icon">
            <a href="#" class="rl_navbar1_link w-nav-link">Wallet</a>
          </div>
        </div>
        <div class="right-navbar-wrapper last-wrapper">
          <div class="right-navbar-link"><img src="../images/Gear-1.svg" loading="lazy" alt="" class="image-9">
            <a href="#" class="rl_navbar1_link w-nav-link">Settings</a>
          </div>
          <div class="right-navbar-link"><img src="../images/SignOut-1.svg" loading="lazy" alt="" class="sign-out-icon">
            <a href="#" class="rl_navbar1_link w-nav-link">Sign Out</a>
          </div>
        </div>
        <div class="square-box">
          <div class="text-block-37">Any Questions?</div>
          <div class="rect-box">
            <div class="text-block-38">Go to Help Centre</div>
          </div>
        </div>
      </nav>
      <div data-w-id="dfef91ae-55b8-ac9f-51eb-883e879e4cf4" class="rl_navbar1_menu-button w-nav-button">
        <div class="rl_menu-icon">
          <div class="rl_menu-icon_line-top"></div>
          <div class="rl_menu-icon_line-middle">
            <div class="rl_menu-icon_line-middle-inner-2"></div>
          </div>
          <div class="rl_menu-icon_line-bottom"></div>
        </div>
      </div>
    </div>
  </div>

  <div class="main-section">
    <div class="profile-section wf-section">
      <div class="edit-link-wrapper">
        <div class="profile-link">
          <a href="#" class="link-7">Edit</a>
        </div>
      </div>
      <div class="order-header">
        <div class="profile-title">Profile</div>
      </div>
      <div class="w-form">
        <form id="email-form" name="email-form" data-name="Email Form" method="get" class="profile-details-form">

          <div class="name-wrapper display-name-wrapper">
            <label for="name" class="profile-label">First Name</label>
            <input type="text" class="fname w-input" maxlength="256" name="name" data-name="Name" placeholder="" id="name">
            <label for="lname" class="lname-label">Last Name</label>
            <input type="text" class="lname w-input" maxlength="256" name="lname" data-name="Email" placeholder="" id="email" required="">
          </div>

          <div class="display-name-wrapper">
            <label for="field" class="profile-label">Display Name</label>
            <input type="text" class="display-name w-input" maxlength="256" name="field" data-name="Field" placeholder="" id="field" required="">
          </div>
          
          <div class="email-wrapper">
            <label for="field-2" class="profile-label">Email <Address></Address></label>
            <input type="email" class="email w-input" maxlength="256" name="field-2" data-name="Field 2" placeholder="" id="field-2" required="">
          </div>
          
          <div class="password-section">
            <div class="pwd-text">Password Change</div>
            <input type="password" class="pwd-field w-input display-name w-input" maxlength="256" name="field-3" data-name="Field 3" placeholder="Enter current password" id="field-3" required="">
            <input type="password" class="new-pwd-field w-input display-name w-input" maxlength="256" name="field-3" data-name="Field 3" placeholder="Enter new password" id="field-3" required="">
            <input type="password" class="confirm-new-pwd w-input display-name w-input" maxlength="256" name="field-3" data-name="Field 3" placeholder="Enter current password" id="field-3" required="">
          </div>
          <div class="password-section">
            <div class="currency-title">Default Currency</div><select id="currency-selection" name="currency-selection" data-name="currency selection" class="select-field w-select">
              <option value="">$USD</option>
              <option value="Second">£GBP</option>
              <option value="Third">₦NGN</option>
            </select>
            <div class="text-block-78">Select your preferred currency for shopping and payments.</div>
          </div><input type="submit" value="Save Changes" data-wait="Please wait..." class="submit-button-3 w-button">
        </form>
        
        <div class="w-form-done">
          <div>Thank you! Your submission has been received!</div>
        </div>
        <div class="w-form-fail">
          <div>Oops! Something went wrong while submitting the form.</div>
        </div>
      </div>
    </div>
    <section class="footer-subscribe wf-section">
      <div class="footer-container">
        <div class="footer-bottom">
          <div class="footer-copyright">© 2023 LASFUNDING. All rights reserved</div>
          <div class="footer-social-block-three">
            <a href="#" class="footer-social-link-three w-inline-block"><img src="https://uploads-ssl.webflow.com/62434fa732124a0fb112aab4/62434fa732124a705912aaeb_facebook%20big%20filled.svg" loading="lazy" alt=""></a>
            <a href="#" class="footer-social-link-three w-inline-block"><img src="https://uploads-ssl.webflow.com/62434fa732124a0fb112aab4/62434fa732124ab37a12aaf0_twitter%20big.svg" loading="lazy" alt=""></a>
            <a href="#" class="footer-social-link-three w-inline-block"><img src="https://uploads-ssl.webflow.com/62434fa732124a0fb112aab4/62434fa732124a61f512aaed_instagram%20big.svg" loading="lazy" alt=""></a>
            <a href="#" class="footer-social-link-three w-inline-block"><img src="https://uploads-ssl.webflow.com/62434fa732124a0fb112aab4/62434fa732124a717f12aaea_youtube%20small.svg" loading="lazy" alt=""></a>
          </div>
        </div>
      </div>
    </section>
  </div>
  <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=63807ab0318db8bd26b06087" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="../js/webflow.js" type="text/javascript"></script>
  <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
</body>
</html>