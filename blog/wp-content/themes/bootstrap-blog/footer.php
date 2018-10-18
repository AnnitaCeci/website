<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Bootstrap Blog
 */

?>
	<footer class="main footer2">
		<div class="container">
		<?php dynamic_sidebar( 'footer-1' ); ?>
	</div>
	</footer>
		
		<?php wp_footer(); ?>
	</body>

<style >
footer {
    /*position: fixed;*/
    left: 0;
    bottom: 0;
    width: 100%;
    height: 130px;
    background-color: #633e84;
    color: white;
    text-align: center;
    padding-top: 50px;
}
.footer2 {
    /*position: fixed;*/
   
    background-color: #fff;
   
   
}
   /* nav styles */
.nav-bar-page {
  padding-right: 0px;
  padding-left: 0px;
  z-index: 2;
}

.nav-link:hover{
 background: #f4f4f4;
 color: #f97300;
}
.navbar{
  padding-left: 0px;
}


.navbar-nav{
color: #633e84;
border-left: 0;
font-weight: bold;
font-size: 15px;
z-index: 5;
 padding-top: 1.1rem;
}

.nav-link , .navbar-brand{
 color: #633e84;
 cursor: pointer;
 background-color: #633e84;

 border-color: #633e84;
 padding-top: 0rem;
}


.nav-link{
 margin-right: 1em !important;
}

.nav-link:hover{
 background: #f4f4f4;
 color: #f97300;
}
.navbar-collapse{

.navbar-toggler{
  background:#fff !important;
  right: 0;

}

.main-head-text {
   margin: 70px auto;
}
}
.footerr{
  padding-top: 10px;
}
.footer-link{
 color: white;
 font-size: 12px;
 font-weight: bold;
 letter-spacing: 3px;
 text-align: center;
 cursor: pointer;
 margin-right: 3em !important;

}
.navbar-inverse{
	 background-color: #633e84;
	 border-color: #633e84;
}
.white-text{
	color:#fff;
	 margin-right: 2em !important;
}
</style>
   <footer class="page-footer font-small pt-4">
      <div class="container-fluid  text-center">
         <div class="row">
            <div class="col-lg-12 navbar navbar-expand-lg navbar-default navbar-inverse border-0 rounded-0">
               <!--  -->
               <!-- <div class="menuContainer"> -->
               <!-- <nav class="navbar navbar-expand-lg navbar-default navbar-inverse border-0 rounded-0">           -->
               <div class="col-xl-3 col-md-2">
                  <a class="navbar-brand-xl" href="index.html"><img src="/website/assets/images/wdatyra_logo.png" class="img-fluid  d-block" alt="responsive"></a>  
               </div>
               <div class=" d-lg-block">
                  <ul class="navbar-nav align-items-center" >
                     <li>
                        <a class="footer-link" href="/website/services.html">SERVICES</a>
                     </li >
                     <li>
                        <a class="footer-link" href="/website/portfolio.html">PORTFOLIO</a>
                     </li>
                     <li>
                        <a class="footer-link" href="/website/blog/index.php">BLOG</a>
                     </li>
                     <li>
                        <a class="footer-link" href="/website/about.html">ABOUT</a>
                     </li>
                     <li>
                        <a class="footer-link" href="/website/contact.html">CONTACT</a>
                     </li>
                     <li>
                        <a class="footer-link" href="/website/contact.html">CAREER</a>
                     </li>
                    
                  </ul>
               </div>
               <div class="col-md-3">
                  <!-- slack -->
                  <a><i class="fa fa-slack white-text mr-md-3 mr-2 "></i></a>
                  <!-- Twitter -->
                  <a><i class="fa fa-twitter white-text mr-md-3 mr-2 "></i></a>
                  <!-- Facebook -->
                  <a><i class="fa fa-facebook white-text mr-md-3 mr-2 "></i></a>
               </div>
            </div>
         </div>
      </div>
   </footer>
</html>