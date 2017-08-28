<?php

use Jmondi\Blog\HelloWorld;

require __DIR__ . '/../vendor/autoload.php';

$info = new HelloWorld();
echo $info->execute();
phpinfo();
