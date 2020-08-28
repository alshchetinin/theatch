<section>
   <div class="wrapper">
      <div class="step-wrapper">

      <?php $i = 0; ?>
      <?php while( have_rows('steps',) ): the_row(); 
            $i++; 
				// переменные
				$hedline = get_sub_field('zagolovok');
            $text = get_sub_field('text');            
				?>
      <div class="step-item">
            <div class="step-item__line"></div>
            
            <div class="step-item__content">
               <div class="step-item__number">
                  <span><?php echo $i; ?></span>
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