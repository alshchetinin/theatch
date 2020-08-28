<?php
/*
Template Name: Услуги
Template Post Type: page
*/
?>

<?php get_header(); ?>
   <section>
      <div class="service-header" style="background-image: linear-gradient(90deg, #F857A6 0%, #FF5858 100%);">
      <div class="wrapper">
         <div class="service-header__row">
         <div class="service-header__content">
               <h1 class="super-text">Аудит 360°</h1>
               <p class="gigant-text">Анализируем интернет-маркетинг девелопера и составляем рекомендации по увеличению конверсии и снижению стоимости заявки</p>
            </div>

         </div>
                  
      </div>
         
         
      </div>
   </section>


   <div class="site-content page">
	<?php the_post(); the_content();?>
	</div>
<?php get_footer(); ?>


