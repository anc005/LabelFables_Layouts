<?php get_header(); ?>

	<div class="mobile_fix">

<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
 <div class="singleContent individual_post accordian_item">
 	<ul><li>
	<div class="title">
		<?php the_title(); ?>
		<p class="post_info"><i><?php the_time('F j, Y'); ?></i></p>
	</div>

	<div>
		<?php the_content(); ?>
	</div>
</li></ul>
</div>
<?php endwhile; ?>
<?php endif; ?>
</div>
<center>
<span class='st_facebook' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>'></span>
<span class='st_twitter' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>'></span>
<span class='st_linkedin' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>'></span>
<span class='st_tumblr' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>'></span>
<span class='st_email' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>'></span>
<span st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>' class='st_pinterest'></span>
<span st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>' class='st_reddit'></span>
<span st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>' class='st_wordpress'></span>
<span st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>' class='st_googleplus'></span>
</center>
<?php comments_template(); ?> 
<?php get_footer(); ?>
