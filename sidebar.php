				<div id="sidebar1" class="sidebar col300" role="complementary">
				
					<?php # get_search_form(); ?>

					<?php if ( is_active_sidebar( 'Global' ) ) : ?>
                    
                    	<aside>

						<?php dynamic_sidebar( 'Global' ); ?>
                        
                        </aside>

					<?php else : ?>

						<!-- This content shows up if there are no widgets defined in the backend. -->
						
                        <aside>
                        
						<div class="help">
						
							<p>Please activate some Widgets.</p>
						
						</div>
                        
                        </aside>

					<?php endif; ?>

				</div>