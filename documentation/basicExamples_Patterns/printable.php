<?php
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
	# printable.php
	#
	# Author: 		Freddy Allilaire
	# Date:			2005-11-16
	#
	# Description: This page provides a frame for articles.
	#
	#
	#****************************************************************************
	
	$root = $_SERVER['DOCUMENT_ROOT'] . '/atl/basicExamples_Patterns/';
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
	
?>
<html>
<head>
	<base href="http://<?= $host ?>/atl/basicExamples_Patterns/<?= $file ?>"/>
	<title>ATL Basic Examples and Patterns</title>
</head>
<body onLoad="window.print();">
	<?php readfile("$root/$file"); ?>	
</body>
