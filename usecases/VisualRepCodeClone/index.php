<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# template.php
	#
	# Author: 		Yu Sun, Frédéric Jouault
	# Date:			2007-12-11
	#
	# Description: This is the ATL contribution page for the project: Visual Representation for Code Clone Tools
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "ATL Use Case - Visual Representation for Code Clone Tools";
	$pageKeywords	= "Code Clone Tools, SVG, XML";
	$pageAuthor		= "Yu Sun";
	
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
				The aim of this project is to realize a uniform visual representation for different code clone detection tools. 
				Different analysis results provided by different code clone detection tools can be injected into models. These models will be transformed to a generic Code Clone DSL model,
				and then into SVG model. Finally, the SVG code can be automatically extracted from SVG model.
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
						<a href="http://sel.ics.es.osaka-u.ac.jp/cdtools/index-e.html">Code Clone</a>,
						<a href="http://en.wikipedia.org/wiki/Scalable_Vector_Graphics">SVG</a>, 
						<a href="http://en.wikipedia.org/wiki/Xml">XML</a>.
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
							A number of code clone detection tools have been developed to aid the detection of code clones in sources files. However, most of the tools ouput the analysis results in different formats,
         						and nearly all of them are based on text, which makes it difficult to compare and incorporate these results.
							In this work, we first difined specific DSLs for different code clone detection tools (Simian, SimScan, CloneDr) and a generic DSL for code clone. 
							Then, specific DSL models can be transformed to the generic DSL for code clone, which will be continuely transformed to SVG model and finally generate the SVG code.				
				    	</p>
				    	<p align="justify">
				    		Code clone detection and SVG(two-dimensional graphics and graphical applications in XML) are the two main domains in this project.
				    	</p>
						<p align="justify">
							In this use case, <a href="http://wiki.eclipse.org/AMMA">AMMA</a> and three of its core DSLs: 
							<a href="http://wiki.eclipse.org/KM3">KM3</a>, <a href="http://wiki.eclipse.org/ATL">ATL</a>, and <a href="http://wiki.eclipse.org/TCS">TCS</a> will be used.
							AMMA is built on a model-based vision of DSLs. AMMA provides a set of core DSLs that may be used to specify new DSLs.
						</p>
						<p align="justify">
							<b>Code Clone Detection Tools</b> can be used to analyze the source programs and find the same or similar parts in these programs. A text result is often generated
							after the analysis process, which reports the location of the code clones and other related information such as the length of clones, and similarity, etc.
							Three tools have been supported by our work. They are <a href="http://www.redhillconsulting.com.au/products/simian/index.html">Simian</a>, <a href="http://www.blue-edge.bg/download.html">SimScan</a>, and <a href="http://www.semdesigns.com/Products/Clone/">CloneDr</a>. The following is is an excerpt of the result outputed by Simian.
						</p>
						<p align="center">
			  				<img src="simiansrc.PNG" />
					  		<br /><br />
							<b>Code clone analysis result by Simian</b>
						</p>

						<p align="justify">
							The output contains some clone groups. In each group, the specific locations of the clones in each file are	given.						
							The abstract syntax is specified in KM3. The following figure is an excerpt of the Simian metamodel.
		    			</p>
				    	<p align="center">
	  						<img src="simianmetamodel.PNG" />
			  				<br /><br />
							<b>Simian metamodel excerpt</b>
						</p>
						<p align="justify">
							Concrete syntax of Simian has been implemented in TCS. A grammar is automatically derived from both the KM3 metamodel and the TCS model to parse Simian output file into Simian models.
						</p>
						<p align="justify">
							<b>FileInfo DSL</b> is defined to record the total number of lines in each source file. This number is not available in the output result, but necessary for the visual representation.
							So we defined such a domain and make it as a part of the input together with Simian. As for Simian, the metamodel of FileInfo is defined by KM3, and the concrete syntax is defined by TCS.
		    			</p>
				    	<p align="center">
			  				<img src="fileinfosrc.PNG" />
					  		<br /><br />
							<b>FileInfo source excerpt</b>
						</p>
						<p align="justify">
							<b>Generic DSL for Code Clone</b> is the uniform model to which specific DSL models can be transformed. Most of the concepts in this DSL are very similiar with the ones in specific DSLs,
							because they are in the same domain. The following is an excerpt of the generic DSL metamodel.
						</p>
						<p align="center">
			  				<img src="gdslmetamodel.PNG" />
			  				<br /><br />
							<b>Generic DSL for code clone metamodel excerpt</b>
						</p>
						<p align="justify">
							A transformation from specific DSL model to generic DSL model can be implemented by Simian2CodeClone.atl.							
						</p>
						<p align="center">
					  		<img src="simian2codeclone.PNG" />
					  		<br /><br />
							<b>Simian to CodeClone transformation excerpt, written in ATL</b>
						</p>
						<p align="justify">
							Then, after defining SVG and XML metamodels in KM3, a second transformation from generic Code Clone DSL to SVG can be completed.
						</p>
						<p align="center">
					  		<img src="codeclone2svg.PNG"/>
	  						<br /><br />
							<b>Generic DSL for Code Clone to SVG transformation excerpt, written in ATL</b>
						</p>
						<p align="justify">
							Finally, the SVG model is transformed to XML model by SVG2XML.atl so that the SVG code can be extracted automatically. The following is an excerpt of the generated SVG code.
						</p>
						<p align="center">
					  		<img src="svgcode.PNG"/>
	  						<br /><br />
							<b>Generated SVG code excerpt</b>
						</p>
						<p align="justify">
							And two kinds of visual representations are shown in the following.
						</p>
						<p align="center">
					  		<a href="Simian_sample_Form1.svg"><img src="example.PNG"/></a>
	  						<br /><br />
							<b>Visual representation Form 1</b>
						</p>
						<p align="center">
					  		<a href="Simian_sample_Form2.svg"><img src="example2.PNG"/></a>
	  						<br /><br />
							<b>Visual representation Form 2</b>
						</p>

						<p align="justify">
							The following picture better demonstrates the full scenario of this project.						
		    				</p>
						<p align="center">
							<a href="fullscenario.PNG"><img src="fullscenario.PNG" width="700"/></a>
							<br />
							<b>Full transformation scenario</b>
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
						<a href="http://www.sciences.univ-nantes.fr/lina/atl/www/papers/DSLBuildingFrameworks_PRELIMINARY_VERSION.pdf">
							[1]
						</a>
					</td>
					<td>
						Kurtev, I, Bézivin, J, Jouault, F, and Valduriez, P :
						<em>Model-based DSL Frameworks</em>.
						In: Companion to the 21st Annual ACM SIGPLAN Conference on Object-Oriented Programming, Systems, Languages, and Applications, OOPSLA 2006, October 22-26, 2006, Portland, OR, USA. ACM, pages 602--616.  2006.
					</td>
				</tr>
				<tr valign="top">
					<td>
						<a href="http://www.sciences.univ-nantes.fr/lina/atl/www/papers/KM3-FMOODS06.pdf">
							[2]
						</a>
					</td>
					<td>
						Jouault, F, and Bézivin, J :
						<em>KM3: a DSL for Metamodel Specification</em>,
						In: Proceedings of 8th IFIP International Conference on Formal Methods for Open Object-Based Distributed Systems, LNCS 4037, Bologna, Italy, pages 171--185.
					</td>
				</tr> 
				<tr valign="top">
					<td>
						<a href="http://sosym.dcs.kcl.ac.uk/events/mtip/submissions/jouault_kurtev__transforming_models_with_atl.pdf">
							[3]
						</a>
					</td>
					<td>
						Jouault, F, and Kurtev, I :
						<em>Transforming Models with ATL</em>,
						In: Proceedings of the Model Transformations in Practice Workshop at MoDELS 2005, Montego Bay, Jamaica.
					</td>
				</tr>
				<tr valign="top">
					<td>
						<a href="http://www.sciences.univ-nantes.fr/lina/atl/www/papers/TCS_PRELIMINARY_VERSION.pdf">
							[4]
						</a>
					</td>
					<td>
						Jouault, F, Bézivin, J, and Kurtev, I :
						<em>TCS: a DSL for the Specification of Textual Concrete Syntaxes in Model Engineering</em>,
						In: GPCE'06: Proceedings of the fifth international conference on Generative programming and Component Engineering, Portland, Oregon, USA, pages 249--254.  2006.
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
					<td align="center"><a href="http://www.eclipse.org/atl/atlTransformations/#CodeCloneTools2SVG"><h3>Complete scenario</h3></a></td>
					<td>Scenario Code Clone to SVG available in the ATL transformation zoo (with source files).</td>
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
						We want to thank my adviser <a href="http://www.gray-area.org">Dr. Jeff Gray</a>.
						He offered the precious chance and great encouragement for us to do the research and project in this area. Also, we really appreciate our colleague <a href="http://www.cis.uab.edu/tairasr/">Robert Tairas</a>.
						He is doing his Ph.D research in the area of code clone, and he provided indispensable resources of code clone tools and related samples.
						The present work is being partially supported by the <a href="http://openembedd.inria.fr/home_html-en?set_language=en&amp;cl=en" title="OpenEmbeDD project">OpenEmbeDD project</a>.
					</td>
				</tr>
			</table>
			
		</div>
	</div>

	<div id="rightcolumn">
		<div class="sideitem">
			<h6>General Information</h6>
			<ul>
				<li style="list-style:none">December 2007</li>
				<li style="list-style:none">
					By <a href="http://www.cis.uab.edu/yusun">Yu Sun</a>, <a href="http://www.sciences.univ-nantes.fr/lina/atl/contrib/jouault">Frédéric Jouault</a>
				</li>
				<li style="list-style:none"><br />Please, ask your questions on the <a href="news://news.eclipse.org/eclipse.modeling.m2m">M2M newsgroup</a></li>
			</ul>
		</div>
	</div>
	
EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>