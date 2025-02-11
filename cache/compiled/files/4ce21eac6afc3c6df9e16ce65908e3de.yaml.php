<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/html/user/plugins/fullcalendar/blueprints.yaml',
    'modified' => 1727206611,
    'size' => 3998,
    'data' => [
        'name' => 'FullCalendar',
        'version' => '0.3.5',
        'description' => 'show Calendar Widget from ICS File(s), based on fullcalendar.io',
        'icon' => 'calendar',
        'author' => [
            'name' => 'Werner Joss',
            'email' => 'wernerjoss@users.noreply.github.com'
        ],
        'homepage' => 'https://github.com/wernerjoss/grav-plugin-fullcalendar',
        'keywords' => 'grav, plugin, ICS, Icalendar, fullcalendar.io',
        'bugs' => 'https://github.com/wernerjoss/grav-plugin-fullcalendar/issues',
        'docs' => 'https://github.com/wernerjoss/grav-plugin-fullcalendar',
        'license' => 'MIT',
        'dependencies' => [
            0 => 'problems',
            1 => 'error',
            2 => 'shortcode-core'
        ],
        'form' => [
            'fields' => [
                'enabled' => [
                    'type' => 'toggle',
                    'label' => 'Plugin status',
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
                'showlegend' => [
                    'type' => 'toggle',
                    'label' => 'Show Legend(s)',
                    'help' => 'Show Calendar Name(s) as list below Grid',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'weekNumbers' => [
                    'type' => 'toggle',
                    'label' => 'Show Week Numbers',
                    'help' => 'Show Week Numbers in 1st Grid Column',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'colors' => [
                    'type' => 'text',
                    'size' => 'large',
                    'label' => 'Calendar(s) Colors',
                    'help' => 'Comma separated List of valid html Colors, e.g. Red,LightBlue or \'#DEFFAB,#GADEEF\''
                ],
                'cors_api_url' => [
                    'type' => 'text',
                    'size' => 'large',
                    'label' => 'local Cors API URL',
                    'default' => NULL,
                    'help' => 'leave this empty if you are not sure - it will be evaluated automatically and mostly work ! - see README'
                ],
                'enableDescPopup' => [
                    'type' => 'toggle',
                    'label' => 'enable onClick Popup for Event Description',
                    'help' => 'as said :-) - simple alert() Popup if enabled (so you can copy from it). Default is disabled, which means a nice Tip is shown on hover',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'useIcsTimezone' => [
                    'type' => 'toggle',
                    'label' => 'Use ICS Timezone',
                    'help' => 'Use Timezone from ICS Calendar, if available (Default=false, which means Timezone=local). Only applicable if Timzone Info is stored in ICS File, AND Times are stored in UTC !',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'tz_offset_single' => [
                    'type' => 'number',
                    'size' => 'small',
                    'label' => 'Time Offset (hours) to correct single Events',
                    'help' => 'only use this if you encounter a Time shift on displayed single Events (be aware that a change here will also effect recurring Events !)',
                    'default' => 0
                ],
                'tz_offset_minutes' => [
                    'type' => 'number',
                    'size' => 'small',
                    'label' => 'Time Offset (minutes) to correct single Events',
                    'help' => 'only use this if you encounter a Time shift on displayed single Events (be aware that a change here will also effect recurring Events !)',
                    'default' => 0,
                    'validate' => [
                        'pattern' => '[0-5][0-9]*'
                    ]
                ],
                'tz_offset_rec' => [
                    'type' => 'number',
                    'size' => 'small',
                    'label' => 'Time Offset (hours) to correct recurring Events',
                    'help' => 'only use this if you encounter a Time shift on displayed recurring Events',
                    'default' => 0
                ],
                'firstWeekDay' => [
                    'type' => 'number',
                    'size' => 'small',
                    'label' => 'first Day of Week',
                    'help' => '0 for Sunday, 1 for Monday, 2 for Tuesday ...',
                    'default' => 0
                ]
            ]
        ]
    ]
];
