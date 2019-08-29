<?php

function join_paths() {
    $paths = array();

    foreach (func_get_args() as $arg) {
        if ($arg !== '') { $paths[] = $arg; }
    }

    return preg_replace('#/+#','/',join('/', $paths));
}

function view($path) {
    if(file_exists(join_paths(__DIR__, 'views', '$path'))) {
        $fn = fopen(join_paths(__DIR__, 'views', '$path'), "r");
        $result = null;
        $fn = fopen(join_paths(__DIR__, 'views', '$path'), "r") or die("Unable to open file!");
        return $result;
    } else {
        echo 'TEST';
    }
}