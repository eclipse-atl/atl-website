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
	$pageTitle 		= "ATL Use Case - Software Quality Control Tools Interoperability (Bugzilla, Mantis, Excel)";
	$pageKeywords	= "Tool Interoperability, Software Quality Control, Excel, Bugzilla, Mantis, Bug-Tracking";
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
				<li><a href="#references"><b>References</b></a></li>
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
							Tool Interoperability,
							Software Quality Control,
							Bug-Tracking,
							<a href="http://office.microsoft.com/excel">Excel</a>,
							<a href="http://www.bugzilla.org/">Bugzilla</a>,
							<a href="http://www.mantisbt.org/">Mantis</a>
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
							Problems of tools interoperability can be found in various domains. Software quality control is one of these.
							This use case presents an implementation of bridges between different bug tracking tools like Bugzilla, and Mantis.
							We also consider that bug tracking information may be handled in a generic tool like Excel.
						</p>
						<p align="justify">
							We take an example of "bug-tracking" in the case of a software product development.
							Assume that three teams are currently working on the same product at the same time but on different modules of this product.
							Teams may be geographically distributed, may have different levels of maturity of the used development process, may have different experience for the team members, 
							and may consequently use different tools. The global situation may be described as follows:
							<ul>
								<li>
									Team A is developing the first module by using an Excel workbook with a specific format to track or trace bugs;<br /><br />
									<div align="center"><a href="img/ExcelSampleFile.png"><img src="img/ExcelSampleFile.png" height="500" /></a></div>
									<hr />
								</li>
								<li>
									Team B is working on the second module and uses Bugzilla which is a free bug-tracking system;<br /><br />
									<div align="center"><a href="img/BugzillaSampleFile.png"><img src="img/BugzillaSampleFile.png" height="500" /></a></div>
									<hr />
								</li>
								<li>
									Team C is developing the third module and uses Mantis Bug Tracker which is another free bug tracking system;<br /><br />
									<div align="center"><a href="img/MantisSampleFile.png"><img src="img/MantisSampleFile.png" height="500" /></a></div>
									<hr />
								</li>
							</ul>
							A fourth team (that we name Team D) must integrate the various modules developed by these three teams into a complete software solution. It also has to deal with all
							the bugs that have been detected but not yet resolved for each module.
						</p>
						<p align="justify">
							The problem is that each team has used a different tool for keeping track of bugs. So in that case, how to succeed in centralizing bug-tracking, i.e. how to be able to
							interoperate from a tool to another without losing critical information about detected bugs? Furthermore the level of maturity of each team may dynamically evolve, each
							one learning from the global project. A given team may thus upgrade at some point in time its practices to those used by another one.
						</p>
						<p align="justify">
							The general overview of our approach is presented in the following figure.
						</p>
						<p align="center">
			  				<img src="img/modelEngineeringApproachSchema.png" />
					  		<br /><br />
							<b>Overview of our model engineering approach to interoperability</b>
						</p>
						<p align="justify">
							In this approach, each different "bug-tracking" tool is described by a metamodel.
							Each tool's metamodel is linked to others by the "logical" pivot: transformations based on these metamodels to the pivot and from the pivot to the metamodels are implemented.
							This pivot is also a metamodel. It abstracts a certain number of general concepts about "bug-tracking".
						</p>
						<p align="justify">
							Microsoft Excel, Bugzilla, and Mantis (and a lot of tools in general) do not natively use XMI (the OMG standard for serializing and exchanging models and metamodels).
							Instead they use a general XML format to import/export data.
							It is thus necessary to define an XML metamodel in order to be able to inject the content of XML files into models and to extract the content of these 
							models into other XML files.
						</p>
						<p align="justify">
							We use ATL to implement bridges between the different tools which are Microsoft Excel, Bugzilla and Mantis. Several bridges are possible and interesting 
							to implement. We have experimented with "Excel-to-Bugzilla" and "Excel-to-Mantis" bridges for this use case. These bridges are implemented as chains of model 
							transformations. The following figure presents both bridges.
						</p>
						<p align="center">
			  				<img src="img/Excel2BugzillaAndmantisOverview.png" />
					  		<br /><br />
							<b>"Excel-to-Bugzilla" and "Excel-to-Mantis" Bridges</b>
						</p>
						<p align="justify">
							In fact we do not implement direct bridges between these tools. We use the logical metamodel <b>SoftwareQualityControl</b> as a pivot and therefore 
							every model used in one of the tools is transformed to an intermediary model conforming to the logical pivot.
							We can see that an Excel file in XML is the entry point of the two bridges. This file has to be injected into an XML model before being transformed into an Excel 
							(SpreadsheetML) model and a SoftwareQualityControl model. Then, this Software-QualityControl model can be transformed into Bugzilla and Mantis models. Finally, these two 
							models have to be transformed into XML models in order to be extracted into well-formed XML documents. These files are the exit points of the two bridges.
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
						<a href="http://www.eclipse.org/gmt/modisco/useCases/BugzillaMetrics/">MoDisco Use Case - Bugzilla Metrics</a>
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
						<a href="http://www.sciences.univ-nantes.fr/lina/atl/bibliography/WiSME05_1">
							[1]
						</a>
					</td>
					<td>
						Bezivin, J, Bruneliere, H, Jouault, J, and Kurtev, I:
						<em> Model Engineering Support for Tool Interoperability</em>.
						In: Proceedings of the 4th Workshop in Software Model Engineering (WiSME 2005), Montego Bay, Jamaica.
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