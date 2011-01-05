<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<h1 class="entry-title"><?php the_title(); ?></h1>
					<div class="entry-content">
						<?php the_content(); ?>
					</div><!-- .entry-content -->
				</div> <!-- #postID -->
<?php endwhile; // end of the loop. ?>
