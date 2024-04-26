# IntroCodeIgniter

A project to get started with code igniter for a job application

---

## Static Pages

The first step to start using codeIgniter is setting up static pages. There are a series of files and configurations to be set for this.

### 1- Setting up routing rules

What is routing?

* Routing is what associates URI with a controller's method.
* Basically, routing is responsible for responding to URL requests

To start setting routing rules, we must acces the routes file, located at `app/Config/Rules.php`.

If this is a new project, the file will only contain

```php
<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
```

This code specifies that any request without any specified content will be handled by the `index()` method in the `Home `controller.

Each rule is a regular expression mapped to a controller followed by a method name. When a request comes in, Code Igniter looks for the first match and calls the appropriate controller and method to handle it.

```php
use App\Controllers\Pages;

$routes->get('pages', [Pages::class, 'index']);
$routes->get('(:segment)', [Pages::class, 'view']);
```

If we add the previous lines to the code, we specify two other routing rules for the system:

1. Matches a GET method to the URI path `/pages`, and maps to the `index()` method of the `Pages `class
2. Matches a GET request to a URI segment adding the placeholder `(:segment)` and passes the parameter to the `view() `method of the `Pages `class.

---

### 2- First controller

Our next step is setting up controllers for our system. Controllers are classes that helps delegating the work, putting the entire system together as a glue.

To create a controller, we must access `app/Controllers/` and create a new file. For this project, i'll be creating the file `Pages.php `with the following code:

```php
<?php
namespace App\Controllers;

class Pages extends BaseController{

    public function index(){
        return view('welcome_message');
    }

    public function view($page = 'home'){

    } 
}
?>
```
