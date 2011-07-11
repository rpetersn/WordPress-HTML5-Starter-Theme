<?php
/*
Template Name: Home Template
*/
?>

<?php get_header(); ?>
			
				

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					<article id="post-<?php the_ID(); ?>">
                    
                    <div class="article">
	
						<section class="post_content clearfix">
							<?php the_content(); ?>
					
						</section> <!-- end article section -->
						
	
   						 <?php ########### MISC DOCS LOOP ############# ?>
   
   							<?php
							$args=array(
								 	   'post_type' => 'post',
								       'post_status' => 'publish',
								       'posts_per_page' => 3,
								       'caller_get_posts'=> 1
								      );
									  $my_query = null;
								      $my_query = new WP_Query($args);
								      if( $my_query->have_posts() ) { ?>
								
                                <h2>Recent News</h2>
                                <ul id="member_docs" class="">
								   
								<?php  
								while ($my_query->have_posts()) : $my_query->the_post();
								?>
								 
                                 
								<li>
									<a href="<?php the_permalink();?>" target="_blank">
										<?php the_title(); ?>
									</a> 
                                    <p>
                                    <?php the_excerpt(); ?>
                                    </p>
								</li>
                                
								   
								<?php
								 endwhile;
								} ?>

                                </ul>
    				</div>
					
					</article> <!-- end article -->
					
					
					<?php endwhile; ?>		
					
					<?php else : ?>
					
					<article id="post-not-found">
                    
                    	<div class="article">
                    
					    <header>
					    	<h1>Not Found</h1>
					    </header>
					    <section class="post_content">
					    	<p>Sorry, but the requested resource was not found on this site.</p>
					    </section>
					    <footer>
					    </footer>
                        
                        </div>
                        
					</article> <!-- end article -->
					
					<?php endif; ?>
                    
                    <aside>
                    
                    <div class="aside">
                    
                    Home Sidebar
                    
                    </div>
                    
                    </aside> <!-- end aside -->
	
<?php get_footer(); ?>