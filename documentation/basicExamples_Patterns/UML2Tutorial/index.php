<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# template.php
	#
	# Author: 		Freddy Allilaire
	# Date:			2007-07-07
	#
	# Description: Type your page comments here - these are not sent to the browser
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$shortTitle		= "How to with UML2";
	$pageTitle 		= "ATL Basic Examples and Patterns - " . $shortTitle;
	$pageKeywords	= "";
	$pageAuthor		= "Freddy Allilaire";
	
	# End: page-specific settings
	#
		
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML

	<link rel="stylesheet" type="text/css" href="../layout.css" media="screen" />

	<!-- Main part -->
	<div id="midcolumn">
		<h1>$pageTitle</h1>

		<img align="right" src="../../resources/atlLogoSmall.png" valign="top" style="padding-left: 10px;" alt="ATL Logo" />
		<hr class="clearer" />

		<div id="container>

			<h4 STYLE="font-size: 10pt; padding: 0; border-bottom: 2px solid #49457C; background-position: top left; background-repeat; repeat-x;"></h4>

			<h4 STYLE="font-size: 10pt; padding: 0; border-bottom: 2px solid #49457C; background-position: top left; background-repeat; repeat-x;">Introduction</h4>
			<table width="100%">
				<COLGROUP>
					<COL width="2%" />
					<COL width="98%" />
				</COLGROUP>
				<tr>
					<td></td>
					<td>
						<p align="justify">
							The goal of this article is to present some usefull points when dealing with UML2 in ATL. The following ATL concepts will be encountered:
							<ul>
    							<li>how to load UML2 metamodel</li>
    							<li>the superimposition mechanism</li>
    							<li>profile and stereotype application with and without the UML2 driver</li>
    						</ul>
    					</p>
					</td>
				</tr>
			</table>

			<h4 STYLE="font-size: 10pt; padding: 0; border-bottom: 2px solid #49457C; background-position: top left; background-repeat; repeat-x;">How to load UML2 metamodel</h4>
			<table width="100%">
				<COLGROUP>
					<COL width="2%" />
					<COL width="98%" />
				</COLGROUP>
				<tr>
					<td></td>
					<td>
						<p align="justify">
							The <a href="http://www.eclipse.org/uml2">UML2 project</a> provides not just the UML metamodel, but a complete implementation of it. Once you have UML2 installed, 
							in any Sample Ecore Editor you can use Load Resource->Browse Registered Packages to load the UML model which is accessible via the physical location URI.
						</p>
						<p align="justify">
							For an ATL transformation dealing with a UML2 model, you should not try to load the UML2 metamodel directly. This cannot properly work because the UML2 
							metamodel is not self-sufficient: it cannot work without the Java code provided in the UML2 plugin. You should use the "EMF Registry" button in the 
							launch configuration to use the UML2 metamodel already registered in the EMF EPackageRegistry by the UML2 plugin (by choosing the 
							"http://www.eclipse.org/uml2/2.1.0/UML" URI).
						</p>
						<p align="justify">
							Using this mechanism to load the UML2 metamodel will allow you to invoke methods available from the UML2 API (e.g. applyProfile).
						</p>
						<h5 STYLE="font-size: 10pt; border-bottom: 2px solid;">Example step by step</h5>
						<p align="justify">
							The following screenshots present an ATL launching configuration example using UML2 metamodel:
						</p>
						<p align="justify">
							First you should select the folder and the ATL transformation.
						</p>
						<p align="center">
							<img src="img/atlConfigurationTabFirst.PNG" width="500" />
						</p>
						<p align="justify">
							When the ATL transformation is selected the launch configuration is pre-filled in. This example is a transformation between a UML class diagram and a UML profile.
							Now you should click on the "EMF Registry" button to select UML2 URI of the UML2 metamodel.
						</p>
						<p align="center">
							<img src="img/atlConfigurationTabSecond.PNG" width="500" />
						</p>
						<p align="justify">
							This popup lists the content of the EMF Registry. You shoud select the corresponding URI of your UML model.
							Since UML 2.1, the URI is http://www.eclipse.org/uml2/2.1.0/UML. For UML model created with a previous version of UML2 plugin, you may need to select an other URI. 
						</p>
						<p align="center">
							<img src="img/registeredEPackages.PNG" width="200" />
						</p>
						<p align="justify">
							You can fill in the missing fields (input and output models of your transformation). You are now ready to execute your ATL transformation dealing with UML2.							
						</p>
						<p align="center">
							<img src="img/atlConfigurationTabFinal.PNG" width="500" />
						</p>
						<p align="justify">
							Thanks to this feature you can load UML2 models with profiles:
							<ul>
								<li>the model should be specified as a source model,</li>
    							<li>the UML2 profile should be also specified as a source model,</li>
    							<li>the UML2 plugin URI (e.g. "http://www.eclipse.org/uml2/2.1.0/UML") should be the corresponding metamodel.</li>
							</ul>
						</p>
					</td>
				</tr>
			</table>
			
			<h4 STYLE="font-size: 10pt; padding: 0; border-bottom: 2px solid #49457C; background-position: top left; background-repeat; repeat-x;">UML2 and Superimposition</h4>
			<table width="100%">
				<COLGROUP>
					<COL width="2%" />
					<COL width="98%" />
				</COLGROUP>
				<tr>
					<td></td>
					<td>
						<p align="justify">
							While ATL transformation modules and queries are normally run by themselves, that is one transformation module or query at a time, it is also possible to superimpose 
							several transformation modules on top of eachother. The end result is a transformation module that contains the union of all transformation rules and all helpers, 
							where it is possible for a transformation module to override rules and helpers from the transformation modules underneath. Below is an example of a typical use case 
							for superimposition: the transformation rules of the UML2Copy module are reused and overridden where necessary by the UML2Profiles module. 
						</p>
						<p align="center">
	  						<img src="img/ATL_Superimposition-example.png" width="500" />
						</p>
						<p align="center">
	  						<img src="img/advancedTabFirst.PNG" width="500" />
						</p>
						<p align="center">
	  						<img src="img/advancedTabFinal.PNG" width="500" />
						</p>
						<p align="center">
	  						<img src="img/popupSuperImpose.PNG" width="200" />
						</p>
						<p align="justify">
							The UML2Copy transformation module includes a transformation rule for every meta-class instance it must copy. This amounts to approximately 200 rules for the entire 
							UML2 meta-model. Any refinement transformation basically needs to copy all meta-class instances, except for the few meta-class instances that are refined. The 
							UML2Profiles transformation module applies a profile to the "uml::Model" instance, provided it was not yet applied. All other elements should just be copied. To 
							achieve this, the UML2Profiles module is superimposed on the UML2Copy module. It overrides the "Model" rule, which copies each "uml::Model" instance, by a version 
							that checks that the profile we want to apply has already been applied. It also introduces a new rule "ModelProfile", which checks that the profile we want to apply 
							has not been applied and then applies the profile. The resulting transformation contains all rules from the above figure that have not been striked through. Note 
							that superimposition is a load-time construct: there is no real transformation module that represents the result of superimposing several modules on top of 
							eachother. Instead, several modules are simply loaded on top of eachother, overriding existing rules and adding new rules.
						</p>
						<p align="justify">
							For more details on <b>Superimposition</b>, you can take a look to the documentation available on the wiki: 
							<a href="http://wiki.eclipse.org/ATL_Superimposition">http://wiki.eclipse.org/ATL_Superimposition</a>.
						</p>
					</td>
				</tr>
			</table>

			<h4 STYLE="font-size: 10pt; padding: 0; border-bottom: 2px solid #49457C; background-position: top left; background-repeat; repeat-x;">Applying UML2 Profile and Stereotype</h4>

			<table width="100%">
				<COLGROUP>
					<COL width="2%" />
					<COL width="98%" />
				</COLGROUP>
				<tr>
					<td></td>
					<td>
						<p align="justify">
							A profile <a href="http://en.wikipedia.org/wiki/Profile_%28UML%29">[1]</a> in UML provides a generic extension mechanism for building UML models in particular domains. Profiles are based on additional stereotypes and tagged 
							values that are applied to elements, attributes, methods, links, and link ends. A profile is a collection of such extensions and restrictions that together 
							describe some particular modeling problem and facilitate modeling constructs in that domain. UML profiles tailor the language to specific areas: business 
							modeling and others.
						</p>
						<p align="justify">
							Stereotypes <a href="http://en.wikipedia.org/wiki/Stereotype_%28UML%29">[2]</a> allow you to extend the vocabulary of the UML so that you can create new model elements, derived from existing ones, but that have specific properties 
							that are suitable for your problem domain. They are used for classifying or marking the UML building blocks in order to introduce new building blocks that speak 
							the language of your domain and that look like primitive, or basic, model elements.
						</p>
						<p align="justify">
							You might have problems with tools that do not understand your specialized metaclasses. That's one of the reasons why the profile route is preferrable. Whether 
							a particular tool can understand your metatypes depends on how flexible the implementation was made ... you may want to look at extensibility options in the tool 
							you wish to work with.  RSA for example allows users to extend pallettes, menus and tooling for such things.
						</p>
						<h5 STYLE="font-size: 10pt; border-bottom: 2px solid;">Without UML2 Driver</h5>
						<p align="justify">
<pre>
endpoint rule end() {
	do {
		for (elm in UML2!Model.allInstancesFrom('OUT')) {
			elm.applyProfile(UML2!Profile.allInstancesFrom('PRO_STD')->any(e | e.name='Standard'));
		}
		for (elm in UML2!Class.allInstancesFrom('OUT')) {
			elm.applyStereotype(UML2!Stereotype.allInstancesFrom('PRO_STD')->any(e | e.name='Metaclass'));
		}
	}
}
</pre>
						</p>

						<h5 STYLE="font-size: 10pt; border-bottom: 2px solid;">With UML2 Driver</h5>
						<p align="center">
	  						<img src="img/uml2Driver.PNG" width="500" />
						</p>
						<p align="justify">
<pre>
rule Model {
    from s : UML2!Model
    to t : UML2!Model (
		...
    do {
		t.applyProfile(UML2!Profile.allInstancesFrom('PRO_STD')->any(e | e.name='Standard'));
	}
}

rule CallOperationAction {
    from s : UML2!Class
    to t : UML2!Class (
		...
    do {
		t.applyStereotype(UML2!Stereotype.allInstancesFrom('PRO_STD')->any(e | e.name='Metaclass'));
	}
}
</pre>
						</p>
					</td>
				</tr>
			</table>

			<h4 STYLE="font-size: 10pt; padding: 0; border-bottom: 2px solid #49457C; background-position: top left; background-repeat; repeat-x;">
				<a name="references">References</a>
			</h4>

			<table width="100%">
				<tr valign="top">
					<td>
						<a name="[1]" href="http://en.wikipedia.org/wiki/Profile_%28UML%29">
							[1]
						</a>
					</td>
					<td>
						UML Profile definition from Wikipedia.
					</td>
				</tr>
				<tr valign="top">
					<td>
						<a name="[1]" href="http://en.wikipedia.org/wiki/Stereotype_%28UML%29">
							[2]
						</a>
					</td>
					<td>
						UML Stereotype definition from Wikipedia.
					</td>
				</tr>
			</table>

			<h4 STYLE="font-size: 10pt; padding: 0; border-bottom: 2px solid #49457C; background-position: top left; background-repeat; repeat-x;">
				<a name="download">Download</a>
			</h4>

			<table width="100%">
				<COLGROUP>
					<COL width="10%">
					<COL width="25%">
					<COL width="65%">
				</COLGROUP>
				<tr>
					<td align="right">
						<a href="">
							<img style="vertical-align:text-top;" src="/resources/images/code.png"/>
						</a>
					</td>
					<td align="left">
						<a href="http://www.eclipse.org/atl/atlTransformations/#UMLCD2UMLProfile"><h3>UML2 example</h3></a>
					</td>
					<td align="left">Source code for the UML2 example</td>
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
						The present work is being supported by the <a href="http://www.usine-logicielle.org">Usine Logicielle project of the System@tic Paris Region Cluster</a>.
					</td>
				</tr>
			</table>
			
		</div>
	</div>

	<div id="rightcolumn">
		<div class="sideitem">
			<h6>General Information</h6>
			<ul>
				<li style="list-style:none">November 2007</li>
				<li style="list-style:none">By <a href="http://www.sciences.univ-nantes.fr/lina/atl/contrib/allilaire">Freddy Allilaire</a> (INRIA)</li>
				<li style="list-style:none"><br />Please, ask your questions on the <a href="news://news.eclipse.org/eclipse.modeling.m2m">M2M newsgroup</a></li>
			</ul>
		</div>
	</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>