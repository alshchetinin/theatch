<section class="g-block">
   <div class="wrapper">
      <div class="row">
         <!-- begin headline-description -->
         <div class="headline-description">
            <div class="headline-description__title">
               <h2 class="gigant-text"><?php the_field('title') ?></h2>
            </div>
            <div class="headline-description__text">
               <?php the_field('text') ?>
            </div>
         </div>
         <!-- end headline-description -->
      </div>
      <div class="row">
         <div class="big-img">
            <div class="img-wrapper">
            <?php
            $images = get_field('pictures');
            $size = 'full'; // (thumbnail, medium, large, full or custom size)
            if ($images) : ?>
               
                  <?php foreach ($images as $image_id) : ?>
               
                     <img class="img-responsive" <?php awesome_acf_responsive_image($image_id ,'Full size','1920px'); ?>  alt="text" />
               
                  <?php endforeach; ?>
               
            <?php endif; ?>
            </div>

         </div>
      </div>

   </div>

</section>