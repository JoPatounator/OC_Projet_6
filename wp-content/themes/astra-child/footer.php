<?php

/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Astra
 * @since 1.0.0
 */

if (! defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}

?>
<?php astra_content_bottom(); ?>
</div> <!-- ast-container -->
</div><!-- #content -->

<!------------------------------ Insertion frise pied de page ------------------------------->

<!--<div class="image_footer_container">
	<img class="image_footer" src="http://localhost/planty/wp-content/uploads/2024/12/Mask-group-4.png" alt="Frise en canettes de Planty">
</div>-->

<?php
astra_content_after();

astra_footer_before();

astra_footer();

astra_footer_after();
?>
</div><!-- #page -->
<?php
wp_footer();
?>
</body>

</html>