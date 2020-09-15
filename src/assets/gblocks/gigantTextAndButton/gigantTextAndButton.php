<section class="g-block">
<div class="wrapper">
   <div class="row">
      <div class="gigant-text-button">
         <div class="gigant-text-button__headline">
         <?php $post_id = get_the_ID()?>
            <h2 class="gigant-text" style="background-image: linear-gradient(<?php the_field('gradient', $post_id )?>);" ><?php the_field('headline',)?></h2>
         </div>
            <a href="<?php the_field('button_link')?>" style="background-image: linear-gradient(<?php the_field('gradient', $post_id )?>);" class="button"><?php the_field('button_text',)?></a>
      </div>
   </div>
</div>

</section>
