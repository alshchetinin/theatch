<section class="g-block">
<div class="wrapper">
   <div class="row">
      <div class="font-gigant-button">
         <div class="font-gigant-button__headline">
         <?php $post_id = get_the_ID()?>
            <h2 class="font-super-gigant" style="background-image: linear-gradient(<?php the_field('gradient', $post_id )?>);" ><?php the_field('headline',)?></h2>
         </div>

         <?php if (get_field('button_link')) { ?>
            <a href="<?php the_field('button_link')?>" style="background-image: linear-gradient(<?php the_field('gradient', $post_id )?>);" class="button"><?php the_field('button_text',)?></a>
            <?php } ?>
            
      </div>
   </div>
</div>

</section>
