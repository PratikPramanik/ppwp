<hr />

<div id="footer" class="container"><!-- FOOTER -->
	<div class="row">
		<!-- WP DYNAMIC STUFF -->
		<div id="foot-info" class="tencol">
			<p>
				<?php bloginfo('name'); ?> 
				// <a href="<?php bloginfo('rss2_url'); ?>" class="rss">RSS</a>
				<?php #wp_list_pages('title_li= '); ?> <!-- Commented out because it's a bitch right now -->
			</p>
			<p>
				<!--LIST OF STUFF WHERE YOU CAN FIND MORE INFORMATION ABOUT ME-->
				<!--Powered by <a href="http://wordpress.org/">WordPress</a>.-->
				More information about PBP at:
				 <a href="http://www.linkedin.com/in/pratikpramanik" class="rss">LinkedIn</a>
				- <a href="http://www.pratikpramanik.com/resume" class="rss">Resume</a>
				- <a href="http://www.twitter.com/PratikPramanik" class="rss">Twitter</a>
				- <a href="http://www.github.com/PratikPramanik" class="rss">Github</a>
			</p>
		</div>
		
		<!-- COPYRIGHT STUFF -->
		<div id="copyright" class="twocol last">
			<p> &copy; Pratik Pramanik <?php echo date('Y'); ?></p>
		</div>
	</div>
</div>


</div> <!-- div wrapper end :: from header.php -->
		<?php wp_footer(); ?>
</body>
</html>