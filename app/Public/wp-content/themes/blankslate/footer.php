</main>
<?php get_sidebar(); ?>
</div>
<footer id="footer" role="contentinfo">
<div id="copyright">
<?php wp_nav_menu([
  'theme_location' => 'footer'
  'container' => false,
  'menu_class' => 'navbar-nav mr-auto'
            
 ]) 
 ?>
&copy; <?php echo esc_html( date_i18n( __( 'Y', 'blankslate' ) ) ); ?> <?php echo esc_html( get_bloginfo( 'name' ) ); ?>
</div>
</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>