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
	$pageTitle 		= "Download page";
	$pageKeywords	= "";
	$pageAuthor		= "Freddy Allilaire";
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);

	# End: page-specific settings
	#
		
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML

	<div id="midcolumn">
		<h1>$pageTitle</h1>

		<table width="100%">
			<tr>
				<td><img src="../images/update_wiz.gif" /></td>
				<td>
					<p align="justify">
						The standard ATL install provides ATL Engine and IDE. With the standard version, you should only deal with EMF compliant models. To handle and transform other models, 
						you should use specific driver. Additional drivers (MDR and UML2) are available the driver category.
						We recommend that you use the Eclipse Update Manager to install ATL. Use only the "Search for new features.." option when installing with Eclipse 3.3.
						All downloads are provided under the terms and conditions of the <a href="http://www.eclipse.org/legal/epl/notice.php">Eclipse Foundation Software User Agreement</a> 
						unless otherwise specified.
					</p>
				</td>
			</tr>
		</table>

		<h3>Update Sites</h3>

		New to Eclipse and want to use ATL update site? Get <a href="http://java.sun.com/javase/downloads/index.jsp">Java</a>, then install <a href="http://www.eclipse.org/downloads/index.php">Eclipse 3.3</a> and
		<a href="http://www.eclipse.org/modeling/emf/downloads/index.php?project=emf">EMF 2.3</a> and use Help -> Software Updates -> Search for new.. with the update site listed below. 

		<div class="homeitem3col">
			<h3>2.0RC2 Update Sites</h3>
		
			<ul>
				<li>
					<a title="Update Site Zip" href="http://download.eclipse.org/modeling/mmt/atl/archivedSite/atl-ArchivedSite_2.0.0RC2.zip">
						<img border=0 src="../images/icon-zip.gif"></a>
					<br /><i>ATL Toolkit (Engine and IDE), AM3, and optionally additional drivers for ATL (UML2 and MDR)</i>
					| <a href="http://wiki.eclipse.org/index.php?title=ATL_ReleaseNotes">Release Notes</a>
					| <a href="../old/">Documentation</a>
	        	</li>
<!--				<li>
					<b>download.eclipse.org/modeling/m2m/atl/updates/2.0.0/extras</b>
					<br><i>UML2 for ATL driver, MDR for ATL driver</i>
	        	</li>
-->
			</ul>
		
		</div>
		<hr class="clearer" />

		<h3>Binaries Build</h3>

		<div class="homeitem3col">
			<h3>2.0RC2 Binaries Build</h3>
		
			<ul>
				<li>
					<a title="Binaries Build" href="http://download.eclipse.org/modeling/mmt/atl/binaries/2.0.0RC2/ATL-AM3_2.0RC2.zip">
						<img border=0 src="../images/icon-zip.gif"></a>
					<b>ATL Toolkit</b>: <i>Engine, IDE, Ant Tasks and AM3</i> (Eclipse 3.3 & EMF 2.3)
	        	</li>
				<li>
					<a title="UML24ATL Binaries Build" href="http://download.eclipse.org/modeling/mmt/atl/binaries/2.0.0RC2/Driver-UML24ATL_2.0RC2.zip">
						<img border=0 src="../images/icon-zip.gif"></a>
					<b>UML2 driver for ATL</b>
	        	</li>
				<li>
					<a title="MDR4ATL Binaries Build" href="http://download.eclipse.org/modeling/mmt/atl/binaries/2.0.0RC2/Driver-MDR4ATL_2.0RC2.zip">
						<img border=0 src="../images/icon-zip.gif"></a>
					<b>MDR driver for ATL</b>
	        	</li>
			</ul>
		
		</div>
		<hr class="clearer" />

	</div>

	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Additional resources</h6>
			<ul>
				<li><a href="archive.php">Previous releases</a></li>
				<li><a href="../old/ATL_Installation_Guide[v0.1].pdf">Installation instructions</a></li>
				<li><a href="http://wiki.eclipse.org/index.php?title=ATL_ReleaseNotes">Release Notes</a></li>
			</ul>
		</div>
	</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
