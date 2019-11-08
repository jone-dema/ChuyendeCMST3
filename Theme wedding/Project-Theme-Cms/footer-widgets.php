<?php
/**
 * Displays the footer widget area
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

?>

<aside class="widget-area" role="complementary" aria-label="<?php esc_attr_e( 'Footer', 'hayghe' ); ?>">
	<footer id="footer-section" class="footer-section clearfix">
		<div class="footer-container wrap_footer">
			<div class="footer-newsletter bg-black">
				<div class="container">
					<div class="row justify-content-lg-center">

						<?php
						if ( is_active_sidebar( 'sidebar-1' ) ) {
							?>
							
							<?php dynamic_sidebar( 'sidebar-1' ); ?>
							<?php
						}
						?>
					</div>
				</div>
			</div>
			<div class="footer-middle bg-black sec-ptb-60">
				<div class="container">
					<div class="row">
						<?php
						if ( is_active_sidebar( 'sidebar-2' ) ) {
							?>
							
							<?php dynamic_sidebar( 'sidebar-2' ); ?>
							<?php
						}
						?>
					</div>
				</div>
			</div>
			<div class="footer-bottom text-center">
				<div class="container">
					<?php
					if ( is_active_sidebar( 'sidebar-3' ) ) {
						?>
						
						<?php dynamic_sidebar( 'sidebar-3' ); ?>
						<?php
					}
					?>
				</div>
			</div>
		</aside><!-- .widget-area -->
	</div>
</footer>
