<?php
if (!function_exists('register_meta_boxes')) {
    function register_meta_boxes($meta_boxes)
    {
        global $prefix;

        $gl_hero = 'hero';
        $gl_numbers = 'numbers';
        $gl_values = 'values';
        $gl_map = 'map';
        $gl_map_osm = 'map_osm';
        $gl_map_google = 'map_google';

        include_once INC_DIR . "mb/_terms-meta.php";
        include_once INC_DIR . "mb/_properties-meta.php";

        $meta_boxes[] = [
            'title' => 'Secciones de Home',
            'id' => $prefix . 'secciones_home',
            'post_types' => 'page',
            'context' => 'advanced',
            'include' => [
                'template' => ['home.php']
            ],
            'tabs' => [
                $gl_hero => [
                    'label' => 'Hero'
                ],
                $gl_numbers => [
                    'label' => 'Numbers'
                ],
                $gl_values => [
                    'label' => 'Values'
                ],
                $gl_map => [
                    'label' => 'Map'
                ],
            ],
            'tab_styles' => 'default',
            'tab_wrapper' => true,
            'fields' => [
                [
                    'name' => 'Hero Images',
                    'id' => $prefix . 'home_' . $gl_hero,
                    'tab' => $gl_hero,
                    'type' => 'image_advanced',
                    'max_file_uploads' => 18,
                    'max_status' => false,
                ],
                [
                    'name' => 'Hero Content',
                    'id' => $prefix . 'home_' . $gl_hero . '_content',
                    'tab' => $gl_hero,
                    'type' => 'textarea',
                ],
                [
                    'name' => 'Countries',
                    'id' => $prefix . 'home_' . $gl_numbers . '_countries',
                    'tab' => $gl_numbers,
                    'type' => 'range',
                    'min' => 1,
                    'max' => 100,
                    'step' => 1
                ],
                [
                    'name' => 'Homes & UnderDevelopments',
                    'id' => $prefix . 'home_' . $gl_numbers . '_under_developments',
                    'tab' => $gl_numbers,
                    'type' => 'range',
                    'min' => 1,
                    'max' => 100000,
                    'step' => 1
                ],
                [
                    'name' => 'Portfolio',
                    'id' => $prefix . 'home_' . $gl_numbers . '_portfolio',
                    'tab' => $gl_numbers,
                    'type' => 'range',
                    'min' => 1,
                    'max' => 10000,
                    'step' => 1
                ],
                [
                    'name' => 'Employees',
                    'id' => $prefix . 'home_' . $gl_numbers . '_employees',
                    'tab' => $gl_numbers,
                    'type' => 'range',
                    'min' => 1,
                    'max' => 500,
                    'step' => 1
                ],

                [
                    'name' => ucfirst($gl_values),
                    'id' => $prefix . $gl_values,
                    'type' => 'group',
                    'clone' => true,
                    'max_clone' => 3,
                    'sort_clone' => true,
                    'autosave' => true,
                    'tab' => $gl_values,
                    'fields' => [
                        [
                            'name' => 'Values Column Image',
                            'id' => $prefix . 'home_' . $gl_values . '_column_image',
                            'type' => 'image_advanced',
                            'max_file_uploads' => 1,
                            'max_status' => false
                        ],
                        [
                            'name' => 'Values Column Title',
                            'id' => $prefix . 'home_' . $gl_values . '_column_title',
                            'type' => 'text'
                        ],
                        [
                            'name' => 'Values Column Content',
                            'id' => $prefix . 'home_' . $gl_values . '_column_content',
                            'type' => 'textarea'
                        ],

                    ]
                ],

                [
                    'name' => ucfirst($gl_map),
                    'id' => $prefix . $gl_map,
                    'type' => 'group',
                    'clone' => true,
                    'sort_clone' => true,
                    'autosave' => true,
                    'tab' => $gl_map,
                    'fields' => [
                        [
                            'id' => 'osm_address',
                            'Name' => 'Propertie addres',
                            'type' => 'text',
                        ],
                        [
                            'name' => 'Map',
                            'id' => $prefix . 'home_' . $gl_map_osm,
                            'type' => 'osm',
                            'std' => '-6.233406,-35.049906,15',
                            'address_field' => 'osm_address',
                        ],
                    ]
                ]



            ]
        ];

        $meta_boxes[] = array(
            'title'      => esc_html__('Imagen secundaria', 'villairosatheme'),
            'id'         => $prefix . 'second_image',
            'post_types' => array('post', 'page'),
            'autosave'   => true,
            'fields'     => array(
                array(
                    'Name' => 'Añadir imagen secundaria',
                    'id'   => $prefix . 'second_image',
                    'type' => 'image_advanced'
                ),
            )
        );

        $meta_boxes[] = array(
            'title'      => esc_html__('Estrategia', 'villairosatheme'),
            'id'         => $prefix . 'strategy',
            'include'    => array(
                'category' => array('strategy')
            ),
            'post_types' => array('post'),
            'autosave'   => true,
            'fields'     => array(
                array(
                    'name' => 'Añadir imagen',
                    'id'   => $prefix . 'strategy_image',
                    'type' => 'image_advanced',
                    'max_file_uploads' => 1
                ),
                array(
                    'name' => 'Añadir titulo',
                    'id'   => $prefix . 'title_strategy',
                    'type' => 'textarea'
                ),
                array(
                    'name' => 'Añadir imagen de fondo',
                    'id'   => $prefix . 'strategy_image_bg',
                    'type' => 'image_advanced',
                    'max_file_uploads' => 1
                ),
                array(
                    'name' => 'Añadir primer parrafo',
                    'id'   => $prefix . 'title_strategy_txt',
                    'type' => 'textarea'
                ),
                array(
                    'name' => 'Añadir imagen',
                    'id'   => $prefix . 'strategy_image_last',
                    'type' => 'image_advanced',
                    'max_file_uploads' => 1
                ),
                array(
                    'name' => 'Añadir parrafo',
                    'id'   => $prefix . 'strategy_last_text',
                    'type' => 'textarea'
                ),
            )
        );

        $meta_boxes[] = array(
            'title'      => esc_html__('Innovacion', 'villairosatheme'),
            'id'         => $prefix . 'innovation',
            'include'    => array(
                'category' => array('innovation')
            ),
            'post_types' => array('post'),
            'autosave'   => true,
            'fields'     => array(
                array(
                    'name' => 'Añadir imagen de inovación',
                    'id'   => $prefix . 'innovation_image',
                    'type' => 'image_advanced',
                    'max_file_uploads' => 1
                ),
                array(
                    'name' => 'Añadir hero',
                    'id'   => $prefix . 'hero_innovation',
                    'type' => 'textarea'
                ),
                array(
                    'name' => 'Añadir titulo personas',
                    'id'   => $prefix . 'personas_innovation_ti',
                    'type' => 'text'
                ),
                array(
                    'name' => 'Añadir parrafo personas',
                    'id'   => $prefix . 'personas_innovation_txt',
                    'type' => 'textarea'
                ),
                array(
                    'name' => 'Añadir hero personas',
                    'id'   => $prefix . 'personas_innovation_hero',
                    'type' => 'textarea'
                ),
                array(
                    'name' => 'Añadir imagen de personas',
                    'id'   => $prefix . 'personas_image',
                    'type' => 'image_advanced',
                    'max_file_uploads' => 1
                ),
                array(
                    'name'             => 'Añadir video de personas',
                    'id'               => 'video_personas',
                    'type'             => 'video',
                    'max_file_uploads' => 1,
                    'force_delete'     => false
                ),
                array(
                    'name' => 'Añadir titulo procesos',
                    'id'   => $prefix . 'procesos_innovation_ti',
                    'type' => 'text'
                ),
                array(
                    'name' => 'Añadir parrafo procesos',
                    'id'   => $prefix . 'procesos_innovation_txt',
                    'type' => 'textarea'
                ),
                array(
                    'name' => 'Añadir hero procesos',
                    'id'   => $prefix . 'procesos_innovation_hero',
                    'type' => 'textarea'
                ),
                array(
                    'name' => 'Añadir imagen de procesos',
                    'id'   => $prefix . 'procesos_image',
                    'type' => 'image_advanced',
                    'max_file_uploads' => 1
                ),
                array(
                    'name'             => 'Añadir video de procesos',
                    'id'               => 'video_procesos',
                    'type'             => 'video',
                    'max_file_uploads' => 1,
                    'force_delete'     => false
                ),
                array(
                    'name' => 'Añadir titulo datos',
                    'id'   => $prefix . 'datos_innovation_ti',
                    'type' => 'text'
                ),
                array(
                    'name' => 'Añadir parrafo datos',
                    'id'   => $prefix . 'datos_innovation_txt',
                    'type' => 'textarea'
                ),
                array(
                    'name' => 'Añadir hero datos',
                    'id'   => $prefix . 'datos_innovation_hero',
                    'type' => 'textarea'
                ),
                array(
                    'name' => 'Añadir imagen de datos',
                    'id'   => $prefix . 'datos_image',
                    'type' => 'image_advanced',
                    'max_file_uploads' => 1
                ),
                array(
                    'name'             => 'Añadir video de datos',
                    'id'               => 'video_datos',
                    'type'             => 'video',
                    'max_file_uploads' => 1,
                    'force_delete'     => false
                ),
                array(
                    'name' => 'Añadir titulo plataformas',
                    'id'   => $prefix . 'plataformas_innovation_ti',
                    'type' => 'text'
                ),
                array(
                    'name' => 'Añadir parrafo plataformas',
                    'id'   => $prefix . 'plataformas_innovation_txt',
                    'type' => 'textarea'
                ),
                array(
                    'name' => 'Añadir hero plataformas',
                    'id'   => $prefix . 'plataformas_innovation_hero',
                    'type' => 'textarea'
                ),
                array(
                    'name' => 'Añadir imagen de plataformas',
                    'id'   => $prefix . 'plataformas_image',
                    'type' => 'image_advanced',
                    'max_file_uploads' => 1
                ),
                array(
                    'name'             => 'Añadir video de plataformas',
                    'id'               => 'video_plataformas',
                    'type'             => 'video',
                    'max_file_uploads' => 1,
                    'force_delete'     => false
                ),
                array(
                    'name' => 'Añadir titulo modelos',
                    'id'   => $prefix . 'modelos_innovation_ti',
                    'type' => 'text'
                ),
                array(
                    'name' => 'Añadir parrafo modelos',
                    'id'   => $prefix . 'modelos_innovation_txt',
                    'type' => 'textarea'
                ),
                array(
                    'name' => 'Añadir hero modelos',
                    'id'   => $prefix . 'modelos_innovation_hero',
                    'type' => 'textarea'
                ),
                array(
                    'name' => 'Añadir imagen de modelos',
                    'id'   => $prefix . 'modelos_image',
                    'type' => 'image_advanced',
                    'max_file_uploads' => 1
                ),
                array(
                    'name'             => 'Añadir video de modelos',
                    'id'               => 'video_modelos',
                    'type'             => 'video',
                    'max_file_uploads' => 1,
                    'force_delete'     => false
                ),

            )
        );

        $meta_boxes[] = array(
            'title'      => esc_html__('Gestion', 'villairosatheme'),
            'id'         => $prefix . 'investment',
            'include'    => array(
                'category' => array('Investment','property-management')
            ),
            'post_types' => array('post'),
            'autosave'   => true,
            'fields'     => array(
                array(
                    'name' => 'Añadir imagen',
                    'id'   => $prefix . 'investment_image',
                    'type' => 'image_advanced',
                    'max_file_uploads' => 1
                ),
                array(
                    'name' => 'Añadir primer parrafo',
                    'id'   => $prefix . 'first_investment',
                    'type' => 'textarea',
                    'clone'=> true,
                ),
                array(
                    'name' => 'Añadir imagen de fondo',
                    'id'   => $prefix . 'investment_image_bg',
                    'type' => 'image_advanced',
                    'max_file_uploads' => 1
                ),
                array(
                    'name' => 'Añadir parrafo',
                    'id'   => $prefix . 'title_investment_txt',
                    'type' => 'textarea',
                    'clone'=> true,
                ),
            )
        );

        $meta_boxes[] = array(
            'title'      => esc_html__('Gestion de activos', 'villairosatheme'),
            'id'         => $prefix . 'asset_management',
            'include'    => array(
                'category' => array('ChildAsset')
            ),
            'post_types' => array('post'),
            'autosave'   => true,
            'fields'     => array(
                array(
                    'name' => 'Añadir imagen de fondo',
                    'id'   => $prefix . 'asset_management_image',
                    'type' => 'image_advanced',
                    'max_file_uploads' => 1
                ),
                array(
                    'name' => 'Añadir primer titulo',
                    'id'   => $prefix . 'first_title_asset_management',
                    'type' => 'textarea',
                    'clone'=> true,
                ),
                array(
                    'name' => 'Añadir primer parrafo',
                    'id'   => $prefix . 'first_asset_management',
                    'type' => 'textarea',
                    'clone'=> true,
                ),
                array(
                    'name' => 'Añadir segundo titulo',
                    'id'   => $prefix . 'second_title_asset_management',
                    'type' => 'textarea',
                    'clone'=> true,
                ),
                array(
                    'name' => 'Añadir segundo parrafo',
                    'id'   => $prefix . 'second_asset_management',
                    'type' => 'textarea',
                    'clone'=> true,
                ),
            )
        );

        $meta_boxes[] = array(
            'title'      => esc_html__('Galeria premio', 'villairosatheme'),
            'id'         => $prefix . 'galery_image',
            'post_types' => array('post'),
            'autosave'   => true,
            'include'    => array(
                'category' => array('award')
            ),
            'fields'     => array(
                array(
                    'Name' => 'Añadir imagen secundaria',
                    'id'   => $prefix . 'second_image',
                    'type' => 'image_advanced'
                ),
            )
        );


        return $meta_boxes;
    }


    add_filter('rwmb_meta_boxes', 'register_meta_boxes');
}
