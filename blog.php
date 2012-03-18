<?php
/*
Template Name: Blog Page
*/
?>

<?php get_header(); ?>

<!-- Front Page -->
<div id="frontpage" class="container" >
	<div class="row">
		<!-- PROFILE/ABOUT ME -->
		<div class="twocol">
			<!--EMPTY -->
		</div>
		
		<div class="eightcol content-area">
			<?php if (have_posts()) : ?>

				<?php while (have_posts()) : the_post(); ?>
					<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
						<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
						<span class="byline"><small><span class="date"><?php the_time('d') ?></span> <span class="time"><?php the_time('M y') ?></span> <span class="author">by <?php the_author() ?></span></small></span>
						

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

				<h2 class="center">Not Found</h2>
				<p class="center">Sorry, but you are looking for something that isn't here.</p>
				<?php //get_search_form(); ?>

			<?php endif; ?>
		</div>
		
		<!-- SIDEBAR -->
		<div class="twocol last">
			<?php #get_sidebar(); ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>