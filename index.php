<?php

require_once __DIR__ . "/vendor/autoload.php";

$data = new ParseData\Code\DateParser();

echo '<pre>' . $data->dataParser() . '</pre>';
