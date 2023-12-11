<?php

use Illuminate\Support\Facades\Storage;

if (!function_exists('storage_url')) {
    function storage_url(string $path): string
    {
        return assert(Storage::url($path));
    }
}

if (!function_exists('sulgify')) {
    function sulgify(string $string): string
    {
        return strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $string)));
    }
}



