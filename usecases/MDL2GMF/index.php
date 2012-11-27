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
	$pageTitle 		= "ATL Use Case - Rational Rose to UML2 Tools";
	$pageKeywords	= "Rational Rose, MDL, GMF, UML2, UML2 Tools";
	$pageAuthor		= "Brahim Khalil LOUKIL";
	
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
				<li><a href="#Screenshots"><b>Screenshots</b></a></li>
				<li><a href="#AvailableFeatures"><b>Available features</b></a></li>
				<li><a href="#PossibleExtensions"><b>Possible extensions</b></a></li>
				<li><a href="#relatedUseCases"><b>Related Use Cases</b></a></li>				
				<li><a href="#download"><b>Download</b></a></li>
				
			</ul>
		</blockquote>
    	
		<hr class="clearer" />

		<div>
			<p align="justify">
				This use case shows how we can reuse UML projects created with Rational Rose and import them in GMF (specifically in UML2 Tools) using ATL transformations.
				In this use case, we only support UML class diagrams.
				In practice, this use case was applied to the QVT metamodel available on the OMG site (<a href="http://www.omg.org/cgi-bin/doc?ad/2005-09-01">document ad/2005-09-01</a>).			</p>

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
							<a href="http://en.wikipedia.org/wiki/Rational_Rose">Rational Rose</a>, MDL,
							<a href="http://www.eclipse.org/gmf/">GMF</a>,
						  <a href="http://www.eclipse.org/modeling/mdt/?project=uml2#uml2">UML2</a>,
						  <a href="http://www.eclipse.org/modeling/mdt/?project=uml2tools#uml2tools">UML2 Tools</a>						</p>
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
				    		In this use case, we essentially have to deal with two problems. The first problem is that the UML Model created by Rational Rose conforms to a specific 
							grammar based on Petal syntax, and called MDL. This syntax is neither XML nor XMI, so we need a specific reader. The second problem is that the MDL model
							contains more than one UML diagram, whereas each GMF diagram is a separate model. Therefore, we need to find out how we can generate n models using
							the same ATL transformation.				    	</p>
						<p align="justify">
							To deal with these problems, we start by developing the MDL reader using TCS. The MDL metamodel is depicted in Figure1. The whole project is available in the <a href="http://wiki.eclipse.org/TCS/Zoo">TCS Zoo</a>.						</p>						
						<p align="center">
			  				<a href="img/Mdl_large.png"><img src="img/Mdl_medium.png" width="826" height="317" border="0" /></a>
					  		<br />
					  		<br />
					  <b>Figure 1: The MDL metamodel</b>					  </p>

						<p align="justify">
						Once we can read the MDL model, the next step is to write the transformation to UML. In this transformation, we preserve the same structure of packages as in the MDL file.		    			</p>
						<p align="justify">
						The second step is to write a transformation from MDL and UML to GMF diagrams. The MDL model is needed to gather the graphical information.
						The UML model is necessary because some GMF elements points to UML elements.		    			</p>
						<p align="justify">
						Finally, we create an ant script in order to assemble all these transformations into a single executable entity.
						This script must additionally deal with the multi-diagram generation problem mentioned above.		    			</p>
						<p align="justify">
						The full transformation scenario is depicted in Figure 2:						</p>
				    	<p align="center"><a href="img/ATLUseCase_large.png"><img src="img/ATLUseCase_medium.png" width="872" height="276" border="0" /></a><br />
			  				<br />
							<b>Figure 2: MDL to UML2.1 and GMF</b>
				      </p>
					    <p align="justify">
						As we can see on the left, the input of this transformation is an MDL file, and the result on the right is a several GMF models which refer to an only one UML model.
					  </p>
						<p align="justify">
						In this transformation scenario, we needed to produce not only one GMF model but several models,
						that it is why we used two ATL transformations instead of only one which could produce the UML and the GMF model in one shot. The important thing here is how we
						can propagate the reference of uml elements generated by the first transformation to the second. The solution implemented is to generate with the first
						transformation an annotation for each UML element which can hold the [MDL ID].</p>
				  </td>
				</tr>
			</table>

			<h4 STYLE="font-size: 10pt; padding: 0; border-bottom: 2px solid #49457C; background-position: top left; background-repeat; repeat-x;">
				<a name="Screenshots"></a>Screenshots
			</h4>
			<table>
				<COLGROUP>
					<COL width="2%" />
					<COL width="98%" />
				</COLGROUP>
				<tr>
					<td>
					<p align="justify">
					The first screenshot below shows an example of result which is a QVT relation diagram imported to UML2 tools using ATL. And the second shows how
					the diagram looks like in Rational Rose (This tool is no longer available, so we used RSM).					
					</p>
					<p align="justify">
					As we can see, the positions and colors of nodes are preserved. Some features like: the state of compartments (collapsed or not), associations,
					and dependencies are not supported in the diagram. The reason is that UML2 Tools do not provide full multi-diagram support.
			
					</p>							  				
						<b>Imports results from Rational Rose to UML2 tools</b>
					</td>
				</tr>
				<tr>
					<td><p align="center"><a href="img/QVTRelation(ATL)_large.png"><img src="img/QVTRelation(ATL)_medium.png" height="827"  width="1027" border="0" /></a>
						<br/><b>UML2 Tools : QVT Relation diagram </b>
						 </p>
				    </td>					
				</tr>				
				<tr>
					<td colspan="2"><br>			  				
						<b>Imports results from Rational Rose to RSM</b>
					</td>
				</tr>
				<tr>
				<td>
						<p align="center"><a href="img/QVTRelation(RSM).png"><img src="img/QVTRelation(RSM).png" width="675" height="517" border="0" /></a>	
						<br/>
						<b>RSM: QVT Relation diagram </b>
						</p>	
			 	  </td>
				</tr>				
			</table>
			
			<h4 STYLE="font-size: 10pt; padding: 0; border-bottom: 2px solid #49457C; background-position: top left; background-repeat; repeat-x;">
				<a name="AvailableFeatures"></a>Available features
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
						<ul>
							<li>Support of 14 UML elements.</li>
							<li>Export the color and position of nodes.</li>
							<li>Multi-diagrams support.</li>
						</ul>
						</p>
					</td>
				</tr>
			</table>
			
			<h4 STYLE="font-size: 10pt; padding: 0; border-bottom: 2px solid #49457C; background-position: top left; background-repeat; repeat-x;">
				<a name="PossibleExtensions"></a>Possible extensions
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
						<ul>
							<li>Preserve the same bendpoints used in MDL file for links.</li>
							<li>Produce shortcuts for associations (It is not possible with current UML2 tools).</li>
							<li>Produce the state for compartments (It is not possible with current UML2 tools).</li>
							<li>Test performance on emfvm (Actually, It is not possible because emfvm has not yet supported metamodel extension)</li>
							<li>Tests and enhancements maybe needed for the MDL reader.</li>
							<li>Resolve the problem of scale (Elements are relatively small compared to distances between them).</li>
							<li>Resolve the problem of scale (Elements are relatively small compared to distances between them).</li>
							<li>Complete class diagram (95% done)</li>
							<li>Work on other diagrams.</li>
							
						</ul>
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
					<td align="center"><a href="http://www.eclipse.org/atl/atlTransformations/MDL2GMF/org.eclipse.m2m.atl.mdl2gmf.zip"><h3>Complete scenario</h3></a></td>
					<td>Scenario MDL to GMF available in the ATL transformation zoo (with source files).</td>
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
				<li style="list-style:none">Januray 2008</li>
				<li style="list-style:none">
					By <a href="http://brlouk2008.teamsoftsuite.com">Brahim Khalil Loukil</a> and
					<a href="http://www.sciences.univ-nantes.fr/lina/atl/contrib/jouault">Frédéric Jouault</a> (INRIA)
				</li>
				<li style="list-style:none"><br />Please, ask your questions on the <a href="news://news.eclipse.org/eclipse.modeling.m2m">M2M newsgroup</a>.</li>
			</ul>
		</div>
	</div>
	

		
EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>