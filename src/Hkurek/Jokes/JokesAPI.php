<?php

namespace Hkurek\Jokes;

class JokesAPI {
    const URL = "http://ec2-35-156-131-145.eu-central-1.compute.amazonaws.com/list";

    private $http;

    public function __construct($http) {
        $this->http = $http;
    }

    public function getJokes() {
        $jokesData = json_decode(
            $this->http->request("GET", self::URL)->getBody(),
            true
        );

        $randJoke = rand()%10;



        return $jokesData[$randJoke];
    }
}