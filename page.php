<?php 
    get_header();
?>

<section class="wrapper">
	<div class="inner">
		<header class="special">
			<h2 class="byline"> <?php the_title() ?> </h2>
		</header>
		<div>
			<?php
				if(have_posts()):
					while(have_posts()) : the_post(); ?>

						

						<?php 							
							echo get_the_content();
						?>
						<br>
					<?php endwhile;
				else :
					echo '<p> Not found </p>';
				endif
			?>
		</div>
		<hr>
	</div>
</section>

<?php 
    get_footer();
?>