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
<html data-wf-page="644c3fcdf5d931140d52698c" data-wf-site="63807ab0318db8bd26b06087">
<head>
  <meta charset="utf-8">
  <title>Email Verification</title>
  <meta content="Email Verification" property="og:title">
  <meta content="Email Verification" property="twitter:title">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="Webflow" name="generator">
  <link href="css/normalize.css?<?php echo time(); ?>" rel="stylesheet" type="text/css">
  <link href="css/webflow.css?<?php echo time(); ?>" rel="stylesheet" type="text/css">
  <link href="css/lasfunding.webflow.css?<?php echo time(); ?>" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
  <script type="text/javascript">WebFont.load({  google: {    families: ["Ubuntu:300,300italic,400,400italic,500,500italic,700,700italic","Exo:100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic","Poppins:100,200,300,regular,500,600,700,800,900,900italic"]  }});</script>
  <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
  <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
  <link href="images/favicon.png" rel="shortcut icon" type="image/x-icon">
  <link href="images/webclip.png" rel="apple-touch-icon"><!--  Memberstack webflow package  -->
  <style>
    .countdown {
    background: #e04800;
    color: white;
    padding: 10px;
    text-align: center;
    margin: 19px;
}
  </style>
</head>
<body>
  <div class="w-users-userformpagewrap page-wrapper">
    <div class="sign-up-page-wrapper"><img src="images/Lasfund-Logo-2.svg" loading="lazy" width="208" alt="" class="lasfunding-logo">
      <div class="w-users-userformheader">
        <h2 class="heading-10">Almost there</h2>
        <div class="text-block-83">To complete your registration we have sent you a verification link to the email you provided. Check your inbox.</div>
      </div>
      <div class="user-email">member@lasfunding.com</div>
      <div class="text-block-85">Didnt get the verification link?</div>
      <div class="text-block-86">If you didn’t receive any verification link, check your <span class="bold-text">spam</span> folder, make sure your email can receive emails, some work or school emails do not receive emails.</div>
      <a href="#" class="resend-link w-button">Send Again</a>
    </div>
    <div class="sign-up-right">
      <div class="signup-nav-bar w-container">
        <div class="signup-menu-block">
          <div class="menu-text">
            <a href="./index.php" class="sign-up-nav-bar-link">Home</a>
          </div>
        </div>
        <!-- <div class="signup-menu-block">
          <div class="menu-text">
            <a href="index.html" class="sign-up-nav-bar-link">Programs</a>
          </div>
        </div> -->
        <div class="signup-menu-block">
          <div class="menu-text account">
            <a href="./index.php#BuyAccount" class="sign-up-nav-bar-link">Account type</a>
          </div>
        </div>
      </div>
      <div class="signup-text-block">You make the <span class="orange-text">way</span></div>
      <div class="signup-text-block second">We take the <span class="orange-text">risk</span></div>
    </div>
  </div>
  <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=63807ab0318db8bd26b06087" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="js/webflow.js" type="text/javascript"></script>
  <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js?<?php echo time(); ?>"></script><![endif] -->
    <script src="./backend/config/_service-worker.js?<?php echo time(); ?>"></script>
  <script src="./backend/email-verification.js?<?php echo time(); ?>"></script>
</body>
</html>