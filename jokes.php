<?php 

require_once __DIR__ . "/vendor/autoload.php";

use Hkurek\Jokes\JokesAPI;

$http = new \GuzzleHttp\Client();

$jokes = new JokesAPI($http);

echo "<p>".$jokes->randomJoke()["content"]."</p>";