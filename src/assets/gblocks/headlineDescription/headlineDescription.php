<section class="g-block">
   <div class="wrapper">
      <div class="row">
         <!-- begin headline-description -->
         <div class="headline-description">
            <?php if (get_field('title')) { ?>
               <div class="headline-description__title">
                  <h2 class="font-gigant"><?php the_field('title') ?></h2>
               </div>
            <?php } ?>

            <?php if (get_field('text')) { ?>
               <div class="headline-description__text">
                  <?php the_field('text') ?>
               </div>
            <?php } ?>

         </div>
         <!-- end headline-description -->
      </div>
   </div>

</section>