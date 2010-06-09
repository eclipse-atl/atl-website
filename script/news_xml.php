<?php
#*****************************************************************************
#
# news.php
#
# Author: 		Wayne Beaton
# Date:			2005-11-07
#
# Description: This file contains the code required to read the RSS file
# into an object representation.  
#
#****************************************************************************

require_once($_SERVER['DOCUMENT_ROOT'] . "/gmt/resources/scripts/xml_sax_parsing_extension.php");

/*
 * This method extracts the RSS information from the file with the
 * given name.
 */
function &get_rss_from_file($file_name) {
	// PHP 5: simplexml_load_file($newsfile);
	return parse_rss_xml_file($file_name);
}
	
function & get_news($file_name) {
	$handler = new RssFileHandler();
	parse_xml_file($file_name, $handler);
	return $handler->feed;
}
/*
 * The rest of the code in this file is concerned with reading XML
 * into an object format. Once we update to PHP 5, we can get rid of
 * all of this junk and just use the simpleXML apis.
 */



/*
 * The XmlHandler class is the focal point of the SAX parser callbacks.
 * It keeps track of a stack of element handlers. The element handlers
 * are used to handle whatever elements come in.
 */
class RssFileHandler extends XmlFileHandler {
	var $feed;
	/*
	 * This method returns the root handler for a RSS file
	 * The root handler essentially represents the file itself
	 * rather than any actual element in the file. The returned
	 * element handler will deal with any elements that may occur
	 * in the root of the XML file.
	 */
	function get_root_element_handler() {
		return new RssRootHandler();
	}

	function end_root_element_handler($handler) {
		$this->feed = & $handler->feed;
	}
}

/*
 * The RssRootHandler class takes care of the root element 
 * in the file. This handler doesn't correspond to any particular
 * element that may occur in the XML file. It represents the file
 * itself and must deal with any elements that occur at the root
 * level in that file.
 */
class RssRootHandler extends XmlElementHandler {
	var $feed;

	/*
	 * This method handles the <rss>...</rss> element.
	 */
	function & get_rss_handler($attributes) {
		return new RssHandler();
	}

	function end_rss_handler($handler) {
		$this->feed = & $handler->feed;
	}
}

/*
 * The FeedHandler class takes care of the root element in the file.
 */
class RssHandler extends XmlElementHandler {
	var $feed;
	
	function RssHandler() {
		$this->feed = new Feed();
	}
	
	/*
	 * This method handles the <rss>...</rss> element.
	 */
	function & get_channel_handler($attributes) {
		return new ChannelHandler();
	}

	function end_channel_handler($handler) {
		$this->feed->add_channel($handler->channel);
	}
}

class ChannelHandler extends XmlElementHandler {
	var $channel;
	
	function ChannelHandler() {
		$this->channel = new Channel();
	}
	
	/*
	 * This method handles the <title>...</title> element.
	 */
	function & get_title_handler($attributes) {
		return new SimplePropertyHandler($this->channel, "title");
	}
	/*
	 * This method handles the <link>...</link> element.
	 */
	function & get_link_handler($attributes) {
		return new SimplePropertyHandler($this->channel, "link");
	}
	/*
	 * This method handles the <description>...</description> element.
	 */
	function & get_description_handler($attributes) {
		return new SimplePropertyHandler($this->channel, "description");
	}
	
	/*
	 * This method handles the <title>...</title> element.
	 */
	function & get_item_handler($attributes) {
		return new ItemHandler();
	}
	
	function end_item_handler($handler) {
		$this->channel->add_item($handler->item);
	}
	
	function & get_image_handler($attributes) {
		return new ImageHandler();
	}
	
	function end_image_handler($handler) {
		$this->channel->image = $handler->image;
	}
}

class ItemHandler extends XmlElementHandler {
	var $item;
	
	function ItemHandler() {
		$this->item = new Item();
	}
	
	/*
	 * This method handles the <title>...</title> element.
	 */
	function & get_title_handler($attributes) {
		return new SimplePropertyHandler($this->item, "title");
	}
	/*
	 * This method handles the <link>...</link> element.
	 */
	function & get_link_handler($attributes) {
		return new SimplePropertyHandler($this->item, "link");
	}
	/*
	 * This method handles the <description>...</description> element.
	 */
	function & get_description_handler($attributes) {
		return new ComplexPropertyHandler($this->item, "description");
	}
	
	/*
	 * This method handles the <pubDate>...</pubDate> element.
	 */
	function & get_pubdate_handler($attributes) {
		return new SimpleTextHandler();
	}
	
	function end_pubdate_handler($handler) {
		$this->item->pubDate = strtotime($handler->text);
	}

}

class ImageHandler extends XmlElementHandler {
	var $image;
	
	function ImageHander() {
		$this->image = new Image();
	}	
		
	/*
	 * This method handles the <title>...</title> element.
	 */
	function & get_title_handler($attributes) {
		return new SimplePropertyHandler($this->image, "title");
	}
	/*
	 * This method handles the <url>...</url> element.
	 */
	function & get_url_handler($attributes) {
		return new SimplePropertyHandler($this->image, "url");
	}
	/*
	 * This method handles the <link>...</link> element.
	 */
	function & get_link_handler($attributes) {
		return new SimplePropertyHandler($this->image, "link");
	}
}

?>



