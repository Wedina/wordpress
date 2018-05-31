<?php
get_header();
?>

<?php
			// s'il y a des contenus a afficher
			if ( have_posts() ) :

				// pour chacun des contenus a afficher
				while ( have_posts() ) : 
					the_post();
?>	
				
				<?php the_content() ?>

		
<?php
				endwhile;

				the_posts_pagination( array(
					'prev_text' => 'page precédente',
					'next_text' => 'page suivante',
					'before_page_number' => 'page',
				) );

			// s'il n'ya pas de contenus à afficher
			else :
?>
				<h2>Désolé, pas de contenue à afiicher</h2>
<?php
			// Message d'info
			endif;
			?>


<?php 
get_footer();
?>