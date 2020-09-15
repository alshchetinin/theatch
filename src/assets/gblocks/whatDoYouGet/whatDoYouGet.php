<section class="g-block">
<div class="wrapper">
   <div class="what-do-you-get">
      <div class="what-do-you-get__header">
         <div class="what-do-you-get__title title-section ">
               <h2 class="font-super-gigant"><?php the_field('title')?></h2>
         </div>
         <?php $post_id = get_the_ID()?>
         <div class="what-do-you-get__subtitle" style="background-image: linear-gradient(<?php the_field('gradient', $post_id )?>);">
         <?php the_field('subtitle')?>
         </div>
         <div class="what-do-you-get__description">
         <?php the_field('description')?>
         </div>
      </div>
      <div class="what-do-you-get__bottom">
            <div class="what-do-you-get__list">
            <?php while( have_rows('tekst_v_kolonkah') ): the_row(); 

            // переменные
            $headline = get_sub_field('list_title');
            $text = get_sub_field('list_text');
            ?>

            <?php
            $countItem = count(get_field('tekst_v_kolonkah'));
            $className = "what-do-you-get__item_2";
               if ( $countItem > 3 ) {
                  $className ="what-do-you-get__item_2";
              } else {
               $className ="what-do-you-get__item_3";
              }
            
            ?>
               <div class="what-do-you-get__item <?php echo $className?>">
                  <h3><?php echo $headline?></h3>
                  <div class="what-do-you-get_text">
                  <?php echo $text?>
                     </div>
                  
               </div>			

            <?php endwhile; ?>

               
            </div>
      </div>

   </div>
</div>
</section>
