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
	$pageTitle 		= "ATL Use Case - QVT to ATL Virtual Machine Compiler";
	$pageKeywords	= "OMG, QVT, ATL, Virtual Machine, VM, Compiler";
	$pageAuthor		= "Fr�d�ric Jouault";
	
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

		<div>
			<p align="justify">
				This work provides a QVT compiler that targets the ATL Virtual Machine (ATL VM), and thus provides executability of QVT programs on top of the ATL VM.
				The code generator is written in the ACG (<span style="font-variant: small-caps;">Atl</span> Code Generation) Domain-Specific Language (DSL).
				It takes as input a QVT model (typically in XMI format) that may have been created by a QVT front-end (i.e., a parser and type checker) like <a href="http://www.eclipse.org/m2m/">Eclipse/modeling/m2m/</a>Procedural QVT, or <a href="http://smartqvt.elibel.tm.fr/">SmartQVT</a>.
				The output of the code generator is a ".asm" file similar to the ones generated by the ATL compiler, or the ACG compiler (both also written in ACG).
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
							<a href="http://www.omg.org/">OMG</a>, 
							<a href="http://www.omg.org/technology/documents/modeling_spec_catalog.htm#MOF_QVT">QVT</a>, 
							<a href="http://en.wikipedia.org/wiki/Virtual_machine">Virtual Machine, VM</a>,
							<a href="http://en.wikipedia.org/wiki/Compiler">Compiler</a>,
							<a href="http://en.wikipedia.org/wiki/Code_generator">Code Generator</a>.
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
							This work provides an implementation of one of the QVT-ATL interoperability bridges described in <a href="#[1]">[1]</a>: a QVT to ATL Virtual Machine compiler.
							This corresponds to the <em>OM to VM</em> arrow on the following figure, taken from <a href="#[1]">[1]</a>.
				    	</p>
						<p align="center">
			  				<img src="ATL-QVT interoperability.png" />
					  		<br /><br />
							<b>ATL-QVT interoperability through language transformation</b>
						</p>
						<p align="justify">
							This use case relies on a QVT front-end (i.e., a parser and type checker) like <a href="http://www.eclipse.org/m2m/">Eclipse/modeling/m2m/</a>Procedural QVT, or <a href="http://smartqvt.elibel.tm.fr/">SmartQVT</a>.
							This front-end generates a QVT model (typically in XMI format) from a QVT program.
							Then, a code generator written in the ACG (<span style="font-variant: small-caps;">Atl</span> Code Generation) DSL transforms this model into ATL bytecode (i.e., a ".asm" file) that can run on the ATL VM.
							The current version of this code generator is able to compile the Book2Publication QVT example, and has been tested using the SmartQVT front-end.
				    	</p>
						<p align="justify">
							ACG is a domain-specific model transformation language.
							Its domain is ATL VM bytecode generation (i.e., a fixed target metamodel).
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
						<a name="[1]" href="http://www.sciences.univ-nantes.fr/lina/atl/bibliography/SAC06a">
							[1]
						</a>
					</td>
					<td>
						Jouault, F, and Kurtev, I:
						<em>On the Architectural Alignment of ATL and QVT</em>.
						In: Proceedings of the 2006 ACM Symposium on Applied Computing (SAC 06). ACM Press, Dijon, France, chapter Model transformation (MT 2006), pages 1188&ndash;1195. 2006.
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
					<td align="center"><a href="http://www.eclipse.org/atl/atlTransformations/#QVT2ATLVM"><h3>Complete scenario</h3></a></td>
					<td>Scenario QVT to ATL VM available in the ATL transformation zoo (with source files).</td>
				</tr>
				<tr>
					<td align="center"><a href="http://www.eclipse.org/gmt/am3/zoos/atlanticZoo/#QVT"><h3>QVT metamodel</h3></a></td>
					<td>Full QVT metamodel specified in KM3.</td>
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
						The present work is being supported by the <a href="http://www.modelplex-ist.org/">ModelPlex european project</a>,
						the FLFS ANRT project (Families of Language for Families of Systems),
						the <a href="http://openembedd.inria.fr/home_html-en?set_language=en&cl=en">OpenEmbeDD project</a>,
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
				<li style="list-style:none">June 2007</li>
				<li style="list-style:none">
					By 
					<a href="http://www.sciences.univ-nantes.fr/lina/atl/contrib/jouault">Fr�d�ric Jouault</a> (INRIA)
				</li>
				<li style="list-style:none"><br />Please, ask your questions on the <a href="news://news.eclipse.org/eclipse.modeling.m2m">M2M newsgroup</a></li>
			</ul>
		</div>
	</div>
	
EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>