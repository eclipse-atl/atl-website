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
	$shortTitle		= "RSM to Topcased UML2 Editor";
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
							RSM, Topcased, Import, UML2, Class Diagram, Use Case Diagram, Sequence Diagram
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
							<a href="http://www.topcased.org/">TOPCASED</a> currently uses the ATL model transformation toolkit. Model transformations have been mainly used in order to 
							access models defined using other editors than TOPCASED one's.
						</p>
						<p align="justify">
							This use case presents an operational application of ATL to bridge RSM and TOPCASED. It was implemented by <a href="http://www.c-s.fr/">C-S</a> in the context of 
							the TOPCASED project.
					 	</p>
					 	<p align="justify">
					 		<a href="http://www.topcased.org/">TOPCASED</a> is an open-source workshop based on an Eclipse platform. Several editors are available:
					 		SAM, AADL, UML2, ECORE, and SYSML.
							It integrate several transformation services, in particular RSM to TOPCASED. These services are all based on ATL language and tool. Other services around models are
							available like OCL editor and checker, comparison, merging, etc.				 		
					 	</p>
					 	<p align="justify">
						 	In the TOPCASED UML2 Editor several diagrams are available:
						 	<ul>
								<li>Class diagram</li>
								<li>Usecase diagram</li>
								<li>Sequence diagram</li>
							</ul>
						</p>
					 	<p align="center">
	  						<img src="img/Topcased.png" />
			  				<br /><br />
							<b>Topcased UML2 Editor</b>
						</p>
						<p align="justify">
							To display of diagram, the TOPCASED editor needs two kinds of files: 
							<ul>
								<li>The model part (file with the UML2 extension)</li>
								<li>The graphical information (file with the UML2DI extension)</li>
							</ul>
						</p>
						<p align="justify">
							In contrast with that, RSM file contains both model and graphical information. During the analysis, the border between these two sorts of information was determined.
						</p>
						<p align="justify">
							The metamodel from a specific ROSE model is obtained by using the RSM plug-in provided by TOPCASED. This metamodel is required by the transformation.
							The figure below summarizes the transformation process:
						</p>
						<p align="center">
	  						<img src="img/TransformationProcess.png"/>
			  				<br /><br />
							<b>Transformation Process</b>
						</p>
						<p align="center">
	  						<img src="img/UML2Import.png"/>
						</p>
						<p align="justify">
							<b>Import results for a Class Diagram from RSM to TOPCASED UML2 Editor:</b>
						</p>
					 	<p align="center">
	  						<img src="img/rsmClassDiagram.png" />
			  				<br />
							<b>RSM</b>
						</p>
					 	<p align="center">
	  						<img src="img/topcasedClassDiagram.png" />
			  				<br />
							<b>Topcased</b>
						</p>
						<p align="justify">
							<b>Import results for a Usecase Diagram from RSM to TOPCASED UML2 Editor:</b>
						</p>
					 	<p align="center">
	  						<img src="img/rsmUseCaseDiagram.png" />
			  				<br />
							<b>RSM</b>
						</p>
					 	<p align="center">
	  						<img src="img/topcasedUseCaseDiagram.png" />
			  				<br />
							<b>Topcased</b>

						</p>
						<p align="justify">
							<b>Import results for a Sequence Diagram from RSM to TOPCASED UML2 Editor:</b>
						</p>
					 	<p align="center">
	  						<img src="img/rsmSequenceDiagram.png" />
			  				<br />
							<b>RSM</b>
						</p>
					 	<p align="center">
	  						<img src="img/topcasedSequenceDiagram.png" />
			  				<br />
							<b>Topcased</b>
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
				<a name="references"></a>References
			</h4>

			<table width="100%">
				<tr valign="top">
					<td>
					<a href="http://www.sciences.univ-nantes.fr/lina/atl/www/presentations/awme2/09%20-%20An%20operational%20application%20of%20ATL%20to%20bridge%20RSM%20and%20TopCased%20(Gabel).ppt">
					[1]</a>
					</td>
					<td>
						Sébastien Gabel, Agusti Canals, Christophe Le Camus: 
						<em>An operational application of ATL to bridge RSM and TopCased</em>.
						In: 2nd AMMA/ATL Workshop on Model Engineering (AWME2), Wednesday 3rd and Thursday 4th May, 2006 University of Nantes, Nantes France
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
					<td align="center"><a href="http://gforge.enseeiht.fr/frs/?group_id=7"><h3>Topcased Core</h3></a></td>
					<td>Toolkit and SDK features.</td>
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
						The present work is being supported by the <a href="http://www.topcased.org/">Topcased Project</a>, 
						the <a href="http://www.usine-logicielle.org">Usine Logicielle project of the System@tic Paris Region Cluster</a>,
						and the <a href="http://openembedd.inria.fr/home_html-en?set_language=en&cl=en">OpenEmbeDD project</a>.
					</td>
				</tr>
			</table>
			
		</div>
	</div>

	<div id="rightcolumn">
		<div class="sideitem">
			<h6>General Information</h6>
			<ul>
				<li style="list-style:none">June 2007</li>
				<li style="list-style:none">
					By Sébastien Gabel (<a href="http://www.c-s.fr/">C-S</a>), Agusti Canals (<a href="http://www.c-s.fr/">C-S</a>), Chistophe Le Camus (<a href="http://www.c-s.fr/">C-S</a>), 
					<a href="http://www.sciences.univ-nantes.fr/lina/atl/contrib/allilaire">Freddy Allilaire</a> (INRIA)
				</li>
				<li style="list-style:none"><br />Please, ask your questions on the <a href="news://news.eclipse.org/eclipse.modeling.m2m">M2M newsgroup</a></li>
			</ul>
		</div>
	</div>
	
EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>