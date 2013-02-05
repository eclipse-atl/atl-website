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
	$pageTitle 		= "ATL Use Case - Compiling a new formal verification language to LOTOS (ISO 8807)";
	$pageKeywords	= "LOTOS, ISO 8807, FIACRE, formal verification, model-checking";
	$pageAuthor		= "Frédéric Jouault";
	
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
				<li><a href="#download"><b>Download</b></a></li>
				<li><a href="#acknowledgement"><b>Acknowledgement</b></a></li>
			</ul>
		</blockquote>
    	
		<hr class="clearer" />

		<div>
			<p align="justify">
			<p>
				In this use case, we translate <a href="http://www-sop.inria.fr/oasis/fiacre/">FIACRE</a> programs into
				<a href="http://www.inrialpes.fr/vasy/cadp/">LOTOS</a> (<a href="http://www.iso.org/iso/iso_catalogue/catalogue_tc/catalogue_detail.htm?csnumber=16258">ISO 8807</a>) programs.
				This work is the result of the cooperation of two INRIA teams: <a href="http://www.sciences.univ-nantes.fr/lina/atl/">ATLAS</a> (Nantes), and <a href="http://www.inrialpes.fr/vasy/">VASY</a> (Grenoble),
				in the context of the <a href="http://openembedd.inria.fr/">OpenEmbeDD</a> project.
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
						<a href="http://www.inrialpes.fr/vasy/cadp/">LOTOS</a>,
						<a href="http://www.iso.org/iso/iso_catalogue/catalogue_tc/catalogue_detail.htm?csnumber=16258">ISO 8807</a>,
						<a href="http://www-sop.inria.fr/oasis/fiacre/">FIACRE</a>,
						<a href="http://en.wikipedia.org/wiki/Formal_verification">formal verification</a>,
						<a href="http://en.wikipedia.org/wiki/Model-checking">model-checking</a>.
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
							<a href="http://www-sop.inria.fr/oasis/fiacre/">FIACRE</a> (french acronym of: Format Interm&eacute;diaire pour les Architectures de Composants R&eacute;partis Embarqu&eacute;s,
							meaning: Intermediate Format for the Architectures of Embedded Distributed Components) is a new intermediate language for the formal description and verification of asynchronous concurrent systems.
							In this work, we define a compiler from FIACRE to <a href="http://www.inrialpes.fr/vasy/cadp/">LOTOS</a> (Language Of Temporal Ordering Specification, <a href="http://www.iso.org/iso/iso_catalogue/catalogue_tc/catalogue_detail.htm?csnumber=16258">ISO 8807</a>) using Model Engineering techniques.
							The output of this compiler can then be verified using the <a href="http://www.inrialpes.fr/vasy/cadp/">CADP</a> toolbox.
							The abstract syntax of each language is defined in <a href="http://wiki.eclipse.org/KM3">KM3</a>, and the concrete syntax in <a href="http://wiki.eclipse.org/TCS">TCS</a>.
							The translation from FIACRE to LOTOS is defined as an <a href="http://wiki.eclipse.org/ATL">ATL</a> <a href="http://wiki.eclipse.org/M2M">model-to-model</a> transformation.
				    	</p>
						<p align="justify">
							The current version is able to translate FIACRE types (e.g., enumerations, intervals, arrays), which definitions are relatively concise, into
							equivalent LOTOS types, which definitions are typically more verbose.
							For instance, the sample FIACRE program given in Figure 1 is automatically transformed into the LOTOS program given in Figure 2.
							Note that both programs are presented as screenshots of TGE (Textual Generic Editor), the TCS-based editor.
							This shows that once the concrete syntax of a language has been defined in TCS, TGE can be used to automatically provide a language-specific editor.
						</p>
						<p align="center">
			  				<img src="FIACRE-Simple_enum.png" />
					  		<br /><br />
							<b>Figure 1. Simple FIACRE enumeration as seen in TGE</b>
						</p>
				    	<p align="center">
							<a href="LOTOS-Simple_enum.png"><img src="LOTOS-Simple_enum.png" width="80%"/></a>
			  				<br /><br />
							<b>Figure 2. LOTOS type generated from the simple FIACRE enumeration (click picture for larger version)</b>
						</p>
						<p align="justify">
							Although only types are transformed at the current time, the definitions (abstract and concrete syntaxes) of FIACRE and LOTOS cover larger parts of the languages.
							For instance, Figure 3 shows how TGE can edit one of the LOTOS examples. 
						</p>
				    	<p align="center">
							<a href="LOTOS-TGE.png"><img src="LOTOS-TGE.png" width="80%"/></a>
			  				<br /><br />
							<b>Figure 3. The <a href="ftp://ftp.inrialpes.fr/pub/vasy/demos/demo_01/bitalt.lotos">bitalt.lotos</a> LOTOS example edited in TGE (click picture for larger version)</b>
						</p>
						<p align="justify">
							We also created a <a href="http://www.sciences.univ-nantes.fr/lina/atl/atldemo/fiacre2lotos/">web service</a> to use this transformation scenario, so that it can be tested and used without having to install Eclipse.
							You can see below a sample output of this web service invoked on the same sample FIACRE program as used in Figure 1.
						</p>
	    				<p align="center">
							<b>Compilaton of a simple FIACRE enumeration into a LOTOS type with the <a href="http://www.sciences.univ-nantes.fr/lina/atl/atldemo/fiacre2lotos/">FIACRE2LOTOS web service</a></b>
						</p>
	    				<style>
		    				.keyword {color: #7F0055; font-weight: bold;}
							.comment {color: #008200; font-weight: italic;}
							.string {color: #0000FF;}
							.symbol {color: #7F0055; font-weight: bold;}
							.error {border-bottom: #FF0000 1px solid;}
							.lineWithError {color: #FF0000; font-weight: bold;}
							.selection {color: white; background-color: #0A246A;}
	    				</style>
	    				<h2>Source: FIACRE Model </h2>
<pre>1	<span class="keyword">type</span><span class="whitespace"> </span><span class="identifier">test</span><span class="whitespace"> </span><span class="keyword">is</span><span class="whitespace">
2	    </span><span class="keyword">enum</span><span class="whitespace"> </span><span class="identifier">a</span><span class="symbol">,</span><span class="whitespace"> </span><span class="identifier">b</span><span class="symbol">,</span><span class="whitespace"> </span><span class="identifier">c</span><span class="whitespace"> </span><span class="keyword">end</span><span class="whitespace">

</span></pre>
<hr>
<h2>Target: LOTOS Model </h2>
<pre>1	<span class="comment">(* ---------------------------------------------------------------------------- *)</span><span class="whitespace">
</span>2	<span class="comment">(* Author: FIACRE2LOTOS.atl                                                     *)</span><span class="whitespace">
</span>3	<span class="comment">(* Automatically generated code                                                 *)</span><span class="whitespace">
</span>4	<span class="comment">(* ---------------------------------------------------------------------------- *)</span><span class="whitespace">
</span>5	<span class="keyword">specification</span><span class="whitespace"> </span><span class="identifier">unnamed</span><span class="whitespace"> </span><span class="symbol">:</span><span class="whitespace"> </span><span class="keyword">noexit</span><span class="whitespace">
6	
7	    </span><span class="keyword">type</span><span class="whitespace"> </span><span class="identifier">test</span><span class="whitespace"> </span><span class="keyword">is</span><span class="whitespace"> </span><span class="identifier">Boolean</span><span class="whitespace">
8	        </span><span class="keyword">sorts</span><span class="whitespace">
9	        </span><span class="identifier">test</span><span class="whitespace">
10	        </span><span class="keyword">opns</span><span class="whitespace">
11	            </span><span class="identifier">a</span><span class="whitespace"> </span><span class="comment">(*! constructor *)</span><span class="whitespace">
12	            </span><span class="symbol">,</span><span class="whitespace"> </span><span class="identifier">b</span><span class="whitespace"> </span><span class="comment">(*! constructor *)</span><span class="whitespace">
13	            </span><span class="symbol">,</span><span class="whitespace"> </span><span class="identifier">c</span><span class="whitespace"> </span><span class="comment">(*! constructor *)</span><span class="whitespace">
14	            </span><span class="symbol">:</span><span class="whitespace"> </span><span class="symbol">-&gt;</span><span class="whitespace"> </span><span class="identifier">test</span><span class="whitespace">
15	            </span><span class="identifier">_eq_</span><span class="symbol">,</span><span class="whitespace"> </span><span class="identifier">_neq_</span><span class="whitespace"> </span><span class="symbol">:</span><span class="whitespace"> </span><span class="identifier">test</span><span class="symbol">,</span><span class="whitespace"> </span><span class="identifier">test</span><span class="whitespace"> </span><span class="symbol">-&gt;</span><span class="whitespace"> </span><span class="identifier">Bool</span><span class="whitespace">
16	        </span><span class="keyword">eqns</span><span class="whitespace">
17	            </span><span class="keyword">forall</span><span class="whitespace"> </span><span class="identifier">x</span><span class="symbol">,</span><span class="whitespace"> </span><span class="identifier">y</span><span class="whitespace"> </span><span class="symbol">:</span><span class="whitespace"> </span><span class="identifier">test</span><span class="whitespace">
18	
19	            </span><span class="keyword">ofsort</span><span class="whitespace"> </span><span class="identifier">Bool</span><span class="whitespace">
20	                </span><span class="identifier">x</span><span class="whitespace"> </span><span class="symbol">=</span><span class="whitespace"> </span><span class="identifier">y</span><span class="whitespace"> </span><span class="symbol">=&gt;</span><span class="whitespace"> </span><span class="identifier">x</span><span class="whitespace"> </span><span class="keyword">eq</span><span class="whitespace"> </span><span class="identifier">y</span><span class="whitespace"> </span><span class="symbol">=</span><span class="whitespace"> </span><span class="keyword">true</span><span class="symbol">;</span><span class="whitespace">
21	                </span><span class="identifier">x</span><span class="whitespace"> </span><span class="keyword">eq</span><span class="whitespace"> </span><span class="identifier">y</span><span class="whitespace"> </span><span class="symbol">=</span><span class="whitespace"> </span><span class="keyword">false</span><span class="symbol">;</span><span class="whitespace">
22	                </span><span class="identifier">x</span><span class="whitespace"> </span><span class="keyword">neq</span><span class="whitespace"> </span><span class="identifier">y</span><span class="whitespace"> </span><span class="symbol">=</span><span class="whitespace"> </span><span class="identifier">not</span><span class="symbol">(</span><span class="identifier">x</span><span class="whitespace"> </span><span class="keyword">eq</span><span class="whitespace"> </span><span class="identifier">y</span><span class="symbol">)</span><span class="symbol">;</span><span class="whitespace">
23	    </span><span class="keyword">endtype</span><span class="whitespace">
</span>24	<span class="keyword">behaviour</span><span class="whitespace">
25	    </span><span class="whitespace">
26	        </span><span class="whitespace">
27	    </span><span class="whitespace">
</span>28	<span class="keyword">endspec</span></pre>
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
					<td align="center"><a href="http://dev.eclipse.org/viewcvs/indextech.cgi/org.eclipse.gmt/org.eclipse.gmt.tcs/syntaxes/FIACRE/"><h3>FIACRE Language Project</h3></a></td>
					<td><a href="http://wiki.eclipse.org/TCS/Language_Project">Language Project</a> defining FIACRE:
					<a href="http://dev.eclipse.org/viewcvs/indextech.cgi/org.eclipse.gmt/org.eclipse.gmt.tcs/syntaxes/FIACRE/Metamodel/FIACRE.km3?view=markup">KM3 metamodel</a>,
					<a href="http://dev.eclipse.org/viewcvs/indextech.cgi/org.eclipse.gmt/org.eclipse.gmt.tcs/syntaxes/FIACRE/Syntax/FIACRE.tcs?view=markup">TCS model</a>,
					and <a href="http://dev.eclipse.org/viewcvs/indextech.cgi/org.eclipse.gmt/org.eclipse.gmt.tcs/syntaxes/FIACRE/Compiler/FIACRE2LOTOS.atl?view=markup">FIACRE2LOTOS.atl compiler</a>.</td>
				</tr>
				<tr>
					<td align="center"><a href="http://dev.eclipse.org/viewcvs/indextech.cgi/org.eclipse.gmt/org.eclipse.gmt.tcs/syntaxes/LOTOS/"><h3>LOTOS Language Project</h3></a></td>
					<td><a href="http://wiki.eclipse.org/TCS/Language_Project">Language Project</a> defining LOTOS:
					<a href="http://dev.eclipse.org/viewcvs/indextech.cgi/org.eclipse.gmt/org.eclipse.gmt.tcs/syntaxes/LOTOS/Metamodel/LOTOS.km3?view=markup">KM3 metamodel</a>,
					and <a href="http://dev.eclipse.org/viewcvs/indextech.cgi/org.eclipse.gmt/org.eclipse.gmt.tcs/syntaxes/LOTOS/Syntax/LOTOS.tcs?view=markup">TCS model</a>.
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
						The present work is being supported by the <a href="http://openembedd.inria.fr/home_html-en?set_language=en&amp;cl=en" title="OpenEmbeDD project">OpenEmbeDD project</a>.
						We would like to thank Marc Pantel (Toulouse) from the <a href="http://www.topcased.org/">TopCased</a> project,
						and Christian Attiogb&eacute; from the <a href="http://www.sciences.univ-nantes.fr/info/perso/permanents/attiogbe/COLOSS/">COLOSS</a> team (Nantes) for their advice.
					</td>
				</tr>
			</table>
			
		</div>
	</div>

	<div id="rightcolumn">
		<div class="sideitem">
			<h6>General Information</h6>
			<ul>
				<li style="list-style:none">September 2007</li>
				<li style="list-style:none">
					By <a href="http://www.sciences.univ-nantes.fr/lina/atl/contrib/jouault">Fr&eacute;d&eacute;ric Jouault</a> (INRIA <a href="http://www.sciences.univ-nantes.fr/lina/atl/">ATLAS</a>),
					and <a href="http://www.inrialpes.fr/vasy/people/Frederic.Lang/">Fr&eacute;d&eacute;ric Lang</a> (INRIA <a href="http://www.inrialpes.fr/vasy/">VASY</a>)
				</li>
				<li style="list-style:none"><br />Please, ask your questions on the <a href="news://news.eclipse.org/eclipse.modeling.m2m">M2M newsgroup</a></li>
			</ul>
		</div>
	</div>
	
EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>