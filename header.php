<!doctype html>
<html lang="en-US">
<head>
<title>Just White</title>
<meta charset="utf-8">

<!-- Meta -->
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta name="author" content="Dynasty3">
<meta name="robots" content="" />

<!-- Responsive View  -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Favicon -->
<link rel="shortcut icon" href="<?php echo of_get_option('fav','No Entry'); ?>">

<!-- Google fonts-->


<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<!-- FONT awesome STYLES -->
<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/font-awesome.min.css" type="text/css" />
<!-- BOOTSTRAP STYLES -->
<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/bootstrap.css" type="text/css" />

<!-- Menu CSS -->
<link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/menu.css" media="all" />

<!-- CSS STYLES -->
<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/uikit.css" type="text/css" />
<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/style.css" type="text/css" />
<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/template.css" type="text/css" />

<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/animate.css" rel="stylesheet">


<!-- Responsive Devices Styles -->
<link rel="stylesheet" media="screen" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/responsive-leyouts.css" type="text/css" />

</head>

<body>

<?php

  $url=get_post_permalink();
     $pageid = url_to_postid( $url );

if($pageid==2)
{
?>

	<!--header starts.....-->
    <header id="my-id2">
    	<div class="logo-area">
        	<a href="<?php echo bloginfo('url'); ?>/">
            	<p><?php echo of_get_option('sitename','No Entry'); ?></p>
            </a>
        </div>
        <div class="banner-content jumbotron">
              <h1 class="glow in tlt">im a designer</h1>
            
            
        </div>
        <div class="banner-arrow">
        	<a href="#my-id" data-uk-smooth-scroll><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/arrow.png" alt="arrow"></a>
        </div>
    
    </header>
    <!--header ends.....-->
	<?php
}
?>
    
    
    <!--menu-area starts....-->
    <section class="menu-area" id="my-id">
    	<div class="row">
        	<div class="container-fluid">
            	<div class="col-md-4">
                	 <div class="menu-logo">
                        <a href="<?php echo bloginfo('url'); ?>/">
                            <p><?php echo of_get_option('sitename','No Entry'); ?></p>
                        </a>	
                      </div>
                </div>
                <!--col-md-4 ends....-->
                <div class="col-md-8">
                	<div class="nav dnt3-menu">
                        <ul class="dropdown clear">
                                    <li><a href="<?php echo bloginfo('url'); ?>/projects">projects</a></li>
                                    <li><a href="<?php echo bloginfo('url'); ?>/about-us">profile</a></li>
                                    <li><a href="<?php echo bloginfo('url'); ?>/contact-us">contact</a></li>
                        </ul>	        
                    </div>
                </div>
                <!--col-md-8 ends....-->
            </div>
            <!-- container-fluid ends.....-->
        </div>
        <!--row ends....-->
    </section>
    <!--menu-area ends....-->
    
    
    
