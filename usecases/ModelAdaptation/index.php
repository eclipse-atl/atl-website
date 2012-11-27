<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# template.php
	#
	# Author: 		Kelly Garces
	# Date:			2009-11-09
	#
	# Description: model adaptation use case
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "ATL Use Case - Model Adaptation";
	$pageKeywords	= "Evolution, Adaptation, Model Transformation, Petrinet";
	$pageAuthor		= "Kelly Garces";
	
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
				<li><a href="#prerequisites"><b>Prerequisites</b></a></li>
				<li><a href="#overview"><b>Overview</b></a></li>
				<li><a href="#relatedUseCases"><b>Related Use Cases</b></a></li>
				<li><a href="#references"><b>References</b></a></li>				
				<li><a href="#download"><b>Download</b></a></li>
				<li><a href="#demo"><b>Demo</b></a></li>
				<li><a href="#acknowledgement"><b>Acknowledgement</b></a></li>
			</ul>
		</blockquote>
    	
		<hr class="clearer" />

		<div>
			<p align="justify">
				 The evolution of a metamodel may render its related terminal models invalid. 
				 This use case proposes a three-step solution that automatically adapts terminal models to their evolving metamodels.
				 The main contribution is the precise detection of metamodel changes by using the <a href="http://wiki.eclipse.org/AML">AtlanMod Matching Language (AML)</a>, a DSL built on top
				 of ATL and AMW. The running example is the Petrinet models.
			</p>

			<h4 STYLE="font-size: 10pt; padding: 0; border-bottom: 2px solid #49457C; background-position: top left; background-repeat; repeat-x;"><a name="prerequisites"></a>Prerequisites</h4>
			<table width="100%">
				<COLGROUP>
					<COL width="2%" />
					<COL width="98%" />
				</COLGROUP>
				<tr>
					<td></td>
					<td>
						<a href="http://wiki.eclipse.org/AML">AML</a>, AMW, and ATL 3.0 are required to execute this use case.
					</td>
				</tr>
			</table>
			
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
						Metamodel Evolution, 
						Model Adaptation, 
						Model Transformation,
						Petrinet.
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
							This use case presents a solution to the model adaptation problem. This solution has been presented in [1]. 
							Figure 1 illustrates the problem: a metamodel <b>MM1</b> evolves into a metamodel <b>MM2</b> (see the dotted arrow). Our concern is to adapt any terminal model <b>M1</b> conforming to <b>MM1</b> to the new metamodel version <b>MM2</b> (see the dashed arrow).
				    	</p>
				    	<p align="center">
			  				<img src="overviewEvolution.PNG" />
					  		<br /><br />
							<b>Figure 1. Metamodel evolution and model adaptation</b>
						</p>
				    	<p align="justify">
				    		The use case proposes a three-step adaptation (see Figure 2). Firstly, an matching strategy computes the equivalences and changes between <b>MM1</b> and <b>MM2</b>. Secondly, a HOT derives an ATL transformation from the discovered equivalences and changes. Finally, this transformation brings <b>M1</b> into agreement with <b>MM2</b>, and persists the result in <b>M2</b>.
				    		We implement the prototype on the AMMA platform. More specifically, we use the <a href="http://wiki.eclipse.org/AML">AtlanMod Matching Language (AML)</a> to specify the matching strategy, <a href="http://wiki.eclipse.org/AMW">AMW</a> to work with models of equivalences and changes, and <a href="http://wiki.eclipse.org/ATL">ATL</a> to implement the HOT. The HOT generates the adaptation transformation in ATL code too. 
				    	</p>
				    	<p align="center">
			  				<img src="overviewApproach.PNG" />
					  		<br /><br />
							<b>Figure 2. Approach Overview</b>
						</p>
						<p align="justify">
							The bulk of this use case is devoted to the first step that discovers equivalences, as well as simple and complex changes. We explicitly distinguish two kinds of changes because complex changes need a more insightful adaptation that simple changes. Whereas a simple change describes the addition, deletion, or update of one metamodel concept, a complex change integrates a set of actions affecting multiple concepts. The reader interested on examples of simple and complex changes may consult [2].
						</p>
						<p align="justify">
							The running example is based on the two versions of the Petri Net metamodel provided by [3]. Figure 3 illustrates versions 0 (<b>MM1</b>) and 2 (<b>MM2</b>). <b>MM1</b> represents simple Petri Nets. These nets may consist of any number of places and transitions. A transition has at least one input and one output place. <b>MM2</b> represents more complex Petri Nets. 
							The extraction of the reference <b>dst</b> illustrates a complex change named <b>Extract class</b>. This implies to add and remove a reference, add a class, and associate classes. In considering these actions as isolated simple changes, we may skip changes without migrating involved data from <b>M1</b> to <b>M2</b>. In contrast, when we distinguish the complex change, we infer (for instance) that the added property (e.g., <b>dst</b>), contained in the new class <b>PTArc</b>, actually corresponds to the property <b>dst</b> removed from the class <b>Place</b>. Since we know the relationship between the properties we can migrate the data. We thus need to explicitly distinguish complex changes in order to properly derive adaptation transformations.							
						</p>
						<p align="center">
			  				<img src="petrinetMM.PNG" />
					  		<br /><br />
							<b>Figure 3. Petrinet metamodels</b>
						</p>

						<p align="justify">		
							<h3>First step - Matching equivalences and changes</h3>
							
							<h4>Model of equivalences and changes </h4>
							Before describing the matching step, we explain how matching models represent equivalences and changes. 
							Such models conforms to the <b>Matching metamodel</b> (which extends the AMW core metamodel) illustrated in Figure 4. 
							The main concept is <b>Equal</b> which describes a mapping (or correspondence) between an element of <b>MM1</b> (<b>leftElement</b>) and an element of <b>MM2</b> (<b>rightElement</b>). <b>Equal</b> has a similarity value (between 0 and 1) that represents the plausibility of the correspondence. An equivalence with similarity value 1 represents that the <b>MM2</b> element is an identical copy of the <b>MM1</b> element. An equivalence with similarity value 0.7 describes that the <b>MM2</b> element is a copy of the <b>MM1</b> element including simple modifications. An equivalence with similarity value 0 link elements different to each other. Other basic concepts are <b>Added</b> and <b>Deleted</b> which mark a metamodel element as deleted/added from/into <b>MM1</b>.
						</p>
						<p align="center">
	  						<img src="matchingMetamodel.PNG" />
			  				<br /><br />
							<b>Figure 4. Excerpt of the matching metamodel</b>
						</p>
						<p align="justify">	
							<h4>Matching step</h4>
							Matching models are computed by AML strategies, i.e., processes that incrementally execute a set of ATL transformations.							 			
							Figure 5 shows an excerpt of the used AML strategy. This indicates how ATL transformations (generated by the AML compiler) interact each other to deliver the equivalences and changes.
							 <table width="100%">
									<COLGROUP>				
										<COL width="2%" />					
										<COL width="98%" />
									</COLGROUP>
									<tr>					
										<td>*</td>	
										<td><b>TypeClass, TypeReference, and TypeAttribute</b> prepares three collections of equivalences by matching classes, references, and attributes of <b>MM1</b> and <b>MM2</b>.</td>
									</tr>
									<tr>
										<td>*</td>	
										<td><b>Merge</b> combines the three collections into a single equal model.</td>
									</tr>
									<tr>
										<td>*</td> 
										<td><b>Levenshtein</b> computes similarity values by comparing the edit distance of metamodel element names.</b>
									</tr>
									<tr>
										<td>*</td>	
										<td><b>ThresholdMaxDelta</b> selects an equivalence when its similarity satisfies the range of tolerance [Threshold-Delta, Threshold].</b>
									</tr>
									<tr>
										<td>*</td>	
										<td><b>Propagation, SF, and Normalization</b> instruments the Similarity Flooding algorithm [4].</td>
									</tr>
									<tr>	
										<td>*</td>
										<td><b>WeightedAverage</b> aggregates the similarity values returned by Levenshtein and Normalization.</td>
									</tr>
									<tr>	
										<td>*</td>
										<td><b>BothMaxSim</b>, in turn, selects a given equivalence if its similarity value is the highest among the values of equivalences of two sets (e.g., leftSet and rightSet). The leftSet contains all the equivalences linking a left concept, and the rightSet the equivalences linking a right concept.</td>
									</tr>	 
									<tr>
										<td>*</td>
										<td>Whereas <b>Differentiation</b> recognizes equivalences, additions, and deletions, <b>TypeDifferentiation</b> gives a type to them. The type indicates what kind of elements are linked on, for example, the type <b>EqualReference</b> indicates an equivalence between references. <b>Rewriting</b> reorganizes a given equal model to make it closer to transformations. <b>FlattenFeatures</b> copies <b>EqualAttribute</b> and <b>EqualReference</b>  contained in <b>EqualClass</b> (e.g., matching class C) into every <b>EqualClass</b> matching a class that inherits directly or indirectly from C.</td>
									</tr>	
								</table>						
		    			</p>
				    	<p align="center">
	  						<code><pre>modelsFlow {

	tp = TypeClass[map2]	
	typeRef = TypeReference[map2]
	typeAtt = TypeAttribute[map2]

	merged = Merge[1.0:tp, 1.0:typeRef, 1.0:typeAtt]
	
	nam = Name[merged]
	
	filtered = ThresholdMaxDelta[nam]
	prop = Propagation[filtered]
	sf = SF[filtered](prop)
	norm = Normalization[sf]

	tmpresult = WeightedAverage[0.5 : norm, 0.5:nam]
 
 	result = BothMaxSim[tmpresult]

	diff = Differentiation[result]
	td = TypeDifferentiation[diff]   
	cl = ConceptualLink[td] 
	rw = Rewriting[cl]      
	flatt = FlattenFeatures[rw]	
}</pre></code>
			  				<br /><br />
							<b>Figure 5. AML strategy excerpt</b>
						</p>
						<p align="justify">
							The transformations above are generic enough to be applied to many use cases. It is <b>ConceptualLink</b> the one that figures out complex changes, and therefore leverages the solution to the model adaptation problem.
							For example, Figure 6 shows a rule that verifies if change <b>Extract Class</b> has happened.
							The helper 'isExtractClass' evaluates if:
							1) there is a relation between the owner classes of the structural features referenced by <b>EqualStructuralFeature</b> 
							2) the right class is a new class.
							If the conditions are satisfied, the rule decorates a simple equivalence with the type <b>ExtractClass</b>.
							
						</p>
						<p align="center">
	  						<img src="conceptualLinkRule.PNG" />
			  				<br /><br />
							<b>Figure 6. A conceptual link rule</b>
						</p>
						<p align="justify">
							Note that our approach may need the user to refine the results. The refinement can happen at high-abstraction level, i.e.,
							over final matching models, or at low-abstraction level, i.e., over generated adaptation transformations. 
						</p>
						<p align="justify">
							<h3>Second step - Translation to adaptation transformations</h3> 
							In this step, the equivalences and differences are translated into an ATL adaptation transformation via a HOT.
							
								<table width="100%">
									<COLGROUP>				
										<COL width="2%" />					
										<COL width="98%" />
									</COLGROUP>
									<tr>					
										<td>*</td>				
										<td>Yield a transformation rule for each <b>EqualClass</b> that links no abstract classes. The HOT takes referred left and right classes to yield input and output patterns.</td>
									</tr>
									<tr> 
										<td>*</td>
										<td>Create a binding for each <b>EqualStructuralFeatures</b> attached to a <b>EqualClass</b>. The binding complexity depends on the <b>Equal</b> type. While a simple <b>EqualStructuralFeature</b> generates a simple binding, <b>EqualStructuralFeature</b> extensions (e.g., <b>ExtractClass</b>) generate more elaborated bindings. In general, sophisticated bindings instruments the code that adapt <b>M1</b> models to complex changes.</td>
									</tr>
								</table>
								<br>
							Figure 7 shows an ATL adaptation transformation which is generated by the HOT. This creates the transformation rule <b>Place2Place</b> (line 5) from the equivalence (<b>Place</b>, <b>Place</b>). The <b>from</b> part matches the elements conforming to <b>Place</b> (lines 7-9). The <b>to</b> part creates elements conforming to <b>Place</b>. The HOT moreover generates a complex binding (see lines 13-14) from the equivalence (<b>out</b>, <b>dst</b>). The binding calls a lazy rule (i.e., <b>PTArc</b>) to initialize <b>dst</b> and <b>src</b> of <b>PTArc</b> (lines 20-29) using the values <b>Transition</b> and <b>Place</b>. 
						</p>
						<p align="center">
	  						<img src="petrinetAdapTransf.PNG" />
			  				<br /><br />
							<b>Figure 7. Petrinet transformation excerpt</b>
						</p>
						<p align="justify">
							<h3>Third step - Adaptation transformation execution</h3>
							This step simply executes the generated adaptation transformation. The transformation takes any terminal model <b>M1</b> and generates a terminal model <b>M2</b>. 
						</p>
					</td>
				</tr>
			</table>

			<h4 STYLE="font-size: 10pt; padding: 0; border-bottom: 2px solid #49457C; background-position: top left; background-repeat; repeat-x;">
				<a name="relatedUseCases"></a>Related Use Cases
			</h4>
			<table>
				<COLGROUP>
					<COL width="30%" />
					<COL width="70%" />
				</COLGROUP>
				<tr>
					<td>
						<a href="../../../../gmt/amw/usecases/matching"><h3>Matching</h3></a>
					</td>
					<td>
						This use case introduces the fundamentals behind AML strategies.
					</td>
				</tr>
				<tr>
					<td>
						<a href="../../../../gmt/amw/usecases/compare"><h3>Metamodel Comparison and Model Migration</h3></a>
					</td>
					<td>
						An application of matching to model migration. The difference between the model migration use case and
						our use case is that the latter uses AML to automatically generate the ATL transformations. 
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
						Garces, K., Jouault, F., Cointe, P., Bezivin, J.: Managing Model Adaptation by
						Precise Detection of Metamodel Changes. In: In Proc. of ECMDA 2009, Enschede,
						The Netherlands, Springer, 2009.
					</td>
				</tr>
				<tr valign="top">
					<td>
						
							[2]
						
					</td>
					<td>
						Garces K., Jouault F., Cointe P., Bezivin J., Practical Adaptation of Models to Evolving Metamodels,
						Technical report, INRIA, 2008.
					</td>
				</tr>
				<tr valign="top">
					<td>
						
							[3]
						
					</td>
					<td>
						Wachsmuth G., Metamodel Adaptation and Model Co-adaptation, in E. Ernst (ed.), ECOOP 2007, Berlin, Germany, Proceedings,
						vol. 4609 of Lecture Notes in Computer Science, Springer, 2007.
					</td>
				</tr>
				<tr valign="top">
					<td>
						
							[4]
						
					</td>
					<td>
						Melnik S., Garcia-Molina H., Rahm E., Similarity Flooding: A Versatile Graph Matching
						Algorithm and ist Application to Schema Matching, Proc. 18th ICDE, San Jose, CA, 2002.
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
					<td align="center"><a href="aml-adaptation.psf"><h3>Complete scenario</h3></a></td>
					<td>A psf file that points to the Adaptation AML project. Please download this file on your local disk, and then import the project in Eclipse using : File->Import->Team->Team Project Set. Besides the Adaptation project, you need the AMLLibrary project, find <a href=http://wiki.eclipse.org/AML#Install_AML_from_CVS>here</a> the instructions to download it. Finally, the file 'Readme.txt' contains all the instructions to execute the AML strategy.</td>
				</tr>				
			</table>
			
			<h4 STYLE="font-size: 10pt; padding: 0; border-bottom: 2px solid #49457C; background-position: top left; background-repeat; repeat-x;">
				<a name="demo">Demo</a>
			</h4>

			<table width="100%">
				<COLGROUP>
					<COL width="25%">
					<COL width="75%">
				</COLGROUP>
				<tr>
					<td align="center"><a href="AMLEdited_1024x720.htm"><h3>Demo</h3></a></td>
					<td>We encourage you to look at this demo which shows the main AML functionalities</td>
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
						This work has been partially funded by the <a href="http://flfs.emn.fr/">FLFS</a> ANR project (Families of Language for Families of Systems).
					</td>
				</tr>
			</table>
			
		</div>
	</div>

	<div id="rightcolumn">
		<div class="sideitem">
			<h6>General Information</h6>
			<ul>
				<li style="list-style:none">December 2009</li>
				<li style="list-style:none">
					By <a href="http://www.emn.fr/z-info/atlanmod/index.php/User:Garces">Kelly Garces</a> (Ecole des Mines de Nantes)
				</li>
				<li style="list-style:none"><br />Please, ask your questions on the <a href="news://news.eclipse.org/eclipse.modeling.m2m">M2M newsgroup</a></li>
			</ul>
		</div>
	</div>
	
EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>