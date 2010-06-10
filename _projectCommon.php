<?php

	# Set the theme for your project's web pages.
	# See the Committer Tools "How Do I" for list of themes
	# https://dev.eclipse.org/committers/
	# Optional: defaults to system theme 
	$theme = "Nova";
	

	# Define your project-wide Nav bars here.
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# these are optional
	$Nav->setLinkList(array());
	$Nav->addNavSeparator("ATL", 	"/atl");
	$Nav->addCustomNav("Download", "/atl/download", "_self", 3);
	$Nav->addCustomNav("Documentation", "/atl/documentation", "_self", 3);
	$Nav->addCustomNav("Support", "/atl/support", "_self", 3);
	$Nav->addCustomNav("Getting Involved", "/atl/developers", "_self", 3);
	
	$pageKeywords	= "atl, dsl, modeling, domain specific language";
	$pageAuthor		= "Obeo";
	$pageTitle 		= "ATL";

	$Menu->setMenuItemList(array());
	$Menu->addMenuItem("Home", "/atl", "_self");
	$Menu->addMenuItem("Download", "/atl/download", "_self");
	$Menu->addMenuItem("Documentation", "/atl/documentation", "_self");
	$Menu->addMenuItem("Support", "/atl/support", "_self");
	$Menu->addMenuItem("Developers", "/atl/developers", "_self");
	
	$App->AddExtraHtmlHeader('<link rel="stylesheet" type="text/css" href="style_atl.css"/>' . "\n\t");
	
	$App->Promotion = TRUE;

	$App->SetGoogleAnalyticsTrackingCode("UA-16904631-1");
?>
