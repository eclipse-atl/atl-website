<?php

#*****************************************************************************
#
# news.php
#
# Author: 		Wayne Beaton
# Date:			2005-11-07
#
# Description: Use the get_news($newsfile) function in this file to generate 
# the html equivalent of the provided RSS file.  
#
#****************************************************************************

require_once("news_xml.php");

function get_atlnews($count=100) {
	return rss_to_html("atlNewsArchive", "/atl/news/", "short", $count);
}

function get_atlnews_verbose($count=100) {
	return rss_to_html("atlNewsArchive", "/atl/news/", "long", $count);
}

/*
* This function generates a "short" list of news items, containing only the
* title and the date for each item. Each channel in the RSS file is included
* in the generated HTML with as an <h3> style. All items in the channel are
* displayed as list of items.
*/
function rss_to_html($news, $rss_file, $format, $count, $headerSize=3) {
	$news_file = $news . ".rss";
	$news_file_path = $rss_file . $news_file;
	$file_name = $_SERVER['DOCUMENT_ROOT'] . $news_file_path;
	if (!in_array($format, array ("short", "long"))) {
		$format = "short";
	}
	$rss = get_news($file_name);
	$html = "";
	
	foreach ($rss->channel as $channel) {
		$html .= "<h$headerSize>";
		
		// Add the RSS image on the right
		$html .= "<a href=\"$news_file_path\"><img src=\"/atl/images/rss2.gif\" align=\"right\" alt=\"More...\" /></a>";
		
		// Add the title of the channel 
		$html .= "$channel->title";	
		// If we're displaying short format, provide a link to
		// show news in long format.
		if ($format == "short") {
			$index_path = $rss_file . "index.php";
			$html .= "&nbsp;<a href=\"$index_path\"><img src=\"/atl/images/rss2.gif\" title=\"More...\" alt=\"More...\" /></a>";
		}

		$html .= "</h$headerSize>\n";
		
		$html .= "<ul class=\"midlist\">";

		foreach ($channel->item as $item) {
			if ($count == 0) break;
			$html .= "<li>";
			$function = "rss_item_to_html_".$format;
			$function ($item, $html);
			$html .= "</li>\n";
			$count--;
		}

		$html .= "</ul>";
	}

	return $html;
}

/*
 * Private function. This is used to generate the output in
 * short format.
 */
function rss_item_to_html_short($item, $html) {
	// The date is formatted day-month-year using numbers
	// The &#8209 is a non-breaking en dash.
	$date = date("d&#8209;m&#8209;Y", $item->pubDate);
	$html .= "<a href=\"$item->link\" target=\"_blank\">$item->title</a> posted&nbsp;$date";
}

/*
 * Private function. This is used to generate the output in
 * long format.
 */
function rss_item_to_html_long($item, $html) {
	rss_item_to_html_short($item, $html);
	$html .= "<blockquote><p align=\"justify\">$item->description</p></blockquote>";
}


/*
 * Instances of the Feed class represent an RSS file.
 */
class Feed {
	var $channel;
	
	function Feed() {
		$this->channel = array();
	}
	
	function add_channel($channel) {
		array_push($this->channel, $channel);
	}
}

/*
 * Instances of the Channel class represent a channel in the RSS file.
 */
class Channel {
	var $title;
	var $link;
	var $description;
	var $image;	
	var $item;
	
	function Channel() {
		$this->item = array();
	}
	
	function add_item(&$item) {
		array_push($this->item, $item);
	}
}

/*
 * Instances of the Image class represent an image (presumably) on an
 * image. We don't currently use this information.
 */
class Image {
	var $url;
	var $title;
	var $link;
}

/*
 * Instances of the Item class represent an item in a channel.
 */
class Item {
	var $title;
	var $link;
	var $description;
	var $pubDate;
}

?>
