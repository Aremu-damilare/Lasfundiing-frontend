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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin login - lasfunding</title>

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
.w-form-done{display:none;padding:20px;text-align:center;background-color:#dddddd;}
.w-form-fail{display:none;margin-top:10px;padding:10px;background-color:#ffdede;}
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
.modal-wrapper{ z-index:9999; 
  background-color:white;
  flex-direction:row;
  justify-content:center;
  align-items:center;
  display:none;
  position:fixed;
  top:0%;
  bottom:0%;
  left:0%;
  right:0%;
}
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
    
</head>
<body>

<div data-animation="default" class="rl_navbar2_component w-nav" data-easing2="ease" fs-scrolldisable-element="smart-nav" data-easing="ease" data-collapse="medium" data-w-id="1511b53a-28e7-ffe2-28a4-d6bde20918bb" role="banner" data-duration="400">
    <div class="rl_navbar2_container">
      <a href="#" class="rl_navbar2_logo-link w-nav-brand"><img src="../images/Lasfund-Logo.svg" loading="lazy" alt="" class="rl_navbar2_logo"></a>
      <nav role="navigation" id="w-node-_1511b53a-28e7-ffe2-28a4-d6bde20918bf-5fc2bd49" class="rl_navbar2_menu is-page-height-tablet w-nav-menu">
        <!-- <a href="#" class="nav-link-2 navdash w-nav-link">How it Works</a>
        <a href="#" class="nav-link-2 navdash w-nav-link">Programs</a>
        <a href="#" class="nav-link-2 navdash w-nav-link">FAQ</a>
        <a href="#" class="nav-link-2 navdash w-nav-link">Contact</a> -->
      </nav>
      <div id="w-node-af767584-0aea-c3ec-a231-8de93eeae345-5fc2bd49" class="right-navdash">
        <!-- <a href="#" class="nav-link-2 navdash w-nav-link">My Account (User name)</a><img src="../images/cart.svg" loading="lazy" alt="" class="image"> -->
      </div>
    </div>
  <div class="w-nav-overlay" data-wf-ignore="" id="w-nav-overlay-0"></div></div>

<div style="display: flex; opacity: 1;" class="modal-wrapper">
    <div style="opacity: 1; display: flex;" class="form-container login w-container">
      <div class="form-block w-form">
        <div class="">
        <div id="result"></div>

        <div class="w-form-done" tabindex="-1" role="region" aria-label="Email Form success">        
        <div>Login credentials valid!</div>
          
        </div>
        <div class="w-form-fail" tabindex="-1" role="region" aria-label="Email Form failure">        
          Error logging in!
        </div>


        <img src="../images/Lasfund-Logo.svg" loading="lazy" alt="" class="rl_navbar2_logo">
          <div class="" style="padding: 10px;margin:10px; text-align: center;">Admin Login</div>
          <div class="close-modal-button"><img src="../images/Asset-4.svg" loading="lazy" alt=""></div>
        </div>
        <form id="adminLogin" name="email-form" data-name="Email Form" method="post" data-ms-form="login" class="form login" aria-label="Email Form">
          <input type="email" class="email-field w-input" maxlength="256" id="email" name="email" data-name="email" placeholder="Enter Email Address" id="email" data-ms-member="email" required="">
          
          <div class="password-input-block login">
            <input type="password" class="password-field w-input"  id="password" maxlength="256" name="Password" data-name="Password" placeholder="Enter Password" id="Password" data-ms-member="password" required="">
            <!-- <div class="eye login">
              <img src="http://localhost/lasfunding_front/images/hide.png" loading="lazy" alt="" class="eye-icon">
            </div> -->
          </div>
          <div class="remember-me-section login"><label class="w-checkbox checkbox-field">
            <input type="checkbox" id="checkbox" name="checkbox" data-name="Checkbox" class="w-checkbox-input" checked>
            <span class="checkbox-label w-form-label" for="checkbox">Remember me</span></label>
            <div class="forgot-password">              
            </div>
          </div>
          <button type="submit" value="Login" data-wait="Please wait..." class="submit-button w-button"> 
            Login
          </button>
          
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

  <script src="../backend/admin/config.js?<?php echo time(); ?>"></script>
  <script>        
    
    document.getElementById("adminLogin").addEventListener("submit", function(event) {
        event.preventDefault(); // Prevent the default form submission

        // Get the form data
        const email = document.getElementById("email").value;
        const password = document.getElementById("password").value;
        var formDone = document.querySelector(".w-form-done");
        var formFail = document.querySelector(".w-form-fail");        
        
        fetch(`${baseUrl}/custom/admin/login/`, {
            method: "POST",
            headers: {
                "Content-Type": "application/json"
            },
            body: JSON.stringify({ email, password })
        })
        .then(response => response.json())
        .then(data => {                
            console.log("Data:", data);
            if(data.access_token){
                formDone.style.display = 'block'
                formFail.style.display = 'none'

                // formDone.innerHTML = JSON.stringify(data);
                
                localStorage.setItem('access_token', data.access_token);
                localStorage.setItem('refresh_token', data.refresh_token);
                localStorage.setItem('user', JSON.stringify(data.user));

                setTimeout(function() {
                window.location.href = './dashboard.php';
              }, 2000);

            }else {
                formDone.style.display = 'none'
                formFail.style.display = 'block'                
                formFail.innerHTML = JSON.stringify(data);
            }                
        })
        .catch(error => {                
            console.error("Error:", error);
        });
    });
</script>

</body>
</html>