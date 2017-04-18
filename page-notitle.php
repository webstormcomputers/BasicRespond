<?php
/* 
Template Name: Page No Title
*/

get_header();
?>
<?php
if( have_posts() ): //check if we have posts
		
		while( have_posts() ): the_post(); ?>
		
			 <!-- format the posts with date time and category -->
			<small>Posted on: <?php the_time('F j, Y'); ?> at <?php the_time('g:i a'); ?>, in <?php the_category(); ?></small>
			
			<p><?php the_content(); //page and post content?></p>
			
			<hr>
		
		<?php endwhile;
		
	endif;
			
	?>

<?php 
get_footer();
?>