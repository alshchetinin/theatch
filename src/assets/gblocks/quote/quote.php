<section class="g-block">
<div class="wrapper">
   <div class="row">
      <div class="quote">
         <?php $post_id = get_the_ID()?>
         <div class="quote__text" >
            <h2 class="font-gigant" style="background-image: linear-gradient(<?php the_field('gradient', $post_id )?>);">
            <span class="quote__mark">“</span>
            <br>
            <?php the_field('quote')?></h2>
         </div>
         <div class="quote__persone">
            <div class="quote__photo">
            <img src="<?php the_field('picture')?>" alt="">
            </div>
            <div class="quote__persone-text">
               <div class="quote__name">
               <?php the_field('name')?>
               </div>
               <div class="quote__job">
               <?php the_field('job')?>
               </div>               
            </div>
            
         </div>
         
         
         
      </div>
   </div>
</div>
</section>
