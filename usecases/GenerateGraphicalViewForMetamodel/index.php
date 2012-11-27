<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# template.php
	#
	# Author: 		Freddy Allilaire
	# Date:			2005-12-07
	#
	# Description: Type your page comments here - these are not sent to the browser
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$shortTitle		= "Generate Graphical Representation for a Metamodel";
	$pageTitle 		= "ATL Use Case - " . $shortTitle;
	$pageKeywords	= "Graphical, KM3, Metamodel, DOT";
	$pageAuthor		= "Freddy Allilaire";
	
	# End: page-specific settings
	#
		
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML

	<!-- Main part -->
	<div id="midcolumn">
		<h1>$pageTitle</h1>

		<img align="right" src="../../resources/atlLogoSmall.png" valign="top" style="padding-left: 10px;" alt="ATL Logo" />
		<blockquote>
			<ul>
				<li><a href="#keywords"><b>Keywords</b></a></li>
				<li><a href="#overview"><b>Overview</b></a></li>
				<li><a href="#relatedUseCases"><b>Related Use Cases</b></a></li>
				<li><a href="#download"><b>Download</b></a></li>
				<li><a href="#acknowledgement"><b>Acknowledgement</b></a></li>
			</ul>
		</blockquote>
    	
		<hr class="clearer" />

		<div id="container>
			<p align="justify">

			</p>

			<h4 STYLE="font-size: 10pt; padding: 0; border-bottom: 2px solid #49457C; background-position: top left; background-repeat; repeat-x;"><a name="keywords"></a>Keywords</h4>
			<table width="100%">
				<COLGROUP>
					<COL width="2%" />
					<COL width="98%" />
				</COLGROUP>
				<tr>
					<td></td>
					<td>
						<p align="justify">
							Visual presentation,
							Graphical representation,
							<a href="http://wiki.eclipse.org/index.php/KM3">KM3</a>,
							Metamodel,
							DOT
						</p>
					</td>
				</tr>
			</table>
		
			<h4 STYLE="font-size: 10pt; padding: 0; border-bottom: 2px solid #49457C; background-position: top left; background-repeat; repeat-x;"><a name="overview"></a>Overview</h4>

			<table width="100%">
				<COLGROUP>
					<COL width="2%" />
					<COL width="98%" />
				</COLGROUP>
				<tr>
					<td></td>
					<td>
						<p align="justify">
							This use case describes the automatic generation of a visual presentation for a metamodel written in KM3.
							KM3 (Kernel Meta Meta Model) is a textual concrete syntax to describe metamodels and to define Domain Specific Languages.
							DOT is an automatic	graph layout program from Graphviz. It can be used to create graphical files, such as PS, PNG, etc. out of its layout.
						</p>
						<p align="justify">
							Having a graphical presentation of a metamodel can be sometimes enlightening in comparison with a textual presentation.
							The aim of this case study is to generate a rough visualization in the form of a class diagram for a KM3 file.
							A metamodel created with KM3 does not include any representation information. DOT, the Graphviz
							tool, is used to compute the layout and generate the output picture. The overall approach is summarized in the following figure:
						</p>
						<p align="center">
	  						<img src="img/UseCaseOverview.png" />
			  				<br /><br />
							<b>"$shortTitle" Use Case's Overview</b>
						</p>
						<p align="justify">
							The Model-to-Model transformation phase was implemented by using ATL model-to-model transformations.
						</p>
						<p align="justify">
							We provide below a set of screenshots showing the different input/output files provided/created with this use case:
						</p>
						<p align="center">
	  						<img src="img/Sample.png" />
			  				<br /><br />
							<b>Screenshots of the input/outputs of the use case</b>
						</p>
					</td>
				</tr>
			</table>

			<h4 STYLE="font-size: 10pt; padding: 0; border-bottom: 2px solid #49457C; background-position: top left; background-repeat; repeat-x;">
				<a name="relatedUseCases"></a>Related Use Cases
			</h4>
			<table>
				<COLGROUP>
					<COL width="2%" />
					<COL width="98%" />
				</COLGROUP>
				<tr>
					<td></td>
					<td>
						<p align="justify">
						None at the current time.
						</p>
					</td>
				</tr>
			</table>

			<h4 STYLE="font-size: 10pt; padding: 0; border-bottom: 2px solid #49457C; background-position: top left; background-repeat; repeat-x;">
				<a name="download">Download</a>
			</h4>

			<table width="100%">
				<COLGROUP>
					<COL width="25%">
					<COL width="75%">
				</COLGROUP>
				<tr>
					<td align="center"><a href="http://www.eclipse.org/atl/atlTransformations/#KM32DOT"><h3>Complete scenario</h3></a></td>
					<td>Scenario available in the ATL transformation zoo (with source files).</td>
				</tr>
				<tr>
					<td align="center"><a href="http://www.eclipse.org/gmt/am3/zoos/atlanticZoo/#KM3"><h3>KM3 Metamodel</h3></a></td>
					<td>KM3 metamodel is expressed in the <a href="http://wiki.eclipse.org/index.php/KM3">KM3</a> textual format.</td>
				</tr>
				<tr>
					<td align="center"><a href="http://www.eclipse.org/gmt/am3/zoos/atlanticZoo/#DOT"><h3>DOT Metamodel</h3></a></td>
					<td>DOT metamodel is expressed in the <a href="http://wiki.eclipse.org/index.php/KM3">KM3</a> textual format.</td>
				</tr>
			</table>
			
			<h4 STYLE="font-size: 10pt; padding: 0; border-bottom: 2px solid #49457C; background-position: top left; background-repeat; repeat-x;">
				<a name="acknowledgement"></a>Acknowledgement
			</h4>

			<table width="100%">
				<COLGROUP>
					<COL width="2%">
					<COL width="98%">
				</COLGROUP>
				<tr>
					<td></td>
					<td>
						The present work is being supported by the <a href="http://www.usine-logicielle.org">Usine Logicielle project of the System@tic Paris Region Cluster</a>.
					</td>
				</tr>
			</table>
			
		</div>
	</div>
	
EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>