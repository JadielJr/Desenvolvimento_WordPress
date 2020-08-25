<?php 
    get_header();
?>

<section class="wrapper">
	<div class="inner">
		<header class="special">
			<h2>Sem turpis amet semper</h2>
			<p>In arcu accumsan arcu adipiscing accumsan orci ac. Felis id enim aliquet. Accumsan ac integer lobortis commodo ornare aliquet accumsan erat tempus amet porttitor.</p>
		</header>
		<div>
			<?php
				if(have_posts()):
					while(have_posts()) : the_post(); ?>

						<h3 class="byline"> <?php the_title() ?> </h3>

						<?php 
							$content = get_the_excerpt();
							$resumo = substr($content, 0, 300);
                            echo '<p>' .$resumo.'</p>';
						?>
						
						<a href="<?php the_permalink(); ?>" class="button"> Saiba Mais</a>
						
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