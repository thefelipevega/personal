<?php

use Illuminate\Support\Str;

return [
    'production' => false,
    'baseUrl' => 'personal.test',
    'title' => 'Felipe Vega',
    'description' => 'My personal website.',
    'collections' => [],
    'sections' => collect([
        [
            'url' => '/',
            'title' => 'Intro',
        ],
        [
            'url' => '/writing',
            'title' => 'Writing',
        ],
        [
            'url' => '/tools',
            'title' => 'Tools',
        ],
    ]),
    'link' => function ($page) {
        return "/" . Str::of($page->getPath())->split('/\//')->filter()->first();
    },
    'collections' => [
        'writings' => [
            'path' => 'writing/{filename}',
            'sort' => '-date',
            'excerpt' => function ($page, $characters = 300) {
                return substr(strip_tags($page->getContent()), 0, $characters) . " ...";
            },
        ],
    ],
];
