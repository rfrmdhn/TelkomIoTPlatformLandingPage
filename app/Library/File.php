<?php

namespace App\Library;

class File
{
   public static function Read($url)
    {
        $filename = resource_path($url);
        $filename = str_replace(".js",".min.js",$filename);
        $f = fopen($filename, 'r');

        if ($f) {
            $contents = fread($f, filesize($filename));
            fclose($f);
            return $contents;
        }

    }
}