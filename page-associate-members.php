<?php
/*
Template Name: Associate Member Template
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
                            

							<!--Documents Loop-->
							<?php ########### MISC DOCS LOOP ############# ?>
   
   							<?php
							$args=array(
								 	   'order' => 'asc',
								 	   'orderby' => 'title',
								 	   'post_type' => 'associate-members',
								       'post_status' => 'publish',
								       'posts_per_page' => -1,
								       'caller_get_posts'=> 1
								      );
									  $my_query = null;
								      $my_query = new WP_Query($args);
								      if( $my_query->have_posts() ) { ?>
								
									
							  <table id="associate_members" class="">
							  <tbody>
							  	
								   
								<?php  
								$count=0;
								while ($my_query->have_posts()) : $my_query->the_post();									
									if ($count%2!=1){ $tr_class = "even";}
									else {$tr_class = "odd";}
									$web_url = get_post_meta($post->ID, 'Web URL', true);
									$contact_info = get_post_meta($post->ID, 'Contact Information', true);
									$image = get_post_meta($post->ID, 'Image', true);
								  	$content_1_img = get_post_meta($post->ID, 'Image', true);
 									$content_1_img_url = wp_get_attachment_image_src($content_1_img, 'thumbnail');
								
								?>
								<tr class="<?php print $tr_class;?>" >	
									<td><a href="<?php print $web_url ?>" ><?php the_title(); ?></a></td>
									<td><?php print $contact_info; ?></td>
									<td><img src="<?php print $content_1_img_url[0]; ?>" width="<?php print $content_1_img_url[1]; ?>" height="<?php print $content_1_img_url[2]; ?>"/></td>
								</tr>                                  
								<?php
								 $count++;
								 endwhile;
								} ?>
                                
    
															
							<!--End Documents Loop-->
							</tbody>
							</table>
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