<?php
/**
 * The template for displaying the footer.
 *
 * @package Square
 */

?>

	</div><!-- #content -->

	<footer id="sq-colophon" class="sq-site-footer" style="background-color: gray;">
		<?php if(is_active_sidebar('square-footer1') || is_active_sidebar('square-footer2') || is_active_sidebar('square-footer3') || is_active_sidebar('square-footer4') ): ?>
		<div  id="sq-top-footer">
			<div class="sq-container">
				<div class="sq-top-footer sq-clearfix">
					<div class="sq-footer sq-footer1">
						<?php if(is_active_sidebar('square-footer1')): 
							dynamic_sidebar('square-footer1');
						endif;
						?>	
					</div>

					<div class="sq-footer sq-footer2">
						<?php if(is_active_sidebar('square-footer2')): 
							dynamic_sidebar('square-footer2');
						endif;
						?>	
					</div>

					<div class="sq-footer sq-footer3">
						<?php if(is_active_sidebar('square-footer3')): 
							dynamic_sidebar('square-footer3');
						endif;
						?>	
					</div>

					<div class="sq-footer sq-footer4">
						<?php if(is_active_sidebar('square-footer4')): 
							dynamic_sidebar('square-footer4');
						endif;
						?>	
					</div>
				</div>
			</div>
		</div>
		<?php endif; ?>

		<?php if(is_active_sidebar('square-about-footer')): ?>
		<div id="sq-middle-footer">
			<div class="sq-container">
				<?php 
					dynamic_sidebar('square-about-footer');
				?>
			</div>
		</div>
		<?php endif; ?>
</footer>
<footer class="page-footer font-small pt-4">
		
			
 <div class="container-fluid  text-center" style="background:#633e84; ">
         <div class="row">
            <div class="col-lg-12 navbar navbar-expand-lg navbar-default navbar-inverse border-0 rounded-0">
               <!--  -->
               <!-- <div class="menuContainer"> -->
               <!-- <nav class="navbar navbar-expand-lg navbar-default navbar-inverse border-0 rounded-0">           -->
               <div class="col-xl-3 col-md-2">
                  <a class="navbar-brand" href="/website/index.html"><img src="/website/assets/images/wdatyra_logo.png" class="img-fluid mx-auto d-block" alt="responsive"></a>  
               </div>
               <div class="d-none d-lg-block" style="font-color:white;">
                  <ul class="navbar-nav align-items-center" >
                     <li>
                        <a class="footer-link" href="services.html">SERVICES</a>
                     </li >
                     <li>
                        <a class="footer-link" href="portfolio.html">PORTFOLIO</a>
                     </li>
                     <li>
                        <a class="footer-link" href="/website/blog/index.php">BLOG</a>
                     </li>
                     <li>
                        <a class="footer-link" href="about.html">ABOUT</a>
                     </li>
                     <li>
                        <a class="footer-link" href="contact.html">CONTACT</a>
                     </li>
                     <li>
                        <a class="footer-link" href="contact.html">CAREER</a>
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
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
