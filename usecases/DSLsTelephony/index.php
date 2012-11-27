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
	$pageTitle 		= "ATL Use Case - DSLs coordination for Telephony";
	$pageKeywords	= "Telephony, SIP, CPL, SPL";
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
				<li><a href="#references"><b>References</b></a></li>
				<li><a href="#download"><b>Download</b></a></li>
				<li><a href="#acknowledgement"><b>Acknowledgement</b></a></li>
			</ul>
		</blockquote>
    	
		<hr class="clearer" />

		<div>
			<p align="justify">
				This work presents a case study of implementing two telephony languages: SPL and CPL. We show how it is possible to transform programs of one language into the 
				other one with the help of model engineering. This work has been done in collaboration between <a href="http://www.sciences.univ-nantes.fr/lina/atl/">ATLAS Group</a> 
				in Nantes and the <a href="http://phoenix.labri.fr/">PHOENIX Group</a> in Bordeaux.
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
						Telephony,
						<a href="http://www.ietf.org/rfc/rfc3261.txt">SIP</a>, 
						<a href="http://www.faqs.org/rfcs/rfc3880.html">CPL</a>, 
						<a href="http://phoenix.labri.fr/software/spl/">SPL</a>.
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
							In this work, we report on an experiment consisting of the implementation
							of two languages specific to the domain of internet telephony. The first one is SPL (Session Processing Language), and the second
							one is CPL (Call Processing Language). The outcome of this experiment provides an interesting example of DSL coordination. Three aspects of each DSL are taken into
							account: abstract syntax, concrete syntax, and dynamic semantics. Moreover, our case study allows for different approaches to be illustrated.
							SPL has a textual concrete syntax whereas CPL is XMLbased. Additionally, both languages being in the same domain, one can be defined using the other.
				    	</p>
				    	<p align="justify">
				    		SPL and CPL are both in the application area of telephony. They are partially based on similar vocabularies.
				    		However they are very different and have been designed to be used by different people.
				    	</p>
						<p align="justify">
							In this use case, <a href="http://wiki.eclipse.org/index.php/AMMA">AMMA</a> and three of its core DSLs: 
							<a href="http://wiki.eclipse.org/index.php/KM3">KM3</a>, <a href="../../">ATL</a>, and <a href="http://wiki.eclipse.org/index.php/TCS">TCS</a> will be used.
							AMMA is built on a model-based vision of DSLs. AMMA provides a set of core DSLs that may be used to specify new DSLs.
						</p>
						<p align="justify">
							<b>SPL</b> (Session Processing Language) programs are used to control telephony agents (e.g. clients, proxies) implementing the SIP (Session Initiation Protocol)
							protocol. SIP concepts are directly available in the language. Consequently, SPL programs are able to concisely and simply express
							any telephony service. Additionally, SPL is capable of guaranteeing critical properties that could not be verified with a GPL. SPL
							programs run on a Service Logic Execution Environment for SIP.
						</p>
						<p align="center">
			  				<img src="SimpleSPLProgram.png" />
					  		<br /><br />
							<b>Simple SPL program: forwarding a call</b>
						</p>

						<p align="justify">
							Every incoming call is redirected to SIP address sip:phoenix@barbade.enseirb.fr. The target address is declared on line 3. Lines 6-8
							correspond to the definition of the action to perform on incoming calls. The return statement at line 7 forwards the call. The abstract syntax is specified
							in KM3. The following figure is an excerpt of the SPL metamodel.
		    			</p>
				    	<p align="center">
	  						<img src="SPLMetamodel.png" />
			  				<br /><br />
							<b>SPL metamodel excerpt</b>
						</p>
						<p align="justify">
							Concrete syntax of SPL has been implemented in TCS. A grammar is automatically derived from both the KM3 metamodel and the TCS model to parse SPL programs into SPL models.
						</p>
						<p align="justify">
							<b>CPL</b> (Call Processing Language) is a standard scripting language for the SIP protocol. It offers a limited set of language constructs. CPL is supposed to
							be simple enough so that it is safe to execute untrusted scripts on public servers. The following figure gives a CPL example, which is equivalent
							to the SPL example given.
		    			</p>
				    	<p align="center">
			  				<img src="SimpleCPLScript.png" />
					  		<br /><br />
							<b>Simple CPL script: forwarding a call</b>
						</p>
						<p align="justify">
							As for SPL, the abstract syntax of CPL is specified in KM3. The following figure is an excerpt of the CPL metamodel.
						</p>
						<p align="center">
			  				<img src="CPLMetamodel.png" />
			  				<br /><br />
							<b>CPL metamodel excerpt</b>
						</p>
						<p align="justify">
							Both CPL concrete syntax and semantics are handled by model transformations in ATL.
							CPL concrete syntax is XML-based. TCS is therefore not really useful here. The solution we implemented is the following.
							We use a generic XML parser to go from the XML document to an XML model conforming to an XML metamodel. This has an
							extremely low cost since these XML parser and metamodel are provided as part of AMMA. In a second step, we transform our
							XML model into a CPL model using ATL. The following figure gives
							an excerpt of this XML2CPL transformation. It transforms an XML model into a CPL model (line 2) by using a library of
							XML helpers (line 4) providing the getElemsByNames operation on XML elements. A single rule is shown: rule CPL (lines 6-17),
							which transforms the root of the XML document into a CPL element. Nested incoming element is attached to this root (lines 13-15).
						</p>
						<p align="center">
					  		<img src="XML2CPL.png" />
					  		<br /><br />
							<b>XML to CPL transformation excerpt, written in ATL</b>
						</p>
						<p align="justify">
							A second transformation (CPL2SPL) provides an implementation of CPL semantics by translating CPL concepts into their SPL
							equivalent concepts. The following figure provides an excerpt of this
							transformation. Line 2 declares source and target models respectively conforming to CPL and SPL. Rule CPL2Program (lines 4-
							19) transforms the root CPL element (lines 5-6) into an SPL program (lines 8-10), an unnamed service (lines 11-15) and a dialog (lines 16-18).
						</p>
						<p align="center">
					  		<img src="CPL2SPL.png"/>
	  						<br /><br />
							<b>CPL to SPL transformation excerpt, written in ATL</b>
						</p>
						<p align="justify">
							The CPL script Sample.cpl conforming to the CPL schema is first translated
							into an XML model conforming to an XML metamodel. Then it is transformed into a CPL model by XML2CPL.atl. The core
							transformation CPL2SPL.atl is then applied to generate an SPL model. The latter is then serialized into an SPL program using
							the TCS interpreter on the TCS syntax definition of SPL. This full transformation scenario (called CPL2SPL) is available in the ATL transformation zoo.
						</p>

						<p align="center">
							<a href="CPL2SPL-fullScenario.png"><img src="CPL2SPL-fullScenario.png" width="700"/></a>
							<br />
							<b>Full CPL to SPL transformation scenario</b>
						</p>

						<p align="justify">
							This case study illustrates how AMMA core DSLs can be used to capture different facets of a DSL. KM3 is used to express
							Domain Definition MetaModels. Concrete syntaxes are defined in TCS. Dynamic semantics can be formally defined in ASM, which we have done for ATL and SPL.
							Moreover, transformations from any DSLa to any DSLb can be implemented in ATL. This can, for instance, be used to implement
							the semantics of DSLa in terms of the semantics of DSLb (e.g. from CPL to SPL, see section 4.3). Such a transformation may
							then be used to translate programs expressed in DSLa into programs expressed in DSLb. Another use of ATL is to implement
							concrete syntaxes of DSLs.
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
						<a href="http://www.sciences.univ-nantes.fr/lina/atl/bibliography/DSPD06">
							[1]
						</a>
					</td>
					<td>
						Jouault, F, B&eacute;zivin, J, Consel, C, Kurtev, I, and Latry, F:
						<em>Building DSLs with AMMA/ATL, a Case Study on SPL and CPL Telephony Languages</em>.
						In: Proceedings of the 1st ECOOP Workshop on Domain-Specific Program Development (DSPD), July 3rd, Nantes, France.  2006.
					</td>
				</tr>
				<tr valign="top">
					<td>
						<a href="http://www.sciences.univ-nantes.fr/lina/atl/bibliography/Jouault06">
							[2]
						</a>
					</td>
					<td>
						Jouault, F:
						<em>Contribution &agrave; l'&eacute;tude des langages de transformation de mod&egrave;les</em>,
						Phd thesis, Universit&eacute; de Nantes. 2006.
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
					<td align="center"><a href="http://www.eclipse.org/atl/atlTransformations/#CPL2SPL"><h3>Complete scenario</h3></a></td>
					<td>Scenario CPL to SPL available in the ATL transformation zoo (with source files).</td>
				</tr>
				<tr>
					<td align="center"><a href="http://www.eclipse.org/gmt/am3/zoos/atlanticZoo/#CPL"><h3>CPL metamodel</h3></a></td>
					<td>Full CPL metamodel specified in KM3.</td>
				</tr>
				<tr>
					<td align="center"><a href="http://www.eclipse.org/gmt/am3/zoos/atlanticZoo/#SPL"><h3>SPL metamodel</h3></a></td>
					<td>Full SPL metamodel specified in KM3.</td>
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
				<li style="list-style:none">February 2007</li>
				<li style="list-style:none">
					By <a href="http://www.sciences.univ-nantes.fr/lina/atl/contrib/allilaire">Freddy Allilaire</a> and
					<a href="http://www.sciences.univ-nantes.fr/lina/atl/contrib/jouault">Frédéric Jouault</a> (INRIA)
				</li>
				<li style="list-style:none"><br />Please, ask your questions on the <a href="news://news.eclipse.org/eclipse.modeling.m2m">M2M newsgroup</a></li>
			</ul>
		</div>
	</div>
	
EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>