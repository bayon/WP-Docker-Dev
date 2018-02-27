<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package siteorigin-north
 * @license GPL 2.0 
 */

?>

		</div><!-- .container -->
	</div><!-- #content -->

	<?php do_action( 'siteorigin_north_footer_before' ); ?>

	<footer id="colophon" class="site-footer <?php if ( ! siteorigin_setting( 'footer_constrained' ) ) echo 'unconstrained-footer'; if ( is_active_sidebar( 'footer-sidebar' ) ) echo ' footer-active-sidebar'; ?>">
		 	
<!--   // ORIGINAL FOOTER HTML // -->
 

<div style="width:100%; float:left; background-color:#eee;padding-top:30px;padding-bottom:30px;">

	<div style="position:relative;width:66%; float:left;padding-left:20%; ">
		<h4   itemprop="name">Advanced Solutions Product Lifecycle Management LLC</h4>
	 
		<nav class="footer-nav">
		  <a href="what-is-plm">What is plm?</a>
		  <a href="applications">Applications</a>
		  <a href="services">Services</a>
		  <a href="about-us">About us</a>
		  <a href="blog">Blog</a>
		  <a href="press">Press</a>
		  <a href="events">Events</a>
		  <a href="contact-us">Contact us</a>
		</nav>
	 
		<nav class="footer-small">
		  <a href="http://www.advancedsolutions.com/privacy-policy.aspx?__hstc=150101737.bcbda7d9b442514a437a141e11b04491.1515168175879.1518789951589.1518791778467.10&amp;__hssc=150101737.13.1518791778467&amp;__hsfp=3618093011" target="_blank">Privacy policy</a>
		  <a href="http://www.advancedsolutions.com/?__hstc=150101737.bcbda7d9b442514a437a141e11b04491.1515168175879.1518789951589.1518791778467.10&amp;__hssc=150101737.13.1518791778467&amp;__hsfp=3618093011" target="_blank" itemprop="parentOrganization">© 2016 Advanced Solutions, Inc.</a>
		</nav>
	 
		<a href="https://www.linkedin.com/company/advanced-solutions-product-lifecycle-management-llc?trk=company_logo" class="button" target="_blank"><i class="fa fa-linkedin"></i></a>
		<a href="http://blog.advancedsolutions.com/topic/plm?__hstc=150101737.bcbda7d9b442514a437a141e11b04491.1515168175879.1518789951589.1518791778467.10&amp;__hssc=150101737.13.1518791778467&amp;__hsfp=3618093011" class="button" target="_blank"><i class="fa fa-rss"></i>
		</a>
	</div>

	 <div style="position:relative;width:33%; float:right; ">
		<a href="press">
		<img class="autodesk-footer-logo" src="http://asihub-cdn.s3.amazonaws.com/plm/img/footer-autodesk.png" alt="Autodesk logo" height="81" width="196">
		</a>
	</div>  

</div><!-- end 60% --> 
       

<!-- // end ORIGINAL FOOTER HTML // -->
		<?php do_action( 'siteorigin_north_footer_top' ); ?>
		
		<?php if ( ! siteorigin_page_setting( 'hide_footer_widgets', false ) && ! in_array( siteorigin_page_setting( 'layout' ), array( 'stripped' ), true ) ) : ?>
			<div class="container">

				<?php
				if ( is_active_sidebar( 'footer-sidebar' ) ) {
					$siteorigin_north_sidebars = wp_get_sidebars_widgets();
					?>
					<div class="widgets widget-area widgets-<?php echo count( $siteorigin_north_sidebars['footer-sidebar'] ) ?>" aria-label="<?php esc_attr_e( 'Footer Sidebar', 'siteorigin-north' ); ?>">
						<?php dynamic_sidebar( 'footer-sidebar' ); ?>
					</div>
					<?php
				}
				?>

			</div><!-- .container -->
		<?php endif; ?>

		<div class="site-info">
			<div class="container" style="display:none;">
				<?php
				siteorigin_north_footer_text();

				$credit_text = apply_filters(
					'siteorigin_north_footer_credits',
					sprintf( esc_html__( 'Theme by %s.', 'siteorigin-north' ), '<a href="https://siteorigin.com/" rel="designer">SiteOrigin</a>' )
				);

				if ( ! empty( $credit_text ) ) {
					?><span class="sep"> | </span><?php
					echo wp_kses_post( $credit_text );
				}
				?>
			</div>
		</div><!-- .site-info -->

		<?php do_action( 'siteorigin_north_footer_bottom' ); ?>




	</footer><!-- #colophon -->
</div><!-- #page -->

<?php if ( siteorigin_setting( 'navigation_scroll_to_top' ) && siteorigin_page_setting( 'layout' ) !== 'stripped' ) : ?>
	<div id="scroll-to-top">
		<span class="screen-reader-text"><?php esc_html_e( 'Scroll to top', 'siteorigin-north' ); ?></span>
		<?php siteorigin_north_display_icon( 'up-arrow' ); ?>
	</div>
<?php endif; ?>

<?php wp_footer(); ?>

</body>
</html>
