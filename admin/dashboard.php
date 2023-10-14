<!DOCTYPE html><!--  This site was created in Webflow. https://www.webflow.com  -->
<!--  Last Published: Wed May 03 2023 23:06:33 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="6422ec78a05bb3194102a79b" data-wf-site="63807ab0318db8bd26b06087">
<head>
  <meta charset="utf-8">
  <title>Admin Dashboard - lasfunding</title>
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
  
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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
    Admin
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
          <div class="right-navbar-link">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M11.4639 2.78215L8.77252 5.47358C8.47962 5.76647 8.47962 6.24134 8.77252 6.53424L11.462 9.22367C11.7548 9.51657 12.2297 9.51657 12.5226 9.22367L15.214 6.53225C15.5069 6.23935 15.5069 5.76448 15.214 5.47159L12.5246 2.78215C12.2317 2.48926 11.7568 2.48926 11.4639 2.78215Z" stroke="#CC4200" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M17.4678 8.78215L14.7764 11.4736C14.4835 11.7665 14.4835 12.2413 14.7764 12.5342L17.4659 15.2237C17.7588 15.5166 18.2336 15.5166 18.5265 15.2237L21.2179 12.5322C21.5108 12.2394 21.5108 11.7645 21.2179 11.4716L18.5285 8.78215C18.2356 8.48926 17.7607 8.48926 17.4678 8.78215Z" stroke="#CC4200" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M5.46785 8.77434L2.77642 11.4658C2.48353 11.7587 2.48353 12.2335 2.77642 12.5264L5.46586 15.2159C5.75875 15.5088 6.23363 15.5088 6.52652 15.2159L9.21795 12.5244C9.51084 12.2315 9.51084 11.7567 9.21795 11.4638L6.52851 8.77434C6.23562 8.48145 5.76074 8.48145 5.46785 8.77434Z" stroke="#CC4200" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M11.4678 14.7743L8.77642 17.4658C8.48353 17.7587 8.48353 18.2335 8.77642 18.5264L11.4659 21.2159C11.7588 21.5088 12.2336 21.5088 12.5265 21.2159L15.2179 18.5244C15.5108 18.2315 15.5108 17.7567 15.2179 17.4638L12.5285 14.7743C12.2356 14.4814 11.7607 14.4814 11.4678 14.7743Z" stroke="#CC4200" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
              
            <a href="#" style="color: #E04800;font-style: oblique;"  class="rl_navbar1_link w-nav-link"> Dashboard <img src="../images/icons/CaretRight.svg" alt="" srcset=""></a>
          </div>

          <div class="right-navbar-link"><img src="../images/icons/admin/RreceiptTax.svg" loading="lazy" alt="" class="">
            <a href="./tickets.php" class="rl_navbar1_link w-nav-link">Ticket </a>
          </div>

          
          <div class="right-navbar-link">
            <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M19.572 7.69116H4.42195C4.2374 7.69203 4.05949 7.76007 3.92146 7.88257C3.78343 8.00507 3.69473 8.17365 3.67195 8.35679L2.3407 20.3568C2.32886 20.4613 2.33915 20.5672 2.37091 20.6675C2.40267 20.7679 2.45518 20.8604 2.52503 20.9391C2.59488 21.0178 2.68051 21.0809 2.77635 21.1243C2.8722 21.1677 2.9761 21.1905 3.08133 21.1912H20.9126C21.0178 21.1905 21.1217 21.1677 21.2175 21.1243C21.3134 21.0809 21.399 21.0178 21.4689 20.9391C21.5387 20.8604 21.5912 20.7679 21.623 20.6675C21.6547 20.5672 21.665 20.4613 21.6532 20.3568L20.322 8.35679C20.2992 8.17365 20.2105 8.00507 20.0724 7.88257C19.9344 7.76007 19.7565 7.69203 19.572 7.69116V7.69116Z" stroke="gray" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M8.25 10.6912V7.69116C8.25 6.6966 8.64509 5.74277 9.34835 5.03951C10.0516 4.33625 11.0054 3.94116 12 3.94116C12.9946 3.94116 13.9484 4.33625 14.6517 5.03951C15.3549 5.74277 15.75 6.6966 15.75 7.69116V10.6912" stroke="gray" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>           
            <a href="./orders.php"  class="rl_navbar1_link w-nav-link">Orders </a>
          </div>

          <div class="right-navbar-link"><img src="../images/icons/admin/outline.svg" loading="lazy" alt="" class="">
            <a href="#" class="rl_navbar1_link w-nav-link">Users</a>
          </div>

          <div class="right-navbar-link"><img src="../images/icons/admin/CurrencyCircleDollar.svg" loading="lazy" alt="" class="">
            <a href="./manage-plans.php" class="rl_navbar1_link w-nav-link">Manage plan</a>
          </div>

          <div class="right-navbar-link"><img src="../images/icons/admin/ArrowBendUpLeft.svg" loading="lazy" alt="" class="">
            <a href="#" class="rl_navbar1_link w-nav-link">Withdrawal</a>
          </div>

          <div class="right-navbar-link"><img src="../images/icons/admin/ChatsTeardrop.svg" loading="lazy" alt="" class="">
            <a href="#" class="rl_navbar1_link w-nav-link">KYC</a>
          </div>
          
          <div class="right-navbar-link"><img src="../images/icons/admin/Gear.svg" loading="lazy" alt="" class="">
            <a href="#" class="rl_navbar1_link w-nav-link">Settings</a>
          </div>

          <div class="right-navbar-link"><img src="../images/icons/admin/SignOut.svg" loading="lazy" alt="" class="">
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
        <span>Dashboard</span>        
      </div>
      <div><span style="color: #E04800;float: right;">Sign Out</span></div>
    </div>

    <div class="analyzer-section dashboard wf-section" style="display: block;">
      <div style="">
        <canvas id="myChart" height="70"></canvas>
      </div>                
        <style>
          .card {
              width: 406px;
              height: 151px;
              border: 1.58px solid #000;
              border-radius: 24px;
              padding: 32px 16px 8px 16px;
              margin-bottom: 24px;
              display: inline-block;
              box-sizing: border-box;
          }
      
          /* Add your card-specific styling here */
          .card:nth-child(1) {
              background-color: #ffffff;
              color: #333;
          }
      
          .card:nth-child(2) {
              background-color: #ffffff;
              color: #333;
          }
        </style>

        <div style="display: flex;justify-content: space-evenly;margin: 25px 35px;">
            <div class="card">              
                <h4>Total deposit</h4>
                <p><strong>$501,247</strong> <span>&#94;5%</span></p>
            </div>
            
            <div class="card">              
                <h4>Total withdrawal</h4>
                <p><strong>$901,247</strong> <span>&#94;20%</span></p>
            </div>    
        </div>
        
        <div class="transaction-card">
          <div class="table-header-wrapper">
            <div class="table-header">Transactions</div>
            <a href="#" class="link-block w-inline-block">
              <div class="text-block-58">See All Transactions</div><img src="../images/CaretUp.svg" loading="lazy" width="13" alt="" class="image-13">
            </a>
          </div>
          <div class="transaction-table">

            <div id="" class="status">
              <div id="" class="completed"><img src="../images/Ellipse-8.svg" loading="lazy" alt="" class="status-icon">
                <div class="text-block-63">Completed</div>
              </div>
            </div>
            <div id="" class="payment-type">
              <div class="text-block-62">Mastercard &nbsp;**** 6442</div>
              <div class="text-block-61">Card payment</div>
            </div>
            <div id="" class="amount">
              <div class="text-block-64">$99.00</div>
            </div>
            <div id="" class="date">
              <div class="text-block-65">Jan 27, 2022</div>
            </div>

            <div class="status">
              <div id="" class="pending"><img src="../images/Ellipse-8-1.svg" loading="lazy" alt="" class="status-icon">
                <div class="text-block-60">Pending</div>
              </div>
            </div>            
            <div id="" class="payment-type">
              <div class="text-block-62">Account &nbsp;**** 5665</div>
              <div class="text-block-61">Bank payment</div>
            </div>
            <div id="" class="amount">
              <div class="text-block-64">$99.00</div>
            </div>
            <div id="" class="date">
              <div class="text-block-65">Jan 27, 2022</div>
            </div>

            <div class="status">
              <div id="" class="pending"><img src="../images/Ellipse-8-1.svg" loading="lazy" alt="" class="status-icon">
                <div class="text-block-60">Pending</div>
              </div>
            </div>            
            <div id="" class="payment-type">
              <div class="text-block-62">Account &nbsp;**** 5665</div>
              <div class="text-block-61">Bank payment</div>
            </div>
            <div id="" class="amount">
              <div class="text-block-64">$99.00</div>
            </div>
            <div id="" class="date">
              <div class="text-block-65">Jan 27, 2022</div>
            </div>

            <div id="" class="status">
              <div id="" class="canceled"><img src="../images/Ellipse-8-2.svg" loading="lazy" alt="" class="status-icon">
                <div class="text-block-59">Canceled</div>
              </div>
            </div>
            <div id="" class="payment-type">
              <div class="text-block-62">Mastercard &nbsp;**** 6442</div>
              <div class="text-block-61">Card payment</div>
            </div>
            <div id="" class="amount">
              <div class="text-block-64">$500.00</div>
            </div>
            <div id="" class="date">
              <div class="text-block-65">Jan 27, 2022</div>
            </div>

          </div>
          <div class="no-transaction-table" style="text-align: center;">
            <div>No Transactions!</div>
          </div>

        </div>
    </div>
  
  </div>
  <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=63807ab0318db8bd26b06087" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="../js/webflow.js" type="text/javascript"></script>
  <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
  <!-- <script src="../backend/admin/dashboard.js"></script> -->
  
  <script>
    const ctx = document.getElementById('myChart');

    new Chart(ctx, {
      type: 'bar',
      data: {
        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'June'],
        datasets: [{
          label: 'Sales',
          data: [12, 19, 3, 5, 2, 3],
          borderWidth: 1,
          backgroundColor: '#FCEDE6' 
        }]
      },
      options: {
        scales: {
          y: {
            beginAtZero: true
          }
        }
      }
    });
  </script>

</body>
</html>