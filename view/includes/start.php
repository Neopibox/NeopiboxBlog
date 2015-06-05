<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<link rel="stylesheet" href="view/css/style.css?v=<?=time();?>"/>
		<script type="text/javascript" src="view/js/ckeditor/ckeditor.js"></script>
		
		<?php 
		
		if(!isset($title) OR $title == '')
		{
			echo '<title>Le blog de Neopibox</title>';
		}
		else
		{
			echo '<title>' . $title . ' - Le blog de Neopibox</title>'; 
		}
		?>
	</head>

	<body>