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
	$shortTitle		= "A Metamodel Independent Approach to Difference Representation";
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
				<li><a href="#overview"><b>Overview</b></a>
					<ul>
						<li><a href="#mmd">Difference Metamodel</a></li>
						<li><a href="#animation">Difference Animation</a></li>
					</ul>
				</li>
      			<li><a href="#relatedUseCases"><b>Related Use Cases</b></a></li>
			    <li><a href="#references"><b>References</b></a></li>
			    <li><a href="#download"><b>Download</b></a></li>
			</ul>
		</blockquote>
    	
		<hr class="clearer" />

		<div>
			<p align="justify">
				This document presents an ATL implementation of a metamodel independent approach to the representation of model differences which is agnostic of the calculation method. Given two models
				being differenced which conform to a metamodel, their difference is conforming to another metamodel derived from the former by an automated transformation. Interestingly, difference 
				models are firstclass artifacts which in turn induce other transformations, such that they can be applied to one of the differenced models to automatically obtain the other one. All 
				the code for the transformations in ATL and for the metamodels in KM3 is available <a href="http://www.di.univaq.it/diruscio/atlDiff.php">here</a>.
			</p>

			<h4 STYLE="font-size: 10pt; padding: 0; border-bottom: 2px solid #49457C; background-position: top left; background-repeat; repeat-x;"><a name="keywords"></a>Keywords</h4>
			<table width="100%">
				<colgroup>
					<col width="2%">
					<col width="98%">
				</colgroup>
				<tr>
					<td></td>
				    <td>
				    	<p align="justify">
				    		Metamodeling, 
				    		Model Difference, 
				    		Model Versioning and Evolution, 
				    		High-order tranformations
						</p>
					</td>
				</tr>
			</table>
		
			<h4 style="border-bottom: 2px solid rgb(73, 69, 124); padding: 0pt; font-size: 10pt; background-position: left top;"><a name="overview"></a>Overview</h4>

			<h5 STYLE="font-size: 10pt; padding: 0; border-bottom: 2px solid #49457C; background-position: top left; background-repeat; repeat-x;">Difference Metamodel<a name="mmd"> </a></h5>
			
			<table width="100%">
				<colgroup>
					<col width="2%">
					<col width="98%">
				</colgroup>
				<tr>
					<td></td>

					<td>
						<p align="justify">
							Given two models being differenced and that conform to a given metamodel MM, their difference conforms to another metamodel MMD that can be automatically derived from MM. 
							In particular, the new metamodel has to provide with the constructs able to express the modifications that have to be performed on the initial version of a given model in 
							order to obtain the final one. The approach permits the representation of changes that can grouped as follows:
							<ol>
								<li>additions: new elements are added in the final model;</li>
								<li>deletions: some of the existing elements in the initial model are deleted as a whole;</li>
								<li>changes: a new version of the model can consist of some updates of already existing	elements;</li>
							</ol>
						</p>

						<br />
						<p align="center">
							<a href="img/generalPicture.png"><img src="img/generalPicture.png" width="70%" ></a>
							<br />
							<br />
							<b>Figure 1: General Picture</b>
						</p>

						<p align="justify">
							For instance, the metaclasses AddedClass, DeletedClass and ChangedClass in Figure 3
							are derived by the metaclass Class depicted in the simplified UML metamodel depicted in Figure 2.
							The resulting metamodel allows the representation of the differences among two distinct versions
							of a UML model. 
						</p>

						 <p align="center">
					        <a href="img/umlMetamodel.png"><img  src="img/umlMetamodel.png" width="60%"></a>
					        <br />
					        <br />
					        <b>Figure 2: Sample UML Metamodel</b>
						 </p>

						<p align="justify">
							Changes of already existing elements are represented through Changed elements as the class updates which are given by means of ChangedClass instances each of them 
							associated with a corresponding updatedElement class. The latter specifies how ChangedClass has to be modified in the new model version in terms of attributes and 
							associations. The Changed modification is kind of shortcut which groups simple modifications consisting of Added and Deleted only reducing the size of the overall 
							difference model. The features which are not represented in the ChangedClass instance will remain unchanged and will be simply copied in the new version of the given 
							element. Finally, the features specified both in the ChangedClass instance and in the associated updatedElement will be modified according to descriptions given in 
							the last one.
						</p>
									
					  	<p align="center">
							<a href="img/extendedUmlMetamodel.png"><img src="img/extendedUmlMetamodel.png" width="60%"></a>
							<br />
							<br />
							<b>Figure 3: Sample Generated UML Difference Metamodel</b>
						</p>

						<p align="justify">
							According to the general picture in Figure 1, a model transformation <i>MM2MMD</i> is defined in order to produce the difference metamodel MMD associated with MM 
							and a fragment is reported in the following fragment:
						</p>

						<p align="center">
							<a href="img/mm2mmd.jpg"><img src="img/mm2mmd.jpg" width="80%" ></a>
							<br />
							<br />
							<b>Figure 4: Fragment of the MM2MMD transformation</b>
						</p>
	        		</td>
      			</tr>
			</table>

			<h5 STYLE="font-size: 10pt; padding: 0; border-bottom: 2px solid #49457C; background-position: top left; background-repeat; repeat-x;">Difference Animation<a name="animation"></h5>
  			<table width="100%">
    			<colgroup>
    				<col width="2%">
    				<col width="98%">
    			</colgroup>
    			<tr>

   			    <td></td>

 			    <td>
   					<p align="justify">
   						A difference model can be executed to "reconstruct" a final model starting from the initial one. Unfortunately, this is intrinsically difficult and it requires a high-order 
   						transformation. In particular, according to the lower side of Figure 5, the model transformation (<i>MMD_MM2MM</i>) can be applied to a model M1 in order to obtain a target 
   						M2 with respect to the differences specified in a model MD. Such a model conforms to the metamodel MMD automatically obtained from MM as previously discussed.
					</p>

					<p align="center">
				        <a href="img/differenceAnimation.png"><img  src="img/differenceAnimation.png" width="50%" ></a>
						<br />
						<br />
						<b>Figure 5: Difference Animation</b>
					</p>
        
       				<p align="justify">
       					The <i>MMD_MM2MM</i> transformation implements the rules to apply on a source model M1 the additions, deletions and changes specified in the model MD. More precisely, 
       					considering the dashed part in Figure 1, for each metaclass MC in the metamodel MM, the	transformation <i>MMD_MM2MM</i> contains the following rules: 
						<ol>
							<li>
								<i>AddedMC2MC</i>: it manages the elements in the difference model MD that conform to the AddedMC metaclass. For each element, the rule creates in M2 a new instance 
								of MC setting the corresponding structural features according to the specification of the AddedMC element;
							</li>
							<li>
								<i>ChangedMC2MC</i>: it updates already existing elements in the initial model of type MC according to the modifications specified in MD through ChangedMC instances;
							</li>
							<li>
								<i>UnchangedMC2MC</i>: it copies the unmodified instances of the metaclass MC which have to be the same both in M1 and M2. The source pattern of this rule has a 
								guard matching only the MC elements which have not been changed nor deleted.
							</li>
						</ol>
					</p>

					<p align="justify">
						Concerning the management of DeletedMC instances, no rules are provided, since the guard in the source pattern of the UnchangedMC2MCrule guarantees that elements which have 
						been specified as deleted in the difference model are not matched during the transformation phase (hence, not copied in the target model M2).
					</p>

					<p  align="justify">
						An ATL implementation of this high-order transformation has been defined and it consists of three main rules (see Figure 6) that are AddedClass (lines 4-25), UnchangedClass 
						(lines 27-49), and ChangedClass (lines 51-70).  They are dedicated to the generation of the three kinds of rules needed for the management of each metaclass specified in the 
						source difference model. Depending on the structural features of the matched metaclass, a number of helpers are created. Since such generations are quite complex and it is 
						difficult to specify them in a declarative way, ATL called rules and action blocks are used. For instance, the lines 21-24 in Figure 6 implements an action blocks where the 
						called rule CreateAddedHelper is invoked in order to generate the target helpers needed for the management of additions specified in a given model difference (see the lower 
						side of Figure 5)
					</p>

					<p align="center">
				        <a href="img/MMD2ATL.jpg"><img  src="img/MMD2ATL.jpg" width="50%" ></a>
				        <br />
						<br />
						<b>Figure 6: Fragment of the MMD2ATL high-order transformation</b>
					</p>

					<p align="justify">
						This work is a first attempt to support model versioning and evolution in a MDE setting. Further work will address the problem of conflict detection and resolution. When 
						software is developed in a distributed environment, parallel modifications can give place to conflicts which are usually detected by means of traditional lexical approaches 
						which lack of abstraction and can give place to false positive and negative issues.
					</p>
        		</td>
     			</tr>
  			</table>

			<h4 style="border-bottom: 2px solid rgb(73, 69, 124); padding: 0pt; font-size: 10pt; background-position: left top;"><a name="relatedUseCases"></a>Related Use Cases</h4>
			<table>
				<colgroup>
					<col width="2%" />
					<col width="98%" />
				</colgroup>
		    	<tr>
			        <td></td>
			        <td>
				        <p align="justify">
							<a href="http://www.eclipse.org/gmt/amw/usecases/compare/">AMW Use Case - Metamodel comparison and model migration</a>
				        </p>
			        </td>
		    	</tr>
		  	</table>

			<h4 style="border-bottom: 2px solid rgb(73, 69, 124); padding: 0pt; font-size: 10pt; background-position: left top;"><a name="references"></a>References</h4>
			<table width="100%">
	      		<tr valign="top">
			      	<td>
	       				<a href="http://www.di.univaq.it/diruscio/modelDifferenceTR.php">[1]</a>
        			</td>
        			<td>
						A.Cicchetti, D.Di Ruscio, A. Pierantonio. 
						<em>A Metamodel Independent Approach to Difference Representation,</em>
						Dipartimento di Informatica, Universit&agrave; degli Studi dell'Aquila, TRCS 005/2007, 2007
			        </td>
	      		</tr>
			</table>

  			<h4 style="border-bottom: 2px solid rgb(73, 69, 124); padding: 0pt; font-size: 10pt; background-position: left top;"><a name="download">Download</a></h4>
  			<table width="100%">
	  			<colgroup>
	  				<col width="25%" />
	  				<col width="75%" />
	  			</colgroup>
				<tr>
					<td align="center">
						<a href="http://www.di.univaq.it/diruscio/atlDiff.php"><h3>Complete Approach</h3></a>
					</td>
					<td>
						Current implementation of the approach, examples and documentation.
			        </td>
				</tr>
				<tr>
			        <td align="center">
			        	<a href="http://www.di.univaq.it/diruscio/mm2mmd.php">
					        <h3>MM2MMD Transformation</h3>
				        </a>
					</td>
			        <td>ATL transformation depicted in Figure 4.</td>
				</tr>
				<tr>
			        <td align="center">
			        	<a href="http://www.di.univaq.it/diruscio/mmd2atl.php">
				        	<h3>MMD2ATL Transformation</h3>
			        	</a>
			        </td>
			        <td>
			        	High-order ATL transformation depicted in Figure 6.
					</td>
				</tr>
 			</table>
		</div>
	</div>

	<div id="rightcolumn">
		<div class="sideitem">
			<h6>General Information</h6>
			<ul>
				<li style="list-style-type: none; list-style-image: none; list-style-position: outside;">April 2007</li>
				<li style="list-style-type: none; list-style-image: none; list-style-position: outside;">
					By <a href="www.di.univaq.it/cicchetti">Antonio Cicchetti</a>,
					<a href="www.di.univaq.it/diruscio">Davide Di Ruscio</a> and
					<a href="www.di.univaq.it/alfonso">Alfonso Pierantonio</a> (Universit&agrave; dell'Aquila)
			    </li>
			    <li style="list-style-type: none; list-style-image: none; list-style-position: outside;"><br />
					Please, ask your questions to <u>diruscio [at] di [dot] univaq [dot] it</u>
				</li>
			</ul>
		</div>
	</div>
	
EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
