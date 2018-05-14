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



<div id="primaryLinks">
	<h3>Primary Links</h3>
	<ul>
		<li>
			<a id="buttonDownload" href="../downloads" title="Download">
				<strong>Download</strong> Eclipse Distribution, Update Site, Dropins
			</a>
		</li>
		<li>
			<a id="buttonDocumentation" href="../documentation" title="Documentation">
				<strong>Documentation</strong> Tutorials, Examples, Videos, Reference
			</a>
		</li>
		<li>
			<a id="buttonSupport" href="../support" title="Support">
				<strong>Support</strong> Bug Tracker, Newsgroup, Support
			</a>
		</li>
		<li>
			<a id="buttonInvolved" href="../developers" title="Getting Involved">
				<strong>Getting Involved</strong> Git, Workspace Setup, Wiki, Committers
			</a>
		</li>
	</ul>
</div>

	<!-- Main part -->
	<div id="midcolumn">
		<h1><font color='#280882'>ATL</font> Use Cases</h1>

		<a name="goals"></a>

    	<p align="justify">
    		This section provides a set of ATL model transformation use cases covering different domains of application. These use cases are concrete examples of how model to model transformation (M2M)
    		can be applied. Some of these use cases will be simple ones, some others will be more elaborated and will reuse basic use cases or parts of other ones.
    	</p>
    	
    	<p align="justify">
			Other Eclipse projects have use case section as well for example <a href="http://www.eclipse.org/gmt/amw/usecases/">AMW</a> or 
			<a href="http://www.eclipse.org/gmt/modisco/useCases/">MoDisco</a> (GMT components).
		</p>    	

    	<p align="justify">
			A general description is given for each of these use cases, as well as some more precise documentations. For many of them, prototypes have already been implemented and are directly 
			downloadable from this website. 
		</p>    	

		<p align="justify">
			The general status of each of the provided use cases is indicated by one of the following icon:
			<table width="100%">
				<tr>
					<td align="center"><img src="../images/specification.png" /> <b>Specification Only</b></td>
		    		<td align="center"><img src="../images/implementation.png" /> <b>Partially Implemented</b></td>
		    		<td align="center"><img src="../images/completion.png" /> <b>Reaching Completion</b></td>
				</tr>
			</table>
		</p>

		<hr class="clearer" />

			<h3>List of use cases</h3>
	    	<ul>	
	    		<li style="list-style:none"> 	    			
	    		<table width="100%">
					<tr>
						<td width="30%" valign="middle">
				    		<h2> <a href="DSLsTelephony/">DSLs coordination for Telephony</a> </h2>
	  					</td>
						<td width="60%" align="justify">								
							This work presents a case study of implementing two telephony languages: SPL and CPL. They are partially based on similar vocabularies.
							However they are very different and have been designed to be used by different people.
							The use case shows how M2M transformations may be used to map programs conforming to SPL or CPL at different abstraction levels.
						</td>
						<td width="10%" valign="middle" align="right">
					   		<img src="../images/completion.png" />
		  				</td>
					</tr>
				</table>
				</li>
	    		<li style="list-style:none"> 	    			
	    		<table width="100%">
					<tr>
						<td width="30%" valign="middle">
				    		<h2> <a href="ModelAdaptation/">Model Adaptation</a> </h2>
	  					</td>
						<td width="60%" align="justify">								
							 The evolution of a metamodel may render its related terminal models invalid. 
							 This use case proposes a three-step solution that automatically adapts terminal models to their evolving metamodels.
							 The main contribution is the precise detection of metamodel changes by using the <a href="http://wiki.eclipse.org/AML">AtlanMod Matching Language (AML)</a>, a DSL built on top
							 of ATL and AMW. The running example is the Petrinet models.
						</td>
						<td width="10%" valign="middle" align="right">
					   		<img src="../images/completion.png" />
		  				</td>
					</tr>
				</table>
				</li>
				<li style="list-style:none">
	    		<table width="100%">
					<tr>
						<td width="30%" valign="middle">
					   		<h2> <a href="SimplePDL2Tina/">Models Validation through Petri nets</a> </h2>
		  				</td>
						<td width="60%" align="justify">
							This work presents a use case of model transformation using ATL rules to validate MDD's models.
							This use case considers a simplified process description language, SimplePDL. It then presents a property-driven approach
							in which SimplePDL process models are translated into Petri nets. SimplePDL behavioral properties 
							are expressed on corresponding Petri nets in LTL (<i>Linear Temporal Logic</i>).
							The Tina toolkit and, in particular, its model-checker, are used to validate process models by checking the expressed properties.
							This use case has been done by <a href="http://combemale.perso.enseeiht.fr/">Benoit Combemale</a> (<a href="http://www.irit.fr">IRIT</a>). This is a collaboration between 
							<a href="http://www.irit.fr">IRIT</a> and <a href="http://www.laas.fr/">LAAS</a> labs in Toulouse, France.
						</td>
						<td width="10%" valign="middle" align="right">
					    	<img src="../images/completion.png" />
		  				</td>
					</tr>
				</table>
	    		</li>
				<li style="list-style:none">
	    		<table width="100%">
					<tr>
						<td width="30%" valign="middle">
					   		<h2> <a href="SharingRulesBetweenOCLUML_SWRLOWL/">Sharing Rules Between OCL/UML and SWRL/OWL</a> </h2>
		  				</td>
						<td width="60%" align="justify">
					    	This work presents an implementation of sharing rules between two rule languages from different domains: OCL (Object Constraint Language) together with UML and SWRL 
					    	(Semantic Web Rule Language) together with OWL. For this integration we used the R2ML (REWERSE I1 Rule Markup Language) metamodel as pivotal metamodel. The R2ML is a 
					    	general Web rule markup language and it can represent different rule types: integrity, reaction, derivation and production. This work has been done by 
					    	<a href="http://milan.milanovic.org">Milan Milanovic</a> in collaboration 
					    	between the <a href="http://goodoldai.org.yu/">GOOD OLD AI Laboratory</a> at <a href="http://www.bg.ac.yu">University of  Belgrade</a>, 
					    	<a href="http://www.sfu.ca/siat" target="_self">School of Interactive Arts and Technology</a> at 
					    	<a href="http://www.surrey.sfu.ca" target="_self">Simon Fraser University Surrey</a> in Canada and 
					    	<a href="http://oxygen.informatik.tu-cottbus.de/IT/">Chair of Internet Technology</a> at 
					    	<a href="http://www.tu-cottbus.de/">Brandenburg University of Technology at Cottbus</a> in Germany.
						</td>
						<td width="10%" valign="middle" align="right">
					    	<img src="../images/completion.png" />
		  				</td>
					</tr>
				</table>
	    		</li>
				<li style="list-style:none">
	    		<table width="100%">
					<tr>
						<td width="30%" valign="middle">
					   		<h2> <a href="FIACRE2LOTOS/">Compiling a new formal verification language to LOTOS (ISO 8807)</a> </h2>
		  				</td>
						<td width="60%" align="justify">
							In this use case, we translate <a href="http://www-sop.inria.fr/oasis/fiacre/">FIACRE</a> programs into
							<a href="http://www.inrialpes.fr/vasy/cadp/">LOTOS</a> (<a href="http://www.iso.org/iso/iso_catalogue/catalogue_tc/catalogue_detail.htm?csnumber=16258">ISO 8807</a>) programs, which can then be verified using the <a href="http://www.inrialpes.fr/vasy/cadp/">CADP</a> toolbox.
							This work is the result of the cooperation of two INRIA teams: <a href="http://www.sciences.univ-nantes.fr/lina/atl/">ATLAS</a> (Nantes), and <a href="http://www.inrialpes.fr/vasy/">VASY</a> (Grenoble),
							in the context of the <a href="http://openembedd.inria.fr/">OpenEmbeDD</a> project.
						</td>
						<td width="10%" valign="middle" align="right">
					    	<img src="../images/completion.png" />
		  				</td>
					</tr>
				</table>
	    		</li>
				<li style="list-style:none">
	    		<table width="100%">
					<tr>
						<td width="30%" valign="middle">
					   		<h2> <a href="ModelsMeasurement/">Models Measurement</a> </h2>
		  				</td>
						<td width="60%" align="justify">
							This use case shows how to compute and generate measures on KM3 metamodels or UML2 models, and how to display them in different way (HTML, and SVG).
							This work has been done in collaboration between <a href="http://www.sodius.com">SODIUS</a> and the 
							<a href="http://www.sciences.univ-nantes.fr/lina/atl/">ATLAS Group</a>.	As a complementary application to this contribution, an online service is provided at SODIUS's web site under the name "MC-Meter".
							The online measurement service is available at: <a href="http://www.mdworkbench.com/measuring.php">http://www.mdworkbench.com/measuring.php</a>
						</td>
						<td width="10%" valign="middle" align="right">
					    	<img src="../images/completion.png" />
		  				</td>
					</tr>
				</table>
	    		</li>
				<li style="list-style:none">
	    		<table width="100%">
					<tr>
						<td width="30%" valign="middle">
					   		<h2> <a href="webapp.modeling/">Modeling Web applications</a> </h2>
		  				</td>
						<td width="60%" align="justify">
							This use case shows how model weaving is used to help in the development of model transformations. In some cases, the gap between the input and output metamodels 
							makes it difficult to develop a model transformation that works for every input model. In such cases a weaving model can be used to enrich the input model by 
							<b>annotation</b>. This process can be thought of as a way to <i>parameterize</i> the model transformation.
						</td>
						<td width="10%" valign="middle" align="right">
					    	<img src="../images/completion.png" />
		  				</td>
					</tr>
				</table>
	    		</li>
				<li style="list-style:none">
	    		<table width="100%">
					<tr>
						<td width="30%" valign="middle">
					   		<h2> <a href="VisualRepCodeClone/">Visual Representation for Code Clone Tools</a> </h2>
		  				</td>
						<td width="60%" align="justify">
							The aim of this use case is to realize a uniform visual representation for different code clone detection tools. 
							Different analysis results provided by different code clone detection tools can be injected into models. These models will be transformed to a generic Code Clone DSL model,
							and then into SVG model. Finally, the SVG code can be automatically extracted from SVG model.
						</td>
						<td width="10%" valign="middle" align="right">
					    	<img src="../images/completion.png" />
		  				</td>
					</tr>
				</table>
	    		</li>
				<li style="list-style:none">
	    		<table width="100%">
					<tr>
						<td width="30%" valign="middle">
					   		<h2> <a href="MDL2GMF/">Rational Rose to UML2 Tools</a> </h2>
		  				</td>
						<td width="60%" align="justify">
							This use case shows how we can reuse UML projects created with Rational Rose and import them in GMF (specifically in UML2 Tools) using ATL transformations. 
							In this use case, we only support UML class diagrams. In practice, this use case was applied to the QVT metamodel available on the OMG site.
						</td>
						<td width="10%" valign="middle" align="right">
					    	<img src="../images/completion.png" />
		  				</td>
					</tr>
				</table>
	    		</li>
	    		<li style="list-style:none">
	    		<table width="100%">
					<tr>
						<td width="30%" valign="middle">
					   		<h2> <a href="UML2AnyLogic/">Model Driven Performance Engineering: From UML/SPT to AnyLogic</a> </h2>
		  				</td>
						<td width="60%" align="justify">
							This use case presents a transformation from annotated UML activity diagrams to AnyLogic simulation models. 
							The actions and control flows in activity diagrams are annotated with performance information utilizing the UML profile for schedulability, performance, and timing (SPT). 
							This information is used to generate a simulation model that can be executed by the AnyLogic simulation tool from XJ Technologies. 
							Such simulations can help to identify performance issues early in a software design process.
							This use case has been done by <a href="http://jjohannes.de/">Jendrik Johannes</a> (<a href="http://tu-dresden.de/">TU Dresden</a>) and its development has been supported by the <a href="http://www.modelplex-ist.org">IST European MODELPLEX project</a> (MODELing solution for comPLEX software systems, FP6-IP 34081).
						</td>
						<td width="10%" valign="middle" align="right">
					    	<img src="../images/completion.png" />
		  				</td>
					</tr>
				</table>
	    		</li>
	    		<li style="list-style:none">
	    		<table width="100%">
					<tr>
						<td width="30%" valign="middle">
					   		<h2> <a href="Syntax2SBVR2UML/">Production of UML class diagrams from syntactical models of english text or SBVR models</a> </h2>
		  				</td>
						<td width="60%" align="justify">
							This work presents a case study of obtaining a UML class diagram from a syntactical analysis of a text using SBVR as an intermediate layer. We show how it is 
							possible, with the help of model engineering, to realize two transformations: from a syntactical model into a SBVR model, and from a SBVR model into a UML model. 
							This work has been done in collaboration between the ATLANMOD team in Nantes and the ILOG company.
						</td>
						<td width="10%" valign="middle" align="right">
					    	<img src="../images/completion.png" />
		  				</td>
					</tr>
				</table>
	    		</li> 
				<li style="list-style:none">
	    		<table width="100%">
					<tr>
						<td width="30%" valign="middle">
					   		<h2> <a href="QVT2ATLVM/">QVT to ATL Virtual Machine Compiler</a> </h2>
		  				</td>
						<td width="60%" align="justify">
    						This work provides a QVT compiler that targets the ATL Virtual Machine (ATL VM), and thus provides executability of QVT programs on top of the ATL VM.
							The code generator is written in the ACG (<span style="font-variant: small-caps;">Atl</span> Code Generation) Domain-Specific Language (DSL).
							It takes as input a QVT model (typically in XMI format) that may have been created by a QVT front-end (i.e., a parser and type checker) like <a href="http://www.eclipse.org/m2m/">Eclipse/modeling/m2m/</a>Procedural QVT, or <a href="http://smartqvt.elibel.tm.fr/">SmartQVT</a>.
							The output of the code generator is a ".asm" file similar to the ones generated by the ATL compiler, or the ACG compiler (both also written in ACG).
						</td>
						<td width="10%" valign="middle" align="right">
					   		<img src="../images/implementation.png" />
		  				</td>
					</tr>
				</table>
	    		</li>
				<li style="list-style:none"> 	    			
	    		<table width="100%">
					<tr>
						<td width="30%" valign="middle">
					   		<h2> <a href="MMIndApproachtoDiffRep/">A Metamodel Independent Approach to Difference Representation</a> </h2>
		  				</td>
						<td width="60%" align="justify">								
							This work presents an ATL implementation of a metamodel independent approach to the representation of model differences which is agnostic of
							the calculation method. Given two models being differenced which conform to a metamodel, their difference is conforming to another metamodel
							derived from the former by an automated transformation. Interestingly, difference models are first-class artifacts which in turn induce other
							transformations, such that they can be applied to one of the differenced models to automatically obtain the other one.
							This work has been done by <a href="http://www.di.univaq.it/~cicchetti">Antonio Cicchetti</a>,
							<a href="http://www.di.univaq.it/~diruscio">Davide Di Ruscio</a> and
							<a href="http://www.di.univaq.it/~alfonso">Alfonso Pierantonio</a> (Universit&agrave; dell'Aquila).
						</td>
						<td width="10%" valign="middle" align="right">
					   		<img src="../images/implementation.png" />
		  				</td>
					</tr>
				</table>
				</li>
				<li style="list-style:none"> 	    			
	    		<table width="100%">
					<tr>
						<td width="30%" valign="middle">
					   		<h2> <a href="SoftwareQualityControlToolsInteroperability/">Software Quality Control Tools Interoperability (Bugzilla, Mantis, Excel)</a> </h2>
		  				</td>
						<td width="60%" align="justify">								
							Problems of tools interoperability can be found in various domains. Software quality control is one of these.
							This use case presents an implementation of bridges between different bug tracking tools like Bugzilla, and Mantis.
							We also consider that bug tracking information may be handled in a generic tool like Excel.
						</td>
						<td width="10%" valign="middle" align="right">
					   		<img src="../images/implementation.png" />
		  				</td>
					</tr>
				</table>
				</li>
				<li style="list-style:none"> 	    			
	    		<table width="100%">
					<tr>
						<td width="30%" valign="middle">
					   		<h2> <a href="BridgeBetweenBuildTools/">Software Build Tools Interoperability (Make, Ant, Maven)</a> </h2>
		  				</td>
						<td width="60%" align="justify">
							<i>Make</i> is one of the most common build tool. It remains widely used but essentially in Unix-based platforms. Many problems have surfaced with scaling <i>Make</i> to work 
							with modern, large software projects. So, it is interesting to provide some bridges from <i>Make</i> to other build tools like <i>Ant</i> (which is popular for Java development 
							and uses an XML file format) and <i>Maven</i> (a Java tool for management project and automated software build).
						</td>
						<td width="10%" valign="middle" align="right">
					    	<img src="../images/implementation.png" />
		  				</td>
					</tr>
				</table>
	    		</li>
	    		<li style="list-style:none"> 	    			
	    		<table width="100%">
					<tr>
						<td width="30%" valign="middle">
					   		<h2> <a href="WebSyndicationInteroperability/">Web Syndication Interoperability (RSS and Atom)</a> </h2>
		  				</td>
						<td width="60%" align="justify">
							People who generate web syndication feeds have a choice of formats. Today, the two most likely candidates are RSS 2.0 and Atom 1.0.
							The goal of this case study is to provide a bridge between both formats by using a light and flexible interoperability solution.
						</td>
						<td width="10%" valign="middle" align="right">
					    	<img src="../images/implementation.png" />
		  				</td>
					</tr>
				</table>
	    		</li>
				<li style="list-style:none">
	    		<table width="100%">
					<tr>
						<td width="30%" valign="middle">
					   		<h2> <a href="ODMImplementation/">ODM Implementation (Bridging UML and OWL)</a> </h2>
		  				</td>
						<td width="60%" align="justify">
							This use case presents an implemented solution to the OMG Ontology Definition Metamodel (ODM) specification. 
							ODM offers a set of metamodels and mappings for bridging the metamodeling world and the ontologies. The present  
							solution supports the UML 2.0 metamodel and the OWL metamodel as defined in ODM.
							This work is made by the SIDo Group from the <a href="http://www.univ-lr.fr/labo/l3i/site_statique/Index.html">L3I</a> lab in La Rochelle.
						</td>
						<td width="10%" valign="middle" align="right">
					    	<img src="../images/implementation.png" />
		  				</td>
					</tr>
				</table>
	    		</li>
				<li style="list-style:none">
	    		<table width="100%">
					<tr>
						<td width="30%" valign="middle">
					   		<h2> <a href="PRR2IRL/">Implementing two business rule languages: PRR and IRL</a> </h2>
		  				</td>
						<td width="60%" align="justify">
							This work presents a case study of implementing two business rule languages: Production Rule Representation (PRR) and ILOG Rule Language (IRL). We show how a pivot 
							language can be translated into a concrete one with the help of model engineering. The outcome of this experiment also provides an interesting example of DSLs coordination. 
							This work has been done in collaboration between the <a href="http://www.sciences.univ-nantes.fr/lina/atl/">ATLAS Group</a> in Nantes and <a href="http://www.ilog.com/">ILOG</a>.
							A <b>web service PRR to IRL</b> is available here: <a href="http://www.sciences.univ-nantes.fr/lina/atl/atldemo/prronline/">http://www.sciences.univ-nantes.fr/lina/atl/atldemo/prronline/</a>.
						</td>
						<td width="10%" valign="middle" align="right">
					    	<img src="../images/implementation.png" />
		  				</td>
					</tr>
				</table>
	    		</li>
				<li style="list-style:none"> 	    			
	    		<table width="100%">
					<tr>
						<td width="30%" valign="middle">
					   		<h2> <a href="MonitorToSemaphore/">From Hoare's Monitors to Dijkstra's Semaphores</a> </h2>
		  				</td>
						<td width="60%" align="justify">
							This is a classic in synchronization. We propose an automatic translation from Hoare's monitors as defined in <a href="http://www.eclipse.org/atl/usecases/MonitorToSemaphore/#ref1">[1]</a> into Dijkstra's semaphores as 
							initially introduced in <a href="http://www.eclipse.org/atl/usecases/MonitorToSemaphore/#ref2">[2]</a>.
							The ATL transformation code follows the rules given in <a href="http://www.eclipse.org/atl/usecases/MonitorToSemaphore/#ref1">[1]</a>. A complete reprint of this paper is available at: 
							<a href="http://www.acm.org/classics/feb96/">http://www.acm.org/classics/feb96/</a>.
						</td>
						<td width="10%" valign="middle" align="right">
					    	<img src="../images/implementation.png" />
		  				</td>
					</tr>
				</table>
	    		</li>
				<li style="list-style:none">
	    		<table width="100%">
					<tr>
						<td width="30%" valign="middle">
					   		<h2> <a href="UML2MsProject/">From UML Activity Diagram to Project Management Software</a> </h2>
		  				</td>
						<td width="60%" align="justify">
							This use case shows the possibility to have interoperability between an UML activity diagram and a project management software like MsProject.
							UML Activity Diagrams are typically used for business process modeling, for modeling the logic captured by a single use case or usage scenario, or for modeling the 
							detailed logic of a business rule. Microsoft Project is a project management software program developed by Microsoft.
						</td>
						<td width="10%" valign="middle" align="right">
					    	<img src="../images/implementation.png" />
		  				</td>
					</tr>
				</table>
	    		</li>
				<li style="list-style:none">
	    		<table width="100%">
					<tr>
						<td width="30%" valign="middle">
					   		<h2> <a href="UML2MOF/">Using a UML modeler to generate metamodels</a> </h2>
		  				</td>
						<td width="60%" align="justify">
							This use case shows how to use and integrate a model transformation service in a UML Modeler to generate metamodels conforming to KM3, MOF 1.4, and Ecore.
							The used UML Modeler is <a href="http://www.papyrusuml.org/">Papyrus</a> (<a href="http://www-list.cea.fr/">CEA LIST</a>).
						</td>
						<td width="10%" valign="middle" align="right">
					    	<img src="../images/specification.png" />
		  				</td>
					</tr>
				</table>
	    		</li>
				<li style="list-style:none">
	    		<table width="100%">
					<tr>
						<td width="30%" valign="middle">
					   		<h2> <a href="Measuring_UML_models/">Measuring UML models</a> </h2>
		  				</td>
						<td width="60%" align="justify">
	    					This use case shows how to use and integrate a model transformation service in a UML Modeler to compute and generate quality measures on UML models.
							The used UML Modeler is <a href="http://www.papyrusuml.org/">Papyrus</a> (<a href="http://www-list.cea.fr/">CEA LIST</a>).
						</td>
						<td width="10%" valign="middle" align="right">
					    	<img src="../images/specification.png" />
		  				</td>
					</tr>
				</table>
	    		</li>
				<li style="list-style:none">
	    		<table width="100%">
					<tr>
						<td width="30%" valign="middle">
					   		<h2> <a href="Verifying_UML_profiled_models/">Verifying UML profiled models</a> </h2>
		  				</td>
						<td width="60%" align="justify">
							This use case shows how to use and integrate a model transformation service in a UML Modeler to verify a UML profiled model.
							The used UML Modeler is <a href="http://www.papyrusuml.org/">Papyrus</a> (<a href="http://www-list.cea.fr/">CEA LIST</a>).
						</td>
						<td width="10%" valign="middle" align="right">
					    	<img src="../images/specification.png" />
		  				</td>
					</tr>
				</table>
	    		</li>
				<li style="list-style:none">
	    		<table width="100%">
					<tr>
						<td width="30%" valign="middle">
					   		<h2> <a href="RSM2Topcased/">RSM to Topcased UML2 Editor</a> </h2>
		  				</td>
						<td width="60%" align="justify">
							<a href="http://www.topcased.org/">TOPCASED</a> currently relies on the ATL model transformation toolkit. Model transformations have been mainly used in order to 
							access models defined using other editors than TOPCASED one's. This use case presents an operational application of ATL to bridge RSM and TOPCASED.
					 	</p>
						</td>
						<td width="10%" valign="middle" align="right">
					    	<img src="../images/specification.png" />
		  				</td>
					</tr>
				</table>
	    		</li>
				<li style="list-style:none">
	    		<table width="100%">
					<tr>
						<td width="30%" valign="middle">
					   		<h2> <a href="Sildex2SAM/">Sildex to Topcased SAM</a> </h2>
		  				</td>
						<td width="60%" align="justify">
							This use case presents the import of SILDEX models (a synchronous language based graphical modelling formalism developed by 
							<a href="http://www.tni-software.com/">TNI</a> and currently in use at <a href="http://www.airbus.com/en/">AIRBUS</a>) in the TOPCASED SAM modelling language.
							SAM represents the new TOPCASED business metamodel for functional and automaton parts of SILDEX.
							This use case was implemented by <a href="http://www.c-s.fr/">C-S</a> in the context of the TOPCASED project.
					 	</p>
						</td>
						<td width="10%" valign="middle" align="right">
					    	<img src="../images/specification.png" />
		  				</td>
					</tr>
				</table>
	    		</li>
	    		<li style="list-style:none">
	    		<table width="100%">
					<tr>
						<td width="30%" valign="middle">
					   		<h2> <a href="Sildex2AADL/">Sildex to Topcased AADL/COTRE</a> </h2>
		  				</td>
						<td width="60%" align="justify">
							This use case presents the import of SILDEX models (a synchronous language based graphical modelling formalism developed by 
							<a href="http://www.tni-software.com/">TNI</a> and currently in use at <a href="http://www.airbus.com/en/">AIRBUS</a>) in AADL/COTRE.
							It was implemented by <a href="http://www.c-s.fr/">C-S</a> in the context of the TOPCASED project.
					 	</p>
						</td>
						<td width="10%" valign="middle" align="right">
					    	<img src="../images/specification.png" />
		  				</td>
					</tr>
				</table>
	    		</li>
	    	</ul>
		<hr class="clearer" />
	</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
