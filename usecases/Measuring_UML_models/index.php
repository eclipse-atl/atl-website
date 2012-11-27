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
	$shortTitle		= "Measuring UML models";
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
		<a href="http://www.papyrusuml.org/"><img align="right" src="../../resources/Papyrus_48x48.gif" valign="top" style="padding-left: 10px;" alt="Papyrus" /></a>
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
				This use case shows how to use and integrate a model transformation service in a UML Modeler to compute and generate quality measures on UML models.
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
							UML Modeler,
							<a href="http://www.eclipse.org/modeling/mdt/?project=uml2">UML 2</a>,
							Measures
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
							This use case presents how the Papyrus UML Modeler could be used to compute and generate quality measures on UML models. <a href="http://www.papyrusuml.org/">Papyrus</a> is a 
							dedicated tool for UML2 graphical modelling developed mainly by <a href="http://www-list.cea.fr/">CEA LIST</a>.
					 		This open source tool is based on the Eclipse environment.
					 	</p>
					 	<p align="justify">
					 		The figure below presents an example of UML Class Diagram made with Papyrus. Measures will be generated and computed on this working example:
					 	</p>
					 	<p align="center">
	  						<img src="img/UMLClassDiagram.PNG" />
			  				<br /><br />
							<b>Sample of UML 2 Class Diagram</b>
						</p>
					 	<p align="justify">
							The generation of measures on a UML model allows to perform several investigations. For example measuring the various models may bring interesting insight into the 
							consideration of these models. Furthermore comparing similar measures applied to models of various origins may bring interesting observations.
						</p>
						<p align="justify">
							From a UML Class Diagram, the following measures are available and will be computed when the ATL service <i>"Generate Measures"</i> will be executed:
							<ul>
								<li><b>Total Number of Packages:</b> TNP is the total number of packages in the model.<br /><br /></li>
								<li><b>Total Number of Classes:</b> TNC is the total number of classes in a package or the model.<br /><br /></li>
								<li><b>Total Number of Attributes:</b> TNA is the total number of attributes in a class, package or the model.<br /><br /></li>
								<li><b>Depth Inheritance Tree:</b> In cases involving multiple inheritances, the DIT will be the maximum length from the node to the root of the tree.<br /><br /></li>
								<li><b>Number of Children:</b> NOC is the number of immediate subclasses subordinated to a class in the class hierarchy.<br /><br /></li>
								<li><b>Number of Attributes:</b> NA is defined as the total number of attributes in a class.<br /><br /></li>
								<li><b>Number of Attributes Inherited:</b> NAI is defined as the total number of attributes inherited by a subclass.<br /><br /></li>
								<li>
									<b>Attribute Inheritance Factor:</b> The Attribute Inheritance Factor (AIF) is defined as a quotient between the sum of inherited attributes in all classes of the 
									system under consideration and the total number of available attributes (locally defined plus inherited) for all classes.
								</li>
							</ul>
						</p>
						<p align="justify">
							Others and more complex measures could be easily added and implemented by modifying the corresponding ATL transformation.
							To see how to configure and run the "Measuring UML models" ATL service, please take a look to the <a href="userGuide.php">User Guide</a>.
						</p>						
						<p align="justify">
							The computed metrics will be displayed in 3 different representations: <b>Tabular HTML</b>, <b>SVG Bar Chart</b>, and <b>SVG Pie Chart</b>. The figures below present the
							sample results generated from our working example:
							<ul>
								<li>
									<b>Tabular HTML</b><br />
									<div align="center"><img src="img/tabularHTML.PNG" /></div>
									<br /><br />
								</li>
								<li>
									<b>SVG Bar Chart</b><br />
			  						<div align="center"><img src="img/barChart.PNG" /></div>
									<br /><br />
								</li>
								<li>
									<b>SVG Pie Chart</b><br />
			  						<div align="center"><a href="img/pieChart.PNG"><img src="img/pieChart_small.PNG" /></a></div>
									<br /><br />
								</li>
							</ul>
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
					<td align="center"><a href="http://www.papyrusuml.org/"><img src="../../resources/Papyrus_48x48.gif" /></a></td>
					<td><a href="http://www.papyrusuml.org/"><b>Papyrus</b></a>, an open-source graphical modeler tool for UML2 and based on Eclipse</a>.</td>
				</tr>
				<tr>
					<td align="center"><a href="http://www.papyrusuml.org/scripts/home/publigen/content/templates/show.asp?P=131&L=EN&ITEMID=10#4"><h3>ATL Service</h3></a></td>
					<td>Papyrus add-in containing the implementation of this use case.</td>
				</tr>
				<tr>
					<td align="center"><h3><a href="userGuide.php">User Guide</a></h3></td>
					<td>This user guide explains how to configure and launch the ATL service in Papyrus.</td>
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
				<li style="list-style:none">May 2007</li>
				<li style="list-style:none">By <a href="http://www.sciences.univ-nantes.fr/lina/atl/contrib/allilaire">Freddy Allilaire</a> (INRIA), Rémi Schnekenburger (CEA LIST)</li>
				<li style="list-style:none"><br />Please, ask your questions on the <a href="news://news.eclipse.org/eclipse.modeling.m2m">M2M newsgroup</a></li>
			</ul>
		</div>
	</div>
	
EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>