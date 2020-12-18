<?php
/*
Template Name: Блог
Template Post Type: page
*/
?>
<?php get_header(); ?>
<section>
<div class="wrapper">
<div class="row">
    <div class="page-title">
      <h1 class="very-big-text"><?php the_title() ?></h1>
    </div>
</div>
</div>
</section>

<section>
<div class="wrapper">
<div class="blog-list">
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
        $args = array( 'posts_per_page' => -1, );
        $myposts = get_posts( $args );
        $counter = 0;
        foreach( $myposts as $post ){ setup_postdata($post);
          $post_content_length = strlen($post->post_content);
          $time_for_read = $post_content_length / 1500;
          $time_for_read = round($time_for_read);
          $time_ending = getNumEnding($time_for_read, array('минуту','минуты','минут'));
          $counter++
          ?>

          <article class="blog-item <?php if ($counter === 1) {echo "blog-item_big";}?>">
              <a href="<?php the_permalink() ?>"></a>
              <div class="blog-item__picture"> <?php the_post_thumbnail()?></div>
              <div class="blog-item__content">
              
                <div class="blog-item__tag"><?php echo get_the_category()[0]->name?> — <?php echo $time_for_read; ?> <?php echo  $time_ending; ?> чтения</div>
                <div class="blog-item__date"><?php echo get_the_date()?></div>
                <div class="blog-item__title"> <?php the_title()?></div>
                <div class="blog-item__excerpt"><?php the_excerpt()?>
                </div>
                <div class="blog-item__author"></div>
              </div>

              </article>




        <?php
        }
        wp_reset_postdata();
        ?>
</div>


</div>
</section>

<?php get_footer(); ?>