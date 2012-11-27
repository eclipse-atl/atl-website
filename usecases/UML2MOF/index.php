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
	$shortTitle		= "Using a UML modeler to generate metamodels";
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
				This use case shows how to use and integrate a model transformation service in a UML Modeler to generate metamodels conforming to KM3, MOF 1.4, and Ecore.
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
							Metamodels,
							Ecore,
							MOF 1.4,
							<a href="http://wiki.eclipse.org/index.php/KM3">KM3</a>
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
							This use case presents how the Papyrus UML Modeler could be used to generate metamodels. <a href="http://www.papyrusuml.org/">Papyrus</a> is a dedicated tool 
							for modelling within UML2 developed by <a href="http://www-list.cea.fr/">CEA LIST</a>.
					 		This open source tool is based on the Eclipse environment.
					 	</p>
					 	<p align="justify">
						 	<table border="3" width = "100%" cellspacing="0" cellpadding="20">
								<td align="justify" bgcolor="#b0c8f4">
								 	<b>Metamodel definition</b><br /><br />
							 		A metamodel is a model that defines the concepts and relationships that may be created in a model.
									A model always conforms to a metamodel. This relation is called conformance. The conformance relation has a different nature than the representation relation 
									between a model and its system. A metamodel does not represent a model (that could be considered a system), but only the concepts and relationships that may be 
									created. A metamodel conforms to a metametamodel.
								</td>
							</table>
						</p>
					 	<p align="justify">
					 		The metamodel will be generated from its description done via a UML 2 Class Diagram produced with Papyrus (an open-source graphical modeler tool for UML2 and based on Eclipse).
							UML 2 Class Diagrams are the mainstay of object-oriented analysis and design. They show the classes of the system, their interrelationships (including 
							inheritance, aggregation, and association), and the operations and attributes of the classes. Class diagrams are used for a wide variety of purposes, including both 
							conceptual/domain modeling and detailed design modeling. The figure below presents an example of UML Class Diagram made with Papyrus.
						</p>
						<p align="center">
	  						<img src="img/UMLClassDiagram.PNG" />
			  				<br /><br />
							<b>Sample of UML 2 Class Diagram</b>
						</p>
						<p align="justify">
							From a UML Class Diagram, there is the possibility to generate a metamodel in the following formats:
							<ul>
								<li>
									<b><a href="http://wiki.eclipse.org/index.php/KM3">KM3</a></b>:  KM3 (Kernel Meta Meta Model) is a neutral language to write metamodels and to define Domain Specific 
									Languages.
								</li>
								<li>
									<b>EMF XMI 2.0, conforming to Ecore</b>: Ecore is the metametamodel used by EMF. The <a href="http://www.eclipse.org/modeling/emf/">EMF</a> project is a modeling 
									framework and code generation facility for building tools and other applications based on a structured data model.
								</li>
								<li>
									<b>MDR XMI 1.2, conforming to MOF 1.4</b>: <a href="http://www.omg.org/mof/">MOF (Meta Object Facility)</a> is an OMG standard enabling to describe metamodels through common semantics.
								</li>
							</ul>
						</p>
						<p align="justify">
							To see how to configure and run the "Generate Metamodel" ATL service, please take a look to the <a href="userGuide.php">User Guide</a>.
						</p>
						<p align="justify">
							Each action (e.g. "Generate metamodel in Ecore") will execute a corresponding ATL model transformation (e.g. "UML 2.0 to Ecore"). Both following figures present 
							samples of generated metamodels in <b>EMF XMI 2.0</b> and <b>KM3</b> formats.
						</p>
						<div align="center">
							<table>
								<tr>
									<td><img src="img/Ecore.PNG" /></td>
			  						<td><img src="img/KM3File.PNG" /></td>
			  					</tr>
			  				</table>
						</div>
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
					<td align="center"><a href="http://wiki.eclipse.org/index.php/KM3"><h3>KM3</h3></a></td>
					<td>KM3 is a neutral language to write metamodels and to define DSL.</td>
				</tr>
				<tr>
					<td align="center"><a href="http://www.papyrusuml.org/scripts/home/publigen/content/templates/show.asp?P=131&L=EN&ITEMID=10#4"><h3>ATL Service</h3></a></td>
					<td>Papyrus add-in containing the implementation of this use case.</td>
				</tr>
				<tr>
					<td align="center"><h3><a href="userGuide.php">User Guide</a></h3></td>
					<td>This user guide explains how to configure and launch the ATL service in Papyrus.</td>
				</tr>
				<tr>
					<td align="center"><h3><a href="http://www.eclipse.org/atl/atlTransformations/UML2KM3/UML2KM3.zip">Source code</a></h3></td>
					<td>Source code of the ATL scenario used in this use case.</td>
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