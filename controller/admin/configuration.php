<?php
require_once('model/admin/configuration.php');

if(!isset($_POST['boolMaintenance']) or !isset($_POST['title']) or !isset($_POST['contentMaintenance']) or !isset($_POST['contentAboutMe'])) // Display the form if it's the first time
{
	require_once('view/admin/configuration.php');
}
else
{
	$boolMaintenance = $_POST['boolMaintenance'];
	$title = $_POST['title'];
	$contentMaintenance = $_POST['contentMaintenance'];
	$contentAboutMe = $_POST['contentAboutMe'];
	
	/* Start - Checking ... */
	if($title == '' or $contentMaintenance == '' or $boolMaintenance =='' or $contentAboutMe =='')
	{
		require_once('view/admin/configuration.php');
		exit();
	}
	/* End - Checking ... */
	

	if($boolMaintenance == "Activer la maintenance")
		$boolMaintenance = 1;
	else
		$boolMaintenance = 0;

	writeConfiguration($boolMaintenance, $title, $contentMaintenance, $contentAboutMe);
	
	require_once('view/admin/configuration_complete.php');
}