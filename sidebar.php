				<div id="sidebar1" class="grid-2 cf" role="complementary">

					<?php if ( is_active_sidebar( 'sidebar1' ) ) : ?>

						<?php dynamic_sidebar( 'sidebar1' ); ?>

					<?php else : ?>

						<?php
							/*
							 * This content shows up if there are no widgets defined in the backend.
							*/
						?>

						<div class="no-widgets">
							<p><?php _e( 'This is a widget ready area. Add some and they will appear here.', 'bonestheme' );  ?></p>
						</div>

					<?php endif; ?>

					<div class="sidebar-container">
						<div class="section-header">
							<!-- <i class="ion-clock"></i> -->
							<span class="sh-title">Instagram</span>
							<span class="sh-links">
								<a href="#" class="shl-viewall">View More</a>
							</span>
						</div>
						<div id="instafeed"></div>
					</div>
					<div class="sidebar-container">
						<div class="section-header">
							<!-- <i class="ion-clock"></i> -->
							<span class="sh-title">Twitter</span>
							<span class="sh-links">
								<a href="#" class="shl-viewall">Follow</a>
							</span>
						</div>
						<p>
							<?php if ( function_exists('display_tweets') ) { display_tweets(); } ?>
						</p>
					</div>
				</div>