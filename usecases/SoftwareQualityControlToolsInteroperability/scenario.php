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
	$pageTitle 		= "ATL Use Case - Software Quality Control Tools Interoperability (Bugzilla, Mantis, Excel): Complete Scenario";
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
	    	We provide here the links to the different scenarios which have been used to create this complete use case.
	    	These scenarios are available from the <a href="http://www.eclipse.org/atl/atlTransformations/">ATL Transformation Zoo</a>.
    		Each of them may be used within other use cases, in other different contexts or for other purposes.
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
				<h4 STYLE="font-size: 10pt; padding: 0; border-bottom: 2px solid #49457C; background-position: top left; background-repeat; repeat-x;">List of scenarios used in this use case</h4>
		
				<table border="1" frame="lhs" width="80%">
					<tr>
						<td align="center">
							<b><font size="3">ATL Scenario</font></b>
						</td>
					</tr>
		
					<tr>
						<td align="center">
							<a href="http://www.eclipse.org/atl/atlTransformations/#MSOfficeExcelInjector">Microsoft Office Excel SpreadsheetML Injector</a>
						</td>
					</tr>

					<tr>
						<td align="center">
							<a href="http://www.eclipse.org/atl/atlTransformations/#MSOfficeExcel2SoftwareQualityControl">Microsoft Office Excel SpreadsheetML to Software Quality Control</a>
						</td>
					</tr>
					
					<tr>
						<td align="center">
							<a href="http://www.eclipse.org/atl/atlTransformations/#SoftwareQualityControl2Bugzilla">Software Quality Control to Bugzilla</a>
						</td>		
					</tr>

					<tr>
						<td align="center">
							<a href="http://www.eclipse.org/atl/atlTransformations/#SoftwareQualityControl2MantisBT">Software Quality Control to Mantis</a>
						</td>		
					</tr>
	
				</table>
			</td>
		</tr>
		</table>
		</div>
	    
		<hr class="clearer" />
		<br />
		<a href="index.php">Back to the "Software Quality Control Tools Interoperability (Bugzilla, Mantis, Excel)" use case main page &raquo;</a>
		<hr class="clearer" />
	</div>

	
	
EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>