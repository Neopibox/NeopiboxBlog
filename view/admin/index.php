<?php

// HTML page start
$title = 'Administration';
require_once('view/includes/start.php');
require_once('view/includes/header.php');
require_once('view/includes/nav.php');
?>

<div id="page">
	<h1>Panel d'administration</h1>

	<div id="page_content">
		<div class="vertical_layout">
			<div class="horizontal_layout">
				<section class="dashboard">
					<h2>Tableau de bord</h2>

					<h3>Utilisation du processeur</h3>
					<div id="CPU" class="meter_gauge">
							<span style="width: 50%;">CPU Usage - 50%</span>
					</div>

					<h3>Utilisation de la RAM</h3>
					<div id="RAM" class="meter_gauge">
						<span style="width: 70%;">RAM Usage - 70%</span>
					</div>

					<h3>Utilisation de la SWAP</h3>
					<div id="SWAP" class="meter_gauge">
						<span style="width: 10%;">Swap Usage - 10%</span>
					</div>

					<h3>Utilisation du Disque Dur</h3>
					<div id="HDD" class="meter_gauge">
						<span style="width: 40%;">Disk Usage - 8GB out of 20GB</span>
					</div>
				</section>

				<div class="vertical_layout">
					<section>
						<h2>Général</h2>

						<a href="index.php?page=admin/configuration">Changer la configuration du site</a>
					</section>

					<section>
						<h2>VPS</h2>
					</section>
				</div>
			</div>

			<div class="horizontal_layout">
				<section>
					<h2>News</h2>
					
					<a href="index.php?page=admin/list_news">Lister les news</a>
					<a href="index.php?page=admin/create_news">Ecrire une news</a>
				</section>

				<section>
					<h2>Projets</h2>
				</section>

				<section>
					<h2>Membres</h2>
				</section>
			</div>
		</div>
	</div>
</div>

<?php
require_once('view/includes/footer.php');
require_once('view/includes/end.php');
?>