<?php get_header(); ?>


<section>
   <div class="wrapper">
      <div class="row">
        <h2 class="font-super-gigant" style="text-align: center;">Такой страницы не существует :( </h2>
      </div>
      <div class="row">
         <div class="lt-animation">         
         <lottie-player src="https://assets3.lottiefiles.com/datafiles/mC4m44lb0JdgZMI/data.json"  background="transparent"  speed="1"  style="min-width: 320px; max-width:100%; height: auto;"  loop  autoplay></lottie-player>
         </div>
      </div>
   </div>
</section>

	<div class="site-content page">
	<?php the_post(); the_content();?>
	</div>
<?php get_footer(); ?>
