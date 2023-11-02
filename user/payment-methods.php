<!DOCTYPE html><!--  This site was created in Webflow. https://www.webflow.com  -->
<!--  Last Published: Wed May 03 2023 23:06:33 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="642655f042b60fc0dbc3dfff" data-wf-site="63807ab0318db8bd26b06087">
<head>
  <meta charset="utf-8">
  <title>Payment Methods</title>
  <meta content="Payment Methods" property="og:title">
  <meta content="Payment Methods" property="twitter:title">
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
      <a href="#" class="w-inline-block">
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
            <a href="./kyc.php" class="rl_navbar1_link w-nav-link">KYC</a>
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
    <div class="payment-method-section wf-section">
      <div class="pmnt-method-title-wrapper">
        <div class="pmnt-methods">Payment Methods</div>
      </div>
      <div class="payment-method-content">
        <div class="w-layout-grid method-grid1">
          <div id="w-node-_215f57c2-0eef-36d8-7b9e-f7db728fc72a-dbc3dfff" class="method-wrapper"><img src="../images/CreditCard_1.svg" loading="lazy" alt="" class="debit-card"></div>
          <div id="w-node-_43b92105-0bf9-445f-397a-7526e231e471-dbc3dfff" class="method-wrapper"><img src="../images/Bank.svg" loading="lazy" alt="" class="bank"></div>
          <div id="w-node-abb1d31d-e9c0-10ae-f902-042b9ecb2f80-dbc3dfff" class="method-wrapper"><img src="../images/Bitcoin-Circle-Icon-Outline.svg" loading="lazy" alt="" class="debit-card"></div>
          <div id="w-node-_147e7d9a-b66f-ebbb-682d-cac006c3e938-dbc3dfff" class="method-wrapper"><img src="../images/Paystack.svg" loading="lazy" alt="" class="debit-card"></div>
          <div id="w-node-f895c0f3-1cf3-270c-ff9c-dd0d59133540-dbc3dfff" class="method-wrapper"><img src="../images/download-1-1.svg" loading="lazy" alt="" class="debit-card"></div>
          <div class="payment-method-text">Add Card +</div>
          <div class="payment-method-text">Add Bank +</div>
          <div class="payment-method-text">Add Cryptocurrency +</div>
          <div class="payment-method-text">Add Paystack +</div>
          <div class="payment-method-text">Add Flutterwave +</div>
        </div>
        <div class="w-layout-grid method-grid1 mobile">
          <div id="w-node-_773d11a7-f4b2-1be1-cb7c-4855308dafc4-dbc3dfff" class="method-wrapper"><img src="../images/CreditCard_1.svg" loading="lazy" width="54" alt="" class="debit-card"></div>
          <div id="w-node-_773d11a7-f4b2-1be1-cb7c-4855308dafc6-dbc3dfff" class="method-wrapper"><img src="../images/Bank.svg" loading="lazy" width="56" alt="" class="bank"></div>
          <div id="w-node-_773d11a7-f4b2-1be1-cb7c-4855308dafc8-dbc3dfff" class="method-wrapper"><img src="../images/Bitcoin-Circle-Icon-Outline.svg" loading="lazy" width="64" alt="" class="debit-card"></div>
          <div class="payment-method-text">Add +</div>
          <div class="payment-method-text">Add +</div>
          <div class="payment-method-text">Add +</div>
        </div>
        <div class="w-layout-grid method-grid-2 mobile">
          <div id="w-node-_773d11a7-f4b2-1be1-cb7c-4855308dafca-dbc3dfff" class="method-wrapper"><img src="../images/Paystack.svg" loading="lazy" alt="" class="debit-card"></div>
          <div class="method-wrapper"><img src="../images/download-1-1.svg" loading="lazy" alt="" class="debit-card"></div>
          <div class="payment-method-text">Add Paystack +</div>
          <div class="payment-method-text">Add Flutterwave +</div>
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