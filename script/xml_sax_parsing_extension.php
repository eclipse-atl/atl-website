<?php

#*****************************************************************************
#
# xml_sax_parsing_complement.php
#
# Author: 		Frédéric Jouault
# Date:			2005-11-14
#
#****************************************************************************

require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/xml_sax_parsing.php");

class ComplexPropertyHandler extends SimplePropertyHandler {
	var $name;
	
	function ComplexPropertyHandler(& $owner, $property) {
		parent::SimplePropertyHandler($owner, $property);
	}

	function & get_next($name, $attributes) {
		$this->text .= "<" . $name;
		foreach ($attributes as $attrName => $attrValue) {
			$this->text .= " " . $attrName . "=\"" . $attrValue . "\"";
		}
		$this->text .=">";
		$this->name = $name;
		return new ComplexPropertyHandler($this, "text");
	}	
	
	function set_property_value(& $value) {
		$property = $this->property;
		$this->owner-> $property .= $value;
	}
	
	function end($name) {
		$this->text .= "</" . $name . ">";
		parent::end($name);
	}	
}

?>