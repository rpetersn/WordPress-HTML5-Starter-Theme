<?php
/*
Template Name: Links Template
*/
?>

<?php get_header(); ?>

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?>>
                    
                    <div class="article">                 
						
						<header>
							
							<h1><?php the_title(); ?></h1>
													
						</header> <!-- end article header -->
					
						<section class="post_content">

							<?php $args = array(
                                'orderby'          => 'name',
                                'between'          => ' - ',
                                'order'            => 'ASC',
                                'category'		   => 2,
                                'categorize'       => 0,
                                'title_li'         => null,
                                'title_before'     => '<h2>',
                                'title_after'      => '</h2>',
                                'category_orderby' => 'name',
                                'category_order'   => 'ASC',
                                'class'            => 'linkcat',
                                'category_before'  => '<li id=%id class=%class>',
                                'category_after'   => '</li>', 
                                'show_description' => 1
                             
                            ); ?> 
                                                    
                            <?php if (is_page('58')) : // if its the MBA Links page ?>
                                                        
                            <ul class="links">
                            <?php wp_list_bookmarks($args); ?> 
                            </ul>
                                                    
                            <?php elseif (is_page('71')) : // if its the Industry Organization & Links page ?>
                            
                            <?php $args['category'] = 3; ?>                         
                            <ul class="links">
                            <?php wp_list_bookmarks($args); ?> 
                            </ul>
                                                        
                            <?php endif; ?>
                        
						</section> <!-- end article section -->
                        
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