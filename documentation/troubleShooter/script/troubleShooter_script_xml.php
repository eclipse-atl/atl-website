<?php

#*****************************************************************************
#
# troubleShooter_script_xml.php
#
# Author: 		Freddy Allilaire
# Date:			2006-01-19
#
#****************************************************************************

require_once($_SERVER['DOCUMENT_ROOT'] . "/gmt/resources/scripts/xml_sax_parsing_extension.php");

function & getTSParsed($file_name) {
	$handler = new TroubleShooterFileHandler();
	parse_xml_file($file_name, $handler);
	return $handler->troubleShooter;
}

class TroubleShooterFileHandler extends XmlFileHandler {
	var $troubleShooter;

	function get_root_element_handler() {
		return new TroubleShooterRootHandler();
	}	
	
	function end_root_element_handler($handler) {
		$this->troubleShooter = & $handler->troubleShooter;
	}
}

class TroubleShooterRootHandler extends XmlElementHandler {
	var $troubleShooter;

	function & get_TroubleShooter_handler($attributes) {
		return new TroubleShooterHandler();
	}
	
	 function end_TroubleShooter_handler($handler) {
	 	$this->troubleShooter = & $handler->troubleShooter;
	 }
}

class TroubleShooterHandler extends XmlElementHandler {
	var $troubleShooter;

	function TroubleShooterHandler() {
		$this->troubleShooter = new TroubleShooter();
	}

	function & get_Trouble_handler(& $attributes) {
		return new TroubleHandler();
	}
	
	function end_Trouble_handler(& $handler) {
		$this->troubleShooter->add_Trouble($handler->trouble);
	}
}

class TroubleHandler extends XmlElementHandler {
	var $trouble;

	function TroubleHandler() {
		$this->trouble = new Trouble();
	}
	
	function & get_Problem_handler(& $attributes) {
		return new ProblemHandler();
	}
	
	function end_Problem_handler(& $handler) {
		$this->trouble->add_Problem($handler->problem);
	}
	
	function & get_label_handler($attributes) {
		return new ComplexPropertyHandler($this->trouble, "label");
	}
}

class ProblemHandler extends XmlElementHandler {
	var $problem;

	function ProblemHandler() {
		$this->problem = new Problem();
	}
	
	function & get_Solution_handler(& $attributes) {
		return new SolutionHandler();
	}
	
	function end_Solution_handler(& $handler) {
		$this->problem->add_Solution($handler->solution);
	}
	
	function & get_label_handler($attributes) {
		return new ComplexPropertyHandler($this->problem, "label");
	}
}

class SolutionHandler extends XmlElementHandler {
	var $solution;

	function SolutionHandler() {
		$this->solution = new Solution();
	}
	
	function & get_label_handler($attributes) {
		return new ComplexPropertyHandler($this->solution, "label");
	}
}

?>