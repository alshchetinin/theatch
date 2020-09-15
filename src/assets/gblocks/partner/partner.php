<section class="g-block">
<div class="wrapper">
   <div class="row">
      <div class="partner">
         <div class="partner__title">
            <h2 class="gigant-text" ><?php the_field('headline')?></h2>
         </div>
         <div class="partner__logos">

         <?php while( have_rows('logos') ): the_row(); 
				// переменные
				$logo = get_sub_field('logo');
				?>
            <div class="partner-logo">
               <img class="img-responsive" src="<?php echo esc_url($logo['url']); ?>" alt="<?php echo esc_attr($logo['alt']); ?>" />
            </div>            
   

			<?php endwhile; ?>


         </div>
         
      </div>
   </div>
</div>
</section>
