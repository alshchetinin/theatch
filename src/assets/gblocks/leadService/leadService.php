<div class="wrapper">
   <div class="row">
      <!-- begin lead-service -->
      <?php $post_id = get_the_ID() ?>
      <div class="lead-service">
         <div class="lead-service__wrapper">

            <div class="lead-service__factoid" style="background-image: linear-gradient(<?php the_field('gradient', $post_id) ?>);">
               <div class="lead-service__number gigant-text">
                  <?php the_field('number') ?>
               </div>
               <div class="lead-service__description">
                  <?php the_field('description') ?>
               </div>

            </div>
            <div class="lead-service__text">
               <?php the_field('text') ?>
            </div>
         </div>


      </div>
      <!-- end lead-service -->
   </div>
</div>