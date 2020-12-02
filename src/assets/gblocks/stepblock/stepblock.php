<section class="step g-block">
   <div class="wrapper">
         <div class="title-section">
            <h2 class="font-super-gigant"><?php the_field('zagolovok_bloka',)?> </h2>
         </div>
         <?php $post_id = get_the_ID()?>
      <div class="step-wrapper" style="--gradient: linear-gradient(<?php the_field('gradient', $post_id) ?>)" >

      
      <?php while( have_rows('steps',) ): the_row(); 
      
				// переменные
				$hedline = get_sub_field('zagolovok');
            $text = get_sub_field('text');            
				?>
      <div class="step-item" >
            <div class="step-item__line-animation"></div>
            <div class="step-item__line"></div>
            
            <div class="step-item__content">
               <div class="step-item__number">
                  <span><?php echo get_row_index(); ?></span>
               </div>
               <div class="step-item__text">
               <div class="step-item__title"><?php echo $hedline?></div>
               <div class="step-item__list">                  
                  <ul>
                  <?php while( have_rows('list',) ): the_row(); 

                     // переменные
                     $listTitle = get_sub_field('list-title');
                     
                     ?>
                     <li><?php echo $listTitle?></li>

                     <?php endwhile; ?>                     
                  </ul>
               </div>
               <div class="step-item__description">
               <?php echo $text?>
               </div>

               </div>
               
               
            </div>            
         </div>  					

				<?php endwhile; ?>

                              
      </div>
   </div>
</section>