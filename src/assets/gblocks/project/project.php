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
$featured_posts = get_field('cases');
if( $featured_posts ): ?>
    <ul>
    <?php foreach( $featured_posts as $featured_post ): 
        $permalink = get_permalink( $featured_post->ID );
        $title = get_the_title( $featured_post->ID );
        $custom_field = get_field( 'field_name', $featured_post->ID );
        ?>
        <li>
            <a href="<?php echo esc_url( $permalink ); ?>"><?php echo esc_html( $title ); ?></a>
            <span>A custom field from this post: <?php echo esc_html( $custom_field ); ?></span>
        </li>
    <?php endforeach; ?>
    </ul>
<?php endif; ?>
      </div>
   </div>
</div>
</section>
