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
	$pageTitle 		= "Verifying UML profiled models - User Guide";
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
			   	
		<hr class="clearer" />

		<div id="container>
			<p align="justify">
				<table border="3" width="100%" cellspacing="0" cellpadding="20">
					<tr><td align="justify" bgcolor="#b0c8f4">
						This user guide explains how to configure and launch the <a href="index.php">Verifying UML profiled models</a> ATL service in Papyrus.
					</td></tr>
				</table>
			</p>

			<p align="justify">
				The following procedure will configure and launch the transformation that validates the model against previously defined rules.
			</p>
			<p align="center">
				<img src="img/run.PNG" />
			</p>
			<p align="justify">
				First step is to create a new transformation configuration, using the <b>Run As</b> button.
			</p>
			<p align="center">
				<img src="img/configurationManager.PNG" />
			</p>
			<p align="justify">
				Thanks to the pop-up menu available on Papyrus transformation, you can create a new transformation configuration. This transformation configuration will contain all 
				necessary parameters for your transformation.
			</p>
			<p align="center">
				<img src="img/newConfiguration.PNG" />
			</p>
			<p align="justify">
				Thanks to the <b>Browse...</b> button in the Module group, the transformation module can be selected against all transformation modules available for Papyrus. In this use case, 
				please select the UML measures module.
			</p>
			<p align="center">
				<img src="img/moduleSelection.PNG" />
			</p>
			<p align="justify">
				The next step is to choose the uml file on which the transformation will run. The following window filters the proposed files using their extensions; you can only select 
				uml files.
			</p>
			<p align="center">
				<img src="img/sourceModelSelection.PNG" />
			</p>
			<p align="justify">
				The next step is the selection of the target folder. It is not possible to select a project yet. In fact, Papyrus transformations must be run into a folder (yellow folder 
				icons). This should be fixed in next versions of Papyrus tool. The selected folder will contain the results of the transformation. In this case, no result is expected, as 
				the markers are directly added to the uml file. Whatever, you have to choose a valid folder.
			</p>
			<p align="center">
				<img src="img/targetFolderSelection.PNG" />
			</p>
			<p align="justify">
				The following snapshot gives an example of what you should have just before launching the transformation. The transformation is launched using the <b>Run</b> button.
			</p>
			<p align="center">
				<img src="img/completeConfiguration.PNG" />
			</p>
			<p align="justify">
				This resulting model contains all the problems of the UML model.
				So, if this model is not empty (i.e. there are problems in the UML model) the problems will be displayed in the Eclipse Problems view.
			</p>
			<p align="center">
				<a href="img/errorsReporting.PNG" ><img src="img/errorsReporting_small.PNG" /></a>
			</p>
			
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