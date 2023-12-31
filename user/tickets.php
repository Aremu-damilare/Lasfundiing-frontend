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
<html data-wf-page="6422ec78a05bb3194102a79b" data-wf-site="63807ab0318db8bd26b06087">
<head>
  <meta charset="utf-8">
  <title>Tickets - Lasfunding</title>
  <meta content="Dashboard" property="og:title">
  <meta content="Dashboard" property="twitter:title">
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
  <link href="../images/webclip.png" rel="apple-touch-icon">
  <!--  -->
  <link rel="stylesheet" href="../css/custom.css?<?php echo time(); ?>">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css?<?php echo time(); ?>">
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
    
    a{background-color:transparent;}
    a:active,a:hover{outline:0;}
    img{border:0;}
    svg:not(:root){overflow:hidden;}
    input{color:inherit;font:inherit;margin:0;}
    input{line-height:normal;}
    input[type='checkbox']{box-sizing:border-box;padding:0;}
    
    *{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;}
    img{max-width:100%;vertical-align:middle;display:inline-block;}
    .w-button{display:inline-block;padding:9px 15px;background-color:#3898EC;color:white;border:0;line-height:inherit;text-decoration:none;cursor:pointer;border-radius:0;}
    input.w-button{-webkit-appearance:button;}
    .w-form{margin:0 0 15px;}
    
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
    
    .form.login{margin-top:0;margin-bottom:20px;}
    .link{color:rgba(224, 72, 0, .88);text-decoration:none;}
    .text-block-15{margin-top:16px;margin-bottom:16px;}
    .close-modal-button{width:30px;float:none;clear:none;cursor:pointer;margin-right:5px;padding:9px;position:absolute;top:0%;bottom:auto;left:auto;right:0%;}
    .forgot-password{display:flex;}
    
    .eye-icon{ 
      width:20px; 
      cursor:pointer; 
      position:static;
      top:237px;
      bottom:0%;
      left:0%;
      right:0%;
    }
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
    
    .mini-loader-container{display:none;align-items:center;flex-direction:column;}
    .mini-loader{width:60px;stroke-width:5px;stroke:#fff;fill:transparent;stroke-dasharray:157.1;stroke-dashoffset:0;animation:rot 4s infinite linear, clr 9s infinite linear;}
    /*! CSS Used keyframes */
    @keyframes rot{0%{transform:rotate(0deg);stroke-dashoffset:157.1;}50%{stroke-dashoffset:0;}100%{transform:rotate(360deg);stroke-dashoffset:-157.1;}}
    @keyframes clr{0%,         100%{stroke:#F5C1A9;}20%{stroke:#E04800;}40%{stroke:#E04800;}60%{stroke:#F5C1A9;}80%{stroke:#F5C1A9;}}
   </style>

  <link rel="stylesheet" href="../css/user/ticket-table.css?<?php echo time(); ?>">
  <link rel="stylesheet" href="../css/scrollbar.css?<?php echo time(); ?>">

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
            width: 98% !important;
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
            width: 98% !important;
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
            width: 98% !important;
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

  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css?<?php echo time(); ?>">
  <script src="../backend/config/toast.js?<?php echo time(); ?>"></script>


 
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
      <!-- <a href="#"><img src="../images/Lasfund-Logo.svg" alt="Logo"></a> -->
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
      
    <div style="display: none;"  class="rl_navbar1_component w-nav" data-easing2="ease" fs-scrolldisable-element="smart-nav" data-easing="ease" data-collapse="medium" role="banner" data-no-scroll="1" data-duration="400">
    <div class="rl_navbar1_container">
      <nav role="navigation" class="rl_navbar1_menu is-page-height-tablet w-nav-menu">
        <a href="#"><img src="../images/Lasfund-Logo.svg" alt="Logo"></a> 
        <div class="text-block-36"></div>           
        <div class="right-navbar-wrapper">
        <div class="right-navbar-link">          
          <a href="./dashboard.php" class="rl_navbar1_link w-nav-link">
            <svg width="34" height="34" viewBox="0 0 34 34" fill="white" xmlns="http://www.w3.org/2000/svg">
              <path d="M10.0742 10.8307V14.637C10.0742 15.0512 10.41 15.387 10.8242 15.387H14.6277C15.0419 15.387 15.3777 15.0512 15.3777 14.637V10.8307C15.3777 10.4165 15.0419 10.0807 14.6277 10.0807H10.8242C10.41 10.0807 10.0742 10.4165 10.0742 10.8307Z" stroke="#8E8B8A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M18.5625 10.8292V14.6355C18.5625 15.0497 18.8983 15.3855 19.3125 15.3855H23.1159C23.5302 15.3855 23.8659 15.0497 23.8659 14.6355V10.8292C23.8659 10.415 23.5302 10.0792 23.1159 10.0792H19.3125C18.8983 10.0792 18.5625 10.415 18.5625 10.8292Z" stroke="#8E8B8A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M10.0703 19.3092V23.1155C10.0703 23.5297 10.4061 23.8655 10.8203 23.8655H14.6238C15.038 23.8655 15.3738 23.5297 15.3738 23.1155V19.3092C15.3738 18.895 15.038 18.5592 14.6238 18.5592H10.8203C10.4061 18.5592 10.0703 18.895 10.0703 19.3092Z" stroke="#8E8B8A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M18.5586 19.3092V23.1155C18.5586 23.5297 18.8944 23.8655 19.3086 23.8655H23.112C23.5262 23.8655 23.862 23.5297 23.862 23.1155V19.3092C23.862 18.895 23.5262 18.5592 23.112 18.5592H19.3086C18.8944 18.5592 18.5586 18.895 18.5586 19.3092Z" stroke="#8E8B8A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>Dashboard</span>            
          </a>
        </div>
        </div>
        <div class="right-navbar-wrapper">
          <!-- <div class="text-block-36">TRANSACTION</div>          -->
          <div class="right-navbar-link">            
            <a href="./withdrawals.php" class="rl_navbar1_link w-nav-link">
              <svg width="24" height="25" viewBox="0 0 24 25" fill="white" xmlns="http://www.w3.org/2000/svg">
                <path d="M12 7.69116V9.19116" stroke="#5B5654" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M12 16.6912V18.1912" stroke="#5B5654" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M12 21.9412C16.9706 21.9412 21 17.9117 21 12.9412C21 7.9706 16.9706 3.94116 12 3.94116C7.02944 3.94116 3 7.9706 3 12.9412C3 17.9117 7.02944 21.9412 12 21.9412Z" stroke="#5B5654" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M9.75 16.6912H13.125C13.6223 16.6912 14.0992 16.4936 14.4508 16.142C14.8025 15.7904 15 15.3134 15 14.8162C15 14.3189 14.8025 13.842 14.4508 13.4903C14.0992 13.1387 13.6223 12.9412 13.125 12.9412H10.875C10.3777 12.9412 9.90081 12.7436 9.54917 12.392C9.19754 12.0404 9 11.5634 9 11.0662C9 10.5689 9.19754 10.092 9.54917 9.74034C9.90081 9.38871 10.3777 9.19116 10.875 9.19116H14.25" stroke="#5B5654" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
              <span>Withdrawals</span>              
            </a>
          </div>
        </div>
        <div class="right-navbar-wrapper">
          <!-- <div class="text-block-36">MENU</div> -->
          <div class="right-navbar-link">            
            <a href="./orders.php" class="rl_navbar1_link w-nav-link">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="white">
                <path d="M19.572 7.69116H4.42195C4.2374 7.69203 4.05949 7.76007 3.92146 7.88257C3.78343 8.00507 3.69473 8.17365 3.67195 8.35679L2.3407 20.3568C2.32886 20.4613 2.33915 20.5672 2.37091 20.6675C2.40267 20.7679 2.45518 20.8604 2.52503 20.9391C2.59488 21.0178 2.68051 21.0809 2.77635 21.1243C2.8722 21.1677 2.9761 21.1905 3.08133 21.1912H20.9126C21.0178 21.1905 21.1217 21.1677 21.2175 21.1243C21.3134 21.0809 21.399 21.0178 21.4689 20.9391C21.5387 20.8604 21.5912 20.7679 21.623 20.6675C21.6547 20.5672 21.665 20.4613 21.6532 20.3568L20.322 8.35679C20.2992 8.17365 20.2105 8.00507 20.0724 7.88257C19.9344 7.76007 19.7565 7.69203 19.572 7.69116V7.69116Z" stroke="#8E8B8A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M8.25 10.6912V7.69116C8.25 6.6966 8.64509 5.74277 9.34835 5.03951C10.0516 4.33625 11.0054 3.94116 12 3.94116C12.9946 3.94116 13.9484 4.33625 14.6517 5.03951C15.3549 5.74277 15.75 6.6966 15.75 7.69116V10.6912" stroke="#8E8B8A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
              <span>Orders</span>              
            </a>
          </div>

            <div class="right-navbar-link current-page">            
            <a href="./tickets.php" class="rl_navbar1_link w-nav-link" >
              <svg width="24" height="24" viewBox="0 0 24 24" fill="white" xmlns="http://www.w3.org/2000/svg">
                <path d="M8.91507 13.8682L15.0865 8.26823M9.42938 8.7349H9.43967M14.5722 13.4016H14.5825M19.2008 20.4016V5.46823C19.2008 4.4373 18.2798 3.60156 17.1436 3.60156H6.85792C5.72179 3.60156 4.80078 4.4373 4.80078 5.46823V20.4016L8.40078 18.5349L12.0008 20.4016L15.6008 18.5349L19.2008 20.4016ZM9.94364 8.7349C9.94364 8.99263 9.71338 9.20156 9.42935 9.20156C9.14532 9.20156 8.91507 8.99263 8.91507 8.7349C8.91507 8.47716 9.14532 8.26823 9.42935 8.26823C9.71338 8.26823 9.94364 8.47716 9.94364 8.7349ZM15.0865 13.4016C15.0865 13.6593 14.8562 13.8682 14.5722 13.8682C14.2882 13.8682 14.0579 13.6593 14.0579 13.4016C14.0579 13.1439 14.2882 12.9349 14.5722 12.9349C14.8562 12.9349 15.0865 13.1439 15.0865 13.4016Z" stroke="white" stroke-width="1.58" stroke-linecap="round" stroke-linejoin="round"></path>
              </svg>
              <span>
                Tickets 
              </span>              
            </a>
          </div>
          <!-- <div class="right-navbar-link"><img src="../images/CreditCard.svg" loading="lazy" alt="" class="sign-out-icon">
            <a href="./payment-methods.php" class="rl_navbar1_link w-nav-link">Payment Method</a>
          </div> -->
        </div>
        <div class="right-navbar-wrapper">
          <!-- <div class="text-block-36">PERSONAL</div> -->
          <div class="right-navbar-link">            
              <a href="./profile.php" class="rl_navbar1_link w-nav-link">
                <svg width="24" height="25" viewBox="0 0 24 25" fill="white" xmlns="http://www.w3.org/2000/svg">
                  <path d="M12 21.9414C16.9706 21.9414 21 17.912 21 12.9414C21 7.97084 16.9706 3.94141 12 3.94141C7.02944 3.94141 3 7.97084 3 12.9414C3 17.912 7.02944 21.9414 12 21.9414Z" stroke="#8E8B8A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M12 15.9414C14.0711 15.9414 15.75 14.2625 15.75 12.1914C15.75 10.1203 14.0711 8.44141 12 8.44141C9.92893 8.44141 8.25 10.1203 8.25 12.1914C8.25 14.2625 9.92893 15.9414 12 15.9414Z" stroke="#8E8B8A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M5.98438 19.6357C6.54867 18.5243 7.40971 17.5907 8.47207 16.9387C9.53443 16.2866 10.7566 15.9414 12.0031 15.9414C13.2496 15.9414 14.4718 16.2866 15.5342 16.9387C16.5965 17.5907 17.4576 18.5243 18.0219 19.6357" stroke="#8E8B8A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                <span>Profile</span>                
              </a>
          </div>
          <!-- <div class="right-navbar-link"><img src="../images/Bell-1.svg" loading="lazy" alt="" class="sign-out-icon">
            <a href="#" class="rl_navbar1_link  w-nav-link">Notification</a>
          </div> -->
          <div class="right-navbar-link">            
            <a href="./kyc.php" class="rl_navbar1_link w-nav-link">
              <svg width="20" height="18" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1.75 2.94141V14.9414C1.75 15.3392 1.90804 15.7208 2.18934 16.0021C2.47064 16.2834 2.85218 16.4414 3.25 16.4414H18.25C18.4489 16.4414 18.6397 16.3624 18.7803 16.2217C18.921 16.0811 19 15.8903 19 15.6914V5.19141C19 4.99249 18.921 4.80173 18.7803 4.66108C18.6397 4.52042 18.4489 4.44141 18.25 4.44141H3.25C2.85218 4.44141 2.47064 4.28337 2.18934 4.00207C1.90804 3.72076 1.75 3.33923 1.75 2.94141ZM1.75 2.94141C1.75 2.54358 1.90804 2.16205 2.18934 1.88075C2.47064 1.59944 2.85218 1.44141 3.25 1.44141H16" stroke="#8E8B8A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>              
              <span>KYC</span>
            </a>
          </div>
        </div>
        <div class="right-navbar-wrapper">
          <!-- <div class="right-navbar-link"><img src="../images/Gear-1.svg" loading="lazy" alt="" class="image-9">
            <a href="#" class="rl_navbar1_link w-nav-link">Settings</a>
          </div> -->
          <div class="right-navbar-link">            
              <a href="#" class="rl_navbar1_link w-nav-link">
                <svg width="24" height="25" viewBox="0 0 24 25" fill="white" xmlns="http://www.w3.org/2000/svg">
                  <path d="M16.3125 9.00391L20.25 12.9414L16.3125 16.8789" stroke="#8E8B8A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M9.75 12.9414H20.25" stroke="#8E8B8A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M9.75 21.1914H4.5C4.30109 21.1914 4.11032 21.1124 3.96967 20.9717C3.82902 20.8311 3.75 20.6403 3.75 20.4414V5.44141C3.75 5.24249 3.82902 5.05173 3.96967 4.91108C4.11032 4.77042 4.30109 4.69141 4.5 4.69141H9.75" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                <span id="SignOut">Sign Out</span>              
              </a>
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
  
    <div class="main-section" style="display: none; z-index: 99">
    <div class="gradient-header" style="display: flex; flex-direction: column; justify-content: flex-start; align-items: baseline;">
      <!-- <div class="text-block-56">Dashboard</div> -->      
        <div>
            <button id="creatTicketBtn" >
                <span  style="color: #E04800;float: right;"><i class="fa fa-folder-open-o" aria-hidden="true"></i> Create ticket</span>
            </button>
        </div>
    </div>
    <div class="analyzer-section dashboard wf-section" style="display: block;">
      <div class="filter-container">
        <i class="fa fa-random" aria-hidden="true"></i> Sort
        <br>
        <select id="StatusSort" onchange="sortTableByStatus()">            
          <option value="">Status</option>
          <option value="open">Status (Open)</option>
          <option value="close">Status (Close)</option>
        </select>
        
        <select id="DateSort" onchange="sortTableByDate(event)">
          <option value="">Date</option>
          <option value="newest">Date (Latest)</option>
          <option value="oldest">Date (Oldest)</option>          
        </select>
        <br>          
        <p for="department">Start time</p>
        <input type="datetime-local" name="startTime" id="StartTimeSort">
        <br>
        <p for="department">End time</p>
        <input type="datetime-local" name="endTime" id="EndTimeSort">
        <br>
        <button type="button" onclick="sortTableByDateRange(event)">Sort by date range</button>
      </div>
        <div class="table-container" style="overflow-x: auto;">                
          <table class="slds-table slds-table--bordered" id="myTable">
            <span class="mini-loader-container table-loader" style="text-align: center;">
              <svg id="mini-loader" class="mini-loader" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
                  <g>
                    <ellipse id="ellipse" cx="70" cy="70" rx="55" ry="55"></ellipse>
                  </g>        
              </svg>        
            </span> 
              <thead>
                <tr class="slds-text-heading--label">
                  <!-- <th class="slds-cell-shrink">
                    <label class="slds-checkbox">
                        <input type="checkbox" name="options" />
                        <span class="slds-checkbox--faux"></span>
                        <span class="slds-assistive-text">Select All</span>
                      </label>
                  </th> -->
                  <th class="slds-is-sortable" scope="col">
                    <div class="slds-truncate">Priority, Id
                      <button class="slds-button slds-button--icon-bare">
                          <svg aria-hidden="true" class="slds-button__icon slds-button__icon--small">
                            <!-- <use xlink:href="/assets/icons/utility-sprite/svg/symbols.svg#arrowdown"></use> -->
                          </svg>
                          <span class="slds-assistive-text">Sort</span>
                        </button>
                    </div>
                  </th>
                  <th class="slds-is-sortable" scope="col">
                    <div class="slds-truncate">Department
                      <button class="slds-button slds-button--icon-bare">
                          <svg aria-hidden="true" class="slds-button__icon slds-button__icon--small">
                            <!-- <use xlink:href="/assets/icons/utility-sprite/svg/symbols.svg#arrowdown"></use> -->
                          </svg>
                          <span class="slds-assistive-text">Sort</span>
                        </button>
                    </div>
                  </th>
                
                  <th class="slds-is-sortable" scope="col">
                    <div class="slds-truncate">Status
                      <button class="slds-button slds-button--icon-bare">
                          <svg aria-hidden="true" class="slds-button__icon slds-button__icon--small">
                            <!-- <use xlink:href="/assets/icons/utility-sprite/svg/symbols.svg#arrowdown"></use> -->
                          </svg>
                          <span class="slds-assistive-text">Sort</span>
                        </button>
                    </div>
                  </th>
                  <th class="slds-is-sortable" scope="col">
                    <div class="slds-truncate">Subject
                      <button class="slds-button slds-button--icon-bare">
                          <svg aria-hidden="true" class="slds-button__icon slds-button__icon--small">
                            <!-- <use xlink:href="/assets/icons/utility-sprite/svg/symbols.svg#arrowdown"></use> -->
                          </svg>
                          <span class="slds-assistive-text">Sort</span>
                        </button>
                    </div>
                  </th>
               
                  <th class="slds-is-sortable" scope="col">
                      <div class="slds-truncate">Date
                        <button class="slds-button slds-button--icon-bare">
                            <svg aria-hidden="true" class="slds-button__icon slds-button__icon--small">
                              <!-- <use xlink:href="/assets/icons/utility-sprite/svg/symbols.svg#arrowdown"></use> -->
                            </svg>
                            <span class="slds-assistive-text">Sort</span>
                          </button>
                      </div>
                    </th>

                    <th class="slds-is-sortable" scope="col">
                      <div class="slds-truncate">Date Updated
                        <button class="slds-button slds-button--icon-bare">
                            <svg aria-hidden="true" class="slds-button__icon slds-button__icon--small">
                              <!-- <use xlink:href="/assets/icons/utility-sprite/svg/symbols.svg#arrowdown"></use> -->
                            </svg>
                            <span class="slds-assistive-text">Sort</span>
                          </button>
                      </div>
                    </th>

                  <th class="slds-cell-shrink"></th>
                </tr>
              </thead>
              <tbody>
            
              </tbody>
          </table>
        </div>
        
    </div>
  
  </div>
  <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=63807ab0318db8bd26b06087" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="../js/webflow.js" type="text/javascript"></script>
  <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js?<?php echo time(); ?>"></script><![endif] -->
  

    
  <div style="overflow: auto;display: none; opacity: 0;" class="modal-wrapper">
    <div style="opacity: 1; display: flex; width:90%" class="form-container  w-container">
      <div class="form-block w-form" style="overflow-y: auto;height: auto; ">
        
        <div class="modal-title">               
          <div class="" style="padding: 10px;margin:10px; text-align: center;">Create ticket</div>
          <div  class="close-modal-button"><img src="../images/Asset-4.svg" loading="lazy" alt=""></div>
        </div>
        <div class="w-form-done" tabindex="-1" role="region" style="display: none;">
            <div>Ticket created successfully!</div>
        </div>
        <div class="w-form-fail" tabindex="-1" role="region" style="display: none;">
            <div>Ticket failed to initiate!</div>
        </div> 
        <form id="createTicket" name="create-ticket-form" data-name="create-ticket Form" method="post" data-ms-form="" class="form " aria-label="create-ticket Form">
            
         <label for="subject">Subject</label>
          <input type="text" class="w-input"  id="Subject" name="subject" data-name="subject" placeholder="Enter subject"  required>

          <label for="content">Message</label>
          <textarea class="w-input" name="content" id="Content" cols="35" rows="10">

          </textarea>

          
            <label for="priority">Priority</label>
            <select id="priority" name="priority"  class="w-input">
                <option value="high">High</option>
                <option value="normal">Normal</option>
            </select>            

            <label for="department">Department</label>
            <select id="department" name="department"  class="w-input">
                <option value="account-type">Account Type</option>
                <option value="enquiry">Enquiry</option>
                <option value="funding">Funding</option>
                <option value="withdrawal">Withdrawal</option>
                <option value="order">Order</option>
                <option value="payment-method">Payment Method</option>
            </select>
                    
          <button type="submit" value="Create" data-wait="Please wait..." class="submit-button w-button">
            Create
            <span class="mini-loader-container">
              <svg id="mini-loader" class="mini-loader" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
                  <g>
                    <ellipse id="ellipse" cx="50" cy="50" rx="25" ry="25"></ellipse>
                  </g>        
              </svg>        
            </span>  
          </button>
          
          </div>
        </form>        
        
    </div>
  </div>

  
<script>                
    const closeModalButton = document.querySelector(".close-modal-button");
    const modalWrapper = document.querySelector(".modal-wrapper");
    const creatTicketBtn = document.querySelector("#creatTicketBtn");

    closeModalButton.addEventListener("click", function () {
        modalWrapper.style.display = "none";
    });        

    creatTicketBtn.addEventListener("click", function () {
        console.log("xxxxxxxxx")
              modalWrapper.style.display = "flex";
              modalWrapper.style.opacity = 1;
          });    
        
</script>

  <script src="../backend/user/getUserDetails.js?<?php echo time(); ?>"></script>
  <script src="../backend/user/topBarPlaceholders.js?<?php echo time(); ?>"></script>
  <script src="../backend/user/pageLoader.js?<?php echo time(); ?>"></script>
  <script src="../backend/config/_service-worker.js?<?php echo time(); ?>"></script>
  <script src="../backend/user/logOut.js?<?php echo time(); ?>"></script>  
  <script src="../backend/user/getUserTickets.js?<?php echo time(); ?>"></script>

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

  async function fetchUserTicket() {
    try {
      const userTicketsList = await userTickets(accessToken);
      console.log("userTicketsList", userTicketsList);      
      appendRowToTable(userTicketsList);
    } catch (error) {      
      console.error("An error occurred:", error);
    }
  }

  fetchUserData();
  fetchUserTicket();

function appendRowToTable(tickets, currentPage = 1, itemsPerPage = 5) {
  setElementDisplayByClassName('table-loader', 'flex')    
    const tableBody = document.querySelector("tbody");
    tableBody.innerHTML = ""; // Clear existing rows

    const startIndex = (currentPage - 1) * itemsPerPage;
    const endIndex = startIndex + itemsPerPage;
    const currentTickets = tickets.slice(startIndex, endIndex);

    for (const ticket of currentTickets) {
        const row = document.createElement("tr");
      // Create table cells and populate them with ticket data
      const checkboxCell = document.createElement("td");
      checkboxCell.className = "slds-cell-shrink";
      checkboxCell.dataset.label = "Select Row";
      checkboxCell.innerHTML = `
      <label class="slds-checkbox">
        <input type="checkbox" name="options">
        <span class="slds-checkbox--faux"></span>
        <span class="slds-assistive-text">Select Row</span>
      </label>`      

      priority = document.createElement("td");
      priority.setAttribute("data-ticket-id", ticket.id);      
      priority.innerHTML = `<a href="#">${ticket.priority} <br> #${ticket.id}  </a>`

      department = document.createElement("td");
      department.innerHTML = `${ticket.department}`

      statusCol = document.createElement("td");
      statusCol.innerHTML = `<span class="${ticket.status}"> <img src="../images/status/${ticket.status}.svg">&nbsp;${ticket.status}</span>`

      subject = document.createElement("td");
      subject.innerHTML = ticket.subject

      dateCol = document.createElement("td");
      dateCol.innerHTML = formatDateTime(ticket.created_at)

      dateUpdatedCol = document.createElement("td");
      dateUpdatedCol.innerHTML = formatDateTime(ticket.updated_at)

      // Append cells to the row
      //row.appendChild(checkboxCell);
      row.appendChild(priority);
      row.appendChild(department);
      row.appendChild(statusCol);
      row.appendChild(subject);
      row.appendChild(dateCol);     
      row.appendChild(dateUpdatedCol);    

      // Append the row to the table body
      tableBody.appendChild(row);
        
      }
      // Calculate total pages
    const totalPages = Math.ceil(tickets.length / itemsPerPage);
        // ... (inside the function)
    const paginationContainer = document.createElement("div");
    paginationContainer.className = "pagination";

    // Previous button
    const prevButton = document.createElement("button");
    prevButton.textContent = "Previous";
    prevButton.addEventListener("click", () => {
        const prevPage = currentPage > 1 ? currentPage - 1 : 1;
        appendRowToTable(tickets, prevPage, itemsPerPage);
    });

    // Next button
    const nextButton = document.createElement("button");
    nextButton.textContent = "Next";
    nextButton.addEventListener("click", () => {
        const nextPage = currentPage < totalPages ? currentPage + 1 : totalPages;
        appendRowToTable(tickets, nextPage, itemsPerPage);
    });

    // Page number display
    const pageNumberDisplay = document.createElement("span");
    pageNumberDisplay.className = "page-number";
    pageNumberDisplay.textContent = `${currentPage}/${totalPages}`;

    // Append pagination controls
    paginationContainer.appendChild(prevButton);
    paginationContainer.appendChild(pageNumberDisplay);
    paginationContainer.appendChild(nextButton);

    // Append pagination container to the table body
    tableBody.appendChild(document.createElement("tr").appendChild(document.createElement("td").appendChild(paginationContainer)));
    setElementDisplayByClassName('table-loader', 'none')    
    gotoTicketDetail();
}


function formatDate(dateString) {
  const createdAt = new Date(dateString);
  const formattedDate = createdAt.toLocaleDateString('en-US', {
    year: 'numeric',
    month: '2-digit',
    day: '2-digit'
  });
  return formattedDate;
}



function gotoTicketDetail(){
    // Get all elements with class 'td' and 'data-ticket-id' attribute
    const elements = document.querySelectorAll('td[data-ticket-id]');

    // Add a click event listener to each element
    elements.forEach(element => {
        element.addEventListener('click', function() {
        // Get the value of the 'data-ticket-id' attribute
        const ticketId = this.getAttribute('data-ticket-id');
        
        // Construct the URL with the ticketId as a query parameter
        const url = `ticket-detail.php?ticketId=${ticketId}`;
        
        // Redirect to the ticketDetail.php page with the query parameter
        window.location.href = url;
        });
    });
}
</script>
  
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const form = document.getElementById("createTicket");
        
        form.addEventListener("submit", function (event) {          
            setElementDisplayByClassName('mini-loader-container', 'flex')            
            event.preventDefault(); 
            

            // Get the form data
            const formData = new FormData(form);

            // Create an object to store the form data
            const data = {};
            formData.forEach((value, key) => {
                data[key] = value;
            });

            // Convert the form data to JSON
            const jsonData = JSON.stringify(data);
            console.log(data)


            // Send the JSON data to the specified endpoint
            fetch(`${baseUrl}/tickets/`, {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    'Authorization': 'Bearer ' + accessToken
                },
                body: jsonData,
                
            })
            //.then((response) => response.json())
            .then((response) => {
                console.log("Response", response);
                if (response.status === 201) {
                    // Status 201 indicates success (Created)
                    toastSuccessNotif("Success")
                    setElementDisplayByClassName('mini-loader-container', 'none')
                    setElementDisplayByClassName('w-form-done', 'flex')
                    setElementDisplayByClassName('w-form-fail', 'none');
                    console.log("11111111111111");
                    setTimeout(function() {
                      location.reload();
                  }, 2000);
                    return response.json();
                } else {
                  toastErrorNotif("Error")
                    // Handle other status codes as needed
                    setElementDisplayByClassName('mini-loader-container', 'none')
                    setElementDisplayByClassName('w-form-done', 'none')
                    setElementDisplayByClassName('w-form-fail', 'flex')
                    console.log("222222222222222");
                    throw new Error(`Received status code ${response.status}`);
                }
            })
            .then((result) => {
                // Handle the response from the server
                console.log(result);
                setElementDisplayByClassName('mini-loader-container', 'none')
                setElementDisplayByClassName('w-form-done', 'flex')
                setElementDisplayByClassName('w-form-fail', 'none')
                console.log("333333333333333");
            })
            .catch((error) => {
                // Handle any errors that occur during the fetch
                console.error("Error:", error);
                setElementDisplayByClassName('mini-loader-container', 'none')
                setElementDisplayByClassName('w-form-done', 'none')
                setElementDisplayByClassName('w-form-fail', 'flex')
                console.log("4444444444444");
            });
        });
        setElementDisplayByClassName('mini-loader-container', 'none')
    });

    

</script>

<script>
window.addEventListener('load', function() {
    // Function to get query parameters from the URL
    function getQueryParam(name) {
        const urlParams = new URLSearchParams(window.location.search);
        return urlParams.get(name);
    }

    // Get the orderId query parameter from the URL
    const orderId = getQueryParam('orderId');

    // Check if orderId is not null and set it as the value of the Subject input
    if (orderId !== null) {
        const subjectInput = document.getElementById('Subject');
        subjectInput.value = 'Order ID: ' + orderId;
    }
});
</script>

<script>      
      async function sortTableByStatus() {
        try {
          var selectedValue = document.querySelector("#StatusSort");
          console.log("sortTableByStatus", selectedValue.value );
          setElementDisplayByClassName('mini-loader-container', 'block')
          const userTicketsList = await userTicketsSortStatus(accessToken, status=`${selectedValue.value}`);
          setElementDisplayByClassName('mini-loader-container', 'none');
          appendRowToTable(userTicketsList);
        } catch (error) {
          console.error("An error occurred:", error);
        }
      }
</script>

<script>
    async function sortTableByDate() {
      try {
        var selectedValue = document.querySelector("#DateSort");
        setElementDisplayByClassName('mini-loader-container', 'block')
        const userTicketsList = await userTicketsSortDate(accessToken, status=null,  dateSort=`${selectedValue.value}`);
        setElementDisplayByClassName('mini-loader-container', 'none');
        console.log("userTicketsList", userTicketsList, );
        appendRowToTable(userTicketsList);
      } catch (error) {      
        console.error("An error occurred:", error);
      }
    }
</script>

<script>
  async function sortTableByDateRange() {
    try {
      var EndTimeSortValue = document.querySelector("#EndTimeSort").value;
      var StartTimeSortValue = document.querySelector("#StartTimeSort").value;

      console.log("EndTimeSortValue", EndTimeSortValue, "StartTimeSortValue", StartTimeSortValue)
      setElementDisplayByClassName('mini-loader-container', 'block')
      const userTicketsList = await userTicketsSortDateRange(accessToken,  EndTimeSortValue=`${EndTimeSortValue}`, StartTimeSortValue=`${StartTimeSortValue}`, Order="newest" );
      setElementDisplayByClassName('mini-loader-container', 'none');
      console.log("userTicketsList", userTicketsList);
      appendRowToTable(userTicketsList);
    } catch (error) {      
      console.error("An error occurred:", error);
    }
  }
</script>

</body>
</html>