<!DOCTYPE html><!--  This site was created in Webflow. https://www.webflow.com  -->
<!--  Last Published: Wed May 03 2023 23:06:33 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="6422ec78a05bb3194102a79b" data-wf-site="63807ab0318db8bd26b06087">
<head>
  <meta charset="utf-8">
  <title>User Dashboard</title>
  <meta content="Dashboard" property="og:title">
  <meta content="Dashboard" property="twitter:title">
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
  <link href="../images/webclip.png" rel="apple-touch-icon">
  <!--  -->
  <link rel="stylesheet" href="../css/custom.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>       
    .loader-container {
      background-size: cover;
      background: #957272;
      z-index: 9999999;
      height: 100vh;
      background-color: #ECECEC;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      display: flex;
      align-items: center;
      flex-direction: column;
    }
    
    .loader {
      width: 215px;
      /** height: 2256px; **/
      stroke-width: 2px;
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
    
    .loading-text {
        font-family: 'Poppins';
      font-size: 18px;
      color: #E04800;
      margin-top: -20px;
      visibility: visible;
    }
    
    .logo-image {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 90px;
        height: 90px;
    }
</style>  
</head>
<body class="dashboard-body">
  <div class="loader-container">
    <svg id="loader" class="loader" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
        <g>
          <ellipse id="ellipse" cx="50" cy="50" rx="25" ry="25" />
        </g>        
    </svg>
    <img class="logo-image" src="http://lasfunding.com/Lasfund-Logo.png" alt="Logo">
    <span class="loading-text">Processing<span id="dots"></span></span>
</div>

<script>
    const dotsElement = document.getElementById('dots');
    const dotsAnimation = setInterval(() => {
        dotsElement.textContent += '.';
        if (dotsElement.textContent.length >= 3) {
            dotsElement.textContent = '';
        }
    }, 500);
</script>

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
      <!-- <span class="cart-count">0</span> -->
      <a href="./account-type.html" class="w-inline-block">
        <img src="../images/icons/Cart-nav.svg" loading="lazy" alt="" class="image">
      </a>
    </div>
    <!-- cart icon end -->

	  <!-- <button class="sidebar-toggle"><img src="file:///C:/Users/Aremu_damilare/JS_projects/lasfunding/final_frontend/user/user/images/icons/hamburger.svg" alt="" srcset="file:///C:/Users/Aremu_damilare/JS_projects/lasfunding/final_frontend/user/user/dashboard.html "></button> -->
	</div>

  <div data-animation="default" class="rl_navbar1_component w-nav" data-easing2="ease" fs-scrolldisable-element="smart-nav" data-easing="ease" data-collapse="medium" role="banner" data-no-scroll="1" data-duration="400">
    <div class="rl_navbar1_container">
      <nav role="navigation" class="rl_navbar1_menu is-page-height-tablet w-nav-menu">
        <!-- <div class="dashboard"><img src="../images/DiamondsFour.svg" loading="lazy" width="34" alt="">
          <a href="#" class="rl_navbar1_link dashboard w-nav-link">Dashboard</a>
        </div> -->
        <div class="right-navbar-wrapper">
        <div class="right-navbar-link"><img src="../images/DiamondsFour.svg"  loading="lazy" alt="" class="image-9">
          <a href="./analyzer.html" class="rl_navbar1_link w-nav-link notification ">Dashboard  </a> <span class="rl_navbar1_link w-nav-link notification" style="font-size: 20px;"> <img src="../images/icons/CaretRight.svg" alt="" srcset=""> </span>
        </div>
        </div>
        <div class="right-navbar-wrapper">
          <div class="text-block-36">ANALYTICS</div>
          <!-- <div class="right-navbar-link"><img src="../images/ChartLineUp-1.svg" loading="lazy" alt="" class="image-9">
            <a href="./analyzer.html" class="rl_navbar1_link w-nav-link">Analyzer</a>
          </div> -->
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
          <!-- <div class="right-navbar-link"><img src="../images/Vector.svg" loading="lazy" alt="" class="sign-out-icon">
            <a href="#" class="rl_navbar1_link w-nav-link">Wallet</a>
          </div> -->
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
  <div class="main-section" style="display: none">
    <div class="gradient-header">
      <!-- <div class="text-block-56">Dashboard</div> -->
      <div class="text-block-57">Welcome back <span class="user-fname">Toluwalope!</span></div>
    </div>
    <div class="analyzer-section dashboard wf-section">
      <div class="left-block">
        <!-- <img src="../images/Stock-chart.svg" loading="lazy" alt="" class="image-12"> -->
        <style>        
          .four-box-container {
              margin-left: 1%;
              margin-right: 0%;
              width: 24%;
              height: 530px;
              background-color: #fff;
              display: grid;
              grid-template-columns: 200% 200%;
              grid-template-rows: auto auto;
              grid-column-gap: 20px;
              grid-row-gap: 20px;
            }
            
            .box {
              padding: 20px;            
              border: 1px solid gray;
              border-radius: 10px;
              color: black;
              display: flex;
              align-items: center;
              justify-content: center;
              font-size: 40px;
              font-family: sans-serif;
            }                   
      </style>
      <div class="four-box-container">
          <div class="box">A</div>
          <div class="box">B</div>
          <div class="box">C</div>
          <div class="box">D</div>
        </div>
        <div class="transaction-card">
          <div class="table-header-wrapper">
            <div class="table-header">Transactions</div>
            <a href="#" class="link-block w-inline-block">
              <div class="text-block-58">See All Transactions</div><img src="../images/CaretUp.svg" loading="lazy" width="13" alt="" class="image-13">
            </a>
          </div>
          <div class="transaction-table">

            <!-- <div id="" class="status">
              <div id="" class="completed"><img src="../images/Ellipse-8.svg" loading="lazy" alt="" class="status-icon">
                <div class="text-block-63">Completed</div>
              </div>
            </div>
            <div id="" class="payment-type">
              <div class="text-block-62">Mastercard  **** 6442</div>
              <div class="text-block-61">Card payment</div>
            </div>
            <div id="" class="amount">
              <div class="text-block-64">$99.00</div>
            </div>
            <div id="" class="date">
              <div class="text-block-65">Jan 27, 2022</div>
            </div> -->

            <!-- <div class="status">
              <div id="" class="pending"><img src="../images/Ellipse-8-1.svg" loading="lazy" alt="" class="status-icon">
                <div class="text-block-60">Pending</div>
              </div>
            </div>            
            <div id="" class="payment-type">
              <div class="text-block-62">Account  **** 5665</div>
              <div class="text-block-61">Bank payment</div>
            </div>
            <div id="" class="amount">
              <div class="text-block-64">$99.00</div>
            </div>
            <div id="" class="date">
              <div class="text-block-65">Jan 27, 2022</div>
            </div> -->

            <!-- <div id="" class="status">
              <div id="" class="canceled"><img src="../images/Ellipse-8-2.svg" loading="lazy" alt="" class="status-icon">
                <div class="text-block-59">Canceled</div>
              </div>
            </div>
            <div id="" class="payment-type">
              <div class="text-block-62">Mastercard  **** 6442</div>
              <div class="text-block-61">Card payment</div>
            </div>
            <div id="" class="amount">
              <div class="text-block-64">$500.00</div>
            </div>
            <div id="" class="date">
              <div class="text-block-65">Jan 27, 2022</div>
            </div> -->

          </div>
          <div class="no-transaction-table" style="text-align: center;">
            <div>No Transactions!</div>
          </div>

        </div>
      </div>
      <div class="right-block">
        <div class="earning-card">
          <div class="earning-card-header">
            <div class="table-header">Earnings</div>
            <div data-hover="false" data-delay="0" class="dropdown earnings w-dropdown">
              <div class="dropdown-toggle w-dropdown-toggle">
                <div class="earning-dropdown-text">This week</div>
                <div class="icon-2 w-icon-dropdown-toggle"></div>
              </div>
              <nav class="w-dropdown-list">
                <a href="#" class="w-dropdown-link">Link 1</a>
                <a href="#" class="w-dropdown-link">Link 2</a>
                <a href="#" class="w-dropdown-link">Link 3</a>
              </nav>
            </div>
          </div>
          <div class="acct-type cards"></div>
          <div class="earning-stat"><img src="../images/Group-1171275061.svg" loading="lazy" width="126" alt="" class="earning-graph"><img src="../images/Rectangle-40846.svg" loading="lazy" alt="">
            <div class="earning-card-text">Trading</div>
          </div>
          <a href="#" class="button-primary earning w-button">START TRADING</a>
        </div>
        <div class="history-section-card">
          <div class="div-block-17">
            <div class="table-header">History</div>
            <div data-hover="false" data-delay="0" class="dropdown history w-dropdown">
              <div class="dropdown-toggle w-dropdown-toggle"><img src="../images/CalendarBlank.svg" loading="lazy" alt="" class="image-18">
                <div class="history-dropdown-text">12/12/22</div>
              </div>
              <nav class="w-dropdown-list">
                <a href="#" class="w-dropdown-link">Link 1</a>
                <a href="#" class="w-dropdown-link">Link 2</a>
                <a href="#" class="w-dropdown-link">Link 3</a>
              </nav>
            </div>
          </div>
          <div class="history-card">
            <div class="text-header">
              <div class="fx-trade-text">FX Trade</div>
              <div class="green history">+$500.00</div>
            </div>
            <div class="history-description-text">Lorem ipsum dolor sit amet consectetur. Nisi sollicitudin</div>
          </div>
          <div class="history-card">
            <div class="text-header">
              <div class="fx-trade-text">FX Trade</div>
              <div class="green history">+$500.00</div>
            </div>
            <div class="history-description-text">Lorem ipsum dolor sit amet consectetur. Nisi sollicitudin</div>
          </div>
          <div class="history-card">
            <div class="text-header">
              <div class="fx-trade-text">FX Trade</div>
              <div class="red history">-$500.00</div>
            </div>
            <div class="history-description-text">Lorem ipsum dolor sit amet consectetur. Nisi sollicitudin</div>
          </div>
          <div class="history-card">
            <div class="text-header">
              <div class="fx-trade-text">FX Trade</div>
              <div class="red history">-$500.00</div>
            </div>
            <div class="history-description-text">Lorem ipsum dolor sit amet consectetur. Nisi sollicitudin</div>
          </div>
          <div class="history-card">
            <div class="text-header">
              <div class="fx-trade-text">FX Trade</div>
              <div class="red history">-$500.00</div>
            </div>
            <div class="history-description-text">Lorem ipsum dolor sit amet consectetur. Nisi sollicitudin</div>
          </div>
        </div>
      </div>
    </div>
    <div class="colored-stat wf-section"></div>
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
  <script src="../backend/dashboard.js"></script>
  
  <script>
  
  </script>

</body>
</html>