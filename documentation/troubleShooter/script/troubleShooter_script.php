<?php

#*****************************************************************************
#
# troubleShooter_script.php
#
# Author: 		Freddy Allilaire
# Date:			2006-01-19
#
#****************************************************************************

require_once("troubleShooter_script_xml.php");

function getTS($pageTitle, $filePath) {
	$file_name = $_SERVER['DOCUMENT_ROOT'] . $filePath;

	$entries = getTSParsed($file_name);

	$html = "<table width=\"100%\">";
	foreach ($entries->troubleShooter as $trouble) {
		$html .= "<tr><td width=\"100%\"><table width=\"100%\"><tr><td width=\"33%\">";
		$html .= $trouble->label;
		$html .= "</td>";
		
		$html .= "<td width=\"67%\"><table width=\"100%\">";
		$problemFirstLine = true;
		foreach ($trouble->problem as $problem) {
			if (!$problemFirstLine) {
				$html .= "<hr />";
				$html .= "</td></tr>";
			}
			else
				$problemFirstLine = false;

			$html .= "<tr><td width=\"100%\"><table width=\"100%\"><tr><td width=\"50%\">";
			$html .= $problem->label;
			$html .= "</td>";
			
			$html .= "<td width=\"50%\"><table width=\"100%\">";
			$solutionFirstLine = true;
			foreach ($problem->solution as $solution) {
				if (!$solutionFirstLine) {
					$html .= "<hr />";
					$html .= "</td></tr>";
				}
				else
					$solutionFirstLine = false;
					
				$html .= "<tr><td width=\"100%\">";
				$html .= $solution->label;
			}
			$html .= "</td></tr>";
			$html .= "</table></td></tr></table>";

		}
		$html .= "</td></tr>";
		$html .= "</table></td></tr></table><hr /></td></tr>";
	}
	$html .= "</table>";

	return $html;
}

class TroubleShooter {
	var $troubleShooter;
	
	function TroubleShooter() {
		$this->troubleShooter = array();
	}

	function add_Trouble(&$entry) {
		array_push($this->troubleShooter, $entry);
	}
}

class Trouble {
	var $label;
	var $problem;

	function Trouble() {
		$this->problem = array();
	}
	
	function add_Problem(&$entry) {
		array_push($this->problem, $entry);
	}
}

class Problem {
	var $label;
	var $solution;
	
	function Problem() {
		$this->solution = array();
	}
	
	function add_Solution(&$entry) {
		array_push($this->solution, $entry);
	}
}

class Solution {
	var $label;
}

?>
