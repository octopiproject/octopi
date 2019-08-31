# Octopi
Octopi is a PHP framework for robust applications.  It includes:

- A routing system
- Models & views
- More soon!

## Routing
Octopi's routing system uses paths and controllers to get your user to where you want them to be.
```php
/* GET Request Routing */
$Route::get($path, $controller);
```
`$path` is a string of the path it calls the controller on, and `$controller` is a function that "controls" what the web page does.  Routes should be implemented in `routes/routes.php`.  Each function should return a single value that is sent to the web page.

```php
/*
Example Hello World Application
*/
$Route::get('/', function() {
    return 'Hello, world!';
});
```

You can also make "placeholder" values that the website viewer supplies.

```php
$Route::get('/:page', function($page) {
    return $page;
});
```

So if you go to `localhost:8000/hello`, it should output:
```
hello
```

## Models & Views
In the `routes/routes.php` file, define some models the extend the `Model` class.

```php
class DataModel extends Model {
    public $websiteName = 'Octopi Website';
}
```

Now, you can send it to a `view`, which is supplied in the `views/` folder.  An example view was placed called `index.html`, but don't include the `.html`.

```php
class DataModel extends Model {
    public $websiteName = 'Octopi Website';
}

$Route::get('/', function() {
    return view('index', new DataModel);
});
```
```html

```

You can also supply a view without a `Model`.

```php
$Route::get('/', function() {
    return view('index');
})
```