<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => '/var/www/html/user/pages/03.workshops/blog.md',
    'modified' => 1727812362,
    'size' => 200,
    'data' => [
        'header' => [
            'title' => 'Workshops/Veranstaltungen',
            'content' => [
                'items' => [
                    0 => '@self.children'
                ],
                'limit' => 5,
                'order' => [
                    'by' => 'date',
                    'dir' => 'desc'
                ],
                'pagination' => true,
                'url_taxonomy_filters' => true
            ]
        ],
        'frontmatter' => 'title: Workshops/Veranstaltungen
content:
    items:
        - \'@self.children\'
    limit: 5
    order:
        by: date
        dir: desc
    pagination: true
    url_taxonomy_filters: true',
        'markdown' => ''
    ]
];
