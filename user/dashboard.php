<?php
header('Cache-Control: no-store, no-cache, must-revalidate, max-age=0');
header('Pragma: no-cache');
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
?>

<!DOCTYPE html>
<!--  This site was created in Webflow. https://www.webflow.com  -->
<!--  Last Published: Wed May 03 2023 23:06:33 GMT+0000 (Coordinated Universal Time)  -->
<html>
  <head>
    <meta charset="utf-8" />
    <title>Dashboard - Lasfunding</title>
    <meta content="Dashboard" property="og:title" />
    <meta content="Dashboard" property="twitter:title" />
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="Webflow" name="generator" />
    <link href="../css/normalize.css" rel="stylesheet" type="text/css" />
    <link href="../css/webflow.css" rel="stylesheet" type="text/css" />
    <link href="../css/lasfunding.webflow.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin="anonymous" />
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
    <script type="text/javascript">
      WebFont.load({
        google: {
          families: [
            "Ubuntu:300,300italic,400,400italic,500,500italic,700,700italic",
            "Exo:100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic",
            "Poppins:100,200,300,regular,500,600,700,800,900,900italic",
          ],
        },
      });
    </script>
    <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
    <script type="text/javascript">
      !(function (o, c) {
        var n = c.documentElement,
          t = " w-mod-";
        (n.className += t + "js"), ("ontouchstart" in o || (o.DocumentTouch && c instanceof DocumentTouch)) && (n.className += t + "touch");
      })(window, document);
    </script>
    <link href="../images/favicon.png" rel="shortcut icon" type="image/x-icon" />
    <link href="../images/webclip.png" rel="apple-touch-icon" />
    <!--  -->
    <link rel="stylesheet" href="../css/custom.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="../css/pageloader.css" />
    <style>
      .left-block {
        width: 100%;
        flex-direction: column;
        margin-left: 0;
        display: flex;
      }
    </style>
    <style>
      /* Extra Small Screens (phones, less than 576px) */
      @media (max-width: 575.98px) {
        /* Your CSS rules for extra small screens here */
        .rl_navbar1_component {
          z-index: 100;
          width: 98% !important;
          /* height: 100vw; */
          margin-top: -70px !important;
          min-height: 0;
          object-fit: fill;
          border-bottom-style: none;
          flex-direction: column;
          padding-left: 0;
          padding-right: 0;
          position: relative;
        }
      }
      /* Small Screens (phones and tablets, 576px - 767px) */
      @media (min-width: 576px) and (max-width: 767.98px) {
        /* Your CSS rules for small screens here */
        .rl_navbar1_component {
          z-index: 100;
          width: 98% !important;
          /* height: 100vw; */
          margin-top: -70px !important;
          min-height: 0;
          object-fit: fill;
          border-bottom-style: none;
          flex-direction: column;
          padding-left: 0;
          padding-right: 0;
          position: relative;
        }
      }
      /* Medium Screens (tablets and small desktops, 768px - 991px) */
      @media (min-width: 768px) and (max-width: 991.98px) {
        /* Your CSS rules for medium screens here */
        .rl_navbar1_component {
          z-index: 100;
          width: 98% !important;
          /* height: 100vw; */
          margin-top: -70px !important;
          min-height: 0;
          object-fit: fill;
          border-bottom-style: none;
          flex-direction: column;
          padding-left: 0;
          padding-right: 0;
          position: relative;
        }
      }
      /* Large Screens (desktops, 992px - 1199px) */
      @media (min-width: 992px) and (max-width: 1199.98px) {
        /* Your CSS rules for large screens here */
        .rl_navbar1_component {
          z-index: 100;
          width: 18% !important;
          /* height: 100vw; */
          margin-top: -135px !important;
          min-height: 0;
          object-fit: fill;
          border-bottom-style: none;
          flex-direction: column;
          padding-left: 0;
          padding-right: 0;
          position: relative;
        }
      }
      /* Extra Large Screens (large desktops and beyond, 1200px and up) */
      @media (min-width: 1200px) {
        /* Your CSS rules for extra large screens here */
        .rl_navbar1_component {
          z-index: 100;
          width: 18% !important;
          /* height: 100vw; */
          margin-top: -140px !important;
          min-height: 0;
          object-fit: fill;
          border-bottom-style: none;
          flex-direction: column;
          padding-left: 0;
          padding-right: 0;
          position: relative;
        }
      }
      /* Extra Large Screens (large desktops and beyond, 1200px and up) */
      @media (min-width: 1440px) {
        /* Your CSS rules for extra large screens here */
        .rl_navbar1_component {
          z-index: 100;
          width: 18% !important;
          /* height: 100vw; */
          margin-top: -25px !important;
          min-height: 0;
          object-fit: fill;
          border-bottom-style: none;
          flex-direction: column;
          padding-left: 0;
          padding-right: 0;
          position: relative;
        }
      }
    </style>
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
        font-size: 20px;        
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
      <img class="logo-image" src="http://lasfunding.com/Lasfund-Logo.png" alt="Logo" />
      <span class="loading-text">Processing<span id="dots"></span></span>
    </div>
    <script>
      const dotsElement = document.getElementById("dots");
      const dotsAnimation = setInterval(() => {
        dotsElement.textContent += ".";
        if (dotsElement.textContent.length >= 3) {
          dotsElement.textContent = "";
        }
      }, 500);
    </script>
    <div class="topbar" style="display: none;">
      <div class="logo">
        <a href="#"><img src="../images/Lasfund-Logo.svg" alt="Logo" /></a>
      </div>
      <!-- navbar search form -->
      <div class="search-container">
        <form action="#">
          <span class="search-container-border">
            <input type="text" placeholder="Search..." />
            <button type="submit"><i class="fa fa-search"></i></button>
          </span>
        </form>
      </div>
      <!-- navbar search form end-->
      <!-- notification icons -->
      <!-- <div class="notification">
        <span class="navbar-item-notification"><i class="fa fa-envelope"></i>  </span>
        <span class="navbar-item-notification"> <i class="fa fa-bell"></i>  </span>
        </div> -->
      <!-- notification icons end-->
      <!-- profile  -->
      <div class="profile">
        <!-- <img src="../images/Ellipse336.png" alt="Profile Avatar" width="50" height="50"> -->
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
        <a href="./account-type.html" class="w-inline-block"> <img src="../images/cart.svg" loading="lazy" alt="" class="image" /></a>
      </div>
      <!-- cart icon end -->
      <!-- <button class="sidebar-toggle"><img src="file:///C:/Users/Aremu_damilare/JS_projects/lasfunding/final_frontend/user/user/images/icons/hamburger.svg" alt="" srcset="file:///C:/Users/Aremu_damilare/JS_projects/lasfunding/final_frontend/user/user/dashboard.html "></button> -->
    </div>
    <div
      style="display: none;"
      data-animation="default"
      class="rl_navbar1_component w-nav"
      data-easing2="ease"
      fs-scrolldisable-element="smart-nav"
      data-easing="ease"
      data-collapse="medium"
      role="banner"
      data-no-scroll="1"
      data-duration="400"
    >
      <div class="rl_navbar1_container">
        <nav role="navigation" class="rl_navbar1_menu is-page-height-tablet w-nav-menu">
          <div class="text-block-36"></div>
          <div class="right-navbar-wrapper">
            <div class="right-navbar-link current-page">
              <svg width="34" height="34" viewBox="0 0 34 34" fill="white" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M10.0742 10.8307V14.637C10.0742 15.0512 10.41 15.387 10.8242 15.387H14.6277C15.0419 15.387 15.3777 15.0512 15.3777 14.637V10.8307C15.3777 10.4165 15.0419 10.0807 14.6277 10.0807H10.8242C10.41 10.0807 10.0742 10.4165 10.0742 10.8307Z"
                  stroke="#8E8B8A"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                />
                <path
                  d="M18.5625 10.8292V14.6355C18.5625 15.0497 18.8983 15.3855 19.3125 15.3855H23.1159C23.5302 15.3855 23.8659 15.0497 23.8659 14.6355V10.8292C23.8659 10.415 23.5302 10.0792 23.1159 10.0792H19.3125C18.8983 10.0792 18.5625 10.415 18.5625 10.8292Z"
                  stroke="#8E8B8A"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                />
                <path
                  d="M10.0703 19.3092V23.1155C10.0703 23.5297 10.4061 23.8655 10.8203 23.8655H14.6238C15.038 23.8655 15.3738 23.5297 15.3738 23.1155V19.3092C15.3738 18.895 15.038 18.5592 14.6238 18.5592H10.8203C10.4061 18.5592 10.0703 18.895 10.0703 19.3092Z"
                  stroke="#8E8B8A"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                />
                <path
                  d="M18.5586 19.3092V23.1155C18.5586 23.5297 18.8944 23.8655 19.3086 23.8655H23.112C23.5262 23.8655 23.862 23.5297 23.862 23.1155V19.3092C23.862 18.895 23.5262 18.5592 23.112 18.5592H19.3086C18.8944 18.5592 18.5586 18.895 18.5586 19.3092Z"
                  stroke="#8E8B8A"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                />
              </svg>
              <a href="./dashboard.php" class="rl_navbar1_link w-nav-link"> Dashboard</a>
            </div>
          </div>
          <div class="right-navbar-wrapper">
            <div class="text-block-36">TRANSACTION</div>
            <div class="right-navbar-link">
              <img src="../images/CurrencyCircleDollar-1.svg" loading="lazy" alt="" class="sign-out-icon" />
              <a href="./withdrawals.php" class="rl_navbar1_link w-nav-link"> Withdrawals</a>
            </div>
          </div>
          <div class="right-navbar-wrapper">
            <div class="text-block-36">MENU</div>
            <div class="right-navbar-link">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="white">
                <path
                  d="M19.572 7.69116H4.42195C4.2374 7.69203 4.05949 7.76007 3.92146 7.88257C3.78343 8.00507 3.69473 8.17365 3.67195 8.35679L2.3407 20.3568C2.32886 20.4613 2.33915 20.5672 2.37091 20.6675C2.40267 20.7679 2.45518 20.8604 2.52503 20.9391C2.59488 21.0178 2.68051 21.0809 2.77635 21.1243C2.8722 21.1677 2.9761 21.1905 3.08133 21.1912H20.9126C21.0178 21.1905 21.1217 21.1677 21.2175 21.1243C21.3134 21.0809 21.399 21.0178 21.4689 20.9391C21.5387 20.8604 21.5912 20.7679 21.623 20.6675C21.6547 20.5672 21.665 20.4613 21.6532 20.3568L20.322 8.35679C20.2992 8.17365 20.2105 8.00507 20.0724 7.88257C19.9344 7.76007 19.7565 7.69203 19.572 7.69116V7.69116Z"
                  stroke="#8E8B8A"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                />
                <path
                  d="M8.25 10.6912V7.69116C8.25 6.6966 8.64509 5.74277 9.34835 5.03951C10.0516 4.33625 11.0054 3.94116 12 3.94116C12.9946 3.94116 13.9484 4.33625 14.6517 5.03951C15.3549 5.74277 15.75 6.6966 15.75 7.69116V10.6912"
                  stroke="#8E8B8A"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                />
              </svg>
              <a href="./orders.php" class="rl_navbar1_link w-nav-link"> Orders</a>
            </div>
            <div class="right-navbar-link">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M8.91507 13.8682L15.0865 8.26823M9.42938 8.7349H9.43967M14.5722 13.4016H14.5825M19.2008 20.4016V5.46823C19.2008 4.4373 18.2798 3.60156 17.1436 3.60156H6.85792C5.72179 3.60156 4.80078 4.4373 4.80078 5.46823V20.4016L8.40078 18.5349L12.0008 20.4016L15.6008 18.5349L19.2008 20.4016ZM9.94364 8.7349C9.94364 8.99263 9.71338 9.20156 9.42935 9.20156C9.14532 9.20156 8.91507 8.99263 8.91507 8.7349C8.91507 8.47716 9.14532 8.26823 9.42935 8.26823C9.71338 8.26823 9.94364 8.47716 9.94364 8.7349ZM15.0865 13.4016C15.0865 13.6593 14.8562 13.8682 14.5722 13.8682C14.2882 13.8682 14.0579 13.6593 14.0579 13.4016C14.0579 13.1439 14.2882 12.9349 14.5722 12.9349C14.8562 12.9349 15.0865 13.1439 15.0865 13.4016Z"
                  stroke="#8e8b8a"
                  stroke-width="1.58"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                ></path>
              </svg>
              <a href="./tickets.php" class="rl_navbar1_link w-nav-link"> Tickets </a>
            </div>
            <!-- <div class="right-navbar-link">
              <img src="../images/CreditCard.svg" loading="lazy" alt="" class="sign-out-icon" />
              <a href="./payment-methods.php" class="rl_navbar1_link w-nav-link"> Payment Method</a>
            </div> -->
          </div>
          <div class="right-navbar-wrapper">
            <div class="text-block-36">PERSONAL</div>
            <div class="right-navbar-link">
              <img src="../images/UserCircle-1.svg" loading="lazy" alt="" class="image-9" />
              <a href="./profile.php" class="rl_navbar1_link w-nav-link"> Profile</a>
            </div>
            <!-- <div class="right-navbar-link"><img src="../images/Bell-1.svg" loading="lazy" alt="" class="sign-out-icon">
              <a href="#" class="rl_navbar1_link  w-nav-link"> Notification</a>
              </div> -->
            <!-- <div class="right-navbar-link"><img src="../images/Vector.svg" loading="lazy" alt="" class="sign-out-icon">
              <a href="./kyc.php" class="rl_navbar1_link w-nav-link">KYC</a>
              </div> -->
          </div>
          <div class="right-navbar-wrapper last-wrapper">
            <!-- <div class="right-navbar-link"><img src="../images/Gear-1.svg" loading="lazy" alt="" class="image-9">
              <a href="#" class="rl_navbar1_link w-nav-link"> Settings</a>
              </div> -->
            <div class="right-navbar-link">
              <img src="../images/SignOut-1.svg" loading="lazy" alt="" class="sign-out-icon" />
              <a href="#" class="rl_navbar1_link w-nav-link"> Sign Out</a>
            </div>
          </div>
          <div class="">
            <div class="text-block-37"></div>
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
    <div class="main-section" style="display: none;">
      <div class="gradient-header">
        <!-- <div class="text-block-56">Dashboard</div> -->
        <div class="text-block-57">Welcome back <span class="user-fname">Toluwalope!</span></div>
      </div>
      <div class="analyzer-section dashboard wf-section">
        <div class="left-block">
          <!-- <img src="../images/Stock-chart.svg" loading="lazy" alt="" class="image-12"> -->
          <div class="four-box-container">
            <div class="box" id="box-a">You have <br>No Active order account, <br> complete your order and transactions <br>or contact support</div>
            <div class="box" id="box-b">Stage: N/A <br> Active: N/A</div>
            <div class="box" id="box-c">Transaction status: N/A</div>
            <div class="box" id="box-d">Profit: N/A</div>
          </div>
          <div class="transaction-card">
            <div class="table-header-wrapper">
              <div class="table-header">Transactions</div>
              <a href="./orders.php" class="link-block w-inline-block">
                <div class="text-block-58">See All Order with transactions</div>
                <img src="../images/CaretUp.svg" loading="lazy" width="13" alt="" class="image-13" />
              </a>
            </div>
            <div id="transaction-table">
              <!-- <div id="" class="status">
                <div id="" class="completed"><img src="../images/Ellipse-8.svg" loading="lazy" alt="" class="status-icon">
                  <div class="text-block-63">{{status}}</div>
                </div>
                </div>
                <div id="" class="payment-type">              
                <div class="text-block-61">{{payment_method}} payment</div>
                </div>
                <div id="" class="amount">
                <div class="text-block-64">${{setup_fee}}</div>
                </div>
                <div id="" class="date">
                <div class="text-block-65">{{date}}</div>
                </div>  -->
              <!-- <div class="status">
                <div id="" class="pending"><img src="../images/Ellipse-8-1.svg" loading="lazy" alt="" class="status-icon">
                  <div class="text-block-60">Pending</div>
                </div>
                </div>            
                <div id="" class="payment-type">
                <div class="text-block-62">Account  **** 5665</div>
                <div class="text-block-61">Bank payment</div>
                </div>
                <div id="" class="amount">
                <div class="text-block-64">$99.00</div>
                </div>
                <div id="" class="date">
                <div class="text-block-65">Jan 27, 2022</div>
                </div>  -->
              <!-- <div id="" class="status">
                <div id="" class="canceled"><img src="../images/Ellipse-8-2.svg" loading="lazy" alt="" class="status-icon">
                  <div class="text-block-59">Canceled</div>
                </div>
                </div>
                <div id="" class="payment-type">
                <div class="text-block-62">Mastercard  **** 6442</div>
                <div class="text-block-61">Card payment</div>
                </div>
                <div id="" class="amount">
                <div class="text-block-64">$500.00</div>
                </div>
                <div id="" class="date">
                <div class="text-block-65">Jan 27, 2022</div>
                </div> -->
            </div>
            <!-- <div class="no-transaction-table" style="text-align: center;">
              <div>No Transactions!</div>
              </div> -->
          </div>
        </div>
        <!-- <div class="right-block">
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
          </div> -->
      </div>
      <div class="colored-stat wf-section"></div>
      <section class="footer-subscribe wf-section">
        <div class="footer-container">
          <div class="footer-bottom">
            <div class="footer-copyright">
              © 2023 LASFUNDING. All rights reserved
            </div>
            <div class="footer-social-block-three">
              <a href="#" class="footer-social-link-three w-inline-block"><img src="https://uploads-ssl.webflow.com/62434fa732124a0fb112aab4/62434fa732124a705912aaeb_facebook%20big%20filled.svg" loading="lazy" alt="" /></a>
              <a href="#" class="footer-social-link-three w-inline-block"><img src="https://uploads-ssl.webflow.com/62434fa732124a0fb112aab4/62434fa732124ab37a12aaf0_twitter%20big.svg" loading="lazy" alt="" /></a>
              <a href="#" class="footer-social-link-three w-inline-block"><img src="https://uploads-ssl.webflow.com/62434fa732124a0fb112aab4/62434fa732124a61f512aaed_instagram%20big.svg" loading="lazy" alt="" /></a>
              <a href="#" class="footer-social-link-three w-inline-block"><img src="https://uploads-ssl.webflow.com/62434fa732124a0fb112aab4/62434fa732124a717f12aaea_youtube%20small.svg" loading="lazy" alt="" /></a>
            </div>
          </div>
        </div>
      </section>
    </div>

    
    <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=63807ab0318db8bd26b06087" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="../js/webflow.js" type="text/javascript"></script>
    <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
    <script src="../backend/user/getUserDetails.js"></script>
    <script src="../backend/user/topBarPlaceholders.js"></script>
    <script src="../backend/user/pageLoader.js"></script>
    <script src="../backend/config/_service-worker.js"></script>
    <script src="../backend/user/logOut.js"></script>
    <script src="../backend/user/getUserOrders.js"></script>
    <script>
      async function fetchData() {
        try {
          const userDetailsObj = await userDetails(accessToken, baseUrl);
          console.log("xxxxxxxxx", userDetailsObj);
          topBarPlaceholders(userDetailsObj);
          pageLoader(false);
        } catch (error) {
          console.error("An error occurred:", error);
        }
      }

      async function fetchUserOrder() {
        try {
          const userOdersList = await userOrders(accessToken);
          console.log("userOdersList", userOdersList);
          DisplayToBoxes(userOdersList)
          updateTransactionTable(userOdersList);
        } catch (error) {
          console.error("An error occurred:", error);
        }
      }

      fetchData();
      fetchUserOrder();

      function updateTransactionTable(userOdersList) {
        var transactionTable = document.querySelector("#transaction-table");

        for (const order of userOdersList) {
          console.log("order", order);
          const elementToAppend = document.createElement("div");
          elementToAppend.className = "transaction-table";
          elementToAppend.innerHTML = `
        <div id="" class="status">
          <div id="" class="completed"><img src="../images/Ellipse-8.svg" loading="lazy" alt="" class="status-icon">
            <div class="text-block-63">${order.transaction.status}</div>
          </div>
        </div>
        <div id="" class="payment-type">              
          <div class="text-block-61">${order.payment_method.name} payment</div>
        </div>
        <div id="" class="amount">
          <div class="text-block-64">$${order.account_type.setup_fee}</div>
        </div>
        <div id="" class="date">
          <div class="text-block-65">${formatDate(order.updated_at)}</div>
        </div>
      `;
          transactionTable.append(elementToAppend);
        }
      }

      function formatDate(dateString) {
        const createdAt = new Date(dateString);
        const formattedDate = createdAt.toLocaleDateString("en-US", {
          year: "numeric",
          month: "2-digit",
          day: "2-digit",
        });
        return formattedDate;
      }

      function DisplayToBoxes(OrderList){
        
        var boxA = document.getElementById("box-a");
        var boxB = document.getElementById("box-b");
        var boxC = document.getElementById("box-c");
        var boxD = document.getElementById("box-d");


        for (var i = 0; i < OrderList.length; i++) {
          var order = OrderList[i];
          if (
              order.active === true &&
              order.status === "success" &&
              order.stage === "active"
          ) {
              console.log("Matching Object:" , order);
              
                boxA.innerHTML = `Status:<br> ${order.status} <br><br> Transaction:<br> ${order.transaction.status}`;
                boxB.innerHTML = `Stage:<br> ${order.stage}`;
                boxC.innerHTML = `Active:<br> ${order.active}`;
                boxD.innerHTML = `Profit:<br> ${order.profit}`;
             
          } else{
            console.log("No active account")
          }
      }
      }

    </script>
  </body>
</html>
