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
    @media screen and (max-width: 900px) {
         
  }

  @media screen and (min-width: 900px) {
         
}

  
  .rl_navbar1_component {
    z-index: 1;
    width: 18%;
    /* height: 100vw; */
    min-height: 0;
    background-color: rgba(0, 0, 0, 0);
    border-bottom: 1px #000;
    flex-direction: column;
    align-items: center;
    margin-top: -145px;
    margin-right: 5px;
    padding-left: 0%;
    padding-right: 0%;
    display: flex;
    position: relative;
    /* top: 100px; */
    bottom: auto;
    overflow: visible;
    }  
  </style>

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

 <script>    
    // Get the current URL
    const url = new URL(window.location.href);
    // Get the value of the 'ticketId' query parameter
    const ticketId = url.searchParams.get('ticketId');
 </script>

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


.row {
	display: -ms-flexbox;
	display: flex;
	-ms-flex-wrap: wrap;
	flex-wrap: wrap;
	margin-right: -15px;
	margin-left: -15px;
}

.col,
.col-auto,
.col-md-12,
.col-xl-4 {
	position: relative;
	width: 100%;
	padding-right: 15px;
	padding-left: 15px;
}

.col {
	-ms-flex-preferred-size: 0;
	flex-basis: 0;
	-ms-flex-positive: 1;
	flex-grow: 1;
	max-width: 100%;
}

.col-auto {
	-ms-flex: 0 0 auto;
	flex: 0 0 auto;
	width: auto;
	max-width: 100%;
}

@media (min-width:768px) {
	.col-md-12 {
		-ms-flex: 0 0 100%;
		flex: 0 0 100%;
		max-width: 100%;
	}
}

@media (min-width:1200px) {
	.col-xl-4 {
		-ms-flex: 0 0 33.333333%;
		flex: 0 0 33.333333%;
		max-width: 33.333333%;
	}
}

.card {
	position: relative;
	display: -ms-flexbox;
	display: flex;
	-ms-flex-direction: column;
	flex-direction: column;
	min-width: 0;
    width: 100%;
	word-wrap: break-word;
	background-color: #fff;
	background-clip: border-box;
	border: 1px solid rgba(0, 0, 0, .125);
	border-radius: .25rem;
}

.card-body {
	-ms-flex: 1 1 auto;
	flex: 1 1 auto;
	padding: 1.25rem;
}

.align-items-center {
	-ms-flex-align: center !important;
	align-items: center !important;
}




.fas {
	-moz-osx-font-smoothing: grayscale;
	-webkit-font-smoothing: antialiased;
	display: inline-block;
	font-style: normal;
	font-variant: normal;
	text-rendering: auto;
	line-height: 1;
}

.fa-bullseye:before {
	content: "\f140";
}

.fa-eye:before {
	content: "\f06e";
}

.fa-hand-paper:before {
	content: "\f256";
}

.fas {
	font-family: Font Awesome\ 5 Free;
}

.fas {
	font-weight: 900;
}


*:focus {
	outline: none;
}


.card {
	border-radius: 5px;
	-webkit-box-shadow: 0 0 5px 0 rgba(43, 43, 43, .1), 0 11px 6px -7px rgba(43, 43, 43, .1);
	box-shadow: 0 0 5px 0 rgba(43, 43, 43, .1), 0 11px 6px -7px rgba(43, 43, 43, .1);
	border: none;
	margin-bottom: 30px;
	-webkit-transition: all .3s ease-in-out;
	transition: all .3s ease-in-out;
}

.m-b-0 {
	margin-bottom: 0;
}

.m-b-25 {
	margin-bottom: 25px;
}

.f-w-700 {
	font-weight: 700;
}

.bg-c-blue {
	background: #4099ff;
}

.text-c-blue {
	color: #4099ff;
}

.bg-c-green {
	background: #2ed8b6;
}

.text-c-green {
	color: #2ed8b6;
}

.bg-c-yellow {
	background: #ffb64d;
}

.text-c-yellow {
	color: #ffb64d;
}


.comp-card i {
	color: #fff;
	width: 50px;
	height: 50px;
	border-radius: 5px;
	text-align: center;
	padding: 17px 0;
	font-size: 18px;
	text-shadow: 0 6px 8px rgba(62, 57, 107, .18);
	-webkit-transition: all .3s ease-in-out;
	transition: all .3s ease-in-out;
}

.comp-card:hover i {
	border-radius: 50%;
}

/*! CSS Used fontfaces */
@font-face {
	font-family: Font Awesome\ 5 Free;
	font-style: normal;
	font-weight: 400;
	src: url(https://demo.dashboardpack.com/admindek-html/files/assets/fonts/fa-regular-400.eot);
	src: url(https://demo.dashboardpack.com/admindek-html/files/assets/fonts/fa-regular-400.eot?#iefix) format("embedded-opentype"), url(https://demo.dashboardpack.com/admindek-html/files/assets/fonts/fa-regular-400.woff2) format("woff2"), url(https://demo.dashboardpack.com/admindek-html/files/assets/fonts/fa-regular-400.woff) format("woff"), url(https://demo.dashboardpack.com/admindek-html/files/assets/fonts/fa-regular-400.ttf) format("truetype"), url(https://demo.dashboardpack.com/admindek-html/files/assets/fonts/fa-regular-400.svg#fontawesome) format("svg");
}

@font-face {
	font-family: Font Awesome\ 5 Free;
	font-style: normal;
	font-weight: 900;
	src: url(https://demo.dashboardpack.com/admindek-html/files/assets/fonts/fa-solid-900.eot);
	src: url(https://demo.dashboardpack.com/admindek-html/files/assets/fonts/fa-solid-900.eot?#iefix) format("embedded-opentype"), url(https://demo.dashboardpack.com/admindek-html/files/assets/fonts/fa-solid-900.woff2) format("woff2"), url(https://demo.dashboardpack.com/admindek-html/files/assets/fonts/fa-solid-900.woff) format("woff"), url(https://demo.dashboardpack.com/admindek-html/files/assets/fonts/fa-solid-900.ttf) format("truetype"), url(https://demo.dashboardpack.com/admindek-html/files/assets/fonts/fa-solid-900.svg#fontawesome) format("svg");
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
    .btn-success{color:#fff;background-color:green;border-color:#2e6da4;}
    .btn-success:focus{color:#fff;background-color:green;border-color:#122b40;}
    .btn-success:hover{color:#fff;background-color:green;border-color:#204d74;}
    .btn-success:active{color:#fff;background-color:green;border-color:#204d74;}
    .btn-success:active:focus,.btn-success:active:hover{color:#fff;background-color:#204d74;border-color:#122b40;}
    .btn-success:active{background-image:none;}
    .btn-success.disabled:focus,.btn-success.disabled:hover{background-color:green;border-color:#2e6da4;}
    .container:after,.container:before{display:table;content:" ";}
    .container:after{clear:both;}
    .pull-right{float:right!important;}
    
    .heading{color:#666666;text-align:center;}
    body{font-family:Arial, sans-serif;color:#404040;background-color:#eee;}
    .container{width:520px;margin-top:20px;}
    .button-group{margin-bottom:20px;}
    .counter{display:inline;margin-top:0;margin-bottom:0;margin-right:10px;}
    .posts{clear:both;list-style:none;padding-left:0;width:100%;text-align:left;}
    .btn-success{color:#fff;background-color:green;border-color:#2e6da4;}
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
      overflow-y: auto;
      height: 55vh;
      text-align: left;
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
      /*box-shadow:8px 8px 5px #888888; */
    }
    .btn-success {
        color: #fff;
        background-color: green;
        border-color: green;
    }
    
</style>

<style>
  span.info-label {
    color: #fff;
    font-weight: bold;
    margin: 10px;
    font-size: 15px;
}

.info-value {
  color: #fff;
}

.info-block {  
  margin-top: -15px;
  margin-left: 5px;
}
</style>

<style>
  small.comment-user {
    color: #fff;
    margin-bottom: 13px;
    padding: 2px;
    background: #e04800;
}
.commwnt-content {
  margin-top: 1em;
  border: 5px solid #edf1f7;
  background: #edf1f7;
  border-radius: 9px;
  padding: 12px;
  font-size: 15px;
}
</style>

<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css?<?php echo time(); ?>">
<script src="../backend/config/toast.js?<?php echo time(); ?>"></script>
<style>
  ul.posts {
    background: #ffffffad;
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
              <a href="./tickets.php" class="rl_navbar1_link w-nav-link current" >
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
  
    <div class="main-section" style="display: none; z-index: auto">
      <div class="gradient-header" style="display: flex; flex-direction: column; justify-content: flex-start; align-items: baseline;">
        <!-- <div class="text-block-56">Dashboard</div> -->      
          <div>
              <a href="#">
                  <button id="creatTicketBtn" >            
                      <span  style="color: #E04800;float: right;"><i class="fa fa-book" aria-hidden="true"></i> Ticket details</span>
                  </button>
              </a>
          </div>
      </div>
      <div class="analyzer-section dashboard wf-section" style="display: block;">                     
          <div class="mini-loader-container">
              <svg id="mini-loader" class="mini-loader" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
                  <g>
                      <ellipse id="ellipse" cx="50" cy="50" rx="25" ry="25" />
                  </g>        
              </svg>
          </div>
                                  
          <div class="">
              <div class="card comp-card" style="background-color: #261f1bf2;">
                <div class="card-body" >
                    <div class="align-items-center">

                      <div class="info-block">
                            <span class="info-label" style="font-size: 18px;display: block;text-align-last: center;"># <span  class="info-value" id="ticketId"></span></span>                            
                          </div>

                          <div class="info-block">
                            <span class="info-label"><i class="fa fa-thermometer-full" aria-hidden="true"></i>Priority </span> 
                            <span class="info-value" id="ticketPriority"></span> </div>

                          <div class="info-block">
                            <span class="info-label"><i class="fa fa-anchor" aria-hidden="true"></i> Subject</span>
                            <span class="info-value" id="ticketSubject"></span>
                          </div>

                          <div class="info-block">
                            <span class="info-label"><i class="fa fa-hourglass-start" aria-hidden="true"></i> Status</span>
                            <span  class="info-value" id="ticketStatus"></span>
                          </div>

                          <div class="info-block">
                            <span class="info-label"><i class="fa fa-building-o" aria-hidden="true"></i> Department</span>
                            <span class="info-value" id="ticketDept"></span>
                          </div>

                          <div class="info-block">
                            <span class="info-label"><i class="fa fa-calendar" aria-hidden="true"></i> Created</span>
                            <span class="info-value" id="ticketDate"></span> 
                          </div>

                          <div class="info-block">
                            <span class="info-label"><i class="fa fa-calendar" aria-hidden="true"></i> Updated</span>
                            <span class="info-value" id="ticketDateUpdated"></span> 
                          </div>

                      </div>                                      
                </div>
              </div>
          </div>
        
        <div class="analyzer-section dashboard wf-section" style="padding: 5px;display:flex;flex-direction: column;">
        <h3>
          Post a message
        </h3>
          <div style="width: 100%;">
            <form>
              <div class="form-group">
                <textarea class="form-control status-box" rows="3" placeholder="Enter your message here..."></textarea>
              </div>
            </form>
          </div>
          <div class="button-group pull-right">
            <p class="counter">250</p>
            <a href="#" class="btn btn-success">Post message <i class="fa fa-paper-plane-o" aria-hidden="true"></i></a>
              <div class="mini-loader-container comment-loader" style="display: block;">
                <svg id="mini-loader" class="mini-loader" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
                    <g>
                        <ellipse id="ellipse" cx="50" cy="50" rx="25" ry="25"></ellipse>
                    </g>        
                </svg>        
              </div>
          </div>
          <br><br>
          <div style="width: 100%;">
              <h3 style="text-align: center; color: blue;text-align: center;color: blue;text-wrap: nowrap;">All Messages (User/Admin)</h3>
              <ul class="posts">
              </ul>
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
  
  <script src="../backend/user/getUserTickets.js?<?php echo time(); ?>"></script>
  <script src="../backend/user/getUserTicketComments.js?<?php echo time(); ?>"></script>

  <script>
   async function fetchUserData() {
        try {
                const userDetailsObj = await userDetails(accessToken, baseUrl);
                console.log("userDetailsObj", userDetailsObj);
                topBarPlaceholders(userDetailsObj);
                pageLoader(false);
                fetchUserTicketDetail(userDetailsObj.email)
                
            } catch (error) {      
                console.error("An error occurred:", error);
            }
    }


  async function fetchUserTicketDetail(userEmail) {
        setElementDisplayByClassName('mini-loader-container', 'flex');

        try {
            const ticketDetail = await userTicketDetail(accessToken, ticketId);
            // console.log("ticketDetail", ticketDetail);     

            const ticketIdElement = document.querySelector('#ticketId');
            const ticketStatus = document.querySelector('#ticketStatus');
            const ticketDept = document.querySelector('#ticketDept');            
            const ticketSubject = document.querySelector('#ticketSubject');
            const ticketPriority = document.querySelector('#ticketPriority');
            const ticketDate = document.querySelector('#ticketDate');
            const ticketDateUpdated = document.querySelector('#ticketDateUpdated');

            const commentList = document.querySelector(".posts")
            
            
            // Check if the ticketDetail object exists and has the necessary properties
            if (ticketDetail) {
                // Set the values of the HTML elements                
                ticketIdElement.textContent = ticketDetail.id 
                ticketStatus.innerHTML = `<span class="${ticketDetail.status}"> <img src="../images/status/${ticketDetail.status}.svg"> ${ticketDetail.status} </span>`
                ticketDept.textContent = ticketDetail.department
                ticketSubject.textContent = ticketDetail.subject
                ticketPriority.textContent = ticketDetail.priority            
                ticketDate.textContent = formatDateTime(ticketDetail.updated_at )
                ticketDateUpdated.textContent = formatDateTime(ticketDetail.created_at )

                let ticketComments = await userTicketComments(accessToken, ticketId)
                
                for (const ticketComment of ticketComments) {
                    console.log("ticket comment list", ticketComment);
                    const listItem = document.createElement('li');
                    
                    if(userEmail ===ticketComment.user.email ){
                      listItem.innerHTML = `<small style="background: white;color: gray" class="comment-user">Me: ${formatDate(ticketComment.created_at)} </small> 
                      <div class="commwnt-content"><i class="fa fa-comment" aria-hidden="true"></i> ${ticketComment.content}</div>`;
                    } else  {
                      listItem.innerHTML = `<small style="background: white;color: blue" class="comment-user">Admin <i class="fa fa-user" aria-hidden="true"></i>   ${formatDate(ticketComment.created_at)} </small> 
                                        <div class="commwnt-content commwnt-content-admin"><i class="fa fa-reply" aria-hidden="true"></i> ${ticketComment.content}</div>`;
                    }
                                        
                    commentList.insertBefore(listItem, commentList.firstChild);
                }

                setElementDisplayByClassName('mini-loader-container', 'none');          
                              
            } 
            else {
                // Handle the case where ticketDetail is not available or incomplete
                // You can set default values or display an error message
                ticketIdElement.textContent = 'N/A';
                ticketStatus.textContent = 'N/A';
                ticketDept.textContent = 'N/A';
                ticketSubject.textContent = 'N/A';
                ticketPriority.textContent = 'N/A';
                ticketDate.textContent ='N/A';
            }
        } 
        catch (error) {      
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

  function setElementDisplayByClassName(className, state) {
      const elements = document.getElementsByClassName(className);              
      for (const element of elements) {
        element.style.display = state;
      }
  }
  </script>

  <script>
    document.addEventListener('DOMContentLoaded', async function() {
        var btn = document.querySelector('.btn');
        var statusBox = document.querySelector('.status-box');
        var postsList = document.querySelector('.posts');
        var counter = document.querySelector('.counter');
      
        btn.classList.add('disabled');

        const ticketDetail = await userTicketDetail(accessToken, ticketId);
        console.log("ticketDetail", ticketDetail);     

        if(ticketDetail.status === 'close' ){
          console.log("closed ticket")
          alert("Ticket closed")
        }else {
          console.log("opened ticket")

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
        }                       
      
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

</body>
</html>