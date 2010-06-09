<?php  																														
require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	
require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	
require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	
$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		
include($App->getProjectCommon());
include("script/rss2html.php");
	
	$html = file_get_contents('_index.html');

	$atlNewsConverter = new RSS2HTML();
	$atlnews = $atlNewsConverter->convert("news/atlNewsArchive.rss", "/atl/news/index.php");
	$html = str_replace("%%NEWS%%", $atlnews, $html);

	$newsConverter = new RSS2HTML();
	$headlines = $newsConverter->convert("http://www.acceleo.org/planet/rss20.xml", "http://www.acceleo.org/planet/rss20.xml");
	$html = str_replace("%%HEADLINES%%", $headlines, $html);

	# Generate the web page
	$App->generatePage($theme, $Menu, null, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
