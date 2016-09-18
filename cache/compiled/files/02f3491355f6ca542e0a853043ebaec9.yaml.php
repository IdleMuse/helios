<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/public/user/themes/tech-sheet/blueprints.yaml',
    'modified' => 1471683765,
    'data' => [
        'name' => 'Tech Sheet',
        'version' => '0.1.0',
        'description' => 'Theme specifically for Helios tech sheets',
        'icon' => 'flask',
        'author' => [
            'name' => 'Justin Dee',
            'email' => 'justin.dee@ghostlit.co.uk'
        ],
        'homepage' => 'https://github.com/justin-dee/grav-theme-tech-sheet',
        'demo' => 'http://demo.yoursite.com',
        'keywords' => 'grav, theme, etc',
        'bugs' => 'https://github.com/justin-dee/grav-theme-tech-sheet/issues',
        'readme' => 'https://github.com/justin-dee/grav-theme-tech-sheet/blob/develop/README.md',
        'license' => 'MIT',
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'dropdown.enabled' => [
                    'type' => 'toggle',
                    'label' => 'Dropdown in Menu',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ]
            ]
        ]
    ]
];
