<?php

#*****************************************************************************
#
# atlTransformations_script_xml.php
#
# Author: 		Freddy Allilaire
# Date:			2005-11-13
#
#****************************************************************************

require_once($_SERVER['DOCUMENT_ROOT'] . "/gmt/resources/scripts/xml_sax_parsing_extension.php");

function & getAtlTransformationsParsed($file_name) {
	$handler = new ATLFileHandler();
	parse_xml_file($file_name, $handler);
	return $handler->atlTransformations;
}

class ATLFileHandler extends XmlFileHandler {
	var $atlTransformations;

	function get_root_element_handler() {
		return new ATLRootHandler();
	}	
	
	function end_root_element_handler($handler) {
		$this->atlTransformations = & $handler->atlTransformations;
	}
}

class ATLRootHandler extends XmlElementHandler {
	var $atlTransformations;

	function & get_atlTransformations_handler($attributes) {
		return new ListHandler();
	}
	
	 function end_atlTransformations_handler($handler) {
	 	$this->atlTransformations = & $handler->atlTransformations;
	 }
}

class ListHandler extends XmlElementHandler {
	var $atlTransformations;

	function ListHandler() {
		$this->atlTransformations = new ATLTransformationsList();
	}

	function & get_atlTransformation_handler(& $attributes) {
		return new ATLHandler();
	}
	
	function end_atlTransformation_handler(& $handler) {
		$this->atlTransformations->add_atlTransformation($handler->atlTransformation);
	}
}

class ATLHandler extends XmlElementHandler {
	var $atlTransformation;

	function ATLHandler() {
		$this->atlTransformation = new ATLTransformation();
	}
	
	function & get_shortName_handler($attributes) {
		return new SimplePropertyHandler($this->atlTransformation, "shortName");
	}
	function & get_name_handler($attributes) {
		return new SimplePropertyHandler($this->atlTransformation, "name");
	}
	function & get_docLink_handler($attributes) {
		return new SimplePropertyHandler($this->atlTransformation, "docLink");
	}
	function & get_sourceLink_handler($attributes) {
		return new SimplePropertyHandler($this->atlTransformation, "sourceLink");
	}
	function & get_description_handler($attributes) {
		return new ComplexPropertyHandler($this->atlTransformation, "description");
	}
	function & get_location_handler($attributes) {
		return new SimplePropertyHandler($this->atlTransformation, "pubDate");
	}
}

?>