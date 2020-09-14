<?php $post_id = get_the_ID()?>
<div class="wrapper">
   <div class="row">
      <div class="text-and-gif">
         <div class="text-and-gif__header">
               <h2 class="gigant-text" style="background-image: linear-gradient(<?php the_field('gradient', $post_id )?>);"><?php the_field('zagolovok_bloka',)?> </h2>
         </div>
         <div class="text-and-gif__items">


         <?php while( have_rows('items') ): the_row(); 

         // переменные
         $teg = get_sub_field('teg');
         $headlines = get_sub_field('headlines');
         $text = get_sub_field('text');
         $gifka = get_sub_field('gifka');
         ?>
            <div class="text-and-gif-item">
               <div class="text-and-gif-item__text">
                     <div class="text-and-gif-item__top">
                        <div class="text-and-gif-item__tag">
                           <?php echo $teg?>
                        </div>
                        <div class="text-and-gif-item__headline">
                           <?php echo $headlines?>
                        </div>
                        
                     </div>
                     <div class="text-and-gif-item__bottom">
                     <p><?php echo $text?></p>
                     </div>
               </div>                                 
               <div class="text-and-gif-item__gif">
                  <img class="img-responsive img-width" src="<?php echo $gifka?>" alt="">
               </div>
            </div>
         

         <?php endwhile; ?>
         </div>		


         
      </div>
   </div>



</div>

