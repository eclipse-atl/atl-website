<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# description.php
	#
	# Author: 		Juan M. Vara
	# Date:			2007-08-24
	#
	# Description: Type your page comments here - these are not sent to the browser
	#
	#
	#****************************************************************************

	#
	# Begin: page-specific settings.  Change these.
	$pageTitle 		= "Modeling Web applications - Detailed description";
	$pageKeywords	= "";
	$pageAuthor		= "Juan M. Vara Mesa";

	# Paste your HTML content between the EOHTML markers!
	$html = <<<EOHTML

<!-- Main part -->
	<div id="midcolumn">
		<table width="100%">
			<tr>
				<td width="50%">
					<h1>$pageTitle</h1>
				</td>
			</tr>
		</table>

		<p>

 This document explains how model annotation has been applied in this Use Case.
 It gives a description of the models implied and the context in which they are developed.
 For a more detailed explanation on this as well as on how to execute the <a href="resources/SOD-M.zip">example provided</a>, 
 see the <a href="resources/User.Guide.pdf">User Guide</a>.

 		<blockquote>
			<ul>
				<li><a href="#context"><b>Application Context</b></a></li>
				<li><a href="#models"><b>The Models</b></a></li>
				<li><a href="#model.annotation"><b>Model Annotation</b></a></li>
				<li><a href="#using.model.annotation"><b>Using model annotation in model transformations</b></a></li>
				<li><a href="#references"><b>References</b></a></li>
			</ul>
		</blockquote>



		<h4 STYLE="font-size: 10pt; padding: 0; border-bottom: 2px solid #49457C; background-position: top left; background-repeat; repeat-x;">
		<a name="context">Application Context</a></h4>

		<p align="justify">

            Service-Oriented Computing [<a href="#ref.1">1</a>] is a new paradigm for application development whose main proposal is the use of
            services as fundamental elements. Services usually range from quite simple ones, like buying a book or renting a car to more complex ones involving complex processes
            such as obtaining sales ratings or participating in public auctions.
            <p align="justify"/>
            Nevertheless, although the design and implementation of web services can be apparently easy,
            the implementation of business processes using web services is not so effortless.
            Languages for the implementation of business processes have many limitations when
            they are used in the early stages of the development process [<a href="#ref.2">2</a>].
            This occurs mainly because the transformation from high-level business models to a
            composition language that implements those business processes with web services is not a trivial issue.
            <p align="justify"/>
            Attending to these facts we have defined a model driven method for service-oriented web applications development (SOD-M [<a href="#ref.3">3</a>]).
            It starts from a high level business model and allows obtaining a service composition model that simplify the
            mapping to a specific web service technology. This way, the method defines new Platform Independent Models (PIMs) and the
            mappings between them. The process is summarized in the figure below. In this Use Case we focus in the mapping from the
            Extended Use Case Model to the Service Process Model.

	  	<p align="center">
	  		<img src="images/SOD-M.Behavioral.Modeling.png"/>
	  		<br />
			<b>Behavioral Modeling process in SOD-M</b>
		</p>

    <h4 STYLE="font-size: 10pt; padding: 0; border-bottom: 2px solid #49457C; background-position: top left; background-repeat; repeat-x;">
	  <a name="models">The Models</a></h4>

		<p align="justify">
To illustrate this work we use the models from a conference management system we have developed.
The Extended Use Case model is a Use Case model representing the different services offered by a Web Information System, as well as the
functionalities required to carry out each service. In our example, the conference management system offers three different services:
Submit an Article, Show the submitted articles and Edit the data of an author. In order to provide with this complex services, some
basic services are needed, as the Log-In or the Register ones. To model the relation between the different Use Cases two types of associations are used: <i>&lt;&lt;include&gt;&gt;</i> and <i>&lt;&lt;extend&gt;&gt;</i>. The former implies that the behaviour of the included Use Case is inserted in the including Use Case, while the later specifies how and when the behaviour defined in the extending use case can be inserted into the behaviour defined in the extended use case.
<p/>
On the other hand, in the Service Process model each complex service identified in the previous model is mapped to an activity and the basic
services that it uses are represented as service activities. This way, back to the example we have three different activities that use
a set of service activities. For instance the Log-In one is used by the three activities.

	  	<p align="center">
	  		<img src="images/WebConference.Models.png"/>
	  		<br />
			<b>Use Case Overview</b>
		</p>
<p/>

    <h4 STYLE="font-size: 10pt; padding: 0; border-bottom: 2px solid #49457C; background-position: top left; background-repeat; repeat-x;">
	  <a name="model.annotation">Model Annotation</a></h4>
	  
	  <p align="justify">
		To generate a Service Process model, it is needed some information not included in the Extended Use Case model. For instance, if a Use Case
		includes two or more Use Cases, the order in which they should be executed in the including Use Case should be specified, since the mapping rule for <i>&lt;&lt;include&gt;&gt;</i> relationships gives the two options shown in the picture below.

	  	<p align="center">
	  		<img src="images/Include.Mapping.Rule.png"/>
	  		<br />
			<b>Include Relationships Mapping Rule</b>
		</p>
		
		<p align="justify">
		To handle this information, that can be interpreted as parameters to execute the transformation, we use a weaving model that conforms to a new extension of the <a href="http://www.eclipse.org/gmt/amw/zoo/#AMW%20core">core weaving metamodel</a>. It is based on the <a href="http://dev.eclipse.org/viewcvs/indextech.cgi/*checkout*/org.eclipse.gmt/AMW/org.eclipse.gmt.amw.zoo/extensions/mmw_annotation.km3">
             the annotation extension</a> metamodel. The next figure show an excerpt of the extension that can be found on the <a href="resources/SOD-M.zip">example</a> file

	  	<p align="center">
	  		<img src="images/Annotation.Extension.png"/>
	  		<br />
			<b>Excerpt of the annotation weaving metamodel</b>
		</p>
		
		<p align="justify">
		Thus, a weaving model conforming to this metamodel includes two different types of WLinks (in fact, of annotations): <i>ActivityComposition</i> and 
		<i>IncludeOrder</i>. The former serves to identify which of the Use Cases from the Extened Use Case model correspond to a Service provided by the sytem, as well as the entry and exit points to carry out the service. The later helps to solve the problem about the mapping of several include relationships attached to the same Use Case. In the example we define the annotation model shown in the figure below.
<p/>


	  	<p align="center">
	  		<img src="images/Annotating.Model.png"/>
	  		<br />
			<b>Annotating of the the Extended Use Case model</b>
		</p>

    <h4 STYLE="font-size: 10pt; padding: 0; border-bottom: 2px solid #49457C; background-position: top left; background-repeat; repeat-x;">
	  <a name="using.model.annotation">Using model annotation in model transformations</a></h4>

<p align="justify">
	The annotation of the source model allows to add the missing data we need to execute the transformation. In order to use this information, we just have to code some ATL helpers. For instance, to map every <i>include</i> object we have to know if it is related with other <i>include</i> objects (remember the ambiguity about the mapping of include relationships). Thus, we define a helper that navigates the weaving model (the annotation model) looking for <i>IncludeOrder</i> annotations referring to the given <i>include</i> object. The helper checks if there is an annotation whose <i>former</i> element is the one that was being mapped when it was invoked.

	  	<p align="center">
	  		<img src="images/ATL.Excerpt.Include.Helper.png"/>
	  		<br />
		</p>
		
<p align="justify">		
		Then we define two different rules for mapping include objects and we include a guard in one of them to distinguish which one should be used in each specific case. The guard invokes the helper we have just shown. 
		
		<p align="center">
	  		<img src="images/ATL.Excerpt.Simple.Include.Rule.png"/>
	  		<br />
		</p>

    <h4 STYLE="font-size: 10pt; padding: 0; border-bottom: 2px solid #49457C; background-position: top left; background-repeat; repeat-x;">
	  <a name="references">References</a></h4>

		<p align="justify">

<a name="ref.1"></a>[1] Papazoglou, M.P., Georgakopoulos, D.: Serviced-Oriented Computing. Communications of ACM Vol. 46, N. 10 (2003) 25-28.<br/>
<a name="ref.2"></a>[2] Verner, L.: BPM: The Promise and the Challenge. Queue of ACM Vol. 2, N. 4 (2004) 82-91.<br/>
<a name="ref.3"></a>[3] De Castro, V., Vara, J.M., Marcos, E. Model Transformation for Service-Oriented Web Applications Development. Workshop Proceedings of 7th International Conference on Web Engineering. July 2007, pp. 284-198.<br/>
<p>&nbsp;</p>

	</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
