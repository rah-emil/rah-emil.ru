<?php

namespace App\Parsers;

use DiDom\Document;
use DiDom\Query;
use DiDom\Exceptions\InvalidSelectorException;
use JetBrains\PhpStorm\ArrayShape;
use phpDocumentor\Reflection\Types\Collection;
use Illuminate\Support\Facades\Cache;

class HabrCareerClient
{
    /**
     * @throws InvalidSelectorException
     */
    #[ArrayShape(['main' => "string", 'profs' => "string", 'offers' => "string", 'skills' => "array|string[]"])]
    static public function getResume($login = 'rah-emil'): array
    {
        $CACHE_KEY = 'career.habr.com';
        $document = new Document(Cache::get($CACHE_KEY), false);

        // If not cache
        if(!Cache::has($CACHE_KEY)) {
            $document = new Document("https://career.habr.com/$login", true);
            Cache::put($CACHE_KEY, $document->html(), 600);
        }

        $skills = $document->find('.basic-section .section-group a[href*=resumes?skills]');

        return [
            'main' => $document->first('.with-sidebar__main .section-group')->innerHtml(),
            'profs' => $document->first('.user-page-sidebar__meta')->innerHtml(),
            'offers' => $document->first('.user-page-sidebar__career')->innerHtml(),
            'skills' => array_map(fn($skill) => $skill->html(), $skills),
        ];
    }
}
