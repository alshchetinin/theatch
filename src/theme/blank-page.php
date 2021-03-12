<?php
/*
Template Name: Страница в разработке
Template Post Type: page, services
*/
?>

<?php get_header(); ?>


<section>
   <div class="wrapper">
      <div class="row">
        <h2 class="font-super-gigant page-title" style="text-align: center;">Страница в разработке и скоро будет готова </h2>
      </div>
      <div class="row">
         <div class="lt-animation">         
         <lottie-player src="https://assets7.lottiefiles.com/packages/lf20_06nhjb.json"  background="transparent"  speed="1"  style="min-width: 320px; max-width:620px; height: auto;"  loop  autoplay></lottie-player>
         </div>
      </div>
   </div>
</section>

	<div class="site-content page">
	<?php the_post(); the_content();?>
	</div>
<?php get_footer(); ?>
