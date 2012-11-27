<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
/*******************************************************************************
 * Copyright (c) 2007 Eclipse Foundation and others.
 * All rights reserved. This program and the accompanying materials
 * are made available under the terms of the Eclipse Public License v1.0
 * which accompanies this distribution, and is available at
 * http://www.eclipse.org/legal/epl-v10.html
 *
 * Contributors:
 *    Wayne Beaton (Eclipse Foundation)- initial API and implementation
 *    Freddy Allilaire (INRIA)- adapted Wayne Beaton's scripts to ATL articles section
 *******************************************************************************/

	#*****************************************************************************
	#
	# article.php
	#
	# Author: 		Freddy Allilaire
	# Date:			2005-11-16
	#
	# Description: This page provides a frame for articles.
	#
	#
	#****************************************************************************
	
    $root = $_SERVER['DOCUMENT_ROOT'] . '/atl/documentation/basicExamples_Patterns/';
	$file = $_GET['file'];
	
	// If the requested article does not exist, redirect to a warning page.
	if (!file_exists("$root/$file")) $file = 'nosucharticle.html';	
	
	$host = $_SERVER['HTTP_HOST'];
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "ATL Basic Examples and Patterns";

	$pageKeywords	= "ATL, article, articles, tutorial, tutorials, how-to, howto";
	$pageAuthor		= "Freddy Allilaire";
	
	# End: page-specific settings
	#
	$App->ExtraHtmlHeaders = "<link rel=\"stylesheet\" type=\"text/css\" href=\"layout.css\" media=\"screen\" />\n<base href=\"http://$host/atl/documentation/basicExamples_Patterns/$file\"/>\n";

	$charset = $App->getHTTPParameter('charset');
	if ($charset) header("Content-Type: text/html; charset=$charset");
	
	ob_start();
?>
	<div style="float: left;">
		<a href="/atl/documentation/basicExamples_Patterns/index.php"><img src="/articles/images/back.gif"/> Back to ATL Basic Examples and Patterns</a>
	</div>
	<div style="float: right;">
		<a target="_blank" href="/atl/documentation/basicExamples_Patterns/printable.php?file=<?= $file ?>"><img src="/articles/images/printer.gif"/> Printer-friendly version</a>
	</div>

	<div style="clear:both;"/>
	<br/>
	<div class="article">
		<?php readfile("$root/$file"); ?>		
	</div>

<?php
	$html = ob_get_contents();
	ob_end_clean();
	$App->generatePage($theme, $Menu, null, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
