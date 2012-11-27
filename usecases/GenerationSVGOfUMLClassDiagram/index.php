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
	$shortTitle		= "Generation of Vector Graphic (SVG) Representation of a UML Class Diagram";
	$pageTitle 		= "ATL Use Case - " . $shortTitle;
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

		<div>
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
							<a href="http://www.w3.org/TR/SVG11/">SVG</a>,
							Graphical Representation,
							<a href="http://www.omg.org/cgi-bin/doc?ptc/2003-09-01">UML Diagram Interchange</a>,
							UML Class Diagram
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
							This use case describes the automatic generation of a vector graphic representation for a UML class diagram.
							This UML diagram has its presentation information according to the UML Diagram Interchange standard.
							
							UML Diagram Interchange enables a smooth and seamless exchange of documents compliant to the UML standard (referred to as UML models) between different software tools. 
							While this certainly includes tools for developing UML models, it also includes tools such as whiteboard tools, code generators, word processing tools, and desktop 
							publishing tools. Special attention is given to the Internet as a medium for exchanging and presenting UML models.
							
							From this diagram interchange data we generate another presentation using the W3C
							standard SVG (Scalable Vector Graphics), an XML-based format. The SVG file may be exported towards another graphical format, or viewed as is.
							Moreover, the SVG code in the created file shall be readable by a humanbeing, as opposed to the
							exported XMI file from Poseidon. For instance that generates SVG files that are based on non abstract geometrical
							forms (such as rectangle, line, circle, polygon, etc). This scenario shall create
							logical structures using as many as possible abstract geometrical forms.

						</p>
						<p align="justify">
							The overall approach is summarized in the following figure:
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
					<td align="center"><a href="http://www.eclipse.org/atl/atlTransformations/#UMLDI2SVG"><h3>Complete scenario</h3></a></td>
					<td>Scenario available in the ATL transformation zoo (with source files).</td>
				</tr>
				<tr>
					<td align="center"><a href="http://www.eclipse.org/gmt/am3/zoos/atlanticZoo/#SVG"><h3>SVG Metamodel</h3></a></td>
					<td>SVG metamodel is expressed in the <a href="http://wiki.eclipse.org/index.php/KM3">KM3</a> textual format.</td>
				</tr>
				<tr>
					<td align="center"><a href="http://www.eclipse.org/gmt/am3/zoos/atlanticZoo/#XML"><h3>XML Metamodel</h3></a></td>
					<td>XML metamodel is expressed in the <a href="http://wiki.eclipse.org/index.php/KM3">KM3</a> textual format.</td>
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
	
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>General Information</h6>
			<ul>
				<li style="list-style:none">March 2007</li>
				<li style="list-style:none">
					By <a href="http://www.sciences.univ-nantes.fr/lina/atl/contrib/allilaire">Freddy Allilaire</a> (INRIA)
				</li>
				<li style="list-style:none"><br />Please, ask your questions on the <a href="news://news.eclipse.org/eclipse.modeling.m2m">M2M newsgroup</a></li>
			</ul>
		</div>
	</div>
	
EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>