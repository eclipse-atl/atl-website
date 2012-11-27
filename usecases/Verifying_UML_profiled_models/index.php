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
	$shortTitle		= "Verifying UML profiled models";
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
		<a href="http://www.papyrusuml.org/"><img align="right" src="../../images/Papyrus_48x48.gif" valign="top" style="padding-left: 10px;" alt="Papyrus" /></a>
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
				This use case shows how to integrate a model transformation service in a UML Modeler to verify a UML profiled model.
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
							UML Profile,
							Verification,
							Naming convention,
							Error reporting
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
							<a href="http://www.papyrusuml.org/">Papyrus</a> is a dedicated tool for UML2 graphical modelling mainly developed by <a href="http://www-list.cea.fr/">CEA LIST</a>.
					 		It integrates the ATL engine. This use case shows how the coupling of ATL and Papyrus may allow to verify UML profiled models.
					 	</p>
					 	<p align="justify">
							In the context of this use case, a sample UML profile and a sample UML model applying this profile have been modeled with Papyrus. For this UML profiled model, we provide a service that 
							will check if the UML model complies to some conventions. The conventions are defined by the ATL transformation "SampleUMLProfile to Problem".
							The figures below present the profile and the UML model used here:
						</p>
						<div align="center">
							<table width="100%">
								<tr valign="top">
									<td align="center" width="50%">
										<img src="img/sampleProfile.PNG" />
						  				<br /><br />
										<b>Sample profile</b>
									</td>
			  						<td align="center" width="50%">
			  							<img src="img/sampleModel.PNG" />
			  							<br /><br />
										<b>Sample UML model using the Sample profile</b>
			  						</td>
			  					</tr>
			  				</table>
						</div>
					 	<p align="justify">
							For all the models using the sample profile, we want to check some properties (e.g. naming convention).
							To do this, we will define an ATL model transformation to check these conventions associated to the Sample profile.
							If an element of a UML model does not respect a convention, a problem element (e.g. warning, error) will be created.
							For example, if we want to forbid the value "value1" for the property "myProperty" this could be done by the following ATL code:
						</p>
						<p align="justify">
	  						<img src="img/rule1.PNG" />
						</p>
						<p align="justify">
							The following ATL rule will verify if all the classes with stereotype MyStereotype have a name starting by 'Sample_'.
							If not, a warning problem will be created with the following text "Class name should start with Sample_ to respect sample convention".
						</p>
						<p align="justify">
	  						<img src="img/rule2.PNG" />
						</p>
						<p align="justify">
							To see how to configure and run the "Verification UML Profiled Model" ATL service, please take a look to the <a href="userGuide.php">User Guide</a>.
						</p>
						<p align="justify">
							This resulting model contains all the problems of the UML model.
							So, if this model is not empty (i.e. there are problems in the UML model) the problems will be displayed in the Eclipse Problems view.
						</p>
						<p align="center">
	  						<a href="img/errorsReporting.PNG" ><img src="img/errorsReporting_small.PNG" /></a>
			  				<br /><br />
							<b>Result of error reporting</b>
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
					<td align="center"><a href="http://www.papyrusuml.org/"><img src="../../images/Papyrus_48x48.gif" /></a></td>
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
				<tr>
					<td align="center"><h3><a href="SampleProject4Verification.zip">Sample Project</a></h3></td>
					<td>Sample project with a UML profile and a UML model applying this profile to test the implementation of this use case in Papyrus.</td>
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