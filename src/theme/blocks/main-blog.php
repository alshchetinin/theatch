<?php if( get_field('main-blog') == 'true' ): ?>

<section id="main-blog" class="g-block">
   <div class="wrapper">
      <div class="main-blog">
         <div class="title-section title-section_blog">
            <h2 class="font-super-gigant">Блог</h2>
         </div>
         <div class="main-blog__list">
            <div class="main-blog__set">

         <?php
         function getNumEnding($number, $endingArray) {
            $number = $number % 100;
            if ($number>=11 && $number<=19) {
               $ending=$endingArray[2];
            }
            else {
               $i = $number % 10;
               switch ($i) {
                  case (1): $ending = $endingArray[0]; break;
                  case (2):
                  case (3):
                  case (4): $ending = $endingArray[1]; break;
                  default: $ending=$endingArray[2];
               }
            }
            return $ending;
         }         

         global $post;
         $args = array( 'posts_per_page' => 3, );
         $myposts = get_posts( $args );
         foreach( $myposts as $post ){ setup_postdata($post);
            $post_content_length = strlen($post->post_content);
            $time_for_read = $post_content_length / 1500;
            $time_for_read = round($time_for_read);
            $time_ending = getNumEnding($time_for_read, array('минуту','минуты','минут'));
            ?>

            <article class="blog-item">
               <a href="<?php the_permalink() ?>"></a>
                  <div class="blog-item__picture"> <?php the_post_thumbnail()?></div>
                  <div class="blog-item__tag"><?php echo get_the_category()[0]->name?> — <?php echo $time_for_read; ?> <?php echo  $time_ending; ?> чтения</div>
                  <div class="blog-item__date"><?php echo get_the_date()?></div>
                  <div class="blog-item__title"> <?php the_title()?></div>
                  <div class="blog-item__excerpt"><?php the_excerpt()?>
                  </div>
                  <div class="blog-item__author"></div>
               </article>




         <?php
         }
         wp_reset_postdata();
         ?>

            </div>


         </div>

      </div>

   </div>
   <?php echo get_template_part('/blocks/notification') ?>

</section>
<?php endif; ?>
