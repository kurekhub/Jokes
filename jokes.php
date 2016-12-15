<?php 

require_once __DIR__ . "/vendor/autoload.php";

use Hkurek\Jokes\JokesAPI;

$http = new \GuzzleHttp\Client();

$jokes = new JokesAPI($http);

$allJokes = $jokes->getAllJokes();

//echo var_dump($allJokes);

foreach ($allJokes as $joke) {
    echo "<p>". $joke ."</p>";
}


