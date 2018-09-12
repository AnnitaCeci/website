<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <header>
 *
 * @package Bootstrap Blog
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="<?php echo esc_url( 'http://gmpg.org/xfn/11' ); ?>">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

      
     
  
	<?php wp_head(); ?>
	
	<div class="row  justify-content-between "style=" background-color: #fff;
	 border-color: #fff;  padding-top: 5vw;margin-right: 0px;">
               <div class="col-12 nav-bar-page" style="padding-left: 4vw;">
                <div class="menuContainer">
                  <nav class="offset-1 navbar navbar-expand-lg bg-light navbar-default navbar-inverse border-0 rounded-0" style=" background-color: #fff; border-color: #fff; flex;">
                     <a class="navbar-brand col-3"  style=" background-color: #fff; border-color: #fff;"  href="/website/index.html"><img src="/website/assets/images/datyra_logo.png" class="img-responsive mx-auto d-block" alt="responsive"></a>
                     
                     <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbarNav" style="background:white;">
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"style="background:gray;"></span>
			        <span class="icon-bar"style="background:gray;"></span>
			        <span class="icon-bar"style="background:gray;"></span>
		      	</button>
                     <div class="collapse navbar-collapse d-none d-block " id="navbarNav" >
                           <ul class="navbar-nav " style="color: #fff; margin: auto; padding-left: 40vw;" >
                                <li class="nav-item">
                                  <a class="nav-link" style=" background-color: #fff; border-color: #fff; color: #633e84; padding-top: 0; padding-right: 0;margin-right: 3em !important;""href="/website/services.html">Services</a>
                                </li>
                                <li class="nav-item" style="">
                                  <a class="nav-link " style=" background-color: #fff;	 border-color: #fff;color: #633e84;padding-top: 0; padding-right: 0;margin-right: 3em !important;"href="/website/portfolio.html">Portfolio</a>
                                </li>
                                <li class="nav-item" style="">
                                  <a class="nav-link " style=" background-color: #fff;	 border-color: #fff; color: #633e84;padding-top: 0; padding-right: 0;margin-right: 3em !important;"href="/website/blog/index.php">Blog</a>
                                </li>
                                <li class="nav-item" style="">
                                  <a class="nav-link " style=" background-color: #fff;	 border-color: #fff; color: #633e84;padding-top: 0; padding-right: 0;margin-right: 3em !important;"href="/website/about.html">About</a>
                                </li>
                                <li class="nav-item" style="">
                                  <a class="nav-link " style=" background-color: #fff;	 border-color: #fff; color: #633e84;padding-top: 0; padding-right: 0;margin-right: 3em !important;"href="/website/contact.html">Contact</a>
                                </li>
                             </ul>
                           </div>
                        </nav>
                      </div>
                    </div>
                </div>
</head>

<body <?php body_class(); ?>>