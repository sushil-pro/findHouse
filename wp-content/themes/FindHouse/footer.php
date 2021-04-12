<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Find_House
 * @since 1.0
 * @version 1.2
 */

?>

			<!-- Our Footer -->
	<section class="footer_one">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-6 col-lg-3 col-xl-3 pr0 pl0">
					<div class="footer_about_widget">
						<h4><?php the_field('footer_title','option');?></h4>
						<p><?php the_field('footer_description','option');?></p>
					</div>
				</div>
				<div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
					<div class="footer_qlink_widget">
						<h4><?php the_field('quick_links_heading','option');?></h4>
						<ul class="list-unstyled">
						<?php while(have_rows('quick_links','option')):the_row();?>
							<li><a href="<?php the_sub_field('quick_link','option');?>"><?php the_sub_field('quick_link_label','option');?></a></li>
						<?php endwhile;?>
						</ul>
					</div>
				</div>
				<div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
					<div class="footer_contact_widget">
						<h4><?php the_field('contact_heading','option');?></h4>
						<ul class="list-unstyled">
						<?php while(have_rows('contact_links','option')):the_row();?>
							<li><a href="<?php the_sub_field('contact_link','option');?>"><?php the_sub_field('contact_label','option');?></a></li>
						<?php endwhile;?>
						</ul>
					</div>
				</div>
				<div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
					<div class="footer_social_widget">
						<h4><?php the_field('social_link_heading','option');?></h4>
						<ul class="mb30">
						<?php while(have_rows('social_links','option')):the_row();?>
							<li class="list-inline-item"><a href="<?php the_sub_field('social_link','option');?>"><?php the_sub_field('social_icon','option');?></a></li>
						<?php endwhile;?>
						</ul>
						<h4><?php the_field('subscription_heading','option');?></h4>
						<div class="footer_mailchimp_form">
						 	<?php echo do_shortcode('[contact-form-7 id="53" title="Subscribe Form"]');?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Our Footer Bottom Area -->
	<section class="footer_middle_area pt40 pb40">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-xl-6">
					<div class="footer_menu_widget">
						<?php wp_nav_menu( array( 'menu' => 'main-menu' ) ); ?>
					</div>
				</div>
				<div class="col-lg-6 col-xl-6">
					<div class="copyright-widget text-right">
						<p><?php the_field('copyright','option');?></p>
					</div>
				</div>
			</div>
		</div>
	</section>
<a class="scrollToHome" href="#"><i class="flaticon-arrows"></i></a>
</div>
<!-- Wrapper End -->
<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script type="text/javascript" src="<?php echo get_template_directory_uri();?>/assets/js/jquery-3.3.1.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/assets/js/jquery-migrate-3.0.0.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/assets/js/popper.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/assets/js/jquery.mmenu.all.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/assets/js/ace-responsive-menu.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/assets/js/bootstrap-select.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/assets/js/isotop.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/assets/js/snackbar.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/assets/js/simplebar.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/assets/js/parallax.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/assets/js/scrollto.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/assets/js/jquery-scrolltofixed-min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/assets/js/jquery.counterup.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/assets/js/wow.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/assets/js/slider.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/assets/js/pricing-slider.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/assets/js/timepicker.js"></script>
<!-- Custom script for all pages --> 
<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/assets/js/script.js"></script>
</body>

<!-- Mirrored from grandetest.com/theme/findhouse-html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 08 Apr 2021 04:32:43 GMT -->
</html>
<?php wp_footer(); ?>

</body>
</html>
