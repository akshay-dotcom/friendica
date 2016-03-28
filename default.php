<?php 

/**
 * @file view/theme/frio/default.php
 * 
 * @brief load site template in dependence of the mode
 *	You will find the site templates under:
 *	{{?themepath}}/php/modes/
 */
require_once('view/theme/frio/php/frio_boot.php');


// Check if page is defined as model and set it as modal
// This is a workaround, where we can't change the page the
// page mode in the template with javascript
$page_type = get_page_type($a->argv[0]);
if($page_type === "modal") {
	$_GET["mode"] = "modal";
}

if((isset($_GET["mode"]) AND ($_GET["mode"] == "modal"))) {

	require "view/theme/frio/php/modes/modal.php";
} elseif($page_type === "standard_page") {
	require "view/theme/frio/php/modes/standard.php";
} else {
	require "view/theme/frio/php/modes/default.php";
}

