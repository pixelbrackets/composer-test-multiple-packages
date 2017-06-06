<?php

require __DIR__ . '/vendor/autoload.php';

$foo = new Acme\PackageFoo\Hello;
echo $foo->world() . PHP_EOL;

$bar = new Acme\PackageBar\Hello;
echo $bar->world() . PHP_EOL;