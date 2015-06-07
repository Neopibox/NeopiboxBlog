<?php
require_once('../app/utils/Text.php');

$title = 'News récentes';

//Display news
foreach($data['news'] as $entry):
?>

	<article>
		<header>
			<h1><?php echo $entry['title']; ?></h1>
			<h6><em>Publié le <?php echo $entry['creation_date_fr']; ?></em></h6>
		</header>
		
		<div class="content"><?php echo Text::truncate($entry['content']); ?> <a href="news/show/<?php echo $entry['id']; ?>">Lire la suite</a></div>
	</article>

<?php
endforeach;
?>

	<ul>

<?php
// Display pagination
while($data['begin_index'] <= $data['end_index']):
?>

		<li><a href="news/list_news/<?php echo $data['begin_index']; ?>"><?php echo $data['begin_index']; ?></a></li>

<?php
$data['begin_index']++;
endwhile;
?>

	</ul>