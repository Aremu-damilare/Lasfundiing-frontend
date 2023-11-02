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
  <title>Order detail - lasfunding</title>
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
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
  <script src="../backend/config/toast.js?<?php echo time(); ?>"></script>
  <style>                          
    .mini-loader-container {
      display: none;
      align-items: center;
      flex-direction: column;
    }
    
    .mini-loader {
        /** height: 2256px; **/     
      width: 40px;
      stroke-width: 25px;
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
            <a href="./tickets.php"  class="rl_navbar1_link w-nav-link">Tickets </a>
          </div>
          
          <div class="right-navbar-link">
            <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M19.572 7.69116H4.42195C4.2374 7.69203 4.05949 7.76007 3.92146 7.88257C3.78343 8.00507 3.69473 8.17365 3.67195 8.35679L2.3407 20.3568C2.32886 20.4613 2.33915 20.5672 2.37091 20.6675C2.40267 20.7679 2.45518 20.8604 2.52503 20.9391C2.59488 21.0178 2.68051 21.0809 2.77635 21.1243C2.8722 21.1677 2.9761 21.1905 3.08133 21.1912H20.9126C21.0178 21.1905 21.1217 21.1677 21.2175 21.1243C21.3134 21.0809 21.399 21.0178 21.4689 20.9391C21.5387 20.8604 21.5912 20.7679 21.623 20.6675C21.6547 20.5672 21.665 20.4613 21.6532 20.3568L20.322 8.35679C20.2992 8.17365 20.2105 8.00507 20.0724 7.88257C19.9344 7.76007 19.7565 7.69203 19.572 7.69116V7.69116Z" stroke="gray" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M8.25 10.6912V7.69116C8.25 6.6966 8.64509 5.74277 9.34835 5.03951C10.0516 4.33625 11.0054 3.94116 12 3.94116C12.9946 3.94116 13.9484 4.33625 14.6517 5.03951C15.3549 5.74277 15.75 6.6966 15.75 7.69116V10.6912" stroke="gray" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>           
            <a href="./orders.php"  style="color: #E04800;font-style: oblique;" class="rl_navbar1_link w-nav-link">Orders </a>
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
          <span>Order detail #<span id="id"></span> </span>    
          <span class="mini-loader-container">
          <svg id="mini-loader" class="mini-loader" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
              <g>
                <ellipse id="ellipse" cx="50" cy="50" rx="25" ry="25" />
              </g>        
          </svg>        
        </span>     
        </div>        
      </div>

      <div class="analyzer-section dashboard wf-section" style="display: block;">      
        <div class="info-container">                    
          <p class="info-block"><span class="info-label">Updated at</span><span id="updated_at"></span></p>
          <p class="info-block"><span class="info-label">Active</span><span id="active"></span></p>
          <p class="info-block"><span class="info-label">Account type</span><span id="accountType"></span></p>
          <p class="info-block"><span class="info-label">Payment method</span><span id="paymentMethod"></span></p>        
          <p class="info-block"><span class="info-label">Payment details </span><span id="paymentDetail"></span></p>
          <p class="info-block"><span class="info-label">Status</span><span id="status"></span></p>
          <p class="info-block"><span class="info-label">Stage</span><span id="stage"></span></p>
          <p class="info-block"><span class="info-label">Profit</span><span id="profit"></span></p>
          <p class="info-block"><span class="info-label">Transaction</span><span id="transactionStatus"></span></p>          
          <p class="info-block"><span class="info-label">User email</span><span id="user"></span> </p>
          <p class="info-block"><span class="info-label">Created at</span><span id="created_at"></span></p>

          <form method="post" id="adminModelForm">                  
            <label for="status">Order status</label>
            <select name="status" id="orderStatusAdminOptions" class=" w-input">
                <option value="pending">Pending</option>
                <option value="cancelled">Cancelled</option>
                <option value="success">Success</option>
                <option value="failed">Failed</option>
            </select>

            <label for="transactionStatus">Transaction on Order status</label>
            <select name="transactionStatus" id="transactionStatusAdminOptions" class=" w-input">
                <option value="pending">Pending</option>
                <option value="cancelled">Cancelled</option>
                <option value="success">Success</option>
                <option value="failed">Failed</option>
            </select>

            <label for="stage">Stage</label>
            <select name="stage" id="orderStageAdminOptions" class=" w-input">
                <option value="idle">Idle</option>
                <option value="close">Close</option>
                <option value="active">Active</option>
                <option value="phase_2_demo">Phase 2 Demo</option>
                <option value="phase_1_demo">Phase 1 Demo</option>
            </select>

            <label for="active" style="place-self: center;">Active</label>
            <input type="checkbox" name="active" id="activeAdminOption" class=" w-input" value="true" checked>

            <label for="profit">Profit</label>
            <input type="number" name="profit" id="profitAdminInput" step="0.01" value="0.0" class=" w-input">
        
            <br>

            <button type="submit" value="Submit" class="submit-button w-button"> 
              Update
              <span class="mini-loader-container order-update-loader">
                <svg id="mini-loader" class="mini-loader" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
                    <g>
                      <ellipse id="ellipse" cx="50" cy="50" rx="25" ry="25" />
                    </g>        
                </svg>        
              </span>
            </button>
      </form>
      </div>        
      </div>  
    </div>
  </div>

  <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=63807ab0318db8bd26b06087" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="../js/webflow.js" type="text/javascript"></script>
  <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js?<?php echo time(); ?>"></script><![endif] -->
  <script src="../backend/admin/config.js?<?php echo time(); ?>"></script>
  <script src="../backend/admin/getOrders.js?<?php echo time(); ?>"></script>

  <script>

    const idElement = document.querySelector("#id");
    const createdAtElement = document.querySelector("#created_at");
    const activeElement = document.querySelector("#active");
    const accountTypeElement = document.querySelector("#accountType");
    const paymentMethod = document.querySelector("#paymentMethod");
    const paymentDetail = document.querySelector("#paymentDetail");
    const statusElement = document.querySelector("#status");
    const stageElement = document.querySelector("#stage");
    const profitElement = document.querySelector("#profit");
    const transactionStatus = document.querySelector("#transactionStatus");
    const updatedAtElement = document.querySelector("#updated_at");
    const userElement = document.querySelector("#user");

    async function main() {
      var miniLoader = document.querySelector(".mini-loader-container");
      miniLoader.style.display = 'block';
      // Get the order ID from the query parameters
      const urlParams = new URLSearchParams(window.location.search);
      const orderId = urlParams.get("id");
    
      // Check if orderId exists and is an integer
      if (orderId && !isNaN(orderId) && Number.isInteger(Number(orderId))) {
        const order = await getOrder(baseUrl, accessToken, parseInt(orderId));
    
        if (order) {
          console.log("order...", order)
          orderUpdateForm(order.id)
          idElement.innerHTML = `${order.id}`;
          activeElement.innerHTML = `${order.active}`;

          // Find the checkbox element by its ID
          var checkboxElement = document.getElementById("activeAdminOption");

          // Set the checked attribute based on the value of the 'active' variable
          checkboxElement.checked = order.active;

          createdAtElement.innerHTML = `${formatDate(order.created_at)}`;
          accountTypeElement.innerHTML = `${order.account_type.amount}`;
          paymentMethod.innerHTML = `${order.payment_method.name}`;
          paymentDetail.innerHTML = `
                                  <a  href="${order.transaction.payment_details.payment_proof}">
                                    <img style="height: 40px" src="${order.transaction.payment_details.payment_proof}">
                                  </a> <br>Gatway: ${order.transaction.payment_details.crypto_gateway}
                                        <br>Card: ${order.transaction.payment_details.card_type}                                        
                                  `;
          statusElement.innerHTML = `${order.status}`;

          // Find the select element by its ID
          var orderStatusAdminOptions = document.getElementById("orderStatusAdminOptions");
          // Loop through the options and set the selected attribute for the matching option
          for (var i = 0; i < orderStatusAdminOptions.options.length; i++) {
              if (orderStatusAdminOptions.options[i].value === order.status) {
                orderStatusAdminOptions.options[i].selected = true;
                  break;
              }
          }


          stageElement.innerHTML = `${order.stage}`;
          // Find the select element by its ID
          var orderStageAdminOptions = document.getElementById("orderStageAdminOptions");
          // Loop through the options and set the selected attribute for the matching option
          for (var i = 0; i < orderStageAdminOptions.options.length; i++) {
              if (orderStageAdminOptions.options[i].value === order.stage) {
                orderStageAdminOptions.options[i].selected = true;
                  break;
              }
          }

          profitElement.innerHTML = `${order.profit}`;
          const profitAdminInput = document.querySelector("#profitAdminInput");
          profitAdminInput.value = `${order.profit}`;
          transactionStatus.innerHTML = `Status: ${order.transaction.status} <br> Fee: ${order.transaction.amount}`;

          // Find the select element by its ID
          var selectElement = document.getElementById("transactionStatusAdminOptions");
          // Loop through the options and set the selected attribute for the matching option
          for (var i = 0; i < selectElement.options.length; i++) {
              if (selectElement.options[i].value === order.transaction.status) {
                  selectElement.options[i].selected = true;
                  break;
              }
          }

          updatedAtElement.innerHTML = `${formatDate(order.updated_at)}`;
          userElement.innerHTML = `${order.user.email}`;
          miniLoader.style.display = 'none';
        } else {
          console.log('Failed to retrieve the order.');
          miniLoader.style.display = 'none';
        }
      } else {
        console.log('Invalid or missing order ID in the query parameter.');
        miniLoader.style.display = 'none';
      }
    }

  main();
  </script>


  <script>
    async function orderUpdateForm(orderId) {
      const orderUpdateLoader = document.querySelector(".order-update-loader");

      const form = document.getElementById('adminModelForm');
      form.addEventListener('submit', async (event) => {
        orderUpdateLoader.style.display = 'block';
          event.preventDefault();
  
          // Extract data from the form fields
          const formData = new FormData(form);
          console.log("formData", formData);
  
          // Call the updateOrder function and wait for the response
          const orderUpdate = await updateOrder(baseUrl, accessToken, parseInt(orderId), formData);
          console.log("orderUpdate", orderUpdate);
  
          if (orderUpdate !== false) {
            console.log("orderUpdate not false", orderUpdate);
            orderUpdateLoader.style.display = 'none';
            toastSuccessNotif("Success")
            setTimeout(function() {
              location.reload();
          }, 2000);
          } else {
            console.log("orderUpdate false", orderUpdate);
            toastErrorNotif("Error")
            orderUpdateLoader.style.display = 'none';
            setTimeout(function() {
              location.reload();
          }, 2000);
          }
      });
  }  
</script>

<script>  
  function PaymentProofBase64Converter(paymentProofBase64){
    console.log(paymentProofBase64)
    var proofElement = document.getElementById("proof");
        fileContentString = paymentProofBase64
        // Create an image or PDF element based on the data
        if (fileContentString.startsWith("data:image")) {
            // It's an image
            var image = new Image();
            image.src = fileContentString;
            image.style.display = "block";
            image.style.height = "246px";
            image.style.margin = "11px 30px 0";
            image.style.maxWidth = "100%";
            image.style.verticalAlign = "top";
            image.style.width = "226px";
            proofElement.innerHTML = '';
            proofElement.appendChild(image);
        } else if (fileContentString.startsWith("data:application/pdf")) {
            // It's a PDF
            var pdfEmbed = document.createElement("embed");
            pdfEmbed.src = fileContentString;
            pdfEmbed.type = "application/pdf";
            pdfEmbed.width = "100%";
            pdfEmbed.height = "500px"; // Set the desired height for the PDF viewer
            proofElement.innerHTML = '';
            proofElement.appendChild(pdfEmbed);
        } else {
            // Handle other file types or show an error message
            proofElement.innerHTML = "Unsupported file type.";
        }
}
</script>

</body>
</html>