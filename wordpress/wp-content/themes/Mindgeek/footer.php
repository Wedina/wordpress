	</main>
	<footer>
	<!-- 	<nav class="nav_botton">
			<a href="#">Accueil</a>
			<a href="#">Serveur Mutualisé</a>
			<a href="#">Serveur dédié</a>
			<a href="#">Solution"Cloud</a>
			<a href="#">Contact</a>
			<a href="#">Se connecter</a>
		</nav> -->

		<?php 
			$defaults = array(
				'theme_location' => 'footer-menu',
				'container' => 'nav',
				'echo' 		=> false,
				);
			echo strip_tags(wp_nav_menu( $defaults), '<nav><a>');
			?>
		<small id="licence">
		<a rel="license" href="https://3wa.fr/propriete-materiel-pedagogique/"><img alt="Propriété de la 3W Academy" style="border-width:0" src="https://3wa.fr/wp-content/themes/3wa2015/img/logos/big.png" /></a><br /><span>Cet exercice</span> de <a href="https://3wa.fr">3W Academy</a> est mis à disposition <a rel="license" href="https://3wa.fr/propriete-materiel-pedagogique/">pour l'usage personnel des étudiants, Pas de Rediffusion - Attribution - Pas d'Utilisation Commerciale - Pas de Modification - International</a>.<br />Les autorisations au-delà du champ de cette licence peuvent être obtenues auprès de <a href="mailto:contact@3wa.fr" rel="cc:morePermissions">contact@3wa.fr</a>. Les maquettes ont été réalisées par <a href="http://www.justine-muller.fr">Justine Muller</a>.
	</small>
	</footer>
	
</body>
</html>