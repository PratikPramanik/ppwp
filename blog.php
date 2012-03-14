<?php get_header(); ?>

<!--BLOG PAGE >> THIS DOES NOT WORK YET, USE https://codex.wordpress.org/Creating_a_Static_Front_Page-->
<div class="container" id="blog">
	<div class="row">
		<div class="twocol">
			<!--<p>Three columns</p>--><!--EMPTY-->
		</div>
		
		<!-- BLOG CONTENT -->
		<div class="eightcol">
			<?php if (have_posts()) : ?>
			
			
			<?php while (have_posts()) : the_post(); ?>

				<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
				<span class="postmetadata"><?php the_category(' / ') ?> &mdash; <?php edit_post_link('Edit', '', ' &mdash; '); ?>  <?php comments_popup_link('No comments', '1 comment', '% comments'); ?></span><br/>
					<small><span class="date"><?php the_time('d') ?></span><br /><?php the_time('M y') ?> <!-- by <?php the_author() ?> --></small>
					<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
					
					

					<div class="entry">
						<?php the_content('<em>Continue reading &rarr;</em>'); ?>
					</div>
					<div class="clearfix"></div>

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
		
		<div class="twocol last">
			<!--<p>Three columns</p>--><!--EMPTY-->
		</div>
	</div>
</div>

<?php get_footer(); ?>