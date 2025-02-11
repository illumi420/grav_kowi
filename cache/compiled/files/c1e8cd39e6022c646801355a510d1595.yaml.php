<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/html/user/themes/quark/blueprints/partials/blog-bits.yaml',
    'modified' => 1715789841,
    'size' => 1810,
    'data' => [
        'form' => [
            'fields' => [
                'hero_title' => [
                    'type' => 'spacer',
                    'title' => 'Hero Section'
                ],
                'header.hero_classes' => [
                    'type' => 'text',
                    'label' => 'Hero Classes',
                    'markdown' => true,
                    'description' => 'There are several Hero class options that can be listed here (space separated):<br />`text-light`, `text-dark`, `title-h1h2`, `parallax`, `overlay-dark-gradient`, `overlay-light-gradient`, `overlay-dark`, `overlay-light`, `hero-fullscreen`, `hero-large`, `hero-medium`, `hero-small`, `hero-tiny`<br />Please consult the [Quark documentation](https://github.com/getgrav/grav-theme-quark#hero-options) for more details.'
                ],
                'header.hero_image' => [
                    'type' => 'filepicker',
                    'label' => 'Hero Image',
                    'preview_images' => true,
                    'description' => 'If not specified, this defaults to the first image found in the page\'s folder'
                ],
                'toggles_title' => [
                    'type' => 'spacer',
                    'title' => 'Configuration'
                ],
                'header.blog_url' => [
                    'type' => 'text',
                    'toggleable' => true,
                    'label' => 'Blog Route',
                    'help' => 'The route to the main blog page that contains the "Show ..." configuration',
                    'default' => '/blog',
                    'placeholder' => '/blog',
                    'size' => 'medium'
                ],
                'header.show_sidebar' => [
                    'type' => 'toggle',
                    'toggleable' => true,
                    'label' => 'Show Sidebar',
                    'highlight' => 1,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'header.show_breadcrumbs' => [
                    'type' => 'toggle',
                    'toggleable' => true,
                    'label' => 'Show Breadcrumbs',
                    'highlight' => 1,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'header.show_pagination' => [
                    'type' => 'toggle',
                    'toggleable' => true,
                    'label' => 'Show Pagination',
                    'highlight' => 1,
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
