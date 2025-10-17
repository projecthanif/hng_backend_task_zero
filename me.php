<?php

require_once "./config.php";


function hng_task_zero()
{

    try {
        $ch = curl_init("https://catfact.ninja/fact");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        curl_close($ch);

        $res = json_decode($response);

        $time = new DateTime('now', new DateTimeZone('UTC'));
        $timestamp = $time->format('Y-m-d\TH:i:s\Z');

        $data = [
            "user" => [
                "email" => "iamustapha213@gmail.com",
                "name" => "Ibrahim Mustapha",
                "stack" => "php/laravel"
            ],
            "timestamp" => $timestamp,
            "fact" => $res->fact,
        ];


        returnJson("success", $data, 200);
    } catch (\Exception $e) {
        returnJson("error", $e, 500);
    }
}