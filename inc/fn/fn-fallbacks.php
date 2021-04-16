<?php
//Excerpt Expert
if (!function_exists('excerpt')) {
    function excerpt($limit)
    {
        //        $excerpt = explode(' ', get_the_excerpt(), $limit);


        $excerpt = get_the_excerpt();

        $excerpt = preg_replace('`\[[^\]]*\]`', '', $excerpt);
        $excerpt = preg_replace('/PUBLICIDAD/', '', $excerpt);

        if (strlen($excerpt) > $limit) {
            $excerpt = wp_html_excerpt($excerpt, $limit, $more = null) . '...';
        }

        return $excerpt;
    }
}

//Trim The Content
if (!function_exists('trimmed_content')) {
    function trimmed_content($limit)
    {
        //        $excerpt = explode(' ', get_the_excerpt(), $limit);


        $trimmed_content = get_the_content();
        $new_trimmed_content = substr($trimmed_content, 0, $limit);

        return $new_trimmed_content;
    }
}


//Add Mime Types
if(! function_exists('cc_mime_types')) :
    function cc_mime_types($mimes) {
        $mimes['svg'] = 'image/svg+xml';
        return $mimes;
    }

    add_filter('upload_mimes', 'cc_mime_types');

endif;