<?php

use Nette\Neon\Neon;

require 'vendor/autoload.php';

$data = [];
foreach(range(1,10) as $i) {
    $data[] = array_fill(0, 5000, 'banana'.$i);
}

Neon::encode($data);
