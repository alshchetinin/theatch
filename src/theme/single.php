<?php get_header(); ?>
<!-- container -->
<div class="container">
	<!-- site-content -->
	<div class="site-content single">
	<?php the_post(); the_content();?>
	</div>
	<!-- /site-content -->
</div>
<!-- container -->
<?php get_footer(); ?>
