#!/usr/bin/php
<?php

require_once  __DIR__ . '/../src/Mcc.php';

$file = fopen(__DIR__ .'/../resources/mcc.json', 'w');
fwrite($file, \Mcc\Mcc::toJson());
fclose($file);
