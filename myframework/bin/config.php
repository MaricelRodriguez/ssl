<?php

require_once './google-api-php-client/src/Google/autoload.php';
require 'vendor/autoload.php';

use GuzzleHttp\Client;

$config = array(
'defaultController' => 'welcome',
'dbname' => 'fruits',
'dbpass' => 'root',
'dbuser' =>'root',
'baseurl' => 'http://127.0.0.1'
);


$str=$config["baseurl"]."/".$_SERVER['REQUEST_URI'];

//var_dump($str);
//cnn.com/mike


///var_dump($_SERVER['REQUEST_URI']);

$urlPathParts = explode('/', ltrim(parse_url($str,  PHP_URL_PATH), '/'));




include 'router.php';

$route = new router($urlPathParts,$config);


?>
