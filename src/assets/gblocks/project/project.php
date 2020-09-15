<section class="g-block">
<div class="wrapper">
   <div class="row">
      <div class="title-section ">
         <h2><?php the_field('title') ?></h2>
      </div>
   </div>
   <div class="row">
      <div class="projects">
         <?php
         $featured_posts = get_field('vybor_proektov');
         if ($featured_posts) : ?>
            <ul>
               <?php foreach ($featured_posts as $post) :
                  // Setup this post for WP functions (variable must be named $post).
                  setup_postdata($post); ?>
                  <li>
                     <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                     <span>A custom field from this post: <?php the_field('field_name'); ?></span>
                  </li>
               <?php endforeach; ?>
            </ul>
            <?php
            // Reset the global post object so that the rest of the page works correctly.
            wp_reset_postdata(); ?>
         <?php endif; ?>
      </div>
   </div>
</div>
</section>
