<?php

class DataModel extends Model {
    public $websiteName = 'My Octopi Website';
    public $description = 'This website was made as an example for Octopi.  No username was provided!  Go to /user/{name} for a better version of myself.';
}

class DataModel2 extends Model {
    public $websiteName = 'My Octopi Website';
    public $description = 'Ah, you did it!  Thanks kind sir.';

    public function __construct($name) {
        $this->$websiteName = 'My Octopi Website!  Opened by ' . $name;
    }
}

$Route::get('/user', function() {
    return view('index', new DataModel);
});

$Route::get('/:argument', function($argument) {
    echo $argument;
    if($argument == 'bad') {
        echo 'No, u.';
    }
    return view('index', new DataModel2($name));
});