<?php 
$prefix = "villairosa_";

// Define Includes
define('INC_DIR', trailingslashit(get_stylesheet_directory() . '/inc'));

/* [01] Base
-------------------------------------------------------*/
require_once INC_DIR . "op/op-base.php";

/* [03] Metaboxes
-------------------------------------------------------*/
require_once INC_DIR . "op/op-metaboxes.php";

/* [04] Fn
-------------------------------------------------------*/
require_once INC_DIR . "op/op-fn.php";


/* [05] Load CSS & JS
-------------------------------------------------------*/
require_once INC_DIR . "op/op-loader.php";


