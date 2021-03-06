<?php get_header(); ?>
    
    <div id="content">
    	<?php//custom home featured image banner
    	the_post_thumbnail( 'awesome-home-banner' );
    	?>
    	
	<?php 
	//THE LOOP.
	if( have_posts() ): 
		while( have_posts() ):
		the_post(); ?>
	
        <article id="post-1" <?php post_class( 'clearfix' ); ?>>
            <h2 class="entry-title"> <a href="<?php the_permalink(); ?>"> 
				<?php the_title(); ?> 
			</a></h2>      
            
            <div class="entry-content">
                <?php the_content(); ?>
            </div>
       
		 </article><!-- end post -->
      <?php 
	  endwhile;
	  else: ?>
	  <h2>Sorry, no posts found</h2>
	  <?php endif; //END OF LOOP. ?>
	          
        
        
    </div><!-- end content -->
    
<?php get_sidebar(); ?> 
<?php get_footer(); ?>  