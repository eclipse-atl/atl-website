<?php  																														

require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");
require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php");
require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php");

$App 	= new App();
$Nav	= new Nav();
$Menu 	= new Menu();

include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

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
	$pageTitle 		= "ATL Use Case - Production of UML class diagrams from syntactical models of english text or SBVR models";
	$pageKeywords	= "UML, SBVR, syntactical analysis, parsing";
	$pageAuthor		= "Mathias Kleiner";
	
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
			</ul>
		</blockquote>
    	
		<hr class="clearer" />

		<div>
			<p align="justify">
				This work presents a case study of obtaining a UML class diagram from a syntactical analysis of a text using SBVR as an intermediate layer. We show how it is possible, with the help of model engineering, to realize two transformations: 
				from a syntactical model into a SBVR model, and from a SBVR model into a UML model. 
				This work has been done in collaboration between the <a href="http://www.emn.fr/x-info/atlanmod">ATLANMOD team</a> 
				in Nantes and the <a href="http://www.ilog.fr/">ILOG company</a>.
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
						Syntactical analysis, parsing,
						<a href="http://www.omg.org/spec/SBVR/1.0/">SBVR</a>, 
						<a href="http://www.omg.org/technology/documents/formal/uml.htm">UML class diagrams</a>.
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
							In this usecase, we present a scenario for producing conceptual schemas in UML class diagrams out of a syntactically analyzed english text. 
							The usecase chains two transformations and uses three metamodels (two of them from existing OMG's specifications).
							The first transformation produces SBVR models from Syntax models, where Syntax is an originally proposed metamodel for capturing syntax, grammatical dependencies and semantics of english sentences.
							The second transformation produces UML models from SBVR models. 
							Each transformation can be used separately or chained depending on the scenario. 
							These transformations have been successfully used in an application that first generates a syntax model from plain english text using constraint-based parsing techniques. 
							The automatic syntactical analysis is however outside the scope of this usecase. The Syntax models can be either created manually or obtained using any language parsing technique.
							The packaged Eclipse project contains the three metamodels in KM3 and ECORE format, the two transformations in ATL format, and example models in XMI format.
				    	</p>
						<p align="justify">
				    		In the following, we present an overview of the three metamodels, as well as a scenario example through terminal models corresponding to the sentence "Each company sells at least one product". This example is one of the scenarios included in the packaged Eclipse project.
						</p>
				    	<p align="justify">
				    		Figure 1 presents an excerpt of the Syntax metamodel. The main class is "Cat", which represents a syntactical category. Categories can be either terminal (i.e with an associated word), or non-terminal (i.e containing other categories, a group of words).
							The main non-terminal categories are "SentenceCat" (sentences), "NPCat" (noun phrases), "VPCat" (verb phrases). 
							The main terminal categories are "NCat" (nouns), "VCat" (verbs), "DCat" (determiners).
							Categories are related by grammatical dependencies, such as "subject" from verbs to noun phrases. 
							Categories may also express an SBVR semantic through the "expresses" optional association. 
						</p>
						<p align="center">
			  				<a href="Syntax.png"><img src="Syntax.png" width="600" /></a>
					  		<br /><br />
							<b>Figure 1: Excerpt of the Syntax metamodel</b>
						</p>
				    	<p align="justify">
				    		Figure 2 presents a fragment of a Syntax model for the sentence "Each company sells at least one product".
						</p>
						<p align="center">
			  				<a href="RunningExample-Syntax.png"><img src="RunningExample-Syntax.png" width="600" /></a>
					  		<br /><br />
							<b>Figure 2: Fragment of a Syntax model for our running example</b>
						</p>
						<p align="justify">
							Figures 3 and 4 present an excerpt of the SBVR metamodel, mainly the taxonomy of concepts "Representation", "Meaning" and "LogicalFormulation".
						</p>
						<p align="center">
			  				<a href="SBVR-Meaning.PNG"><img src="SBVR-Meaning.PNG" width="600" /></a>
					  		<br /><br />
							<b>Figure 3: Excerpt of the SBVR metamodel: meanings</b>
						</p>
						<p align="center">
							<a href="SBVR-LogicalFormulation.png"><img src="SBVR-LogicalFormulation.png" width="600" /></a>
					  		<br /><br />
							<b>Figure 4: Excerpt of the SBVR metamodel: logical formulations</b>
						</p>
						<p align="justify">
							Figure 5 presents a fragment of the SBVR model obtained with the transformation "Syntax2SBVR" from the previously shown Syntax model.
						</p>
						<p align="center">
			  				<a href="RunningExample-SBVR.png"><img src="RunningExample-SBVR.png" width="600" /></a>
					  		<br /><br />
							<b>Figure 5: Fragment of a SBVR model for our running example</b>
						</p>
						<p align="justify">
							Figure 6 presents a fragment of the UML model obtained with the transformation "SBVR2UML" from the previously shown SBVR model.
						</p>
						<p align="center">
			  				<a href="RunningExample-UML.png"><img src="RunningExample-UML.png" width="600" /></a>
					  		<br /><br />
							<b>Figure 6: Fragment of a UML model for our running example</b>
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
					<td align="center"><a href="http://www.eclipse.org/atl/atlTransformations/#Syntax2SBVR2UML"><h3>Packaged Eclipse project</h3></a></td>
					<td>The packaged Eclipse project, available in the ATL transformation zoo (with source files), contains the three metamodels in KM3 and ECORE format, the two ATL transformations, and a set of model samples as XMI files.</td>
				</tr>
			</table>
			
		</div>
	</div>

	<div id="rightcolumn">
		<div class="sideitem">
			<h6>General Information</h6>
			<ul>
				<li style="list-style:none">April 2009</li>
				<li style="list-style:none">
					By <a href="mailto:mathias.kleiner@inria.fr">Mathias Kleiner</a> (INRIA)
				</li>
				<li style="list-style:none"><br />For any information, please contact the author directly.</li>
			</ul>
		</div>
	</div>
	
EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>