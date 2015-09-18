<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap cf">

						<main id="main" class="grid-4 cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

						<div class="section-header">
							<!-- <i class="ion-clock"></i> -->
							<span class="sh-title">Latest News</span>
							<span class="sh-links">
								<a href="/news" class="shl-viewall">View All</a>
							</span>
						</div>

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article">

								<header class="article-header">

									<h1 class="h2 entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
									<p class="byline entry-meta vcard">
										<?php the_time( get_option( 'date_format' ) ); ?>
									</p>
									<div class="divider"></div>

								</header>

								<section class="entry-content cf">
									<?php the_excerpt(); ?>
								</section>

							</article>

							<?php // Custom Post divider
										if ( ($wp_query->current_post +1 ) < ($wp_query->post_count)) {
											echo '<div class="post-divider"></div>';
							} ?>

							<?php endwhile; ?>

									<?php bones_page_navi(); ?>

							<?php else : ?>

									<article id="post-not-found" class="hentry cf">
											<header class="article-header">
												<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
										</header>
											<section class="entry-content">
												<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
										</section>
										<footer class="article-footer">
												<p><?php _e( 'This is the error message in the index.php template.', 'bonestheme' ); ?></p>
										</footer>
									</article>

							<?php endif; ?>


						</main>

					<?php get_sidebar(); ?>

				</div>

			</div>


<?php get_footer(); ?>
