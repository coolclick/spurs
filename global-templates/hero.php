<?php
/**
 * Hero setup.
 *
 * @package spurs
 */
?>

<?php if ( is_active_sidebar( 'hero' ) || is_active_sidebar( 'static-hero' ) ) : ?>

	<div class="wrapper" id="wrapper-hero">
		<?php get_sidebar( 'hero' ); ?>
		<?php get_sidebar( 'static-hero' ); ?>
	</div>

<?php endif; ?>
