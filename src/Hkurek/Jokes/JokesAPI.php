<?php

namespace Hkurek\Jokes;

class JokesAPI {
    const URL = "http://ec2-35-156-131-145.eu-central-1.compute.amazonaws.com/list";

    private $http;

    public function __construct($http) {
        $this->http = $http;
    }

    private function getJokesJson() {
        $json = json_decode(
            $this->http->request("GET", self::URL)->getBody(),
            true
        );

        return $json;
    }

    public function getAllJokes() {
        $jokesData = $this->getJokesJson();

        $jokes = [];
        foreach ($jokesData as $joke) {
            array_push($jokes, $joke['content']);
        }

        return $jokes;
    }

    public function randomJoke() {
        $jokesData = getJokesJson();

        $randJoke = rand()%10;

        return $jokesData[$randJoke];
    }
}