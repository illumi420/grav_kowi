<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => '/var/www/html/user/pages/02.gallery/blog.md',
    'modified' => 1727810057,
    'size' => 575,
    'data' => [
        'header' => [
            'title' => 'Gallery',
            'content' => [
                'items' => [
                    0 => '@self.modular'
                ],
                'limit' => 5,
                'order' => [
                    'by' => 'date',
                    'dir' => 'desc'
                ],
                'pagination' => true,
                'url_taxonomy_filters' => true
            ],
            'media_order' => 'signal-2024-07-23-215447_002.jpeg,signal-2024-06-17-124912_003.jpeg,photo_2024-10-01_21-12-54.jpg'
        ],
        'frontmatter' => 'title: Gallery
content:
    items:
        - \'@self.modular\'
    limit: 5
    order:
        by: date
        dir: desc
    pagination: true
    url_taxonomy_filters: true
media_order: \'signal-2024-07-23-215447_002.jpeg,signal-2024-06-17-124912_003.jpeg,photo_2024-10-01_21-12-54.jpg\'',
        'markdown' => '![signal-2024-07-23-215447_002](signal-2024-07-23-215447_002.jpeg "signal-2024-07-23-215447_002")![signal-2024-06-17-124912_003](signal-2024-06-17-124912_003.jpeg "signal-2024-06-17-124912_003")![photo_2024-10-01_21-12-54](photo_2024-10-01_21-12-54.jpg "photo_2024-10-01_21-12-54")'
    ]
];
