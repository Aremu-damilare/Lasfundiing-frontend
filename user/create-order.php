<?php
header('Cache-Control: no-store, no-cache, must-revalidate, max-age=0');
header('Pragma: no-cache');
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');

$etag = md5_file(__FILE__);
header("ETag: $etag");
if (isset($_SERVER['HTTP_IF_NONE_MATCH']) && $_SERVER['HTTP_IF_NONE_MATCH'] == $etag) {
    header('HTTP/1.1 304 Not Modified');
    exit;
}
?>

<!DOCTYPE html><!--  This site was created in Webflow. https://www.webflow.com  -->
<!--  Last Published: Wed May 03 2023 23:06:33 GMT+0000 (Coordinated Universal Time)  -->
<html >
<head>
  <meta charset="utf-8">
  <title>Order an account - Lasfunding</title>
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

  
  <link rel="stylesheet" href="../css/pageloader.css">
  <link rel="stylesheet" href="../css/user/ticket-table.css">
  <link rel="stylesheet" href="../css/scrollbar.css">

  
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
    .toggle-block {
        display: "";
    }
    .toggle-none {
        display: none;
    }
  </style>
  
  <style>
    a#BuyAccount {
      background: #17b517;
      padding: 1px;
      display: block;
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
    <img class="logo-image" src="https://lasfunding.com/Lasfund-Logo.png" alt="Logo">
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

<div class="topbar" style="display: none;">
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
  <!-- <div class="cart-icon">
    <i class="fa fa-shopping-cart"></i>
    <span class="cart-count">0</span>
    <a href="#" class="w-inline-block">
      <img src="../images/cart.svg" loading="lazy" alt="" class="image"></a>
  </div> -->
  <!-- cart icon end -->
  
  <!-- <button class="sidebar-toggle"><img src="file:///C:/Users/Aremu_damilare/JS_projects/lasfunding/final_frontend/user/user/images/icons/hamburger.svg" alt="" srcset="file:///C:/Users/Aremu_damilare/JS_projects/lasfunding/final_frontend/user/user/dashboard.html "></button> -->
  </div>

  <div data-animation="default" class="rl_navbar1_component w-nav" data-easing2="ease" fs-scrolldisable-element="smart-nav" data-easing="ease" data-collapse="medium" role="banner" data-no-scroll="1" data-duration="400">
    <div class="rl_navbar1_container">
      <nav role="navigation" class="rl_navbar1_menu is-page-height-tablet w-nav-menu">
        <div class="text-block-36"></div>           
        <div class="right-navbar-wrapper">
        <div class="right-navbar-link">
          <svg width="34" height="34" viewBox="0 0 34 34" fill="white" xmlns="http://www.w3.org/2000/svg">
            <path d="M10.0742 10.8307V14.637C10.0742 15.0512 10.41 15.387 10.8242 15.387H14.6277C15.0419 15.387 15.3777 15.0512 15.3777 14.637V10.8307C15.3777 10.4165 15.0419 10.0807 14.6277 10.0807H10.8242C10.41 10.0807 10.0742 10.4165 10.0742 10.8307Z" stroke="#8E8B8A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M18.5625 10.8292V14.6355C18.5625 15.0497 18.8983 15.3855 19.3125 15.3855H23.1159C23.5302 15.3855 23.8659 15.0497 23.8659 14.6355V10.8292C23.8659 10.415 23.5302 10.0792 23.1159 10.0792H19.3125C18.8983 10.0792 18.5625 10.415 18.5625 10.8292Z" stroke="#8E8B8A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M10.0703 19.3092V23.1155C10.0703 23.5297 10.4061 23.8655 10.8203 23.8655H14.6238C15.038 23.8655 15.3738 23.5297 15.3738 23.1155V19.3092C15.3738 18.895 15.038 18.5592 14.6238 18.5592H10.8203C10.4061 18.5592 10.0703 18.895 10.0703 19.3092Z" stroke="#8E8B8A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M18.5586 19.3092V23.1155C18.5586 23.5297 18.8944 23.8655 19.3086 23.8655H23.112C23.5262 23.8655 23.862 23.5297 23.862 23.1155V19.3092C23.862 18.895 23.5262 18.5592 23.112 18.5592H19.3086C18.8944 18.5592 18.5586 18.895 18.5586 19.3092Z" stroke="#8E8B8A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
            
          <a href="./dashboard.php" class="rl_navbar1_link w-nav-link">Dashboard</a>                 
        </div>
        </div>
        <div class="right-navbar-wrapper">
          <div class="text-block-36">TRANSACTION</div>         
          <div class="right-navbar-link"><img src="../images/CurrencyCircleDollar-1.svg" loading="lazy" alt="" class="sign-out-icon">
            <a href="./withdrawals.php" class="rl_navbar1_link w-nav-link">Withdrawals</a>
          </div>
        </div>
        <div class="right-navbar-wrapper">
          <div class="text-block-36">MENU</div>
          <div class="right-navbar-link current-page">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="white">
                  <path d="M19.572 7.69116H4.42195C4.2374 7.69203 4.05949 7.76007 3.92146 7.88257C3.78343 8.00507 3.69473 8.17365 3.67195 8.35679L2.3407 20.3568C2.32886 20.4613 2.33915 20.5672 2.37091 20.6675C2.40267 20.7679 2.45518 20.8604 2.52503 20.9391C2.59488 21.0178 2.68051 21.0809 2.77635 21.1243C2.8722 21.1677 2.9761 21.1905 3.08133 21.1912H20.9126C21.0178 21.1905 21.1217 21.1677 21.2175 21.1243C21.3134 21.0809 21.399 21.0178 21.4689 20.9391C21.5387 20.8604 21.5912 20.7679 21.623 20.6675C21.6547 20.5672 21.665 20.4613 21.6532 20.3568L20.322 8.35679C20.2992 8.17365 20.2105 8.00507 20.0724 7.88257C19.9344 7.76007 19.7565 7.69203 19.572 7.69116V7.69116Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                  <path d="M8.25 10.6912V7.69116C8.25 6.6966 8.64509 5.74277 9.34835 5.03951C10.0516 4.33625 11.0054 3.94116 12 3.94116C12.9946 3.94116 13.9484 4.33625 14.6517 5.03951C15.3549 5.74277 15.75 6.6966 15.75 7.69116V10.6912" stroke="#8E8B8A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>                  
            <a href="./orders.php" class="rl_navbar1_link w-nav-link">Orders</a>
          </div>

           <div class="right-navbar-link">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="white" xmlns="http://www.w3.org/2000/svg">
                <path d="M8.91507 13.8682L15.0865 8.26823M9.42938 8.7349H9.43967M14.5722 13.4016H14.5825M19.2008 20.4016V5.46823C19.2008 4.4373 18.2798 3.60156 17.1436 3.60156H6.85792C5.72179 3.60156 4.80078 4.4373 4.80078 5.46823V20.4016L8.40078 18.5349L12.0008 20.4016L15.6008 18.5349L19.2008 20.4016ZM9.94364 8.7349C9.94364 8.99263 9.71338 9.20156 9.42935 9.20156C9.14532 9.20156 8.91507 8.99263 8.91507 8.7349C8.91507 8.47716 9.14532 8.26823 9.42935 8.26823C9.71338 8.26823 9.94364 8.47716 9.94364 8.7349ZM15.0865 13.4016C15.0865 13.6593 14.8562 13.8682 14.5722 13.8682C14.2882 13.8682 14.0579 13.6593 14.0579 13.4016C14.0579 13.1439 14.2882 12.9349 14.5722 12.9349C14.8562 12.9349 15.0865 13.1439 15.0865 13.4016Z" stroke="#8e8b8a" stroke-width="1.58" stroke-linecap="round" stroke-linejoin="round"></path>
              </svg>                  
            <a href="./tickets.php" class="rl_navbar1_link w-nav-link" >Tickets </a>
          </div>
          <!-- <div class="right-navbar-link"><img src="../images/CreditCard.svg" loading="lazy" alt="" class="sign-out-icon">
            <a href="./payment-methods.php" class="rl_navbar1_link w-nav-link">Payment Method</a>
          </div> -->
        </div>
        <div class="right-navbar-wrapper">
          <div class="text-block-36">PERSONAL</div>
          <div class="right-navbar-link"><img src="../images/UserCircle-1.svg" loading="lazy" alt="" class="image-9">
            <a href="./profile.php" class="rl_navbar1_link w-nav-link">Profile</a>
          </div>
          <!-- <div class="right-navbar-link"><img src="../images/Bell-1.svg" loading="lazy" alt="" class="sign-out-icon">
            <a href="#" class="rl_navbar1_link  w-nav-link">Notification</a>
          </div> -->
          <div class="right-navbar-link"><img src="../images/Vector.svg" loading="lazy" alt="" class="sign-out-icon">
            <a href="./kyc.php" class="rl_navbar1_link w-nav-link">KYC</a>
          </div>
        </div>
        <div class="right-navbar-wrapper last-wrapper">
          <!-- <div class="right-navbar-link"><img src="../images/Gear-1.svg" loading="lazy" alt="" class="image-9">
            <a href="#" class="rl_navbar1_link w-nav-link">Settings</a>
          </div> -->
          <div class="right-navbar-link"><img src="../images/SignOut-1.svg" loading="lazy" alt="" class="sign-out-icon">
            <a href="#"  id="SignOut" class="rl_navbar1_link w-nav-link">Sign out</a>
          </div>
        </div>
        <div class="">
          <div class="text-block-37"></div>
          <div class="rect-box">
            <div class="text-block-38">Help Centre</div>
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
      <div class="gradient-header" style="display: flex; flex-direction: column; justify-content: flex-start; align-items: baseline;">
        <!-- <div class="text-block-56">Dashboard</div> -->       
        <div>
          <button id="creatTicketBtn">
            <span style="color: #E04800;float: right;"><img src="../images/Copy.svg" alt=""> Order an account</span>
          </button>
        </div>
      </div>
        
      <div class="analyzer-section dashboard wf-section" style="overflow-x: auto;">              
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
              flex-wrap: nowrap;
              width: 100%;
              flex-direction: column;
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
                place-self: center;
                background-color: rgba(0, 0, 0, 0);
                border: 1px solid rgba(224, 72, 0, .88);
                padding-left: 10px;
                margin: 4px;
                padding-right: 13px;
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
                            height: 80%;
                            
                        }
                        </style>
                        <div class="start-balance">                                                                                  
                    </div>                        
                      </div>
                  </div>
                  <div class='account-type-column'>
                    <div class='account-type-column-account-type-column'>                  
    
                        <div class="">Set-Up Fee </div>
                        <span class="link"><span class="set-up-fee" ></span> <span>(+VAT)</span>
                        </span>                
    
                        <div>Starting Monthly Fee</div>
                        <span class="link "><span class="starting-monthly-fee" ></span> <span>(+VAT)</span>
                        </span>
    
                                  
                  </div>
                  
                  <div class='account-type-column'>
                    <div class='account-type-column-account-type-column'>
                        <div class="mb-2">Get Funded: <span class="link get-funded-for"></span></div>
                        <div><a href="#" id="BuyAccount" class="a-btn hero-btn ">Buy Now</a></div>
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
                      <th>Step 5</th>    
                  <tr>  
                  </thead>
                  <tbody id="table-body">
                  <!-- <tr>
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
                  </tr>               -->
                  </tbody>               
              </table>
            </div>               
            
        </div>           
      </div>
      
  </div>

  </div>
  <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=63807ab0318db8bd26b06087" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="../js/webflow.js" type="text/javascript"></script>
  <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js?<?php echo time(); ?>"></script><![endif] -->
        

  <script src="../backend/user/getUserDetails.js?<?php echo time(); ?>"></script>
  <script src="../backend/user/topBarPlaceholders.js?<?php echo time(); ?>"></script>
  <script src="../backend/user/pageLoader.js?<?php echo time(); ?>"></script>
  <script src="../backend/config/_service-worker.js?<?php echo time(); ?>"></script>
  <script src="../backend/user/logOut.js?<?php echo time(); ?>"></script>

  <script src="../backend/user/getUserOrders.js?<?php echo time(); ?>"></script>

  <script>
    async function fetchUserData() {
      try {
        const userDetailsObj = await userDetails(accessToken, baseUrl);
        console.log("userDetailsObj", userDetailsObj);
        topBarPlaceholders(userDetailsObj);
        pageLoader(false);
      } catch (error) {      
        console.error("An error occurred:", error);
      }
    }
     
      fetchUserData();      

    
    function formatDate(dateString) {
      const createdAt = new Date(dateString);
      const formattedDate = createdAt.toLocaleDateString('en-US', {
        year: 'numeric',
        month: '2-digit',
        day: '2-digit'
      });
      return formattedDate;
    }

  </script>

  
<script>                            
    // Define the URL to make the request to
  const endpointUrl = `${baseUrl}/custom/admin/store/list/`;

  // Create headers object with authorization
  const headers = new Headers({
      'Content-Type': 'application/json',
      //'Authorization': 'Bearer ' + accessToken
  });

  // Create a request object with the headers
  const request = new Request(endpointUrl, {
      method: 'GET', // You can adjust the HTTP method as needed (e.g., GET, POST)
      headers: headers
  });

  // Fetch data from the API
  fetch(request)
      .then(response => response.json())
      .then(data => {
          // Function to populate a table row
          function populateRow(index, setup_fee, starting_monthly_fee, balance, profitTarget, profitShare, nextStepTarget, accountFee) {
            console.log(balance[0])
              const tbody = document.querySelector("#table-body");
              const row = document.createElement("tr");                    
              row.setAttribute("data-account-type-row", balance[0])
              row.innerHTML = `     
              <td>Balance</td><td>$${balance[0]}</td><td>$${balance[1]}</td><td>$${balance[2]}</td><td>$${balance[3]}</td><td>$${balance[4]}</td>`;                                       
              tbody.appendChild(row);

              const row2 = document.createElement("tr");                    
              row2.setAttribute("data-account-type-row", balance[0])
              row2.innerHTML += `
              <td>Profit target</td><td>${profitTarget[0]}</td><td>${profitTarget[1]}</td><td>${profitTarget[2]}</td><td>${profitTarget[3]}</td><td>${profitTarget[4]}</td>`;
              tbody.appendChild(row2);


              const row3 = document.createElement("tr");                    
              row3.setAttribute("data-account-type-row", balance[0])
              row3.innerHTML += `
              <td>Profit Share</td><td>${profitShare[0]}</td><td>${profitShare[1]}</td><td>${profitShare[2]}</td><td>${profitShare[3]}</td><td>${profitShare[4]}</td>`;
              tbody.appendChild(row3);

              const row4 = document.createElement("tr");                    
              row4.setAttribute("data-account-type-row", balance[0])
              row4.innerHTML += `
              <td>Next Step Target</td><td>${nextStepTarget[0]}</td><td>${nextStepTarget[1]}</td><td>${nextStepTarget[2]}</td><td>${nextStepTarget[3]}</td><td>${nextStepTarget[4]}</td>`;
              tbody.appendChild(row4);

              
              const row5 = document.createElement("tr");                    
              row5.setAttribute("data-account-type-row", balance[0])
              row5.innerHTML += `
              <td>Account Fee</td><td>${accountFee[0]}</td><td>${accountFee[1]}</td><td>${accountFee[2]}</td><td>${accountFee[3]}</td><td>${accountFee[4]}</td>`;
              tbody.appendChild(row5);

              const startBalance = document.querySelector(".start-balance");
              startBalance.innerHTML += `<a href="#" data-account-type="${balance[0]}" class="change-account-type a-btn transparent  ">$${balance[0]}</a>`;

              const setUpFee = document.querySelector(".set-up-fee");
              setUpFee.innerHTML += `<span data-set-up-fee="${balance[0]}"> ${setup_fee} </span>`;

              const startingMonthlyFee = document.querySelector(".starting-monthly-fee");
              startingMonthlyFee.innerHTML += `<span data-set-up-fee="${balance[0]}"> ${starting_monthly_fee} </span>`;


              const getFundedFor = document.querySelector(".get-funded-for");
              getFundedFor.innerHTML += `<span data-get-funded-for="${balance[0]}"> $${balance[0]} </span>`;

          }
  

          // Loop through the API data and populate the table
          var index = 0;
          data.forEach(item => {                  
              populateRow(index,   
                  item.setup_fee,                        
                  item.starting_monthly_fee,
                  item.balance,
                  item.profit_target,
                  item.profit_share,
                  item.next_step_target,
                  item.account_fee
              );
              index++;
          });

          changeAccountType()
      })
      .catch(error => console.error("Error fetching data: ", error));
</script>



<script>
function changeAccountType(){          

const changeAccountTypeLinks = document.querySelectorAll(".change-account-type");

// Add click event listeners to each link
changeAccountTypeLinks.forEach(link => {
  link.addEventListener("click", function (event) {
    
    changeAccountTypeLinks.forEach(otherLink => {
      otherLink.classList.remove('red', 'blue');
    });

    // Add the 'blue' class to all links
    changeAccountTypeLinks.forEach(otherLink => {
      otherLink.classList.add('blue');
    });

    // Remove the 'blue' class and add the 'red' class to the clicked element
    link.classList.remove('blue');
    link.classList.add('red');
      event.preventDefault();

      // Get the value of the data-account-type attribute
      const accountType = this.getAttribute("data-account-type");
        
      const tableRows = document.querySelectorAll("[data-account-type-row]");
      const tableSetupFee = document.querySelectorAll("[data-set-up-fee]");
      const tableStartingMonthlyFee = document.querySelectorAll("[data-starting-monthly-fee]");
      const tableGetFundedFor = document.querySelectorAll("[data-get-funded-for]");

      const buyNow = document.querySelector("#BuyAccount");
      buyNow.setAttribute("data-account-type", accountType)

      tableRows.forEach(tableRow => {
          if (tableRow.getAttribute("data-account-type-row") === accountType) {
            tableRow.classList.add("toggle-block");
            tableRow.classList.remove("toggle-none");
          } else {
            tableRow.classList.remove("toggle-block");
            tableRow.classList.add("toggle-none");
          }
      });

      tableSetupFee.forEach(tableRow => {
        if (tableRow.getAttribute("data-set-up-fee") === accountType) {
          tableRow.classList.add("toggle-block");
          tableRow.classList.remove("toggle-none");
        } else {
          tableRow.classList.remove("toggle-block");
          tableRow.classList.add("toggle-none");
        }
    });

    tableStartingMonthlyFee.forEach(tableRow => {
      if (tableRow.getAttribute("data-starting-balance") === accountType) {
        tableRow.classList.add("toggle-block");
        tableRow.classList.remove("toggle-none");
      } else {
        tableRow.classList.remove("toggle-block");
        tableRow.classList.add("toggle-none");
      }
  });

  tableGetFundedFor.forEach(tableRow => {
    if (tableRow.getAttribute("data-get-funded-for") === accountType) {
      tableRow.classList.add("toggle-block");
      tableRow.classList.remove("toggle-none");
    } else {
      tableRow.classList.remove("toggle-block");
      tableRow.classList.add("toggle-none");
    }
});
  });
});
}

</script>

<script>
// Function to check for the element and click it when found
function checkAndClickElement() {
const elementToClick = document.querySelector('a[data-account-type="5000"]');
if (elementToClick) {
  elementToClick.click();
  clearInterval(intervalId); // Stop checking once the element is found and clicked
}
}

// Set an interval to check for the element every 100 milliseconds (adjust as needed)
const intervalId = setInterval(checkAndClickElement, 100);

</script>

<script>
// Get the button element by its id
var buyButton = document.getElementById('BuyAccount');

// Add a click event listener to the button
buyButton.addEventListener('click', function(event) {
  console.log("xxxxxxxxxxxxxxx")
// Prevent the default behavior of the anchor tag (preventing the page from reloading)
event.preventDefault();

// Get the value of the "data-account-type" attribute
var accountTypeValue = buyButton.getAttribute('data-account-type');

// Check if the "data-account-type" attribute exists and has a value
if (accountTypeValue !== null) {
    // Redirect the user to the register.php page with the account_type parameter
    window.location.href = 'checkout.php?account_type=' + encodeURIComponent(accountTypeValue);
} else {
    // Handle the case where the attribute doesn't exist or has no value
    // You can display an error message or take other appropriate action
}
});


</script>



</body>
</html>