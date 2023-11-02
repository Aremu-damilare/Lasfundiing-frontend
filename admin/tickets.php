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
  <title>Tickets - lasfunding</title>
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
      <a href="#" class="w-inline-block">
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
            <a href="#" style="color: #E04800;font-style: oblique;" class="rl_navbar1_link w-nav-link">Tickets </a>
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
    <div class="gradient-header">      
      <div style="color: #E04800;font-style: oblique;"  class="text-block-57">
        <span>Tickets</span>        
      </div>
      <!-- <div><span style="color: #E04800;float: right;"><img src="./images/icons/Copy.svg" alt=""> Copy link</span></div> -->
    </div>
    <div class="analyzer-section dashboard wf-section" style="display: block;">
      
        
        <div style="overflow-x: auto;">
          <table class="slds-table slds-table--bordered">
              <thead>
                <tr class="slds-text-heading--label">
                  <th class="slds-cell-shrink">
                    <label class="slds-checkbox">
                        <input type="checkbox" name="options" />
                        <span class="slds-checkbox--faux"></span>
                        <span class="slds-assistive-text">Select All</span>
                      </label>
                  </th>
                  <th class="slds-is-sortable" scope="col">
                    <div class="slds-truncate">Priority, Id
                      <button class="slds-button slds-button--icon-bare">                        
                          <span class="slds-assistive-text">Sort</span>
                        </button>
                    </div>
                  </th>
                  <th class="slds-is-sortable" scope="col">
                    <div class="slds-truncate">User
                      <button class="slds-button slds-button--icon-bare">                          
                          <span class="slds-assistive-text">Sort</span>
                        </button>
                    </div>
                  </th>
                
                  <th class="slds-is-sortable" scope="col">
                    <div class="slds-truncate">Status
                      <button class="slds-button slds-button--icon-bare">                         
                          <span class="slds-assistive-text">Sort</span>
                        </button>
                    </div>
                  </th>
                  <th class="slds-is-sortable" scope="col">
                    <div class="slds-truncate">Subject
                      <button class="slds-button slds-button--icon-bare">                          
                          <span class="slds-assistive-text">Sort</span>
                        </button>
                    </div>
                  </th>
                 
                  <th class="slds-is-sortable" scope="col">
                      <div class="slds-truncate">Date
                        <button class="slds-button slds-button--icon-bare">                         
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
  <script src="../backend/admin/config.js?<?php echo time(); ?>"></script>
  <script src="../backend/admin/getTickets.js?<?php echo time(); ?>"></script>

  <script>
    async function main() {    

    const tickets = await getTickets(baseUrl, accessToken);

    if (tickets) {
      console.log('Tickets:', tickets);



    var tbody = document.querySelector('tbody'); 


    tickets.forEach(function(ticket) {
      var row = document.createElement('tr');
      
      // Create and append the "Select Row" cell
      var selectCell = document.createElement('td');
      selectCell.className = 'slds-cell-shrink';
      var checkbox = document.createElement('input');
      checkbox.type = 'checkbox';
      checkbox.name = 'options';
      var checkboxLabel = document.createElement('label');
      checkboxLabel.className = 'slds-checkbox';
      checkboxLabel.appendChild(checkbox);
      checkboxLabel.innerHTML += '<span class="slds-checkbox--faux"></span><span class="slds-assistive-text">Select Row</span>';
      selectCell.appendChild(checkboxLabel);
      row.appendChild(selectCell);

      
      var opportunityCell = document.createElement('th');
      opportunityCell.className = 'slds-truncate';
      opportunityCell.setAttribute('data-label', 'Opportunity Name');
      opportunityCell.innerHTML = `<a href="./ticket.php?id=${ticket.id}"> ${ticket.priority}<br> ${ticket.id} </a>`;
      row.appendChild(opportunityCell);

      var accountCell = document.createElement('td');
      accountCell.className = 'slds-truncate';
      accountCell.setAttribute('data-label', 'Account Name');
      accountCell.innerHTML = `${ticket.user.email}`;
      row.appendChild(accountCell);

      var statusCell = document.createElement('td');
      statusCell.className = '';
      statusCell.setAttribute('data-label', 'Confidence');
      statusCell.innerHTML = ticket.status;
      row.appendChild(statusCell);

      var descriptionCell = document.createElement('td');
      descriptionCell.className = '';
      descriptionCell.setAttribute('data-label', 'Confidence');
      descriptionCell.innerHTML = ticket.subject;
      row.appendChild(descriptionCell);

      var dateCell = document.createElement('td');
      dateCell.className = '';
      dateCell.setAttribute('data-label', 'Close Date');
      dateCell.innerHTML = formatDate(ticket.updated_at);
      row.appendChild(dateCell);
      
      tbody.appendChild(row);
    });

    } else {
      console.log('Failed to retrieve tickets.');
    }
  }

  main();

  </script>

</body>
</html>