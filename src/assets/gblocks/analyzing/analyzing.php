<div class="wrapper">
   <div class="row">
      <div class="analyzing">
         <div class="analyzing__headline">
            <h2 class="gigant-text" ><?php the_field('headline')?></h2>
         </div>
         <div class="analyzing__items">

         <?php while( have_rows('items') ): the_row(); 

            // переменные
            $headline_1 = get_sub_field('headline_1');
            $text_1 = get_sub_field('text_1');

            $headline_2 = get_sub_field('headline_2');
            $text_2 = get_sub_field('text_2');
            $picture = get_sub_field('picture');       
            ?>
            <?php 
            
            $shirokaya_kartinka = get_sub_field('shirokaya_kartinka');
            if( $shirokaya_kartinka ) {
               $wild = 'analyzing-item__img_wild';
            } else {
               $wild = ' ';
            };
            
            ?>
            
            <div class="analyzing-item">
                  <div class="analyzing-item__top">
                     <h3><?php echo $headline_1 ?></h3>
                     <p><?php echo $text_1 ?></p>
                  </div>
                  <div class="analyzing-item__bottom">
                     <h3><?php echo $headline_2 ?></h3>
                     <p><?php echo $text_2 ?></p>                     
                        <div class="analyzing-item__img <?php echo $wild?>">
                           <img class="img-responsive" src="<?php echo esc_url($picture['url']); ?>" alt="<?php echo esc_attr($picture['alt']); ?>" />
                        </div>
                        
                  </div>
                  
            </div>				

         <?php endwhile; ?>



               
         </div>
         
      </div>
   </div>
</div>