<?php

namespace Marshmallow\NovaStyling;

class Theme
{
    public static function version()
    {
        $composer = file_get_contents(__dir__ . '/../composer.json');
        $json = json_decode($composer);
        return str_replace('v', '', $json->version);
    }
}
