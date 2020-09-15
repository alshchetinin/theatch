<section class="g-block">
   <div class="wrapper">
      <div class="row">
         <!-- begin list-check -->
         <div class="list-check">
            <div class="list-check__title">
               <h2 class="font-super-gigant">
               <?php the_field('zagolovok')?>
               </h2>
            </div>
            <div class="list-check__items">
            <?php while( have_rows('spisok') ): the_row(); 

               // переменные
               $list_title = get_sub_field('list_title');
               $list_text = get_sub_field('list_text');
               ?>
               <!-- begin list-item -->
               <div class="list-item">
               <div class="list-item__icon">
                  <img src="<?php echo get_template_directory_uri()?>/img/svg/check.svg" alt="">
               </div>
               
                  <div class="list-item__title">
                     <?php echo $list_title ?>
                  </div>
                  <div class="list-item__text">
                  <?php echo $list_text ?>
                  </div>      
               </div>
               <!-- end list-item -->
				<?php endwhile; ?>

            </div>   
         </div>
         <!-- end list-check -->
      </div>
   </div>
</section>