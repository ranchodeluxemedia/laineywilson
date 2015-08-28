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

						<main id="main" class="grid-4 cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

						<h1>SAMPLE SHOWS</h1>

							<?php 
									$today = current_time('Ymd');
									$args = array(
										'post_type' => 'gig',
										'post_status' => 'publish',
										'posts_per_page' => "20",
										'meta_query' => array(
											array(
												'key' => 'gig_date',
												'compare' => '>=',
												'value' => $today,
												)
											),
										'meta_key' => 'gig_date',
										'order_by' => 'meta_value',
										'order' => 'ASC',
										'paged' => ( get_query_var('paged') ? get_query_var('paged') : 1 ),
									);
									$loop = new WP_Query($args);
									if ( $loop->have_posts() ) :
									while ( $loop->have_posts() ) : $loop->the_post(); ?>
							<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
							<?php $date = DateTime::createFromFormat('Ymd', get_field('gig_date')); ?>
							<h3><?php the_field('gig_date'); ?></h3>
							<h4><?php echo get_field('gig_venue') . " - " . get_field('gig_city') . ", " . get_field('gig_state'); ?></h4>
							<?php	if ( get_field('gig_status')  == "on_sale" ) 
										{
											echo "<a href='" . get_field('gig_ticket_url') . "'>Get Tickets</a>";
										} else { 
											$field = get_field_object('gig_status');
											$value = get_field('gig_status');
											$label = $field['choices'][$value];
											echo "<strong>" . $label . "</strong>"; 
										} ?>
							</article>

							<?php endwhile; else : ?>

									<h2>Nothin' to see here!</h2>

							<?php endif; wp_reset_postdata(); ?>

						</main>

						<?php get_sidebar(); ?>

				</div>

			</div>


<?php get_footer(); ?>
