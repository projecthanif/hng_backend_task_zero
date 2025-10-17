<?php


function returnJson(string $message = "", array|Exception|null $data = null, int $statusCode = 200): void
{
    http_response_code($statusCode);

    header('Content-Type: application/json');

    $response = [];

    if (!empty($message)) {
        $response['status'] = $message;
    }

    if ($data !== null) {
        $response = array_merge($response, $data);
    }

    echo json_encode($response, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
    exit;
}


function dd($data)
{
    echo "<pre>";
    print_r($data);
    echo "</pre>";
    exit;
}