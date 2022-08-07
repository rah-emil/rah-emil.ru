<?php

namespace App\Parsers;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Support\Facades\Cache;

class GitHubClient
{
    /**
     * @throws GuzzleException
     */
    static public function getUser($login = 'rah-emil'): object
    {
        $CACHE_KEY = "api.github.com/users/$login";
        $body = Cache::get($CACHE_KEY);

        // If not cache
        if(!Cache::has($CACHE_KEY)) {
            $client = new Client();
            $response = $client->get("https://api.github.com/users/$login");
            $body = json_decode($response->getBody(), false);
            Cache::put($CACHE_KEY, $body, 600);
        }

        return $body;
    }
}
