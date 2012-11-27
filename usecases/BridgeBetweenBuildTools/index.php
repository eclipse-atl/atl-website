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
	$shortTitle		= "Software Build Tools Interoperability (Make, Ant, Maven)";
	$pageTitle 		= "ATL Use Case - " . $shortTitle;
	$pageKeywords	= "Build Tools, Ant, Make, Maven";
	$pageAuthor		= "Freddy Allilaire";
	
	# End: page-specific settings
	#
		
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML

	<!-- Main part -->
	<div id="midcolumn">
		<h1>$pageTitle</h1>

		<img align="right" src="../../images/atlLogoSmall.png" valign="top" style="padding-left: 10px;" alt="ATL Logo" />
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
							Interoperability,
							<a href="http://en.wikipedia.org/wiki/Build_tool">Build Tools</a>,
							<a href="http://ant.apache.org/">Ant</a>,
							<a href="http://www.gnu.org/software/make/manual/html_node/index.html">Make</a>,
							<a href="http://maven.apache.org/">Maven</a>
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
							In this use case we present how to bridge different build tools between themselves: Make, Ant, and Maven.
							Make, one of the most common build tool, has its own syntax and can be used only on UNIX platform.
							Ant is platform-independent and its syntax is XML-based. It is extended using Java classes. Maven is an extension proposed in addition to Ant functionalities.
							It proposes an easier creation of plug-in and it allows more reusability contrary to Ant. Maven need two build files: project.xml (project descriptor), and maven.xml.
						</p>
						<p align="justify">
							In this case study, from a "Make configuration" we will generate a corresponding "Ant configuration" and "Maven configuration".
							The overall approach is summarized in the following figure:
						</p>
						<p align="center">
	  						<img src="img/UseCaseOverview.png" />
			  				<br /><br />
							<b>"$shortTitle" Use Case's Overview</b>
						</p>
						<p align="justify">
							For each build tool, we have defined its metamodel by using the <a href="http://wiki.eclipse.org/index.php/KM3">KM3</a> textual format
							(Ant, Make, Maven). A visual presentation of these metamodels is also available (Ant, Make, Maven).
						</p>
						<p align="justify">
							The Injection and Extraction phases were implemented by using XML bridges. As the Ant and Maven files are XML-based, we can inject an 
							XML-based file or extract into an XML-based file the content of a model (conforms to the XML metamodel). As a Make is not an XML-based tool, we have created an 
							ad-hoc solution to transform a Makefile into a corresponding XML file.
						</p>
						<p align="justify">
							The Model-to-Model transformation phase was implemented by using ATL model-to-model transformations. Following bridges "Make to Ant" and "Ant to Maven" have been developped
							with ATL.
						</p>
						<p align="justify">
							We provide below a set of screenshots showing the different input/output files provided/created with this use case:
						</p>
						<p align="center">
	  						<img src="img/Samples.png" />
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
					<td align="center"><a href="scenario.php"><h3>Complete scenario</h3></a></td>
					<td>Scenario available in the ATL transformation zoo (with source files).</td>
				</tr>
				<tr>
					<td align="center"><a href="metamodels.php"><h3>Metamodels</h3></a></td>
					<td>All the provided metamodels are expressed in the Ecore format and also in the <a href="http://wiki.eclipse.org/index.php/KM3">KM3</a> textual format.</td>
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
						The present work is being supported by the <a href="http://openembedd.inria.fr/home_html-en?set_language=en&cl=en">OpenEmbeDD project</a>,
						and the <a href="http://www.usine-logicielle.org">Usine Logicielle project of the System@tic Paris Region Cluster</a>.
					</td>
				</tr>
			</table>
			
		</div>
	</div>

	<div id="rightcolumn">
		<div class="sideitem">
			<h6>General Information</h6>
			<ul>
				<li style="list-style:none">February 2007</li>
				<li style="list-style:none">By <a href="http://www.sciences.univ-nantes.fr/lina/atl/contrib/allilaire">Freddy Allilaire</a>, <a href="http://www.sciences.univ-nantes.fr/lina/atl/contrib/jouault">Frédéric Jouault</a> (INRIA)</li>
				<li style="list-style:none"><br />Please, ask your questions on the <a href="news://news.eclipse.org/eclipse.modeling.m2m">M2M newsgroup</a></li>
			</ul>
		</div>
	</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>