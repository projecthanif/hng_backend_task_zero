<?php

require_once "./me.php";
require_once "./config.php";

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);


switch ($uri) {
    case "/me":
        hng_task_zero();
        break;
    default:
        returnJson(message: "Invalid endpoint", statusCode: 404, data: []);
        break;
}
