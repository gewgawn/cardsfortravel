<?php get_header(); ?>

			<div id="content" class="clearfix row-fluid">

				<div id="main" class="span8 clearfix card-list" role="main">

					<div class="page-header">
					<?php if (is_category()) { ?>
						<h1 class="archive_title h1">
							<span><?php _e("Posts Categorized:", "bonestheme"); ?></span> <?php single_cat_title(); ?>
						</h1>
					<?php } elseif (is_tag()) { ?>
						<h1 class="archive_title h1">
							<?php single_tag_title(); ?>
						</h1>
						<p><i><?php echo trim(strip_tags(tag_description())); ?></i></p>
					<?php } elseif (is_author()) { ?>
						<h1 class="archive_title h1">
							<span><?php _e("Posts By:", "bonestheme"); ?></span> <?php get_the_author_meta('display_name'); ?>
						</h1>
					<?php } elseif (is_day()) { ?>
						<h1 class="archive_title h2">
							<span><?php _e("Daily Archives:", "bonestheme"); ?></span> <?php the_time('l, F j, Y'); ?>
						</h1>
					<?php } elseif (is_month()) { ?>
					    <h1 class="archive_title h1">
					    	<span><?php _e("Monthly Archives:", "bonestheme"); ?>:</span> <?php the_time('F Y'); ?>
					    </h1>
					<?php } elseif (is_year()) { ?>
					    <h1 class="archive_title h1">
					    	<span><?php _e("Yearly Archives:", "bonestheme"); ?>:</span> <?php the_time('Y'); ?>
					    </h1>
					<?php } ?>
          </div>

          <?php
           global $query_string;
           query_posts( $query_string . '&posts_per_page=-1');
           if (have_posts()) : while (have_posts()) : the_post(); ?>

					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">

						<header>

							<h3 class="h2"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>

							<!-- <p class="meta"><?php _e("Posted", "bonestheme"); ?> <time datetime="<?php echo the_time('Y-m-j'); ?>" pubdate><?php the_date(); ?></time> <?php _e("by", "bonestheme"); ?> <?php the_author_posts_link(); ?> <span class="amp">&</span> <?php _e("filed under", "bonestheme"); ?> <?php the_category(', '); ?>.</p> -->

						</header> <!-- end article header -->

						<section class="post_content">

							<div class="row-fluid">
	    						<div class="span3">
									<?php the_post_thumbnail( 'wpbs-featured' ); ?>
								</div>
								<div class="span9">
									<?php
									    if($post->post_excerpt) {
									      the_excerpt();
									      echo '<a href="'. get_permalink($post->ID) . '" class="more-link" title="Read '.get_the_title($post->ID).'">Read more &raquo;</a>';
									      } else {
									      the_excerpt();
									    }
									?>
								</div>
							</div>

						</section> <!-- end article section -->

					</article> <!-- end article -->

					<?php endwhile; ?>

					<?php else : ?>

					<article id="post-not-found">
					    <header>
					    	<h1><?php _e("No Posts Yet", "bonestheme"); ?></h1>
					    </header>
					    <section class="post_content">
					    	<p><?php _e("Sorry, What you were looking for is not here.", "bonestheme"); ?></p>
					    </section>
					    <footer>
					    </footer>
					</article>

					<?php endif; ?>

				</div> <!-- end #main -->

				<?php get_sidebar('sidebar3'); // sidebar 3 ?>

			</div> <!-- end #content -->

<?php get_footer(); ?>
