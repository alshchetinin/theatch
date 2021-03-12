<?php get_header(); ?>
<section class="page-content">
   <div class="wrapper">
      <div class="row">
         <div class="page-title">
            <h1 class="very-big-text"><?php the_title() ?></h1>
         </div>         
      </div>
      <div class="row">      
      </div>
   </div>
</section>

	<div class="site-content page">
	<?php the_post(); the_content();?>
	</div>
<?php get_footer(); ?>
