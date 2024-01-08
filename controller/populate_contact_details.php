<?php
	$get_contact_details = mysql_query("SELECT contact_no, email_address, address FROM contact_details");
	if(mysql_num_rows($get_contact_details)!=0) {
		$ext_contact_details = mysql_fetch_array($get_contact_details);
		$contact_no = $manager -> as_unescape($ext_contact_details["contact_no"]);
		$email_address = $manager -> as_unescape($ext_contact_details["email_address"]);
		$address = $manager -> as_unescape($ext_contact_details["address"]);
	}
?>