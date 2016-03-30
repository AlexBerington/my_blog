<?php

class view
{
    public static function render($template, array $environment = [])
    {
        extract($environment);

        ob_start();
        $path = 'template/'.$template.'.php';
        if (is_file($path) === false) {
            throw new Exception('bad template : ' . $path);
        }
        include $path;
        $contents = ob_get_clean();

        return $contents;
    }

}