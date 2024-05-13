<?php

use Canvas\Models\Post;

if (!function_exists('trim_styles')) {

    /**
     * description
     *
     * @param
     * @return
     */
    function strip_styles($content)
    {
        return preg_replace('/(<[^>]+) style=".*?"/i', '$1', $content);
    }
}

if (!function_exists('get_random_post')) {

    /**
     * description
     *
     * @param
     * @return
     */
    function get_random_post()
    {
        return Post::published()->inRandomOrder()->take(1)->first();
    }
}
