<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Hairstyle
 */
?>

        <div class="copyright-wrapper">
        	<div class="para-foot-shaper">
            </div>
        	<div class="pos-foot-handle">
                <div class="copyright">
                    	<p><?php esc_html(bloginfo( 'name' )); ?>  <?php echo esc_html(date_i18n( __( 'Y', 'hairstyle' ) )); ?></p>            
                </div><!-- copyright -->
                <div class="design-by">
                    	<p><?php esc_html_e('Powered by WordPress','hairstyle'); ?></p>                 
                </div><!-- design-by --><div class="clear"></div>         
            </div><!-- pos-foot-handle -->
        </div>
    </div>
<?php wp_footer(); ?>

</body>
</html>