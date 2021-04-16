<?php

if (!function_exists('simple_metabox')) :
    function simple_metabox($set)
    {
        global $prefix;
        $simple_metabox = rwmb_meta($prefix . $set);

        return (!empty($simple_metabox) ? $simple_metabox : '');
    }

    if (!function_exists('is_simple_metabox')) :
        function is_simple_metabox($set)
        {
            $simple_metabox = simple_metabox($set);
            echo $simple_metabox;
        }
    endif;
endif;

if (!function_exists('simple_metabox_sec')) :
    function simple_metabox_sec($set, $term_id)
    {
        global $prefix;
        $value = rwmb_meta($prefix . $set, array('object_type' => 'term'), $term_id);

        return (!empty($value) ? $value : '');
    }

    if (!function_exists('is_simple_metabox_sec')) :
        function is_simple_metabox_sec($set, $term_id)
        {
            $simple_metabox_sec = simple_metabox_sec($set, $term_id);
            echo $simple_metabox_sec;
        }
    endif;
endif;



if (!function_exists('get_rot_image')) :
    function get_rot_image()
    {
        global $prefix;
        $gl_hero = 'hero';

        $rot_image = rwmb_meta($prefix . 'home_' . $gl_hero, ['size' =>  'large']);

        if (!empty($rot_image)) {
            foreach ($rot_image as $image) {
                $the_image = "{$image['url']}";
            }

            //  Find a Fallback Image, Remember Coral!!
            return (!empty($rot_image)) ? $the_image : '';
        }
    }

    if (!function_exists('is_rot_image')) :
        function is_rot_image()
        {
            $is_rot_image = get_rot_image();
            echo $is_rot_image;
        }
    endif;
endif;



if (!function_exists('get_groups')) :
    function get_groups()
    {
        global $prefix;
        $gl_values = 'values';

        $groups = rwmb_meta($prefix . $gl_values);

        $columns = '';
        if (!empty($groups)) {
            foreach ($groups as $get_content) {
                $column_image = !empty($get_content[$prefix . 'home_' . $gl_values . '_column_image']) ? $get_content[$prefix . 'home_' . $gl_values . '_column_image'] : '';
                $column_title = !empty($get_content[$prefix . 'home_' . $gl_values . '_column_title']) ? $get_content[$prefix . 'home_' . $gl_values . '_column_title'] : '';
                $column_content = !empty($get_content[$prefix . 'home_' . $gl_values . '_column_content']) ? $get_content[$prefix . 'home_' . $gl_values . '_column_content'] : '';

                $field_img = '';

                if (is_array($column_image) || is_object($column_image)) {
                    foreach ($column_image as $image_id) {
                        $image = RWMB_Image_Field::file_info($image_id, ['size' => 'full']);
                        $field_img = $image['url'];
                    }
                }

                $columns .= " <div class=\"column_block_column column_33\">
                    <figure>
                        <img loading=lazy src=\"$field_img\" alt=\"\" />
                    </figure>
                    <div class=\"column_block_column_content\">
                        <h4>$column_title</h4>
                        <p>$column_content</p>
                    </div>
                    </div>";
            }

            // return $columns;
            if (!empty($columns)) {
                return $columns;
            }
        }
    }

    if (!function_exists('is_groups')) :
        function is_groups()
        {
            $is_groups = get_groups();
            echo $is_groups;
        }
    endif;
endif;


//get image
if (!function_exists('fun_get__image')) :
    function fun_get__image()
    {
        global $prefix;
        $images = rwmb_meta($prefix . 'second_image',array( 'size' => 'full' ));

        foreach ( $images as $image ) {
            echo '<img src="', $image['url'], '">';
        }
    }

endif;

//get award galery images
if (!function_exists('fun_get_award_galery_images')) :
    function fun_get_award_galery_images()
    {
        global $prefix;
        $images = rwmb_meta($prefix . 'galery_image',array( 'size' => 'full' ));

        if(count($images)>=1){
            foreach ( $images as $image ) {
                echo '<div class="slide">';
                echo '<img src="', $image['url'], '">';
                echo '</div>';
            }
        } else{
            echo '<img src="<?php echo get_the_post_thumbnail_url();?>" alt="" class="backbg"/>';
        }
    }

endif;

//get strategy image
if (!function_exists('fun_strategy__image')) :
    function fun_strategy__image()
    {
        global $prefix;
        $images = rwmb_meta($prefix . 'strategy_image',array( 'size' => 'full' ));

        foreach ( $images as $image ) {
            echo '<img src="', $image['url'], '">';
        }
    }

endif;

//get strategy title
if (!function_exists('fun_strategy__title')) :
    function fun_strategy__title()
    {
        global $prefix;
        $titles = rwmb_meta($prefix . 'title_strategy');

        echo $titles;
        
    }

endif;

//get strategy image
if (!function_exists('fun_strategy__bg')) :
    function fun_strategy__bg()
    {
        global $prefix;
        $images = rwmb_meta($prefix . 'strategy_image_bg',array( 'size' => 'full' ));

        foreach ( $images as $image ) {
            echo  $image['url'];
        }
    }

endif;

//get bg image
if (!function_exists('fun_strategy__bg_txt')) :
    function fun_strategy__bg_txt()
    {
        global $prefix;
        $titles = rwmb_meta($prefix . 'title_strategy_txt');

        echo $titles;
        
    }

endif;


//get strategy image
if (!function_exists('fun_strategy__last')) :
    function fun_strategy__last()
    {
        global $prefix;
        $images = rwmb_meta($prefix . 'strategy_image_last',array( 'size' => 'full' ));

        foreach ( $images as $image ) {
            echo  '<img src="', $image['url'], '">';
        }
    }

endif;

//get bg image
if (!function_exists('fun_strategy__last_txt')) :
    function fun_strategy__last_txt()
    {
        global $prefix;
        $titles = rwmb_meta($prefix . 'strategy_last_text');

        echo $titles;
        
    }

endif;


//get innovation 3 image
if (!function_exists('fun_innovation_image')) :
    function fun_innovation_image()
    {
        global $prefix;
        $images = rwmb_meta($prefix . 'innovation_image',array( 'size' => 'full' ));

        foreach ( $images as $image ) {
            echo  '<img src="', $image['url'], '">';
        }
    }

endif;

//get innovation hero 
if (!function_exists('fun_innovation__hero')) :
    function fun_innovation__hero()
    {
        global $prefix;
        $heros = rwmb_meta($prefix . 'hero_innovation');

        echo $heros;
        
    }

endif;

//get innovation personas title
if (!function_exists('fun_innovation_title_personas')) :
    function fun_innovation_title_personas()
    {
        global $prefix;
        $heros = rwmb_meta($prefix . 'personas_innovation_ti');

        echo $heros;
        
    }

endif;
//get innovation personas 
if (!function_exists('fun_innovation__personas')) :
    function fun_innovation__personas()
    {
        global $prefix;
        $heros = rwmb_meta($prefix . 'personas_innovation_txt');

        echo $heros;
        
    }

endif;
//get innovation hero personas 
if (!function_exists('fun_innovation_hero_personas')) :
    function fun_innovation_hero_personas()
    {
        global $prefix;
        $heros = rwmb_meta($prefix . 'personas_innovation_hero');

        echo $heros;
        
    }

endif;

//get personas image
if (!function_exists('fun_personas_image')) :
    function fun_personas_image()
    {
        global $prefix;
        $images = rwmb_meta($prefix . 'personas_image',array( 'size' => 'full' ));

        foreach ( $images as $image ) {
            echo  '<img src="', $image['url'], '">';
        }
    }

endif;

//get video personas
if (!function_exists('fun_get__video_personas')) :
    function fun_get__video_personas()
    {
        $videos = rwmb_meta( 'video_personas' );
        foreach ( $videos as $video ) {
            ?>
                <video controls loop src="<?php echo $video['src']; ?>">
            <?php
        }   
    }

endif;

//get innovation procesos title
if (!function_exists('fun_innovation_title_procesos')) :
    function fun_innovation_title_procesos()
    {
        global $prefix;
        $heros = rwmb_meta($prefix . 'procesos_innovation_ti');

        echo $heros;
        
    }

endif;

//get innovation procesos 
if (!function_exists('fun_innovation__procesos')) :
    function fun_innovation__procesos()
    {
        global $prefix;
        $heros = rwmb_meta($prefix . 'procesos_innovation_txt');

        echo $heros;
        
    }

endif;
//get innovation hero procesos 
if (!function_exists('fun_innovation_hero_procesos')) :
    function fun_innovation_hero_procesos()
    {
        global $prefix;
        $heros = rwmb_meta($prefix . 'procesos_innovation_hero');

        echo $heros;
        
    }

endif;

//get procesos image
if (!function_exists('fun_procesos_image')) :
    function fun_procesos_image()
    {
        global $prefix;
        $images = rwmb_meta($prefix . 'procesos_image',array( 'size' => 'full' ));

        foreach ( $images as $image ) {
            echo  '<img src="', $image['url'], '">';
        }
    }

endif;

//get video procesos
if (!function_exists('fun_get__video_procesos')) :
    function fun_get__video_procesos()
    {
        $videos = rwmb_meta( 'video_procesos' );
        foreach ( $videos as $video ) {
            ?>
                <video controls loop src="<?php echo $video['src']; ?>">
            <?php
        }   
    }

endif;

//get innovation datos title
if (!function_exists('fun_innovation_title_datos')) :
    function fun_innovation_title_datos()
    {
        global $prefix;
        $heros = rwmb_meta($prefix . 'datos_innovation_ti');

        echo $heros;
        
    }

endif;
//get innovation datos 
if (!function_exists('fun_innovation__datos')) :
    function fun_innovation__datos()
    {
        global $prefix;
        $heros = rwmb_meta($prefix . 'datos_innovation_txt');

        echo $heros;
        
    }

endif;
//get innovation hero datos 
if (!function_exists('fun_innovation_hero_datos')) :
    function fun_innovation_hero_datos()
    {
        global $prefix;
        $heros = rwmb_meta($prefix . 'datos_innovation_hero');

        echo $heros;
        
    }

endif;

//get datos image
if (!function_exists('fun_datos_image')) :
    function fun_datos_image()
    {
        global $prefix;
        $images = rwmb_meta($prefix . 'datos_image',array( 'size' => 'full' ));

        foreach ( $images as $image ) {
            echo  '<img src="', $image['url'], '">';
        }
    }

endif;

//get video datos
if (!function_exists('fun_get__video_datos')) :
    function fun_get__video_datos()
    {
        $videos = rwmb_meta( 'video_datos' );
        foreach ( $videos as $video ) {
            ?>
                <video controls loop src="<?php echo $video['src']; ?>">
            <?php
        }   
    }

endif;

//get innovation plataformas title
if (!function_exists('fun_innovation_title_plataformas')) :
    function fun_innovation_title_plataformas()
    {
        global $prefix;
        $heros = rwmb_meta($prefix . 'plataformas_innovation_ti');

        echo $heros;
        
    }

endif;
//get innovation plataformas 
if (!function_exists('fun_innovation__plataformas')) :
    function fun_innovation__plataformas()
    {
        global $prefix;
        $heros = rwmb_meta($prefix . 'plataformas_innovation_txt');

        echo $heros;
        
    }

endif;
//get innovation hero plataformas 
if (!function_exists('fun_innovation_hero_plataformas')) :
    function fun_innovation_hero_plataformas()
    {
        global $prefix;
        $heros = rwmb_meta($prefix . 'plataformas_innovation_hero');

        echo $heros;
        
    }

endif;

//get plataformas image
if (!function_exists('fun_plataformas_image')) :
    function fun_plataformas_image()
    {
        global $prefix;
        $images = rwmb_meta($prefix . 'plataformas_image',array( 'size' => 'full' ));

        foreach ( $images as $image ) {
            echo  '<img src="', $image['url'], '">';
        }
    }

endif;

//get video plataformas
if (!function_exists('fun_get__video_plataformas')) :
    function fun_get__video_plataformas()
    {
        $videos = rwmb_meta( 'video_plataformas' );
        foreach ( $videos as $video ) {
            ?>
                <video controls loop src="<?php echo $video['src']; ?>">
            <?php
        }   
    }

endif;

//get innovation modelos title
if (!function_exists('fun_innovation_title_modelos')) :
    function fun_innovation_title_modelos()
    {
        global $prefix;
        $heros = rwmb_meta($prefix . 'modelos_innovation_ti');

        echo $heros;
        
    }

endif;
//get innovation modelos 
if (!function_exists('fun_innovation__modelos')) :
    function fun_innovation__modelos()
    {
        global $prefix;
        $heros = rwmb_meta($prefix . 'modelos_innovation_txt');

        echo $heros;
        
    }

endif;
//get innovation hero modelos 
if (!function_exists('fun_innovation_hero_modelos')) :
    function fun_innovation_hero_modelos()
    {
        global $prefix;
        $heros = rwmb_meta($prefix . 'modelos_innovation_hero');

        echo $heros;
        
    }

endif;

//get modelos image
if (!function_exists('fun_modelos_image')) :
    function fun_modelos_image()
    {
        global $prefix;
        $images = rwmb_meta($prefix . 'modelos_image',array( 'size' => 'full' ));

        foreach ( $images as $image ) {
            echo  '<img src="', $image['url'], '">';
        }
    }

endif;

//get video modelos
if (!function_exists('fun_get__video_modelos')) :
    function fun_get__video_modelos()
    {
        $videos = rwmb_meta( 'video_modelos' );
        foreach ( $videos as $video ) {
            ?>
                <video controls loop src="<?php echo $video['src']; ?>">
            <?php
        }   
    }

endif;

//get investment image
if (!function_exists('fun_investment__image')) :
    function fun_investment__image()
    {
        global $prefix;
        $images = rwmb_meta($prefix . 'investment_image',array( 'size' => 'full' ));

        foreach ( $images as $image ) {
            echo '<img src="', $image['url'], '">';
        }
    }

endif;

//get investment first
if (!function_exists('fun_investment__first')) :
    function fun_investment__first()
    {
        global $prefix;
        $values = rwmb_meta($prefix . 'first_investment');
        foreach ( $values as $value ) {
            echo  '<p class="wow fadeInUp">', $value, '</p>';
        }
    }

endif;

//get investment image
if (!function_exists('fun_investment__bg')) :
    function fun_investment__bg()
    {
        global $prefix;
        $images = rwmb_meta($prefix . 'investment_image_bg',array( 'size' => 'full' ));

        foreach ( $images as $image ) {
            echo  $image['url'];
        }
    }

endif;

//get bg image
if (!function_exists('fun_investment__bg_txt')) :
    function fun_investment__bg_txt()
    {
        global $prefix;
        $values = rwmb_meta($prefix . 'title_investment_txt');
        foreach ( $values as $value ) {
            echo  '<p class="wow fadeInUp">', $value, '</p>';
        }
        
    }
endif;


//get asset_management image
if (!function_exists('fun_asset_management__bg')) :
    function fun_asset_management__bg()
    {
        global $prefix;
        $images = rwmb_meta($prefix . 'asset_management_image',array( 'size' => 'full' ));

        foreach ( $images as $image ) {
            echo  $image['url'];
        }
    }

endif;

//get asset_management first title
if (!function_exists('fun_asset_management__first_title')) :
    function fun_asset_management__first_title()
    {
        global $prefix;
        $values = rwmb_meta($prefix . 'first_title_asset_management');
        foreach ( $values as $value ) {
            echo  '<p class="wow fadeInUp">', $value, '</p>';
        }
    }

endif;

//get asset_management first paragraph
if (!function_exists('fun_asset_management__first')) :
    function fun_asset_management__first()
    {
        global $prefix;
        $values = rwmb_meta($prefix . 'first_asset_management');
        foreach ( $values as $value ) {
            echo  '<p class="wow fadeInUp">', $value, '</p>';
        }
    }

endif;

//get asset_management second title
if (!function_exists('fun_asset_management__second_title')) :
    function fun_asset_management__second_title()
    {
        global $prefix;
        $values = rwmb_meta($prefix . 'second_title_asset_management');
        foreach ( $values as $value ) {
            echo  '<p class="wow fadeInUp">', $value, '</p>';
        }
    }

endif;

//get asset_management second paragraph
if (!function_exists('fun_asset_management__second')) :
    function fun_asset_management__second()
    {
        global $prefix;
        $values = rwmb_meta($prefix . 'second_asset_management');
        foreach ( $values as $value ) {
            echo  '<p class="wow fadeInUp">', $value, '</p>';
        }
    }

endif;