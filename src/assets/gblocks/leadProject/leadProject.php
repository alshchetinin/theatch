<section class="g-block">
   <div class="wrapper">
      <div class="row">
         <!-- begin lead-project -->
         <div class="lead-project">
            <div class="lead-project__title">
               <h2 class="font-gigant"><?php the_field('title') ?></h2>
            </div>
            <div class="lead-project__text">
               <?php the_field('text') ?>
            </div>
            <div class="lead-project__link">
               <a href="<?php the_field('link') ?>" target="_blanck"><?php the_field('link_name') ?></a>
            </div>

         </div>
         <!-- end lead-project -->
      </div>
   </div>
</section>