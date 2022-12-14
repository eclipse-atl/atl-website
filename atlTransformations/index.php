<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# index.php
	#
	# Author: 		Freddy Allilaire
	# Date:			2005-12-07
	#
	# Description: Type your page comments here - these are not sent to the browser
	#
	#
	#****************************************************************************

	include('atlTransformations_script.php');

	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "ATL Transformations";
	$pageKeywords	= "ATL, model transformation, model, metamodel, KM3";
	$pageAuthor		= "Freddy Allilaire";

	# End: page-specific settings
	#
	
	$html = file_get_contents('_index.html');
	
	$atlTransformations = getAtlTransformations();
	$html = str_replace("%%ATLTRANSFORMATIONS%%", $atlTransformations, $html);

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
