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
	$shortTitle		= "The Tree to List example";
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
							This transformation presents a basic example where a tree is transformed into a list. This kind of transformation is usually made by
							an imperative Depth First Traversal algorithm. Moreover with this example, the following ATL concepts will be encountered:
							<ul>
								<li>matched rules (one with a guard)</li>
								<li>helper functions (one being recursive)</li>
								<li>collection related functions</li>
								<li>an enumeration</li>
								<li>ATL resolve algorithm</li>
							</ul>
						</p>
					</td>
				</tr>
			</table>

			<h4 STYLE="font-size: 10pt; padding: 0; border-bottom: 2px solid #49457C; background-position: top left; background-repeat; repeat-x;">The Tree Metamodel</h4>
			<table width="100%">
				<COLGROUP>
					<COL width="2%" />
					<COL width="98%" />
				</COLGROUP>
				<tr>
					<td></td>
					<td>
						<p align="center">
	  						<img src="img/MMTree.PNG" />
			  				<br /><br />
							<b>Tree Metamodel</b>
						</p>
						<p align="justify">
							This metamodel is pretty simple and represents a tree whose elements have a name and nodes' leaves can be of small, medium or big size. 
							The root element should be a Node.
						</p>
					</td>
				</tr>
			</table>

			<h4 STYLE="font-size: 10pt; padding: 0; border-bottom: 2px solid #49457C; background-position: top left; background-repeat; repeat-x;">The Element List Metamodel</h4>
			<table width="100%">
				<COLGROUP>
					<COL width="2%" />
					<COL width="98%" />
				</COLGROUP>
				<tr>
					<td></td>
					<td>
						<p align="center">
	  						<img src="img/MMElementList.PNG" />
			  				<br /><br />
							<b>List Metamodel</b>
						</p>
						<p align="justify">
							The ElementList metamodel aims to represent an ordered list of elements, each element having a name. The root element should be a RootElement.
						</p>
					</td>
				</tr>
			</table>
			
			<h4 STYLE="font-size: 10pt; padding: 0; border-bottom: 2px solid #49457C; background-position: top left; background-repeat; repeat-x;">The Tree to ElementList Transformation: Step by step</h4>

			<table width="100%">
				<COLGROUP>
					<COL width="2%" />
					<COL width="98%" />
				</COLGROUP>
				<tr>
					<td></td>
					<td>
						<h5 STYLE="font-size: 10pt; border-bottom: 2px solid;">1 - The principles and goals</h5>
						<p align="justify">
							Let <b>MMTree</b> be the tree metamodel's name and <b>MMElementList</b> be the ElementList metamodels' name.
						</p>
						<p align="justify">
							In this transformation, we want:
							<ul>
								<li>the tree root (of type MMTree!Node) to be transformed into the Element list "root" (of type MMElementList!RootElement)</li>
								<li>a MMTree!Leaf element should be transformed into an MMElementList!CommonElement element</li>
								<li>the root element's <b>elements</b> reference should contain an ordered set composed of the "transformed equivalent" of the leaves such as:
									<ul>
										<li>all big sized leaves comes first (in the tree's DFS order)</li>
										<li>then all medium sized leaves (still in the tree's DFS order)</li>
										<li>then the small sized one (still in the tree's DFS order)</li>
									</ul>
								</li>
							</ul>
						</p>
						<p align="justify">
							The figure below instantiates a transformation example. The nodes' names are represented by an integer and the tree root is named "0".
						</p>
						<p align="center">
	  						<img src="img/Tree2List_GraphicalOverview.PNG" />
			  				<br /><br />
							<b>Tree2List Big Picture</b>
						</p>
						<p align="justify">
							We can easily see the biggest part of this transformation is to "build" the "elements" reference of the MMElementList!RootElement concept.
							One additional goal of this example will be to match to the main ATL philosophy as much as we can. I.e, we will avoid to use imperative part and we will
							try to be the most modular as possible.
						</p>

						<h5 STYLE="font-size: 10pt; border-bottom: 2px solid;">2 - Writing the first rule</h5>
						<p align="justify">
							We start this example with the matched rule <b>Tree Node to Root Element</b> where a <b>Tree Node</b> is transformed into a <b>Root Element</b>.
							A matched rule enables to match some of the model elements of a source model, and to generate from them a number of distinct target model elements.
						</p>

					 	<table STYLE="border : 1px dotted #AAAAAA;" width="100%" cellspacing="0" cellpadding="20">
							<td>
								<code>
<pre>
<font class="ATL_Keyword">rule</font> TreeNode2RootElement {
	<font class="ATL_Keyword">from</font>
		rt : MMTree!Node
	<font class="ATL_Keyword">to</font>
		lstRt : MMElementList!RootElement (
			name <- rt.name
		)
}
</pre>
								</code>
							</td>
						</table>

						<h5 STYLE="font-size: 10pt; border-bottom: 2px solid;">3 - Filtering the tree node root</h5>
						<p align="justify">
							With the rule above, for each <b>Tree Node</b> in the source model a <b>Root Element</b> is created in the target model. This does not match exactly with our 
							requirements. Here we want to catch	only the tree node root. For only filtering the root, we should add a guard to this rule.
						</p>
						<p align="justify">
						 	In order to clear our transformation code as much as possible, we will use an helper to define the guard. An helper is an auxiliary function that computes a result 
						 	needed in a rule. See below the code of the guard <b>isTreeNodeRoot</b>:
						</p>

					 	<table STYLE="border : 1px dotted #AAAAAA;" width="100%" cellspacing="0" cellpadding="20">
							<td>
								<code>
<pre>
<font class="ATL_Keyword">helper context</font> MMTree!TreeElement <font class="ATL_Keyword">def</font> : isTreeNodeRoot() : <font class="ATL_OCLType">Boolean</font> =
	self.refImmediateComposite().oclIsUndefined();
	<font class="ATL_Comment">-- refImmediateComposite() is a reflective operation that returns the immediate composite (e.g. the immediate container) of self
	-- So if there is no immediate composite then the current node is the root (we suppose in our example that there is only one root).</font>
</pre>
								</code>
							</td>
						</table>

						<p align="justify">
							We can now call this helper in the guard of the rule <b>Tree Node Root to Root Element</b> (NB: rule name has been updated from TreeNode2RootElement to TreeNodeRoot2RootElement).
						</p>

					 	<table STYLE="border : 1px dotted #AAAAAA;" width="100%" cellspacing="0" cellpadding="20">
							<td>
								<code>
<pre>
<font class="ATL_Keyword">rule</font> TreeNodeRoot2RootElement {
	<font class="ATL_Keyword">from</font>
		rt : MMTree!Node (rt.isTreeNodeRoot())
	<font class="ATL_Keyword">to</font>
		lstRt : MMElementList!RootElement (
			name <- rt.name
		)
}
</pre>
								</code>
							</td>
						</table>

						<h5 STYLE="font-size: 10pt; border-bottom: 2px solid;">4 - Applying the ATL philosophy</h5>
						<p align="justify">
							The first idea to complete our transformation is to add a second rule to transform a <b>Leaf</b> into a <b>List Element</b>. The corresponding code is:</p>

					 	<table STYLE="border : 1px dotted #AAAAAA;" width="100%" cellspacing="0" cellpadding="20">
							<td>
								<code>
<pre>
<font class="ATL_Keyword">rule</font> TreeNodeRoot2RootElement {
	<font class="ATL_Keyword">from</font>
		rt : MMTree!Node (rt.isTreeNodeRoot())
	<font class="ATL_Keyword">to</font>
		lstRt : MMElementList!RootElement (
			name <- rt.name
		)
}

<font class="ATL_Keyword">rule</font> Leaf2CommonElement {
	<font class="ATL_Keyword">from</font>
		s : MMTree!Leaf
	<font class="ATL_Keyword">to</font>
		t : MMElementList!CommonElement(
			name <- s.name
		)
}
</pre>
								</code>
							</td>
						</table>

						<h5 STYLE="font-size: 10pt; border-bottom: 2px solid;">5 - Getting all the tree root children and filling the containment reference</h5>
						<p align="justify">
							Executing the previous transformation will create the list root element from one side and the elements from other side. At this step of the transformation, there is no
							link between the list root and the elements of this list. Hence, one point should be solved:
							<ul>
								<li>
									How to put the created elements in the containment reference (called <b>elements</b>) of the concept <b>MMElementList!RootElement</b> ?
								</li>
							</ul>
						</p>
						<p align="justify">
							First of all, we need to create an helper to retrieve and to return all the children of a node.
						</p>
						<p align="justify">
							This helper proceeds to a Depth First Traversal (DFS) algorithm and returns the list of all leaves encountered during the search.
							We use a recursive function on the tree root's children which would build a <b>MMElementList!CommonElement</b> list 
							corresponding to the leaves encountered during the DFS. Briefly, the algorithm:
							<ul>
								<li>iterates on the current node children</li>
								<li>tests the current child type (node or leaf)
									<ul>
										<li>if it is a node, a recursive call is made,</li>
										<li>else the current child is added to the children list</li>
									</ul>
								</li>
							</ul>
						</p>

					 	<table STYLE="border : 1px dotted #AAAAAA;" width="100%" cellspacing="0" cellpadding="20">
							<td>
								<code>
<pre>
<font class="ATL_Keyword">helper context</font> MMTree!Node <font class="ATL_Keyword">def</font> : getAllChildren () : <font class="ATL_OCLType">OrderedSet</font>(MMTree!TreeElement) =
	self.children->iterate( child ; elements : <font class="ATL_OCLType">OrderedSet</font>(MMTree!TreeElement) = 
		<font class="ATL_OCLType">OrderedSet{}</font> | 
		<font class="ATL_Keyword">if</font> child.oclIsTypeOf(MMTree!Node) <font class="ATL_Keyword">then</font>
			elements.union(child.getAllChildren ()) <font class="ATL_Comment">-- NODE : recursive call</font>
		<font class="ATL_Keyword">else</font>
				elements.append(child) <font class="ATL_Comment">-- LEAF</font>
		<font class="ATL_Keyword">endif</font>
		)
	;
</pre>
								</code>
							</td>
						</table>

						<p align="justify">
							To solve our containment problem, we can use the following code:
						</p>

					 	<table STYLE="border : 1px dotted #AAAAAA;" width="100%" cellspacing="0" cellpadding="20">
							<td>
								<code>
<pre>
<font color="#7f0055"><b>rule</b></font> TreeNodeRoot2RootElement {
	<font class="ATL_Keyword">from</font>
		rt : MMTree!Node (rt.isTreeNodeRoot()) 
	<font class="ATL_Keyword">to</font>
		lstRt : MMElementList!RootElement (
			name <- rt.name,
			elements <- elmLst
		),
		elmLst : <font class="ATL_Keyword">distinct</font> MMElementList!CommonElement <font class="ATL_Keyword">foreach</font>(leaf <font class="ATL_Keyword">in</font> rt.getAllChildren())(
			name <- leaf.name
		)
}
</pre>
								</code>
							</td>
						</table>

						<p align="justify">
							With this solution, the rule <b>Leaf2CommonElement</b> (created in the previous step) is now useless and must be deleted. The transformation is done with only one matched rule.
							For each element of its <b>elements</b> reference, we create a MMElementList!CommonElement. Each element of this list is computed via a distinct keyword which 
							creates a CommonElement for each Leaf of a list we compute via an helper.
						</p>
						<h5 STYLE="font-size: 10pt; border-bottom: 2px solid;">6 - Using the ATL Resolve Algorithm</h5>
						<p align="justify">
							In this example, we want to follow as much as possible the ATL convention. So in this step, our goal is to make more "modular" our transformation. This could be done
							by using the ATL Resolve Algorithm.
						</p>
						<p align="justify">
						 	<table border="1" width = "100%" cellspacing="0" cellpadding="20">
								<td align="justify" bgcolor="#b0c8f4">
								 	<b>Execution Semantics of Matched Rules and ATL Resolve Algorithm</b><br /><br />
										Matched rules are executed over matches of their source pattern. For a given match the target elements of the specified types are 
										created in the target model and are initialized using the bindings. Executing a rule on a match additionally creates a traceability link in the internal 
										structures of the transformation engine. This link relates three components: the rule, the match (i.e. source elements) and the newly created target 
										elements. Actual feature initialization uses a specific value resolution algorithm, called ATL resolve algorithm. After the expression of a binding 
										has been evaluated, the resulting value is first resolved before being assigned to the corresponding target feature. Resolution depends on the type 
										of the value. If the type is primitive, then the value is simply assigned to the corresponding feature. If its type is a metamodel type there are two 
										possibilities:
										<ol>
											<li>when the value is a target element it is simply assigned to the feature;</li>
											<li>
												when the value is a source element it is first resolved into a target element using traceability links. The resolution results in an element 
												from the target model, which is assigned to the feature. This algorithm uses traceability links to identify the target elements created from 
												a given source element as a result of application of a transformation rule.
											</li>
										</ol>
										Thanks to this algorithm, target elements can be effectively linked together using source model navigation only. Finding the appropriate target elements 
										is left to ATL execution engine.
								</td>
							</table>
						</p>
						<p>With the ATL Resolve Algorithm, the transformation could be updated as follow:</p>

					 	<table STYLE="border : 1px dotted #AAAAAA;" width="100%" cellspacing="0" cellpadding="20">
							<td>
								<code>
<pre>
<font class="ATL_Keyword">rule</font> TreeNodeRoot2RootElement { 
	<font class="ATL_Keyword">from</font>
		rt : MMTree!Node (rt.isTreeNodeRoot())
	<font class="ATL_Keyword">to</font>
		lstRt : MMElementList!RootElement (
			name <- rt.name,
			elements <- rt.getAllChidren()
		)
}

<font class="ATL_Keyword">rule</font> Leaf2CommonElement {
	<font class="ATL_Keyword">from</font>
		s : MMTree!Leaf
	<font class="ATL_Keyword">to</font>
		t : MMElementList!CommonElement(
			name <- s.name
		)
}
</pre>
								</code>
							</td>
						</table>

						<h5 STYLE="font-size: 10pt; border-bottom: 2px solid;">7 - Sorting leafs by size</h5>
						<p align="justify">
							In this final step, we will sort elements list by the corresponding leaf size.
						</p>
						<p align="justify">
							To respect this requirement, we will create an helper to get leaves in the following order: big, medium, and small.
						</p>

					 	<table STYLE="border : 1px dotted #AAAAAA;" width="100%" cellspacing="0" cellpadding="20">
							<td>
								<code>
<pre>
<font class="ATL_Keyword">helper context</font> MMTree!Node <font class="ATL_Keyword">def</font> : getLeavesInOrder : <font class="ATL_OCLType">OrderedSet</font> (MMTree!Leaf) =
	<font class="ATL_Keyword">let</font> leavesList : <font class="ATL_OCLType">OrderedSet</font> (MMTree!Leaf) = 
		self.getAllChildren ()->select(currChild | currChild.oclIsTypeOf(MMTree!Leaf))
	<font class="ATL_Keyword">in</font>
		leavesList->select(leaf | leaf.size = <font class="ATL_Enum">#big</font>)
		->union(leavesList->select(leaf | leaf.size = <font class="ATL_Enum">#medium</font>))
		->union(leavesList->select(leaf | leaf.size = <font class="ATL_Enum">#small</font>))
	;
</pre>
								</code>
							</td>
						</table>

						<p align="justify">
							This helper uses another recursive helper (getAllChildren) defined previously which proceeds to a DFS and returns the list of all leaves encountered during the search. Let "leaves" being the list 
							of leaves, we compute a 3 set partition of leaves : one "big leaves" list, one "medium leaves" list and one "small leaves" list. We then make an union of these 3 
							lists which gives us the well ordered leave list used by the distinct keyword of the main rule.
						</p>

					 	<table STYLE="border : 1px dotted #AAAAAA;" width="100%" cellspacing="0" cellpadding="20">
							<td>
								<code>
<pre>
<font class="ATL_Keyword">rule</font> TreeNodeRoot2RootElement { 
	<font class="ATL_Keyword">from</font>
		rt : MMTree!Node (rt.isTreeNodeRoot()) 
	<font class="ATL_Keyword">to</font>
		lstRt : MMElementList!RootElement (
			name <- rt.name,
			elements <- rt.getLeavesInOrder
		)
}

<font class="ATL_Keyword">rule</font> Leaf2CommonElement {
	<font class="ATL_Keyword">from</font>
		s : MMTree!Leaf
	<font class="ATL_Keyword">to</font>
		t : MMElementList!CommonElement(
			name <- s.name
		)
}
</pre>
								</code>
							</td>
						</table>

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
						<a href="http://www.eclipse.org/atl/atlTransformations/Tree2List/Tree2List.zip">
							<img style="vertical-align:text-top;" src="/resources/images/code.png"/>
						</a>
					</td>
					<td align="left">
						<a href="http://www.eclipse.org/atl/atlTransformations/Tree2List/Tree2List.zip"><h3>Tree2List</h3></a>
					</td>
					<td align="left">Source code for the scenario Tree to List</td>
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
				<li style="list-style:none">July 2007</li>
				<li style="list-style:none">By Cyril Faure (C-S) and <a href="http://www.sciences.univ-nantes.fr/lina/atl/contrib/allilaire">Freddy Allilaire</a> (INRIA)</li>
				<li style="list-style:none"><br />Please, ask your questions on the <a href="news://news.eclipse.org/eclipse.modeling.m2m">M2M newsgroup</a></li>
			</ul>
		</div>
	</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>