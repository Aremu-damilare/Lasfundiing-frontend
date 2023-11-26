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
  <title>Ticket detail - lasfunding</title>
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
     
  <link rel="stylesheet" href="./css/ticket-table.css">
  <link rel="stylesheet" href="../css/scrollbar.css">
  <script src="../backend/config/toast.js?<?php echo time(); ?>"></script>

 <style>
    .mini-loader-container {
        display: none;
        align-items: center;
        flex-direction: column;
      }
      
      .mini-loader {
        width: 60px;
        /** height: 2256px; **/
        stroke-width: 5px;
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
 </style>

  <style>
    
    :after,:before{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;}
    
    textarea{font-family:inherit;font-size:inherit;line-height:inherit;}
    a{color:#337ab7;text-decoration:none;}
    a:focus,a:hover{color:#23527c;text-decoration:underline;}
    a:focus{outline:5px auto -webkit-focus-ring-color;outline-offset:-2px;}
    h3{font-family:inherit;font-weight:500;line-height:1.1;color:inherit;}
    h3{margin-top:20px;margin-bottom:10px;}
    h3{font-size:24px;}
    p{margin:0 0 10px;}
    ul{margin-top:0;margin-bottom:10px;}
    .container{padding-right:15px;padding-left:15px;margin-right:auto;margin-left:auto;}
    @media (min-width:768px){
    .container{width:750px;}
    }
    @media (min-width:992px){
    .container{width:970px;}
    }
    @media (min-width:1200px){
    .container{width:1170px;}
    }
    .form-control{display:block;width:100%;height:34px;padding:6px 12px;font-size:14px;line-height:1.42857143;color:#555;background-color:#fff;background-image:none;border:1px solid #ccc;border-radius:4px;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075);box-shadow:inset 0 1px 1px rgba(0,0,0,.075);-webkit-transition:border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;-o-transition:border-color ease-in-out .15s,box-shadow ease-in-out .15s;transition:border-color ease-in-out .15s,box-shadow ease-in-out .15s;}
    .form-control:focus{border-color:#66afe9;outline:0;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgba(102,175,233,.6);box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgba(102,175,233,.6);}
    textarea.form-control{height:auto;}
    .form-group{margin-bottom:15px;}
    .btn{display:inline-block;padding:6px 12px;margin-bottom:0;font-size:14px;font-weight:400;line-height:1.42857143;text-align:center;white-space:nowrap;vertical-align:middle;-ms-touch-action:manipulation;touch-action:manipulation;cursor:pointer;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;background-image:none;border:1px solid transparent;border-radius:4px;}
    .btn:active:focus,.btn:focus{outline:5px auto -webkit-focus-ring-color;outline-offset:-2px;}
    .btn:focus,.btn:hover{color:#333;text-decoration:none;}
    .btn:active{background-image:none;outline:0;-webkit-box-shadow:inset 0 3px 5px rgba(0,0,0,.125);box-shadow:inset 0 3px 5px rgba(0,0,0,.125);}
    .btn.disabled{cursor:not-allowed;filter:alpha(opacity=65);-webkit-box-shadow:none;box-shadow:none;opacity:.65;}
    a.btn.disabled{pointer-events:none;}
    .btn-primary{color:#fff;background-color:#337ab7;border-color:#2e6da4;}
    .btn-primary:focus{color:#fff;background-color:#286090;border-color:#122b40;}
    .btn-primary:hover{color:#fff;background-color:#286090;border-color:#204d74;}
    .btn-primary:active{color:#fff;background-color:#286090;border-color:#204d74;}
    .btn-primary:active:focus,.btn-primary:active:hover{color:#fff;background-color:#204d74;border-color:#122b40;}
    .btn-primary:active{background-image:none;}
    .btn-primary.disabled:focus,.btn-primary.disabled:hover{background-color:#337ab7;border-color:#2e6da4;}
    .container:after,.container:before{display:table;content:" ";}
    .container:after{clear:both;}
    .pull-right{float:right!important;}
    /*! CSS Used from: Embedded */
    .heading{color:#666666;text-align:center;}
    body{font-family:Arial, sans-serif;color:#404040;background-color:#eee;}
    .container{width:520px;margin-top:20px;}
    .button-group{margin-bottom:20px;}
    .counter{display:inline;margin-top:0;margin-bottom:0;margin-right:10px;}
    .posts{clear:both;list-style:none;padding-left:0;width:100%;text-align:left;}
    .btn-primary{color:#fff;background-color:#337ab7;border-color:#2e6da4;}
  </style>

  <style>
      .heading {
          color: #666666;
          text-align: center;
      }
      
      .container {
        width: 520px;
        margin-top: 20px;
      }
      .button-group {
        margin-bottom: 20px;
      }
      .counter {
        display: inline;
        margin-top: 0;
        margin-bottom: 0;
        margin-right: 10px;
      }
      .posts {
        clear: both;
        list-style: none;
        padding-left: 0;
        width: 100%;
        text-align: left;
          overflow-y: auto;
        height: 55vh;
      }
      .posts li {
        background-color: #fff;
        border: 1.5px solid #d8d8d8;
        border-radius: 10px;
        padding-top: 10px;
        padding-left: 20px;
        padding-right: 20px;
        padding-bottom: 10px;
        margin-bottom: 10px;
        word-wrap: break-word;
        min-height: 42px;
        /* box-shadow:8px 8px 5px #888888; */
      }
      .btn-primary {
          color: #fff;
          background-color: #337ab7;
          border-color: #2e6da4;
      }
      
  </style>

  <style>
    small.comment-user {
      color: wheat;
      /* margin-bottom: 13px; */
      padding: 2px;
      background: gray;
  }
  .commwnt-content {
    margin-top: 1em;
    /* border: 1px solid gray; */
    border-radius: 9px;
    padding: 5px;
}
  </style>

  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">

  <style>
    ul.posts {
      background: #e4ebf3ad;
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

        <div class="right-navbar-wrapper">
          <!-- <div class="text-block-36">ANALYTICS</div> -->
          <!-- <div class="right-navbar-link"><img src="../images/ChartLineUp-1.svg" loading="lazy" alt="" class="image-9">
            <a href="./analyzer.html" class="rl_navbar1_link w-nav-link">Analyzer</a>
          </div> -->
          <div class="right-navbar-link"><img src="../images/icons/admin/DiamondsFour.svg" loading="lazy" alt="" class="sign-out-icon">
            <a href="./dashboard.php" class="rl_navbar1_link w-nav-link">Dashboard </a>
          </div>

          <div class="right-navbar-link"><img src="../images/icons/admin/RreceiptTax.svg" loading="lazy" alt="" class="sign-out-icon">
            <a href="./tickets.php" style="color: #E04800;font-style: oblique;" class="rl_navbar1_link w-nav-link">Tickets </a>
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
            <a href="./manage-plans.php"  class="rl_navbar1_link w-nav-link"> Manage plans</a>
          </div>

          <div class="right-navbar-link"><img src="../images/icons/admin/ArrowBendUpLeft.svg" loading="lazy" alt="" class="sign-out-icon">
            <a href="./withdrawals.php" class="rl_navbar1_link w-nav-link">Withdrawals</a>
          </div>

          <div class="right-navbar-link"><img src="../images/icons/admin/ChatsTeardrop.svg" loading="lazy" alt="" class="sign-out-icon">
            <a href="./kycs.php" class="rl_navbar1_link w-nav-link">KYC</a>
          </div>
          
          <!-- <div class="right-navbar-link"><img src="../images/icons/admin/Gear.svg" loading="lazy" alt="" class="sign-out-icon">
            <a href="./settings.php class="rl_navbar1_link w-nav-link">Settings</a>
          </div> -->

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
    <div class="main-section-real">
      <div class="gradient-header">      
        <div style="color: #E04800;font-style: oblique;"  class="text-block-57">
          <b><span>Ticket detail #<span id="id"></span> </span></b>
        </div>        
      </div>

      <div class="analyzer-section dashboard wf-section" style="display: block;">      
    
          <div class="info-container">                    
            <p class="info-block"><span class="info-label">Updated at</span><span id="updated_at"></span></p>
            <p class="info-block"><span class="info-label">Department</span><span id="department"></span></p>        
            <p class="info-block"><span class="info-label">Priority</span><span id="priority"></span></p>
            <p class="info-block"><span class="info-label">Status</span><span id="status"></span></p>
            <p class="info-block"><span class="info-label">Subject</span><span id="subject"></span></p>          
            <p class="info-block"><span class="info-label">User email</span><span id="user"></span> </p>
            <p class="info-block"><span class="info-label">Created at</span><span id="created_at"></span></p>
            
            <form method="post" id="adminModelForm">
  
              <label for="priority">Priority</label>
              <select name="priority" id="priorityAdminOptions" class=" w-input">
                  <option value="high">High</option>
                  <option value="normal">Normal</option>
              </select>    
      
              <label for="status">Status</label>
              <select name="status" id="statusAdminOptions" class=" w-input">
                  <option value="open">Open</option>
                  <option value="close">Close</option>
              </select>
    
              <label for="department">Department</label>
              <select name="department" id="departmentAdminOptions" class=" w-input">
                  <option value="account-type">Account Type</option>
                  <option value="enquiry">Enquiry</option>
                  <option value="funding">Funding</option>
                  <option value="withdrawal">Withdrawal</option>
                  <option value="order">Order</option>
                  <option value="payment-method">Payment Method</option>
              </select>    
              <br>      
              <button type="submit" value="Submit" class="submit-button w-button"> 
                Update
                <span class="mini-loader-container ticket-update-loader" style="display: none;">
                  <svg id="mini-loader" class="mini-loader" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
                      <g>
                          <ellipse id="ellipse" cx="50" cy="50" rx="25" ry="25"></ellipse>
                      </g>        
                  </svg>        
                </span>
              </button>
          </form>
          </div>    
          

        <div class="comment-section" style="margin: 10%;">
          <h3>Ticket comments </h3>
          <ul class="posts">
          </ul>
            <form>
              <div class="form-group">
                <textarea class="form-control status-box" rows="3" placeholder="Enter your comment here..."></textarea>
              </div>
            </form>
            <div class="button-group pull-right">
              <p class="counter">250</p>
              <a href="#" class="btn btn-primary">Post comment</a>
              <div class="mini-loader-container comment-loader" style="display: block;">
                <svg id="mini-loader" class="mini-loader" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
                    <g>
                        <ellipse id="ellipse" cx="50" cy="50" rx="25" ry="25"></ellipse>
                    </g>        
                </svg>        
            </div>
            </div>            
        </div>

      </div>  
    </div>
  </div>

  <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=63807ab0318db8bd26b06087" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="../js/webflow.js" type="text/javascript"></script>
  <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js?<?php echo time(); ?>"></script><![endif] -->
  <script src="../backend/admin/config.js?<?php echo time(); ?>"></script>
  <script src="../backend/admin/getTickets.js?<?php echo time(); ?>"></script>
  <script src="../backend/admin/getUserTicketComments.js?<?php echo time(); ?>"></script>

  <script>
    const urlParams = new URLSearchParams(window.location.search);      
    const ticketId = urlParams.get("id");

    const idElement = document.querySelector("#id");
    const createdAtElement = document.querySelector("#created_at");
    const departmentElement = document.querySelector("#department");
    const priorityElement = document.querySelector("#priority");
    const statusElement = document.querySelector("#status");
    const subjectElement = document.querySelector("#subject");
    const updatedAtElement = document.querySelector("#updated_at");
    const userElement = document.querySelector("#user");

    async function main() {
      // Get the ticket ID from the query parameters
      
      const commentList = document.querySelector(".posts")
    
      // Check if ticketId exists and is an integer
      if (ticketId && !isNaN(ticketId) && Number.isInteger(Number(ticketId))) {
        const ticket = await getTicket(baseUrl, accessToken, parseInt(ticketId));
    
        if (ticket) {
          ticketUpdateForm(ticket.id)
          idElement.innerHTML = `${ticket.id}`;
          createdAtElement.innerHTML = `${formatDate(ticket.created_at)}`;
          departmentElement.innerHTML = `${ticket.department}`;
                    // Find the select element by its ID departmentAdminOptions
                    var departmentAdminOptions = document.getElementById("departmentAdminOptions");
                    // Loop through the options and set the selected attribute for the matching option
                    for (var i = 0; i < departmentAdminOptions.options.length; i++) {
                        if (departmentAdminOptions.options[i].value === ticket.department) {
                          departmentAdminOptions.options[i].selected = true;
                            break;
                        }
                    }
          priorityElement.innerHTML = `${ticket.priority}`;
                    // Find the select element by its ID
                    var priorityAdminOptions = document.getElementById("priorityAdminOptions");
                    // Loop through the options and set the selected attribute for the matching option
                    for (var i = 0; i < priorityAdminOptions.options.length; i++) {
                        if (priorityAdminOptions.options[i].value === ticket.priority) {
                          priorityAdminOptions.options[i].selected = true;
                            break;
                        }
                    }
          statusElement.innerHTML = `${ticket.status}`;
                    // Find the select element by its ID
                    var statusAdminOptions = document.getElementById("statusAdminOptions");
                    // Loop through the options and set the selected attribute for the matching option
                    for (var i = 0; i < statusAdminOptions.options.length; i++) {
                        if (statusAdminOptions.options[i].value === ticket.status) {
                          statusAdminOptions.options[i].selected = true;
                            break;
                        }
                    }
          subjectElement.innerHTML = `${ticket.subject}`;
          updatedAtElement.innerHTML = `${formatDate(ticket.updated_at)}`;
          userElement.innerHTML = `${ticket.user.email}`;

          let ticketComments = await userTicketComments(accessToken, ticketId)
                
            for (const ticketComment of ticketComments) {
              setElementDisplayByClassName('comment-loader', 'none');
                console.log("ticket comment object", ticketComment);
                const listItem = document.createElement('li');
                listItem.innerHTML = `<small class="comment-user">${ticketComment.user.email} ${formatDate(ticketComment.created_at)} </small> 
                                        <div class="commwnt-content">${ticketComment.content}</div>`;

                  if(ticketComment.user.email.includes("admin") ){
                    listItem.innerHTML = `<small style="background: white;color: blue" class="comment-user">Admin: ${formatDate(ticketComment.created_at)} </small> 
                    <div class="commwnt-content">${ticketComment.content}</div>`;
                  } else  {
                    listItem.innerHTML = `<small style="background: white;color: gray" class="comment-user">${ticketComment.user.email}: ${formatDate(ticketComment.created_at)} </small> 
                                      <div class="commwnt-content">${ticketComment.content}</div>`;
                  }

                commentList.insertBefore(listItem, commentList.firstChild);
            }

        } else {
          console.log('Failed to retrieve the ticket.');
        }
      } else {
        console.log('Invalid or missing ticket ID in the query parameter.');
      }
    }

  main();

  function setElementDisplayByClassName(className, state) {
    const elements = document.getElementsByClassName(className);              
    for (const element of elements) {
      element.style.display = state;
    }
  }
  
  </script>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
        var btn = document.querySelector('.btn');
        var statusBox = document.querySelector('.status-box');
        var postsList = document.querySelector('.posts');
        var counter = document.querySelector('.counter');
      
        btn.classList.add('disabled');
      
        btn.addEventListener('click', async function() {
            setElementDisplayByClassName('comment-loader', 'flex');
            try {
              var post = statusBox.value;              
              const response = await userTicketCreateComment(accessToken, ticketId, post);                
              var listItem = document.createElement('li');
              listItem.textContent = response.content; 
              postsList.insertBefore(listItem, postsList.firstChild);
              statusBox.value = '';
              counter.textContent = '250';
              btn.classList.add('disabled');
              toastSuccessNotif("Success")
              setElementDisplayByClassName('comment-loader', 'none');
            } catch (error) {
              console.error(error);   
              toastErrorNotif("Error")
              setElementDisplayByClassName('comment-loader', 'none');            
            }
          });
          
      
        statusBox.addEventListener('keyup', function() {
          var postLength = this.value.length;
          var charactersLeft = 250 - postLength;
          counter.textContent = charactersLeft;
      
          if (charactersLeft < 0 || charactersLeft === 250) {
            btn.classList.add('disabled');
          } else {
            btn.classList.remove('disabled');
          }
        });
      });
      
  </script>

<script>

async function ticketUpdateForm(ticketId) {
  const form = document.getElementById('adminModelForm');
  const ticketUpdateLoader = document.querySelector(".ticket-update-loader");
  form.addEventListener('submit', async (event) => {
    ticketUpdateLoader.style.display = 'block';
      event.preventDefault();

      // Extract data from the form fields
      const formData = new FormData(form);
      console.log("formData", formData);

      // Call the updateTicket function and wait for the response
      const ticketUpdate = await updateTicket(baseUrl, accessToken, parseInt(ticketId), formData);
      console.log("ticketUpdate", ticketUpdate);

      if (ticketUpdate !== false) {
        toastSuccessNotif("Sucess")
        console.log("ticketUpdate not false", ticketUpdate);
        ticketUpdateLoader.style.display = 'none';
        setTimeout(function() {
          location.reload();
      }, 2000);
      } else {
        toastErrorNotif("Error")
        console.log("ticketUpdate false", ticketUpdate);
        ticketUpdateLoader.style.display = 'none';
      }
  });
}

</script>
  
</body>
</html>