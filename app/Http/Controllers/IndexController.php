<?php

namespace App\Http\Controllers;

use App\Parsers\GitHubClient;
use App\Parsers\HabrCareerClient;
use DiDom\Exceptions\InvalidSelectorException;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

class IndexController extends Controller
{
    /**
     * Index page.
     * Return with github & habr data
     * @throws GuzzleException
     * @throws InvalidSelectorException
     */
    public function __invoke(): \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
    {
        return view('index', [
            'github' => GitHubClient::getUser(),
            'habr' => HabrCareerClient::getResume()
        ]);
    }
}
