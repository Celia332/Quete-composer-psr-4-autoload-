<?php

require_once __DIR__ . '/composer/autoload_real.php';

use App\Wcs\Hello;


$hello = new Hello;
echo $hello->talk();














