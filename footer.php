<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Jackrabbit
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<div class="copyright">Copyright &copy; <?php echo date("Y"); ?> <?php bloginfo( 'name' ); ?>
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->


<a class="scrollup js-scroll-trigger" id="scrollUpButton" href="#page-top"><svg class="scrollup-chevron" xmlns="https://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M0 16.67l2.829 2.83 9.175-9.339 9.167 9.339 2.829-2.83-11.996-12.17z"/></svg><span class="screen-reader-text">to top</span></a>

<?php wp_footer(); ?>

</body>
</html>
