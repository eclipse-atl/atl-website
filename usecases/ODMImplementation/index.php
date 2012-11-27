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
	$shortTitle		= "ODM Implementation (Bridging UML and OWL)";
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
				This work presents an implementation of the OMG ODM (Ontology Definition Metamodel) proposal using the ATL language. This work is made by the SIDo Group from the 
				<a href="http://www.univ-lr.fr/labo/l3i/site_statique/Index.html">L3I</a> lab in La Rochelle.
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
							Ontology,
							<a href="http://www.uml.org">UML 2.0</a>,
							<a href="http://www.w3.org/2004/OWL">OWL</a>,
							<a href="http://www.omg.org/ontology">ODM</a>,
							<a href="http://protege.stanford.edu/">Prot&eacute;g&eacute;</a>,
							<a href="http://www.eclipse.org/modeling/mdt/?project=eodm">EODM</a>
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
						This use case presents an implemented solution to the OMG Ontology Definition Metamodel (ODM) specification. 
						ODM offers a set of metamodels and mappings for bridging the metamodeling world and the ontologies. The present  
						solution supports the UML 2.0 metamodel and the OWL metamodel as defined in ODM.
						</p>
						<p align="justify">
						The ODM is a recently adopted standard from the Object Management Group that supports ontology development and 
						conceptual modeling in several standard representation languages. It provides a coherent framework for ontology 
						creation based on MOF (Meta Object Facility) and UML (Unified Modeling Language).  In this way it plays a central  
						role for bridging Model Driven Architecture based standards and Semantic Web technologies.
						</p>
						<p align="center">
	  						<img src="img/UMLOWLBridge.png" />
			  				<br /><br />
							<b>ODM Overview</b>
						</p>
						<p align="justify">
						<b>ODM</b> defines five metamodels (RDFS, OWL, Topic Maps, Common Logic and Description Logic), two UML Profiles 
						(RDFS/OWL Profile, Topic Maps Profile) and a set of QVT mappings from UML to OWL, Topic Maps to OWL and 
						RDFS/OWL to Common Logic. At this current time, we have implemented two of these metamodels, RDFS and OWL in 
						KM3 and the UML Profile for RDFS/OWL. We have also implemented the mapping between UML and OWL by using ATL.
						</p>
						<p align="justify">
						<b>UML</b> is the most used and known language to model application structure, behaviour and architecture but also 
						business process and data structure. UML is an OMG specification currently in version 2.0. The UML metamodel used 
						in this case study is the one available under the UML eclipse project (eclipse.org/uml2). By using this metamodel 
						we insure that models used by our transformation can be created by different UML tools supporting current UML 2.0 
						specification.
						</p>
						<p align="justify">
						<b>OWL</b> (Web Ontology language) is the most expressive language for representing and sharing ontologies over the Web. 
						OWL is designed for use by applications that need to process the content of information instead of just presenting 
						information. It facilitates greater machine interoperability of Web content than other description languages like 
						XML, RDF and RDF-S by providing additional vocabulary along with a formal semantics.
						</p>
						<p align="justify">
						The OWL metamodel is implemented in by extending the RDFS metamodel. The figure below shows an excerpt of the class 
						hierarchy present in OWL. An OWL Class is a kind of RDFS Class, like OWL Property are kind of RDF 
						Property. OWL offers a richer semantic to express ontologies. With it we can define cardinalities on properties, defined classes with set operators like union, intersection, complement, etc. 
						The notion of Individual in OWL is used to represent resources, i.e. class instances. Each element is identified by a unique URI identifier.
						<p align="center">
	  						<img src="img/OWL.png" />
			  				<br />
			  				<br />
							<b>OWL Metamodel: hierarchy concept excerpt</b>
					  	</p>
						</p>
						<p align="justify">
						The ATL transformation <b>UML2OWL</b> has been implemented according to the ODM specification, i.e. corresponding QVT 
						mapping. This transformation made possible the conversion of an arbitrary UML model into OWL ontology. The 
						complete scenario of this transformation is given in figure below.
						</p>
						<p align="center">
	  						<a href="img/UML2OWL.png"><img src="img/UML2OWL.png" width="650" /></a>
			  				<br />
			  				<br />
							<b>UML2OWL complete transformation scenario</b>
				  	  	</p>
					  <p align="justify">
					  This scenario is composed of 2 ATL transformations: the core transformation UML2OWL takes has input a UML 
					  model and produces an ontology conforms to the OWL metamodel. The second transformation is an XML extractor that 
					  produces an XML document conforms to the OWL/XML syntax, as defined by the W3C specification.					  </p>
					  <p align="justify">The core transformation includes two distinct parts. The first part is dedicated to the mapping from UML model 
					  to ontology, i.e. UML classes are mapped into OWL classes, attributes into datatype property, associations into object property, etc.
					  The second part of the transformation deals with instances. For simplicity and demonstration reason we choose to define instances in the same class diagram as the UML model. Those instances are converted  into OWL individuals (OWL term for instances). 
					  This method  offers the possibility to manage UML instances and populate the ontology with  corresponding knowledge. An improved method to deal with instances should be provide soon.</p>
					  <p>A UML model representing a museum is given below and serve as a  running example for this use case.  </p>
					  	<p align="center">
	  						<a href="img/MuseumUML.png"><img src="img/MuseumUML.png" width="650" /></a>
			  				<br />
			  				<br />
							<b>Museum Model </b>
				  	  	</p>
					  <p>The UML2OWL transformation can produce an OWL model in ecore format or an OWL document conform to the OWL/XML presentation syntax. To obtain this XML file, we have implemented  an OWL/XML extractor that transforms a model conforms to the OWL metamodel into  an owl document.This will let you use obtained OWL files under ontology tools like Prot&eacute;g&eacute;. An  excerpt of the Museum ontology produced by the UML2OWL transformation from the  Museum UML Model is given below. In this excerpt you should notice the presence of a class Painter and one of its Individual representing Picasso. </p>
					  	<p align="center">
	  						<a href="img/MuseumOWL.PNG"><img src="img/MuseumOWL.PNG" width="650" /></a>
			  				<br />
			  				<br />
							<b>Museum ontology excerpt in OWL/XML format </b>
				  	  	</p>
					    <p align="justify">
					  This use case demonstrates the feasibility to implement the ODM specification, especially the UML to OWL mapping by 
					  using AMMA tools. This ATL scenario provides a solution for bridging modeling tools based on UML or MOF (e.g. MDA 
					  Tools) and tools for the Semantic Web and ontology development.
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
					<td align="center"><a href="http://www.eclipse.org/atl/atlTransformations/#UML2OWL"><h3>Complete scenario</h3></a></td>
					<td>Scenario available in the ATL transformation zoo (with source files).</td>
				</tr>
				<tr>
					<td align="center"><a href="http://www.eclipse.org/gmt/am3/zoos/atlanticZoo/#OWL"><h3>OWL Metamodel</h3></a></td>
					<td>OWL metamodel is expressed in the <a href="http://wiki.eclipse.org/index.php/KM3">KM3</a> textual format.</td>
				</tr>
				<tr>
					<td align="center"><a href="http://www.eclipse.org/uml2"><h3>UML 2.0</h3></a></td>
					<td>The UML 2.0 Metamodel in Ecore XMI 2.0 format is available with the UML2 plugin.</td>
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
						This work is granted by the General Council of <a href="http://wwww.charente-maritime.fr/">Charente Maritime</a> (Conseil General de Charente Maritime).
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
				<li style="list-style:none">By <a href="mailto:g <dot> hillairet <at> gmail <dot> com">Guillaume Hillairet</a> (L3I)</li>
			</ul>
		</div>
	</div>
	
EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>