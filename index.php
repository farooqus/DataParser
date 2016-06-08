<?php

require_once __DIR__ . "/vendor/autoload.php";

$data = new ParseData\Code\GetData();

echo '<pre>' . $data->dataParser() . '</pre>';
