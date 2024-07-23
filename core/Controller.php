<?php


class Controller
{

    function __construct()
    {

    }

    public function loadView($name = '', $args = [])
    {
        $path = BASE_PATH . "/src/views/{$name}";
        $data = [];

        foreach ($args as $key => $value) {
            $data[$key] = $value;
        }

        ob_start();
        include($path);
        $content = ob_get_contents();
        ob_end_clean();

        echo $content;
    }
}