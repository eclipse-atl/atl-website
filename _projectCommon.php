<?php

	# Set the theme for your project's web pages.
	# See the Committer Tools "How Do I" for list of themes
	# https://dev.eclipse.org/committers/
	# Optional: defaults to system theme 
	$theme = "Nova";
	
	$pageKeywords	= "atl, dsl, modeling, domain specific language";
	$pageAuthor		= "Obeo";
	$pageTitle 		= "ATL";

	$Menu->setMenuItemList(array());
	$Menu->addMenuItem("Home", "/atl", "_self");
	$Menu->addMenuItem("Download", "/atl/downloads", "_self");
	$Menu->addMenuItem("Documentation", "/atl/documentation", "_self");
	$Menu->addMenuItem("Support", "/atl/support", "_self");
	$Menu->addMenuItem("Developers", "/atl/developers", "_self");
	
	$App->AddExtraHtmlHeader('<link rel="stylesheet" type="text/css" href="/atl/style_atl.css"/>' . "\n\t");
	
	$App->Promotion = TRUE;

	$App->SetGoogleAnalyticsTrackingCode("UA-16904631-1");
?>
