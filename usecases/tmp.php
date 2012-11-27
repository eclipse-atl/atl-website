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
	$pageTitle 		= "ATL Use Cases";
	$pageKeywords	= "";
	$pageAuthor		= "Freddy Allilaire";
	
	# End: page-specific settings
	#

		
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML

	<!-- Main part -->
	<div id="midcolumn">
		<h1><font color='#280882'>ATL</font> Use Cases</h1>


	    <div class="homeitem3col" >
			<h3>List of use cases</h3>
	    	<ul>	
				<li style="list-style:none"> 	    			
	    		<table width="100%">
					<tr>
						<td width="30%" valign="middle">
					   		<h2> <a href="GenerateGraphicalViewForMetamodel/">Generate Graphical View For a Metamodel</a> </h2>
		  				</td>
						<td width="60%" align="justify">
							Having a graphical presentation of a metamodel can be sometimes enlightening in comparison with a textual presentation.
							KM3 is a textual concrete syntax to describe metamodels and to define Domain Specific Languages.
							A metamodel created with KM3 does not include any representation information.
							This use case describes the automatic generation of a visual presentation for a metamodel written in KM3.
						</td>
						<td width="10%" valign="middle" align="right">
					    	<img src="../../../gmt/resources/images/implementation.png" />
		  				</td>
					</tr>
				</table>
	    		</li>
				<li style="list-style:none"> 	    			
	    		<table width="100%">
					<tr>
						<td width="30%" valign="middle">
					   		<h2> <a href="GenerationSVGOfUMLClassDiagram/">Generation of Vector Graphic (SVG) Representation of UML Class Diagram</a> </h2>
		  				</td>
						<td width="60%" align="justify">
							This use case describes the automatic generation of a vector graphic representation for a UML class diagram. This UML diagram has its presentation information according 
							to the UML Diagram Interchange standard, to its presentation using the W3C standard SVG (Scalable Vector Graphics), an XMLbased format. The SVG file may be exported 
							towards another graphical format, or viewed as is.
						</td>
						<td width="10%" valign="middle" align="right">
					    	<img src="../../../gmt/resources/images/implementation.png" />
		  				</td>
					</tr>
				</table>
	    		</li>
				<li style="list-style:none"> 	    			
	    		<table width="100%">
					<tr>
						<td width="30%" valign="middle">
					   		<h2> <a href="BridgeRDBSchemaToMetamodel/">Bridge between Relational Database Schema and Metamodel</a> </h2>
		  				</td>
						<td width="60%" align="justify">
							This use case aims to demonstrate the possibility to translate data structure description from the <i>RDBMS world</i> to the modeling technical space.
						</td>
						<td width="10%" valign="middle" align="right">
					    	<img src="../../../gmt/resources/images/implementation.png" />
		  				</td>
					</tr>
				</table>
	    		</li>
				<li style="list-style:none">
	    		<table width="100%">
					<tr>
						<td width="30%" valign="middle">
					   		<h2> <a href="BridgingGrafcetPetrinetPNML/">Bridging Grafcet, Petrinet, and PNML</a> </h2>
		  				</td>
						<td width="60%" align="justify">

						</td>
						<td width="10%" valign="middle" align="right">
					    	<img src="../../../gmt/resources/images/implementation.png" />
		  				</td>
					</tr>
				</table>
	    		</li>
	    	</ul>
	    </div>
		<hr class="clearer" />
	</div>

	<div id="rightcolumn">

	</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
