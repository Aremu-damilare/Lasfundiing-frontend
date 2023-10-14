<!DOCTYPE html><!--  This site was created in Webflow. https://www.webflow.com  -->
<!--  Last Published: Wed May 03 2023 23:06:33 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="6422ec78a05bb3194102a79b" data-wf-site="63807ab0318db8bd26b06087">
<head>
  <meta charset="utf-8">
  <title>Orders - lasfunding</title>
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
  <link rel="stylesheet" href="./css/ticket-table.css">

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

        <div class="right-navbar-wrapper">
          <!-- <div class="text-block-36">ANALYTICS</div> -->
          <!-- <div class="right-navbar-link"><img src="../images/ChartLineUp-1.svg" loading="lazy" alt="" class="image-9">
            <a href="./analyzer.html" class="rl_navbar1_link w-nav-link">Analyzer</a>
          </div> -->
          <div class="right-navbar-link"><img src="../images/icons/admin/DiamondsFour.svg" loading="lazy" alt="" class="sign-out-icon">
            <a href="#" class="rl_navbar1_link w-nav-link">Dashboard </a>
          </div>

          <div class="right-navbar-link">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M8.91507 13.8682L15.0865 8.26823M9.42938 8.7349H9.43967M14.5722 13.4016H14.5825M19.2008 20.4016V5.46823C19.2008 4.4373 18.2798 3.60156 17.1436 3.60156H6.85792C5.72179 3.60156 4.80078 4.4373 4.80078 5.46823V20.4016L8.40078 18.5349L12.0008 20.4016L15.6008 18.5349L19.2008 20.4016ZM9.94364 8.7349C9.94364 8.99263 9.71338 9.20156 9.42935 9.20156C9.14532 9.20156 8.91507 8.99263 8.91507 8.7349C8.91507 8.47716 9.14532 8.26823 9.42935 8.26823C9.71338 8.26823 9.94364 8.47716 9.94364 8.7349ZM15.0865 13.4016C15.0865 13.6593 14.8562 13.8682 14.5722 13.8682C14.2882 13.8682 14.0579 13.6593 14.0579 13.4016C14.0579 13.1439 14.2882 12.9349 14.5722 12.9349C14.8562 12.9349 15.0865 13.1439 15.0865 13.4016Z" stroke="#CC4200" stroke-width="1.58" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>              
            <a href="./tickets.php" class="rl_navbar1_link w-nav-link">Ticket </a>
          </div>
          
          <div class="right-navbar-link">
            <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M19.572 7.69116H4.42195C4.2374 7.69203 4.05949 7.76007 3.92146 7.88257C3.78343 8.00507 3.69473 8.17365 3.67195 8.35679L2.3407 20.3568C2.32886 20.4613 2.33915 20.5672 2.37091 20.6675C2.40267 20.7679 2.45518 20.8604 2.52503 20.9391C2.59488 21.0178 2.68051 21.0809 2.77635 21.1243C2.8722 21.1677 2.9761 21.1905 3.08133 21.1912H20.9126C21.0178 21.1905 21.1217 21.1677 21.2175 21.1243C21.3134 21.0809 21.399 21.0178 21.4689 20.9391C21.5387 20.8604 21.5912 20.7679 21.623 20.6675C21.6547 20.5672 21.665 20.4613 21.6532 20.3568L20.322 8.35679C20.2992 8.17365 20.2105 8.00507 20.0724 7.88257C19.9344 7.76007 19.7565 7.69203 19.572 7.69116V7.69116Z" stroke="#e04839" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M8.25 10.6912V7.69116C8.25 6.6966 8.64509 5.74277 9.34835 5.03951C10.0516 4.33625 11.0054 3.94116 12 3.94116C12.9946 3.94116 13.9484 4.33625 14.6517 5.03951C15.3549 5.74277 15.75 6.6966 15.75 7.69116V10.6912" stroke="#e04839" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>           
            <a href="./orders.php" style="color: #E04800;font-style: oblique;" class="rl_navbar1_link w-nav-link">Orders <img src="../images/icons/CaretRight.svg" alt="" srcset=""></a>
          </div>

          <div class="right-navbar-link"><img src="../images/icons/admin/outline.svg" loading="lazy" alt="" class="sign-out-icon">
            <a href="#" class="rl_navbar1_link w-nav-link">Users</a>
          </div>

          <div class="right-navbar-link"><img src="../images/icons/admin/CurrencyCircleDollar.svg" loading="lazy" alt="" class="sign-out-icon">
            <a href="#" class="rl_navbar1_link w-nav-link">Manage plan</a>
          </div>

          <div class="right-navbar-link"><img src="../images/icons/admin/ArrowBendUpLeft.svg" loading="lazy" alt="" class="sign-out-icon">
            <a href="#" class="rl_navbar1_link w-nav-link">Withdrawal</a>
          </div>

          <div class="right-navbar-link"><img src="../images/icons/admin/ChatsTeardrop.svg" loading="lazy" alt="" class="sign-out-icon">
            <a href="#" class="rl_navbar1_link w-nav-link">KYC</a>
          </div>
          
          <div class="right-navbar-link"><img src="../images/icons/admin/Gear.svg" loading="lazy" alt="" class="sign-out-icon">
            <a href="#" class="rl_navbar1_link w-nav-link">Settings</a>
          </div>

          <div class="right-navbar-link"><img src="../images/icons/admin/SignOut.svg" loading="lazy" alt="" class="sign-out-icon">
            <a href="#" class="rl_navbar1_link w-nav-link">Sign up</a>
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
      <div style="color: #E04800;font-style: oblique;"  class="text-block-57">
        <span>Orders</span>        
      </div>
      <div><span style="color: #E04800;float: right;"><img src="./images/icons/Copy.svg" alt=""> Copy link</span></div>
    </div>
    <div class="analyzer-section dashboard wf-section" style="display: block;">
            
        <div style="overflow-x: auto;">
            <table class="slds-table slds-table--bordered">
                <thead>
                  <tr class="slds-text-heading--label">
                    <th class="slds-cell-shrink">
                      <label class="slds-checkbox">
                          <input type="checkbox" name="options">
                          <span class="slds-checkbox--faux"></span>
                          <span class="slds-assistive-text">Select All</span>
                        </label>
                    </th>
                    <th class="slds-is-sortable" scope="col">
                      <div class="slds-truncate">Account type
                        <button class="slds-button slds-button--icon-bare">
                            <svg aria-hidden="true" class="slds-button__icon slds-button__icon--small">
                              <use xlink:href="/assets/icons/utility-sprite/svg/symbols.svg#arrowdown"></use>
                            </svg>
                            <span class="slds-assistive-text">Sort</span>
                          </button>
                      </div>
                    </th>
                    <th class="slds-is-sortable" scope="col">
                      <div class="slds-truncate">Amount
                        <button class="slds-button slds-button--icon-bare">
                            <svg aria-hidden="true" class="slds-button__icon slds-button__icon--small">
                              <use xlink:href="/assets/icons/utility-sprite/svg/symbols.svg#arrowdown"></use>
                            </svg>
                            <span class="slds-assistive-text">Sort</span>
                          </button>
                      </div>
                    </th>
                  
                    <th class="slds-is-sortable" scope="col">
                      <div class="slds-truncate">Status
                        <button class="slds-button slds-button--icon-bare">
                            <svg aria-hidden="true" class="slds-button__icon slds-button__icon--small">
                              <use xlink:href="/assets/icons/utility-sprite/svg/symbols.svg#arrowdown"></use>
                            </svg>
                            <span class="slds-assistive-text">Sort</span>
                          </button>
                      </div>
                    </th>
                    <th class="slds-is-sortable" scope="col">
                      <div class="slds-truncate">Payment details
                        <button class="slds-button slds-button--icon-bare">
                            <svg aria-hidden="true" class="slds-button__icon slds-button__icon--small">
                              <use xlink:href="/assets/icons/utility-sprite/svg/symbols.svg#arrowdown"></use>
                            </svg>
                            <span class="slds-assistive-text">Sort</span>
                          </button>
                      </div>
                    </th>
                    <!-- <th class="slds-is-sortable" scope="col">
                      <div class="slds-truncate">Amount
                        <button class="slds-button slds-button--icon-bare">
                            <svg aria-hidden="true" class="slds-button__icon slds-button__icon--small">
                              <use xlink:href="/assets/icons/utility-sprite/svg/symbols.svg#arrowdown"></use>
                            </svg>
                            <span class="slds-assistive-text">Sort</span>
                          </button>
                      </div>
                    </th>
                    <th class="slds-is-sortable" scope="col">
                      <div class="slds-truncate">Contact
                        <button class="slds-button slds-button--icon-bare">
                            <svg aria-hidden="true" class="slds-button__icon slds-button__icon--small">
                              <use xlink:href="/assets/icons/utility-sprite/svg/symbols.svg#arrowdown"></use>
                            </svg>
                            <span class="slds-assistive-text">Sort</span>
                          </button>
                      </div>
                    </th> -->
                    <th class="slds-is-sortable" scope="col">
                        <div class="slds-truncate">Date
                          <button class="slds-button slds-button--icon-bare">
                              <svg aria-hidden="true" class="slds-button__icon slds-button__icon--small">
                                <use xlink:href="/assets/icons/utility-sprite/svg/symbols.svg#arrowdown"></use>
                              </svg>
                              <span class="slds-assistive-text">Sort</span>
                            </button>
                        </div>
                      </th>
                    <th class="slds-cell-shrink"></th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="slds-hint-parent">
                    <td class="slds-cell-shrink" data-label="Select Row">
                      <label class="slds-checkbox">
                          <input type="checkbox" name="options">
                          <span class="slds-checkbox--faux"></span>
                          <span class="slds-assistive-text">Select Row</span>
                        </label>
                    </td>
                    <th class="slds-truncate" scope="row" data-label="Opportunity Name"><img src="../images/icons/ticket-table/Featured Icon.svg" alt="" srcset=""> $5,000</th>
                    <td class="slds-truncate" data-label="Account Name">$109.99</td>        
                    <td class="slds-truncate" data-label="Prospecting"><img src="../images/icons/ticket-table/Dot2.svg" alt="" srcset="">Pending</td>
                    <td class="" data-label="Confidence">payment proof</td>
                    <td class="" data-label="Close Date"><img src="../images/icons/ticket-table/CalendarBlank-r.svg" alt="" srcset="">Just now</td>
                    <!-- <td class="" data-label="Amount">$25k</td> -->
                    <!-- <td class="slds-truncate" data-label="Contact"><a href="#void">jrogers@cloudhub.com</a></td>
                    <td class="slds-cell-shrink" data-label="Actions">
                      <button class="slds-button slds-button--icon-border-filled slds-button--icon-x-small">
                          <svg aria-hidden="true" class="slds-button__icon slds-button__icon--hint slds-button__icon--small">
                            <use xlink:href="/assets/icons/utility-sprite/svg/symbols.svg#down"></use>
                          </svg>
                          <span class="slds-assistive-text">Show More</span>
                        </button>
                    </td> -->
                  </tr>
                  <tr class="slds-hint-parent">
                    <td class="slds-cell-shrink" data-label="Select Row">
                      <label class="slds-checkbox">
                          <input type="checkbox" name="options">
                          <span class="slds-checkbox--faux"></span>
                          <span class="slds-assistive-text">Select Row</span>
                        </label>
                    </td>
                    <th class="slds-truncate" scope="row" data-label="Opportunity Name"><img src="../images/icons/ticket-table/Featured Icon.svg" alt="" srcset="">$10,000</th>
                    <td class="slds-truncate" data-label="Account Name">$209.99</td>        
                    <td class="" data-label="Confidence"><img src="../images/icons/ticket-table/Dot3.svg" alt="" srcset="">Success</td>         
                    <td class="" data-label="Confidence">paystack reference</td>
                    <td class="" data-label="Close Date"><img src="../images/icons/ticket-table/CalendarBlank-r.svg" alt="" srcset="">2 minutes ago</td>
                    <!-- <td class="" data-label="Amount">$25k</td> -->
                    <!-- <td class="slds-truncate" data-label="Contact"><a href="#void">jrogers@cloudhub.com</a></td>
                    <td class="slds-cell-shrink" data-label="Actions">
                      <button class="slds-button slds-button--icon-border-filled slds-button--icon-x-small">
                          <svg aria-hidden="true" class="slds-button__icon slds-button__icon--hint slds-button__icon--small">
                            <use xlink:href="/assets/icons/utility-sprite/svg/symbols.svg#down"></use>
                          </svg>
                          <span class="slds-assistive-text">Show More</span>
                        </button>
                    </td> -->
                  </tr>
                </tbody>
            </table>
        </div>
        
    </div>
  
  </div>
  <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=63807ab0318db8bd26b06087" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="../js/webflow.js" type="text/javascript"></script>
  <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
  <script src="../backend/dashboard.js"></script>
  
  <script>
  
  </script>

</body>
</html>