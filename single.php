<?php get_header(); ?>

			<div id="content">
				<div id="inner-content" class="wrap">

					<main id="main" class="main-wrap" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<?php
								/* This function will bring in the needed template file depending on what the post
								 * format is. The different post formats are located in the post-formats folder.
								 *
								 * REMEMBER TO ALWAYS HAVE A DEFAULT ONE NAMED "format.php" FOR POSTS THAT AREN'T
								 * A SPECIFIC POST FORMAT.
								 *
								 * If you want to remove post formats, just delete the post-formats folder and
								 * replace the function below with the contents of the "format.php" file.
								*/
								get_template_part( 'post-formats/format', get_post_format() );
							?>

						<?php endwhile; ?>

						<?php else : ?>

							<article id="post-not-found" class="inner-wrap">
								<header class="article-header">
									<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
								</header>
								<section class="entry-content">
									<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
								</section>
								<footer class="article-footer">
										<p><?php _e( 'This is the error message in the single.php template.', 'bonestheme' ); ?></p>
								</footer>
							</article> <?php // #post-not-found .inner-wrap ?>

						<?php endif; ?>

					</main> <?php // #main .main-wrap ?>

					<?php get_sidebar(); ?>

				</div> <?php // end #inner-content .wrap ?>
			</div> <?php // end #content ?>

<?php get_footer(); ?>
