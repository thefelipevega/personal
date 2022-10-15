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
    'path' => function ($page) {
        return "/" . Str::of($page->getPath())->split('/\//')->filter()->first();
    },
];
