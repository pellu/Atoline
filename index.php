<? //Oauth Consumer part


/*
 * Include the Oauth Library
 */
require_once("conf/defines.php");
require_once("lib/OAuth.php");
require_once("lib/WBSApi.php");
require_once("lib/Log.php");


$WBSApi = new WBSApi();

$WBSApi->getRequestToken();