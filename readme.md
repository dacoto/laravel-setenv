# Laravel .env editor

![Tests](https://img.shields.io/github/workflow/status/dacoto/laravel-setenv/Tests/main?labelColor=444D56&label=Tests)
![GitHub](https://img.shields.io/github/license/dacoto/laravel-setenv?labelColor=444D56&label=License)
![GitHub release (latest by date)](https://img.shields.io/github/v/release/dacoto/laravel-setenv?labelColor=444D56&label=Release)

## Installation
You can install this package through [Composer](https://getcomposer.org) with the following steps:

#### Step 1 - Require package
At the root of your application directory, run the following command:

```shell
$ composer require dacoto/laravel-setenv
```

## Usage
### Working with facade
Laravel Set Env has a facade with the name `dacoto\SetEnv\Facades\SetEnv`. You can perform all operations through this facade.

**Example:**

```php
<?php namespace Your\Namespace;

// ...

use dacoto\SetEnv\Facades\SetEnv;

class YourClass
{
    public function yourMethod()
    {
        SetEnv::doSomething();
    }
}
```

### Using dependency injection
This package also supports dependency injection. You can easily inject an instance of the `dacoto\SetEnv` class into your controller or other classes.

**Example:**

```php
<?php namespace App\Http\Controllers;

// ...

use dacoto\SetEnv;

class TestDotenvEditorController extends Controller
{
    protected $editor;

    public function __construct(SetEnv $editor)
    {
        $this->editor = $editor;
    }

    public function doSomething()
    {
        $editor = $this->editor->doSomething();
    }
}
```
