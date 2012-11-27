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
	$pageTitle 		= "ATL Use Case - Modeling Web applications";
	$pageKeywords	= "Metamodel comparison, model weaving, transformations, ATL, AMW, AMMA";
	$pageAuthor		= "Juan M. Vara Mesa";
	
	# End: page-specific settings
	#
		
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML

	<!-- Main part -->
	<div id="midcolumn">
		<h1>$pageTitle</h1>

		<a name="goals"></a>
		<img align="right" src="../../images/atlLogoSmall.png" valign="top" style="padding-left: 10px;" alt="ATL Logo" />
		<blockquote>
			<ul>
                                <li><a href="#overview"><b>Overview</b></a></li>
				<li><a href="#howto"><b>Additional Information and Download</b></a></li>
				<li><a href="#related"><b>Related use cases</b></a></li>
				<li><a href="#acknowledgement"><b>Acknowledgement</b></a></li>
			</ul>
		</blockquote>

		<hr class="clearer" />

		<table>
			<COLGROUP>
				<COL width="2%">
				<COL width="98%">
		<tr>
			<td></td>
			<td align="justify">
                            <p/>

            In this Use Case we show how the AMMA tools have been used to implement part of a method for Web Applications development.
            More specifically we use KM3 to define a pair of DSLs based on the behavioral modeling elements of UML 2.0
            and the ATL language to implement the mappings between them.
            The gap between those DSLs makes it very complex to obtain directly an ATL transformation that works for any input
            model. More information is needed in order to automatize the mappings. In a real MDE context, this additional input should take the shape
            of a model. Here we show how a model weaving can be used to <i>parameterize</i> model transformations by defining an <b>annotation</b> model.

            <h4 STYLE="font-size: 10pt; padding: 0; border-bottom: 2px solid #49457C; background-position: top left; background-repeat; repeat-x;">
	    <a name="overview">Overview</a></h4>

		<p align="justify">

             The aim of this Use Case was to implement a set of mappings previously defined using the ATL language.
             Once we started to code the ATL program, we realised that some
             information needed to generate the target model was not included in the source model.
             For each execution of the transformation some <i>extra</i> data was needed. In some sense, these extra data can be shown as 
             a way of parameterizing the transformation.
             <p/>
             In this context, the first option was to extend the source metamodel in order to support the modeling of these extra data.
             However this meant polluting the metamodel with concepts not relevant for the domain that it represented.
             We needed a diferent way to collect these extra data that was related with the source model but not included in it.
             Finally, since this information or <i>parameters</i> had to be available from the ATL program and considering
             that we were in a MDE context, the best option was to use another model (and thus to define a new metamodel).
             <p/>             
             However, a metamodel is intended to represent a new domain and we needed not to be able to model a new set of concepts. In fact we just needed
             to provide with some extra information about the elements of some existing models. Since there already existed a base metamodel for
             modeling relations between model elements (the <a href="http://www.eclipse.org/gmt/amw/zoo/#AMW%20core">core weaving metamodel</a>),
             and even better, there was a base metamodel for annotating a model
             (the <a href="http://dev.eclipse.org/viewcvs/indextech.cgi/*checkout*/org.eclipse.gmt/AMW/org.eclipse.gmt.amw.zoo/extensions/mmw_annotation.km3">
             the Annotation extension</a>), we decided to use them in order to define a new weaving metamodel.

             The process followed is summarized in the figure below.

	  	<p align="center">
	  		<img src="images/UseCase.Overview.png"/>
	  		<br />
			<b>Use Case Overview</b>
		</p>

            <p/>
            For each execution of the ATL program, i.e., for each source model, we define a weaving model that conforms to an 
            annotation extension of the core weaving metamodel.
            The weaving model contains a set of annotations that represent the information needed to execute the transformation, that is, the <i>parameters</i>  
            using by some of the rules of the ATL program. So, both, the source and the weaving model are taking as 
            inputs to generate the output model.
    	</p>

        	<h4 STYLE="font-size: 10pt; padding: 0; border-bottom: 2px solid #49457C;
							background-position: top left; background-repeat; repeat-x;">
		<a name="howto">Additional Information and Download</a></h4>

		<table>
			<COLGROUP>

				<COL width="25%">
				<COL width="75%">

    <tr>
		<td align="center">
			<h3><a href="description.php">Using model annotations for<br/>Web applications modeling</a></h3><!--</a>-->
		</td>
                <td>
                    This document provides more detail about how model annotations are used in this Use Case.
                    It contains a complete description of the models considered and the context in which they are defined. 
                </td>
		</tr>
		
    <tr>
		<td align="center">
			<h3><a href="resources/User.Guide.pdf">Detailed description <br/>and User Guide</a></h3><!--</a>-->
		</td>
                <td>
                    A complete description of this Use Case.
                    It describes the content of the example provided and it details how to execute it. 
                    It also provides with general information about how to 
                    define annotation models and how to use ANT tasks to execute ATL transformations.
                </td>
		</tr>

		<tr>
		<td align="center">
			<h3><a href="resources/SOD-M.zip">Example</a></h3>
		</td>
		<td>
			An ATL project containing both a simplified scenary and a complete one.
		</td>
		</tr>
		
		<tr>
		<td align="center">
			<h3><a href="resources/org.eclipse.gmt.weaver.kybele.EUC.Annotation_1.0.0.zip">AMW Extension</a></h3>
		</td>
		<td>
			This plug-in that extends the AMW plug-in. When the weaver wizard for creating weaving models is launched, it shows 
			the defined extension of the core weaving metamodel.
			This way, it is not needed to load it by hand. 
		</td>
		</tr>
		
		</table>
		<h4 STYLE="font-size: 10pt; padding: 0; border-bottom: 2px solid #49457C;
							background-position: top left; background-repeat; repeat-x;">
		
		<a name="related">Related use cases</a></h4>
		
		<table>
			<COLGROUP>
				<COL width="25%">
				<COL width="68%">
		<tr>

		<td align="center">
			<a href="http://www.eclipse.org/gmt/amw/usecases/annotation/"><h3>Model annotations in Java 1.4</h3></a>
		</td>
		<td>
                     This use case shows how weaving models are used to annotate Java 1.4 metamodels.
		</td>
		</tr>
		<tr>

		<td align="center">
			<a href="http://www.eclipse.org/gmt/amw/usecases/oamusecase/"><h3>Metamodel Annotation for Ontology Design</h3></a>
		</td>
		<td>
                     This use case presents a Model Driven solution for annotating models in order to obtain ontologies.
		</td>
		</tr>

		</table>		
		<p/>
		
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
                    The present work is been supported by the GOLD project financed by the Spanish Ministry of Education and Science (TIN2005-00010)
                    and the FoMDAs project (URJC-CM-2006-CET-0387)
                    cofinanced by the <a href="www.urjc.es">Rey Juan Carlos university
                    </a> and the Regional Government of Madrid.
				</td>
			</tr>
		</table>

		</table>
                <p/>
	</div>

	<div id="rightcolumn">
		<div class="sideitem">
			<h6>General Information</h6>
			<ul>
				<li style="list-style:none">October 2007</li>
				<li style="list-style:none">By <a href="http://kybele.escet.urjc.es/members/jmvara/">Juan M. Vara Mesa</a></li>
			</ul>
		</div>
	</div>



EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
