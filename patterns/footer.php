<?php
/**
 * Title: Footer
 * Slug: wax-store/footer
 * Categories: footer
 * Block Types: core/template-part/footer
 * Inserter: no
 *
 * @package Wax_Store
 */

?>
<!-- wp:group {"className":"site-footer","layout":{"type":"constrained","contentSize":"1280px"}} -->
<div class="wp-block-group site-footer">
<!-- wp:columns -->
<div class="wp-block-columns">
<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:site-title {"level":0} /-->
<!-- wp:site-tagline /-->
</div>
<!-- /wp:column -->
<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:navigation {"overlayMenu":"never","layout":{"type":"flex","orientation":"vertical"}} /-->
</div>
<!-- /wp:column -->
</div>
<!-- /wp:columns -->
<!-- wp:paragraph {"fontSize":"small","textColor":"groove"} -->
<p class="has-groove-color has-text-color has-small-font-size">
<?php
/* translators: %s: WordPress link. */
printf( esc_html__( 'Record shop powered by %s', 'wax-store' ), '<a href="' . esc_url( __( 'https://wordpress.org', 'wax-store' ) ) . '">WordPress</a>' );
?>
</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
