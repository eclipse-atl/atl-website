<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# template.php
	#
	# Author: 		Freddy Allilaire
	# Date:			2005-12-05
	#
	# Description: Type your page comments here - these are not sent to the browser
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "ATL Publications";
	$pageKeywords	= "";
	$pageAuthor		= "Freddy Allilaire";
	
	# Paste your HTML content between the EOHTML markers!	

ob_start();
?>

	<script type="text/javascript">
		function iframe_loaded() {
			frames['myframe'].height = frames['myframe'].document.offsetHeight;
		}
	</script>

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
		<iframe src="http://wiki.eclipse.org/transclude.php?page=ATL_Publications" onload="iframe_loaded();">
		</iframe>
	</div>
	
<?php

$html = ob_get_contents();
ob_end_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
