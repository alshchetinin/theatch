<section class="g-block">
<div class="wrapper">
   <div class="row">
      <div class="title-section sevice-projects-title">
         <h2 class="font-super-gigant"><?php the_field('title') ?></h2>
      </div>
   </div>
   <div class="row">
      <div class="sevice-projects">
      <?php $cateroty = get_field('category')?>
      <?php $args = array(
                  'post_type' => 'project',
                  'category_name' => $cateroty,
                  'posts_per_page' => -1,
                  'orderby' => 'date',
               );
               $property = new WP_Query($args); // дальше - loop
               if ($property->have_posts()) : ?>
                  <?php while ($property->have_posts()) :
                     $property->the_post(); ?>
                     <?php $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
                     ?>
                     <div class="sevice-project" style="background-image: url(<?php echo $url ?>)">
                     <div class="sevice-project__overlay"></div>
                     
                        <a href="<?php the_permalink() ?>"></a>                        
                        <div class="sevice-project__title font-h2">
                           <?php the_title() ?>
                        </div>

                     </div>
                  <?php endwhile; ?>
               <?php endif;
               wp_reset_postdata();
               ?>
      </div>
   </div>
</div>
</section>
