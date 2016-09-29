<?php
/**
 * Created by PhpStorm.
 * User: reglobe
 * Date: 29/9/16
 * Time: 12:02 PM
 */
require_once __DIR__ . '/../vendor/autoload.php'; // Autoload files using Composer autoload

use HelloWorld\SayHello;

echo SayHello::world();

