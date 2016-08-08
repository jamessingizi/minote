<?php
/**
 * Created by James Singizi
 */

//error_reporting(0);

session_start();

/**
 * disable caching for site
 */
header('Cache-Control: no-store, no-cache, must-revalidate, max-age=0');
header('Cache-Control: post-check=0, pre-check=0', false);
header('Pragma: no-cache');
set_time_limit(0);

//set default time zone
date_default_timezone_set('Africa/Harare');

$dbDirectory = realpath(dirname(__FILE__));
$dbPath = $dbDirectory."/db.class.php";

require_once ($dbPath);
require_once ($dbDirectory."/classes/validation.class.php");

//set encryption key
$encryption_key="154072a750541f54250de83a125003a4";