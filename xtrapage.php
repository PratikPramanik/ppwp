<?php
/*
Template Name: Extra-Wide Page
*/
?>

<?php get_header(); ?>

<div class="container" id="page"> <!-- Blog --->
	<div class="row">
		<div class="onecol">
			<!--EMPTY-->
		</div>
		
		<div class="tencol content-area">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<div class="post" id="post-<?php the_ID(); ?>">
					<h2><?php the_title(); ?></h2>
					<div class="entry">
						<?php the_content('<em>Continue reading &rarr;</em>'); ?>

						<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>

					</div>
				</div>
			<?php endwhile; endif; ?>
			<?php edit_post_link('Edit', '<p>', '</p>'); ?>
		</div>
		
		<div class="onecol last">
			<!--EMPTY-->
		</div>
	</div>
</div>

<?php get_footer(); ?>