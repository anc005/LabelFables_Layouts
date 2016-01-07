<?php get_header(); ?>

	<div class="mobile_fix">

<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
		 <div class="singleContent pageWidth">
		 	<ul><li>
			<div class="title_page">
				<?php the_title(); ?>
			</div>

				<?php the_content(); ?>
		</li></ul>
		</div>
<?php endwhile; ?>
<?php endif; ?>

	</div>

<?php get_footer(); ?>
