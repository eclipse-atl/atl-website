<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# index.php
	#
	# Author: 		Freddy Allilaire
	# Date:			2006-01-19
	#
	# Description: Type your page comments here - these are not sent to the browser
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Trouble Shooter";
	$pageKeywords	= "";
	$pageAuthor		= "Freddy Allilaire";
	
	# End: page-specific settings
	#

	include('script/troubleShooter_script.php');
	$ts = getTS($pageTitle, "/gmt/atl/troubleShooter/atlTroubleShooter.xml");


	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML

<div id="primaryLinks">
	<h3>Primary Links</h3>
	<ul>
		<li>
			<a id="buttonDownload" href="../../downloads" title="Download">
				<strong>Download</strong> Eclipse Distribution, Update Site, Dropins
			</a>
		</li>
		<li>
			<a id="buttonDocumentation" href="../../documentation" title="Documentation">
				<strong>Documentation</strong> Tutorials, Examples, Videos, Reference Documentation
			</a>
		</li>
		<li>
			<a id="buttonSupport" href="../../support" title="Support">
				<strong>Support</strong> Bug Tracker, Newsgroup, Support
			</a>
		</li>
		<li>
			<a id="buttonInvolved" href="../../developers" title="Getting Involved">
				<strong>Getting Involved</strong> Git, Workspace Setup, Wiki, Committers
			</a>
		</li>
	</ul>
</div>

<div id="midcolumn">
	<h1>$pageTitle</h1>
	
	$ts

</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>