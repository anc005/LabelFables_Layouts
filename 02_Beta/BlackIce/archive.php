<?php 

get_header();

if(have_posts()) :?>


<h2>Sample</h2>

    <?php 

	    <div class="accordian_list">
        <ul>  

		<?php while(have_posts()) : the_post(); ?>



            <li>
                <a class="expand">
                    <div class="expand_icon">+</div>
                    <div class="title"><?php the_title(); ?></div>
                </a>

                <div class="content">
                    <?php the_content(); ?>
                                <a href="#">Visit Website</a>
                </div>
            </li>            
  
  



<!-- 		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a></h2>
 -->

<!-- 		<?php the_content(); ?>
 -->
<?php endwhile;?>
                </ul>
    </div>     
	<?php else :
		echo '<p>No content found</p>';
	endif;


	// get_footer();
?>
 </div>
    </div>