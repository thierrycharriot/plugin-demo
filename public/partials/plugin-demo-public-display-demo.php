<?php

/**
 * Provide a public-facing view for the plugin
 *
 * This file is used to markup the public-facing aspects of the plugin.
 *
 * @link       https://thierrycharriot.github.io
 * @since      1.0.0
 *
 * @package    Plugin_Demo
 * @subpackage Plugin_Demo/public/partials
 */
?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->

<!-- This file should primarily consist of HTML with a little bit of PHP. -->
<?php get_header(); ?>

<div class="container mt-3">
<div class="row">

	<main id="primary" class="site-main col-lg-8">

    <?php
        // https://developer.wordpress.org/reference/functions/do_shortcode/
        // do_shortcode( string $content, bool $ignore_html = false ): string
        // Search content for shortcodes and filter shortcodes through their hooks.
        //var_dump( $post );
        do_shortcode( '[shortcode-demo]' );
	?>

	</main><!--/main -->

	<?php get_sidebar(); ?>

</div><!--/row-->
</div><!--/container mt-3-->

<?php get_footer();