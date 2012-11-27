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
	$shortTitle		= "Models Measurement";
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
				<li><a href="#references"><b>References</b></a></li>
				<li><a href="#relatedUseCases"><b>Related Use Cases</b></a></li>
				<li><a href="#download"><b>Download</b></a></li>
<!--				<li><a href="#acknowledgement"><b>Acknowledgement</b></a></li>-->
			</ul>
		</blockquote>
    	
		<hr class="clearer" />

		<div>
			<p align="justify">
				This use case shows how to compute and generate measures on terminal models using ATL 2.0RC2. The measures can be processed on KM3 
				metamodels or UML models. And the measurement data can be represented with HTML, SVG or XHTML.
				This work has been done in collaboration between <a  href="http://www.sodius.com/">SODIUS</a> and the <a href="http://www.sciences.univ-nantes.fr/lina/atl/">ATLAS Group</a>.
			</p>

			<p align="justify">
				As a complementary application to this contribution, an online service is provided at SODIUS's web site under the name "MC-Meter".
				The application offers you to freely measure your models and get an interactive report on them, using the Open Source contribution.
				The input models can be KM3 meta-models or UML models (in version 2.1), and the interactive report is sent back by email, using XHTML format with CSS.
				Sample of inputs and interactive reports are available on the service page.
			</p>

			<p>
				The online measurement service is available at: <a href="http://www.mdworkbench.com/measuring.php">http://www.mdworkbench.com/measuring.php</a>
			</p>

			<p>
				A complete list of implemented metrics is available at: <a href="http://www.mdworkbench.com/measurement/metrics/definition.htm">
				http://www.mdworkbench.com/measurement/metrics/definition.htm</a>
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
							KM3, UML, Measures, HTML, XHTML, SVG, Pie Chart, Bar Chart
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
							This use case shows how to compute and generate measures on KM3 meta-models or UML models, and how to display them in different way.
							This use case is composed of two main parts.
						</p>
						<p align="justify">
							The first step is the measurement process. Metrics are implemented for KM3 meta-model or UML models using metric sets found in the literature [1].
							Each metric set is implemented as an ATL library. An ATL transformation is implemented for each kind of input terminal model and shows how to use the libraries of 
							metrics. A model of Measure is produced at the end of this step.
						</p>
						<p align="justify">
							The second step is the presentation process. The computed metrics stored in the model of Measure can be displayed in four different representations: Tabular HTML, 
							SVG Bar Chart, SVG Pie Chart or interactive XHTML with CSS.
					 	</p>
					 	<p align="justify">
					 		The figures below present the sample results generated for a KM3 metamodel and for a UML model:
					 	</p>
					 	<p align="center">
	  						<a href="img/tabularHTML_1.PNG"><img src="img/tabularHTML_1Small.PNG" /></a>
			  				<br /><br />
							<b>Figure 1: Example of Tabular HTML presentation on a KM3 metamodel</b>
						</p>
					 	<p align="center">
	  						<a href="img/barChart_1.PNG"><img src="img/barChart_1Small.PNG" /></a>
			  				<br /><br />
							<b>Figure 2: Example of SVG Bar Chart presentation on a KM3 metamodel</b>
						</p>
					 	<p align="center">
	  						<a href="img/pieChart_1.PNG"><img src="img/pieChart_1Small.PNG" /></a>
			  				<br /><br />
							<b>Figure 3: Example of SVG Pie Chart presentation on a KM3 metamodel</b>
						</p>
					 	<p align="center">
	  						<img src="img/XHTML_1.PNG" />
			  				<br /><br />
							<b>Figure 4: Example of interactive XHTML with CSS presentation on a KM3 metamodel</b>
						</p>
					 	<p align="center">
	  						<a href="img/tabularHTML_2.PNG"><img src="img/tabularHTML_2Small.PNG" /></a>
			  				<br /><br />
							<b>Figure 5: Example of Tabular HTML presentation on a UML model</b>
						</p>
					 	<p align="center">
	  						<a href="img/barChart_2.PNG"><img src="img/barChart_2Small.PNG" /></a>
			  				<br /><br />
							<b>Figure 6: Example of SVG Bar Chart presentation on a UML model</b>
						</p>
					 	<p align="center">
	  						<a href="img/pieChart_2.PNG"><img src="img/pieChart_2Small.PNG" /></a>
			  				<br /><br />
							<b>Figure 7: Example of SVG Pie Chart presentation on a UML model</b>
						</p>
					 	<p align="center">
	  						<img src="img/XHTML_2.PNG" />
			  				<br /><br />
							<b>Figure 8: Example of interactive XHTML with CSS presentation on a UML model</b>
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
						[1]
					</td>
					<td>
						Baroni, A.L.: <em>Formal Definition of Object-Oriented Design Metrics</em>. Master Thesis, Vrije University, Brussel, Belgium, 2002.
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
							<a href="http://www.eclipse.org/atl/usecases/Measuring_UML_models/">Measuring UML models</a>
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
					<td align="center"><a href="http://www.eclipse.org/atl/atlTransformations/#ModelMeasurement">Complete Scenario</a></td>
					<td>Scenario <b>Models Measurement</b> available in the ATL transformation zoo (with source files).</td>
				</tr>
				<tr>
					<td align="center"><a href="http://www.mdworkbench.com/measuring.php">Web Service</a></td>
					<td>
						Online measurement service
					</td>
				</tr>
				<tr>
					<td align="center"><a href="http://www.mdworkbench.com/measurement/metrics/definition.htm">Definition</a></td>
					<td>Complete list of implemented metrics</td>
				</tr> 
			</table>
			
<!--
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

					</td>
				</tr>
			</table>
-->
			
		</div>
		
		<hr class="clearer" />
		
	</div>

	<div id="rightcolumn">
		<div class="sideitem">
			<h6>General Information</h6>
			<ul>
				<li style="list-style:none">July 2007</li>
				<li style="list-style:none">By <a href="http://www.sciences.univ-nantes.fr/lina/atl/contrib/vepa">&Eacute;ric V&eacute;pa</a> (<a href="http://www.sodius.com">SODIUS</a>)</li>
				<li style="list-style:none"><br />Please, ask your questions on the <a href="news://news.eclipse.org/eclipse.modeling.m2m">M2M newsgroup</a></li>
			</ul>
		</div>
	</div>
	
EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>