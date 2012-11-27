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
	$shortTitle		= "From Hoare's Monitors to Dijkstra's Semaphores";
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

		<img align="right" src="../../resources/atlLogoSmall.png" valign="top" style="padding-left: 10px;" alt="ATL Logo" />
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

		<div id="container>
			<p align="justify">
				This is a classic in synchronization. We propose an automatic translation from Hoare's monitors into Dijkstra's semaphores.
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
							Hoare's Monitor
							Dijkstra's Semaphore,
							<a href="http://en.wikipedia.org/wiki/Programming">Programming</a>
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
							This is a classic in synchronization. We propose an automatic translation from Hoare's monitors as defined in <a href="#ref1">[1]</a> into Dijkstra's semaphores as initially introduced in <a href="#ref2">[2]</a>.
							The ATL transformation code follows the rules given in <a href="#ref1">[1]</a>. A complete reprint of this paper is available at: 
							<a href="http://www.acm.org/classics/feb96/">http://www.acm.org/classics/feb96/</a>.
						</p>
						<p align="justify">
							The overall approach is summarized in the following figure:
						</p>
						<p align="center">
	  						<img src="img/UseCaseOverview.png" />
			  				<br /><br />
							<b>"$shortTitle" Use Case's Overview</b>
						</p>
						<p align="justify">
							As a classical example, we can take the readers and writers problem:
						</p>
						<p align="justify">
	  						<img src="img/CodeSample1.png" />
						</p>
						<p align="justify">
							Another example is the bounded buffer presented at: <a href="http://www.acm.org/classics/feb96/bounded_buffer.html">http://www.acm.org/classics/feb96/bounded_buffer.html</a>.
						</p>
						<p align="justify">
							In <a href="#ref1">[1]</a>  a set of rules for translating from monitors to semaphores is given to prove that monitors can be implemented by semaphores. We reproduce below these rules that 
							may be found at: <a href="http://www.acm.org/classics/feb96/interpretation.html">http://www.acm.org/classics/feb96/interpretation.html</a>.
						</p>
						<p align="justify">
							"Obviously, we shall require for each monitor a Boolean semaphore "mutex" to ensure that the bodies of the local procedures exclude each other. The semaphore is initialized 
							to 1; a P(mutex) must be executed on entry to each local procedure, and a V(mutex) must usually be executed on exit from it.
						</p>
						<p align="justify">
							When a process signals a condition on which another process is waiting, the signaling process must wait until the resumed process permits it to proceed. We therefore 
							introduce for each monitor a second semaphore "urgent" (initialized to 0), on which signaling processes suspend themselves by the operation P(urgent). Before releasing 
							exclusion, each process must test whether any other process is waiting on urgent, and if so, must release it instead by a V(urgent) instruction We therefore need to count 
							the number of processes waiting on urgent, in an integer "urgentcount" (initially zero). Thus each exit from a procedure of a monitor should be coded:
						</p>
						<p align="justify">
	  						<img src="img/CodeSample2.png" />
						</p>
						<p align="justify">
							Finally, for each condition local to the monitor, we introduce a semaphore "condsem" (initialized to 0), on which a process desiring to wait suspends itself by a P(condsem) 
							operation. Since a process signaling this condition needs to know whether anybody is waiting, we also need a count of the number of waiting processes held in an integer 
							variable "condcount" (initially 0). The operation "cond.wait" may now be implemented as follows (recall that a waiting program must release exclusion before suspending 
							itself):
						</p>
						<p align="justify">
	  						<img src="img/CodeSample3.png" />
						</p>
						<p align="justify">
							The signal operation may be coded:
						</p>
						<p align="justify">
	  						<img src="img/CodeSample4.png" />
						</p>
						<p align="justify">
							In this implementation, possession of the monitor is regarded as a privilege which is explicitly passed from one process to another. Only when no one further wants the 
							privilege is mutex finally released.
						</p>
						<p align="justify">
							This solution is not intended to correspond to recommended "style" in the use of semaphores. The concept of a condition-variable is intended as a substitute for semaphores, 
							and has its own style of usage, in the same way that while loops or coroutines are intended as a substitute for jumps.
						</p>
						<p align="justify">
							In many cases, the generality of this solution is unnecessary, and a significant improvement in efficiency is possible.
						</p>
						<p align="justify">
							<ol>
								<li>When a procedure body in a monitor contains no wait or signal, exit from the body can be coded by a simple V(mutex) since urgentcount cannot have changed during the 
							execution of the body.</li>

								<li>
									If a cond.signal is the last operation of a procedure body, it can be combined with monitor exit as follows:
									<p align="justify">
	  									<img src="img/CodeSample5.png" />
									</p>
								</li>

								<li>If there is no other wait or signal in the procedure body, the second line shown above can also be omitted.</li>

								<li>
									If every signal occurs as the last operation of its procedure body, the variables urgentcount and urgent can be omitted, together with all operations upon them. 
									This is such a simplification that O-J. Dahl suggests that signals should always be the last operation of a monitor procedure; in fact, this restriction is a very 
									natural one, which has been unwittingly observed in all examples of this paper.
								</li>
							</ol>
						</p>
						<p align="justify">
							Significant improvements in efficiency may also be obtained by avoiding the use of semaphores, and by implementing conditions directly in hardware, or at the lowest and 
							most uninterruptible level of software (e.g. supervisor mode). In this case, the following optimizations are possible.
						</p>
						<p align="justify">
							<ol>
								<li>
							urgentcount and condcount can be abolished, since the fact that someone is waiting can be established by examining the representation of the semaphore, which cannot 
							change surreptitiously within non interruptible mode.
								</li>
								<li>
							Many monitors are very short and contain no calls to other monitors. Such monitors can be executed wholly in non interruptible mode, using, as it were, the common 
							exclusion mechanism provided by hardware. This will often involve less time in non interruptible mode than the establishment of separate exclusion for each monitor."
								</li>
							</ol>
						</p>
						<p align="justify">
							In summary we take into consideration the following rules from above:
							<ol>
								<li>For each monitor M declare one semaphore (M_mutex), one counter (M_urgentcount) and one semaphore (M_urgent).</li>
								<li>For each condition C inside a semaphore declare one counter (C_count) and one semaphore (C_sem).</li>
								<li>For each method entry, perform the following code: M_mutex.P().</li>
								<li>
									For each method exit, perform the following code:
									<p align="justify">
	  									<img src="img/CodeSample6.png" />
									</p>
								</li>
								<li>For each condition C.wait perform the following code:
									<p align="justify">
	  									<img src="img/CodeSample7.png" />
									</p>
								</li>
								<li>
									For each condition C.signal perform the following code:
									<p align="justify">
	  									<img src="img/CodeSample8.png" />
									</p>
								</li>
							</ul>
						</p>
						<p align="justify">
							<h5 STYLE="font-size: 10pt; padding: 0; border-bottom: 2px solid #49457C; background-position: top left; background-repeat; repeat-x;">Why is this ATL transformation interesting?</h5>
							For several reasons:
							<ol class="midlist">
								<li>
									It show how a DSL (monitors) may be translated quite easily in practice into another DSL (Semaphores). Note that both DSLs are extensions of the same 
									pseudo-language.
								</li>
								<li>
									It shows how model transformation may be useful in establishing the semantics of one DSL (monitors) in terms of the semantics of another DSL (Semaphores).
								</li>
								<li>
									It give hints on how complex synchronization schemes may be transformed in basic schemes for example in basic java Threads.
								</li>
							</ol>
						</p>
						<p align="justify">
							To conclude, we provide below a set of screenshots showing the different input/output files provided/created with this use case:
						</p>
						<p align="center">
	  						<img src="img/Sample.png" />
			  				<br /><br />
							<b>Screenshots of the input/outputs of the use case</b>
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
						<a name="ref1">[1]</a>
					</td>
					<td>
						Hoare, C.A.R  Monitors: An Operating System Structuring Concept Communications of the ACM, Vol. 17, No. 10. October 1974, pp. 549-557
					</td>
				</tr>
				<tr valign="top">
					<td>
						<a name="ref2">[2]</a>
					</td>
					<td>
						Dijkstra, E. W. Cooperating Sequential Processes. In programming Languages (Ed. F. Genuys), Academic Press, New York.
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
					<td align="center"><a href="http://www.eclipse.org/atl/atlTransformations/#Monitor2Semaphore"><h3>Complete scenario</h3></a></td>
					<td>Scenario available in the ATL transformation zoo (with source files).</td>
				</tr>
				<tr>
					<td align="center"><a href="http://www.eclipse.org/gmt/am3/zoos/atlanticZoo/#Program"><h3>Program Metamodel</h3></a></td>
					<td>Program metamodel is expressed in the <a href="http://wiki.eclipse.org/index.php/KM3">KM3</a> textual format.</td>
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
						This work has also been supported by the Atlantic federation of labs.
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
					By <a href="http://www.sciences.univ-nantes.fr/lina/atl/contrib/allilaire">Freddy Allilaire</a> (INRIA)
				</li>
				<li style="list-style:none"><br />Please, ask your questions on the <a href="news://news.eclipse.org/eclipse.modeling.m2m">M2M newsgroup</a></li>
			</ul>
		</div>
	</div>
	
EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>