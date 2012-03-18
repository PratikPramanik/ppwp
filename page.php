<?php get_header(); ?>


<div class="container" id="page"> <!-- Blog --->
	<div class="row">
		<div class="twocol">
			<!--<p>Three columns</p>-->
		</div>
		
		<div class="eightcol content-area">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<div class="post" id="post-<?php the_ID(); ?>">
					<div class="entry">
						<?php the_content('<em>Continue reading &rarr;</em>'); ?>

						<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>

					</div>
				</div>
			<?php endwhile; endif; ?>
			<?php edit_post_link("[EDIT PAGE]"); ?>
		</div>
		
		<div class="twocol last">
			<!--<p>Three columns</p>-->
		</div>
	</div>
</div>

<?php get_footer(); ?>