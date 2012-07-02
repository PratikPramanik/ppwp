<?php get_header(); ?>

<div class="container" id="search"> <!-- Search Results --->
	<div class="row">
		<div class="twocol">
			<!--<p>Three columns</p>-->
		</div>
		
		<div class="eightcol">
			<div id="content">

			<?php if (have_posts()) : ?>

				<h2 class="pagetitle">Search Results</h2>

				<?php while (have_posts()) : the_post(); ?>
					<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
						<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
						<span class="byline"><small><span class="date"><?php the_time('d') ?></span> <span class="time"><?php the_time('M Y') ?></span> <span class="author">by <?php the_author() ?></span></small></span>
						

						<div class="entry">
							<?php the_content('<em>Continue reading &rarr;</em>'); ?>
						</div>
						<div class="clearfix"></div>
						<span class="postmetadata"><?php edit_post_link('[EDIT POST]', '', ' &mdash; '); ?> Category: <?php the_category(' / ') ?> &mdash; <a href="<?php the_permalink() ?>">permalink</a> &mdash;  <?php comments_popup_link('No comments', '1 comment', '% comments'); ?></span><br/>

					</div>

				<?php endwhile; ?>

				<div class="navigation">
					<div class="alignleft"><?php next_posts_link('&larr; Older Entries') ?></div>
					<div class="alignright"><?php previous_posts_link('Newer Entries &rarr;') ?></div>
					<div class="clearfix"></div>
				</div>

			<?php else : ?>
			  <div class="post">
				<h2>No posts found. Please try a different search.</h2>
				<?php //get_search_form(); ?>
			  </div>

			<?php endif; ?>

			</div>
		</div>
		
		<div class="twocol last">
			<!--<p>Three columns</p>-->
		</div>
	</div>
</div>

<?php get_footer(); ?>