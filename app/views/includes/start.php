<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<base href="/">
		<link rel="stylesheet" href="css/style.css"/>
		<script type="text/javascript" src="js/ckeditor/ckeditor.js"></script>
		
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