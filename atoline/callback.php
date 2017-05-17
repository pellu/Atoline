<?

require_once("conf/defines.php");
require_once("lib/OAuth.php");
require_once("lib/WBSApi.php");



$WBSApi = new WBSApi();

$userInfo = $WBSApi->getAccessToken();

$token = $userInfo['oauth_token'];
$secret = $userInfo['oauth_token_secret'];
$userid = $userInfo['userid'];
var_dump($token);
var_dump($secret);

$WBSApi->setToken($token,$secret);

$params = array('limit' => 5);

$measure = $WBSApi->api('measure','getmeas',$params);


print_r($measure);
