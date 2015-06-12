<?php
$title = 'Administration';
?>

		<div class="vertical_layout">
			<div class="horizontal_layout">
				<section class="dashboard">
					<h2>Tableau de bord</h2>

					<h3>Utilisation du processeur</h3>
					<div id="CPU" class="meter_gauge">
						<span style="width: 50%;">CPU Usage</span>
					</div>

					<h3>Utilisation de la RAM</h3>
					<div id="RAM" class="meter_gauge">
						<span style="width: 70%;">RAM Usage</span>
					</div>

					<h3>Utilisation de la SWAP</h3>
					<div id="SWAP" class="meter_gauge">
						<span style="width: 10%;">Swap Usage</span>
					</div>

					<h3>Utilisation du Disque Dur</h3>
					<div id="HDD" class="meter_gauge">
						<span style="width: 40%;">Disk Usage</span>
					</div>
				</section>

				<div class="vertical_layout">
					<section>
						<h2>Général</h2>
					</section>

					<section>
						<h2>VPS</h2>
					</section>
				</div>
			</div>

			<div class="horizontal_layout">
				<section>
					<h2>News</h2>
					
					<a href="admin/news">Lister les news</a>
					<a href="admin/news/create">Ecrire une news</a>
				</section>

				<section>
					<h2>Projets</h2>
				</section>

				<section>
					<h2>Membres</h2>
				</section>
			</div>
		</div>