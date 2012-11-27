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
	$shortTitle			= "Software Build Tools Interoperability";
	$pageTitle 		= "ATL Use Case - " . $shortTitle . ": Used Metamodels";
	$pageKeywords	= "";
	$pageAuthor		= "Freddy Allilaire";
	
	# End: page-specific settings
	#
		
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML

	<!-- Main part -->
	<div id="midcolumn">
		<h1>$pageTitle</h1>

		<img align="right" src="../../resources/atlLogoSmall.png" valign="top" style="padding-left: 10px;" alt="ATL Logo" />
    	<p>
	    	We provide here the links to all the metamodels which have been developped and/or used within this use case. 
    		These metamodels are available resources that may be used within other use cases, in other different contexts or for other purposes.
    		Each of them is provided in the Eclipse Ecore standard format and also in the <a href="http://wiki.eclipse.org/index.php/KM3">KM3</a> textual format.
    	</p>
    		    	
		<hr class="clearer" />

		<div id="container>
		<table>
			<COLGROUP>
				<COL width="2%">
				<COL width="98%">
			</COLGROUP>
		<tr>
			<td></td>
			<td>
				<h4 STYLE="font-size: 10pt; padding: 0; border-bottom: 2px solid #49457C; background-position: top left; background-repeat; repeat-x;">Metamodels</h4>
		
				<table border="1" frame="lhs" width="80%">
					<COLGROUP>
						<COL width="50%">
						<COL width="50%">
					</COLGROUP>
					<tr>
						<td align="center">
							<b><font size="3"><i>Ecore</i> format</font></b>
						</td>
						<td align="center">
							<b><font size="3"><i>KM3</i> format</font></b>
						</td>
					</tr>
		
					<tr>
						<td align="center">
							<a href="http://www.eclipse.org/gmt/am3/zoos/atlantEcoreZoo/#XML">XML</a>
						</td>
						<td align="center">
							<a href="http://www.eclipse.org/gmt/am3/zoos/atlanticZoo/#XML">XML</a>	
						</td>		
					</tr>

					<tr>
						<td align="center">
							<a href="http://www.eclipse.org/gmt/am3/zoos/atlantEcoreZoo/#Ant">Ant</a>
						</td>
						<td align="center">
							<a href="http://www.eclipse.org/gmt/am3/zoos/atlanticZoo/#Ant">Ant</a>
						</td>		
					</tr>
					
					<tr>
						<td align="center">
							<a href="http://www.eclipse.org/gmt/am3/zoos/atlantEcoreZoo/#Make">Make</a>
						</td>
						<td align="center">
							<a href="http://www.eclipse.org/gmt/am3/zoos/atlanticZoo/#Make">Make</a>
						</td>		
					</tr>

					<tr>
						<td align="center">
							<a href="http://www.eclipse.org/gmt/am3/zoos/atlantEcoreZoo/#Maven%20(maven.xml)">Maven (maven.xml)</a>
						</td>
						<td align="center">
							<a href="http://www.eclipse.org/gmt/am3/zoos/atlanticZoo/#Maven%20(maven.xml)">Maven (maven.xml)</a>
						</td>		
					</tr>
					
					<tr>
						<td align="center">
							<a href="http://www.eclipse.org/gmt/am3/zoos/atlantEcoreZoo/#Maven%20(project.xml)">Maven (project.xml)</a>
						</td>
						<td align="center">
							<a href="http://www.eclipse.org/gmt/am3/zoos/atlanticZoo/#Maven%20(project.xml)">Maven (project.xml)</a>
						</td>		
					</tr>
	
				</table>
			</td>
		</tr>
		</table>
		</div>
	    
		<hr class="clearer" />
		<br />
		<a href="index.php">Back to the "$shortTitle" use case main page &raquo;</a>
		<hr class="clearer" />
	</div>

	
	
EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>