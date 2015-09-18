<?php
/*
 Template Name: Shows Page
 *
 * This is your custom page template. You can create as many of these as you need.
 * Simply name is "page-whatever.php" and in add the "Template Name" title at the
 * top, the same way it is here.
 *
 * When you create your page, you can just select the template and viola, you have
 * a custom page template to call your very own. Your mother would be so proud.
 *
 * For more info: http://codex.wordpress.org/Page_Templates
*/
?>

<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap cf">

						<main id="main" class="grid-6 cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

						<div class="section-header">
							<!-- <i class="ion-clock"></i> -->
							<span class="sh-title">Upcoming Shows</span>
							<!-- <span class="sh-links">
								<a href="/news" class="shl-viewall">View All</a>
							</span> -->
						</div>

							<?php 
									$today = current_time('Ymd');
									$args = array(
										'post_type' => 'show',
										'post_status' => 'publish',
										'posts_per_page' => "-1",
										'meta_query' => array(
											array(
												'key' => 'show_date',
												'compare' => '>=',
												'value' => $today,
												)
											),
										'meta_key' => 'show_date',
										'order_by' => 'meta_value',
										'order' => 'ASC',
										'paged' => ( get_query_var('paged') ? get_query_var('paged') : 1 ),
									);
									$loop = new WP_Query($args);
									if ( $loop->have_posts() ) :
									while ( $loop->have_posts() ) : $loop->the_post(); ?>
							<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article">
							<?php $date = DateTime::createFromFormat('Ymd', get_field('show_date'));
										$prettyDate = DateTime::createFromFormat('m/d/Y', get_field('show_date')); ?>

								<div class="show-entry">
									<span class="align-left">
										<span class="show-date">
											<?php echo $prettyDate->format('M d'); ?>
										</span>
										<span class="show-venue">
											<span class="venue-inner">
												<?php the_field('show_venue'); ?>
											</span>
										</span>
										<span class="show-location">
											<?php echo get_field('show_city') . ', ' . get_field('show_state'); ?>
										</span>
									</span>
									<span class="align-right">
										<span class="show-status">
											<?php	
												if ( get_field('show_status')  == "onsale" ) 
												{
													echo "<a href='" . get_field('show_ticket_url') . "' target='_blank'>Tickets</a>";
												} else { 
													$field = get_field_object('show_status');
													$value = get_field('show_status');
													$label = $field['choices'][$value];
													echo "<span class='imp'>" . $label . "</span>"; 
												} ?>
										</span>
									</span>
								</div>
							</article>

							<?php endwhile; else : ?>

									<h2>Nothin' to see here!</h2>

							<?php endif; wp_reset_postdata(); ?>

						</main>

						<?php //get_sidebar(); ?>

				</div>

			</div>


<?php get_footer(); ?>
