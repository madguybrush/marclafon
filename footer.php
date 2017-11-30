<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package marclafon
 */

?>

	<!--</div>--><!-- #content -->


</div><!-- #page -->
<?php if ( is_front_page()  ) : ?>
<footer class="text-center">
  <a class="up-arrow" href="#menu">
      <!--<span class="glyphicon glyphicon-chevron-up">vxvcvx</span>
      <span class="dashicons dashicons-arrow-up-alt2"></span>-->
      <i class="fa fa-arrow-up" aria-hidden="true"></i>
  </a>
</footer>



<?php endif; ?>
<?php wp_footer(); ?>

</body>
</html>
