<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/html/user/plugins/aboutme/blueprints.yaml',
    'modified' => 1727205328,
    'size' => 9800,
    'data' => [
        'name' => 'AboutMe',
        'version' => '1.2.3',
        'description' => 'Simple plugin to show some information about yourself, with a nice picture, your name, your title/job and a description.<br/>You can also add links to your social network pages (Twitter, Facebook, GitHub, LinkedIn, Instagram).',
        'icon' => 'user',
        'author' => [
            'name' => 'Sébastien Viallemonteil',
            'email' => 'sviallemonteil@gmail.com',
            'url' => 'https://scratchmydev.com'
        ],
        'homepage' => 'https://github.com/birssan/grav-plugin-about-me',
        'keywords' => 'plugin, about, avatar, description, job',
        'bugs' => 'https://github.com/birssan/grav-plugin-about-me/issues',
        'license' => 'MIT',
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'enabled' => [
                    'type' => 'toggle',
                    'label' => 'PLUGIN_ABOUTME.ENABLED',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'built_in_css' => [
                    'type' => 'toggle',
                    'label' => 'PLUGIN_ABOUTME.BUILT_IN_CSS',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'name' => [
                    'type' => 'text',
                    'size' => 'small',
                    'label' => 'PLUGIN_ABOUTME.NAME',
                    'validate' => [
                        'type' => 'text'
                    ]
                ],
                'title' => [
                    'type' => 'text',
                    'label' => 'PLUGIN_ABOUTME.TITLE',
                    'validate' => [
                        'type' => 'text'
                    ]
                ],
                'show_title' => [
                    'type' => 'toggle',
                    'label' => 'PLUGIN_ABOUTME.SHOW_TITLE',
                    'default' => 1,
                    'highlight' => 0,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'description' => [
                    'type' => 'markdown',
                    'label' => 'PLUGIN_ABOUTME.DESCRIPTION',
                    'validate' => [
                        'type' => 'textarea'
                    ]
                ],
                'Profile Picture' => [
                    'type' => 'section',
                    'title' => 'PLUGIN_ABOUTME.PICTURE.SECTION',
                    'underline' => true
                ],
                'picture_src' => [
                    'type' => 'file',
                    'label' => 'PLUGIN_ABOUTME.PICTURE.PICTURE_SRC',
                    'multiple' => false,
                    'destination' => 'user/plugins/aboutme/assets/avatars',
                    'accept' => [
                        0 => 'image/*'
                    ]
                ],
                'Gravatar' => [
                    'type' => 'section',
                    'title' => 'PLUGIN_ABOUTME.GRAVATAR.SECTION',
                    'underline' => true
                ],
                'gravatar.enabled' => [
                    'type' => 'toggle',
                    'label' => 'PLUGIN_ABOUTME.GRAVATAR.ENABLED',
                    'highlight' => 0,
                    'default' => 0,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'gravatar.email' => [
                    'type' => 'text',
                    'size' => 'small',
                    'label' => 'PLUGIN_ABOUTME.GRAVATAR.EMAIL',
                    'validate' => [
                        'type' => 'text'
                    ]
                ],
                'gravatar.size' => [
                    'type' => 'number',
                    'size' => 'small',
                    'label' => 'PLUGIN_ABOUTME.GRAVATAR.SIZE',
                    'default' => 100,
                    'validate' => [
                        'type' => 'int',
                        'min' => 50
                    ]
                ],
                'Social Pages' => [
                    'type' => 'section',
                    'title' => 'PLUGIN_ABOUTME.SOCIAL_PAGES.SECTION',
                    'underline' => true
                ],
                'social_pages.enabled' => [
                    'type' => 'toggle',
                    'label' => 'PLUGIN_ABOUTME.SOCIAL_PAGES.ENABLED',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'social_pages.use_font_awesome' => [
                    'type' => 'toggle',
                    'label' => 'PLUGIN_ABOUTME.SOCIAL_PAGES.USE_FONT_AWESOME',
                    'highlight' => 0,
                    'default' => 0,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'social_pages_types_spacer' => [
                    'type' => 'spacer',
                    'title' => 'PLUGIN_ABOUTME.SOCIAL_PAGES_TYPES.SPACER',
                    'underline' => true
                ],
                'social_pages_types' => [
                    'type' => 'tabs',
                    'active' => 1,
                    'title' => 'PLUGIN_ABOUTME.SOCIAL_PAGES_TYPES.TABS',
                    'fields' => [
                        'facebook' => [
                            'type' => 'tab',
                            'title' => 'Facebook',
                            'fields' => [
                                'social_pages.pages.facebook.icon_type' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_ABOUTME.SOCIAL_PAGES_TYPES.ICON_TYPE',
                                    'highlight' => 'b',
                                    'default' => 'b',
                                    'options' => [
                                        'b' => 'Brand',
                                        's' => 'Solid',
                                        'r' => 'Regular'
                                    ],
                                    'validate' => [
                                        'type' => 'text'
                                    ]
                                ],
                                'social_pages.pages.facebook.icon' => [
                                    'type' => 'text',
                                    'size' => 'small',
                                    'label' => 'PLUGIN_ABOUTME.SOCIAL_PAGES_TYPES.ICON',
                                    'default' => 'facebook',
                                    'validate' => [
                                        'type' => 'text'
                                    ]
                                ],
                                'social_pages.pages.facebook.url' => [
                                    'type' => 'url',
                                    'label' => 'PLUGIN_ABOUTME.SOCIAL_PAGES_TYPES.URL',
                                    'validate' => [
                                        'type' => 'url'
                                    ]
                                ],
                                'social_pages.pages.facebook.title' => [
                                    'type' => 'text',
                                    'label' => 'PLUGIN_ABOUTME.SOCIAL_PAGES_TYPES.TITLE',
                                    'default' => 'Facebook',
                                    'validate' => [
                                        'type' => 'text'
                                    ]
                                ],
                                'social_pages.pages.facebook.position' => [
                                    'type' => 'text',
                                    'size' => 'x-small',
                                    'label' => 'PLUGIN_ABOUTME.SOCIAL_PAGES_TYPES.POSITION',
                                    'default' => 1,
                                    'validate' => [
                                        'type' => 'Number'
                                    ]
                                ]
                            ]
                        ],
                        'twitter' => [
                            'type' => 'tab',
                            'title' => 'Twitter',
                            'fields' => [
                                'social_pages.pages.twitter.icon_type' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_ABOUTME.SOCIAL_PAGES_TYPES.ICON_TYPE',
                                    'highlight' => 'b',
                                    'default' => 'b',
                                    'options' => [
                                        'b' => 'Brand',
                                        's' => 'Solid',
                                        'r' => 'Regular'
                                    ],
                                    'validate' => [
                                        'type' => 'text'
                                    ]
                                ],
                                'social_pages.pages.twitter.icon' => [
                                    'type' => 'text',
                                    'size' => 'small',
                                    'label' => 'PLUGIN_ABOUTME.SOCIAL_PAGES_TYPES.ICON',
                                    'default' => 'twitter',
                                    'validate' => [
                                        'type' => 'text'
                                    ]
                                ],
                                'social_pages.pages.twitter.url' => [
                                    'type' => 'url',
                                    'label' => 'PLUGIN_ABOUTME.SOCIAL_PAGES_TYPES.URL',
                                    'validate' => [
                                        'type' => 'url'
                                    ]
                                ],
                                'social_pages.pages.twitter.title' => [
                                    'type' => 'text',
                                    'label' => 'PLUGIN_ABOUTME.SOCIAL_PAGES_TYPES.TITLE',
                                    'default' => 'Twitter',
                                    'validate' => [
                                        'type' => 'text'
                                    ]
                                ],
                                'social_pages.pages.twitter.position' => [
                                    'type' => 'text',
                                    'size' => 'x-small',
                                    'label' => 'PLUGIN_ABOUTME.SOCIAL_PAGES_TYPES.POSITION',
                                    'default' => 1,
                                    'validate' => [
                                        'type' => 'Number'
                                    ]
                                ]
                            ]
                        ],
                        'github' => [
                            'type' => 'tab',
                            'title' => 'GitHub',
                            'fields' => [
                                'social_pages.pages.github.icon_type' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_ABOUTME.SOCIAL_PAGES_TYPES.ICON_TYPE',
                                    'highlight' => 'b',
                                    'default' => 'b',
                                    'options' => [
                                        'b' => 'Brand',
                                        's' => 'Solid',
                                        'r' => 'Regular'
                                    ],
                                    'validate' => [
                                        'type' => 'text'
                                    ]
                                ],
                                'social_pages.pages.github.icon' => [
                                    'type' => 'text',
                                    'size' => 'small',
                                    'label' => 'PLUGIN_ABOUTME.SOCIAL_PAGES_TYPES.ICON',
                                    'default' => 'github',
                                    'validate' => [
                                        'type' => 'text'
                                    ]
                                ],
                                'social_pages.pages.github.url' => [
                                    'type' => 'url',
                                    'label' => 'PLUGIN_ABOUTME.SOCIAL_PAGES_TYPES.URL',
                                    'validate' => [
                                        'type' => 'url'
                                    ]
                                ],
                                'social_pages.pages.github.title' => [
                                    'type' => 'text',
                                    'label' => 'PLUGIN_ABOUTME.SOCIAL_PAGES_TYPES.TITLE',
                                    'default' => 'GitHub',
                                    'validate' => [
                                        'type' => 'text'
                                    ]
                                ],
                                'social_pages.pages.github.position' => [
                                    'type' => 'text',
                                    'size' => 'x-small',
                                    'label' => 'PLUGIN_ABOUTME.SOCIAL_PAGES_TYPES.POSITION',
                                    'default' => 1,
                                    'validate' => [
                                        'type' => 'Number'
                                    ]
                                ]
                            ]
                        ],
                        'linkedin' => [
                            'type' => 'tab',
                            'title' => 'LinkedIn',
                            'fields' => [
                                'social_pages.pages.linkedin.icon_type' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_ABOUTME.SOCIAL_PAGES_TYPES.ICON_TYPE',
                                    'highlight' => 'b',
                                    'default' => 'b',
                                    'options' => [
                                        'b' => 'Brand',
                                        's' => 'Solid',
                                        'r' => 'Regular'
                                    ],
                                    'validate' => [
                                        'type' => 'text'
                                    ]
                                ],
                                'social_pages.pages.linkedin.icon' => [
                                    'type' => 'text',
                                    'size' => 'small',
                                    'label' => 'PLUGIN_ABOUTME.SOCIAL_PAGES_TYPES.ICON',
                                    'default' => 'linkedin',
                                    'validate' => [
                                        'type' => 'text'
                                    ]
                                ],
                                'social_pages.pages.linkedin.url' => [
                                    'type' => 'url',
                                    'label' => 'PLUGIN_ABOUTME.SOCIAL_PAGES_TYPES.URL',
                                    'validate' => [
                                        'type' => 'url'
                                    ]
                                ],
                                'social_pages.pages.linkedin.title' => [
                                    'type' => 'text',
                                    'label' => 'PLUGIN_ABOUTME.SOCIAL_PAGES_TYPES.TITLE',
                                    'default' => 'LinkedIn',
                                    'validate' => [
                                        'type' => 'text'
                                    ]
                                ],
                                'social_pages.pages.linkedin.position' => [
                                    'type' => 'text',
                                    'size' => 'x-small',
                                    'label' => 'PLUGIN_ABOUTME.SOCIAL_PAGES_TYPES.POSITION',
                                    'default' => 1,
                                    'validate' => [
                                        'type' => 'Number'
                                    ]
                                ]
                            ]
                        ],
                        'instagram' => [
                            'type' => 'tab',
                            'title' => 'Instagram',
                            'fields' => [
                                'social_pages.pages.instagram.icon_type' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_ABOUTME.SOCIAL_PAGES_TYPES.ICON_TYPE',
                                    'highlight' => 'b',
                                    'default' => 'b',
                                    'options' => [
                                        'b' => 'Brand',
                                        's' => 'Solid',
                                        'r' => 'Regular'
                                    ],
                                    'validate' => [
                                        'type' => 'text'
                                    ]
                                ],
                                'social_pages.pages.instagram.icon' => [
                                    'type' => 'text',
                                    'size' => 'small',
                                    'label' => 'PLUGIN_ABOUTME.SOCIAL_PAGES_TYPES.ICON',
                                    'default' => 'instagram',
                                    'validate' => [
                                        'type' => 'text'
                                    ]
                                ],
                                'social_pages.pages.instagram.url' => [
                                    'type' => 'url',
                                    'label' => 'PLUGIN_ABOUTME.SOCIAL_PAGES_TYPES.URL',
                                    'validate' => [
                                        'type' => 'url'
                                    ]
                                ],
                                'social_pages.pages.instagram.title' => [
                                    'type' => 'text',
                                    'label' => 'PLUGIN_ABOUTME.SOCIAL_PAGES_TYPES.TITLE',
                                    'default' => 'Instagram',
                                    'validate' => [
                                        'type' => 'text'
                                    ]
                                ],
                                'social_pages.pages.instagram.position' => [
                                    'type' => 'text',
                                    'size' => 'x-small',
                                    'label' => 'PLUGIN_ABOUTME.SOCIAL_PAGES_TYPES.POSITION',
                                    'default' => 1,
                                    'validate' => [
                                        'type' => 'Number'
                                    ]
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
