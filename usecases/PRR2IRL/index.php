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
	$shortTitle		= "Implementing two business rule languages: PRR and IRL";
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

		<img align="right" src="../../images/atlLogoSmall.png" valign="top" style="padding-left: 10px;" alt="ATL Logo" />
		<blockquote>
			<ul>
				<li><a href="#keywords"><b>Keywords</b></a></li>
				<li><a href="#introduction"><b>Introduction</b></a></li>
				<li><a href="#overview"><b>Overview</b></a></li>
				<li><a href="#relatedUseCases"><b>Related Use Cases</b></a></li>
				<li><a href="#download"><b>Download</b></a></li>
				<li><a href="#acknowledgement"><b>Acknowledgement</b></a></li>
			</ul>
		</blockquote>
    	
		<hr class="clearer" />

		<div id="container>
			<p align="justify">
				This work presents a case study of implementing two business rule languages: Production Rule Representation (PRR) and ILOG Rule Language (IRL). We show how a pivot language can be 
				translated into a concrete one with the help of model engineering. The outcome of this experiment also provides an interesting example of DSLs coordination. This work has been done 
				in collaboration between the <a href="http://www.sciences.univ-nantes.fr/lina/atl/">ATLAS Group</a> in Nantes and <a href="http://www.ilog.com/">ILOG</a>.
			</a>
			<p align="justify">
				A <font color="red"><b>web service PRR to IRL</b></font> is available here: <a href="http://www.sciences.univ-nantes.fr/lina/atl/atldemo/prronline/">http://www.sciences.univ-nantes.fr/lina/atl/atldemo/prronline/</a>.
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
							<a href="http://en.wikipedia.org/wiki/Business_rules">Business Rule</a>,
							<a href="http://www.omg.org/cgi-bin/doc?br/2003-9-3">PRR</a>,
							IRL
						</p>
					</td>
				</tr>
			</table>
		
			<h4 STYLE="font-size: 10pt; padding: 0; border-bottom: 2px solid #49457C; background-position: top left; background-repeat; repeat-x;"><a name="introduction"></a>Introduction</h4>

			<table width="100%">
				<COLGROUP>
					<COL width="2%" />
					<COL width="98%" />
				</COLGROUP>
				<tr>
					<td></td>
					<td>
						<p align="justify">
							In this work, we report on the experiment of building flexible Domain Specific Languages (DSLs) framework upon model driven engineering techniques. More specifically, we 
							are building a bridge between Production Rule Representation (PRR) and ILOG Rule Language (IRL) with the ATLAS Model Management Architecture (AMMA).
						</p>
						<p align="justify">	
							PRR is an object Management Architecture (OMG) standard designed within the Business Rule Working group, now part of the Business Modeling and Integration domain task 
							force. It addresses the requirement for a common production rule representation, as used in various vendors' rules engines with normative considerations and high level 
							modeling.
						</p>
						<p align="justify">
							IRL is a formal rule language designed by ILOG with several implementations build on the top of very powerful and effective resolution engines.
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
							In this use case, AMMA and three of its core DSLs (KM3, ATL, and TCS) will be used. AMMA is built on a model-based vision of DSLs and provides a set of core DSLs that may
							be used to specify new DSLs.
						</p>
						<p align="justify">
							PRR defines production rules for forward chaining, Rete-based inference and procedural processing. It also defines an interchangeable expression language for rule condition 
							and actions expressions, so that they can be replaced by alternative representations for vendor-specific usage or in other standards. Finally, it defines rulesets as 
							collections of rule for particular class of platform (procedural or inference rule engine).
						</p>
						<p align="center">
	  						<img src="img/Code1.png" />
					  		<br /><br />
							<b>Simple PRR program</b>
						</p>
						<p align="justify">
							The previous picture shows a simple PRR program. It says that for one shopping cart of a customer, there is at least one item in this shopping cart that is a best seller. 
							The abstract syntax is specified in KM3. The following picture shows an excerpt of the PRR metamodel.
						</p>
						<p align="center">
	  						<img src="img/Code2.png" />
					  		<br /><br />
							<b>PRR Metamodel</b>
						</p>
						<p align="justify">
							As we can see on this picture showing the core PRR metamodel, it uses an abstract OCL-based syntax for PRR expressions.
						</p>
						<p align="justify">
							Concrete syntax of PRR has been implemented in TCS. A grammar is automatically derived from both the KM3 metamodel and the TCS model to parse PRR programs into PRR models.
						</p>
						<p align="justify">
							The ILOG Rule Lanaguage (IRL) is the core language of the ILOG rule engine. The IRL is an executable rule language and all business rules of different rule languages are 
							translated into this language before parsing by the rule engine.
						</p>
						<p align="center">
	  						<img src="img/Code3.png" />
					  		<br /><br />
							<b>Simple IRL program</b>
						</p>
						<p align="justify">
							This figure shows the same rule as the previous one in PRR. It has exactly the same meaning but can be executed on the ILOG rule engine.
							As for PRR, the IRL abstract syntax is defined in KM3. The following figure is an excerpt of the IRL metamodel.
						</p>
						<p align="center">
	  						<img src="img/Code4.png" />
					  		<br /><br />
							<b>IRL Metamodel</b>
						</p>
						<p align="justify">
							Concrete syntax of IRL has been implemented in TCS. The TCS model is used to extract IRL models to IRL program.
						</p>
						<p align="justify">
							The transformation between PRR and IRL provides an implementation of PRR semantics by translating PRR concepts into their IRL equivalent. The following figure provides 
							an excerpt of this transformation:
						</p>
						<p align="center">
	  						<img src="img/Code5.png" />
					  		<br /><br />
							<b>ATL Transformation PRR2IRL Excerpt</b>
						</p>
						<p align="justify">
							The first two lines declares source and target models respectively conforming to PRR and IRL. Rule RuleSet transforms PRR RuleSet into IRL RuleSet while the rule Rule 
							transform a PRR Rule into IRL RuleDefinition.
						</p>
						<p align="center">
	  						<img src="img/prr2irl.png" />
			  				<br /><br />
							<b>"$shortTitle" Use Case's Overview</b>
						</p>
						<p align="justify">
							The sample input PRR program Sample.prr injected into Sample-PRR conforming to PRR metamodel thanks to the generated parser from the PRR’s TCS model. It is then transformed 
							to Sample-IRL model conforming to IRL metamodel via an ATL transformation. The latter is then extracted into a IRL program Sample.irl using the TCS interpretation of the 
							TCS syntax definition of IRL. This full transformation scenario is available in the ATL transformation zoo.
						</p>
						<p align="justify">
							This case study illustrates how AMMA core DSLs can be used to capture different facets of a DSL. KM3 is used to express Domain Definition MetaModels. Concrete syntaxes are 
							defined in TCS. Moreover, transformations from any DSLa to any DSLb can be implemented in ATL. This can, for instance, be used to implement the semantics of DSLa in terms 
							of the semantics of DSLb (e.g. from PRR to IRL). Such a transformation may then be used to translate programs expressed in DSLa into programs expressed in DSLb. Another use 
							of ATL is to implement concrete syntaxes of DSLs.
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
						PRR RFP
					</td>
					<td>
						<a href="http://www.omg.org/cgi-bin/doc?br/2003-9-3">http://www.omg.org/cgi-bin/doc?br/2003-9-3</a>
					</td>
				</tr>
				<tr valign="top">
					<td>
						PRR to IRL Web Service
					</td>
					<td>
						<a href="http://www.sciences.univ-nantes.fr/lina/atl/atldemo/prronline/">http://www.sciences.univ-nantes.fr/lina/atl/atldemo/prronline/</a>
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
					<td align="center"><h3>Complete scenario</h3></td>
					<td>(This scenario will be available soon)</td>
				</tr>
				<tr>
					<td align="center"><a href="http://www.eclipse.org/gmt/am3/zoos/atlanticZoo/#PRR%20(Production%20Rule%20Representation)"><h3>PRR Metamodel</h3></a></td>
					<td>PRR metamodel is expressed in the <a href="http://wiki.eclipse.org/index.php/KM3">KM3</a> textual format.</td>
				</tr>
				<tr>
					<td align="center"><a href="http://www.eclipse.org/gmt/am3/zoos/atlanticZoo/#IRL"><h3>IRL Metamodel</h3></a></td>
					<td>IRL metamodel is expressed in the <a href="http://wiki.eclipse.org/index.php/KM3">KM3</a> textual format.</td>
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
						The present work is being supported by the FLFS ANRT project (Families of Language for Families of Systems),
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
				<li style="list-style:none">March 2007</li>
				<li style="list-style:none">
					By <a href="http://www.sciences.univ-nantes.fr/lina/atl/contrib/allilaire">Freddy Allilaire</a>,
					<a href="http://www.sciences.univ-nantes.fr/lina/atl/contrib/mikael_barbero">Mikael Barbero</a> (INRIA), and
					Anas Abouzahra (ILOG)
				</li>
				<li style="list-style:none"><br />Please, ask your questions on the <a href="news://news.eclipse.org/eclipse.modeling.m2m">M2M newsgroup</a></li>
			</ul>
		</div>
	</div>
	
EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>