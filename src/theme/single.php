<?php get_header(); ?>
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
			$post_content_length = strlen($post->post_content);
			$time_for_read = $post_content_length / 1500;
			$time_for_read = round($time_for_read);
			$time_ending = getNumEnding($time_for_read, array('минуту','минуты','минут'));
?>
<div class="wrapper">
<!-- begin single-heading -->
	<div class="single-heading">
			<h1 class="font-gigant"><?php the_title()?></h1>
			<div class="single-meta">
				<div class="single-meta__cat">
					<?php echo get_the_category()[0]->name?> — <?php echo $time_for_read; ?> <?php echo  $time_ending; ?> чтения
				</div>
				<div class="single-meta__date">
					<?php the_date()?>
				</div>
				
				
			</div>
	</div>
<!-- end single-heading -->	
</div>
<!-- begin thumbnail -->
<div class="single-thumbnail">
	<?php the_post_thumbnail()?>
</div>
<!-- end thumbnail -->
<div class="wrapper">
<div class="site-content single">
		<?php the_post(); the_content();?>
	</div>

</div>


<?php get_footer(); ?>
