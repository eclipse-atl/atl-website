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
	$shortTitle		= "Sildex to Topcased SAM";
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
							TOPCASED, SAM, SILDEX, SIGNAL
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
							This use case presents the import of SILDEX models (a synchronous language based graphical modelling formalism developed by 
							<a href="http://www.tni-software.com/">TNI</a> and currently in use at <a href="http://www.airbus.com/en/">AIRBUS</a>) in the TOPCASED SAM modelling language.
							It was implemented in ATL by <a href="http://www.c-s.fr/">C-S</a> in the context of the TOPCASED project.
					 	</p>
						<p align="justify">
							SILDEX is a CASE tool supporting SIGNAL synchronous languages. It provides graphical and SIGNAL code editing of each process and relevant dataflow; formal proof with
	                        "synchronous compilation"; dynamic simulation; ADA, C and FORTRAN code generation, and documentation production. SILDEX was designed and tested in Smalltalk, then
            	            translated into C code with TNI's OpenTalk compiler. SILDEX targets critical real-time software developments.
					 	</p>
					 	<p align="justify">
					 		<a href="http://www.topcased.org/">TOPCASED</a> is an open-source workshop based on an Eclipse platform. Several editors are available:
					 		SAM, AADL, UML2, ECORE, and SYSML.
							It integrate several transformation services. These services are based on ATL language and toolkit. Model transformations have been mainly used in order to 
							access models defined using other editors than TOPCASED one's. Other services around models are	available like OCL editor and checker, comparison, merging, etc.
						</p>
						<p align="justify">
							<a href="http://gforge.enseeiht.fr/projects/topcased-sam/">TOPCASED-SAM</a> is a subproject of the TOPCASED project. This subproject provides a set of modeling, 
							transforming and verifying tools for functional structured analysis.
					 	</p>
						<p align="justify">
							A metamodel for SILDEX defining all the concepts that can be handled in TOPCASED SAM formalism has been defined. The SILDEX example below
							illustrates the communication of two sub-systems named "Producer" and "Consumer" via data flows and control flows connected on ports (not visible
							on the sub system "Consumer").
					 	</p>
					 	<p align="center">
	  						<img src="img/example.PNG" />
			  				<br /><br />
							<b>An example of communication between two sub-systems</b>
						</p>
						<p align="justify">
							This example illustrates the following notions: System, Data flows prefixed by FD_, Control flows prefixed by FC_, Ports that we specialised depending
							on their nature and their direction. To precise some relations, a system can contain sub systems, and a flow is linked by ports. The confrontation of the
							analysis of other examples allowed to extend the SAM metamodel whose simplified view is proposed in the following figure.
						</p>
					 	<p align="center">
	  						<img src="img/MMSAM.PNG" />
			  				<br /><br />
							<b>A simplified view of the SAM metamodel</b>
						</p>
						<p align="justify">
							SAM represents the new TOPCASED business metamodel for functional and automaton parts of SILDEX.
						</p>
						<p align="justify">
							After the creation of the source metamodel SILDEX and the target metamodel SAM, the TOPCASED process to make a transformation can be breakdown as follow:
							<ul>
								<li>first, the mapping of the concepts, </li>
								<li>then the writing of the ATL transformation rules and the automatic transformation by rule execution (also with ATL),</li>
								<li>at last, manual check of the result through the reading of the files obtained by the editors (in this use case TOPCASED SAM Editor).</li>
							</ul>
						</p>
					 	<p align="center">
	  						<img src="img/atlRules.PNG" />
			  				<br /><br />
							<b>Excerpt of the ATL transformation: Sildex to SAM</b>
						</p>
						<p align="justify">
							Today the TOPCASED service to transform SILDEX models to SAM models is operational and used by AIRBUS France. More information on this work can be found in [1].
						</p>
						<p align="center">
	  						<img src="img/SAMEditor.PNG" />
			  				<br /><br />
							<b>Screenshot of SAM Editor</b>
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
						[1]
					</td>
					<td>
						Canals, A.; Le Camus, C.; Feau, M.; et al.:
						<em>An Operational Use of ATL: Integration of Model and Meta Model Transformations in the TOPCASED Project</em>.
						In: DASIA 2006 - Data Systems in Aerospace, Proceedings of the conference held 22-25 May, 2006 in Berlin, Germany. 
						Edited by L. Ouwehand. ESA SP-630. European Space Agency, 2006. Published on CDROM., p.40.1
					</td>
				</tr>
				<tr valign="top">
					<td>
						<a name="[2]" href="http://www.sciences.univ-nantes.fr/lina/atl/www/papers/eTX2006/21-MarcPantel.pdf">
							[2]
						</a>
					</td>
					<td>
						Patrick Farail, Pierre Gaufillet, Agusti Canals, Christophe Le Camus, David Sciamma, Pierre Michel, Xavier Crégut, Marc Pantel:
						<em>The TOPCASED project: a Toolkit in Open source for Critical Aeronautic SystEms Design</em>.
						In: Proceedings of the Eclipse Technology eXchange workshop (eTX) at ECOOP 2006.
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
					By Agusti Canals (<a href="http://www.c-s.fr/">C-S</a>), Chistophe Le Camus (<a href="http://www.c-s.fr/">C-S</a>), 
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