<?php
/*
Template Name: Scholarship Template
*/
?>

<?php get_header(); ?>			

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?>>
                    
                    <div class="article">                                           
						
						<header>
							<h1 class="page-title"><?php the_title(); ?></h1>			
						</header> <!-- end article header -->
					
						<section class="post_content clearfix">
							<?php the_content(); ?>
                            
                         <?php if ( !post_password_required() ) { ?>

							<!--Documents Loop-->
							<?php ########### MISC DOCS LOOP ############# ?>
   
   							<?php
							$args=array(
									   'document-types' => 'scholarships',
								 	   'post_type' => 'documents',
								       'post_status' => 'publish',
								       'posts_per_page' => -1,
								       'caller_get_posts'=> 1
								      );
									  $my_query = null;
								      $my_query = new WP_Query($args);
								      if( $my_query->have_posts() ) { ?>
								
                                <ul id="docs" class="scholarship">
								   
								<?php  
								while ($my_query->have_posts()) : $my_query->the_post();
								  	//$doc_desc = getCustomField('Document Description'); // document description
									$doc_up = get_post_meta($post->ID, 'PDF Document', true);
								  	$doc_up_file = wp_get_attachment_url($doc_up);  // document url
								?>
								 
                                 
								<li>
									<a href="<?php echo $doc_up_file; ?>" target="_blank">
										<?php the_title(); ?>
									</a> 
								</li>
                                
								   
								<?php
								 endwhile;
								} ?>

                                </ul>
                                
							 <?php  } ?>
							
							<!--End Documents Loop-->
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