<?php

function join_paths() {
    $paths = array();

    foreach (func_get_args() as $arg) {
        if ($arg !== '') { $paths[] = $arg; }
    }

    return preg_replace('#/+#', DIRECTORY_SEPARATOR, join(DIRECTORY_SEPARATOR, $paths));
}

function view($path) {
    $p = realpath(join_paths(__DIR__, '..', 'views', $path));
    if(file_exists($p)) {
        $handle = fopen($p, 'r') or die('Unable to open file!');
        $data = fread($p, filesize($p, 'r'));
        fclose($handle);
        echo $data;
        return $data;
    } else {
        return 'Octopi View ' . $path . ' does not exist.';
    }
}