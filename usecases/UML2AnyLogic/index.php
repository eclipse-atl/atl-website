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
	$shortTitle		= "Model Driven Performance Engineering: From UML/SPT to AnyLogic";
	$pageTitle 		= "ATL Use Case - " . $shortTitle;
	$pageKeywords	= "";
	$pageAuthor		= "Hugo Bruneliere";
	
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
				This use case presents a transformation from annotated UML2 activity diagrams to AnyLogic simulation models.
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
							<a href="http://www.eclipse.org/modeling/mdt/?project=uml2">UML2</a>,
							Simulation,
							Model Driven Performance Engineering,
							SPT
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
							In this case study we present a transformation from annotated UML activity diagrams to AnyLogic simulation models. 
							The actions and control flows in activity diagrams are annotated with performance information utilizing the UML profile for schedulability, performance, and timing (SPT). 
							This information is used to generate a simulation model that can be executed by the <a href="http://www.xjtek.com/anylogic">AnyLogic simulation tool</a> from XJ Technologies. 
							Such simulations can help to identify performance issues early in a software design process.
						</p>
						<p align="justify">
							When designing software, system behavior can be modeled using UML by utilizing, for instance, activity diagrams. To lower costs and risks, it is desirable to run analysis on the modeled system before it is actually implemented.<br/>
							However, in order to execute useful analysis, certain performance information has to be available. For instance, approximations of the time it would take to perform certain actions. Such information could be derived from knowledge and experience.<br/>
							Annotating performance information on UML models has been standardized in the <a href="http://www.omg.org/docs/formal/03-09-01.pdf">SPT profile</a> and its successor the MARTE profile. In this use case, we use a simplified version of SPT that includes the parts of the specification required here.<br/>
							As an example, we consider a high level description of an online pizza ordering process illustrated below.
						</p>
						<p align="center">
	  						<img src="img/PizzaOrdering-UML2ActivityDiagram.PNG" />
			  				<br /><br />
							<b>The pizza ordering process as activity diagram</b>
						</p>
						<p align="justify">
							In the diagram, several elements are stereotyped with the <i>PStep</i> stereotype. It is defined in the SPT profile and identifies one processing step that has performance properties. It defines a set of stereotype attributes that can be used to set concrete performance parameters.  The values set for the <i>CreateOrder</i> action are shown below.
						</p>
						<p align="center">
	  						<img src="img/CreateOrderActionProperties.PNG" />
			  				<br /><br />
							<b>Performance attributes of the CreateOrder action</b>
						</p>
						<p align="justify">
							Two of the properties are set to meaningful values here: the <i>Host Execution Demand</i> and the <i>Repetition</i>.<br/>
							The <i>Host Execution Demand</i> is set for every action in the diagram. It depicts the time required to perform the action. It is also indicated that the value is a mean (<i>mean</i>) value, which is assumed (<i>asmd</i>).<br/>
							The <i>Repetition</i> attribute is utilized to set arrival rates. It is set for actions succeeding an initial node.<br/>
							Not illustrated, but also utilized, is the <i>Probability</i> attribute. It is set on control flows that originate in decision nodes. It depicts the probability that a certain path is chosen by the decision.<br/>
							Annotated UML activity diagrams act as input to the transformation. The output of the transformation is an AnyLogic simulation model. AnyLogic is a simulation engine that can run simulations to analyze systems and provides visual representation of the running simulation. The latter supports the understanding of problem sources, especially in early system design.<br/>
							In AnyLogic, one can define libraries of elements that participate in simulations. Instances of these library elements can interact through messages that are passed through ports and connectors. We have created such a library containing elements known from activity diagrams. For these elements, we have defined the simulation semantics and visual representations.<br/>
							The result of the transformation is a simulation using elements from the activity diagram library, configuring and connecting them according to the information obtained from the input activity diagram. Below, a snapshot of the running simulation is presented.<br/>
						</p>
						<p align="center">
	  						<img src="img/RunningAnyLogicSimulation.PNG" />
			  				<br /><br />
							<b>Running simulation in AnyLogic</b>
						</p>
						<p align="justify">
							The figure shows the status of a system after a certain running time. Green coloring indicates that an action is currently active. In front of the actions, red bars show the amount of requests waiting for processing. In the figure, one notices the fairly high amount of waiting requests at the <i>PhoneNumberCheck</i> action. This hints at a possible bottleneck in the design.<br/> 
							In order to have an appropriate visual representation in AnyLogic, we not only take the abstract syntax of an activity (i.e., the UML model) but also the concrete syntax (i.e., the UML diagram) as input for the transformation.<br/> 
							As UML modeling tool, we used <a href="http://www.topcased.org">TOPCASED</a>, which stores the concrete syntax of models as diagram interchange models. Thus, the concrete syntax information is technically another model and we therefore have two input models for the transformation: One containing the actual model (conformant to the UML2 metamodel) and one containing the concrete diagram syntax (conformant to TOPCASED diagram interchange metamodel).<br/>  
							The transformation result is a simulation model conforming to a simplified AnyLogic metamodel. Another trivial transformation together with ATL XML extractor is used to transform the model into the proprietary XML format of AnyLogic, which can then be opened, compiled, and run by the simulation engine. The figure below illustrates the transformation process with the models and metamodels involved.
						</p>
						<p align="center">
	  						<img src="img/OverallTransformationProcess.PNG" width="100%"/>
			  				<br /><br />
							<b>Overall Transformation Process</b>
						</p>
						<p align="justify">
							In order to execute the use case, Eclipse UML2 and TOPCASED should be installed in an Eclipse environment. This will automatically make the UML2 and TOPCASED DI metamodels available to the transformation. Because the TOPCASED DI metamodel introduces some specific primitive types, an extended model handler is required for DI models. It can be found in the download section below and can be installed by putting it into the Eclipse plugin folder. All other metamodels and the example are contained in the scenario package.	
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
					<td align="center"><a href="http://www.eclipse.org/atl/atlTransformations/UML2AnyLogic/UML2AnyLogic.zip"><h3>Complete Scenario</h3></a></td>
					<td>ATL project containing all the resources allowing running the whole transformation scenario</td>
				</tr>
				<tr>
					<td align="center"><a href="http://www.eclipse.org/atl/atlTransformations/UML2AnyLogic/TUDEMFModelHandler.zip"><h3>Extended EMF Model Handler For ATL</h3></a></td>
					<td>Extended EMF model handler for ATL permitting dealing with non-standard primitive types</td>
				</tr>
				<tr>
					<td align="center"><a href="http://www.eclipse.org/gmt/am3/zoos/atlantEcoreZoo/#AnyLogic"><h3>AnyLogic Metamodel</h3></a></td>
					<td>Metamodel for creating AnyLogic simulation models</td>
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
						The present work is being supported by the <a href="http://www.modelplex-ist.org">IST European MODELPLEX project</a> (MODELing solution for comPLEX software systems, FP6-IP 34081).
					</td>
				</tr>
			</table>
			
		</div>
	</div>

	<div id="rightcolumn">
		<div class="sideitem">
			<h6>General Information</h6>
			<ul>
				<li style="list-style:none">January 2008</li>
				<li style="list-style:none">By <a href="http://jjohannes.de/">Jendrik Johannes</a> (<a href="http://tu-dresden.de/">TU Dresden</a>)</li>
				<li style="list-style:none"><br />Please, ask your questions on the <a href="news://news.eclipse.org/eclipse.modeling.m2m">M2M newsgroup</a></li>
			</ul>
		</div>
	</div>
	
EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>