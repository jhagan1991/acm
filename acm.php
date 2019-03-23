<?php

use WHMCS\ClientArea;
use WHMCS\Database\Capsule;
define('CLIENTAREA', true);

require __DIR__ . '/init.php';

$ca = new ClientArea();

$ca->initPage();
$ca->requireLogin();
$action = $whmcs->get_req_var("action");

// To assign variables to the template system use the following syntax.
// These can then be referenced using {$variablename} in the template.
//$ca->assign('variablename', $value);

 if( $action == "" ) 
    {
		$ca->setPageTitle('Dashboard');
		
		$ca->setTemplate('dashboard');
    }


$ca->setTemplate('mypage');

$ca->output();