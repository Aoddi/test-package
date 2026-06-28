<?php

require_once __DIR__ . '/vendor/autoload.php';

use FeoktistovAa\MyPackage\MyClass;

$test = new MyClass();

var_dump($test->sayHello());