<footer id="footer">
	<div class="wrapper">
		<div class="row">

			<div class="footer-form">
				<div class="footer-form__content">
					<div class="footer-form__text">
						<h3 class="font-h2">
							<?php the_field('footer-form-headline', 'option') ?>
						</h3>
						<div class="big-form__persone">
							<div class="big-form__picture">
								<img src="<?php the_field('footer-from-picture', 'option') ?>" alt="" class="img-responsive">
							</div>
							<div class="big-form__contact">
								<a href="mailto:<?php the_field('footer-from-mail', 'option') ?>"><?php the_field('footer-from-mail', 'option') ?></a>
								<a href="tel:<?php the_field('footer-from-phone', 'option') ?>" class="phone"><?php the_field('footer-from-phone', 'option') ?> </a>
							</div>


						</div>

					</div>
					<div class="footer-form__form">
						<?php echo do_shortcode('[contact-form-7 id="626" title="big form footer"]') ?>
					</div>
				</div>



			</div>
		</div>
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

<script src="//web.webformscr.com/apps/fc3/build/loader.js" async sp-form-id="194c031925f49bc3375f1dd4e15172b62b449c993f56cd1c623ce2c22efae55f"></script>

</body>

</html>