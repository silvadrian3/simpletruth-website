<?php
	//manifesto
	$get_manifesto = mysql_query("SELECT title, description, logo_url FROM company_details WHERE id = 1");
	if(mysql_num_rows($get_manifesto)!=0) {
		$ext_manifesto = mysql_fetch_array($get_manifesto);
		
		$manifesto_title = $manager -> as_unescape($ext_manifesto["title"]);
		$manifesto_description = $manager -> as_unescape($ext_manifesto["description"]);
		$manifesto_logo_url = $manager -> as_unescape($ext_manifesto["logo_url"]);
		
		if(trim($manifesto_logo_url) == ""){
			$manifesto_logo_url = $curr_loc . "no-img.png";
		} else {
			$manifesto_logo_url = $curr_loc . $manifesto_logo_url;
			}
	}
	
	//mindful
	$get_mindful = mysql_query("SELECT title, description, logo_url FROM company_details WHERE id = 2");
	if(mysql_num_rows($get_mindful)!=0) {
		$ext_mindful = mysql_fetch_array($get_mindful);
		
		$mindful_title = $manager -> as_unescape($ext_mindful["title"]);
		$mindful_description = $manager -> as_unescape($ext_mindful["description"]);
		$mindful_logo_url = $manager -> as_unescape($ext_mindful["logo_url"]);
		
		if(trim($mindful_logo_url) == ""){
			$mindful_logo_url = $curr_loc . "no-img.png";
		} else {
			$mindful_logo_url = $curr_loc . $mindful_logo_url;
			}
	}
	
	//commitment
	$get_commitment = mysql_query("SELECT title, description, logo_url FROM company_details WHERE id = 3");
	if(mysql_num_rows($get_commitment)!=0) {
		$ext_commitment = mysql_fetch_array($get_commitment);
		
		$commitment_title = $manager -> as_unescape($ext_commitment["title"]);
		$commitment_description = $manager -> as_unescape($ext_commitment["description"]);
		$commitment_logo_url = $manager -> as_unescape($ext_commitment["logo_url"]);
		
		if(trim($commitment_logo_url) == ""){
			$commitment_logo_url = $curr_loc . "no-img.png";
		} else {
			$commitment_logo_url = $curr_loc . $commitment_logo_url;
			}
	}
	
	//story
	$get_story = mysql_query("SELECT title, description, logo_url FROM company_details WHERE id = 4");
	if(mysql_num_rows($get_story)!=0) {
		$ext_story = mysql_fetch_array($get_story);
		
		$story_title = $manager -> as_unescape($ext_story["title"]);
		$story_description = $manager -> as_unescape($ext_story["description"]);
		$story_logo_url = $manager -> as_unescape($ext_story["logo_url"]);
		
		if(trim($story_logo_url) == ""){
			$story_logo_url = $curr_loc . "no-img.png";
		} else {
			$story_logo_url = $curr_loc . $story_logo_url;
			}
	}
?>