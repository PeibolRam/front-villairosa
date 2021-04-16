<?php
$gl_p_subtype = 'properties_subtypes';
$gl_p_maps = 'map_properties';
$gl_p_maps_osm = 'map_properties_osm';

$meta_boxes[] = [
    'title' => 'Properties Section',
    'id' => $prefix . 'properties_section',
    'post_types' => 'post',
    'context' => 'advanced',
    'include' => [
        'category' => ['properties']
    ],
    'tabs' => [

        $gl_p_maps => [
            'label' => 'Maps'
        ],
    ],
    'tab_styles' => 'default',
    'tab_wrapper' => true,
    'fields' => [
        [
            'name' => ucfirst($gl_p_maps),
            'id' => $prefix . $gl_p_maps,
            'type' => 'group',
            'clone' => true,
            'sort_clone' => true,
            'autosave' => true,
            'tab' => $gl_p_maps,
            'fields' => [
                [
                    'id' => 'filter_name_propertie',
                    'name' => 'Filter Name',
                    'type' => 'text',
                ],

                [
                    'id' => 'osm_address',
                    'name' => 'Properties address',
                    'type' => 'text',
                ],
                [
                    'id' => $prefix . 'properties_' . $gl_p_maps_osm,
                    'type' => 'osm',
                    'std' => '-6.233406,-35.049906,15',
                    'address_field' => 'osm_address',
                ],
            ]
        ]

    ]
];
