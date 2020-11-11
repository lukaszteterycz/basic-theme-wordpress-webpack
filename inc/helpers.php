<?php

class Helpers {
    static function image_url( $name ) {
        echo get_template_directory_uri().'/assets/images/'.$name;
    }

    static function cut_text( $text, $length = 36, $after = '...' ) {
        $text_is_too_long = strlen($text) > $length;

        if ($text_is_too_long) 
            $text = substr($text, 0, $length) . $after;
        
        return $text;
    }
}