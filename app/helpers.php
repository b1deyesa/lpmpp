<?php

if (!function_exists('content')) {
    function content($value, $fallback = 'No content available')
    {
        return $value ?: '<small class="empty">'.$fallback.'</small>';
    }
}

if (!function_exists('image')) {
    function image($path, $default = 'assets/img/default.jpg')
    {
        return $path ? asset('storage/'.$path) : asset($default);
    }
}