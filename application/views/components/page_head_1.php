<!DOCTYPE html>
<html  dir="rtl">

<head>
    <meta  charset="utf-8">
    <meta name="robots" content="all,follow">
    <meta name="googlebot" content="index,follow,snippet,archive">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Universal - All In 1 Template</title>

    <meta name="keywords" content="">

    <link rel="stylesheet" href="<?php echo base_url();?>css/jquery-ui.css">
    <link href="<?php echo base_url();?>css/fonts.googleapis.css" rel='stylesheet' type='text/css'>
    <!-- Bootstrap and Font Awesome css -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="<?php echo base_url();?>r_css/bootstrap.min.css">

    <!-- Css animations  -->
    <link href="<?php echo base_url();?>css/animate.css" rel="stylesheet">

    <!-- Theme stylesheet, if possible do not edit this stylesheet -->
    <link href="<?php echo base_url();?>r_css/style.default.css" rel="stylesheet" id="theme-stylesheet">

    <!-- Custom stylesheet - for your changes -->
    <link href="<?php echo base_url();?>css/custom.css" rel="stylesheet">

    <!-- Responsivity for older IE -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

    <!-- Favicon and apple touch icons-->
    <link rel="shortcut icon" href="<?php echo base_url();?>img/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="<?php echo base_url();?>img/apple-touch-icon.png" />
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo base_url();?>img/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url();?>img/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url();?>img/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url();?>img/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo base_url();?>img/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo base_url();?>img/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo base_url();?>img/apple-touch-icon-152x152.png" />
    <!-- owl carousel css -->

    <link href="<?php echo base_url();?>css/owl.carousel.css" rel="stylesheet">
    <link href="<?php echo base_url();?>css/owl.theme.css" rel="stylesheet">
  
</head>
<body >

    <div id="all">
    
        <header>

            <!-- *** TOP ***
_________________________________________________________ -->
            <div id="top">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-5 contact">
                            <p class="hidden-sm hidden-xs">Contact us on +420 777 555 333 or hello@universal.com.</p>
                            <p class="hidden-md hidden-lg"><a href="#" data-animate-hover="pulse"><i class="fa fa-phone"></i></a>  <a href="#" data-animate-hover="pulse"><i class="fa fa-envelope"></i></a>
                            </p>
                        </div>
                        <div class="col-xs-7">
                            <div class="social">
                                <a href="#" class="external facebook" data-animate-hover="pulse"><i class="fa fa-facebook"></i></a>
                                <a href="#" class="external gplus" data-animate-hover="pulse"><i class="fa fa-google-plus"></i></a>
                                <a href="#" class="external twitter" data-animate-hover="pulse"><i class="fa fa-twitter"></i></a>
                                <a href="#" class="email" data-animate-hover="pulse"><i class="fa fa-envelope"></i></a>
                            </div>

                            <div class="login">
                                <a href="#" data-toggle="modal" data-target="#login-modal"><i class="fa fa-sign-in"></i> <span class="hidden-xs text-uppercase">Sign in</span></a>
                                <a href="<?php echo base_url(); ?>index.php/main/signUp"><i class="fa fa-user"></i> <span class="hidden-xs text-uppercase">Sign up</span></a>
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
                            <a class="navbar-brand home" href="index.html">
                                <img src="<?php echo base_url();?>img/logo.png" alt="Universal logo" class="hidden-xs hidden-sm">
                                <img src="<?php echo base_url();?>img/logo-small.png" alt="Universal logo" class="visible-xs visible-sm"><span class="sr-only">Universal - go to homepage</span>
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
                        <?php echo get_menu($main_menu); ?>
                         <!--   <ul class="nav navbar-nav navbar-right">
                                <li class="active">
                                    <a href="<?php echo base_url();?>index.php/main/index" >Home </a>
                                    
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>index.php/main/events" >Events</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>index.php/main/courses" >Courses </a>
                                </li>
                                <li class="dropdown">
                                    <a href="javascript: void(0)" class="dropdown-toggle" data-toggle="dropdown">About<b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="<?php echo base_url();?>index.php/main/about/msgOfManager">Manager Message</a>
                                        </li>
                                        <li><a href="<?php echo base_url();?>index.php/main/about/aboutUS">About us</a>
                                        </li>
                                        <li><a href="<?php echo base_url();?>index.php/main/about/ourTeam">Our team</a>
                                        </li>
                                        
                                    </ul>
                                </li>
                                <!-- ========== FULL WIDTH MEGAMENU END ================== -->
                           <!--    <li>
                                    <a href="<?php echo base_url();?>index.php/main/contact" >Contact </a>
                                </li>
                         </ul>-->

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
______________________________________________________-->