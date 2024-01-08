<?php	
$get_basic_components = mysql_query("SELECT company_name, logo_url, banner_url, shout_out, footer FROM basic_components");
	if(mysql_num_rows($get_basic_components)!=0) {
		$ext_basic_components = mysql_fetch_array($get_basic_components);
		
			$company_name = $manager -> as_unescape($ext_basic_components["company_name"]);
			$shoutout = $manager -> as_unescape($ext_basic_components["shout_out"]);
			$footer = $manager -> as_unescape($ext_basic_components["footer"]);
			$company_logo = $manager -> as_unescape($ext_basic_components["logo_url"]);
			$company_banner = $manager -> as_unescape($ext_basic_components["banner_url"]);
			
			if(trim($company_logo) == ""){
				$company_logo = $curr_loc . "no-img.png";
			} else {
				$company_logo = $curr_loc . $company_logo;
			}
			
			if(trim($company_banner) == ""){
				$company_banner = $curr_loc . "no-img.png";
			} else {
				$company_banner = $curr_loc . "assets/video/".$company_logo;
			}
	}
?>