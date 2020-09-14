<footer>
	<div class="wrapper">
		<div class="row">
			<!-- begin footer -->
			<div class="footer">
				<div class="footer__nav">
					<?php
					$args = array(
						'theme_location' => 'footer'
					);
					wp_nav_menu($args);
					?>
				</div>

			</div>
			<!-- end footer -->
		</div>
	</div>
</footer>
<?php wp_footer(); ?>
</body>

</html>