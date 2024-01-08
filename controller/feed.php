<?php
require_once "connection.php";
require_once "manager.php";
$manager = new manager();

//img location
$curr_loc = "../admin/img/data/";
//$curr_loc = "https://admin.simpletruth.ph/img/data/";

//basic components
$company_name = "";
$shoutout = "";
$footer = "";
$company_logo = "";
$company_banner = "";

//contact details
$contact_no = "";
$email_address = "";
$address = "";

//company details - manifesto
$manifesto_title = "";
$manifesto_description = "";
$manifesto_logo_url = "";

//company details - mindful living
$mindful_title = "";
$mindful_description = "";
$mindful_logo_url = "";

//company details - our commitment
$commitment_title = "";
$commitment_description = "";
$commitment_logo_url = "";

//company details - our story
$story_title = "";
$story_description = "";
$story_logo_url = "";

include "populate_basic_components.php";
include "populate_contact_details.php";
include "populate_company_details.php";
?>
