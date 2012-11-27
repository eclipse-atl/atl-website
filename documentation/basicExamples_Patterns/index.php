<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# template.php
	#
	# Author: 		Freddy Allilaire
	# Date:			2005-12-05
	#
	# Description: Type your page comments here - these are not sent to the browser
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "ATL Basic Examples and Patterns";
	$pageKeywords	= "";
	$pageAuthor		= "Freddy Allilaire";
	
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML

	<div id="midcolumn">
    	<p align="justify">
    		This section provides a set of basic examples and patterns.
    	</p>
    	
		<hr class="clearer" />

	    <div class="homeitem3col" >
	    	<ul>	
				<li style="list-style:none">
					<table width="100%" cellspacing="0">
						<tr>
							<td width="80%">
								<h2><a href="../old/ATLUseCase_Families2Persons.pdf">Families to Persons</a></h2>
							</td>
							<td width="20%" align="right">
								<b>February 2007</b>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<table STYLE="border : 1px dotted #000000;" width="100%" cellspacing="0" cellpadding="20" width="100%" bgcolor="#F8F8F8">
									<tr>
										<td valign="top">
											This presentation describes a very simple model transformation example, some kind of ATL "hello world".
											<p>
												<i>ATL concepts encountered:</i>
												Header section,
												Helper functions,
												Matched rules 
											</p>
											<p>
												<i>Additional concepts encountered:</i>
												Metamodel and conformance relation,
												ATL IDE (ADT)
											</p>
											<p style="margin-left:3em;text-indent:-2em;">
												<a href="../old/ATLUseCase_Families2Persons.pdf">
													<img style="vertical-align:text-top;" src="/resources/images/presentation.png"/> Presentation Families to Persons
												</a>
												<br/>
												February 2007
												<br/>
												by Freddy Allilaire, Frédéric Jouault (INRIA)
											</p>
											<p style="margin-left:3em;text-indent:-2em;">
												<a href="http://www.eclipse.org/atl/atlTransformations/Families2Persons/Families2Persons.zip">
													<img style="vertical-align:text-top;" src="/resources/images/code.png"/> Source code Families to Persons
												</a>
												<br/>
												February 2007
												<br/>
												by Freddy Allilaire, Frédéric Jouault (INRIA)
											</p>
										</td>
									</tr>
								</table>
							</td>
						</tr>
					</table>				
				</li>
				<li style="list-style:none">
					<table width="100%" cellspacing="0">
						<tr>
							<td width="80%">
								<h2><a href="article.php?file=Tree2List/index.html">Tree to List</a></h2>
							</td>
							<td width="20%" align="right">
								<b>July 2007</b>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<table STYLE="border : 1px dotted #000000;" width="100%" cellspacing="0" cellpadding="20" width="100%" bgcolor="#F8F8F8">
									<tr>
										<td valign="top">
      		  								This transformation presents a basic example where a tree is transformed into a list. This kind of transformation is usually made by an 
      		  								imperative Depth First Traversal algorithm.
											<p>
												<i>ATL concepts encountered:</i>
												Matched rules (one with a guard), 
      		  									Helper functions (one being recursive),
   												Collection related functions,
   												Enumeration, and
   												ATL resolve algorithm. 
											</p>
											<p style="margin-left:3em;text-indent:-2em;">
												<a href="article.php?file=Tree2List/index.html">
													<img style="vertical-align:text-top;" src="/resources/images/html.png"/> Article Tree to List
												</a>
												<br/>
												July 2007
												<br/>
												by Cyril Faure (<a href="http://www.c-s.fr/">C-S</a>), Freddy Allilaire (INRIA)
											</p>
											<p style="margin-left:3em;text-indent:-2em;">
												<a href="http://www.eclipse.org/atl/atlTransformations/Tree2List/Tree2List.zip">
													<img style="vertical-align:text-top;" src="/resources/images/code.png"/> Source code Tree to List
												</a>
												<br/>
												July 2007
												<br/>
												by Cyril Faure (<a href="http://www.c-s.fr/">C-S</a>), Freddy Allilaire (INRIA)
											</p>
										</td>
									</tr>
								</table>
							</td>
						</tr>
					</table>
				</li>
				<li style="list-style:none">
					<table width="100%" cellspacing="0">
						<tr>
							<td width="80%">
								<h2><a href="article.php?file=ListMetamodelRefactoring/index.html">List Metamodel Refactoring</a></h2>
							</td>
							<td width="20%" align="right">
								<b>December 2007</b>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<table STYLE="border : 1px dotted #000000;" width="100%" cellspacing="0" cellpadding="20" width="100%" bgcolor="#F8F8F8">
									<tr>
										<td valign="top">
											In this example, we present some basic concepts of ATL through a simple use case. Our working context is the creation of a bridge between 
											two different versions of a List metamodel (A and B). This bridge consists on an ATL transformation from the version A to the version B. 
											<p>
												<i>ATL concepts encountered:</i>
												Automatic traceability support in ATL, Handling collection, and	String operation.
											<p style="margin-left:3em;text-indent:-2em;">
												<a href="article.php?file=ListMetamodelRefactoring/index.html">
													<img style="vertical-align:text-top;" src="/resources/images/html.png"/> Article List Metamodel Refactoring
												</a>
												<br/>
												December 2007
												<br/>
												by Cyril Faure (<a href="http://www.c-s.fr/">C-S</a>), Freddy Allilaire (INRIA)
											</p>
											<p style="margin-left:3em;text-indent:-2em;">
												<a href="http://www.eclipse.org/atl/atlTransformations/ListMetamodelRefactoring/ListMetamodelRefactoring.zip">
													<img style="vertical-align:text-top;" src="/resources/images/code.png"/> Source code List Metamodel Refactoring
												</a>
												<br/>
												December 2007
												<br/>
												by Cyril Faure (<a href="http://www.c-s.fr/">C-S</a>), Freddy Allilaire (INRIA)
											</p>
										</td>
									</tr>
								</table>
							</td>
						</tr>
					</table>
				</li>
				<li style="list-style:none">
					<table width="100%" cellspacing="0">
						<tr>
							<td width="80%">
								<h2><a href="article.php?file=Port/index.html">Port</a></h2>
							</td>
							<td width="20%" align="right">
								<b>January 2008</b>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<table STYLE="border : 1px dotted #000000;" width="100%" cellspacing="0" cellpadding="20" width="100%" bgcolor="#F8F8F8">
									<tr>
										<td valign="top">
											In this example, we present some basic concepts of ATL through a simple use case.
											This use case deals with situations where the source element meta type could not be simply matched with the target meta type.
											The only way to resolve the target meta type is to browse source model.
											<p>
												<i>ATL concepts encountered:</i>
												Matched rules and lazy (matched) rules, Avoiding some imperative constructs, and Code optimization.
											</p>
											<p style="margin-left:3em;text-indent:-2em;">
												<a href="article.php?file=Port/index.html">
													<img style="vertical-align:text-top;" src="/resources/images/html.png"/> Article Port
												</a>
												<br/>
												January 2008
												<br/>
												by Cyril Faure (<a href="http://www.c-s.fr/">C-S</a>), Freddy Allilaire (INRIA)
											</p>
											<p style="margin-left:3em;text-indent:-2em;">
												<a href="http://www.eclipse.org/atl/atlTransformations/Port/Port.zip">
													<img style="vertical-align:text-top;" src="/resources/images/code.png"/> Source code Port
												</a>
												<br/>
												January 2008
												<br/>
												by Cyril Faure (<a href="http://www.c-s.fr/">C-S</a>), Freddy Allilaire (INRIA)
											</p>
										</td>
									</tr>
								</table>
							</td>
						</tr>
					</table>
				</li>
				<li style="list-style:none">
					<table width="100%" cellspacing="0">
						<tr>
							<td width="80%">
								<h2><a href="article.php?file=SideEffect/index.html">Side Effect</a></h2>
							</td>
							<td width="20%" align="right">
								<b>January 2008</b>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<table STYLE="border : 1px dotted #000000;" width="100%" cellspacing="0" cellpadding="20" width="100%" bgcolor="#F8F8F8">
									<tr>
										<td valign="top">
											This case deals with the way to handle side effects induced while transforming an element. We will start from an imperative algorithm to create a 
											transformation between two metamodels. This algorithm will introduce a side effect problem. After several iteration a solution will be provided
											following ATL philosophy.
											<p>
												<i>ATL concepts encountered:</i>
												ATL imperative parts for dealing with complex situation, and
												Chain of ATL transformations to divide transformation complexity and to avoid imperative parts.												 
											</p>
											<p style="margin-left:3em;text-indent:-2em;">
												<a href="article.php?file=SideEffect/index.html">
													<img style="vertical-align:text-top;" src="/resources/images/html.png"/> Article Side Effect
												</a>
												<br/>
												January 2008
												<br/>
												by Cyril Faure (<a href="http://www.c-s.fr/">C-S</a>), Freddy Allilaire (INRIA)
											</p>
											<p style="margin-left:3em;text-indent:-2em;">
												<a href="http://www.eclipse.org/atl/atlTransformations/SideEffect/SideEffect.zip">
													<img style="vertical-align:text-top;" src="/resources/images/code.png"/> Source code Side Effect
												</a>
												<br/>
												January 2008
												<br/>
												by Cyril Faure (<a href="http://www.c-s.fr/">C-S</a>), Freddy Allilaire (INRIA)
											</p>
										</td>
									</tr>
								</table>
							</td>
						</tr>
					</table>
				</li>
	    	</ul>
	    </div>
		<hr class="clearer" />
	</div>
	
EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
