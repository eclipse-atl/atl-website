<?php  																														
$pageTitle 		= "ATL - Download";

	$html = file_get_contents('_index.html');

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
