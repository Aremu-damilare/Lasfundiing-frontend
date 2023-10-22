<!DOCTYPE html><!--  This site was created in Webflow. https://www.webflow.com  -->
<!--  Last Published: Wed May 03 2023 23:06:33 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="6422ec78a05bb3194102a79b" data-wf-site="63807ab0318db8bd26b06087">
<head>
  <meta charset="utf-8">
  <title>Manage Plans - Lasfunding</title>
  <meta content="Dashboard" property="og:title">
  <meta content="Dashboard" property="twitter:title">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="Webflow" name="generator">
  <link href="./css/normalize.css" rel="stylesheet" type="text/css">
  <link href="./css/webflow.css" rel="stylesheet" type="text/css">
  <link href="./css/lasfunding.webflow.css" rel="stylesheet" type="text/css">
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

<style>
     /*! CSS Used from: http://localhost/lasfunding_front/css/normalize.css */
a{background-color:transparent;}
a:active,a:hover{outline:0;}
img{border:0;}
svg:not(:root){overflow:hidden;}
input{color:inherit;font:inherit;margin:0;}
input{line-height:normal;}
input[type='checkbox']{box-sizing:border-box;padding:0;}
/*! CSS Used from: http://localhost/lasfunding_front/css/webflow.css */
*{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;}
img{max-width:100%;vertical-align:middle;display:inline-block;}
.w-button{display:inline-block;padding:9px 15px;background-color:#3898EC;color:white;border:0;line-height:inherit;text-decoration:none;cursor:pointer;border-radius:0;}
input.w-button{-webkit-appearance:button;}
.w-form{margin:0 0 15px;}
.w-form-done{display:block;padding:20px;text-align:center;background-color:#dddddd;}
.w-form-fail{display:block;margin-top:10px;padding:10px;background-color:#ffdede;}
label{display:block;margin-bottom:5px;font-weight:bold;}
.w-input{display:block;width:100%;height:38px;padding:8px 12px;margin-bottom:10px;font-size:14px;line-height:1.42857143;color:#333333;vertical-align:middle;background-color:#ffffff;border:1px solid #cccccc;}
.w-input:focus{border-color:#3898EC;outline:0;}
.w-form-label{display:inline-block;cursor:pointer;font-weight:normal;margin-bottom:0px;}
.w-container{margin-left:auto;margin-right:auto;max-width:940px;}
.w-container:before,.w-container:after{content:" ";display:table;grid-column-start:1;grid-row-start:1;grid-column-end:2;grid-row-end:2;}
.w-container:after{clear:both;}
@media screen and (max-width: 991px){
.w-container{max-width:728px;}
}
@media screen and (max-width: 479px){
.w-container{max-width:none;}
}
/*! CSS Used from: http://localhost/lasfunding_front/css/lasfunding.webflow.css */
.w-checkbox{margin-bottom:5px;padding-left:20px;display:block;}
.w-checkbox:before{content:" ";grid-area:1 / 1 / 2 / 2;display:table;}
.w-checkbox:after{content:" ";clear:both;grid-area:1 / 1 / 2 / 2;display:table;}
.w-checkbox-input{float:left;margin:4px 0 0 -20px;line-height:normal;}
.w-checkbox-input{float:left;margin:4px 0 0 -20px;line-height:normal;}
label{margin-bottom:5px;font-weight:bold;display:block;}
.modal-wrapper{z-index:9999;background-color:rgba(73, 73, 73, .8);flex-direction:row;justify-content:center;align-items:center;display:none;position:fixed;top:0%;bottom:0%;left:0%;right:0%;}
.email-field{border-radius:8px;margin:14px auto 20px;padding-left:12px;padding-right:12px;}
.form-container{background-color:#fff;border:1px solid rgba(73, 73, 73, .3);border-radius:24px;position:absolute;}
.form-container.login{flex-direction:row;display:block;}
.form-container.sign-up{max-width:600px;min-height:500px;grid-column-gap:16px;grid-row-gap:16px;flex-direction:row;grid-template-rows:auto auto;grid-template-columns:1fr 1fr;grid-auto-columns:1fr;justify-content:center;align-items:center;margin-top:40px;margin-bottom:40px;display:none;}
.form-header{text-align:center;margin:0;font-size:20px;font-weight:600;line-height:24px;}
.modal-header{border:1px rgba(73, 73, 73, .28);border-bottom-style:solid;border-radius:0;margin-bottom:32px;padding:24px 180px;position:relative;}
.form-block{border-radius:24px;flex-direction:column;align-items:center;margin-right:0;padding-left:0;display:flex;}
.password-field{border-radius:8px;margin-bottom:20px;margin-left:auto;margin-right:auto;}
.submit-button{width:75%;text-align:center;background-color:rgba(224, 72, 0, .88);border-radius:20px;margin-top:25px;margin-left:0;margin-right:0;padding:7px;font-size:14px;font-weight:600;line-height:21px;}
.checkbox-label{color:#8e8b8a;margin-bottom:0;font-weight:400;}
.checkbox-field{margin-bottom:0;margin-left:0;margin-right:0;}
.forgot-pw-wrapper{color:rgba(224, 72, 0, .88);white-space:nowrap;font-weight:400;text-decoration:none;}
.remember-me-section{width:100%;grid-column-gap:200px;grid-row-gap:200px;flex-flow:row;justify-content:flex-start;align-items:center;margin-left:0;margin-right:0;display:flex;}
.form{width:470px;border-bottom:1px #8e8b8a;flex-direction:column;align-items:center;margin-top:0;margin-left:0;margin-right:0;padding:20px 10px;display:flex;}
.form.login{margin-top:0;margin-bottom:20px;}
.link{color:rgba(224, 72, 0, .88);text-decoration:none;}
.text-block-15{margin-top:16px;margin-bottom:16px;}
.close-modal-button{width:30px;float:none;clear:none;cursor:pointer;margin-right:5px;padding:9px;position:absolute;top:0%;bottom:auto;left:auto;right:0%;}
.forgot-password{display:flex;}
.eye-icon{width:20px;cursor:pointer;position:static;top:237px;bottom:0%;left:0%;right:0%;}
.eye{position:absolute;top:6px;left:90%;}
.eye.confirm{top:6px;}
.password-input-block{width:48%;height:auto;position:relative;}
.password-input-block.login{width:100%;}
@media screen and (min-width: 1440px){
.modal-wrapper{display:none;}
.email-field{margin-bottom:32px;}
.form-container{max-width:600px;min-height:500px;background-color:#fff;border-radius:24px;}
.form-container.login{min-height:auto;display:flex;}
.form-container.sign-up{display:none;}
.form-header{line-height:32px;}
.modal-header{padding-top:40px;padding-bottom:40px;}
.form-block{align-items:center;margin-bottom:0;}
.password-field{margin-bottom:32px;}
.remember-me-section{grid-column-gap:0px;grid-row-gap:0px;}
.remember-me-section.login{grid-column-gap:200px;grid-row-gap:200px;}
.form{width:100%;margin-left:0;margin-right:0;}
.form.login{margin-bottom:40px;}
.eye{top:6px;bottom:19.7rem;left:87%;}
.eye.confirm{bottom:15.3rem;}
}
@media screen and (max-width: 991px){
.eye{top:6px;}
}
@media screen and (max-width: 479px){
.email-field{height:auto;margin-bottom:20px;}
.form-container{max-width:none;}
.form-header{font-size:18px;}
.modal-header{width:100%;margin-bottom:20px;padding:25px 20px;}
.password-field{height:auto;}
.submit-button{width:auto;margin:13px 24px 12px;padding:9px 50px;font-size:14px;line-height:16px;}
.remember-me-section{grid-column-gap:10px;grid-row-gap:10px;font-size:12px;}
.form{width:auto;margin-left:0;margin-right:0;padding:0 30px;}
.text-block-15{margin-top:4px;margin-bottom:4px;font-size:12px;}
.eye{padding:0;top:6px;left:82%;}
}
/*! CSS Used from: Embedded */
.mini-loader-container{display:none;align-items:center;flex-direction:column;}
.mini-loader{width:60px;stroke-width:5px;stroke:#fff;fill:transparent;stroke-dasharray:157.1;stroke-dashoffset:0;animation:rot 4s infinite linear, clr 9s infinite linear;}
/*! CSS Used keyframes */
@keyframes rot{0%{transform:rotate(0deg);stroke-dashoffset:157.1;}50%{stroke-dashoffset:0;}100%{transform:rotate(360deg);stroke-dashoffset:-157.1;}}
@keyframes clr{0%,         100%{stroke:#F5C1A9;}20%{stroke:#E04800;}40%{stroke:#E04800;}60%{stroke:#F5C1A9;}80%{stroke:#F5C1A9;}}
    </style>

    <style>
      li {
    display: inline-flex;
    margin: 2px;
    border: solid 1px gray;
    padding: 3px;
    border-radius: 10px;
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
	  <!-- <div class="search-container">
      <form action="#">
        <span class="search-container-border">
        <input type="text" placeholder="Search...">
        <button type="submit"><i class="fa fa-search"></i></button>
      </span>
      </form>
    </div> -->
    <!-- navbar search form end-->

    
    <!-- notification icons -->
    <!-- <div class="notification">
      <span class="navbar-item-notification"><i class="fa fa-envelope"></i>  </span>
      <span class="navbar-item-notification"> <i class="fa fa-bell"></i>  </span>
    </div> -->
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
            <a href="./dashboard.php" class="rl_navbar1_link w-nav-link">Dashboard </a>
          </div>

          <div class="right-navbar-link"><img src="../images/icons/admin/RreceiptTax.svg" loading="lazy" alt="" class="sign-out-icon">
            <a href="./tickets.php" class="rl_navbar1_link w-nav-link">Tickets </a>
          </div>
          
          <div class="right-navbar-link">
            <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M19.572 7.69116H4.42195C4.2374 7.69203 4.05949 7.76007 3.92146 7.88257C3.78343 8.00507 3.69473 8.17365 3.67195 8.35679L2.3407 20.3568C2.32886 20.4613 2.33915 20.5672 2.37091 20.6675C2.40267 20.7679 2.45518 20.8604 2.52503 20.9391C2.59488 21.0178 2.68051 21.0809 2.77635 21.1243C2.8722 21.1677 2.9761 21.1905 3.08133 21.1912H20.9126C21.0178 21.1905 21.1217 21.1677 21.2175 21.1243C21.3134 21.0809 21.399 21.0178 21.4689 20.9391C21.5387 20.8604 21.5912 20.7679 21.623 20.6675C21.6547 20.5672 21.665 20.4613 21.6532 20.3568L20.322 8.35679C20.2992 8.17365 20.2105 8.00507 20.0724 7.88257C19.9344 7.76007 19.7565 7.69203 19.572 7.69116V7.69116Z" stroke="gray" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M8.25 10.6912V7.69116C8.25 6.6966 8.64509 5.74277 9.34835 5.03951C10.0516 4.33625 11.0054 3.94116 12 3.94116C12.9946 3.94116 13.9484 4.33625 14.6517 5.03951C15.3549 5.74277 15.75 6.6966 15.75 7.69116V10.6912" stroke="gray" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>           
            <a href="./orders.php"  class="rl_navbar1_link w-nav-link">Orders </a>
          </div>

          <div class="right-navbar-link"><img src="../images/icons/admin/outline.svg" loading="lazy" alt="" class="sign-out-icon">
            <a href="./users.php" class="rl_navbar1_link w-nav-link">Users</a>
          </div>

          <div class="right-navbar-link">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M12 6.75V8.25" stroke="gray" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M12 15.75V17.25" stroke="#8E8B8A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M12 21C16.9706 21 21 16.9706 21 12C21 7.02944 16.9706 3 12 3C7.02944 3 3 7.02944 3 12C3 16.9706 7.02944 21 12 21Z" stroke="gray" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M9.75 15.75H13.125C13.6223 15.75 14.0992 15.5525 14.4508 15.2008C14.8025 14.8492 15 14.3723 15 13.875C15 13.3777 14.8025 12.9008 14.4508 12.5492C14.0992 12.1975 13.6223 12 13.125 12H10.875C10.3777 12 9.90081 11.8025 9.54917 11.4508C9.19754 11.0992 9 10.6223 9 10.125C9 9.62772 9.19754 9.15081 9.54917 8.79917C9.90081 8.44754 10.3777 8.25 10.875 8.25H14.25" stroke="gray" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <a href="./manage-plans.php" style="color: #E04800;font-style: oblique;"  class="rl_navbar1_link w-nav-link"> Manage plans</a>
          </div>

          <div class="right-navbar-link"><img src="../images/icons/admin/ArrowBendUpLeft.svg" loading="lazy" alt="" class="sign-out-icon">
            <a href="./withdrawals.php" class="rl_navbar1_link w-nav-link">Withdrawals</a>
          </div>

          <div class="right-navbar-link"><img src="../images/icons/admin/ChatsTeardrop.svg" loading="lazy" alt="" class="sign-out-icon">
            <a href="./kycs.php" class="rl_navbar1_link w-nav-link">KYC</a>
          </div>
          
          <div class="right-navbar-link"><img src="../images/icons/admin/Gear.svg" loading="lazy" alt="" class="sign-out-icon">
            <a href="./settings.php" class="rl_navbar1_link w-nav-link">Settings</a>
          </div>

          <div class="right-navbar-link"><img src="../images/icons/admin/SignOut.svg" loading="lazy" alt="" class="sign-out-icon">
            <a href="#" class="rl_navbar1_link w-nav-link">Sign out</a>
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
        <span>Manage plans</span>        
      </div>
      <div id="addAccountBtn"><span style="color: #E04800;float: right;">+ Add</span></div>
    </div>
    <div class="analyzer-section dashboard wf-section" style="display: block;">
      
      <style>       
        .card-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            max-width: 1000px;
        }

        .card {
          display: flex;
          width: calc(33.33% - 20px);
          margin: 10px;
          background-color: white;
          border: 1px solid #ddd;
          padding: 20px;
          box-sizing: border-box;
          box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
          flex-direction: column;
          align-items: stretch;
        }

        @media (max-width: 768px) {
            .card {
                width: calc(100% - 20px);
            }
        }

        .a-btn {
          color: #fff;
          text-align: center;
          /* letter-spacing: 2px; */
          /* text-transform: none; */
          background-color: rgba(224, 72, 0, .88);
          border-radius: 20px;
          margin-top: 30px;
          /* margin-right: 0; */
          padding: 5px 24px;
          font-size: 12px;
          line-height: 20px;
          text-decoration: none;
          transition: all .2s;
      }
      </style>

      <div class="card-container">        
          <!-- <div class="card">            
              <p>Account type</p>
              <br>
              <p>Starting Fee</p>
              <p>$5,000.00</p>
              <br>
              <p>Setup Fee</p>
              <p>$100.00</p>
              <a class="a-btn hero-btn delete-account-type"><img src="./images/icons/Vector.svg" alt=""> Delete</a>
          </div>         -->
      </div>
    </div>
  
  </div>

  
<div style="overflow: auto;display: none; opacity: 0;" class="modal-wrapper">
    <div style="opacity: 1; display: flex;" class="form-container  w-container">
      <div class="form-block w-form" style="overflow-y: auto;height: 80vh;">
        <div class="modal-header">

        <div class="w-form-done" tabindex="-1" role="region" style="display: none;">
          <div>Account added successfully!</div>
        </div>
        <div class="w-form-fail" tabindex="-1" role="region" style="display: none;">
        <div>Account addition failed!</div>
        </div>
        
          <div class="form-header">Add account types</div>
          <div data-w-id="c0277bb6-3121-4cad-bcc9-21686fabc09e" class="close-modal-button"><img src="http://localhost/lasfunding_front/images/Asset-4.svg" loading="lazy" alt=""></div>
        </div>
        <form id="addAccountForm" name="account-type-form" data-name="account-type Form" method="post" data-ms-form="" class="form " aria-label="account-type Form">
         
          <input type="text" class="w-input"  id="Description" name="description" data-name="description" placeholder="Enter description" required>
          <input type="text" class="w-input"  id="Amount" name="number" data-name="amount" placeholder="Enter amount"  required>

          <input type="text" class="w-input"  id="setupFee" name="setupFee" data-name="setupFee" placeholder="Enter setup fee"  required>
          <input type="text" class="w-input"  id="startingMonthlyFee" name="startingMonthlyFee" data-name="startingMonthlyFee" placeholder="Enter starting monthly fee"  required>
          <input type="text" class="w-input"  id="startingBalance" name="startingBalance" data-name="startingBalance" placeholder="Enter starting balance"  required>
          

          <input type="text" class="w-input"   id="BalanceInputField" placeholder="Enter balance"> 
          <button type="button" onclick="addToBalanceList()">Add to Balance steps</button>
          <ul id="BalanceList"></ul>

          <input type="text" class="w-input"   id="ProfitTargetInputField" placeholder="Enter profit target">
          <button type="button" onclick="addToProfitTargetList()">Add to Profit Target steps</button>
          <ul id="ProfitTargetList"></ul>
          
          <input type="text" class="w-input"  id="ProfitShareInputField" placeholder="Enter profit share">
          <button type="button" onclick="addToProfitShareList()">Add to Profit Share steps</button>
          <ul id="ProfitShareList"></ul>

          <input type="text" class="w-input"  id="NextStepTargetInputField" placeholder="Enter next step target">
          <button type="button" onclick="addToNextStepTargetList()">Add to Next Step Target steps</button>
          <ul id="NextStepTargetList"></ul>

          <input type="text" class="w-input"  id="AccountFeeInputField" placeholder="Enter account fee">
          <button type="button" onclick="addToAccountFeeList()">Add to Account Fee steps</button>
          <ul id="AccountFeeList"></ul>

                    
          <input type="submit" value="Add" data-wait="Please wait..." class="submit-button w-button">
          <input type="reset" id="resetButton" value="Reset" class="reset-button w-button">
          
          </div>
        </form>

        <div class="mini-loader-container">
          <svg id="mini-loader" class="mini-loader" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
              <g>
                <ellipse id="ellipse" cx="50" cy="50" rx="25" ry="25"></ellipse>
              </g>        
          </svg>        
        </div>   
        
    </div>
  </div>

  </div>
  <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=63807ab0318db8bd26b06087" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="../js/webflow.js" type="text/javascript"></script>
  <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
  <script>
      const form = document.querySelector("#addAccountForm");
      const successMessage = document.querySelector(".w-form-done");
      const failMessage = document.querySelector(".w-form-fail");

      form.addEventListener("submit", async (e) => {
          e.preventDefault(); // Prevent default form submission

            // Gather input values
            const description = document.getElementById("Description").value;
            const amount = document.getElementById("Amount").value;

            const setupFee = document.getElementById("setupFee").value;
            const startingMonthlyFee = document.getElementById("startingMonthlyFee").value;
            const startingBalance = document.getElementById("startingBalance").value;
            
            // Gather list values
            const balanceList = BalanceList;
            const profitTargetList = ProfitTargetList;
            const profitShareList = ProfitShareList;
            const nextStepTargetList = NextStepTargetList;
            const accountFeeList = AccountFeeList;

          // Prepare data for sending to the endpoint (you can modify this as needed)
          const data = {
              description: description,
              setup_fee: setupFee,
              starting_monthly_fee: startingMonthlyFee,
              starting_balance: startingBalance,
              amount: amount,
              balance: balanceList,
              profit_target: profitTargetList,
              profit_share: profitShareList,
              next_step_target: nextStepTargetList,
              account_fee: accountFeeList,
          };

          console.log("data", data)
          // Send data to the endpoint (you should replace 'your-api-endpoint' with your actual endpoint)
          try {
              const response = await fetch(`${baseUrl}/admin/store/create/`, {
                  method: 'POST',
                  headers: {
                      'Content-Type': 'application/json',
                      'Authorization': 'Bearer ' + accessToken
                  },
                  body: JSON.stringify(data),
              });

              if (response.ok) {
                console.log("response", response)
                  // Display success message
                  successMessage.style.display = "block";
                  failMessage.style.display = "none";
                  document.querySelector("#resetButton").click()
              } else {
                  // Display fail message
                  successMessage.style.display = "none";
                  failMessage.style.display = "block";
                  alert("Error")
              }
          } catch (error) {
              // Handle any network or request errors here
              console.error("Error:", error);
              // Display fail message
              successMessage.style.display = "none";
              failMessage.style.display = "block";
          }
      });
  </script>


<script>
  let BalanceList = [];

  function addToBalanceList() {
      const BalanceInputField = document.getElementById("BalanceInputField");
      const inputValue = BalanceInputField.value.trim();

      successMessage.style.display = "none";
      failMessage.style.display = "none";
      if (inputValue !== "") {
          BalanceList.push(inputValue);
          BalanceInputField.value = "";
          updateList();
      }
  }

  function updateList() {
      const BalanceListElement = document.getElementById("BalanceList");
      BalanceListElement.innerHTML = "";

      BalanceList.forEach((str) => {
          const li = document.createElement("li");
          li.textContent = str;
          BalanceListElement.appendChild(li);
      });
  }

</script>

<script>
  let ProfitTargetList = [];

  function addToProfitTargetList() {
      const ProfitTargetInputField = document.getElementById("ProfitTargetInputField");
      const inputValue = ProfitTargetInputField.value.trim();

      if (inputValue !== "") {
          ProfitTargetList.push(inputValue);
          ProfitTargetInputField.value = "";
          updateProfitTargetList();
      }
  }

  function updateProfitTargetList() {
      const ProfitTargetListElement = document.getElementById("ProfitTargetList");
      ProfitTargetListElement.innerHTML = "";

      ProfitTargetList.forEach((str) => {
          const li = document.createElement("li");
          li.textContent = str;
          ProfitTargetListElement.appendChild(li);
      });
  }

</script>

<script>
  let ProfitShareList = [];

  function addToProfitShareList() {
      const ProfitShareInputField = document.getElementById("ProfitShareInputField");
      const inputValue = ProfitShareInputField.value.trim();

      if (inputValue !== "") {
          ProfitShareList.push(inputValue);
          ProfitShareInputField.value = "";
          updateProfitShareList();
      }
  }

  function updateProfitShareList() {
      const ProfitShareListElement = document.getElementById("ProfitShareList");
      ProfitShareListElement.innerHTML = "";

      ProfitShareList.forEach((str) => {
          const li = document.createElement("li");
          li.textContent = str;
          ProfitShareListElement.appendChild(li);
      });
  }
</script>

<script>
  let NextStepTargetList = [];

  function addToNextStepTargetList() {
      const NextStepTargetInputField = document.getElementById("NextStepTargetInputField");
      const inputValue = NextStepTargetInputField.value.trim();

      if (inputValue !== "") {
          NextStepTargetList.push(inputValue);
          NextStepTargetInputField.value = "";
          updateNextStepTargetList();
      }
  }

  function updateNextStepTargetList() {
      const NextStepTargetListElement = document.getElementById("NextStepTargetList");
      NextStepTargetListElement.innerHTML = "";

      NextStepTargetList.forEach((str) => {
          const li = document.createElement("li");
          li.textContent = str;
          NextStepTargetListElement.appendChild(li);
      });
  }

</script>

<script>
  let AccountFeeList = [];

  function addToAccountFeeList() {
      const AccountFeeInputField = document.getElementById("AccountFeeInputField");
      const inputValue = AccountFeeInputField.value.trim();

      if (inputValue !== "") {
          AccountFeeList.push(inputValue);
          AccountFeeInputField.value = "";
          updateAccountFeeList();
      }
  }

  function updateAccountFeeList() {
      const AccountFeeListElement = document.getElementById("AccountFeeList");
      AccountFeeListElement.innerHTML = "";

      AccountFeeList.forEach((str) => {
          const li = document.createElement("li");
          li.textContent = str;
          AccountFeeListElement.appendChild(li);
      });
  }

</script>


 <script>                
      const closeModalButton = document.querySelector(".close-modal-button");
      const modalWrapper = document.querySelector(".modal-wrapper");
      const addAccountBtn = document.querySelector("#addAccountBtn");

      closeModalButton.addEventListener("click", function () {
          modalWrapper.style.display = "none";
      });        

      addAccountBtn.addEventListener("click", function () {
                modalWrapper.style.display = "flex";
                modalWrapper.style.opacity = 1;
            });    
</script>

<script>
    document.querySelector("#resetButton").addEventListener("click", function () {
        // Reset all input field values and lists
        document.querySelector("#addAccountForm").reset();

        // Clear the lists (assuming you have functions to clear them)
        clearBalanceList();
        clearProfitTargetList();
        clearProfitShareList();
        clearNextStepTargetList();
        clearAccountFeeList();

        // Get all <ul> elements
        const ulElements = document.querySelectorAll("ul");

        // Delete each <ul> element
        ulElements.forEach((ul) => {
            ul.innerHTML = ``;
        });
    });

    function clearBalanceList() {
        BalanceList.length = 0;        
    }

    function clearProfitTargetList() {
        ProfitTargetList.length = 0;       
    }

    function clearProfitShareList() {
        ProfitShareList.length = 0;       
    }

    function clearNextStepTargetList() {
        NextStepTargetList.length = 0;       
    }

    function clearAccountFeeList() {
        AccountFeeList.length = 0;       
    }
</script>

<script src="../backend/admin/manage-plans.js"></script>
<script src="../backend/admin/config.js"></script>
<script>
  // Define the URL to make the request to
const endpointUrl = `${baseUrl}/custom/admin/store/list/`;

// Create headers object with authorization
const headers = new Headers({
    'Content-Type': 'application/json',
    'Authorization': 'Bearer ' + accessToken
});

// Create a request object with the headers
const request = new Request(endpointUrl, {
    method: 'GET', // You can adjust the HTTP method as needed (e.g., GET, POST)
    headers: headers
});

// Fetch data from the endpoint
fetch(request)
    .then(response => response.json())
    .then(data => {
        // Loop through the response data
        data.forEach(item => {
            console.log("item", item)
            // Create a new card element
            const card = document.createElement('div');
            card.classList.add('card');

            // Populate the card with data
            card.innerHTML = `
                <p>Account type</p>
                <br>
                <p>Starting Fee</p>
                <p>$${item.balance[0]}</p>
                <br>
                <p>Setup Fee</p>
                <p>$${item.amount.toFixed(2)}</p>
                <a class="a-btn hero-btn delete-account-type" data-id="${item.id}"><img src="./images/icons/Vector.svg" alt=""> Delete</a>
            `;

            // Append the card to the card container
            const cardContainer = document.querySelector('.card-container');
            cardContainer.appendChild(card);
        });
        deleteAccountType()
    })
    .catch(error => {
        console.error('Error:', error);
    });

</script>

<script>
  function deleteAccountType(){

    const deleteButtons = document.querySelectorAll(".delete-account-type");
    
    deleteButtons.forEach(button => {
        button.addEventListener("click", function(event) {
            const accountId = event.target.getAttribute("data-id");
            
            if (accountId) {
                const confirmation = confirm("Are you sure you want to delete this account type?");
                
                if (confirmation) {
                    // Send the DELETE request to the delete endpoint
                    fetch(`${baseUrl}/custom/admin/store/delete/${accountId}/`, {
                        method: "DELETE",
                        headers: {
                          'Authorization': 'Bearer ' + accessToken,
                            "Content-Type": "application/json",
                        },
                    })
                    .then(response => {
                        if (response.status === 204) {
                            // Successful deletion
                            alert("Account type deleted successfully.");
                            // Optionally, you can remove the item from the DOM
                            // event.target.parentElement.remove();
                        } else {
                            // Handle errors
                            alert("Error deleting account type.");
                        }
                    })
                    .catch(error => {
                        console.error("Error:", error);
                    });
                }
            }
        });
    }); 
  }
</script>

</body>
</html>