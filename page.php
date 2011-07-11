<?php get_header(); ?>
			
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?>>

                    <div class="article">                                           
						
						<header>
							
							<h1 class="page-title"><?php the_title(); ?></h1>
													
						</header> <!-- end article header -->
					
						<section class="post_content clearfix">
							<?php the_content(); ?>
					
						</section> <!-- end article section -->
						
						<footer>
			
							<p class="tags"><?php the_tags('<span class="tags-title">Tags:</span> ', ', ', ''); ?></p>
							
						</footer> <!-- end article footer -->
					
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
                        
					</article>
					
					<?php endif; ?>
			
<?php get_footer(); ?>