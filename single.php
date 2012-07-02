<?php get_header(); ?>

<div class="container" id="blog"> <!-- Blog - Single Post --->
	<div class="row">
		<div class="twocol">
			<!--<p>Three columns</p>--><!--*** - PREVIOUS POST-->
		</div>
		
		<div class="eightcol content-area">
			<div class="content">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
				<h2><?php the_title(); ?></h2>
				<span class="byline"><small><span class="date"><?php the_time('d') ?></span> <span class="month-year"><?php the_time('M Y') ?></span> <span class="author">by <?php the_author() ?></span> | <span class="time"><?php the_time() ?></span></small></span>

				<div class="entry">
					<?php the_content(); ?>
					

					<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>

					<span class="postmetadata">
						<?php edit_post_link('[EDIT POST]', '', ' &mdash; '); ?> 
						Categories: <?php the_category(' / ') ?> &mdash;
						<a href="<?php trackback_url(); ?> " rel="trackback">Trackback</a> &mdash;
						<a href="<?php the_permalink() ?>">Permalink</a> &mdash;
						Tweet what you just read<br/>
                        <?php the_tags( '<p class="small">Tags: ', ', ', '</p>'); ?>
					</span>
				</div>
			</div>

			<?php comments_template(); ?><!-- *** replace with something sexier -->

			<?php endwhile; else: ?>

			<p>Sorry, no posts matched your criteria.</p>

			<?php endif; ?>
			</div>
		</div>
		
		<div class="twocol last">
			<!--<p>Three columns</p>--><!--*** - NEXT POST-->
		</div>
	</div>
</div>

<?php get_footer(); ?>
