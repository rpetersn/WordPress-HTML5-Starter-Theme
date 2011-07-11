<?php get_header(); ?>
										
					<h1 class="archive_title"><span>Search Results for:</span> <?php echo esc_attr(get_search_query()); ?></h1>

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?>>
                    
                    <div class="article">                                                              
                    						
						<header>
							
							<h3><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
							
							<p class="meta">Posted <time><?php the_time('F jS, Y'); ?></time> by <?php the_author_posts_link(); ?> <span class="amp">&</span> filed under <?php the_category(', '); ?>.</p>
						
						</header> <!-- end article header -->
					
						<section class="post_content">
							<?php the_excerpt('<span class="read-more">Read more on "'.the_title('', '', false).'" &raquo;</span>'); ?>
					
						</section> <!-- end article section -->
						
						<footer>
					
							
						</footer> <!-- end article footer -->
                        
    				</div>                                             
                        					
					</article> <!-- end article -->
					
					<?php endwhile; ?>	
					
	
						<nav class="wp-prev-next">
							<ul class="clearfix">
								<li class="prev-link"><?php next_posts_link('&laquo; Older Entries') ?></li>
								<li class="next-link"><?php previous_posts_link('Newer Entries &raquo;') ?></li>
							</ul>
						</nav>		
					
					<?php else : ?>
					
					<!-- this area shows up if there are no results -->
					
					<article id="post-not-found">
                    
                    <div class="article">                                                              
                    
					    <header>
					    	<h1>No Results Found</h1>
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