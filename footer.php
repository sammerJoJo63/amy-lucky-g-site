
	<?php
	if (!( is_page_template( 'home.php') ) ) { ?>
		</div><!-- Row End -->
	<?php	} ?>
</div><!-- Container End -->

<!-- <div class="full-width footer-widget">
	<div class="row">
		<?php //dynamic_sidebar("Footer"); ?>
	</div>
</div> -->

<footer class="full-width" role="contentinfo">
	<div class="row">
		<div class="large-12 columns">
			<?php wp_nav_menu(array('theme_location' => 'utility', 'container' => false, 'menu_class' => 'inline-list')); ?>
		</div>
	</div>
	<div class="row love-reverie">
		<div class="large-12 columns">
			<p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. <?php _e("<span>Made with love by <a href='https://samcarne.com'>Sam Carne</a> in",'reverie'); ?> <a href="http://themefortress.com/reverie/" rel="nofollow" title="Reverie Framework">Reverie</a>.</span></p>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>

<script>
	(function($) {
		$(document).foundation();
	})(jQuery);
</script>

</body>
</html>
