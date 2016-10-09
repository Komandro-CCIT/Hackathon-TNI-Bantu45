<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $title ?></title>
    <meta name="description" content="">

    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap-->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/backend/css/bootstrap.min.css">
    <!-- Google fonts - Open Sans-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,300,700,400italic">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/backend/css/font-awesome.min.css">
    <!-- owl carousel-->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/backend/css/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/backend/css/owl.theme.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/backend/css/style.green.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/backend/css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="<?php echo base_url()?>assets/frontend/images/LOGO4.png" type="image/png" />


        <link rel="stylesheet" href="<?php echo base_url()?>assets/frontend/css/jquery-ui.css">

    	<link href="<?php echo base_url()?>assets/frontend/css/sweet-alert.min.css" rel="stylesheet">
    	<!--	<script src="<?php echo base_url()?>assets/frontend/js/jquery-2.1.4.min.js"></script>-->
    <script src="<?php echo base_url()?>assets/frontend/js/jquery.min.js"></script>
      <script src="<?php echo base_url()?>assets/frontend/js/sweet-alert.min.js"></script>

<script src="http://maps.google.com/maps/api/js?sensor=false&key=AIzaSyBIE9_0cfpD3hMSL95jhdkJ3zsLbBOiFVs" type="text/javascript"></script>
        <!--<script src="<?php echo base_url()?>assets/frontend/js/jquery-ui.js"></script>
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->

    <!--<script src="<?php echo base_url()?>assets/backend/editor/tiny_mce_src.js"></script>
    <script type="text/javascript">
   tinyMCE.init({
    		mode : "textareas",
    		theme : "advanced",
    		plugins : "table,youtube,advhr,advimage,advlink,emotions,flash,searchreplace,paste,directionality,noneditable,contextmenu",

    		theme_advanced_buttons2_add : "separator,preview,zoom,separator,forecolor,backcolor,liststyle,fontselect,fontsizeselect",
    		theme_advanced_buttons2_add_before: "cut,copy,paste,separator,search,replace,separator",
    		theme_advanced_buttons3_add_before : "tablecontrols,separator,youtube,separator",
    		theme_advanced_buttons3_add : "emotions,flash",
    		theme_advanced_toolbar_location : "top",
    		theme_advanced_toolbar_align : "left",
    		theme_advanced_statusbar_location : "bottom",
    		extended_valid_elements : "hr[class|width|size|noshade]",
    		file_browser_callback : "fileBrowserCallBack",
    		paste_use_dialog : false,
    		theme_advanced_resizing : true,
    		theme_advanced_resize_horizontal : false,
    		theme_advanced_link_targets : "_something=My somthing;_something2=My somthing2;_something3=My somthing3;",
    		apply_source_formatting : true
    });

    	function fileBrowserCallBack(field_name, url, type, win) {
    		var connector = "../../filemanager/browser.html?Connector=connectors/php/connector.php";
    		var enableAutoTypeSelection = true;

    		var cType;
    		tinymcpuk_field = field_name;
    		tinymcpuk = win;

    		switch (type) {
    			case "image":
    				cType = "Image";
    				break;
    			case "flash":
    				cType = "Flash";
    				break;
    			case "file":
    				cType = "File";
    				break;
    		}

    		if (enableAutoTypeSelection && cType) {
    			connector += "&Type=" + cType;
    		}

    		window.open(connector, "tinymcpuk", "modal,width=600,height=400");
    	}
    </script>-->
  </head>
  <body>
    <div id="all">
      <div class="container-fluid">
        <div class="row row-offcanvas row-offcanvas-left">
          <!--   *** SIDEBAR ***-->
          <div id="sidebar" class="col-xs-6 col-sm-4 col-md-3 sidebar-offcanvas">
            <div class="sidebar-content">
              <h1 class="sidebar-heading"> <a href="<?php echo base_url()?>member/home">
                <img src="<?php echo base_url()?>assets/frontend/images/LOGO4.png" width="70px" height="70px" alt="Universal logo" class="hidden-xs hidden-sm">
                <?php if($_SESSION['statususer'] == 2 ){
                    echo "User";
                  } else {
                    echo "Admin";
                  }
                ?>
                Bantu45</a></h1>
              <h4><i class="fa fa-user"></i>
                <?php
                  echo $_SESSION['nama'];
                ?>
              </h4>
              <p><a href="<?php echo base_url()?>member/logoutproses">
                  <i class="fa fa-sign-out"></i> Sign Out</a></p>
                <hr>

                <?php
                $id = $_SESSION['statususer'];
                //$_SESSION['idmember']
                if($id != 1){ ?>
              <ul class="sidebar-menu">
                <li><a href="<?php echo base_url()?>member">Home</a></li>
                <li><a href="<?php echo base_url()?>member/cekberita">Cek Berita</a></li>
                <!--<li><a href="<?php echo base_url()?>member/ceklatihan">Cek Latihan</a></li>-->
                <!--<li class="active"><a href="index.html">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="contact.html">Get in touch</a></li>-->
              </ul>
          <?php  } else { ?>
          <ul class="sidebar-menu">
            <li><a href="<?php echo base_url()?>member">Home</a></li>
            <!--<li><a href="<?php echo base_url()?>member/tambahmember">Tambah Member</a></li>-->
            <li><a href="<?php echo base_url()?>member/bantuan">Berita</a></li>
            <li><a href="<?php echo base_url()?>member/cekbantuan">Cek Bantuan</a></li>
            <!--<li><a href="<?php echo base_url()?>member/latihan">Latihan</a></li>-->
            <!--<li class="active"><a href="index.html">Home</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="contact.html">Get in touch</a></li>-->
          </ul>
          <?php } ?>

              <hr>
              <!--
              <p class="social"><a href="#" data-animate-hover="pulse" class="external facebook"><i class="fa fa-facebook"></i></a><a href="#" data-animate-hover="pulse" class="external gplus"><i class="fa fa-google-plus"></i></a><a href="#" data-animate-hover="pulse" class="external twitter"><i class="fa fa-twitter"></i></a><a href="#" title="" class="external instagram"><i class="fa fa-instagram"></i></a><a href="#" data-animate-hover="pulse" class="email"><i class="fa fa-envelope"></i></a></p>
            -->
              <div class="copyright">
                <p class="credit">&copy; 2016 Bantu45</p>
                <!--<p class="credit">&copy;2016 Your name or company | Template by <a href="http://bootstrapious.com/free-templates" class="external">Bootstrapious.com</a></p>
                <!-- Please do not remove the backlink to us, unless you support the development at http://bootstrapious.com/donate. It is part of the license conditions. Thanks for understanding :)        -->

              </div>
            </div>
          </div>
          <!--   *** SIDEBAR END ***  -->
          <!--   *** PORTFOLIO ***-->
          <div class="col-xs-12 col-sm-8 col-md-9 content-column">
            <div class="small-navbar visible-xs">
              <button type="button" data-toggle="offcanvas" class="btn btn-ghost pull-left"> <i class="fa fa-align-left"> </i>Menu</button>
              <h1 class="small-navbar-heading"> <a href="<?php echo base_url()?>member/home">Member Bantu45</a></h1>
            </div>
                <div class="col-sm-12"  style="background:#fff; min-wight:100%; min-height:600px;">

                <?php echo $contents;?>

              </div>
          </div>
          <!--   *** PORTFOLIO END ***
          -->
        </div>
      </div>
    </div>
    <!-- Javascript files-->
    <!--<script src="<?php echo base_url()?>assets/frontend/js/jquery.min.js"></script>-->
    <script src="<?php echo base_url()?>assets/backend/js/bootstrap.min.js"> </script>
    <!--<script src="<?php echo base_url()?>assets/backend/js/jquery.cookie.js"> </script>
    <script src="<?php echo base_url()?>assets/backend/js/ekko-lightbox.js"></script>
    <script src="<?php echo base_url()?>assets/backend/js/jquery.scrollTo.min.js"></script>
    <script src="<?php echo base_url()?>assets/backend/js/masonry.pkgd.min.js"></script>
    <script src="<?php echo base_url()?>assets/backend/js/imagesloaded.pkgd.min.js"></script>
    <script src="<?php echo base_url()?>assets/backend/js/owl.carousel.min.js"></script>
    <script src="<?php echo base_url()?>assets/backend/js/front.js"></script>
    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID.-->
    <!---->
    <!--<script>
      (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
      function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
      e=o.createElement(i);r=o.getElementsByTagName(i)[0];
      e.src='//www.google-analytics.com/analytics.js';
      r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
      ga('create','UA-XXXXX-X');ga('send','pageview');
    </script>-->
  </body>
</html>
