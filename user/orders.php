<!DOCTYPE html><!--  This site was created in Webflow. https://www.webflow.com  -->
<!--  Last Published: Wed May 03 2023 23:06:33 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="6425edd8b7568430087e0e82" data-wf-site="63807ab0318db8bd26b06087">
<head>
  <meta charset="utf-8">
  <title>Orders</title>
  <meta content="Orders" property="og:title">
  <meta content="Orders" property="twitter:title">
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
    <span class="cart-count">3</span>
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
            <a href="#" class="rl_navbar1_link w-nav-link">Analyzer</a>
          </div>
          <div class="right-navbar-link"><img src="../images/CurrencyCircleDollar-1.svg" loading="lazy" alt="" class="sign-out-icon">
            <a href="#" class="rl_navbar1_link w-nav-link">Bonus Requests</a>
          </div>
        </div>
        <div class="right-navbar-wrapper">
          <div class="text-block-36">MENU</div>
          <div class="right-navbar-link"><img src="../images/Handbag.svg" loading="lazy" alt="" class="image-9">
            <a href="#" class="rl_navbar1_link w-nav-link">Order</a>
          </div>
          <div class="right-navbar-link"><img src="../images/CreditCard.svg" loading="lazy" alt="" class="sign-out-icon">
            <a href="#" class="rl_navbar1_link w-nav-link">Payment Method</a>
          </div>
        </div>
        <div class="right-navbar-wrapper">
          <div class="text-block-36">PERSONAL</div>
          <div class="right-navbar-link"><img src="../images/UserCircle-1.svg" loading="lazy" alt="" class="image-9">
            <a href="#" class="rl_navbar1_link w-nav-link">Profile</a>
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
    <div class="order-section wf-section">
      <div>
        <div class="sign-out-order"><img src="../images/upload.svg" loading="lazy" alt="" class="signouticon">
          <div class="text-block-68">Sign Out</div>
        </div>
      </div>
      <div class="order-header">
        <div class="order-title">Order Details</div>
      </div>

      <div class="order-content without-orders">
        <a href="./account-type.html" class="order w-inline-block"><img src="../images/Frame-1171275096.svg" loading="lazy" alt="" class="order-icon"></a>
        <div class="order-text">No  Order has been made yet</div>
        <a href="./account-type.html" class="order-button w-button">Browse our products</a>
      </div>

      <div class="order-content with-orders">
        <div class="w-layout-grid order-grid">
          <div id="" class="order-table-header">
            <div class="text-block-69">Order</div>
          </div>
          <div id="" class="order-table-header">
            <div class="text-block-69">Date</div>
          </div>
          <div id="" class="order-table-header">
            <div class="text-block-69">Status</div>
          </div>
          <div id="" class="order-table-header">
            <div class="text-block-69">Action</div>
          </div>
          
          <!-- <div id="" class="order-table-text">
            <div id="" class="text-block-70">#6746489</div>
          </div>
          <div id="" class="order-table-text">
            <div id="" class="text-block-70">Aug 23, 2022</div>
          </div>
          <div id="" class="order-table-text">
            <div id="" class="text-block-70">Cancelled</div>
          </div>
          <div id="" class="order-table-text">
            <div id="" class="view-order-link">View</div>
          </div>                     -->
          
        </div>
      </div>

      <div class="order-content viewed">
        <div class="viewed-order-wrapper">
          <div class="view-order-table-header">
            <div class="text-block-73">Product</div>
            <div class="text-block-74">Total</div>
          </div>
        </div>
        <div class="view-order-table-content">
          <div>$10,000 USD Account - Consisitency Enabled Account ( CEA ), MT4 x 1</div>
          <div>$99.00</div>
        </div>
        <div class="view-order-table-content">
          <div class="text-block-75">Subtotal:</div>
          <div class="text-block-76">$99.00</div>
        </div>
        <div class="view-order-table-content">
          <div>Payment method</div>
          <div>Credit card / Debit card</div>
        </div>
        <div class="view-order-table-content">
          <div class="text-block-71">Total</div>
          <div class="text-block-72">$99.00 USD</div>
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
  <script src="../backend/orders.js"></script>
</body>
</html>