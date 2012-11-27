<?php

#*****************************************************************************
#
# atlTransformations_script.php
#
# Author: 		Freddy Allilaire
# Date:			2005-11-13
#
#****************************************************************************

require_once("atlTransformations_script_xml.php");

function getAtlTransformations() {
	$file_name = "./atlTransformations.xml";

	$rss = getAtlTransformationsParsed($file_name);

	$html1 = "<div class=\"homeitem3col\">";
	$html1 .= "<h3>";
	$html1 .= "ATL Transformations list";
	$html1 .= "</h3>";
	
	$html1 .= "<ul class=\"midlist\">";
	
	$html2 = "";
	
	$scenariosNumber = 0;
	foreach ($rss->atlTransformations as $atlTransformation) {
		$scenariosNumber++;
		
		$html1 .= "<li>";
		$html1 .= "<b><a href=\"#$atlTransformation->shortName\">$atlTransformation->name</a></b>: ";
		$html1 .= "<a href=\"$atlTransformation->docLink\">Documentation</a>, ";
		$html1 .= "<a href=\"$atlTransformation->sourceLink\">Source files</a>";
		$html1 .= "</li>\n";

		$html2 .= "<div class=\"homeitem3col\">";
		$html2 .= "<a name=\"$atlTransformation->shortName\"></a>";		
		$html2 .= "<h3>";
		$html2 .= $atlTransformation->name;
		$html2 .= "</h3>";
		$html2 .= "<ul>";
		$html2 .= "<li>";
		$html2 .= "<a href=\"$atlTransformation->docLink\">Documentation</a>, ";
		$html2 .= "<a href=\"$atlTransformation->sourceLink\">Source files</a>";
		$html2 .= "<blockquote>" . $atlTransformation->description . "</blockquote>";
		$html2 .= "</li>\n";
		$html2 .= "</ul>";
		$html2 .= "<hr class=\"clearer\" />";
		$html2 .= "</div>";
	}
	$html1 .= "</ul>";
	$html1 .= "<hr class=\"clearer\" />";
	$html1 .= "</div>";

	$html0 = "<p>There are currently " . $scenariosNumber . " model transformations scenarios in this zoo.</p>\n";

	$html = $html0 . $html1 . $html2;

	return $html;
}

class ATLTransformationsList {
	var $atlTransformations;
	
	function ATLTransformationsList() {
		$this->atlTransformations = array();
	}
	
	function add_atlTransformation(&$atlTransformations) {
		array_push($this->atlTransformations, $atlTransformations);
	}
}

class ATLTransformation {
	var $shortName;
	var $name;
	var $docLink;
	var $sourceLink;
	var $description;
	var $pubDate;
}

?>
