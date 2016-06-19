<?php

require_once __DIR__ . "/vendor/autoload.php";

$data = new ParseData\Code\DataParser();

echo '<pre>' . $data->ParseData() . '</pre>';
