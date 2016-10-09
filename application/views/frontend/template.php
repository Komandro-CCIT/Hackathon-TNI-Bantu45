<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="robots" content="all,follow">
    <meta name="googlebot" content="index,follow,snippet,archive">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo $title?></title>

    <meta name="keywords" content="">

    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,500,700,800' rel='stylesheet' type='text/css'>

    <!-- Bootstrap and Font Awesome css -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/frontend/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/frontend/css/bootstrap.min.css">

    <!-- Css animations  -->
    <link href="<?php echo base_url()?>assets/frontend/css/animate.css" rel="stylesheet">

    <!-- Theme stylesheet, if possible do not edit this stylesheet -->
    <link href="<?php echo base_url()?>assets/frontend/css/style.green.css" rel="stylesheet" id="theme-stylesheet">

    <!-- Custom stylesheet - for your changes -->
    <link href="<?php echo base_url()?>assets/frontend/css/custom.css" rel="stylesheet">

<script src="http://maps.google.com/maps/api/js?sensor=false&key=AIzaSyBIE9_0cfpD3hMSL95jhdkJ3zsLbBOiFVs" type="text/javascript"></script>

    <!-- Responsivity for older IE -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

    <!-- Favicon and apple touch icons-->
    <link rel="shortcut icon" href="<?php echo base_url()?>assets/frontend/images/LOGO4.png" type="image/png" />
    <link rel="apple-touch-icon" href="<?php echo base_url()?>assets/frontend/img/apple-touch-icon.png" />
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo base_url()?>assets/frontend/img/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url()?>assets/frontend/img/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url()?>assets/frontend/img/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url()?>assets/frontend/img/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo base_url()?>assets/frontend/img/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo base_url()?>assets/frontend/img/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo base_url()?>assets/frontend/img/apple-touch-icon-152x152.png" />
    <!-- owl carousel css -->

    <link href="<?php echo base_url()?>assets/frontend/css/owl.carousel.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/frontend/css/owl.theme.css" rel="stylesheet">
</head>

<body>

    <div id="all">

        <header>

            <!-- *** TOP ***
_________________________________________________________ -->
            <div id="top">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-5 contact">
                            <!--<p class="hidden-sm hidden-xs">Contact us on +420 777 555 333 or hello@universal.com.</p>
                            <p class="hidden-md hidden-lg"><a href="#" data-animate-hover="pulse"><i class="fa fa-phone"></i></a>  <a href="#" data-animate-hover="pulse"><i class="fa fa-envelope"></i></a>
                            </p>-->
                        </div>
                        <div class="col-xs-7">
                            <!--<div class="social">
                                <a href="#" class="external facebook" data-animate-hover="pulse"><i class="fa fa-facebook"></i></a>
                                <a href="#" class="external gplus" data-animate-hover="pulse"><i class="fa fa-google-plus"></i></a>
                                <a href="#" class="external twitter" data-animate-hover="pulse"><i class="fa fa-twitter"></i></a>
                                <a href="#" class="email" data-animate-hover="pulse"><i class="fa fa-envelope"></i></a>
                            </div> -->

                            <div class="login">
                                <a href="#" data-toggle="modal" data-target="#login-modal"><i class="fa fa-sign-in"></i> <span class="hidden-xs text-uppercase">Sign in</span></a>
                                <!--<a href="customer-register.html"><i class="fa fa-user"></i> <span class="hidden-xs text-uppercase">Sign up</span></a>-->
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <!-- *** TOP END *** -->

            <!-- *** NAVBAR ***
    _________________________________________________________ -->

            <div class="navbar-affixed-top" data-spy="affix" data-offset-top="200">

                <div class="navbar navbar-default yamm" role="navigation" id="navbar">

                    <div class="container">
                        <div class="navbar-header">

                            <a class="navbar-brand home" href="<?php echo base_url()?>">
                                <span><img src="<?php echo base_url()?>assets/frontend/images/LOGO4.png" width="50px" height="50px" alt="Universal logo" class="hidden-xs hidden-sm"> <font type="arial">Bantu45</font></span>
                                <!--<img src="<?php echo base_url()?>assets/frontend/images/logo-small.png" alt="Universal logo" class="visible-xs visible-sm"><span class="sr-only">Universal - go to homepage</span>-->
                            </a>
                            <div class="navbar-buttons">
                                <button type="button" class="navbar-toggle btn-template-main" data-toggle="collapse" data-target="#navigation">
                                    <span class="sr-only">Toggle navigation</span>
                                    <i class="fa fa-align-justify"></i>
                                </button>
                            </div>
                        </div>
                        <!--/.navbar-header -->

                        <div class="navbar-collapse collapse" id="navigation">

                            <ul class="nav navbar-nav navbar-right">
                              <li><a href="<?php echo base_url()?>">Home</a>
                              <!--<li><a href="<?php echo base_url()?>about">About</a>-->
                              <li><a href="<?php echo base_url()?>berita">Berita</a>
                            </ul>

                        </div>
                        <!--/.nav-collapse -->



                        <div class="collapse clearfix" id="search">

                            <form class="navbar-form" role="search">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search">
                                    <span class="input-group-btn">

                    <button type="submit" class="btn btn-template-main"><i class="fa fa-search"></i></button>

                </span>
                                </div>
                            </form>

                        </div>
                        <!--/.nav-collapse -->

                    </div>


                </div>
                <!-- /#navbar -->

            </div>

            <!-- *** NAVBAR END *** -->

        </header>

        <!-- *** LOGIN MODAL ***
_________________________________________________________ -->

        <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
            <div class="modal-dialog modal-sm">

                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="Login">Member Login</h4>
                    </div>
                    <div class="modal-body">
                        <form action="<?php echo base_url()?>member/loginproses" method="post">
                            <div class="form-group">
                                <input type="text" class="form-control" id="email_modal" name="email" placeholder="email">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="password_modal" name="pswd" placeholder="password">
                            </div>

                            <p class="text-center">
                                <button type="submit" class="btn btn-template-main"><i class="fa fa-sign-in"></i> Log in</button>
                            </p>

                        </form>

                        <!--<p class="text-center text-muted">Not registered yet?</p>
                        <p class="text-center text-muted"><a href="customer-register.html"><strong>Register now</strong></a>! It is easy and done in 1&nbsp;minute and gives you access to special discounts and much more!</p>
                      -->
                    </div>
                </div>
            </div>
        </div>

        <!-- *** LOGIN MODAL END *** -->

        <section>
            <!-- *** HOMEPAGE CAROUSEL ***
 _________________________________________________________ -->
<?php if($jenistemplate == '1') { ?>
            <div class="home-carousel">

                <div class="dark-mask"></div>

                <div class="container">
                    <div class="homepage owl-carousel">
                        <div class="item">
                            <div class="row">
                                <div class="col-sm-12 text-center">
                                    <h1>Supply Bantuan Prajurit</h1>
                                    <p>Kami Mensupply Bantuan Berupa Prajurit Yang Siap Membantu Ketika Ada Bencana</p>
                                </div>
                                <!--<div class="col-sm-7">
                                    <img class="img-responsive" width="800px" height="400px"  src="<?php echo base_url()?>assets/frontend/images/1.jpeg" alt="">
                                </div>-->
                            </div>
                        </div>
                        <div class="item">
                            <div class="row">
                                <div class="col-sm-12 text-center">
                                    <h1>Supply Bantuan Logistik</h1>
                                    <p>Kami Mensupply Bantuan Logistik Berupa Obat-Obatan, Makanan, Pakaian Yang Diperlukan Untuk Korban Bencana Alam</p>
                                </div>
                                <!--<div class="col-sm-7">
                                    <img class="img-responsive" width="800px" height="400px" src="<?php echo base_url()?>assets/frontend/images/3.jpeg" alt="">
                                </div>-->
                            </div>
                        </div>
                        <div class="item">
                            <div class="row">

                                <!--<div class="col-sm-7 text-center">
                                    <img class="img-responsive" width="800px" height="400px"  src="<?php echo base_url()?>assets/frontend/images/2.jpeg" alt="">
                                </div>-->

                                <div class="col-sm-12 text-center">
                                    <h2>Latihan TNI</h2>
                                    <p>Cek Persenjataan TNI, Prajurit TNI, Dan Tempat Yang Akan Dijadikan Latihan</p>
                                </div>

                            </div>
                        </div>
                        </div>
                    </div>
                    <!-- /.project owl-slider -->
                </div>
            </div>

            <!-- *** HOMEPAGE CAROUSEL END *** -->
        </section>

<?php } else { ?>
  <section>
        <div id="heading-breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <h1><?php echo $header;?></h1>
                    </div>
                    <div class="col-md-5">
                        <ul class="breadcrumb">
                            <li><a href="<?php echo base_url()?>">Home</a>
                            </li>
                            <li><?php echo $header;?></li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
  <section>
<?php } ?>

        <?php echo $contents;?>
        <!-- /.bar -->

        <!-- *** COPYRIGHT ***
_________________________________________________________ -->

        <div id="copyright">
            <div class="container">
                <div class="col-md-12">
                    <p class="pull-left">&copy; 2016. Bantu45</p>
                  <!--  <p class="pull-right">Design by <a href="http://bootstrapious.com/free-templates">Bootstrapious</a>
                        <!-- Not removing these links is part of the licence conditions of the template. Thanks for understanding :) -->
                    </p>

                </div>
            </div>
        </div>
        <!-- /#copyright -->

        <!-- *** COPYRIGHT END *** -->

    <!-- /#all -->

    <!-- #### JAVASCRIPT FILES ### -->

    <script src="<?php echo base_url()?>assets/frontend/js/jquery.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="<?php echo base_url()?>assets/frontend/js/jquery-1.11.0.min.js"><\/script>')
    </script>
    <script src="<?php echo base_url()?>assets/frontend/js/bootstrap.min.js"></script>

    <script src="<?php echo base_url()?>assets/frontend/js/jquery.cookie.js"></script>
    <script src="<?php echo base_url()?>assets/frontend/js/waypoints.min.js"></script>
    <script src="<?php echo base_url()?>assets/frontend/js/jquery.counterup.min.js"></script>
    <script src="<?php echo base_url()?>assets/frontend/js/jquery.parallax-1.1.3.js"></script>
    <script src="<?php echo base_url()?>assets/frontend/js/front.js"></script>



    <!-- owl carousel -->
    <script src="<?php echo base_url()?>assets/frontend/js/owl.carousel.min.js"></script>



</body>

</html>
