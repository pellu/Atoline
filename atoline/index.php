<?php

error_reporting(-1);
ini_set('error_reporting', E_ALL);

//Oauth Consumer part
/*
 * Include the Oauth Library
 */
require_once("conf/defines.php");
require_once("lib/OAuth.php");
require_once("lib/WBSApi.php");
require_once("lib/Log.php");

$oauthToken = "f240d24000ce8bff1723dec7643b35fbf4d7e3c4501546c434c57d236b3f57f";
$oauthSecret = "12557e4d5f601f813730fb835584cff7fbb9e5eb4f94510d15113ce85fd";

$oWBSApi = new WBSApi($oauthToken, $oauthSecret);
//$oWBSApi->setToken($oauthToken, $oauthSecret);
echo '<pre>';
var_dump($oWBSApi);
$oWBSApi->getAccessToken();

?>