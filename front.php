<?php
/*
Template Name: Front Page
*/
?>

<?php get_header(); ?>

<!-- Front Page -->
<div id="frontpage" class="container" >
	<div class="row">
		<!-- PROFILE/ABOUT ME -->
		<div class="onecol">
			<!--EMPTY -->
		</div>
		
		<div class="eightcol content-area">
			<?php if (have_posts()) : ?>

				<?php while (have_posts()) : the_post(); ?>
					<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
						
						<div class="entry">
							<?php the_content('<em>Continue reading &rarr;</em>'); ?>
						</div>
						<div class="clearfix"></div>
						<?php edit_post_link('[EDIT PAGE]', ''); ?>

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
		<div class="threecol last">
			<?php get_sidebar(); ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>