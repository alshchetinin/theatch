<?php get_header(); ?>
<section>
   <div class="wrapper">
      <div class="row">
         <div class="page-title">
            <h1 class="super-text"><?php the_title() ?></h1>
         </div>         
      </div>
      <div class="row">
      <h2 class="gigant-text">Страница в разработке</h2>
      </div>
   </div>
</section>
	<div class="site-content page">
	<?php the_post(); the_content();?>
	</div>
<?php get_footer(); ?>
