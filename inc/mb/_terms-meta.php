<?php
$meta_boxes[] = [
    'title'      => 'Sections Description',
    'taxonomies' => 'category', // List of taxonomies. Array or string

    'fields' => [
        [
            'name' => 'Featured Content',
            'id'   => $prefix . 'featured_content_section',
            'type' => 'wysiwyg',
        ],
        [
            'name' => 'Featured Image',
            'id'   =>  $prefix . 'image_advanced_section',
            'type' => 'image_advanced',
            'max_file_uploads' => 1,
            'max_status' => false,
        ]
    ],
];
