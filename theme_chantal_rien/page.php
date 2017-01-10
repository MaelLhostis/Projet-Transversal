<?php 
// on inclus le fichier header.php
get_header(); 
?>

<!-- Exemple d'utilisation des CSS
div est défini dans style.css
w3-blue est une classe de w3.css (inclus dans le header)
-->

<div id="page" class="w3-container w3-card-2">
	<!-- Affichage du titre -->
	<div>
		 <h1 id="PageTitle">		
			<?php 
			// récupérer le titre de la page
			single_post_title(); 
			?>
		</h1>
	</div>
	<div class="w3-container">
	<!-- Affichage de la page -->
	<?php while ( have_posts() ) : the_post(); ?>
		<?php //the_ID(); ?>
		<?php //the_title(); ?>
		<?php the_post_thumbnail(); ?>
		<?php the_content(); ?>
	<?php endwhile; ?>

	<?php 
	// exemple d'utilisation du fichier functions.php
	afficherCeQueJeVeux(); 
	?>

	<?php 
	// on inclus le fichier sidebar.php (widget)
	//get_sidebar(); 
	?>
	</div>
</div>
<?php 
// on inclus le fichier footer.php
get_footer(); 
?>
