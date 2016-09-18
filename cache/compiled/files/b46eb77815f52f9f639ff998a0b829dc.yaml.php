<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/public/user/config/site.yaml',
    'modified' => 1460288871,
    'data' => [
        'title' => 'Helios',
        'author' => [
            'name' => 'IdleMuse',
            'email' => 'idlemuse@ghostlit.co.uk'
        ],
        'taxonomies' => [
            0 => 'category',
            1 => 'tag'
        ],
        'metadata' => [
            'description' => 'Helios Wiki - Grand Strategy 4X RPG with multiple player factions'
        ],
        'summary' => [
            'enabled' => false,
            'format' => 'short',
            'size' => 300,
            'delimiter' => '==='
        ],
        'blog' => [
            'route' => '/blog'
        ]
    ]
];
