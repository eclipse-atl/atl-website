<?php  																														
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	

	include($App->getProjectCommon());
	include("script/rss2html.php");
	include("script/rss2html_blog.php");
	
	$App 	= new App();
	$Nav	= new Nav();
	$Menu 	= new Menu();		

	$html = file_get_contents('_index.html');

	# Generate the web page
	$App->generatePage($theme, $Menu, null, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
