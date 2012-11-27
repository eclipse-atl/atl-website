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
	$shortTitle		= "Models Validation through Petri nets: The SimplePDL to TINA Case Study";
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
				<li><a href="#overview"><b>Overview</b></a>
				<ul>
					<li><a href="#elements">Building blocs</a></li>
					<li><a href="#transfo">The translation schema from a SimplePDL model into Petri nets</a></li>
					<li><a href="#prop">Properties generation for process model validation</a></li>

				</ul>
				</li>
				<li><a href="#relatedUseCases"><b>Related Use Cases</b></a></li>
				<li><a href="#references"><b>References</b></a></li>
				<li><a href="#download"><b>Download</b></a></li>
				<li><a href="#acknowledgement"><b>Acknowledgement</b></a></li>
			</ul>
		</blockquote>
    	
		<hr class="clearer" />

		<div id="container>
			<p align="justify">
				This work presents a use case of model transformation using ATL rules to validate MDD's models.
				This use case considers a simplified process description language, SimplePDL. It then presents a property-driven approach
				in which SimplePDL process models are translated into Petri nets. SimplePDL behavioral properties 
				are expressed on corresponding Petri nets in LTL (<i>Linear Temporal Logic</i>).
				The Tina toolkit and, in particular, its model-checker, are used to validate process models by checking the expressed properties.
				All the code for the transformations in ATL and for the metamodels in KM3 is available from the <a href="http://www.eclipse.org/gmt/am3/zoos/">Zoos</a>.
				<br/>				
				This work has been done in collaboration between <a href="http://www.irit.fr">IRIT</a> and <a href="http://www.laas.fr/">LAAS</a> labs in Toulouse, France.
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
							DSL's Translational Semantics, 
							Verification, 
							Process Engineering, 
							<a href="http://acadie.enseeiht.fr/topcased/tutorial">SimplePDL</a>, 
							<a href="http://en.wikipedia.org/wiki/Petri_net">Petri nets</a>, 
							<a href="http://www.laas.fr/tina/">Tina</a>.
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
						<h5 STYLE="font-size: 10pt; padding: 0; border-bottom: 2px solid #49457C; background-position: top left; background-repeat; repeat-x;"><a name="elements"></a>Building blocs</h5>

						<p align="justify">
							This use case is introduced through a modeling language example on which we would like to express a set of properties that
							have to be verified on all possible models. Our DSL is a simple process description language: SimplePDL.
						</p>
						<p align="justify">
							<b><a href="http://combemale.perso.enseeiht.fr/atluc/pdl.km3">SimplePDL</a></b> is an experimental language for specifying processes. 
							The SPEM standard (<i>Software Process Engineering Metamodel</i>) proposed by the OMG inspired our work, 
							but we also took ideas from the UMA metamodel (<i>Unified Method Architecture</i>) used in the <a href="http://www.eclipse.org/epf/">EPF Eclipse plug-in</a> 
							(<i>Eclipse Process Framework</i>), dedicated to process modeling. SimplePDL is simplified to keep the presentation simple.
							<br />
							Its metamodel is given in the figure 1.
							It defines the process concept (<i>Process</i>) composed of a set of 
							work definitions (<i>WorkDefinition</i>) representing the activities to be performed during the development.
							One workdefinition may depend upon another
							(<i>WorkSequence</i>). In such a case, an ordering constraint (<i>linkType</i>) on the second workdefinition is specified, using the 
							enumeration <i>WorkSequenceType</i>. For example, linking two workdefinitions <i>wd1</i> and <i>wd2</i> 

							by a precedence relation of kind <i>finishToStart</i> means that <i>wd2</i>
							can be started only if <i>wd1</i> is finished (and respectively for 
							<i>startToStart</i>, <i>startToFinish</i> and <i>finishToFinish</i>).
							SimplePDL does also allow to explicitly represent resources
							(<i>Resource</i>) that are needed in order to perform one workdefinition (designer,
							computer, server...) and also time constraints (<i>min_time</i> and <i>max_time</i> on

							<i>WorkDefinition</i> and <i>Process</i>) to specify the minimum 
							(resp. maximum) time allowed to perform the workdefinition or the whole process.
							<br />
							One can remark that, for the sake of brevity, some concepts are not presented here such as products 
							(<i>WorkProduct</i>) that workdefinitions handle, or roles (<i>Role</i>) that can be assimilated to resources.						
							<br />
							In order to create process models conformed to SimplePDL, the Topcased project allows to generate graphical editors under the Eclipse framework.
							A complete tutorial on how to construct a SimplePDL modeling tool is available <a href="http://acadie.enseeiht.fr/topcased/tutorial/">here</a> (in french). 
						</p>

						<p align="center">
			  				<a href="img/SimplePDL.png"><img width="50%" src="img/SimplePDL.png" /></a>
					  		<br /><br />
							<b>1. SimplePDL metamodel in Ecore</b>
						</p>

						<p align="justify">
							The <b><a href="http://combemale.perso.enseeiht.fr/atluc/PetriNet.km3">PetriNet</a></b> metamodel is given in the figure 2. A Petri net (<i>PetriNet</i>) is composed of 
							nodes (<i>Node</i>) that denote places (<i>Place</i>) or transitions (<i>Transition</i>). Nodes are linked together by arcs (<i>Arc</i>). 
							Arcs can be normal ones or read-arcs (<i>ArcKind</i>). 
							The number attached to an arc specifies the number of tokens that are consumed in the source place or produced in the target one
							(in case of a read-arc, it is only used to check whether the source place contains more tokens than the specified number). 
							Petri nets markings are defined by the <i>tokensNb</i> attributes of places. 
							Finally, we can express a time interval on transitions. A transition can only be started between min and maw time.						
							<br />
							Beware! Such metamodel allows to build invalid models. 
							For example, one can put a link between two places or two transitions. One solution is to complete the model with OCL constraints to restrict models to valid instances.
						</p>

						<p align="center">
			  				<a href="img/PetriNet.png"><img width="33%" src="img/PetriNet.png" /></a>
					  		<br /><br />
							<b>2. PetriNet metamodel in Ecore</b>
						</p>

						<p align="justify">
							<a href="http://www.laas.fr/tina">Tina</a></b>  (TIme Petri Net Analyser) is a software environment 
							to edit and analyse Petri nets and temporal nets.
							The different tools constituting the environment can be used alone or together.
							Some of these tools will be used in this study: 
							<ul>
								<li>
									nd (NetDraw): is an editing tool for automatae and temporal networks, 
									under a textual or graphical form. It integrates a simulator ``step by step'' (graphical or textual) 
									for the temporal networks and allows to call other tools without leaving the editor.
								</li>
								<li>
									tina: this tool builds the state space of a Petri net, temporal or not.
									Tina can perform classical constructs (marking graphs, covering trees) and also allows abstract state 
								  	space construction, based on partial order techniques.
									Tina proposes, for temporal networks, all quotient graph constructions discussed in.
								</li>
								<li>
									selt: usually, it is necessary to check more specific properties than the ones dedicated to general accessibility alone, 
									such as boundedness, deadlocks, pseudo liveness and liveness already checked by tina.
									The selt tool is a model-checker for formulae of an extension of temporal logic
									seltl (State/Event  LTL) of. 
									In case of non satisfiability, selt is able to build a readable counter-example sequence or in
									a more compressed form usable by the Tina simulator, in order to execute it step by step.
								</li>
							</ul>	
						</p>

						<h5 STYLE="font-size: 10pt; padding: 0; border-bottom: 2px solid #49457C; background-position: top left; background-repeat; repeat-x;">
						<a name="transfo"></a>The translation schema from a SimplePDL model into Petri nets</h5>

						<p align="justify">
							The <b>translation schema</b> that transforms a process model into a Petri nets model is
							given in the next figures. Each work definition is translated into four places characterising the
							state (<i>NotStarted</i>, <i>Started</i>,
							<i>InProgress</i> and <i>Finished</i>) in order to translate each 
							<i>WorkSequence</i> by a <i>read-arc</i> between one source work definition place and the target work definition transition.
							We can remark that the state <i>Started</i> allows to memorise that one work definiton has already been started.

							We also add five places that will define a local clock. The clock will be in state <i>TooEarly</i> when the workdefinition ends
							before <i>min_time</i> and in the state <i>TooLate</i> when the work definition ends after <i>max_time</i>.

							The transformation is defined using three ATL rules (see the next listing). The first expresses one
							work definition in terms of places and transitions. The second translates a work sequence into a
							read-arc between the adequate place of the source work definition and the
							appropriate transition of the target work definition. The ATL resolveTemp operation is necessary because multiple places and transitions 
							have been created for each <i>WorkDefinition</i>.
							 Finally the last rule considers the whole process and builds the associated Petri net.
						</p>

						<p align="center">
			  				<a href="img/mapping.png"><img width="45%" src="img/mapping.png" /></a>
			  				<br /><br />
			  				<a href="img/SimplePDL2PetriNetconceptual.png"><img width="45%" src="img/SimplePDL2PetriNetconceptual.png" /></a>
			  				<br /><br />
			  				<a href="img/pdl2pn.atl.png"><img src="img/pdl2pn.atl.png" /></a>
						</p>

						<p align="justify">
							We illustrate the SimplePDL2Petrinet transformation on simplified meta-models in order to keep the presentation simple. Other elements such as ressources, time and 
							the fact that one activity can be split into multiple sub-activities have been modeled. The next figure shows the translation from one temporal WorkDefinition using
							resources. The next listing gives rules for consider <i>Resource</i>.
						</p>

						<p align="center">
			  				<a href="img/temporalPN1.png"><img width="50%" src="img/temporalPN1.png" /></a>
					  		<br /><br />
							<a href="img/pdl2pnR.atl.png"><img src="img/pdl2pnR.atl.png" /></a>
						</p>

						<p align="justify">
							In order to manipulate the obtained Petri net inside a dedicated tool such as <i>Tina</i>, we have composed the preceding transformation
							with a query 
							<i>PetriNet2Tina</i> that translates the Petri net as a model of <i>PetriNet</i> into a textual form (.net)
							conforming to the concrete textual syntax of the <i>Tina</i> tool.
						</p>

						<p align="center">
							<a href="img/pn2tina.atl.png"><img src="img/pn2tina.atl.png" /></a>
		    			</p>	

						<h5 STYLE="font-size: 10pt; padding: 0; border-bottom: 2px solid #49457C; background-position: top left; background-repeat; repeat-x;"><a name="prop"></a>
							Properties generation for process model validation</h5>				    	

						<p align="justify">
							After expressing process models into Petri nets models, we want to <b>check the properties associated to SimplePDL models</b> using the Tina toolkit.
							The main principle is to generate LTL properties using ATL queries.
							We generate LTL formulas in textual form.
							Therefore, we have to be aware of the translation shema from SimplePDL to PetriNet and Tina to ensure the consistency of the properties expression.
							Working directly on PetriNet level would have require to formalize the LTL metamodel which seems to be irrelevant in such case.
							<br/>
							We express below the kind of properties that we target to check in the current use case.
						</p>
						<p align="justify">
							<b>Model consistency verification</b>:
							When the user elaborates his process model, he describes the constraints that will drive his process.
							They can be causality relationships, like when a work definition is able to start only if some others are finished. 
							They can express the necessity to be able to use a certain amount of resources or even temporal constraints.
							Once all such constraints are expressed, the user must be able to check whether his process is satisfiable. In other words, does one execution exists
							that satisfies all causality constraints while respecting ressource usage and temporal restrictions?

							Model-checking technics allows to reach this goal.
							A process satisfying all such constraints is valid for us if it can terminates, i.e. it can reach a state where all its work definitions are in their finished state.
							Other alternatives can be considered. This notion of termination must be defined at the SimplePDL level.
							The macro-proposition <it>finished</it> is automatically generated during the translation of the SimplePDL model (cf. listing below).
		    			</p>

				    	<p align="center">
			  				<a href="img/checkmodel.png"><img src="img/checkmodel.png" /></a>
						</p>

						<p align="justify">
							<b>Transformation soundness</b>:	
							Even if the translation is expressed in ATL at an adequate abstraction layer, it is still important to ensure transformation consistency. The resulting 
							Petri net model must be revelant with respect to the SimplePDL specification. But its complexity makes the analysis difficult.

							To facilitate the definition of the ATL translation et to ensure the conformance of the resulting Petri net, we automatically
							generate a set of LTL formulae which have to be satisfied by the Petri net translation of the initial SimplePDL process model.

							These formulae are able to express that differents states modeled by a single value in the SimplePDL model have to be mutually exclusive in the Petri net one.
							The following listing gives an example.
							
							The set of these properties can be seen a <emph>proof obligations</emph>. They are generated during the translation phase and depend on
							the naming convention used for places and transitions in the SimplePDL2PetriNet mapping.
						</p>

						<p align="center">
			  				<a href="img/checktransfo.png"><img src="img/checktransfo.png" /></a>
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
						Combemale, B, Garoche P-L, Cr&eacute;gut, X, Thirioux, X:
						<em>Towards a Formal Verification of Process Model's Properties -- SimplePDL and TOCL Case Study</em>.
						In: Proceedings of the 9th International Conference on Enterprise Information Systems (ICEIS), 12-16, June 2007, Funchal, Madeira - Portugal.
					</td>

				</tr>
				<tr valign="top">
					<td>
						[2]
					</td>
					<td>
						(article in french) Combemale, B, Cr&eacute;gut, X, Berthomieu, B, and Vernadat, F:
						<em>SimplePDL2Tina : Mise en oeuvre d'une Validation de Mod&egrave;les de Processus</em>.
						In: Proceedings of the 3ieme journ&eacute;es sur l'Ing&eacute;nierie Dirig&eacute;e par les Mod&egrave;les (IDM), March 23th, Toulouse, France.  2007.
					</td>

				</tr>
				<tr valign="top">
					<td>
						<a href="http://www.combemale.fr/wiki/doku.php?id=private:enseignement:metamodeling">[3]</a>
					</td>
					<td>
						(tutorial in french) Pantel, M, Cr&eacute;gut, X, and Combemale, B:
						<em>La M&eacute;ta-mod&eacute;lisation et la Transformation de Mod&egrave;les</em> (2007).
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
					<td align="center"><a href="http://www.eclipse.org/atl/atlTransformations/#SimplePDL2Tina"><h3>Complete scenario</h3></a></td>
					<td>Scenario SimplePDL to Tina available in the ATL transformation zoo (with source files).</td>
				</tr>
				<tr>
					<td align="center"><a href="http://combemale.perso.enseeiht.fr/atluc/pdl.km3"><h3>SimplePDL metamodel</h3></a></td>

					<td>Full SimplePDL metamodel specified in KM3.</td>
				</tr>
				<tr>
					<td align="center"><a href="http://combemale.perso.enseeiht.fr/atluc/PetriNet.km3"><h3>PetriNet metamodel</h3></a></td>
					<td>Full PetriNet metamodel specified in KM3.</td>
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
						The present work is being supported by the <a href="http://www.topcased.org/">Topcased project</a>.
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
				<li style="list-style:none">By <a href="http://combemale.perso.enseeiht.fr/">Benoit Combemale</a> (IRIT)</li>
			</ul>
		</div>
	</div>
	
EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>