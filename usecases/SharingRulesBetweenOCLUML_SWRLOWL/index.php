<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# index.php
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
	$shortTitle		= "Sharing Rules Between OCL/UML and SWRL/OWL";
	$pageTitle 		= "ATL Use Case - " . $shortTitle;
	$pageKeywords	= "";
	$pageAuthor		= "Milan Milanovic";
	
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

		<div id="container>
			<p align="justify">
				This work presents an implementation of sharing rules between two rule languages from different domains: OCL (Object Constraint Language) together with UML and SWRL (Semantic Web Rule 
				Language) together with OWL. For this integration we used the R2ML (REWERSE I1 Rule Markup Language) metamodel as pivotal metamodel. The R2ML is a general Web rule markup language and 
				it can represent different rule types: integrity, reaction, derivation and production. This work has been done in collaboration between the <A href="http://goodoldai.org.yu/">GOOD OLD 
				AI Laboratory</A> at <a href="http://www.bg.ac.yu">University of Belgrade</a>, <A href="http://www.sfu.ca/siat" target="_self">School of Interactive Arts and   Technology</A> at 
				<A href="http://www.surrey.sfu.ca" target="_self">Simon Fraser University Surrey</A> in Canada, <A href="http://scis.athabascau.ca/">School of Computing and Information Systems</A> at 
				<BR />
				<A href="http://www.athabascau.ca/">Athabasca University</A> in Canada and <a href="http://oxygen.informatik.tu-cottbus.de/IT/">Chair of Internet Technology</a> at 
				<A href="http://www.tu-cottbus.de/">Brandenburg University of Technology at Cottbus</A> in Germany.
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
							<a href="http://oxygen.informatik.tu-cottbus.de/rewerse-i1/?q=node/6">R2ML</a>,
							<a href="http://www.w3.org/Submission/SWRL/">SWRL</a>, 
							<a href="http://www.aifb.uni-karlsruhe.de/WBS/sbr/publications/owl-metamodeling.pdf">RDM</a>, 
							<a href="http://www.w3.org/2004/OWL/.">OWL</a>, 
							<a href="http://www.w3.org/TR/owl-xmlsyntax/">OWL XML Syntax</a>, 
							<a href="http://www.omg.org/cgi-bin/doc?formal/06-05-01">OCL</a>, 
							<a href="http://www.uml.org/">UML</a>, 
							Ontology, 
							Rules 
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
							In this use case, we present  rules interchange between the Semantic Web Rule Language along with the Web Ontology Language (SWRL/OWL) and the Object Constraint 
							Language along with the UML (UML/OCL). The solution is based on the REWERSE I1 Rule Markup Language (R2ML), a MOF-defined general rule language, as a pivotal metamodel 
							and the bidirectional transformations between SWRL/OWL and R2ML and between OCL/UML and R2ML. We use the Rule Definition Metamodel (RDM) as metamodel for the SWRL language, 
							that is based on the Ontology Definition Metamodel (ODM).
						</p>
						<p align="justify">
							<strong>OCL</strong> is a language that enables one to describe expressions and constraints on object-oriented (UML and MOF) models and other object modeling artifacts. An 
							expression is an indication or specification of a value. A constraint is a restriction on one or more values of (part of) an object-oriented model or system. The OCL 
							metamodel inerhits the UML metamodel. The <strong>UML</strong> is the most used and known language to model application structure, behaviour   and architecture but also 
							business process and data structure. Since the standard specification of the OCL metamodel [1] does  not contains support for OCL invariants, in our research, we introduced 
							the <em>EnhancedOCL </em>package is defined in order  to fill this gap. This package contains the <em>Invariant</em> class, as a subclass of the <em>OclModuleElement</em> 
							class (see Figure 1). <em>OclModuleElement</em> represents a superclass for: OCL invariant elements (the <em>Invariant</em> class); OCL operations and  properties, i.e., 
							&ldquo;def&rdquo; elements (the abstract class <em>OclFeature</em>) that are represented with classes <em>OclOperation</em> and <em>OclProperty</em>,  respectively; and OCL 
							derivation rules, i.e., &quot;derive&quot; elements (<em>DeriveOclModuleElement</em>).                            <em>OclModuleElement</em> contains a definition of an 
							invariant context that is represented with the <em>OclContextDefinition</em> class.
						</p>
						<p align="center">
							<img src="1. EnhancedOCL package.jpg" alt="EnhancedOCL package" width="700" height="356">
						</p>
						<p align="center">
							<strong>Figure 1. </strong>Elements of the EnhancedOCL package in the OCL metamodel
						</p>
						<p align="justify">
							<strong>SWRL</strong> is a web rule language based on combination of the OWL DL and OWL Lite sublanguages of the OWL Web Ontology Language, with the Unary/Binary Datalog 
							RuleML sublanguages of the Rule Markup Language (RuleML). SWRL is based on classical first order logic and  its rules are of the form of an implication between an 
							antecedent (body) and a consequent (head). The intended meaning can be read as &quot;whenever the conditions specified in the antecedent hold, then the conditions 
							specified in the consequent must also hold&quot;. Both the antecedent (body) and consequent (head) consist of zero or more atoms. Multiple atoms are connected with the 
							conjuction operator. Rule Definition Metamodel (RDM) is a MOF-based meta-model for SWRL, and it is based on [2] (see Figure 2).
						</p>
						<p align="center">
							<img src="2. RDM.jpg" alt="RDM" width="823" height="700">
						</p>
						<p align="center">
							<strong>Figure 2. </strong>Main elements of the Rule Definiton  Meta-model (RDM)
						</p>
						<p align="justify">
							<strong>R2ML</strong> represents a general Web rule markup language that is defined  by a  metamodel that is specified by using the MOF metamodeling language, and it have 
							also a XML-based concrete syntax that is defined with XML Schema. The R2ML metamodel [3] consists  of overlapping metamodels for the following types of rules: integrity, 
							derivation, reaction, and production rules. Furthermore, the  R2ML XML schema, i.e., an R2ML concrete syntax, has been developed for encoding rules  by domain experts. 
							Although OCL can represent both integrity constraints  and derivation rules, we only describe R2ML integrity rules here. An <em>integrity rule</em>, also known as<em> 
							(integrity) constraint</em>, consists of a  constraint assertion, which is a sentence in a logical language such as  first-order predicate logic or OCL (see Figure 3). 
							The R2ML framework supports two kinds of integrity  rules: the <em>alethic</em> and <em>deontic</em> ones. An alethic integrity rule  can be expressed by a phrase, such 
							as &ldquo;<em>it  is necessarily the case that</em>&rdquo; and a deontic one can be expressed by  phrases, such as &ldquo;<em>it is obligatory that</em>&rdquo;  or 
							&ldquo;<em>it should be the case that</em>.&rdquo;
						</p>
						<p align="center">
							<img src="3. IntegrityRule.jpg" alt="IntegrityRule" width="300" height="131">
						</p>
						<p align="center">
							<strong>Figure 3. </strong>The metamodel of integrity rules
						</p>
						<p align="justify">
							Implemented solution  of transforming OCL invariants into the SWRL rules via R2ML rules consists of five transformation steps. The first one (see Figure 4) is between 
							OCL rules (invariants) represented in the  OCL concrete syntax (in the EBNF technical space) and models compliant with the  OCL metamodel (in the MOF technical space). 
							This is done by using the EBNF injection (ATL feature) of OCL rules, that is,  by instantiating the MOF-based OCL metamodel (i.e., creating OCL models) and by  using the 
							OCL parser we created. Second, the MOF-based OCL rules obtained (OCL  models) are transformed to R2ML models compliant with the R2ML metamodel. In the third step, R2ML 
							models are transformed into the RDM models (i.e., instances of the SWRL metamodel) by using R2ML2RDM.atl transformation. In the fourth step, RDM models are  transformed 
							into the XML models (i.e., instances of the XML metamodel) by using  transformations RDM2XML.atl transformation.
						</p>
						<p align="justify">
						  	Five, such XML models (from the MOF  technical space) are serialized into the SWRL XML format (complaint with the SWRL  XML Schema) by using the ATL XML Extractor tool. 
						  	All of these transformations are based on the conceptual mappings that we have defined.
						</p>
						<p align="center">
							<img src="4. Complete transformation scenario.jpg" alt="Scenario" width="800" height="250">
						</p>
						<p align="center">
							<strong>Figure 4. </strong>The  transformation scenario between the OCL and SWRL via R2ML
						</p>
						<p align="justify">
							In addition, we have also defined transformations in opposite direction, so it is possible to translate SWRL rules into the OCL invariants via R2ML (remark: this side have 
							ceratin constraints).
						</p>
						<p align="justify">
							A UML model which contains a UML class (<em>Customer</em>) and has an OCL invariant defined on that class: <em>if customer name is 'Jos senior' implies that is age is more 
							than 21</em>. is given in Figure 5. to serve as a running example for this use case.
						</p>
						<p align="center">
							<img src="5. UML model.jpg" alt="UML model" width="400" height="97">
						</p>
						<p align="center">
							<strong>Figure 5. </strong>OCL invariant and its corresponding UML class <em>Customer</em>
						</p>
						<p align="justify">
							We first inject OCL code from Figure 5. into the OCL model by using the EBNF injector, (see Figure  4: EBNF injection), a part of the ATL toolkit, and the OCL Lexer and 
							Parser. We generated the OCL Parser and Lexer by using the  TCS (Textual Concrete Syntax), i.e., by defining TCS for the OCL. When we got an OCL model we then transform 
							OCL metamodel elements into the R2ML metamodel elements (by using OCL2R2ML.atl transformations from Figure 4). As a result we get the R2ML model that can be serialized 
							into the R2ML XML format (see Figure 6.). More details about this serialization process you can find in [4].
						</p>
						<p align="center">
							<img src="6. R2MLRule.jpg" alt="R2ML Rule" width="500" height="385">
						</p>
						<p align="center">
							<strong>Figure 6. </strong>An R2ML (alethic) integrity rule equivalent to the OCL invariant from Figure 5
						</p>
						<p align="justify">
							In the next step we transform attained R2ML model into the RDM model (instance of SWRL metamodel) by using R2ML2RDM.atl transformation from Figure 4. Such RDM model can be 
							serialized in the SWRL XML concrete syntax. In order to serialize the RDM model (from the MOF technical space) into the SWRL XML concrete syntax (i.e., to the XML technical 
							space), we first need to use the RDM2XML.atl transformation (see Figure 4) to get an XML model from RDM model.
						</p>
						<p align="justify">
							When we got a XML model which conforms to the MOF-based XML metamodel we can extract such model extraction from the MOF technical space to the XML technical space (XML 
							extraction in Figure 4.) by using the XML extractor. A result of this transformations process for the RDM model attained in previous step is a SWRL rule in the SWRL XML 
							concrete syntax (see Figure 7).
						</p>
						<p align="center">
							<img src="7. SWRLRule.jpg" alt="SWRLRule" width="520" height="283">
						</p>
						<p align="center">
							<strong>Figure 7. </strong>SWRL rule of the transformed OCL invariant from Figure 5
						</p>
						<p align="justify">
							This use case demonstrates how the AMMA tools can be used to share rules between different rule languages whose concrete syntaxes are defined in different technical spaces 
							(i.e., in the XML, MOF and EBNF technical spaces). This ATL   scenario provides a solution for bridging SWRL/OWL and OCL/UML is based on the pivotal (R2ML) metamodel that 
							addresses the complexity of mappings between two rule languages, which contain many diverse concepts. More details about this scenario you can find in [5].
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
					<td width="4%">
						<a href="http://www.omg.org/docs/formal/06-05-01.pdf">[1]</a>
					</td>
					<td width="96%">
						Object Constraint Language (OCL), OMG Specification, Version 2.0, formal/06-05-01, 2006.
					</td>
				</tr>
				<tr valign="top">
			    	<td width="4%">
			    		<a href="http://www.aifb.uni-karlsruhe.de/WBS/sbr/publications/owl-metamodeling.pdf">[2]</a>
			    	</td>
			      	<td width="96%">
			      		Brockmans, S., Haase, P., "A Metamodel and UML Profile for Rule-extended OWL DL Ontologies - A Complete Reference", Universität Karlsruhe (TH) - Technical Report, 2006.
			      	</td>
				</tr>
			    <tr valign="top">
					<td width="4%">
						<a href="http://oxygen.informatik.tu-cottbus.de/rewerse-i1/?q=node/6">[3]</a>
					</td>
					<td width="96%">
						R2ML (REWERSE I1 Rule Markup Language) metamodel in MOF/UML format.
					</td>
				</tr>
			    <tr valign="top">
			    	<td>
			    		[4]
			    	</td>
			      	<td>
			      		Milanovic, M., Gaševic, D., Giurca, A., Wagner, G., Lukichev, S., Devedžic, V., "Bridging Concrete and Abstract Syntax of Web Rule Languages",
			      		<b><i>The First International Conference on Web Reasoning and Rule Systems (RR2007)</i></b>, Innsbruck, Austria, 2007.
			      	</td>
		      	</tr>
			    <tr valign="top">
			    	<td>
			    		[5]
			    	</td>
			    	<td>
			    		Milanovic, M., Gaševic, D., Giurca, A., Wagner, G., Devedžic, V., "Towards Sharing Rules Between OWL/SWRL and UML/OCL",
			    		<b><i>Electronic Communications of the European Association of Software Science and Technology</i></b>, Volume 5, 2006.
			    	</td>
		      	</tr>   
	        </table>

			<h4 STYLE="font-size: 10pt; padding: 0; border-bottom: 2px solid #49457C; background-position: top left; background-repeat; repeat-x;">
				<a name="download">Download</a>
			</h4>

			<table width="100%" height="52">
				<COLGROUP>
					<COL width="25%">
					<COL width="75%">
				</COLGROUP>
				<tr>
					<td align="center"><a href="http://www.eclipse.org/atl/atlTransformations/#OCL2SWRL"><h3>Complete scenario</h3></a></td>
					<td>Scenario available in the ATL transformation zoo (with source files).</td>
				</tr>
				<tr>
				  <td align="center"><a href="http://www.eclipse.org/gmt/am3/zoos/atlanticZoo/#R2ML"><h3>R2ML metamodel</h3></a></td>
				  <td>R2ML metamodel is expressed in the <A href="http://wiki.eclipse.org/index.php/KM3">KM3</A> textual format.</td>
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
						The present work is being done in collaborative work with REWERSE I1 and LORNET Theme 1 projects.	
					</td>
				</tr>
			</table>

		</div>
	</div>

	<div id="rightcolumn">
		<div class="sideitem">
			<h6>General Information</h6>
			<ul>
				<li style="list-style:none">March 2007</li>
				<li style="list-style:none">
					By <a href="http://milan.milanovic.org">Milan Milanovic</a> (GOOD OLD AI Laboratory)
				</li>
				<li style="list-style:none">
					<br />Please, ask your questions by e-mail: <a href="mailto:milan [at] milanovic.org">milan [at] milanovic.org</a>
				</li>
			</ul>
		</div>
	</div>
	
EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>