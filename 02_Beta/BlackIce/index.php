<?php query_posts( array( 
                         'post_type' => 'post',
                         'posts_per_page' => -1 ) 
      ); 
?>


<?php get_header(); ?>

        <!--Expand/ Collapse all accordian content buttons-->
        <div class="expand_collapse">
            <div class="expand_all">+</div>
            <br>
            <div class="collapse_all">-</div>
        </div>
<?php

if(have_posts()) :?>
    <div class="mobile_fix">
	    <div class="singleContent accordian_list">
        <ul>  

		<?php while(have_posts()) : the_post(); ?>

            <li>
                <a class="expand">
                    <div class="expand_icon">+</div>
                    <div class="title"><?php the_title(); ?>                     
</div>
                </a>

                <div class="content">
                    <?php the_content(); ?>
<!--                      <a class="details" href="<?php the_permalink(); ?>">&#9999;</a>
 -->                
                   <a class="details" href="<?php the_permalink(); ?>">&#10154;</a>
                </div>
            </li>            
  
<!-- 		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a></h2>
 -->

<!-- 		<?php the_content(); ?>
 -->
<?php endwhile;?>
                </ul>
    </div>   
    </div>  
	<?php else :
		echo '<p>No content found</p>';
	endif;


	 get_footer();
?>

  